<h2 class="text-bold text-body-emphasis mb-5">Forgot Password</h2>
<div class="row justify-content-center">
    <div class="col-md-5">
        <?php $validation = \Config\Services::validation(); ?>
        <?= form_open('admin/forgot_password') ?>
        <?= csrf_field() ?>
        <input type="hidden" name="step" value="<?= esc($step) ?>" />

        <?php if ($step === 'email'): ?>
            <div class="mb-3 text-start">
                <label class="form-label" for="email">Email address</label>
                <div class="form-icon-container">
                    <input class="form-control form-icon-input" id="email" type="email" name="email"
                        placeholder="name@example.com" value="<?= set_value('email'); ?>">
                    <svg class="svg-inline--fa fa-user text-body fs-9 form-icon" ...></svg>
                </div>
                <?php if ($validation->getError('email')): ?>
                    <p class="fs-9 text-warning"><?= $validation->getError('email'); ?></p>
                <?php endif; ?>
                <button class="btn btn-primary w-100 my-3" type="submit">Send OTP</button>
            </div>

        <?php elseif ($step === 'otp'): ?>
            <div class="mb-3 text-start">
                <label class="form-label" for="otp">Enter OTP (sent to <?= esc($email) ?>):</label>
                <div class="form-icon-container">
                    <input class="form-control form-icon-input" id="otp" type="text" name="otp"
                        placeholder="Enter OTP" value="<?= set_value('otp'); ?>">
                    <svg class="svg-inline--fa fa-user text-body fs-9 form-icon" ...></svg>
                </div>
                <?php if ($validation->getError('otp')): ?>
                    <p class="fs-9 text-warning"><?= $validation->getError('otp'); ?></p>
                <?php endif; ?>
                <button class="btn btn-primary w-100 my-3" type="submit">Verify OTP</button>
            </div>

        <?php elseif ($step === 'password'): ?>
            <div class="row g-3 mb-3">
                <div class="col-sm-6">
                    <label class="form-label" for="password">New Password</label>
                    <div class="position-relative" data-password>
                        <input class="form-control form-icon-input pe-6" id="password" type="password"
                            name="password" placeholder="New Password" data-password-input
                            value="<?= set_value('password'); ?>" />
                        <button type="button" class="btn px-3 py-0 position-absolute top-50 end-0 translate-middle-y fs-9 text-body-tertiary"
                            data-password-toggle>
                            <span class="far fa-eye show"></span>
                            <span class="far fa-eye-slash hide"></span>
                        </button>
                    </div>
                    <?php if ($validation->getError('password')): ?>
                        <p class="fs-9 text-warning"><?= $validation->getError('password'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6">
                    <label class="form-label" for="confirm_password">Confirm Password</label>
                    <div class="position-relative" data-password>
                        <input class="form-control form-icon-input pe-6" id="confirm_password" type="password"
                            name="confirm_password" placeholder="Confirm Password" data-password-input
                            value="<?= set_value('confirm_password'); ?>" />
                        <button type="button" class="btn px-3 py-0 position-absolute top-50 end-0 translate-middle-y fs-9 text-body-tertiary"
                            data-password-toggle>
                            <span class="far fa-eye show"></span>
                            <span class="far fa-eye-slash hide"></span>
                        </button>
                    </div>
                    <?php if ($validation->getError('confirm_password')): ?>
                        <p class="fs-9 text-warning"><?= $validation->getError('confirm_password'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <button class="btn btn-primary w-100 mb-3" type="submit">Reset Password</button>
        <?php endif; ?>
        <?= form_close(); ?>
    </div>
</div>