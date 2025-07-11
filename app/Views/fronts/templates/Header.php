<?php $current = uri_string();
$session = session();
?>
<div class="sticky-top bg-body" data-navbar-shadow-on-scroll="data-navbar-shadow-on-scroll">
    <nav class="navbar navbar-top navbar-expand-lg container-medium border-0 bg-body px-3 py-2">
        <button
            class="navbar-toggler fs-8 ps-2 me-sm-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand flex-1 flex-lg-grow-0 me-lg-8 me-xl-13" href="<?= route_to('home') ?>">
            <div class="d-flex align-items-center"><img src="<?= base_url('assets/img/icons/logo.png'); ?>" alt="phoenix"
                    width="27" />
                <h5 class="logo-text ms-2">Booking</h5>
            </div>
        </a>
        <div class="d-flex align-items-center gap-2 gap-sm-3 gap-md-4 my-2 order-lg-1">
            <div class="theme-control-toggle fa-icon-wait">
                <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                    data-theme-control="phoenixTheme" value="dark" id="themeControlToggleSm" />
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggleSm"
                    data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
                    style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span>
                </label>
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggleSm"
                    data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
                    style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label>
            </div>
            <!-- <a class="btn btn-link text-body-tertiary p-0" href="#!">
                <span data-feather="map-pin" style="width: 18px; height: 18px"></span>
            </a> -->
            <!-- <a class="btn btn-link text-body-tertiary p-0" href="#!">
                <span data-feather="bell" style="width: 20px; height: 20px"></span>
            </a> -->
            <a class="btn btn-link text-body-tertiary p-0" href="<?= route_to('user.login') ?>" data-bs-toggle="tooltip"
                data-bs-placement="bottom" data-bs-title="Agent Login">
                <span data-feather="log-in" style="width: 20px; height: 20px"></span>
            </a>

            <?php if ($session->has('userData')): ?>
                <div class=" dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-l ">
                            <img class="rounded-circle " src="<?= base_url('assets/img/team/40x40/57.webp'); ?>" alt="">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
                        aria-labelledby="navbarDropdownUser">
                        <div class="card position-relative border-0">
                            <div class="card-body p-0">
                                <div class="text-center pt-4 pb-3">
                                    <div class="avatar avatar-xl ">
                                        <img class="rounded-circle" src="<?= base_url('assets/img/team/72x72/57.webp'); ?>" alt="">
                                    </div>
                                    <h6 class="mt-2 text-body-emphasis"><?= esc(session()->get('userData')['email']) ?></h6>
                                </div>
                                <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput"
                                        type="text" placeholder="Update your status"></div>
                            </div>
                            <div class="overflow-auto scrollbar" style="height: 10rem;">
                                <ul class="nav d-flex flex-column mb-2 pb-1">
                                    <li class="nav-item">
                                        <a class="nav-link px-3 d-block" href="#!">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user me-2 text-body align-bottom">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg><span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-pie-chart me-2 text-body align-bottom">
                                                <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                                <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                            </svg>Dashboard</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-lock me-2 text-body align-bottom">
                                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg>Posts &amp; Activity</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-settings me-2 text-body align-bottom">
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <path
                                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                </path>
                                            </svg>Settings &amp; Privacy </a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-help-circle me-2 text-body align-bottom">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                            </svg>Help Center</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-globe me-2 text-body align-bottom">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                                <path
                                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                </path>
                                            </svg>Language</a></li>
                                </ul>
                            </div>
                            <div class="card-footer p-0 border-top border-translucent">
                                <ul class="nav d-flex flex-column my-3">
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user-plus me-2 text-body align-bottom">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="8.5" cy="7" r="4"></circle>
                                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                                <line x1="23" y1="11" x2="17" y2="11"></line>
                                            </svg>Add another account</a></li>
                                </ul>
                                <hr>
                                <div class="px-3">
                                    <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="<?= route_to('user.logout.handler') ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-log-out me-2">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>Sign out</a>
                                </div>
                                <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a
                                        class="text-body-quaternary me-1" href="#!">Privacy policy</a>•<a
                                        class="text-body-quaternary mx-1" href="#!">Terms</a>•<a
                                        class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <a class="btn btn-link text-body-tertiary p-0" href="<?= route_to('user.login') ?>">
                    <span data-feather="user" style="width: 20px; height: 20px"></span>
                </a>
            <?php endif; ?>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center pb-0"
            id="navbarTopCollapse">
            <ul class="navbar-nav travel-nav-top me-auto" data-dropdown-on-hover="data-dropdown-on-hover">
                <li class="nav-item dropdown">
                    <a class="nav-link fs-8 fw-bold dropdown-toggle <?= $current == '' ? 'text-primary' : '' ?>"
                        href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false">Hotel</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li><a class="dropdown-item" href="<?= route_to('home') ?>">Homepage</a></li>
                        <li><a class="dropdown-item" href="<?= route_to('hotelDetails') ?>">Hotel Details</a></li>
                        <!-- <li><a class="dropdown-item" href="hotel-compare.html">Hotel Compare</a></li> -->
                        <li><a class="dropdown-item" href="<?= route_to('hotelCheckOut') ?>">Check out</a></li>
                        <!-- <li><a class="dropdown-item" href="payment.html">Payment</a></li> -->
                        <!-- <li><a class="dropdown-item" href="gallery.html">Gallery</a></li> -->
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link fs-8 fw-bold dropdown-toggle <?= $current == 'trip' ? 'text-primary' : '' ?>"
                        href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false">Trip</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li><a class="dropdown-item" href="<?= route_to('trip') ?>">Homepage</a></li>
                        <li><a class="dropdown-item" href="<?= route_to('tripDetails') ?>">Trip Details</a></li>
                        <li><a class="dropdown-item" href="<?= route_to('tripCheckOut') ?>">Checkout</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <div class="search-box navbar-top-search-box d-none d-lg-block py-1" style="width:25rem;">
                        <form action="<?= base_url('search_hotel'); ?>" method="get" class="position-relative" data-bs-toggle="search" data-bs-display="static" aria-expanded="false">
                            <?= csrf_field(); ?>
                            <input class="form-control search-input fuzzy-search rounded-pill form-control-sm" id="searchInput" type="search" placeholder="Search..." aria-label="Search" name="keyword">
                            <span class="fas fa-search search-box-icon"></span>
                        </form>
                        <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search">
                            <button class="btn btn-link p-0" aria-label="Close"></button>
                        </div>
                        <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100 m-0">
                            <div class="scrollbar-overlay" style="max-height: 30rem;" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <div class="list pb-3" id="searchResults">
                                                        <div id="keywordwrapper">
                                                            <hr class="my-0">
                                                            <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Search result for <span id="keyword"></span></h6>
                                                        </div>
                                                        <div class="py-2" id="drdwrapper">
                                                        </div>
                                                        <div id="fallbackwrapper">
                                                            <hr class="my-0">
                                                            <div class="text-center">
                                                                <p class="fallback fw-bold fs-7">No Result Found.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="height: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.getElementById('searchInput');
        const dropdownMenu = input.closest('.search-box').querySelector('.dropdown-menu');
        const keywordEl = document.getElementById('keyword');
        const keywordWrapper = document.getElementById('keywordwrapper');
        const drdWrapper = document.getElementById('drdwrapper');
        const fallbackWrapper = document.getElementById('fallbackwrapper');

        let debounceTimer;

        input.addEventListener('keyup', function(e) {
            if (e.key === 'Enter') return;

            const query = input.value.trim();
            clearTimeout(debounceTimer);

            debounceTimer = setTimeout(() => {
                keywordEl.innerHTML = '';
                drdWrapper.innerHTML = '';
                fallbackWrapper.style.display = 'none';
                keywordWrapper.style.display = 'none';
                if (query.length < 3) {
                    fallbackWrapper.style.display = 'block';
                    dropdownMenu.classList.add('show'); // Force dropdown to stay open
                    return;
                }

                fetch(`<?= base_url('search_hotel'); ?>?keyword=${encodeURIComponent(query)}`, {
                        method: "GET",
                        headers: {
                            "X-Requested-With": "XMLHttpRequest"
                        }
                    })
                    .then(resp => resp.json())
                    .then(resp => {
                        keywordEl.textContent = resp.keyword;
                        keywordWrapper.style.display = 'block';

                        if (resp.hotels && resp.hotels.length > 0) {
                            fallbackWrapper.style.display = 'none';
                            resp.hotels.forEach(hotel => {
                                const link = document.createElement('a');
                                link.className = 'dropdown-item py-2 d-flex align-items-center';
                                link.href = `<?= base_url('hotel/details/'); ?>${hotel.id}`;
                                link.innerHTML = `
                            <div class="file-thumbnail me-2">
                                <img class="h-100 w-100 object-fit-cover rounded-3" src="<?= base_url('image/hotel_thumbnail/'); ?>${hotel.id+'/'+hotel.thumbnail}" alt="${hotel.property_name}">
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0 text-body-highlight title">${hotel.property_name}</h6>
                                <p class="fs-10 mb-0 d-flex text-body-tertiary">
                                    <span class="fw-medium text-body-tertiary text-opacity-85">
                                        ${hotel.description.substring(0, 30)}...
                                    </span>
                                </p>
                            </div>
                        `;
                                drdWrapper.appendChild(link);
                            });

                        } else {
                            fallbackWrapper.style.display = 'block';
                        }

                        dropdownMenu.classList.add('show'); // keep dropdown visible
                    })
                    .catch(err => {
                        console.error('Fetch error:', err);
                        keywordEl.textContent = '';
                        drdWrapper.innerHTML = '';
                        fallbackWrapper.style.display = 'block';
                        keywordWrapper.style.display = 'none';
                        dropdownMenu.classList.add('show');
                    });
            }, 500);
        });

        // Optional: Hide dropdown on outside click
        document.addEventListener('click', function(e) {
            if (!input.closest('.search-box').contains(e.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    });
</script>