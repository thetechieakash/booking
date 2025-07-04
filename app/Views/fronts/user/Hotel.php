<div class="container-medium-md px-0 px-md-3">
    <div class="px-3 py-8 position-relative">
        <div class="bg-holder overlay rounded-md-2"
            style="background-image:url(<?= base_url('assets/img/bg/42.png') ?>);background-position: center; background-size: cover;">
        </div>
        <!--/.bg-holder-->
        <div class="row gx-0 gy-3 gy-md-0 align-items-center mx-auto p-3 bg-body-emphasis rounded-5 rounded-md-pill position-relative border w-lg-75">
            <div class="col-12 col-md">
                <div class="form-icon-container border-bottom border-bottom-md-0 border-translucent pb-3 pb-md-0">
                    <input class="form-control form-icon-input border-0 py-0 shadow-none fs-8" type="text" placeholder="Pick a place" />
                    <span class="fa-solid fa-map-marker-alt form-icon text-body-tertiary top-0" data-fa-transform="down-2"></span>
                </div>
            </div>
            <div class="col-6 col-md">
                <div class="form-icon-container flatpickr-input-container">
                    <input class="form-control datetimepicker form-icon-input border-y-0 border-start-0 border-start-md py-0 shadow-none border-translucent fs-8 rounded-0" type="text" placeholder="Pick a date" data-options='{"mode":"range","dateFormat":"d/m/y","disableMobile":true}' />
                    <span class="fa-solid fa-calendar form-icon top-0 text-body-tertiary" data-fa-transform="down-2"></span>
                </div>
            </div>
            <div class="col-6 col-md">
                <button class="btn px-3 fs-8 fw-semibold text-body-tertiary" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
                    <span class="fa-solid fa-user me-2"></span>1 adult</button>
                <div class="dropdown-menu dropdown-menu-start p-4" style="max-width: 320px">
                    <div class="row align-items-center g-0 pb-3 border-bottom border-translucent">
                        <div class="col-5">
                            <h5 class="mb-0 text-body">Adults</h5>
                        </div>
                        <div class="col-7">
                            <div class="input-group gap-2" data-quantity="data-quantity"><button
                                    class="btn btn-phoenix-primary px-2 rounded" data-type="minus"><span
                                        class="fa-solid fa-minus px-1"></span></button><input
                                    class="form-control border-translucent input-spin-none text-center rounded"
                                    id="adults" type="number" value="2" /><button
                                    class="btn btn-phoenix-primary px-2 rounded" data-type="plus"><span
                                        class="fa-solid fa-plus px-1"></span></button></div>
                        </div>
                    </div>
                    <div class="row align-items-center g-0 py-3 border-bottom border-translucent">
                        <div class="col-5">
                            <h5 class="mb-0 text-body">Infants</h5>
                        </div>
                        <div class="col-7">
                            <div class="input-group gap-2" data-quantity="data-quantity"><button
                                    class="btn btn-phoenix-primary px-2 rounded" data-type="minus"><span
                                        class="fa-solid fa-minus px-1"></span></button><input
                                    class="form-control border-translucent input-spin-none text-center rounded"
                                    id="infants" type="number" value="2" /><button
                                    class="btn btn-phoenix-primary px-2 rounded" data-type="plus"><span
                                        class="fa-solid fa-plus px-1"></span></button></div>
                        </div>
                    </div>
                    <div class="row align-items-center g-0 pt-3">
                        <div class="col-5">
                            <h5 class="mb-0 text-body">Children</h5>
                        </div>
                        <div class="col-7">
                            <div class="input-group gap-2" data-quantity="data-quantity"><button
                                    class="btn btn-phoenix-primary px-2 rounded" data-type="minus"><span
                                        class="fa-solid fa-minus px-1"></span></button><input
                                    class="form-control border-translucent input-spin-none text-center rounded"
                                    id="children" type="number" value="2" /><button
                                    class="btn btn-phoenix-primary px-2 rounded" data-type="plus"><span
                                        class="fa-solid fa-plus px-1"></span></button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-auto"><button class="btn btn-lg btn-phoenix-primary rounded-pill w-100"><span
                        class="fa-solid fa-search me-2"></span>Search</button></div>
        </div>
    </div>
</div>

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-0">
    <div class="container-medium">
        <div class="py-6">
            <div class="d-flex"><select class="form-select w-sm-auto me-4" id="hotelSort" name="Hotel sort">
                    <option>Sort by</option>
                    <option>Best reviewed and lowest price</option>
                    <option>Option 1</option>
                    <option>Option 2</option>
                </select><button class="btn btn-phoenix-secondary text-nowrap px-3 px-md-4 ms-auto me-2"><span
                        class="fa-solid fa-map me-md-2"></span><span class="d-none d-md-inline-block">Show in
                        map</span></button><button class="btn btn-phoenix-secondary text-nowrap px-3" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#hotelFilterOffcanvas"
                    aria-controls="hotelFilterOffcanvas"><span class="fa-solid fa-filter me-md-2"></span><span
                        class="d-none d-md-inline-block">Filters</span></button></div>
        </div>
        <div class="row g-3 mb-6">
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden">
                    <img class="img-fluid" src="<?= base_url('assets/img/hotels/1.png'); ?>" alt="" loading="lazy"/>
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="<?= route_to('hotelDetails') ?>">Hotel
                            Palace</a>
                        <p class="mb-2 text-secondary-lighter"><span
                                class="fa-solid fa-map-marker-alt me-2"></span>Bangkok, Thailand</p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">3.8</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$33.48 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden"><img class="img-fluid"
                        src="../../../../assets/img/hotels/2.png" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">Silom Furama</a>
                        <p class="mb-2 text-secondary-lighter"><span
                                class="fa-solid fa-map-marker-alt me-2"></span>Bangkok, Thailand</p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">4.0</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$32.27 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden"><img class="img-fluid"
                        src="<?= base_url('assets/img/hotels/3.png'); ?>" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">Hotel Prince
                            Palace</a>
                        <p class="mb-2 text-secondary-lighter"><span
                                class="fa-solid fa-map-marker-alt me-2"></span>Bangkok, Thailand</p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">3.9</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$38.96 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden"><img class="img-fluid"
                        src="../../../../assets/img/hotels/4.png" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">Hotel Grandmas
                            Plus</a>
                        <p class="mb-2 text-secondary-lighter"><span
                                class="fa-solid fa-map-marker-alt me-2"></span>Bali, Indonesia</p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">4.5</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$13.99 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden"><img class="img-fluid"
                        src="../../../../assets/img/hotels/5.png" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">Hotel Asia Solo</a>
                        <p class="mb-2 text-secondary-lighter"><span class="fa-solid fa-map-marker-alt me-2"></span>Jawa
                            Tengah, Indonesia</p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">3.9</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$14.66 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden"><img class="img-fluid"
                        src="../../../../assets/img/hotels/6.png" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">Golden Inn Kuta</a>
                        <p class="mb-2 text-secondary-lighter"><span
                                class="fa-solid fa-map-marker-alt me-2"></span>Bali, Indonesia</p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">4.4</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$52.91 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden"><img class="img-fluid"
                        src="../../../../assets/img/hotels/7.png" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">The Shanty
                            House</a>
                        <p class="mb-2 text-secondary-lighter"><span
                                class="fa-solid fa-map-marker-alt me-2"></span>Bali, Indonesia</p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">4.7</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$87.71 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden"><img class="img-fluid"
                        src="../../../../assets/img/hotels/8.png" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">Hotel Kiwi
                            International</a>
                        <p class="mb-2 text-secondary-lighter"><span class="fa-solid fa-map-marker-alt me-2"></span>New
                            Zealand</p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">3.7</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$41.19 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden"><img class="img-fluid"
                        src="../../../../assets/img/hotels/9.png" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">Residences of the
                            Angel</a>
                        <p class="mb-2 text-secondary-lighter"><span
                                class="fa-solid fa-map-marker-alt me-2"></span>Locarno, Switzerland</p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">4.9</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$83.41 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden"><img class="img-fluid"
                        src="../../../../assets/img/hotels/10.png" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">Brenig Kulm's
                            Gasthaus</a>
                        <p class="mb-2 text-secondary-lighter"><span
                                class="fa-solid fa-map-marker-alt me-2"></span>Meiringen, Switzerland</p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">4.2</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$109.29 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden"><img class="img-fluid"
                        src="../../../../assets/img/hotels/11.png" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">The Andermatt
                            Chedi</a>
                        <p class="mb-2 text-secondary-lighter">
                            <span class="fa-solid fa-map-marker-alt me-2"></span>Andermatt, Switzerland
                        </p>
                        <div class="d-flex align-items-center gap-3">
                            <span class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal">
                                <span class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span>
                                <span class="badge-label">4.6</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$107.25 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden">
                    <img class="img-fluid" src="<?= base_url('assets/img/hotels/12.png'); ?>" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5">
                        <button class="btn btn-wish">
                            <span class="far fa-heart" data-fa-transform="down-1"></span>
                        </button>
                    </div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">Interlaken
                            Alplodge</a>
                        <p class="mb-2 text-secondary-lighter">
                            <span class="fa-solid fa-map-marker-alt me-2"></span>Interlaken, Switzerland
                        </p>
                        <div class="d-flex align-items-center gap-3">
                            <span class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal">
                                <span class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span>
                                <span class="badge-label">4.5</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$120.32 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden"><img class="img-fluid"
                        src="../../../../assets/img/hotels/13.png" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">Inn at Agus
                            Beach</a>
                        <p class="mb-2 text-secondary-lighter"><span
                                class="fa-solid fa-map-marker-alt me-2"></span>Bali, Indonesia</p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">4.2</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$25.98 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden"><img class="img-fluid"
                        src="../../../../assets/img/hotels/14.png" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">Hotel Cahya
                            Nirwana</a>
                        <p class="mb-2 text-secondary-lighter"><span class="fa-solid fa-map-marker-alt me-2"></span>Jawa
                            Tengah, Indonesia</p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">4.1</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$22.45 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden"><img class="img-fluid"
                        src="../../../../assets/img/hotels/15.png" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">Villas at Atoll
                            Haven</a>
                        <p class="mb-2 text-secondary-lighter"><span
                                class="fa-solid fa-map-marker-alt me-2"></span>Bali, Indonesia</p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">3.3</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$145.10 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden"><img class="img-fluid"
                        src="../../../../assets/img/hotels/16.png" alt="" />
                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5"><button class="btn btn-wish"><span
                                class="far fa-heart" data-fa-transform="down-1"></span></button></div>
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"><a
                            class="stretched-link fs-7 text-white fw-bold" href="hotel-details.html">The Sanchaya
                            Hotel</a>
                        <p class="mb-2 text-secondary-lighter"><span
                                class="fa-solid fa-map-marker-alt me-2"></span>Bali, Indonesia</p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">4.5</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">$45.22 <span
                                    class="text-secondary-lighter fs-8 fw-normal">/ night</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->
</section><!-- <section> close ============================-->
<!-- ============================================-->

<div class="offcanvas offcanvas-end" tabindex="-1" id="hotelFilterOffcanvas"
    aria-labelledby="hotelFilterOffcanvasLabel">
    <div class="offcanvas-header p-4 bg-body-highlight">
        <h5 class="mb-0 text-body-highlight" id="hotelFilterOffcanvasLabel">Filter</h5><button class="btn btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body scrollbar p-4">
        <h4 class="text-body-highlight mb-4">Price Range</h4>
        <div class="row g-2">
            <div class="col-6">
                <div class="form-icon-container"><input class="form-control form-icon-input" type="text"
                        placeholder="Minimum amount: $245" /><span
                        class="fa-solid fa-dollar-sign form-icon text-body-tertiary fs-9"></span></div>
            </div>
            <div class="col-6">
                <div class="form-icon-container"><input class="form-control form-icon-input" type="text"
                        placeholder="Maximum amount: $245" /><span
                        class="fa-solid fa-dollar-sign form-icon text-body-tertiary fs-9"></span></div>
            </div>
        </div>
        <div class="noUi-primary-lighter noUi-slider-large noUi-handle-primary noUi-handle-circle ps-5 pe-3 mt-3"
            data-nouislider='{"range":{"min":0,"max":250},"start":[20,150],"connect":true}'></div>
        <hr class="my-5" />
        <h4 class="mb-4 text-body-highlight">Amenities</h4>
        <p class="text-body-tertiary">Essentials</p>
        <div class="row g-3">
            <div class="col-6">
                <div class="form-check"><input class="form-check-input" id="wifi" type="checkbox" value="wifi" /><label
                        class="form-check-label fs-8 text-body-highlight fw-normal" for="wifi">Wifi</label></div>
                <div class="form-check"><input class="form-check-input" id="kitchen" type="checkbox"
                        value="kitchen" /><label class="form-check-label fs-8 text-body-highlight fw-normal"
                        for="kitchen">Kitchen</label></div>
                <div class="form-check"><input class="form-check-input" id="air-conditioning" type="checkbox"
                        value="air-conditioning" /><label class="form-check-label fs-8 text-body-highlight fw-normal"
                        for="air-conditioning">Air conditioning</label></div>
            </div>
            <div class="col-6">
                <div class="form-check"><input class="form-check-input" id="washer" type="checkbox"
                        value="washer" /><label class="form-check-label fs-8 text-body-highlight fw-normal"
                        for="washer">Washer</label></div>
                <div class="form-check"><input class="form-check-input" id="dryer" type="checkbox"
                        value="dryer" /><label class="form-check-label fs-8 text-body-highlight fw-normal"
                        for="dryer">Dryer</label></div>
                <div class="form-check"><input class="form-check-input" id="heating" type="checkbox"
                        value="heating" /><label class="form-check-label fs-8 text-body-highlight fw-normal"
                        for="heating">Heating</label></div>
            </div>
        </div>
        <p class="text-body-tertiary mt-3">Location</p>
        <div class="row g-3">
            <div class="col-6">
                <div class="form-check"><input class="form-check-input" id="beach-front" type="checkbox"
                        value="beach-front" /><label class="form-check-label fs-8 text-body-highlight fw-normal"
                        for="beach-front">Beach-front</label></div>
                <div class="form-check"><input class="form-check-input" id="near-markets" type="checkbox"
                        value="near-markets" /><label class="form-check-label fs-8 text-body-highlight fw-normal"
                        for="near-markets">Near markets</label></div>
            </div>
            <div class="col-6">
                <div class="form-check"><input class="form-check-input" id="water-front" type="checkbox"
                        value="water-front" /><label class="form-check-label fs-8 text-body-highlight fw-normal"
                        for="water-front">Water-front</label></div>
            </div>
        </div><a class="fw-bold fs-9 mt-3 d-inline-block" href="#!">Show more items</a>
        <hr class="my-5" />
        <h4 class="mb-4 text-body-highlight">Number of Private Bathrooms</h4>
        <div class="input-group gap-2 w-70 w-sm-50" data-quantity="data-quantity"><button
                class="btn btn-phoenix-primary px-3 rounded" data-type="minus"><span
                    class="fa-solid fa-minus"></span></button><input
                class="form-control border-translucent input-spin-none text-center rounded" id="private-bathrooms"
                type="number" value="2" /><button class="btn btn-phoenix-primary px-3 rounded" data-type="plus"><span
                    class="fa-solid fa-plus"></span></button></div>
        <h4 class="mb-4 mt-5 text-body-highlight">Number of Bedrooms</h4>
        <div class="input-group gap-2 w-70 w-sm-50" data-quantity="data-quantity"><button
                class="btn btn-phoenix-primary px-3 rounded" data-type="minus"><span
                    class="fa-solid fa-minus"></span></button><input
                class="form-control border-translucent input-spin-none text-center rounded" id="bedrooms" type="number"
                value="2" /><button class="btn btn-phoenix-primary px-3 rounded" data-type="plus"><span
                    class="fa-solid fa-plus"></span></button></div>
        <h4 class="mb-4 mt-5 text-body-highlight">Number of Beds</h4>
        <div class="input-group gap-2 w-70 w-sm-50" data-quantity="data-quantity"><button
                class="btn btn-phoenix-primary px-3 rounded" data-type="minus"><span
                    class="fa-solid fa-minus"></span></button><input
                class="form-control border-translucent input-spin-none text-center rounded" id="beds" type="number"
                value="2" /><button class="btn btn-phoenix-primary px-3 rounded" data-type="plus"><span
                    class="fa-solid fa-plus"></span></button></div>
        <hr class="my-5" />
        <h4 class="mb-4">Rating</h4><input class="rating-radio btn-check" type="radio" name="ratingOption" id="option1"
            autocomplete="off" checked="checked" /><label class="btn w-100 d-flex align-items-center gap-1 mb-2"
            for="option1"><span class="fa-solid fa-star text-warning"></span><span
                class="fa-solid fa-star text-warning"></span><span class="fa-solid fa-star text-warning"></span><span
                class="fa-solid fa-star text-warning"></span><span class="fa-solid fa-star text-warning"></span><span
                class="fa-solid fa-check ms-auto text-primary check-icon"></span></label><input
            class="rating-radio btn-check" type="radio" name="ratingOption" id="option2" autocomplete="off" /><label
            class="btn w-100 d-flex align-items-center gap-1 mb-2" for="option2"><span
                class="fa-solid fa-star text-warning"></span><span class="fa-solid fa-star text-warning"></span><span
                class="fa-solid fa-star text-warning"></span><span class="fa-solid fa-star text-warning"></span><span
                class="fa-regular fa-star text-warning"></span><span class="text-body ms-1 fs-8 fw-normal">and
                above</span><span class="fa-solid fa-check ms-auto text-primary check-icon"></span></label><input
            class="rating-radio btn-check" type="radio" name="ratingOption" id="option3" autocomplete="off" /><label
            class="btn w-100 d-flex align-items-center gap-1 mb-2" for="option3"><span
                class="fa-solid fa-star text-warning"></span><span class="fa-solid fa-star text-warning"></span><span
                class="fa-solid fa-star text-warning"></span><span class="fa-regular fa-star text-warning"></span><span
                class="fa-regular fa-star text-warning"></span><span class="text-body ms-1 fs-8 fw-normal">and
                above</span><span class="fa-solid fa-check ms-auto text-primary check-icon"></span></label><input
            class="rating-radio btn-check" type="radio" name="ratingOption" id="option4" autocomplete="off" /><label
            class="btn w-100 d-flex align-items-center gap-1 mb-2" for="option4"><span
                class="fa-solid fa-star text-warning"></span><span class="fa-solid fa-star text-warning"></span><span
                class="fa-regular fa-star text-warning"></span><span
                class="fa-regular fa-star text-warning"></span><span
                class="fa-regular fa-star text-warning"></span><span class="text-body ms-1 fs-8 fw-normal">and
                above</span><span class="fa-solid fa-check ms-auto text-primary check-icon"></span></label><input
            class="rating-radio btn-check" type="radio" name="ratingOption" id="option5" autocomplete="off" /><label
            class="btn w-100 d-flex align-items-center gap-1" for="option5"><span
                class="fa-solid fa-star text-warning"></span><span class="fa-regular fa-star text-warning"></span><span
                class="fa-regular fa-star text-warning"></span><span
                class="fa-regular fa-star text-warning"></span><span
                class="fa-regular fa-star text-warning"></span><span class="text-body ms-1 fs-8 fw-normal">and
                above</span><span class="fa-solid fa-check ms-auto text-primary check-icon"></span></label>
    </div>
    <div class="p-4 border-top border-translucent d-flex gap-2"><button
            class="btn btn-lg btn-phoenix-primary">Reset</button><button class="btn btn-lg btn-primary flex-1">Show 445
            items</button></div>
</div>