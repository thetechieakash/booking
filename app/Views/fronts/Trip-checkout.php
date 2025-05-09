<section class="pt-4 pb-9">
    <div class="container-medium">
        <div class="row justify-content-between gy-5 gx-lg-0">
            <div class="col-lg-6">
                <nav class="mb-3" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= route_to('trip') ?>" class="<?= uri_string() == 'home' ? ' text-decoration-underline text-primary' : 'text-black' ?>">Trips</a></li>
                <li class="breadcrumb-item"><a href="<?= route_to('tripDetails') ?>" class="<?= uri_string() == 'trip/details' ? ' text-decoration-underline text-primary' : 'text-black' ?>">Details</a></li>
                <li class="breadcrumb-item"><a href="<?= route_to('tripCheckOut') ?>" class="<?= uri_string() == 'trip/checkout' ? ' text-decoration-underline text-primary' : 'text-black' ?>">Check Out</a></li>
            </ol>
                </nav>
                <h2 class="mb-0">Check out</h2>
                <hr class="mt-5 mb-7">
                <h3 class="mb-5">Contact details</h3>
                <div class="row g-3 mb-3">
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1"
                            for="email">Email</label><input class="form-control" type="text" id="email"
                            placeholder="Enter email address"></div>
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1" for="phone-number">Phone
                            number</label><input class="form-control" type="text" id="phone-number"
                            placeholder="Enter phone number"></div>
                </div>
                <div class="form-check"><input class="form-check-input" id="recieveUpdate" type="checkbox"><label
                        class="form-check-label fw-normal fs-8 text-body" for="recieveUpdate">Get booking updates via
                        SMS.</label><a class="text-nowrap" href="#!"> Terms apply</a></div>
                <hr class="my-7">
                <h3 class="mb-3">Traveler details</h3>
                <div class="form-check mb-5"><input class="form-check-input" id="anotherCountry" type="checkbox"><label
                        class="form-check-label fw-normal fs-8 text-body" for="anotherCountry">I am travelling from
                        another country</label></div>
                <div class="row gx-3 gy-4">
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1" for="first-name">First
                            name</label><input class="form-control" type="text" id="first-name"
                            placeholder="Enter first name"></div>
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1" for="last-name">Last
                            name</label><input class="form-control" type="text" id="last-name"
                            placeholder="Enter last name"></div>
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1" for="date-of-birth">Date of
                            birth</label>
                        <div class="form-icon-container flatpickr-input-container"><input
                                class="form-control form-icon-input datetimepicker" type="text" id="date-of-birth"
                                placeholder="DD/MM/YYYY" data-options='{"disableMobile":true}'><span
                                class="fa-solid fa-calendar-alt text-body-quaternary fs-9 form-icon"
                                data-fa-transform="up-1"></span></div>
                    </div>
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1" for="passport-number">Passport
                            number</label><input class="form-control" type="text" id="passport-number"
                            placeholder="Enter passport number"></div>
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1"
                            for="country">Country</label><input class="form-control" type="text" id="country"
                            placeholder="Enter country name"></div>
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1"
                            for="expiration-date">Expiration date</label>
                        <div class="form-icon-container flatpickr-input-container"><input
                                class="form-control form-icon-input datetimepicker" type="text" id="expiration-date"
                                placeholder="DD/MM/YYYY" data-options='{"disableMobile":true}'><span
                                class="fa-solid fa-calendar-alt text-body-quaternary fs-9 form-icon"
                                data-fa-transform="up-1"></span></div>
                    </div>
                </div>
                <hr class="my-7">
                <h3 class="mb-5">Tour specifics</h3>
                <div class="row gx-3 gy-4">
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1" for="arrival-airline">Arrival
                            airline</label><input class="form-control" type="text" id="arrival-airline"
                            placeholder="Enter arrival airline"></div>
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1"
                            for="arrival-flight-no">Arrival flight no</label><input class="form-control" type="text"
                            id="arrival-flight-no" placeholder="Enter flight no."></div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="flatpickr-input-container"><label class="fw-bold text-body-highlight mb-1"
                                        for="arrival-time">Arrival time</label><input
                                        class="form-control datetimepicker" type="text" id="arrival-time"
                                        placeholder="Hour : Minute"
                                        data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="flatpickr-input-container"><label class="fw-bold text-body-highlight mb-1"
                                for="cruise-time">Cruise time</label><input class="form-control datetimepicker"
                                type="text" id="cruise-time" placeholder="Hour : Minute"
                                data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}'>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="flatpickr-input-container"><label class="fw-bold text-body-highlight mb-1"
                                for="disemberkation-time">Disemberkation time</label><input
                                class="form-control datetimepicker" type="text" id="disemberkation-time"
                                placeholder="Hour : Minute"
                                data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}'>
                        </div>
                    </div>
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1"
                            for="departure-flight-no">Departure flight no</label><input class="form-control" type="text"
                            id="departure-flight-no" placeholder="Enter flight no."></div>
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1" for="departure-date">Departure
                            date</label>
                        <div class="form-icon-container flatpickr-input-container"><input
                                class="form-control form-icon-input datetimepicker" type="text" id="departure-date"
                                placeholder="DD/MM/YYYY"><span
                                class="fa-solid fa-calendar-alt text-body-quaternary fs-9 form-icon"
                                data-fa-transform="up-1"></span></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="flatpickr-input-container"><label class="fw-bold text-body-highlight mb-1"
                                for="departure-time">Departure time</label><input class="form-control datetimepicker"
                                type="text" id="departure-time" placeholder="Hour : Minute"
                                data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}'>
                        </div>
                    </div>
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1"
                            for="departure-airline">Departure airline</label><input class="form-control" type="text"
                            id="departure-airline" placeholder="Enter name"></div>
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1" for="pick-up-location">Pick up
                            location</label>
                        <div class="position-relative"><input class="form-control pe-6" type="text"
                                id="pick-up-location" placeholder="Enter location"><span
                                class="fa-solid fa-location position-absolute top-0 end-0 mt-2 me-3 text-body-quaternary"
                                data-fa-transform="down-3"></span></div>
                    </div>
                    <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1" for="drop-off-location">Drop
                            off location</label>
                        <div class="position-relative"><input class="form-control pe-6" type="text"
                                id="drop-off-location" placeholder="Enter location"><span
                                class="fa-solid fa-location position-absolute top-0 end-0 mt-2 me-3 text-body-quaternary"
                                data-fa-transform="down-3"></span></div>
                    </div>
                </div>
                <hr class="my-7">
                <h5 class="mb-2">Special requests</h5>
                <p class="text-body-tertiary fs-9">Special requests cannot be guaranteed-but the property will do its
                    best to meet your needs. You can always make a special request after your booking is complete!</p>
                <textarea class="form-control" id="request" placeholder="Type your request" rows="5"></textarea>
                <h3 class="mt-7 mb-5">Payment Method</h3>
                <div class="row gx-xxl-6 mb-5">
                    <div class="col-md-auto">
                        <div class="form-check"><input class="form-check-input" id="creditCard" type="radio"
                                name="paymentMethod" checked><label
                                class="form-check-label fs-8 text-body text-nowrap d-flex gap-2" for="creditCard">Credit
                                card<img class="h-100" src="../../../assets/img/logos/visa.png" alt=""><img
                                    class="h-100" src="../../../assets/img/logos/discover.png" alt=""><img class="h-100"
                                    src="../../../assets/img/logos/mastercard.png" alt=""><img class="h-100"
                                    src="../../../assets/img/logos/american_express.png" alt=""></label></div>
                    </div>
                    <div class="col-md-auto">
                        <div class="form-check"><input class="form-check-input" id="paypal" type="radio"
                                name="paymentMethod"><label class="form-check-label fs-8 text-body"
                                for="paypal">Paypal</label></div>
                    </div>
                    <div class="col-md-auto">
                        <div class="form-check"><input class="form-check-input" id="coupon" type="radio"
                                name="paymentMethod"><label class="form-check-label fs-8 text-body"
                                for="coupon">Coupon</label></div>
                    </div>
                </div>
                <div class="row gx-3 gy-4">
                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-1" for="selectCard">Select
                            card</label><select class="form-select text-body-emphasis" id="selectCard">
                            <option selected="selected">Select a card</option>
                            <option value="visa">Visa</option>
                            <option value="discover">Discover</option>
                            <option value="mastercard">Mastercard</option>
                            <option value="american-express">American Express</option>
                        </select></div>
                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-1" for="inputCardNumber">Card
                            number</label><input class="form-control" id="inputCardNumber" type="number"
                            placeholder="Enter card number" aria-label="Card number"></div>
                    <div class="col-12"><label class="fw-bold text-body-highlight mb-1" for="inputName">Full
                            name</label><input class="form-control" id="inputName" type="text"
                            placeholder="Ansolo Lazinatov" aria-label="Full name"></div>
                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-1">Expires on</label>
                        <div class="d-flex"><select class="form-select text-body-emphasis me-3">
                                <option selected="selected">Month</option>
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                            </select><select class="form-select text-body-emphasis">
                                <option selected="selected">Year</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select></div>
                    </div>
                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-1"
                            for="inputCardCVC">CVC</label><input class="form-control" id="inputCardCVC" type="number"
                            placeholder="Enter a valid CVC" aria-label="CVC"></div>
                    <div class="col-12">
                        <div class="form-check"><input class="form-check-input" id="gridCheck" type="checkbox"><label
                                class="form-check-label text-body-emphasis fs-8" for="gridCheck">Save Card
                                Details</label></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="card">
                    <div class="card-body"><img class="w-100 object-fit-cover rounded-2"
                            src="../../../assets/img/trip/10.png" alt="" height="220" />
                        <h3 class="mb-4 mt-5">Walk where the king walked once in Wakanda</h3>
                        <h5 class="fw-normal mb-3"><span
                                class="fa-solid fa-calendar text-body-quaternary me-2"></span>March 9, 2023</h5>
                        <h5 class="fw-normal mb-3"><span class="fa-solid fa-user text-body-quaternary me-2"></span>1
                            adult</h5>
                        <h5 class="fw-normal mb-3"><span
                                class="fa-solid fa-clock text-body-quaternary me-2"></span>Pickup time: <span
                                class="ms-3">10:00 am</span></h5>
                        <h5 class="fw-normal mb-5"><span class="fa-solid fa-clock text-body-quaternary me-2"></span>Drop
                            off time: <span class="ms-2">10:00 am</span></h5>
                        <div class="p-3 rounded-2 bg-body-highlight">
                            <div class="d-flex flex-between-center mb-2">
                                <h5 class="mb-0 fw-normal">Booking Fee</h5>
                                <h5 class="mb-0 fw-normal">USD 0.00</h5>
                            </div>
                            <div class="d-flex flex-between-center mb-3">
                                <h5 class="mb-0 fw-normal">Subtotal</h5>
                                <h5 class="mb-0 fw-normal">USD 300.00</h5>
                            </div>
                            <div class="d-flex flex-between-center">
                                <h4 class="mb-0">Total</h4>
                                <h4 class="mb-0">USD 300.00</h4>
                            </div>
                        </div>
                    </div>
                </div><button class="btn btn-primary w-100 mt-3">Book now</button>
            </div>
        </div>
    </div><!-- end of .container-->
</section>