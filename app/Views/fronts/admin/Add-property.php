<?php
$tabs = ['tab1', 'tab2', 'tab3', 'tab4', 'tab5', 'tab6', 'tab7'];
$currentIndex = array_search($activeTab, $tabs);
function tabClass($key, $currentIndex, $tabs)
{
    $i = array_search($key, $tabs);
    if ($i < $currentIndex) return 'done disabled';
    if ($i === $currentIndex) return 'active';
    return 'disabled';
}
?>
<?php if (session()->has('success')): ?>
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
        <div class="toast align-items-center text-white bg-success-emphasis border-0 fade toast-success hide" id="icon-copied-toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex" data-bs-theme="dark">
                <div class="toast-body p-3">
                    <code class="text-white"><?= session()->get('success') ?></code>
                </div>
                <button class="btn-close me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if (session()->has('errors')): ?>
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
        <div class="toast align-items-center text-white bg-danger border-0 fade toast-errors hide" id="icon-copied-toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex" data-bs-theme="dark">
                <div class="toast-body p-3">
                    <p class="text-white m-0"><?= session()->get('errors') ?></p>
                </div>
                <button class="btn-close me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="mb-9">
    <h2 class="fs-5 mb-4 mb-xl-5">Add New Property</h2>
    <div class="theme-wizard" data-theme-wizard="data-theme-wizard" data-wizard-modal-disabled="data-wizard-modal-disabled">
        <div class="row gx-0 gx-xl-5">
            <div class="col-xl-4 order-xl-1">
                <div class="scrollbar mb-4">
                    <ul class="nav justify-content-between flex-nowrap nav-wizard nav-wizard-vertical-xl" data-tab-map-container="data-tab-map-container" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= tabClass('tab1', $currentIndex, $tabs) ?> py-0 py-xl-3" href="#add-property-wizard-tab1" data-bs-toggle="tab" data-wizard-step="1" aria-selected="true" role="tab">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <svg class="svg-inline--fa fa-file nav-item-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"></path>
                                            </svg>
                                            <svg class="svg-inline--fa fa-check check-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Info</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= tabClass('tab2', $currentIndex, $tabs) ?> py-0 py-xl-3" href="#add-property-wizard-tab2" data-bs-toggle="tab" data-wizard-step="2" aria-selected="false" tabindex="-1" role="tab">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <svg class="svg-inline--fa fa-location-dot nav-item-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                                            </svg>
                                            <svg class="svg-inline--fa fa-check check-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Location</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= tabClass('tab3', $currentIndex, $tabs) ?> py-0 py-xl-3" href="#add-property-wizard-tab3" data-bs-toggle="tab" data-wizard-step="3" aria-selected="false" tabindex="-1" role="tab">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <svg class="svg-inline--fa fa-mug-saucer nav-item-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mug-saucer" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M96 64c0-17.7 14.3-32 32-32H448h64c70.7 0 128 57.3 128 128s-57.3 128-128 128H480c0 53-43 96-96 96H192c-53 0-96-43-96-96V64zM480 224h32c35.3 0 64-28.7 64-64s-28.7-64-64-64H480V224zM32 416H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32z"></path>
                                            </svg>
                                            <svg class="svg-inline--fa fa-check check-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Amenities</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= tabClass('tab4', $currentIndex, $tabs) ?> py-0 py-xl-3" href="#add-property-wizard-tab4" data-bs-toggle="tab" data-wizard-step="4" aria-selected="false" tabindex="-1" role="tab">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <svg class="svg-inline--fa fa-images nav-item-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="images" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M160 32c-35.3 0-64 28.7-64 64V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160zM396 138.7l96 144c4.9 7.4 5.4 16.8 1.2 24.6S480.9 320 472 320H328 280 200c-9.2 0-17.6-5.3-21.6-13.6s-2.9-18.2 2.9-25.4l64-80c4.6-5.7 11.4-9 18.7-9s14.2 3.3 18.7 9l17.3 21.6 56-84C360.5 132 368 128 376 128s15.5 4 20 10.7zM192 128a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120z"></path>
                                            </svg>
                                            <svg class="svg-inline--fa fa-check check-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Photos</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= tabClass('tab5', $currentIndex, $tabs) ?> py-0 py-xl-3" href="#add-property-wizard-tab5" data-bs-toggle="tab" data-wizard-step="5" aria-selected="false" tabindex="-1" role="tab">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <svg class="svg-inline--fa fa-dollar-sign nav-item-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z"></path>
                                            </svg>
                                            <svg class="svg-inline--fa fa-check check-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Finance</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= tabClass('tab6', $currentIndex, $tabs) ?> py-0 py-xl-3" href="#add-property-wizard-tab6" data-bs-toggle="tab" data-wizard-step="6" aria-selected="false" tabindex="-1" role="tab">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <svg class="svg-inline--fa fa-shield-halved nav-item-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shield-halved" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0zm0 66.8V444.8C394 378 431.1 230.1 432 141.4L256 66.8l0 0z"></path>
                                            </svg>
                                            <svg class="svg-inline--fa fa-check check-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Policies</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= tabClass('tab7', $currentIndex, $tabs) ?> py-0 py-xl-3" href="#add-property-wizard-tab7" data-bs-toggle="tab" data-wizard-step="7" aria-selected="false" tabindex="-1" role="tab">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Done</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-8 flex-1">
                <div class="row">
                    <div class="col-xxl-8">
                        <div class="tab-content">
                            <!-- Hotel tab -->
                            <div class="tab-pane <?= ($activeTab == 'tab1') ? 'active show' : '' ?>" role="tabpanel" aria-labelledby="add-property-wizard-tab1" id="add-property-wizard-tab1">
                                <?= form_open('admin/save-hotel', ["id" => "addPropertyWizardForm1", "data-wizard-form" => "1", "enctype" => "multipart/form-data"]); ?>
                                <?= csrf_field() ?>
                                <h3 class="mb-6">Basic information</h3>
                                <h4 class="mb-4">Property Information</h4>
                                <div class="form-floating">
                                    <input class="form-control" type="text" name="property-name" id="property-name" placeholder="Property Name">
                                    <label for="property-name">Property Name</label>
                                </div>
                                <div class="form-floating my-3">
                                    <textarea class="form-control" placeholder="Description" name="description" id="description" style="height: 162px"></textarea>
                                    <label for="description">DESCRIPTION</label>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-4 col-lg-12 col-xl-4">
                                        <div class="form-icon-container">
                                            <div class="form-floating">
                                                <select class="form-select form-icon-input" name="rating" id="rating">
                                                    <option selected="selected" <?= set_select('rating', '5') ?>>5 star</option>
                                                    <option value="4" <?= set_select('rating', '4') ?>>4 star</option>
                                                    <option value="3" <?= set_select('rating', '3') ?>>3 star</option>
                                                    <option value="2" <?= set_select('rating', '2') ?>>2 star</option>
                                                    <option value="1" <?= set_select('rating', '1') ?>>1 star</option>
                                                </select>
                                                <label class="text-body-tertiary form-icon-label" for="rating">Rating</label>
                                            </div>
                                            <svg class="svg-inline--fa fa-star text-warning form-icon fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mt-6 mb-3">Contact Information</h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control input-spin-none" type="email" name="email" id="email" placeholder="Email Address">
                                            <label for="email">Email Address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-floating">
                                            <input class="form-control input-spin-none" type="number" name="phone" id="phone" placeholder="Phone number">
                                            <label for="phone">Phone number</label>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mt-6 mb-3">Is it part of a hotel / property chain?</h4>
                                <div class="row align-items-center g-3">
                                    <div class="col-sm-auto">
                                        <div class="form-check form-check-inline me-4 me-sm-7 mb-0">
                                            <input class="form-check-input" id="no1" type="radio" name="checkIsHotelRadio" value="no" checked="checked">
                                            <label class="form-check-label" for="no1">No</label>
                                        </div>
                                        <div class="form-check form-check-inline me-0 mb-0">
                                            <input class="form-check-input" id="yes1" type="radio" name="checkIsHotelRadio" value="yes">
                                            <label class="form-check-label" for="yes1">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto flex-1">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" name="chain_name" id="chain_name" placeholder="Name of Company, Group or Chain" disabled>
                                            <label for="chain_name">Name of Company, Group or Chain</label>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mt-6 mb-3">Upload thumbnail</h4>
                                <div class="mb-3">
                                    <label class="form-label" for="customFile"><span>600 X 750 px</span></label>
                                    <input class="form-control" id="customFile" name="thumbnail" type="file" accept=".jpg, .jpeg, .png, .webp" />
                                </div>
                                <div class="mt-6">
                                    <button class="btn btn-primary px-6 px-sm-11" type="submit">Next</button>
                                </div>
                                <?= form_close(); ?>
                            </div>
                            <!-- Hotel Location tab -->
                            <div class="tab-pane <?= ($activeTab == 'tab2') ? 'active show' : '' ?>" role="tabpanel" aria-labelledby="add-property-wizard-tab2" id="add-property-wizard-tab2">
                                <?= form_open('admin/save-location/' . $hotelId, ["id" => "addPropertyWizardForm2", "data-wizard-form" => "2", "novalidate" => "novalidate"]); ?>
                                <?= csrf_field() ?>
                                <h3 class="mb-6">Location</h3>
                                <div class="form-icon-container">
                                    <div class="form-floating">
                                        <input class="form-control form-icon-input" type="text" name="add-property-wizard-search-address" id="add-property-wizardwizard-search-address" placeholder="Search address...">
                                        <label class="text-body-tertiary form-icon-label" for="add-property-wizardwizard-search-address">Search address...</label>
                                    </div>
                                    <svg class="svg-inline--fa fa-location-dot text-body form-icon fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                                    </svg>
                                    <svg class="svg-inline--fa fa-location-crosshairs position-absolute text-primary fs-9 end-0 top-0 mt-3 me-3" data-fa-transform="down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-crosshairs" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;">
                                        <g transform="translate(256 256)">
                                            <g transform="translate(0, 64)  scale(1, 1)  rotate(0 0 0)">
                                                <path fill="currentColor" d="M256 0c17.7 0 32 14.3 32 32V66.7C368.4 80.1 431.9 143.6 445.3 224H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H445.3C431.9 368.4 368.4 431.9 288 445.3V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.3C143.6 431.9 80.1 368.4 66.7 288H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H66.7C80.1 143.6 143.6 80.1 224 66.7V32c0-17.7 14.3-32 32-32zM128 256a128 128 0 1 0 256 0 128 128 0 1 0 -256 0zm128-80a80 80 0 1 1 0 160 80 80 0 1 1 0-160z" transform="translate(-256 -256)"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="mapbox-container rounded-3 border overflow-hidden mt-3 mb-6">
                                    <div id="mapbox" data-mapbox="{&quot;attributionControl&quot;:false,&quot;center&quot;:[-74.0020158,40.7228022],&quot;zoom&quot;:14,&quot;scrollZoom&quot;:false}" style="height: 250px" class="mapboxgl-map">
                                        <div class="mapboxgl-canary" style="visibility: hidden;"></div>
                                        <div class="mapboxgl-canvas-container mapboxgl-interactive mapboxgl-touch-drag-pan mapboxgl-touch-zoom-rotate"><canvas class="mapboxgl-canvas" tabindex="0" aria-label="Map" role="region" width="400" height="300" style="width: 400px; height: 300px;"></canvas>
                                            <div aria-label="Map marker" role="img" class="mapboxgl-marker mapboxgl-marker-anchor-center" style="transform: translate(200px, 150px) translate(-50%, -50%) translate(0px, -14px);"><svg display="block" height="41px" width="27px" viewBox="0 0 27 41">
                                                    <defs>
                                                        <radialGradient id="shadowGradient">
                                                            <stop offset="10%" stop-opacity="0.4"></stop>
                                                            <stop offset="100%" stop-opacity="0.05"></stop>
                                                        </radialGradient>
                                                    </defs>
                                                    <ellipse cx="13.5" cy="34.8" rx="10.5" ry="5.25" fill="url(#shadowGradient)"></ellipse>
                                                    <path fill="#fa3b1d" d="M27,13.5C27,19.07 20.25,27 14.75,34.5C14.02,35.5 12.98,35.5 12.25,34.5C6.75,27 0,19.22 0,13.5C0,6.04 6.04,0 13.5,0C20.96,0 27,6.04 27,13.5Z"></path>
                                                    <path opacity="0.25" d="M13.5,0C6.04,0 0,6.04 0,13.5C0,19.22 6.75,27 12.25,34.5C13,35.52 14.02,35.5 14.75,34.5C20.25,27 27,19.07 27,13.5C27,6.04 20.96,0 13.5,0ZM13.5,1C20.42,1 26,6.58 26,13.5C26,15.9 24.5,19.18 22.22,22.74C19.95,26.3 16.71,30.14 13.94,33.91C13.74,34.18 13.61,34.32 13.5,34.44C13.39,34.32 13.26,34.18 13.06,33.91C10.28,30.13 7.41,26.31 5.02,22.77C2.62,19.23 1,15.95 1,13.5C1,6.58 6.58,1 13.5,1Z"></path>
                                                    <circle fill="white" cx="13.5" cy="13.5" r="5.5"></circle>
                                                </svg></div>
                                        </div>
                                        <div class="mapboxgl-control-container">
                                            <div class="mapboxgl-ctrl-top-left"></div>
                                            <div class="mapboxgl-ctrl-top-right"></div>
                                            <div class="mapboxgl-ctrl-bottom-left">
                                                <div class="mapboxgl-ctrl" style="display: block;"><a class="mapboxgl-ctrl-logo mapboxgl-compact" target="_blank" rel="noopener nofollow" href="https://www.mapbox.com/" aria-label="Mapbox logo"></a></div>
                                            </div>
                                            <div class="mapboxgl-ctrl-bottom-right"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" type="text" name="street_name" id="add-property-wizardwizard-street" placeholder="Apartment / Street">
                                    <label for="add-property-wizardwizard-street">Apartment / Street</label>
                                </div>
                                <div class="row gx-3 my-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" type="text" name="city" id="add-property-wizardwizard-city" placeholder="City">
                                            <label for="add-property-wizardwizard-city">City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" name="state" id="add-property-wizardwizard-state" placeholder="State (Optional)">
                                            <label for="add-property-wizardwizard-state">State (Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" name="zip_code" id="add-property-wizardwizard-zip-code" maxlength="10" placeholder="Zip Code">
                                            <label for="add-property-wizardwizard-zip-code">Zip Code</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" name="country_or_region" id="add-property-wizardwizard-country" placeholder="Country / Region">
                                            <label for="add-property-wizardwizard-country">Country / Region</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" name="latitude" id="add-property-wizardwizard-latitude" maxlength="10" placeholder="e.g., 34.052235">
                                            <label for="add-property-wizardwizard-latitude">Latitude (Optional)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" name="longitude" id="add-property-wizardwizard-longitude" maxlength="10" placeholder="e.g., -118.243683">
                                            <label for="add-property-wizardwizard-longitude">Longitude (Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-3 mt-6">
                                    <h4>Show your specific location</h4>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" id="locationSwitchCheckChecked" type="checkbox" checked="" disabled>
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <button class="btn btn-primary px-6 px-sm-11" type="submit">Next</button>
                                </div>
                                <?= form_close(); ?>
                            </div>
                            <!-- Hotel amenities tab -->
                            <div class="tab-pane <?= ($activeTab == 'tab3') ? 'active show' : '' ?>" role="tabpanel" aria-labelledby="add-property-wizard-tab3" id="add-property-wizard-tab3">
                                <?= form_open('admin/add-amenities/' . $hotelId, ["id" => "addPropertyWizardForm3", "data-wizard-form" => "3", "novalidate" => "novalidate"]); ?>
                                <?= csrf_field() ?>
                                <div>
                                    <h3 class="mb-6">General amenities</h3>
                                    <div class="row g-3">
                                        <div class="col-sm-auto flex-sm-fill">
                                            <div class="form-floating">
                                                <input class="form-control" type="text" name="amenities-catagory" id="add-property-wizardwizard-amenities-catagory" placeholder="Amenities Catagory">
                                                <label for="add-property-wizardwizard-amenities-catagory">Amenities Catagory</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto flex-sm-fill">
                                            <div class="form-floating">
                                                <input class="form-control" type="text" name="amenities" id="add-property-wizardwizard-amenities" placeholder="Amenity">
                                                <label for="add-property-wizardwizard-amenities">Amenity</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <button class="btn btn-phoenix-primary w-100 h-100 fs-8" id="add_ame">
                                                <svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                                </svg>Add amenity
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <?= form_close() ?>

                                <?php if (!empty($amsData)): ?>
                                    <form action="<?= base_url('admin/save-hotel-amenities/' . $hotelId) ?>" method="post" id="addAmenitiesWizardForm" novalidate="novalidate">
                                        <?= csrf_field() ?>
                                        <?php
                                        $s = 1;
                                        foreach ($amsData as $ams):
                                            $sl = $s++;
                                            $show = "";
                                            if ($sl == 1) {
                                                $show = "show";
                                            }
                                        ?>

                                            <div class="accordion-button-arrow-icon accordion mt-2" id="amenitiesAccordion<?= $sl; ?>">
                                                <div class="accordion-item px-0 py-3">
                                                    <h5 class="accordion-header">
                                                        <button class="accordion-button py-0 text-body-highlight" type="button" data-bs-toggle="collapse" data-bs-target="#popularAmenities<?= $sl; ?>" aria-expanded="true" aria-controls="popularAmenities<?= $sl; ?>">
                                                            <span class="circle-icon-item border border-primary text-primary me-3">
                                                                <svg class="svg-inline--fa fa-fire" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="fire" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                    <path fill="currentColor" d="M159.3 5.4c7.8-7.3 19.9-7.2 27.7 .1c27.6 25.9 53.5 53.8 77.7 84c11-14.4 23.5-30.1 37-42.9c7.9-7.4 20.1-7.4 28 .1c34.6 33 63.9 76.6 84.5 118c20.3 40.8 33.8 82.5 33.8 111.9C448 404.2 348.2 512 224 512C98.4 512 0 404.1 0 276.5c0-38.4 17.8-85.3 45.4-131.7C73.3 97.7 112.7 48.6 159.3 5.4zM225.7 416c25.3 0 47.7-7 68.8-21c42.1-29.4 53.4-88.2 28.1-134.4c-4.5-9-16-9.6-22.5-2l-25.2 29.3c-6.6 7.6-18.5 7.4-24.7-.5c-16.5-21-46-58.5-62.8-79.8c-6.3-8-18.3-8.1-24.7-.1c-33.8 42.5-50.8 69.3-50.8 99.4C112 375.4 162.6 416 225.7 416z"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="flex-1"><?= $ams['category']; ?></span>
                                                        </button>
                                                    </h5>
                                                    <div class="accordion-collapse collapse ms-md-9 <?= $show; ?>" id="popularAmenities<?= $sl; ?>" data-bs-parent="#amenitiesAccordion<?= $sl; ?>">
                                                        <?php if ($hamData !== null && isset($hamData['amenities'])) {
                                                            $dc = json_decode($hamData['amenities'], true);
                                                        } else {
                                                            $dc = [];
                                                        } ?>
                                                        <?php foreach ($ams['amenities'] as $am):
                                                            $chk = "";
                                                            if (array_key_exists($am->am_slug, $dc)) {
                                                                $chk = "checked";
                                                            }
                                                        ?>
                                                            <div class="form-price-tier border p-3 rounded-2 my-3" data-form-price-tier="data-form-price-tier">
                                                                <div class="d-sm-flex align-items-center gap-3">
                                                                    <div class="form-check form-switch mb-0">
                                                                        <input class="form-check-input" id="<?= $am->am_slug; ?>" type="checkbox" name="am_data[]" data-price-toggle="data-price-toggle" value="<?= $am->am_slug; ?>" <?= $chk; ?>>
                                                                        <label class="form-check-label fs-8 fw-bold text-body ms-2" for="<?= $am->am_slug; ?>">
                                                                            <?= $am->am_name; ?>
                                                                        </label>
                                                                    </div>
                                                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                                                        <div class="form-check form-check-inline me-3 mb-0">
                                                                            <input class="form-check-input" type="radio" id="<?= $am->am_slug; ?>-free" name="<?= $am->am_slug; ?>-radio" value="free" data-pricing="data-pricing">
                                                                            <label class="form-check-label" for="<?= $am->am_slug; ?>-free">Free</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline me-0 mb-0">
                                                                            <input class="form-check-input" type="radio" id="<?= $am->am_slug; ?>-paid" name="<?= $am->am_slug; ?>-radio" value="paid" data-pricing="data-pricing">
                                                                            <label class="form-check-label" for="<?= $am->am_slug; ?>-paid">Paid</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                                                        <div class="form-floating">
                                                                            <input class="form-control" type="text" name="<?= $am->am_slug; ?>-condition" id="<?= $am->am_slug; ?>-condition" placeholder="Search amenities" value="">
                                                                            <label for="<?= $am->am_slug; ?>-condition">Condition</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <div class="mt-6">
                                            <button class="btn btn-primary px-6 px-sm-11" type="submit">Next</button>
                                        </div>
                                    </form>
                                <?php endif; ?>
                            </div>
                            <!-- Hotel galley tab -->
                            <div class="tab-pane <?= ($activeTab == 'tab4') ? 'active show' : '' ?>" role="tabpanel" aria-labelledby="add-property-wizard-tab4" id="add-property-wizard-tab4">
                                <?= form_open('admin/save-photos/' . $hotelId, ["id" => "addPropertyWizardForm4", "data-wizard-form" => "4", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]); ?>
                                <?= csrf_field() ?>
                                <h3 class="mb-6">Add property picture</h3>
                                <div class="mb-3">
                                    <label class="form-label" for="formFileMultiple">Multiple files input example</label>
                                    <input class="form-control" id="formFileMultiple" type="file" multiple="multiple" name="photos[]" accept=".jpg, .jpeg, .png, .webp" />
                                </div>
                                <?= form_close() ?>
                            </div>
                            <div class="tab-pane <?= ($activeTab == 'tab5') ? 'active show' : '' ?>" role="tabpanel" aria-labelledby="add-property-wizard-tab5" id="add-property-wizard-tab5">
                                <?= form_open('admin/save-finance/' . $hotelId, ["id" => "addPropertyWizardForm5", "data-wizard-form" => "5", "novalidate" => "novalidate"]); ?>
                                <?= csrf_field() ?>
                                <h3 class="mb-6">Finance</h3>
                                <h4 class="mb-4">Payment from Phoenix Booking Management</h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating"><input class="form-control" type="text" name="add-property-wizard-currency" id="add-property-wizardwizard-currency" placeholder="payment currency" value="$ US Dollar"><label for="add-property-wizardwizard-currency">payment currency</label></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating"><input class="form-control" type="text" name="add-property-wizard-percentage" id="add-property-wizardwizard-percentage" placeholder="Commission Percentage" value="Flat 10%" disabled="disabled"><label for="add-property-wizardwizard-percentage">Commission Percentage</label></div>
                                    </div>
                                </div>
                                <div class="form-floating mt-3"><select class="form-select form-icon-input" name="add-property-wizard-type" id="add-property-wizardEFT-type">
                                        <option selected="selected">Electronic Funds Transfer (EFT)</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select><label class="form-icon-label" for="add-property-wizardEFT-type">Select Payment Method</label></div>
                                <div class="form-check my-4"><input class="form-check-input" id="invoiceChecked" type="checkbox" checked="checked"><label class="form-check-label fw-normal fs-8" for="invoiceChecked">Invoice to the name and address of property</label></div>
                                <div class="form-floating mb-4"><input class="form-control" type="text" name="add-property-wizard-invoice-email" id="add-property-wizardwizard-invoice-email" placeholder="Invoice email"><label for="add-property-wizardwizard-invoice-email">Invoice email</label><a class="position-absolute d-flex align-items-center px-3 fw-bold fs-9 end-0 top-0 mt-3 me-2">Verify now </a></div>
                                <div class="form-check form-check-inline mb-3"><input class="form-check-input" id="creditCard" type="radio" name="paymentMethod" value="creditCard" checked="checked"><label class="form-check-label fs-8" for="creditCard">Credit Card</label></div>
                                <div class="form-check form-check-inline mb-3"><input class="form-check-input" id="bankAccount" type="radio" name="paymentMethod" value="bankAccount"><label class="form-check-label fs-8" for="bankAccount">Bank Account</label></div>
                                <div class="form-check form-check-inline mb-3"><input class="form-check-input" id="online" type="radio" name="paymentMethod" value="online"><label class="form-check-label fs-8" for="online">Online</label></div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating"><select class="form-select form-icon-input" name="add-property-wizard-type" id="add-property-wizardcard-type">
                                                <option selected="selected">Visa Debit card</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select><label class="form-icon-label" for="add-property-wizardcard-type">Select card</label></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating"><input class="form-control" type="text" name="add-property-wizard-card-number" id="add-property-wizardwizard-card-number" placeholder="Card number"><label for="add-property-wizardwizard-card-number">Card number</label></div>
                                    </div>
                                </div>
                                <div class="form-floating mt-3"><input class="form-control" type="text" name="add-property-wizard-card-holder" id="add-property-wizardwizard-card-holder" placeholder="Card Holder name"><label for="add-property-wizardwizard-card-holder">Card Holder name</label></div>
                                <h4 class="mt-6 mb-4">Payment from Guests (On property)</h4>
                                <div class="border p-3 rounded-2">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="cashPayment" type="checkbox"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="cashPayment">Cash payment</label></div>
                                </div>
                                <div class="border p-3 rounded-2 my-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="cardPayment" type="checkbox"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="cardPayment">Card Payment</label></div>
                                </div>
                                <div class="border p-3 rounded-2">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="onlinePayment" type="checkbox"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="onlinePayment">MFS / Online Payment</label></div>
                                </div>
                                <?= form_close() ?>
                            </div>
                            <div class="tab-pane <?= ($activeTab == 'tab6') ? 'active show' : '' ?>" role="tabpanel" aria-labelledby="add-property-wizard-tab6" id="add-property-wizard-tab6">
                                <?= form_open('admin/save-policies/' . $hotelId, ["id" => "addPropertyWizardForm6", "data-wizard-form" => "6", "novalidate" => "novalidate"]); ?>
                                <?= csrf_field() ?>
                                <h3 class="mb-6">Policies</h3>
                                <div class="form-check form-check-inline me-5 mb-3">
                                    <input class="form-check-input" id="limitedCheckIn" type="radio" name="checkIn" value="limitedCheckIn" checked="checked">
                                    <label class="form-check-label fs-8" for="limitedCheckIn">Limited Check-in</label>
                                </div>
                                <div class="form-check form-check-inline mb-3">
                                    <input class="form-check-input" id="24HrCheckIn" type="radio" name="checkIn" value="24HrCheckIn">
                                    <label class="form-check-label fs-8" for="24HrCheckIn">24hr Check-in</label>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-12 col-sm-6 col-md-auto flex-md-grow-1">
                                        <div class="form-floating">
                                            <input class="form-control datetimepicker flatpickr-input" id="checkInStarts" type="text" placeholder="H:i" data-options="{&quot;enableTime&quot;:true,&quot;noCalendar&quot;:true,&quot;dateFormat&quot;:&quot;H:i&quot;,&quot;disableMobile&quot;:true}" readonly="readonly">
                                            <label for="checkInStarts">Check-in Starts</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-auto flex-md-grow-1">
                                        <div class="form-floating">
                                            <input class="form-control datetimepicker flatpickr-input" id="checkInEnds" type="text" placeholder="H:i" data-options="{&quot;enableTime&quot;:true,&quot;noCalendar&quot;:true,&quot;dateFormat&quot;:&quot;H:i&quot;,&quot;disableMobile&quot;:true}" readonly="readonly">
                                            <label for="checkInEnds">Check-in Ends</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-auto">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" id="lateCheckIn" type="checkbox" checked="checked">
                                            <label class="form-check-label fw-normal fs-8" for="lateCheckIn">Late Check-in</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="border p-3 rounded-2 mt-3">
                                    <div class="form-check form-switch mb-0">
                                        <input class="form-check-input" id="ageRestriction" type="checkbox"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="ageRestriction">Age Restriction</label>
                                    </div>
                                </div>
                                <div class="border p-3 rounded-2 my-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="deposit" type="checkbox"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="deposit">Deposit at Check-in</label></div>
                                </div>
                                <div class="border p-3 rounded-2">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="documentation" type="checkbox"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="documentation">Documentation at Check-in</label></div>
                                </div>
                                <h4 class="mb-4 mt-6">Checkout Policy</h4>
                                <div class="form-floating mb-3"><input class="form-control datetimepicker flatpickr-input" id="chcckOutBefore" type="text" placeholder="H:i" data-options="{&quot;enableTime&quot;:true,&quot;noCalendar&quot;:true,&quot;dateFormat&quot;:&quot;H:i&quot;,&quot;disableMobile&quot;:true}" readonly="readonly"><label for="chcckOutBefore">Checkout Before</label></div>
                                <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                                    <div class="d-sm-flex align-items-center gap-3">
                                        <div class="form-check form-switch mb-0"><input class="form-check-input" id="flexible-checkout" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="flexible-checkout">Flexible Checkout</label></div>
                                        <div class="pricings ms-auto mt-2 mt-sm-0">
                                            <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="flexible-checkout-free" name="Flexible Checkout-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="flexible-checkout-free">Free</label></div>
                                            <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="flexible-checkout-paid" name="Flexible Checkout-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="flexible-checkout-paid">Paid</label></div>
                                        </div>
                                    </div>
                                    <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                        <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                            <div class="form-check mb-4"><input class="form-check-input" id="flexible-checkout-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="flexible-checkout-option1">Option 1</label></div>
                                            <div class="form-check mb-4"><input class="form-check-input" id="flexible-checkout-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="flexible-checkout-option2">Option 2</label></div>
                                            <div class="form-check mb-4"><input class="form-check-input" id="flexible-checkout-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="flexible-checkout-option3">Option 3</label></div><button class="btn btn-link p-0"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                                </svg><!-- <span class="fa-solid fa-plus me-2"></span> Font Awesome fontawesome.com -->Additional Condition</button>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-4 mt-6">Cancellation Policy</h4>
                                <div class="form-check form-check-inline me-5 mb-0"><input class="form-check-input" id="nonRefundable" type="radio" name="refundPolicy" value="nonRefundable"><label class="form-check-label fs-8" for="nonRefundable">Non Refundable</label></div>
                                <div class="form-check form-check-inline mb-0"><input class="form-check-input" id="optionalRefund" type="radio" name="refundPolicy" value="optionalRefund" checked="checked"><label class="form-check-label fs-8" for="optionalRefund">Optional Refund</label></div>
                                <div class="border p-3 rounded-2 my-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="fullRefund" type="checkbox"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="fullRefund">Full Refund</label></div>
                                </div>
                                <div class="border p-3 rounded-2">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="partialRefund" type="checkbox"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="partialRefund">Partial Refund</label></div>
                                </div>
                                <h4 class="mb-4 mt-6">Pet Policy</h4>
                                <div class="form-check form-check-inline me-5 mb-0"><input class="form-check-input" id="notAllowed" type="radio" name="petPolicy" value="notAllowed"><label class="form-check-label fs-8" for="notAllowed">Not allowed</label></div>
                                <div class="form-check form-check-inline mb-0"><input class="form-check-input" id="allowed" type="radio" name="petPolicy" value="allowed" checked="checked"><label class="form-check-label fs-8" for="allowed">Allowed</label></div>
                                <div class="border p-3 rounded-2 my-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="petRestrickedZone" type="checkbox"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="petRestrickedZone">Pet Restricted Zones</label></div>
                                </div>
                                <div class="border p-3 rounded-2">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="AdditionalCharges" type="checkbox"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="AdditionalCharges">Additional Charges</label></div>
                                </div>
                                <h4 class="mb-4 mt-6">Child Policy</h4>
                                <h5 class="mb-2 text-body">Age Segment 1</h5>
                                <div class="row align-items-center g-3">
                                    <div class="col-6 col-sm-auto">
                                        <div class="form-floating age-segment-input"><input class="form-control input-spin-none" type="number" name="add-property-wizard-from1" id="add-property-wizardwizard-from1" placeholder="From (Yrs)" value="0" disabled="disabled"><label for="add-property-wizardwizard-from1">From (Yrs)</label></div>
                                    </div>
                                    <div class="col-12 col-sm-auto flex-1 order-1 order-sm-0">
                                        <div class="noUi-target-primary noUi-handle-primary noUi-slider-slim noUi-handle-circle px-2 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" data-nouislider="{&quot;range&quot;:{&quot;min&quot;:0,&quot;max&quot;:18},&quot;start&quot;:[0,7],&quot;connect&quot;:true}">
                                            <div class="noUi-base">
                                                <div class="noUi-connects">
                                                    <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.388889, 1);"></div>
                                                </div>
                                                <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 5;">
                                                    <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="7.0" aria-valuenow="0.0" aria-valuetext="0.00">
                                                        <div class="noUi-touch-area"></div>
                                                        <div class="noUi-tooltip">0.00</div>
                                                    </div>
                                                </div>
                                                <div class="noUi-origin" style="transform: translate(-61.1111%, 0px); z-index: 6;">
                                                    <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="18.0" aria-valuenow="7.0" aria-valuetext="7.00">
                                                        <div class="noUi-touch-area"></div>
                                                        <div class="noUi-tooltip">7.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-auto">
                                        <div class="form-floating age-segment-input"><input class="form-control input-spin-none" type="number" name="add-property-wizard-to1" id="add-property-wizardwizard-to1" placeholder="To (Yrs)" value="7"><label for="add-property-wizardwizard-to1">To (Yrs)</label></div>
                                    </div>
                                </div>
                                <h5 class="mb-2 mt-4 text-body">Age Segment 2</h5>
                                <div class="row align-items-center g-3">
                                    <div class="col-6 col-sm-auto">
                                        <div class="form-floating age-segment-input"><input class="form-control input-spin-none" type="number" name="add-property-wizard-from2" id="add-property-wizardwizard-from2" placeholder="From (Yrs)" value="8"><label for="add-property-wizardwizard-from2">From (Yrs)</label></div>
                                    </div>
                                    <div class="col-auto flex-1 order-1 order-sm-0">
                                        <div class="noUi-target-primary noUi-handle-primary noUi-slider-slim noUi-handle-circle px-2 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" data-nouislider="{&quot;range&quot;:{&quot;min&quot;:0,&quot;max&quot;:18},&quot;start&quot;:[8,12],&quot;connect&quot;:true}">
                                            <div class="noUi-base">
                                                <div class="noUi-connects">
                                                    <div class="noUi-connect" style="transform: translate(44.4444%, 0px) scale(0.222222, 1);"></div>
                                                </div>
                                                <div class="noUi-origin" style="transform: translate(-55.5556%, 0px); z-index: 5;">
                                                    <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="12.0" aria-valuenow="8.0" aria-valuetext="8.00">
                                                        <div class="noUi-touch-area"></div>
                                                        <div class="noUi-tooltip">8.00</div>
                                                    </div>
                                                </div>
                                                <div class="noUi-origin" style="transform: translate(-33.3333%, 0px); z-index: 4;">
                                                    <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="8.0" aria-valuemax="18.0" aria-valuenow="12.0" aria-valuetext="12.00">
                                                        <div class="noUi-touch-area"></div>
                                                        <div class="noUi-tooltip">12.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-auto">
                                        <div class="form-floating age-segment-input"><input class="form-control input-spin-none" type="number" name="add-property-wizard-to2" id="add-property-wizardwizard-to2" placeholder="To (Yrs)" value="12"><label for="add-property-wizardwizard-to2">To (Yrs)</label></div>
                                    </div>
                                </div>
                                <h5 class="mb-2 mt-4 text-body"> <span>Age Segment 3</span><button class="btn btn-link p-0 ms-1">Remove</button></h5>
                                <div class="row align-items-center g-3">
                                    <div class="col-6 col-sm-auto">
                                        <div class="form-floating age-segment-input"><input class="form-control input-spin-none" type="number" name="add-property-wizard-from3" id="add-property-wizardwizard-from3" placeholder="From (Yrs)" value="13"><label for="add-property-wizardwizard-from3">From (Yrs)</label></div>
                                    </div>
                                    <div class="col-auto flex-1 order-1 order-sm-0">
                                        <div class="noUi-target-primary noUi-handle-primary noUi-slider-slim noUi-handle-circle px-2 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" data-nouislider="{&quot;range&quot;:{&quot;min&quot;:0,&quot;max&quot;:18},&quot;start&quot;:[13,18],&quot;connect&quot;:true}">
                                            <div class="noUi-base">
                                                <div class="noUi-connects">
                                                    <div class="noUi-connect" style="transform: translate(72.2222%, 0px) scale(0.277778, 1);"></div>
                                                </div>
                                                <div class="noUi-origin" style="transform: translate(-27.7778%, 0px); z-index: 5;">
                                                    <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="18.0" aria-valuenow="13.0" aria-valuetext="13.00">
                                                        <div class="noUi-touch-area"></div>
                                                        <div class="noUi-tooltip">13.00</div>
                                                    </div>
                                                </div>
                                                <div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;">
                                                    <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="13.0" aria-valuemax="18.0" aria-valuenow="18.0" aria-valuetext="18.00">
                                                        <div class="noUi-touch-area"></div>
                                                        <div class="noUi-tooltip">18.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-auto">
                                        <div class="form-floating age-segment-input"><input class="form-control input-spin-none" type="number" name="add-property-wizard-to3" id="add-property-wizardwizard-to3" placeholder="To (Yrs)" value="18" disabled="disabled"><label for="add-property-wizardwizard-to3">To (Yrs)</label></div>
                                    </div>
                                </div><button class="btn btn-link p-0 mt-3 fs-8"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                    </svg><!-- <span class="fa-solid fa-plus me-2"></span> Font Awesome fontawesome.com -->Add Segment</button>
                                <div class="border px-3 py-2 rounded-2 mt-4">
                                    <div class="form-check form-switch mb-0 py-1"><input class="form-check-input" id="documentation-requirement" type="checkbox"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="documentation-requirement">Documentation Requirement</label></div>
                                </div>
                                <h4 class="mb-4 mt-6">Included Taxes in your rate</h4>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                    <div class="d-sm-flex align-items-center gap-3">
                                        <div class="form-check form-switch mb-0"><input class="form-check-input" id="vat" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="vat">VAT</label></div>
                                        <div class="pricings ms-auto mt-2 mt-sm-0">
                                            <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="vat-free" name="VAT-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="vat-free">Free</label></div>
                                            <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="vat-paid" name="VAT-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="vat-paid">Paid</label></div>
                                        </div>
                                    </div>
                                    <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                        <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                            <div class="form-check mb-4"><input class="form-check-input" id="vat-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="vat-option1">Option 1</label></div>
                                            <div class="form-check mb-4"><input class="form-check-input" id="vat-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="vat-option2">Option 2</label></div>
                                            <div class="form-check mb-4"><input class="form-check-input" id="vat-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="vat-option3">Option 3</label></div><button class="btn btn-link p-0"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                                </svg><!-- <span class="fa-solid fa-plus me-2"></span> Font Awesome fontawesome.com -->Additional Condition</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                    <div class="d-sm-flex align-items-center gap-3">
                                        <div class="form-check form-switch mb-0"><input class="form-check-input" id="gst" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="gst">GST</label></div>
                                        <div class="pricings ms-auto mt-2 mt-sm-0">
                                            <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="gst-free" name="GST-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="gst-free">Free</label></div>
                                            <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="gst-paid" name="GST-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="gst-paid">Paid</label></div>
                                        </div>
                                    </div>
                                    <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                        <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                            <div class="form-check mb-4"><input class="form-check-input" id="gst-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="gst-option1">Option 1</label></div>
                                            <div class="form-check mb-4"><input class="form-check-input" id="gst-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="gst-option2">Option 2</label></div>
                                            <div class="form-check mb-4"><input class="form-check-input" id="gst-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="gst-option3">Option 3</label></div><button class="btn btn-link p-0"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                                </svg><!-- <span class="fa-solid fa-plus me-2"></span> Font Awesome fontawesome.com -->Additional Condition</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                    <div class="d-sm-flex align-items-center gap-3">
                                        <div class="form-check form-switch mb-0"><input class="form-check-input" id="holet-tax" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="holet-tax">Hotel tax</label></div>
                                        <div class="pricings ms-auto mt-2 mt-sm-0">
                                            <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="holet-tax-free" name="Hotel tax-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="holet-tax-free">Free</label></div>
                                            <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="holet-tax-paid" name="Hotel tax-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="holet-tax-paid">Paid</label></div>
                                        </div>
                                    </div>
                                    <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                        <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                            <div class="form-check mb-4"><input class="form-check-input" id="holet-tax-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="holet-tax-option1">Option 1</label></div>
                                            <div class="form-check mb-4"><input class="form-check-input" id="holet-tax-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="holet-tax-option2">Option 2</label></div>
                                            <div class="form-check mb-4"><input class="form-check-input" id="holet-tax-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="holet-tax-option3">Option 3</label></div><button class="btn btn-link p-0"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                                </svg><!-- <span class="fa-solid fa-plus me-2"></span> Font Awesome fontawesome.com -->Additional Condition</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                    <div class="d-sm-flex align-items-center gap-3">
                                        <div class="form-check form-switch mb-0"><input class="form-check-input" id="city-tax" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="city-tax">City / District tax</label></div>
                                        <div class="pricings ms-auto mt-2 mt-sm-0">
                                            <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="city-tax-free" name="City / District tax-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="city-tax-free">Free</label></div>
                                            <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="city-tax-paid" name="City / District tax-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="city-tax-paid">Paid</label></div>
                                        </div>
                                    </div>
                                    <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                        <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                            <div class="form-check mb-4"><input class="form-check-input" id="city-tax-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="city-tax-option1">Option 1</label></div>
                                            <div class="form-check mb-4"><input class="form-check-input" id="city-tax-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="city-tax-option2">Option 2</label></div>
                                            <div class="form-check mb-4"><input class="form-check-input" id="city-tax-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="city-tax-option3">Option 3</label></div><button class="btn btn-link p-0"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                                </svg><!-- <span class="fa-solid fa-plus me-2"></span> Font Awesome fontawesome.com -->Additional Condition</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                                    <div class="d-sm-flex align-items-center gap-3">
                                        <div class="form-check form-switch mb-0"><input class="form-check-input" id="tourist-tax" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="tourist-tax">Tourist tax</label></div>
                                        <div class="pricings ms-auto mt-2 mt-sm-0">
                                            <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="tourist-tax-free" name="Tourist tax-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="tourist-tax-free">Free</label></div>
                                            <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="tourist-tax-paid" name="Tourist tax-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="tourist-tax-paid">Paid</label></div>
                                        </div>
                                    </div>
                                    <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                        <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                            <div class="form-check mb-4"><input class="form-check-input" id="tourist-tax-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="tourist-tax-option1">Option 1</label></div>
                                            <div class="form-check mb-4"><input class="form-check-input" id="tourist-tax-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="tourist-tax-option2">Option 2</label></div>
                                            <div class="form-check mb-4"><input class="form-check-input" id="tourist-tax-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="tourist-tax-option3">Option 3</label></div><button class="btn btn-link p-0"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                                </svg>Additional Condition</button>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-4 mt-6">Your Documentations</h4>
                                <div class="form-floating"><input class="form-control input-spin-none" type="number" name="add-property-wizard-property-registrations" id="add-property-wizardwizard-property-registrations" placeholder="Property Registration No. (OPTIONAL)"><label for="add-property-wizardwizard-property-registrations">Property Registration No. (OPTIONAL)</label></div>
                                <div class="form-floating my-3"><input class="form-control input-spin-none" type="number" name="add-property-wizard-business-registration" id="add-property-wizardwizard-business-registration" placeholder="Business Registration No."><label for="add-property-wizardwizard-business-registration">Business Registration No.</label></div>
                                <div class="form-floating"><input class="form-control input-spin-none" type="number" name="add-property-wizard-taxpaper" id="add-property-wizardwizard-taxpaper" placeholder="Taxpayer Indentification No."><label for="add-property-wizardwizard-taxpaper">Taxpayer Indentification No.</label></div>
                                <?= form_close() ?>
                            </div>
                            <div class="tab-pane <?= ($activeTab == 'tab7') ? 'active show' : '' ?>" role="tabpanel" aria-labelledby="add-property-wizard-tab7" id="add-property-wizard-tab7">
                                <h3 class="mb-2">We’re building your property</h3>
                                <p class="mb-5 text-body-tertiary">We're working on getting your property set up and ready for guests. Stay tuned for updates and start accepting bookings soon!</p>
                                <div class="alert alert-subtle-success alert-dismissible fade show mb-5" role="alert">
                                    <p class="mb-0 flex-1 fw-semibold fs-9 fs-sm-8">Congratulations on your successful listing! Join a community of hospitality professionals as a host. Your hard work will turn your home into a sought-after destination. We anticipate hearing about your achievements.</p><button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="accordion-button-arrow-icon accordion mt-2" id="previewAccordion">
                                    <div class="accordion-item border rounded-3 bg-body-emphasis p-3 p-sm-4 mb-5">
                                        <h5 class="accordion-header"><button class="accordion-button py-0 text-body-highlight" type="button" data-bs-toggle="collapse" data-bs-target="#basicInfo" aria-expanded="true" aria-controls="basicInfo"><img class="me-2 d-dark-none" src="../../../../assets/img/icons/info.svg" alt=""><img class="me-2 d-light-none" src="../../../../assets/img/icons/info_dark.svg" alt=""><span class="fs-sm-7">Basic Information</span></button></h5>
                                        <div class="accordion-collapse collapse show" id="basicInfo" data-bs-parent="#previewAccordion">
                                            <div class="mt-4 scrollbar"><a class="fs-9 fw-semibold mb-2 d-inline-block" href="#!">Edit info</a>
                                                <table class="w-100">
                                                    <tbody>
                                                        <tr>
                                                            <th style="width: 176px"></th>
                                                            <th style="width: 32px"></th>
                                                            <th style="min-width: 300px"></th>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Property name</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Phoenix Oasis</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Property Information</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 ">
                                                                <p class="mb-0 text-body-secondary">Welcome to Phoenix Oasis, where luxury meets tranquility. Our hotel offers lavish accommodations, exquisite dining, rejuvenating spa experiences, and stunning views. Experience opulence redefined in a haven of serenity.</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Property type</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Hotel</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Rating</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">5 Star</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Email address</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">phoenix.oasis@email.com</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Mobile number</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">(934) 907-3716</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Property chain</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Not-available</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">CMS</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Available</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">CMS provider name</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Eagle Eye</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border rounded-3 bg-body-emphasis p-3 p-sm-4 mb-5">
                                        <h5 class="accordion-header"><button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#location" aria-expanded="true" aria-controls="location"><img class="me-2 d-dark-none" src="../../../../assets/img/icons/location.svg" alt=""><img class="me-2 d-light-none" src="../../../../assets/img/icons/location_dark.svg" alt=""><span class="fs-sm-7">Location</span></button></h5>
                                        <div class="accordion-collapse collapse" id="location" data-bs-parent="#previewAccordion">
                                            <div class="mt-4 scrollbar"><a class="fs-9 fw-semibold mb-2 d-inline-block" href="#!">Edit location</a>
                                                <table class="w-100">
                                                    <tbody>
                                                        <tr>
                                                            <th style="width: 176px"></th>
                                                            <th style="width: 32px"></th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Apartment / Street</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">123 Luxe Boulevard</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">State</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Suite 567</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Country / Region</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">United States</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">City</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Sunshine City</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Zip code</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  text-nowrap">
                                                                <p class="mb-0 text-body-secondary">AZ 85001</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border rounded-3 bg-body-emphasis p-3 p-sm-4 mb-5">
                                        <h5 class="accordion-header"><button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#generalAmenities" aria-expanded="true" aria-controls="generalAmenities"><img class="me-2 d-dark-none" src="../../../../assets/img/icons/bed-double.svg" alt=""><img class="me-2 d-light-none" src="../../../../assets/img/icons/bed-double_dark.svg" alt=""><span class="fs-sm-7">General Amenities</span></button></h5>
                                        <div class="accordion-collapse collapse" id="generalAmenities" data-bs-parent="#previewAccordion">
                                            <div class="mt-4 scrollbar"><a class="fs-9 fw-semibold mb-2 d-inline-block" href="#!">Edit amenities</a>
                                                <table class="w-100">
                                                    <tbody>
                                                        <tr>
                                                            <th style="width: 176px"></th>
                                                            <th style="width: 32px"></th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Wifi</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Available</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Hotel Bar</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Available</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Restaurant</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Available</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Common Areas</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Available</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Pool</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Available</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Tennis Courts</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Available</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">No Smoking</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Available</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Air Conditioning</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Available</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Parking</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Available</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Bathtub</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Available</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Beach View</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Available</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap  pb-3">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Flat-screen TV</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  pb-3 text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Available</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-top pt-3 text-nowrap">
                                                                <h5 class="fw-semibold text-body-highlight mb-0">Balcony</h5>
                                                            </td>
                                                            <td class="border-top px-3 pt-3 w-max-content">
                                                                <p class="mb-0 w-max-content">:</p>
                                                            </td>
                                                            <td class="border-top pt-3  text-nowrap">
                                                                <p class="mb-0 text-body-secondary">Available</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border rounded-3 bg-body-emphasis p-3 p-sm-4 mb-5">
                                        <h5 class="accordion-header"><button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pictures" aria-expanded="true" aria-controls="pictures"><img class="me-2 d-dark-none" src="../../../../assets/img/icons/picture.svg" alt=""><img class="me-2 d-light-none" src="../../../../assets/img/icons/picture_dark.svg" alt=""><span class="fs-sm-7">Picture</span></button></h5>
                                        <div class="accordion-collapse collapse" id="pictures" data-bs-parent="#previewAccordion">
                                            <div class="mt-4"><a class="fs-9 fw-semibold mb-2 d-inline-block" href="#!">Edit pictures</a>
                                                <div class="row g-2 g-sm-3">
                                                    <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="../../../../assets/img/gallery/59.png" alt="" height="160"></div>
                                                    <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="../../../../assets/img/gallery/60.png" alt="" height="160"></div>
                                                    <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="../../../../assets/img/gallery/61.png" alt="" height="160"></div>
                                                    <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="../../../../assets/img/gallery/62.png" alt="" height="160"></div>
                                                    <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="../../../../assets/img/gallery/63.png" alt="" height="160"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border rounded-3 bg-body-emphasis p-3 p-sm-4 mb-5">
                                        <h5 class="accordion-header"><button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#finance" aria-expanded="true" aria-controls="finance"><img class="me-2 d-dark-none" src="../../../../assets/img/icons/dollar-alt.svg" alt=""><img class="me-2 d-light-none" src="../../../../assets/img/icons/dollar-alt_dark.svg" alt=""><span class="fs-sm-7">Finance</span></button></h5>
                                        <div class="accordion-collapse collapse" id="finance" data-bs-parent="#previewAccordion">
                                            <div class="mt-4"><a class="fs-9 fw-semibold mb-2 d-inline-block" href="#!">Edit finance</a>
                                                <h5 class="fw-bolder mb-3">Payment from PBM</h5>
                                                <div class="scrollbar">
                                                    <table class="w-100">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 176px"></th>
                                                                <th style="width: 32px"></th>
                                                                <th></th>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Payment currency</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">US Dollar</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Payment method</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Electronic Funds Transfer (EFT)</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Received payment</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Credit Card</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Card type</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Visa Debit Card</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Card number</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">123 456 7890</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Card holder name</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Phoenix Oasis </p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Commission Percentage</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Flat 10%</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Invoice email</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Not-Available</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <h5 class="fw-bolder mb-3 mt-4">Payment from Guests (On property)</h5>
                                                <div class="scrollbar">
                                                    <table class="w-100">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 176px"></th>
                                                                <th style="width: 32px"></th>
                                                                <th></th>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Cash payment</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">No</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Card Payment</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">No</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">MFS / Online Payment</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">No</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border rounded-3 bg-body-emphasis p-3 p-sm-4 mb-5">
                                        <h5 class="accordion-header"><button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#policy" aria-expanded="true" aria-controls="policy"><img class="me-2 d-dark-none" src="../../../../assets/img/icons/file-check-alt.svg" alt=""><img class="me-2 d-light-none" src="../../../../assets/img/icons/file-check-alt_dark.svg" alt=""><span class="fs-sm-7">Policy</span></button></h5>
                                        <div class="accordion-collapse collapse" id="policy" data-bs-parent="#previewAccordion">
                                            <div class="mt-4"><a class="fs-9 fw-semibold mb-2 d-inline-block" href="#!">Edit policies</a>
                                                <h5 class="mb-3 fw-bolder">Check-in-Policy</h5>
                                                <div class="scrollbar">
                                                    <table class="w-100">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 176px"></th>
                                                                <th style="width: 32px"></th>
                                                                <th></th>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Check-in type</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Limited Check-in</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Check-in start</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">09:00 AM</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Age Restriction</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">No</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Deposit at Check-in</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">No</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Documentation at Check-in</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">No</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Late check-in</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Flat 10%</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Check-in end</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">12:00 PM</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <h5 class="mb-3 fw-bolder mt-4">Checkout Policy</h5>
                                                <div class="scrollbar">
                                                    <table class="w-100">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 176px"></th>
                                                                <th style="width: 32px"></th>
                                                                <th></th>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Checkout before</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">11:00 AM</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Flexible Checkout</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Available</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Type</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Amount per night</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Amount</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">$100.00</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <h5 class="mb-3 fw-bolder mt-4">Cancellation Policy</h5>
                                                <div class="scrollbar">
                                                    <table class="w-100">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 176px"></th>
                                                                <th style="width: 32px"></th>
                                                                <th></th>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Type</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Optimal refund</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Full refund</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">No</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Partial refund</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">No</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <h5 class="mb-3 fw-bolder mt-4">Pet Policy</h5>
                                                <div class="scrollbar">
                                                    <table class="w-100">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 176px"></th>
                                                                <th style="width: 32px"></th>
                                                                <th></th>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Type</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Allowed</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Pet Restricted Zones</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Not-Available</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Additional Charges</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">No</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <h5 class="mb-3 fw-bolder mt-4">Child Policy</h5>
                                                <div class="scrollbar">
                                                    <table class="w-100">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 176px"></th>
                                                                <th style="width: 32px"></th>
                                                                <th></th>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Age Segment 1</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">0 - 7 Years</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Age Segment 2</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">7 -12 Years</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Age Segment 3</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">12 -18 Years</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Documentation Requirement</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Not-Available</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <h5 class="mb-3 fw-bolder mt-4">Included Taxes in your rate</h5>
                                                <div class="scrollbar">
                                                    <table class="w-100">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 176px"></th>
                                                                <th style="width: 32px"></th>
                                                                <th></th>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Vat</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Available</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Type</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Amount per night</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Amount</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">$100.00</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Deposit at Check-in</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">No</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">GST</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">No</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Hotel tax</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">No</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">City / District tax</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">No</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Tourist tax</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">No</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <h5 class="mb-3 fw-bolder mt-4">Your Documentations</h5>
                                                <div class="scrollbar">
                                                    <table class="w-100">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 176px"></th>
                                                                <th style="width: 32px"></th>
                                                                <th></th>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Property Registration No.</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Null</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap  pb-3">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Business Registration No.</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  pb-3 text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Null</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-top pt-3 text-nowrap">
                                                                    <h5 class="fw-semibold text-body-highlight mb-0">Taxpayer Identification No.</h5>
                                                                </td>
                                                                <td class="border-top px-3 pt-3 w-max-content">
                                                                    <p class="mb-0 w-max-content">:</p>
                                                                </td>
                                                                <td class="border-top pt-3  text-nowrap">
                                                                    <p class="mb-0 text-body-secondary">Null</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <button class="btn btn-primary px-6 px-sm-11" type="submit">Done</button>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6" data-wizard-footer="data-wizard-footer">
                            <div class="d-none" data-wizard-prev-btn="data-wizard-prev-btn"></div>
                            <button class="btn btn-primary px-6 px-sm-11" type="submit" data-wizard-next-btn="data-wizard-next-btn" id="submit-form">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('vendors/dropzone/dropzone-min.js'); ?>"></script>
<script src="<?= base_url('vendors/nouislider/nouislider.min.js'); ?>"></script>
<script src="<?= base_url('vendors/flatpickr/flatpickr.min.js'); ?>"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const noRadio = document.getElementById("no1");
        const yesRadio = document.getElementById("yes1");
        const chainInput = document.getElementById("chain_name");

        function toggleChainInput() {
            chainInput.disabled = noRadio.checked;
        }
        toggleChainInput();

        noRadio.addEventListener("change", toggleChainInput);
        yesRadio.addEventListener("change", toggleChainInput);

        // nav tabs
        document.getElementById('submit-form').addEventListener('click', function() {
            let activeTab = document.querySelector('.tab-pane.active');
            if (activeTab) {
                let form = activeTab.querySelector('form');
                if (form && form.id !== 'addPropertyWizardForm3') form.submit();
                if (form.id == 'addAmenitiesWizardForm') form.submit();
            }
        });

        document.getElementById('add_ame').addEventListener('click', () => {
            document.getElementById('addPropertyWizardForm3').submit();
        })

        // Notifications 
        const hasSuccess = <?= session()->has('success') ? 'true' : 'false' ?>;
        const hasErrors = <?= session()->has('errors') ? 'true' : 'false' ?>;
        if (hasSuccess) {
            const successToast = document.querySelector('.toast-success');
            if (successToast) {
                var toast = new bootstrap.Toast(successToast);
                toast.show();
            }
        }

        if (hasErrors) {
            const errorToast = document.querySelector('.toast-errors');
            if (errorToast) {
                var toast = new bootstrap.Toast(errorToast);
                toast.show();
            }
        }
    });
</script>