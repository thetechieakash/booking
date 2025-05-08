<?php $current = uri_string();
// echo $current;
?>
<div class="navbar-responsive-navitems navbar-expand border-y bg-body-emphasis border-translucent py-2">
    <div class="container-medium d-flex flex-between-center" data-navbar="data-navbar">
        <ul class="navbar-nav justify-content-end align-items-center">
            <li class="nav-item" data-nav-item="data-nav-item">
                <a class="nav-link px-3 ps-0 <?= $current == '' || $current == 'trip'? 'text-primary' : '' ?>"
                    href="homepage.html">Homepage</a>
            </li>
            <?php if ($current == '') :?>
                <li class="nav-item" data-nav-item="data-nav-item">
                    <a class="nav-link px-3 <?= $current == 'hotel-details' ? 'text-primary' : '' ?>"
                        href="hotel-details.html">Hotel Details</a>
                </li>
                <li class="nav-item" data-nav-item="data-nav-item">
                    <a class="nav-link px-3" href="hotel-compare.html">Hotel Compare</a>
                </li>
            <?php endif;?>
            <li class="nav-item" data-nav-item="data-nav-item">
                <a class="nav-link px-3" href="checkout.html">Check out</a>
            </li>
            <?php if ($current == '') :?>
            <li class="nav-item" data-nav-item="data-nav-item">
                <a class="nav-link px-3" href="payment.html">Payment</a>
            </li>
            <li class="nav-item" data-nav-item="data-nav-item">
                <a class="nav-link px-3" href="gallery.html">Gallery</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>