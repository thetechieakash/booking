<div class="container">
    <div class="row flex-center">
        <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3">
            <h2 class="fs-5 mb-4 mb-xl-5">Add New Admin</h2>
            <?= form_open('admin/add_admin'); ?>
            <?= csrf_field() ?>
            <?php if (session()->getFlashdata('success')): ?>
                <span class="badge bg-success"><?= esc(session()->getFlashdata('success')) ?></span>
            <?php endif; ?>
            <?php if (session()->getFlashdata('errors')): ?>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <span class="badge bg-danger"><?= esc($error) ?></span>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="mb-3 text-start">
                <label class="form-label" for="full_name">Name</label>
                <input class="form-control" id="full_name" type="text" name="full_name" minlength="0" maxlength="50" value="<?= set_value('full_name') ?>" placeholder="Full Name" required />
            </div>
            <div class="mb-3 text-start">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" id="email" type="email" name="email" minlength="0" maxlength="50"
                    value="<?= set_value('email') ?>" placeholder="name@example.com" required />
            </div>
            <div class="mb-3 text-start">
                <label class="form-label" for="inputState">Role <span class="text-danger">*</span></label>
                <select class="form-select" id="inputState" name="role">
                    <option value="superadmin" <?= set_select('role', 'superadmin') ?>>Super Admin</option>
                    <option value="admin" <?= set_select('role', 'admin') ?>>Admin</option>
                    <option value="editor" <?= set_select('role', 'editor') ?>>Editor</option>
                </select>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-sm-6">
                    <label class="form-label" for="password">Password</label>
                    <div class="position-relative" data-password="data-password">
                        <input class="form-control form-icon-input pe-6" id="password" type="password"
                            name="password" placeholder="Password" data-password-input="data-password-input"
                            minlength="5" required />
                        <button type="button" class="btn px-3 py-0 position-absolute top-50 end-0 translate-middle-y fs-9 text-body-tertiary"
                            data-password-toggle="data-password-toggle">
                            <span class="far fa-eye show"></span>
                            <span class="far fa-eye-slash hide"></span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="form-label" for="confirm_password">Confirm Password</label>
                    <div class="position-relative" data-password="data-password">
                        <input class="form-control form-icon-input pe-6" id="confirm_password" type="password"
                            name="confirm_password" placeholder="Confirm Password"
                            data-password-input="data-password-input" minlength="5" required />
                        <button type="button" class="btn px-3 py-0 position-absolute top-50 end-0 translate-middle-y fs-9 text-body-tertiary"
                            data-password-toggle="data-password-toggle">
                            <span class="far fa-eye show"></span>
                            <span class="far fa-eye-slash hide"></span>
                        </button>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary w-100 mb-3">Register Admin</button>
            <?= form_close(); ?>
            <div class="text-center"><a class="fs-9 fw-bold" href="<?= route_to('admin.forgot.password') ?>">Forgot Password</a></div>
        </div>
    </div>
</div>