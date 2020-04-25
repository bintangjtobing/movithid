<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="©Bintang Tobing" />
    <meta name="description" content="@yield('description')">
    <link rel="shortcut icon"
        href="https://res.cloudinary.com/sarjanamalam/image/upload/v1586767431/movith/based/icon_stawjx.png"
        alt="icon movith">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Movith - @yield('title')</title>
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
    <div class="body-inner">
        <header id="header" data-fullwidth="true" class="header-mini dark header-always-fixed">
            <div class="header-inner">
                <div class="container">

                    <div id="logo">
                        <a href="/">
                            <span class="logo-default"><img
                                    src="https://res.cloudinary.com/sarjanamalam/image/upload/v1586767642/movith/based/letter-logo_hohje6.png"
                                    alt=""></span>
                            <span class="logo-dark"><img
                                    src="https://res.cloudinary.com/sarjanamalam/image/upload/v1586767642/movith/based/letter-logo_hohje6.png"
                                    alt=""></span>
                        </a>
                    </div>

                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                                class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>

                    <div class="header-extras">
                        <ul>
                            <li>
                                <a class="btn btn-danger" href="sign-in"><i class="icon-user"></i> SIGN IN</a>
                            </li>
                            {{-- <li>
                                <div class="p-dropdown">
                                    <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#"><i class="icon-user"></i></a>
                            </li> --}}
                        </ul>
                    </div>

                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>

                    <div id="mainMenu" class="menu-left menu-lines">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="ads">Ads</a></li>
                                    <li><a href="box-office">Box Office</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

        </header>
    </div>
    @yield('content')
    <footer id="footer" class="inverted">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <img src="https://res.cloudinary.com/sarjanamalam/image/upload/v1586938007/movith/based/Logo-grey_ialflr.png"
                            alt="Logo Movith ID" class="m-b-20">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-4">
                        <div class="widget text-left">
                            <h4>MORE FROM MOVITH</h4>
                            <ul class="list">
                                <li><a href="ads">Advertise here</a></li>
                                <li><a href="box-office">Box Office</a></li>
                                <li><a href="about-us">About Us</a></li>
                                <li><a href="career">Career</a></li>
                                <li><a href="demands">On Demands</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="widget text-left">
                            <h4>SUPPORT</h4>
                            <ul class="list">
                                <li><a href="privacy">Privacy Policy</a></li>
                                <li><a href="terms">Terms of Use</a></li>
                                <li><a href="help">Get Help</a></li>
                                <li><a href="#faq">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="widget text-left">
                            <h4>COMPANY</h4>
                            <ul class="list">
                                <li><a href="about-us">About Us</a></li>
                                <li><a href="partners">Partners</a></li>
                                <li><a href="investor-relations">Investor Relations</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="widget text-left">
                            <h4>GET YOUR APP</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fab fa-android"></i> Android</a></li>
                                <li><a href="#"><i class="fab fa-apple"></i> iOS</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="social-icons social-icons">
                            <ul>
                                <li class="instagram"><a href="https://instagram.com/movith.id" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li class="social-facebook"><a href="https://www.facebook.com/movithid"
                                        target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-youtube"><a
                                        href="https://www.youtube.com/channel/UCk7rzrEqcmdd4qcGd5ynirg"
                                        target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-6 text-right">

                        <div class="copyright-text">© Movith Indonesia. </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>

    <script src="js/functions.js"></script>
</body>

</html>
