<h2 class="text-bold text-body-emphasis mb-5">Forgot Password</h2>

<div class="row">
    <?php $validation = \Config\Services::validation(); ?>
    <?= form_open('admin/forgot_password') ?>
    <?= csrf_field() ?>
    <input type="hidden" name="step" value="<?= esc($step); ?>" />
    <?php if (!empty($emailError)) : ?>
        <span class="badge bg-danger"><?= esc($emailError); ?></span>
    <?php endif; ?>
    <?php if (!empty($oldpwdError)) : ?>
        <span class="badge bg-danger"><?= esc($oldpwdError); ?></span>
    <?php endif; ?>
    <?php if (!empty($error)) : ?>
        <span class="badge bg-warning"><?= esc($error); ?></span>
    <?php endif; ?>
    <?php if (!empty($success)) : ?>
        <p class=" alert-success"></p>
        <span class="badge bg-success"><?= esc($success); ?></span>
    <?php endif; ?>

    <?php if ($step === 'old_verification'): ?>
        <div class="col-md-6">
            <div class="col-md-8 mb-3 text-start">
                <label class="form-label" for="email">Email address</label>
                <div class="form-icon-container">
                    <input class="form-control form-icon-input" id="email" type="email" name="email"
                        value="<?= set_value('email') ?>" placeholder="name@example.com">
                    <span class="fas fa-user text-body fs-9 form-icon"></span>
                </div>
            </div>
            <div class="col-md-8 mb-3 text-start">
                <label class="form-label" for="password">Current Password</label>
                <div class="position-relative" data-password>
                    <div class="form-icon-container">
                        <input class="form-control form-icon-input pe-6" id="password" type="password" name="password"
                            placeholder="Current Password" data-password-input />
                        <span class="fas fa-key text-900 fs-9 form-icon"></span>
                    </div>
                    <button type="button" class="btn px-3 py-0 position-absolute top-50 end-0 translate-middle-y fs-9 text-body-tertiary"
                        data-password-toggle>
                        <span class="far fa-eye show"></span>
                        <span class="far fa-eye-slash hide"></span>
                    </button>
                </div>
            </div>
            <div class="col-6">
                <button class="btn btn-primary mb-3" type="submit">Next</button>
            </div>
        </div>
    <?php elseif ($step === 'new_update'): ?>
        <div class="col-md-6">
            <div class="col-md-8 mb-3 text-start">
                <label class="form-label" for="newpwd">New Password</label>
                <div class="position-relative" data-password>
                    <div class="form-icon-container">
                        <input class="form-control form-icon-input pe-6" id="newpwd" type="password" name="newpwd"
                            placeholder="New Password" data-password-input />
                        <span class="fas fa-key text-900 fs-9 form-icon"></span>
                    </div>
                    <button type="button" class="btn px-3 py-0 position-absolute top-50 end-0 translate-middle-y fs-9 text-body-tertiary"
                        data-password-toggle>
                        <span class="far fa-eye show"></span>
                        <span class="far fa-eye-slash hide"></span>
                    </button>
                </div>
            </div>
            <div class="col-md-8 mb-3 text-start">
                <label class="form-label" for="repwd">Confirm Password</label>
                <div class="position-relative" data-password>
                    <div class="form-icon-container">
                        <input class="form-control form-icon-input pe-6" id="repwd" type="password" name="repwd"
                            placeholder="Confirm Password" data-password-input />
                        <span class="fas fa-key text-900 fs-9 form-icon"></span>
                    </div>
                    <button type="button" class="btn px-3 py-0 position-absolute top-50 end-0 translate-middle-y fs-9 text-body-tertiary"
                        data-password-toggle>
                        <span class="far fa-eye show"></span>
                        <span class="far fa-eye-slash hide"></span>
                    </button>
                </div>
            </div>
            <div class="col-6">
                <button class="btn btn-primary mb-3" type="submit">Update Password</button>
            </div>
        </div>
    <?php endif; ?>
    <?= form_close(); ?>
</div>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>