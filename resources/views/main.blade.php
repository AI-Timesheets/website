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
        <!-- Global site tag (gtag.js) - Google Ads: 675388419 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-675388419"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-675388419');
        </script>
    </head>
    <body>
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>
        <nav class="navbar is-transparent is-fixed-top is-faded">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="https://aitimesheets.com/">
                        <img class="light-logo" src="assets/images/aitime-logo.png" width="28" height="64" alt="">
                        <img class="dark-logo is-hidden" src="assets/images/aitime-logo.png" width="28" height="64" alt="">
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
                        </div> k
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
                                Eliminate buddy punching. Allow your employees to scan their face to clock in.
                            </h2>
                            <h3 class="subtitle is-6">
                                Available Q1 2020.
                            </h3>
                            <div class="button-wrap">
                                <a href="#pricing" class="button cta-button primary-button is-raised is-rounded signup">Signup for Early Access</a>
                            </div>
                            <!-- Hero Mockup -->
                            <!-- <img class="hero-mockup" src="assets/images/illustrations/home.png" alt=""> -->

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
                                <img src="assets/images/icons/features/3.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Eliminate Buddy Punching</span>
                                <span>Your employees will no longer be able to punch in for their buddies.</span>
                            </div>
                        </div>
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/1.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Cloud AI Technology</span>
                                <span>Cloud technologies allow us to provide an instant setup time with no complex server installation.</span>
                            </div>
                        </div>
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/5.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Accurate and Powerful Reports</span>
                                <span>Generate instant reports or schedule daily, weekly, or monthly reports by email.</span>
                            </div>
                        </div>
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/9.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Excellent Support</span>
                                <span>Email and livechat support are available 24/7 to help you through any issues. </span>
                            </div>
                        </div>
                    </div>
                    <div class="column is-5">
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/4.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Free for up to 5 employees</span>
                                <span>Try it before you buy it. Instead of a free trial, AI Timesheets is completely free for up to 5 employees.</span>
                            </div>
                        </div>
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/2.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Encrypted and Secure</span>
                                <span>We take security seriously. All data is encrypted both at rest and in transfer for ultimate security.</span>
                            </div>
                        </div>
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/10.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Exports</span>
                                <span>AI Timesheets exports to your payroll system with ease. ADP, Paycor, and many more are supported.</span>
                            </div>
                        </div>
                        <!--Icon Block-->
                        <div class="feature-block">
                            <div class="round-icon is-icon-reveal">
                                <img src="assets/images/icons/features/8.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Runs on a tablet</span>
                                <span>All you need to get started is any Apple iPad or Android tablet. Look for the "AI Timesheets" app..</span>
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
                        <img class="footer-logo" src="assets/images/aitime-logo.png" width="112" height="64" alt="">
                        <p class="footer-logo-text is-portrait-padded">
                            AI Timesheets offers a free facial recognition clock-in clock-out solution with minimal setup time.
                        </p>
                    </div>
                    <div class="column">
                        <h4 class="title is-5">Get Started</h4>
                        <ul class="footer-menu">
                            <li><a href="#pricing">Open Account</a></li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#pricing">Pricing</a></li>
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
                            <li>Proudly Made in Detroit</li>
                            <li>contact@aitimesheets.com</li>
                        </ul>
                    </div>
                </div>
                <div class="copyright">
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
