<!--error handel
<div class="position-relative">
    <div class="position-absolute top-0 end-0  mt-3 me-3">
        <div class="alert alert-subtle-success alert-dismissible fade show pt-2 pb-2 ps-3" role="alert">
            <span class="m-0 fs-span">You should check in on some ofsdfasfas</span>
            <button class="btn-close top-50 start-ll translate-middle p-2" type="button" data-bs-dismiss="alert"
                aria-label="Close"></button>
        </div>
    </div>
</div> -->
<div class="container">
    <div class="row flex-center min-vh-100 py-5">
        <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3">
            <a class="d-flex flex-center text-decoration-none mb-4" href="<?= route_to('home') ?>">
                <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                    <img src="<?= base_url('assets/img/icons/logo.png'); ?>" alt="phoenix" width="58">
                </div>
            </a>
            <div class="text-center mb-7">
                <h3 class="text-body-highlight">Sign In</h3>
            </div>
            <?php $validation = \Config\Services::validation(); ?>
            <?= form_open('admin'); ?>
            <!-- <form action=""> -->
            <?= csrf_field() ?>
            <!-- <div class="alert alert-outline-danger d-flex align-items-center py-3 " role="alert">
                <span class="fas fa-times-circle text-danger fs-5 me-3"></span>
                <p class="mb-0 flex-1">error</p>
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> -->
            <?php if (!empty(session()->getFlashdata('success'))): ?>
                <div class="alert alert-outline-success d-flex align-items-center py-3" role="alert">
                    <span class="fas fa-check-circle text-success fs-5 me-3"></span>
                    <p class="mb-0 flex-1"><?= session()->getFlashdata('success') ?></p>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <?php if (!empty(session()->getFlashdata('fail'))): ?>
                <div class="alert alert-outline-danger d-flex align-items-center py-3 " role="alert">
                    <span class="fas fa-times-circle text-danger fs-5 me-3"></span>
                    <p class="mb-0 flex-1"><?= session()->getFlashdata('fail') ?></p>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <div class="mb-3 text-start">
                <label class="form-label" for="login_id">Email address or Username</label>
                <div class="form-icon-container">
                    <input class="form-control form-icon-input" id="login_id" type="text" name="login_id"
                        placeholder="name@example.com" value="<?= set_value('login_id'); ?>">
                    <svg class="svg-inline--fa fa-user text-body fs-9 form-icon" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="user" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                        </path>
                    </svg>
                </div>
                <?php if ($validation->getError('login_id')): ?>
                    <p class="fs-9 text-warning"><?= $validation->getError('login_id'); ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3 text-start">
                <label class="form-label" for="password">Password</label>
                <div class="form-icon-container" data-password="data-password">
                    <input class="form-control form-icon-input pe-6" id="password" type="password" name="password" placeholder="Password" data-password-input="data-password-input" value="<?= set_value('password'); ?>">
                    <svg class="svg-inline--fa fa-key text-body fs-9 form-icon" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="key" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z">
                        </path>
                    </svg>
                    <button type="button" class="btn px-3 py-0 position-absolute top-50 end-0 translate-middle-y fs-9 text-body-tertiary"
                        data-password-toggle="data-password-toggle">
                        <span class="far fa-eye show"></span>
                        <span class="far fa-eye-slash hide"></span>
                    </button>
                </div>
                <?php if ($validation->getError('password')): ?>
                    <p class="fs-9 text-warning"><?= $validation->getError('password'); ?></p>
                <?php endif; ?>
            </div>

            <div class="row flex-between-center mb-7">
                <div class="col-auto">
                    <div class="form-check mb-0">
                        <input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked">
                        <label class="form-check-label mb-0" for="basic-checkbox">Remember me</label>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- <a class="fs-9 fw-semibold" href="<?= route_to('user.forgotPassword'); ?>">Forgot password</a> -->
                </div>
            </div>
            <button class="btn btn-primary w-100 mb-3" type="submit">Sign In</button>
            <div class="text-center">
                <a class="fs-9 fw-bold" href="<?= route_to('admin.register'); ?>">Create an account</a>
            </div>
            <!-- </form> -->
            <?= form_close() ?>
        </div>
    </div>
</div>