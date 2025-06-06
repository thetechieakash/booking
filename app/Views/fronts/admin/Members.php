
<h2 class="text-bold text-body-emphasis mb-5">Members</h2>
<div id="members"
    data-list="{&quot;valueNames&quot;:[&quot;customer&quot;,&quot;email&quot;,&quot;mobile_number&quot;,&quot;city&quot;,&quot;last_active&quot;,&quot;joined&quot;],&quot;page&quot;:10,&quot;pagination&quot;:true}">
    <div class="row align-items-center justify-content-between g-3 mb-4">
        <div class="col col-auto">
            <div class="search-box">
                <form class="position-relative">
                    <input class="form-control search-input search" type="search"
                        placeholder="Search members" aria-label="Search">
                    <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                        </path>
                    </svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                </form>
            </div>
        </div>
        <div class="col-auto">
            <div class="d-flex align-items-center"><button class="btn btn-link text-body me-4 px-0"><svg
                        class="svg-inline--fa fa-file-export fs-9 me-2" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="file-export" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 576 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V288H216c-13.3 0-24 10.7-24 24s10.7 24 24 24H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zM384 336V288H494.1l-39-39c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9l-80 80c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l39-39H384zm0-208H256V0L384 128z">
                        </path>
                    </svg><!-- <span class="fa-solid fa-file-export fs-9 me-2"></span> Font Awesome fontawesome.com -->Export</button><button
                    class="btn btn-primary"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="plus" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z">
                        </path>
                    </svg><!-- <span class="fas fa-plus me-2"></span> Font Awesome fontawesome.com -->Add
                    member</button></div>
        </div>
    </div>
    <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-body-emphasis border-y mt-2 position-relative top-1">
        <div class="table-responsive scrollbar ms-n1 ps-1">
            <table class="table table-sm fs-9 mb-0">
                <thead>
                    <tr>
                        <th class="white-space-nowrap fs-9 align-middle ps-0">
                            <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                    id="checkbox-bulk-members-select" type="checkbox"
                                    data-bulk-select="{&quot;body&quot;:&quot;members-table-body&quot;}"></div>
                        </th>
                        <th class="sort align-middle" scope="col" data-sort="customer"
                            style="width:15%; min-width:200px;">CUSTOMER</th>
                        <th class="sort align-middle" scope="col" data-sort="email" style="width:15%; min-width:200px;">
                            EMAIL</th>
                        <th class="sort align-middle pe-3" scope="col" data-sort="mobile_number"
                            style="width:20%; min-width:200px;">MOBILE NUMBER</th>
                        <th class="sort align-middle" scope="col" data-sort="city" style="width:10%;">CITY</th>
                        <th class="sort align-middle text-end" scope="col" data-sort="last_active"
                            style="width:21%;  min-width:200px;">LAST ACTIVE</th>
                        <th class="sort align-middle text-end pe-0" scope="col" data-sort="joined"
                            style="width:19%;  min-width:200px;">JOINED</th>
                    </tr>
                </thead>
                <tbody class="list" id="members-table-body">
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="fs-9 align-middle ps-0 py-3">
                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                                    data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/32.webp&quot;,&quot;name&quot;:&quot;Carry Anna&quot;},&quot;email&quot;:&quot;annac34@gmail.com&quot;,&quot;mobile&quot;:&quot;+912346578&quot;,&quot;city&quot;:&quot;Budapest&quot;,&quot;lastActive&quot;:&quot;34 min ago&quot;,&quot;joined&quot;:&quot;Dec 12, 12:56 PM&quot;}">
                            </div>
                        </td>
                        <td class="customer align-middle white-space-nowrap"><a
                                class="d-flex align-items-center text-body text-hover-1000" href="#!">
                                <div class="avatar avatar-m"><img class="rounded-circle"
                                        src="../assets/img/team/32.webp" alt=""></div>
                                <h6 class="mb-0 ms-3 fw-semibold">Carry Anna</h6>
                            </a></td>
                        <td class="email align-middle white-space-nowrap"><a class="fw-semibold"
                                href="mailto:annac34@gmail.com">annac34@gmail.com</a></td>
                        <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-body-emphasis"
                                href="tel:+912346578">+912346578</a></td>
                        <td class="city align-middle white-space-nowrap text-body">Budapest</td>
                        <td class="last_active align-middle text-end white-space-nowrap text-body-tertiary">34 min
                            ago</td>
                        <td class="joined align-middle white-space-nowrap text-body-tertiary text-end">Dec 12, 12:56
                            PM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="fs-9 align-middle ps-0 py-3">
                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                                    data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/avatar.webp&quot;,&quot;name&quot;:&quot;Milind Mikuja&quot;,&quot;placeholder&quot;:true},&quot;email&quot;:&quot;mimiku@yahoo.com&quot;,&quot;mobile&quot;:&quot;+8801564768976&quot;,&quot;city&quot;:&quot;Manchester&quot;,&quot;lastActive&quot;:&quot;6 hours ago&quot;,&quot;joined&quot;:&quot;Dec 9, 2:28 PM&quot;}">
                            </div>
                        </td>
                        <td class="customer align-middle white-space-nowrap"><a
                                class="d-flex align-items-center text-body text-hover-1000" href="#!">
                                <div class="avatar avatar-m"><img class="rounded-circle avatar-placeholder"
                                        src="../assets/img/team/avatar.webp" alt=""></div>
                                <h6 class="mb-0 ms-3 fw-semibold">Milind Mikuja</h6>
                            </a></td>
                        <td class="email align-middle white-space-nowrap"><a class="fw-semibold"
                                href="mailto:mimiku@yahoo.com">mimiku@yahoo.com</a></td>
                        <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-body-emphasis"
                                href="tel:+8801564768976">+8801564768976</a></td>
                        <td class="city align-middle white-space-nowrap text-body">Manchester</td>
                        <td class="last_active align-middle text-end white-space-nowrap text-body-tertiary">6 hours
                            ago</td>
                        <td class="joined align-middle white-space-nowrap text-body-tertiary text-end">Dec 9, 2:28
                            PM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="fs-9 align-middle ps-0 py-3">
                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                                    data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/35.webp&quot;,&quot;name&quot;:&quot;Stanly Drinkwater&quot;},&quot;email&quot;:&quot;stnlwasser@hotmail.com&quot;,&quot;mobile&quot;:&quot;+78675436798&quot;,&quot;city&quot;:&quot;Smallville&quot;,&quot;lastActive&quot;:&quot;43 min ago&quot;,&quot;joined&quot;:&quot;Dec 4, 12:56 PM&quot;}">
                            </div>
                        </td>
                        <td class="customer align-middle white-space-nowrap"><a
                                class="d-flex align-items-center text-body text-hover-1000" href="#!">
                                <div class="avatar avatar-m"><img class="rounded-circle"
                                        src="../assets/img/team/35.webp" alt=""></div>
                                <h6 class="mb-0 ms-3 fw-semibold">Stanly Drinkwater</h6>
                            </a></td>
                        <td class="email align-middle white-space-nowrap"><a class="fw-semibold"
                                href="mailto:stnlwasser@hotmail.com">stnlwasser@hotmail.com</a></td>
                        <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-body-emphasis"
                                href="tel:+78675436798">+78675436798</a></td>
                        <td class="city align-middle white-space-nowrap text-body">Smallville</td>
                        <td class="last_active align-middle text-end white-space-nowrap text-body-tertiary">43 min
                            ago</td>
                        <td class="joined align-middle white-space-nowrap text-body-tertiary text-end">Dec 4, 12:56
                            PM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="fs-9 align-middle ps-0 py-3">
                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                                    data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/57.webp&quot;,&quot;name&quot;:&quot;Josef Stravinsky&quot;},&quot;email&quot;:&quot;Josefsky@sni.it&quot;,&quot;mobile&quot;:&quot;+118796567894&quot;,&quot;city&quot;:&quot;Metropolis&quot;,&quot;lastActive&quot;:&quot;2 hours ago&quot;,&quot;joined&quot;:&quot;Dec 1,  4:07 AM&quot;}">
                            </div>
                        </td>
                        <td class="customer align-middle white-space-nowrap"><a
                                class="d-flex align-items-center text-body text-hover-1000" href="#!">
                                <div class="avatar avatar-m"><img class="rounded-circle"
                                        src="../assets/img/team/57.webp" alt=""></div>
                                <h6 class="mb-0 ms-3 fw-semibold">Josef Stravinsky</h6>
                            </a></td>
                        <td class="email align-middle white-space-nowrap"><a class="fw-semibold"
                                href="mailto:Josefsky@sni.it">Josefsky@sni.it</a></td>
                        <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-body-emphasis"
                                href="tel:+118796567894">+118796567894</a></td>
                        <td class="city align-middle white-space-nowrap text-body">Metropolis</td>
                        <td class="last_active align-middle text-end white-space-nowrap text-body-tertiary">2 hours
                            ago</td>
                        <td class="joined align-middle white-space-nowrap text-body-tertiary text-end">Dec 1, 4:07
                            AM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="fs-9 align-middle ps-0 py-3">
                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                                    data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/58.webp&quot;,&quot;name&quot;:&quot;Igor Borvibson&quot;},&quot;email&quot;:&quot;vibigorr@technext.it&quot;,&quot;mobile&quot;:&quot;+65899655678&quot;,&quot;city&quot;:&quot;Central city&quot;,&quot;lastActive&quot;:&quot;5 days ago&quot;,&quot;joined&quot;:&quot;Nov 28, 7:28 PM&quot;}">
                            </div>
                        </td>
                        <td class="customer align-middle white-space-nowrap"><a
                                class="d-flex align-items-center text-body text-hover-1000" href="#!">
                                <div class="avatar avatar-m"><img class="rounded-circle"
                                        src="../assets/img/team/58.webp" alt=""></div>
                                <h6 class="mb-0 ms-3 fw-semibold">Igor Borvibson</h6>
                            </a></td>
                        <td class="email align-middle white-space-nowrap"><a class="fw-semibold"
                                href="mailto:vibigorr@technext.it">vibigorr@technext.it</a></td>
                        <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-body-emphasis"
                                href="tel:+65899655678">+65899655678</a></td>
                        <td class="city align-middle white-space-nowrap text-body">Central city</td>
                        <td class="last_active align-middle text-end white-space-nowrap text-body-tertiary">5 days
                            ago</td>
                        <td class="joined align-middle white-space-nowrap text-body-tertiary text-end">Nov 28, 7:28
                            PM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="fs-9 align-middle ps-0 py-3">
                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                                    data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/59.webp&quot;,&quot;name&quot;:&quot;Katerina Karenin&quot;},&quot;email&quot;:&quot;karkat99@gmail.com&quot;,&quot;mobile&quot;:&quot;+00564327890&quot;,&quot;city&quot;:&quot;Gotham&quot;,&quot;lastActive&quot;:&quot;2 weeks ago&quot;,&quot;joined&quot;:&quot;Nov 24, 10:16 AM&quot;}">
                            </div>
                        </td>
                        <td class="customer align-middle white-space-nowrap"><a
                                class="d-flex align-items-center text-body text-hover-1000" href="#!">
                                <div class="avatar avatar-m"><img class="rounded-circle"
                                        src="../assets/img/team/59.webp" alt=""></div>
                                <h6 class="mb-0 ms-3 fw-semibold">Katerina Karenin</h6>
                            </a></td>
                        <td class="email align-middle white-space-nowrap"><a class="fw-semibold"
                                href="mailto:karkat99@gmail.com">karkat99@gmail.com</a></td>
                        <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-body-emphasis"
                                href="tel:+00564327890">+00564327890</a></td>
                        <td class="city align-middle white-space-nowrap text-body">Gotham</td>
                        <td class="last_active align-middle text-end white-space-nowrap text-body-tertiary">2 weeks
                            ago</td>
                        <td class="joined align-middle white-space-nowrap text-body-tertiary text-end">Nov 24, 10:16
                            AM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="fs-9 align-middle ps-0 py-3">
                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                                    data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;&quot;,&quot;name&quot;:&quot;Roy Anderson&quot;},&quot;email&quot;:&quot;andersonroy@netflix.chill&quot;,&quot;mobile&quot;:&quot;+55890776&quot;,&quot;city&quot;:&quot;Vancouver&quot;,&quot;lastActive&quot;:&quot;4 days ago&quot;,&quot;joined&quot;:&quot;Nov 18, 5:43 PM&quot;}">
                            </div>
                        </td>
                        <td class="customer align-middle white-space-nowrap"><a
                                class="d-flex align-items-center text-body text-hover-1000" href="#!">
                                <div class="avatar avatar-m">
                                    <div class="avatar-name rounded-circle"><span>R</span></div>
                                </div>
                                <h6 class="mb-0 ms-3 fw-semibold">Roy Anderson</h6>
                            </a></td>
                        <td class="email align-middle white-space-nowrap"><a class="fw-semibold"
                                href="mailto:andersonroy@netflix.chill">andersonroy@netflix.chill</a></td>
                        <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-body-emphasis"
                                href="tel:+55890776">+55890776</a></td>
                        <td class="city align-middle white-space-nowrap text-body">Vancouver</td>
                        <td class="last_active align-middle text-end white-space-nowrap text-body-tertiary">4 days
                            ago</td>
                        <td class="joined align-middle white-space-nowrap text-body-tertiary text-end">Nov 18, 5:43
                            PM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="fs-9 align-middle ps-0 py-3">
                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                                    data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/31.webp&quot;,&quot;name&quot;:&quot;Martina scorcese&quot;},&quot;email&quot;:&quot;cesetina1@gmail.com&quot;,&quot;mobile&quot;:&quot;+666611896&quot;,&quot;city&quot;:&quot;Viena&quot;,&quot;lastActive&quot;:&quot;6 min ago&quot;,&quot;joined&quot;:&quot;Nov 18, 2:09 AM&quot;}">
                            </div>
                        </td>
                        <td class="customer align-middle white-space-nowrap"><a
                                class="d-flex align-items-center text-body text-hover-1000" href="#!">
                                <div class="avatar avatar-m"><img class="rounded-circle"
                                        src="../assets/img/team/31.webp" alt=""></div>
                                <h6 class="mb-0 ms-3 fw-semibold">Martina scorcese</h6>
                            </a></td>
                        <td class="email align-middle white-space-nowrap"><a class="fw-semibold"
                                href="mailto:cesetina1@gmail.com">cesetina1@gmail.com</a></td>
                        <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-body-emphasis"
                                href="tel:+666611896">+666611896</a></td>
                        <td class="city align-middle white-space-nowrap text-body">Viena</td>
                        <td class="last_active align-middle text-end white-space-nowrap text-body-tertiary">6 min
                            ago</td>
                        <td class="joined align-middle white-space-nowrap text-body-tertiary text-end">Nov 18, 2:09
                            AM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="fs-9 align-middle ps-0 py-3">
                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                                    data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/33.webp&quot;,&quot;name&quot;:&quot;Luis Bunuel&quot;},&quot;email&quot;:&quot;luisuel@live.com&quot;,&quot;mobile&quot;:&quot;+55786534&quot;,&quot;city&quot;:&quot;Bangalore&quot;,&quot;lastActive&quot;:&quot;56 min ago&quot;,&quot;joined&quot;:&quot;Nov 16, 3:22 PM&quot;}">
                            </div>
                        </td>
                        <td class="customer align-middle white-space-nowrap"><a
                                class="d-flex align-items-center text-body text-hover-1000" href="#!">
                                <div class="avatar avatar-m"><img class="rounded-circle"
                                        src="../assets/img/team/33.webp" alt=""></div>
                                <h6 class="mb-0 ms-3 fw-semibold">Luis Bunuel</h6>
                            </a></td>
                        <td class="email align-middle white-space-nowrap"><a class="fw-semibold"
                                href="mailto:luisuel@live.com">luisuel@live.com</a></td>
                        <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-body-emphasis"
                                href="tel:+55786534">+55786534</a></td>
                        <td class="city align-middle white-space-nowrap text-body">Bangalore</td>
                        <td class="last_active align-middle text-end white-space-nowrap text-body-tertiary">56 min
                            ago</td>
                        <td class="joined align-middle white-space-nowrap text-body-tertiary text-end">Nov 16, 3:22
                            PM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="fs-9 align-middle ps-0 py-3">
                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                                    data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/34.webp&quot;,&quot;name&quot;:&quot;Jean Renoir&quot;},&quot;email&quot;:&quot;renoirjean1836@gmail.com&quot;,&quot;mobile&quot;:&quot;+8801765458767&quot;,&quot;city&quot;:&quot;Chittagong&quot;,&quot;lastActive&quot;:&quot;Yesterday&quot;,&quot;joined&quot;:&quot;Nov 09, 8:49 AM&quot;}">
                            </div>
                        </td>
                        <td class="customer align-middle white-space-nowrap"><a
                                class="d-flex align-items-center text-body text-hover-1000" href="#!">
                                <div class="avatar avatar-m"><img class="rounded-circle"
                                        src="../assets/img/team/34.webp" alt=""></div>
                                <h6 class="mb-0 ms-3 fw-semibold">Jean Renoir</h6>
                            </a></td>
                        <td class="email align-middle white-space-nowrap"><a class="fw-semibold"
                                href="mailto:renoirjean1836@gmail.com">renoirjean1836@gmail.com</a></td>
                        <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-body-emphasis"
                                href="tel:+8801765458767">+8801765458767</a></td>
                        <td class="city align-middle white-space-nowrap text-body">Chittagong</td>
                        <td class="last_active align-middle text-end white-space-nowrap text-body-tertiary">
                            Yesterday</td>
                        <td class="joined align-middle white-space-nowrap text-body-tertiary text-end">Nov 09, 8:49
                            AM</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
            <div class="col-auto d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info">1 to 10
                    <span class="text-body-tertiary"> Items of </span>15
                </p><a class="fw-semibold" href="#!" data-list-view="*">View all<svg
                        class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""
                        style="transform-origin: 0.3125em 0.5625em;">
                        <g transform="translate(160 256)">
                            <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                <path fill="currentColor"
                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"
                                    transform="translate(-160 -256)"></path>
                            </g>
                        </g>
                    </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a><a
                    class="fw-semibold d-none" href="#!" data-list-view="less">View Less<svg
                        class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""
                        style="transform-origin: 0.3125em 0.5625em;">
                        <g transform="translate(160 256)">
                            <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                <path fill="currentColor"
                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"
                                    transform="translate(-160 -256)"></path>
                            </g>
                        </g>
                    </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
            </div>
            <div class="col-auto d-flex"><button class="page-link disabled" data-list-pagination="prev" disabled=""><svg
                        class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                        data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                        </path>
                    </svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                <ul class="mb-0 pagination">
                    <li class="active"><button class="page" type="button" data-i="1" data-page="10">1</button></li>
                    <li><button class="page" type="button" data-i="2" data-page="10">2</button></li>
                </ul><button class="page-link pe-0" data-list-pagination="next"><svg
                        class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                        data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
                        </path>
                    </svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
            </div>
        </div>
    </div>
</div>