<?php $current = uri_string(); 
// echo $current;
?>
<section class="py-0">
    <div class="container-small">
        <nav class="navbar navbar-landing navbar-home navbar-expand py-4 px-0">
            <ul class="navbar-nav mx-auto mt-3 mt-lg-0 gap-2">
                <li class="nav-item"><a class="nav-link fw-bold rounded-3 <?= $current == '' ? 'active' : '' ?>"
                        aria-current="page" href="<?= route_to('home') ?>"> <span class="me-2 fa-solid fa-hotel"></span>Hotel</a>
                </li>
                <li class="nav-item"><a class="nav-link fw-bold rounded-3 <?= $current == 'trip' ? 'active' : '' ?>" aria-current="page"
                        href="<?= route_to('trip') ?>"> <span class="me-2 fa-solid fa-suitcase-rolling"></span>Trip</a>
                </li>
            </ul>
        </nav>
    </div><!-- end of .container-->
</section>