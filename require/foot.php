<section class="defaultPadding mt4 footer">
    <div class="footer-row1">
        <div class="container">
            <div class="row flex">
                <ul class="ul1">
                    <li>
                        <a href="#">
                            <i class="uil uil-dialpad-alt"></i>
                            +88017-61322176 </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="uil uil-envelope-alt"></i>
                            info@AgroLink.com
                        </a>
                    </li>
                </ul>
                <ul class="ul2">
                    <li>
                        <a href="#">
                            <i class="uil uil-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="uil uil-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="uil uil-google"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php if (isset($_GET['utm_source']) || isset($_SESSION['utm_source'])) { ?>
        <div class="footer-row2">
            <div class="container">
                <div class="row">
                    <ul class="ul1">
                        <li class="heading">
                            <h4>Categories</h4>
                        </li>
                        <ul class="ul-sub">
                            <a href="view.php?n=6&k=&scat=1">
                                <li> Vegetables </li>
                            </a>
                            <a href="view.php?n=6&k=&scat=2">
                                <li> Rice </li>
                            </a>
                            <a href="view.php?n=6&k=&scat=3">
                                <li> Fruits </li>
                            </a>
                            <a href="view.php?n=6&k=&scat=4">
                                <li> Dairy Products </li>
                            </a>
                            <a href="view.php?n=6&k=&scat=5">
                                <li> Grains </li>
                            </a>
                        </ul>
                    </ul>
                    <ul class="ul1">
                        <li class="heading">
                            <h4>Useful Links</h4>
                        </li>
                        <ul class="ul-sub">
                            <a href="view.php?n=6&k=&scat=1">
                                <li> Vegetables </li>
                            </a>
                            <a href="view.php?n=6&k=&scat=2">
                                <li> Rice </li>
                            </a>
                            <a href="view.php?n=6&k=&scat=3">
                                <li> Fruits </li>
                            </a>
                            <a href="view.php?n=6&k=&scat=4">
                                <li> Dairy Products </li>
                            </a>
                            <a href="view.php?n=6&k=&scat=5">
                                <li> Grains </li>
                            </a>
                        </ul>
                    </ul>
                    <ul class="ul1">
                        <li class="heading">
                            <h4>Top Cities</h4>
                        </li>
                        <ul class="ul-sub">
                            <a href="index.php?utm_source=20">
                                <li> Dhaka </li>
                            </a>
                            <a href="index.php?utm_source=29">
                                <li> Chattogram </li>
                            </a>
                            <a href="index.php?utm_source=19">
                                <li> Rajshahi </li>
                            </a>
                            <a href="index.php?utm_source=15">
                                <li> Sylhet </li>
                            </a>
                        </ul>
                    </ul>
                    <ul class="ul1">
                        <li class="heading thd">
                            <h4><b>News Letter</b></h4>
                        </li>
                        <ul class="ul-sub t flex nl">
                            <form action="#">
                                <input type="text" name="" placeholder="Email Address" />
                                <button><i class="uil uil-telegram-alt"></i></button>
                            </form>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="footer-row2">
            <div class="container">
                <div class="row">
                    <ul class="ul1">
                        <li class="heading">
                            <h4>Categories</h4>
                        </li>
                        <ul class="ul-sub">
                            <li> Vegetables </li>
                            <li> Rice </li>
                            <li> Fruits </li>
                            <li> Dairy Products </li>
                            <li> Grains </li>
                        </ul>
                    </ul>
                    <ul class="ul1">
                        <li class="heading">
                            <h4>Useful Links</h4>
                        </li>
                        <ul class="ul-sub">
                            <li> Vegetables </li>
                            <li> Rice </li>
                            <li> Fruits </li>
                            <li> Dairy Products </li>
                            <li> Grains </li>
                        </ul>
                    </ul>
                    <ul class="ul1">
                        <li class="heading">
                            <h4>Top Cities</h4>
                        </li>
                        <ul class="ul-sub">
                            <li> Dhaka </li>
                            <li> Chattogram </li>
                            <li> Rajshahi </li>
                            <li> Sylhet </li>
                        </ul>
                    </ul>
                    <ul class="ul1">
                        <li class="heading thd">
                            <h4><b>News Letter</b></h4>
                        </li>
                        <ul class="ul-sub t flex nl">
                            <form action="#">
                                <input type="text" name="" placeholder="Email Address" />
                                <button><i class="uil uil-telegram-alt"></i></button>
                            </form>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="footer-3">
        <span> Copyright 2024 AgroLink. All rights reserved </span>
    </div>
</section>
<script src="assets/js/script.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
