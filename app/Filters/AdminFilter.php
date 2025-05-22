<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\CIAuth;
use App\Models\AdminModel;

class AdminFilter implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return RequestInterface|ResponseInterface|string|void
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        // 🔐 Handle "Remember Me" functionality if user is not already logged in
        if (!session()->has('admindata') && isset($_COOKIE['remember_token'])) {
            $adminModel = new AdminModel();
            $adminInfo = $adminModel->where('remember_token', $_COOKIE['remember_token'])->first();

            // ⚠️ Optional: Match hashed token instead of plain text for security
            if ($adminInfo && hash_equals($adminInfo['remember_token'], $_COOKIE['remember_token'])) {
                CIAuth::setCIAuth($adminInfo);
            }
        }

        // ⛔ Route: Prevent authenticated users from accessing login pages
        if ($arguments[0] === 'auth') {
            if (CIAuth::check()) {
                return redirect()->route('admin.home');
                // $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                // return redirect()->to("admin?refer=$actual_link")->with('fail', 'Please Log In first!');
            }
        }

        // ✅ Route: Allow only authenticated admins
        if ($arguments[0] === 'admin') {
            if (!CIAuth::check()) {
                // Generate full current URL to pass as "refer" query
                $actual_link = (string) $request->getUri();
                return redirect()->to("admin?refer=" . urlencode($actual_link))->with('fail', 'Please Log In first!');
                // return redirect()->route('admin.login')->with('fail', 'Please Log In first!');
            }
        }
        // if ($arguments[0] == 'admin') {
        //     if (!CIAuth::check()) {
        //         $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        //         return redirect()->to("admin?refer=$actual_link")->with('fail', 'Please Log In first!');
        //     }
        // }
        
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return ResponseInterface|void
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
