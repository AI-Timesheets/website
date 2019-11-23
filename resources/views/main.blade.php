<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="assets/images/favicon.png" />

        <title> AI Timesheets | Facial recognition clock-in and clock-out</title>

        <!--Core CSS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bulma.css">
        <link rel="stylesheet" href="assets/css/app.css">
        <link rel="stylesheet" href="assets/css/core.css">

    </head>
    <body>
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>
        <nav class="navbar is-transparent is-fixed-top is-faded">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="https://bulkitv2.cssninja.io/">
                        <img class="light-logo" src="assets/images/logo/bulkit-light.svg" width="28" height="28" alt="">
                        <img class="dark-logo is-hidden" src="assets/images/logo/bulkit-dark.svg" width="28" height="28" alt="">
                    </a>

                    <!-- Sidebar Trigger -->
                    <a id="navigation-trigger" class="navbar-item hamburger-btn" href="javascript:void(0);">
                        <span class="menu-toggle">
                            <span class="icon-box-toggle">
                                <span class="rotate">
                                    <i class="icon-line-top"></i>
                                    <i class="icon-line-center"></i>
                                    <i class="icon-line-bottom"></i>
                                </span>
                            </span>
                        </span>
                    </a>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a href="#main-features" class="navbar-item has-hover">
                            Features
                        </a>

                        <a href="#pricing" class="navbar-item has-hover">
                            Pricing
                        </a>
                    </div>

                    <div class="navbar-end has-hover">
                        <a class="navbar-item has-border-right">
                            Login
                        </a>
                        <div class="separator"></div>
                        <div class="navbar-item">
                            <a href="#" class="button cta-button is-rounded primary-button">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Hero -->
        <div class="hero">
            <div class="hero-body">
                <div class="container">
                    <div class="columns has-text-centered">
                        <!-- Caption -->
                        <div class="column is-8 is-offset-2 is-hero-caption">
                            <h1 class="title is-1">
                                <span id="landing-title">Facial Recognition Attendance Software</span>
                            </h1>
                            <h2 class="subtitle is-5">
                                Allow your employees to scan their face in order to clock in. We use AI technology for 100% accurate results.
                            </h2>

                            <!-- Hero Mockup -->
                            <img class="hero-mockup" src="assets/images/illustrations/clay-app.png" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @component('features')
        @endcomponent

        @component('pricing')
        @endcomponent

        <!--Icons Section-->
        <div class="section is-dark is-medium">
            <div class="container">

                <!--Wrapper-->
                <div class="columns">
                    <div class="column is-5 is-offset-1">
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/1.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Symetric Replication</span>
                                <span>Lorem Ipsum is a dummy text used by typographers</span>
                            </div>
                        </div>
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/3.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Quality Insurance</span>
                                <span>Lorem Ipsum is a dummy text used by typographers</span>
                            </div>
                        </div>
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/5.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Quality Insurance</span>
                                <span>Lorem Ipsum is a dummy text used by typographers</span>
                            </div>
                        </div>
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/8.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Quality Insurance</span>
                                <span>Lorem Ipsum is a dummy text used by typographers</span>
                            </div>
                        </div>
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/10.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Quality Insurance</span>
                                <span>Lorem Ipsum is a dummy text used by typographers</span>
                            </div>
                        </div>
                    </div>
                    <div class="column is-5">
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/2.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Reinforced Encryption</span>
                                <span>Lorem Ipsum is a dummy text used by typographers</span>
                            </div>
                        </div>
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/4.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Reinforced Encryption</span>
                                <span>Lorem Ipsum is a dummy text used by typographers</span>
                            </div>
                        </div>
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/6.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Quality Insurance</span>
                                <span>Lorem Ipsum is a dummy text used by typographers</span>
                            </div>
                        </div>
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/7.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Quality Insurance</span>
                                <span>Lorem Ipsum is a dummy text used by typographers</span>
                            </div>
                        </div>
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/9.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Quality Insurance</span>
                                <span>Lorem Ipsum is a dummy text used by typographers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer-->
        <footer class="footer">
            <div class="container">
                <div class="columns">
                    <div class="column is-4">
                        <img class="footer-logo" src="assets/images/logo/bulkit-dark.svg" width="112" height="28" alt="">
                        <p class="footer-logo-text is-portrait-padded">
                            Lorem ipsum sit dolor amet is a dummy text used by
                            typographers and the web industry. It’s highly likely that
                            you’ve already seen it.
                        </p>
                    </div>
                    <div class="column">
                        <h4 class="title is-5">Get Started</h4>
                        <ul class="footer-menu">
                            <li><a href="#">Open Account</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <h4 class="title is-5">Support</h4>
                        <ul class="footer-menu">
                            <li><a href="#">User Guides</a></li>
                            <li><a href="#">Assistance</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <h4 class="title is-5">Contact</h4>
                        <ul class="footer-menu">
                            <li>92,Church Street, Manhattan, NY, USA.</li>
                            <li>+1(0) 554 489 22</li>
                            <li>hello@cssninja.io</li>
                        </ul>
                    </div>
                </div>
                <div class="copyright">
                    <img class="copyright-logo" src="assets/images/logo/bulkit-white.svg" width="112" height="28" alt="">
                    <div class="copyright-text">Copyright &copy; {{ now()->year }} AI Timesheets.</div>
                </div>
            </div>
        </footer>

        <!-- Back To Top Button -->
        <div id="backtotop"><a href="#"></a></div>
        <!-- Concatenated js plugins -->
        <script src="assets/js/app.js"></script>

        <script src="https://unpkg.com/animejs@2.2.0/anime.min.js"></script>
        <!-- Bulkit js -->
        <script src="assets/js/main.js"></script>
    </body>

</html>
