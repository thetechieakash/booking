<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Controllers\RenderAdminViewController;
use App\Models\AdminModel;
use App\Libraries\Hash;

class Forgotpassword extends BaseController
{
    protected $helpers = ['url', 'form'];

    public function index()
    {
        $session = session();
        $step = $session->get('step') ?? 'old_verification';

        $data = [
            'pageTitle'   => 'Forgot Password',
            'step'        => $step,
            'emailError'  => $session->get('email'),
            'oldpwdError' => $session->get('oldpwd'),
            'error'       => $session->getFlashdata('error'),
            'success'     => $session->getFlashdata('success')
        ];

        // Cleanup session flash/state after using
        $session->remove(['step', 'email', 'oldpwd']);

        $render = new RenderAdminViewController();
        return $render->renderViewAdmin('fronts/admin/Forgot-password', $data);
    }

    public function forgotPasswordHandler()
    {
        $request = $this->request;
        $data    = $request->getPost();
        $step    = $request->getVar('step');
        $model   = new AdminModel();

        if ($step === 'old_verification') {
            $email = $data['email'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return redirect()->route('admin.forgot.password')->with('email', 'Invalid email format.');
            }

            $admin = $model->where('email', $email)->first();
            if (!$admin) {
                return redirect()->route('admin.forgot.password')->with('email', 'Email not found.');
            }

            if (!Hash::check($data['password'], $admin['password'])) {
                return redirect()->route('admin.forgot.password')->with('oldpwd', 'Incorrect password.');
            }

            // Step passed, store ID and move forward
            session()->set([
                'step'           => 'new_update',
                'reset_admin_id' => $admin['id']
            ]);

            return redirect()->route('admin.forgot.password');
        }

        if ($step === 'new_update') {
            if ($data['newpwd'] !== $data['repwd']) {
                session()->setFlashdata('error', 'Passwords do not match!');
                session()->set('step', 'new_update');
                return redirect()->route('admin.forgot.password');
            }

            $adminId = session()->get('reset_admin_id');
            if (!$adminId) {
                return redirect()->route('admin.forgot.password')->with('error', 'Session expired. Please try again.');
            }

            // Update password
            $hashedPassword = Hash::make($data['repwd']);
            $model->update($adminId, ['password' => $hashedPassword]);

            // Clear session state
            session()->remove(['step', 'reset_admin_id']);

            return redirect()->route('admin.forgot.password')->with('success', 'Password updated successfully.');
        }

        // If invalid step or tampering
        session()->setFlashdata('error', 'Invalid request.');
        return redirect()->route('admin.forgot.password');
    }
}
