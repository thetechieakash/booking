<?php $current = uri_string();
// echo $current;
?>
<div class="sticky-top bg-body" data-navbar-shadow-on-scroll="data-navbar-shadow-on-scroll">
    <nav class="navbar navbar-top navbar-expand-lg container-medium border-0 bg-body px-3 py-2"><button
            class="navbar-toggler fs-8 ps-2 me-sm-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <a class="navbar-brand flex-1 flex-lg-grow-0 me-lg-8 me-xl-13" href="<?= site_url('/') ?>">
            <div class="d-flex align-items-center"><img src="../../../../assets/img/icons/logo.png" alt="phoenix"
                    width="27" />
                <h5 class="logo-text ms-2">phoenix</h5>
            </div>
        </a>
        <div class="d-flex align-items-center gap-2 gap-sm-3 gap-md-4 my-2 order-lg-1">
            <div class="theme-control-toggle fa-icon-wait"><input
                    class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                    data-theme-control="phoenixTheme" value="dark" id="themeControlToggleSm" /><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggleSm"
                    data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
                    style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggleSm"
                    data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
                    style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div><a
                class="btn btn-link text-body-tertiary p-0" href="#!"><span data-feather="map-pin"
                    style="width: 18px; height: 18px"></span></a><a class="btn btn-link text-body-tertiary p-0"
                href="#!"><span data-feather="bell" style="width: 20px; height: 20px"></span></a><a
                class="btn btn-link text-body-tertiary p-0" href="../../../../pages/authentication/card/sign-in.html"
                data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Agent Login"><span
                    data-feather="log-in" style="width: 20px; height: 20px"></span></a><a
                class="btn btn-link text-body-tertiary p-0" href="#!"><span data-feather="user"
                    style="width: 20px; height: 20px"></span></a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center pb-0"
            id="navbarTopCollapse">
            <ul class="navbar-nav travel-nav-top me-auto" data-dropdown-on-hover="data-dropdown-on-hover">
                <li class="nav-item dropdown">
                    <a class="nav-link fs-8 fw-bold dropdown-toggle <?= $current == '' ? 'text-primary' : '' ?>" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                        aria-expanded="false">Hotel</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li><a class="dropdown-item" href="homepage.html">Homepage</a></li>
                        <li><a class="dropdown-item" href="hotel-details.html">Hotel Details</a></li>
                        <li><a class="dropdown-item" href="hotel-compare.html">Hotel Compare</a></li>
                        <li><a class="dropdown-item" href="checkout.html">Check out</a></li>
                        <li><a class="dropdown-item" href="payment.html">Payment</a></li>
                        <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link fs-8 fw-bold dropdown-toggle <?= $current == 'trip' ? 'text-primary' : '' ?>" href="#!" role="button"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                        aria-expanded="false">Trip</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li><a class="dropdown-item" href="<?= site_url('/trip')?>">Homepage</a></li>
                        <li><a class="dropdown-item" href="../../trip/trip-details.html">Trip Details</a></li>
                        <li><a class="dropdown-item" href="../../trip/checkout.html">Checkout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>