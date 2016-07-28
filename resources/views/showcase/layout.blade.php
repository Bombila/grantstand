<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GrandStand</title>
    <link rel="apple-touch-icon" href="apple-touch-icon.png"><!-- Place favicon.ico in the root directory-->
    <link rel="stylesheet" href="css/main.css"><!-- Include Open Sans font-->
    @yield('additional-head-links')
</head>
<body id="top"><!-- Header-->
<header class="header--transparent @yield('additional-header-classes')">
    <div class="container-fluid">
        <button id="menu-toggle">
            <svg id="menu-toggle--on" class="header_menu-icon">
                <use xlink:href="images/icons.svg#menu"></use>
            </svg>
            <svg id="menu-toggle--off" class="header_menu-icon--close">
                <use xlink:href="images/icons.svg#close"></use>
            </svg>
        </button>
        <div class="header-inner row">
            <div class="brand col-sm-12 col-md-3"><a href="/">
                    <svg class="brand__logo">
                        <use xlink:href="images/icons.svg#logo"></use>
                    </svg>
                </a>
            </div>
            @yield('main-nav')
        </div>
    </div>
</header><!-- End of Header-->

@yield('content')

<a id="to-top" href="#top" class="scroll-top">
    <svg class="scroll-top__icon">
        <use xlink:href="images/icons.svg#arrow-up"></use>
    </svg>
</a>
<footer>
    <div class="container">
        <div class="ft__inner row">
            <section class="ft__links col-xs-12 col-md-6 col-lg-8">
                <div class="row">
                    <div class="ft-menu col-xs-12 col-md-4"><h3 class="heading heading--footer">Services</h3>
                        <ul class="ft-menu__list">
                            <li><a href="" class="ft-menu__item">How we help</a></li>
                            <li><a href="" class="ft-menu__item">Representation</a></li>
                            <li><a href="" class="ft-menu__item">Marketing & Brand Development</a></li>
                            <li><a href="" class="ft-menu__item">Business & Profit Services</a></li>
                        </ul>
                    </div>
                    <div class="ft-menu col-xs-12 col-md-2"><h3 class="heading heading--footer">Clients</h3>
                        <ul class="ft-menu__list">
                            <li><a href="" class="ft-menu__item">Basketball</a></li>
                            <li><a href="" class="ft-menu__item">Soccer</a></li>
                            <li><a href="" class="ft-menu__item">Other</a></li>
                        </ul>
                    </div>
                    <div class="ft-menu col-xs-12 col-md-3"><h3 class="heading heading--footer">About Us</h3>
                        <ul class="ft-menu__list">
                            <li><a href="" class="ft-menu__item">Company</a></li>
                            <li><a href="" class="ft-menu__item">Content Production</a></li>
                            <li><a href="" class="ft-menu__item">Completed Projects</a></li>
                            <li><a href="" class="ft-menu__item">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="ft-menu col-xs-12 col-md-3"><h3 class="heading heading--footer">Legal</h3>
                        <ul class="ft-menu__list">
                            <li><a href="" class="ft-menu__item">Privacy Policy</a></li>
                            <li><a href="" class="ft-menu__item">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="ft__subscription col-xs-12 col-md-6 col-lg-4">
                <div class="subscription">
                    <form action="index" method="post" class="subscription__form"><input type="email" name="name"
                                                                                         title="Enter your Email here"
                                                                                         placeholder="Email"
                                                                                         required=""
                                                                                         class="subscription__input"><input
                            type="submit" name="name" value="Subscribe" class="subscription__submit"></form>
                </div>
                <div class="social"><a href="#" class="social__link">
                        <svg class="social__icon">
                            <use xlink:href="images/icons.svg#soc-fb"></use>
                        </svg>
                    </a><a href="#" class="social__link">
                        <svg class="social__icon">
                            <use xlink:href="images/icons.svg#soc-tw"></use>
                        </svg>
                    </a><a href="#" class="social__link">
                        <svg class="social__icon">
                            <use xlink:href="images/icons.svg#soc-in"></use>
                        </svg>
                    </a><a href="#" class="social__link">
                        <svg class="social__icon">
                            <use xlink:href="images/icons.svg#soc-yt"></use>
                        </svg>
                    </a></div>
            </section>
        </div>
        <hr class="hr--footer">
        <section class="ft__bottom">
            <div class="copyrights">Grandstand Sports & Entertainment Incorporated. 2016</div>
            <svg class="ft__logo">
                <use xlink:href="images/icons.svg#logo"></use>
            </svg>
        </section>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-2.2.1.min.js"
        integrity="sha256-gvQgAFzTH6trSrAWoH1iPo9Xc96QxSZ3feW6kem+O00=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
<script src="js/app.min.js"></script><!-- End of Footer--></body>
</html>