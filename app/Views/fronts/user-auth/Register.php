<div class="container">
    <div class="row flex-center min-vh-100 py-5">
        <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3">
            <a class="d-flex flex-center text-decoration-none mb-4" href="<?= route_to('home') ?>">
                <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                    <img src="<?= base_url('assets/img/icons/logo.png') ?>" alt="phoenix" width="58" />
                </div>
            </a>
            <div class="text-center mb-4">
                <h3 class="text-body-highlight">Sign Up</h3>
                <p class="text-body-tertiary">Create your account today</p>
            </div>
            <?= form_open('user/register'); ?>
            <?= csrf_field() ?>
            <?php if (session()->has('success')): ?>
                <div class="alert alert-outline-success d-flex align-items-center py-2 flash_msg" role="alert">
                    <span class="fas fa-check-circle text-success fs-6 me-3"></span>
                    <p class="mb-0 flex-1"><?= session('success'); ?></p>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <?php if (session()->has('error')): ?>
                <div class="alert alert-outline-danger d-flex align-items-center py-2 flash_msg" role="alert">
                    <span class="fas fa-times-circle text-danger fs-6 me-3"></span>
                    <p class="mb-0 flex-1"><?= session('error'); ?></p>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <div class="mb-3 text-start">
                <label class="form-label" for="full_name">Name</label>
                <input class="form-control" id="full_name" type="text" name="full_name" minlength="0" maxlength="50"
                    value="" placeholder="Full Name" required />
            </div>
            <div class="mb-3 text-start">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" id="email" type="email" name="email" minlength="0" maxlength="50"
                    value="" placeholder="name@example.com" required />
            </div>
            <div class="mb-3 text-start">
                <label class="form-label" for="phone">Phone no</label>
                <input class="form-control" id="phone" type="tel" name="phone" min="0" max="20" value=""
                    placeholder="mobile no" required />
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
                        <input class="form-control form-icon-input pe-6" id="confirmPassword" type="password"
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
            <div class="form-check mb-3">
                <input class="form-check-input" id="terms" type="checkbox" name="terms" value="1" />
                <label class="form-label fs-9 text-transform-none" for="terms">
                    I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a>
                </label>
            </div>
            <button class="btn btn-primary w-100 mb-3">Sign up</button>
            <?= form_close(); ?>
            <div class="text-center">
                <a class="fs-9 fw-bold" href="<?= route_to('user.login') ?>">Sign in to an existing account</a>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('vendors/telephoneinput/js/intlTelInputWithUtils.min.js') ?>"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const input = document.querySelector("#phone");
        const iti = window.intlTelInput(input, {
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                fetch("https://ipapi.co/json")
                    .then(res => res.json())
                    .then(data => {
                        callback(data.country_code);
                    })
                    .catch(() => {
                        callback("us"); // fallback
                    });
            },
            utilsScript: "<?= base_url('vendors/telephoneinput/js/utils.js') ?>", // include only if you need formatting/validation
            separateDialCode: true
        });

        // Optional: validation on blur
        input.addEventListener("blur", function() {
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    input.classList.remove("is-invalid");
                    input.classList.add("is-valid");
                } else {
                    input.classList.remove("is-valid");
                    input.classList.add("is-invalid");
                }
            }
        });

        // Optional: get number on form submit
        const form = document.querySelector("form"); // adjust if needed
        if (form) {
            form.addEventListener("submit", function(e) {
                input.value = iti.getNumber(); // Get the input contry code with phone no.
            });
        }
    });
</script>