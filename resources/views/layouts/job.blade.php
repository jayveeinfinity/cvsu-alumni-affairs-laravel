
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="Your Ultimate Job HTML Template">
        <meta name="keywords" content="Job, Resume, Employer, Agency">
        <link rel="canonical" href="https://html.themewant.com/jobpath">
        <meta name="robots" content="index, follow"> -->
        <!-- for open graph social media -->
        <!-- <meta property="og:title" content="Your Ultimate Job HTML Template">
        <meta property="og:description" content="Your Ultimate Job HTML Template">
        <meta property="og:image" content="https://www.example.com/image.jpg">
        <meta property="og:url" content="https://html.themewant.com/jobpath/"> -->
        <!-- for twitter sharing -->
        <!-- <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Your Ultimate Job HTML Template">
        <meta name="twitter:description" content="Your Ultimate Job HTML Template"> -->
        <!-- fabicon -->
        <link rel="shortcut-icon" href="/images/CvSU-logo-16x16.webp" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">
        <title>
            @yield('title') {{ config('app.name') }}
        </title>
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- all plugin css -->
        <link rel="stylesheet" href="/css/plugins.min.css">
        <link rel="stylesheet" href="/css/job-style.css">

    </head>
    <body>
        <!-- header area -->
        <header class="rts__section rts__header absolute__header">
            <div class="container-none">
                <div class="rts__menu__background">
                    <div class="row">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="rts__logo">
                                <a href="index.html">
                                    <img class="logo__image" src="/images/logo-alt.png" width="400" height="40" alt="logo">
                                </a>
                            </div>
                            <div class="rts__menu d-flex gap-5 gap-lg-4 gap-xl-5 align-items-center">
                                <div class="navigation d-none d-lg-block">
                                    <nav class="navigation__menu" id="offcanvas__menu">
                                        <ul class="list-unstyled">
                                            <li class="navigation__menu--item has-child has-arrow">
                                                <a href="#" class="navigation__menu--item__link">Home</a>
                                                <ul class="submenu sub__style" role="menu">
                                                    <li role="menuitem"><a href="index.html">Home One</a></li>
                                                    <li role="menuitem"><a href="index-2.html">Home Two</a></li>
                                                    <li role="menuitem"><a href="index-3.html">Home Three</a></li>
                                                    <li role="menuitem"><a href="index-4.html">Home Four</a></li>
                                                    <li role="menuitem"><a href="index-5.html">Home Five</a></li>
                                                    <li role="menuitem"><a href="index-6.html">Home Six</a></li>
                                                </ul>
                                            </li>
                                            <li class="navigation__menu--item has-child has-arrow">
                                                <a href="#" class="navigation__menu--item__link">Browse Jobs</a>
                                                <ul class="submenu sub__style" role="menu">
                                                    <li role="menuitem" class="has-child has-arrow">
                                                        <a href="#">Job List</a>
                                                        <ul class="sub__style" role="menu">
                                                            <li role="menuitem"><a href="job-list-1.html">Job List One</a></li>
                                                            <li role="menuitem"><a href="job-list-2.html">Job List Two</a></li>
                                                            <li role="menuitem"><a href="job-list-3.html">Job List Three</a></li>
                                                            <li role="menuitem"><a href="job-list-4.html">Job List Four</a></li>
                                                            <li role="menuitem"><a href="job-list-5.html">Job List Five</a></li>
                                                        </ul>
                                                    </li>
                                                    <li role="menuitem" class="has-child has-arrow">
                                                        <a href="#">Job Details</a>
                                                        <ul class="sub__style" role="menu">
                                                            <li role="menuitem"><a href="job-details-1.html">Job Details One</a></li>
                                                            <li role="menuitem"><a href="job-details-2.html">Job Details Two</a></li>
                                                            <li role="menuitem"><a href="job-details-3.html">Job Details Three</a></li>
                                                            <li role="menuitem"><a href="job-details-4.html">Job Details Four</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="navigation__menu--item has-child has-arrow">
                                                <a href="#" class="navigation__menu--item__link">Employers</a>
                                                <ul class="submenu sub__style" role="menu">
                                                    <li role="menuitem" class="has-child has-arrow">
                                                        <a href="employer-1.html">Employer Style</a>
                                                        <ul class="sub__style" role="menu">
                                                            <li role="menuitem"><a href="employer-1.html">Employer One</a></li>
                                                            <li role="menuitem"><a href="employer-2.html">Employer Two</a></li>
                                                            <li role="menuitem"><a href="employer-3.html">Employer Three</a></li>
                                                        </ul>
                                                    </li>
                                                    <li role="menuitem" class="has-child has-arrow">
                                                        <a href="employer-details-1.html">Employer Details</a>
                                                        <ul class="sub__style" role="menu">
                                                            <li role="menuitem"><a href="employer-details-1.html">Employer Details 1</a></li>
                                                            <li role="menuitem"><a href="employer-details-2.html">Employer Details 2</a></li>
                                                        </ul>
                                                    </li>
                                                    <li role="menuitem"><a href="employer-dashboard.html">Employer Dashboard</a></li>
                                                </ul>
                                            </li>
                                            <li class="navigation__menu--item has-child has-arrow">
                                                <a href="#" class="navigation__menu--item__link">Candidates</a>
                                                <ul class="submenu sub__style" role="menu">
                                                    <li role="menuitem" class="has-child has-arrow">
                                                        <a href="candidate-1.html">Candidate Style</a>
                                                        <ul class="sub__style" role="menu">
                                                            <li role="menuitem"><a href="candidate-1.html">Candidate One</a></li>
                                                            <li role="menuitem"><a href="candidate-2.html">Candidate Two</a></li>
                                                            <li role="menuitem"><a href="candidate-3.html">Candidate Three</a></li>
                                                            <li role="menuitem"><a href="candidate-4.html">Candidate Four</a></li>
                                                        </ul>
                                                    </li>
                                                    <li role="menuitem" class="has-child has-arrow">
                                                        <a href="candidate-details-1.html">Candidate Details</a>
                                                        <ul class="sub__style" role="menu">
                                                            <li role="menuitem"><a href="candidate-details-1.html">Candidate Details 1</a></li>
                                                            <li role="menuitem"><a href="candidate-details-2.html">Candidate Details 2</a></li>
                                                            
                                                        </ul>
                                                    </li>
                                                    <li role="menuitem"><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                                                </ul>
                                            </li>
                                            <li class="navigation__menu--item has-child has-arrow">
                                                <a href="#" class="navigation__menu--item__link">Pages</a>
                                                <ul class="submenu sub__style" role="menu">
                                                    <li role="menuitem" class="has-child has-arrow">
                                                        <a href="about.html">Blog</a>
                                                        <ul class="sub__style" role="menu">
                                                            <li role="menuitem"><a href="blog-1.html">Blog One</a></li>
                                                            <li role="menuitem"><a href="blog-2.html">Blog Two</a></li>
                                                            <li role="menuitem"><a href="blog-3.html">Blog Three</a></li>
                                                            <li role="menuitem"><a href="blog-4.html">Blog Four</a></li>
                                                            <li role="menuitem"><a href="blog-details.html">Blog Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li role="menuitem"><a href="about.html">About</a></li>
                                                    <li role="menuitem"><a href="faq.html">Faq</a></li>
                                                    <li role="menuitem"><a href="tos.html">Terms &amp; Conditions</a></li>
                                                    <li role="menuitem"><a href="privacy.html">Privacy Policy</a></li>
                                                    <li role="menuitem"><a href="pricing.html">Pricing</a></li>
                                                </ul>
                                            </li>
                                            <li class="navigation__menu--item has-child has-arrow">
                                                <a href="#" class="navigation__menu--item__link">Contact</a>
                                                <ul class="submenu sub__style" role="menu">
                                                    <li role="menuitem"><a href="contact-1.html">Contact One</a></li>
                                                    <li role="menuitem"><a href="contact-2.html">Contact Two</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- <div class="header__right__btn d-flex gap-3">
                                    <a href="#" class="small__btn d-none d-sm-flex no__fill__btn border-6 font-xs" aria-label="Login Button" data-bs-toggle="modal" data-bs-target="#loginModal"> <i class="rt-login"></i>Sign In</a>
                                    <a href="employer-dash-jobpost.html" class="small__btn d-none d-sm-flex d-xl-flex fill__btn border-6 font-xs" aria-label="Job Posting Button">Add Job</a>
                                    <button class="d-md-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas"><i class="fa-sharp fa-regular fa-bars"></i></button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->    
        @yield('main-content')
    
        <footer class="rts__section  footer__home__one">
        <div class="container">
            <div class="row">
                <div class="footer__wrapper d-flex flex-wrap flex-column flex-sm-row gap-4 gap-md-0 gap-sm-3 justify-content-between pt-60 pb-60">
                    <div class="rts__footer__widget max-320">
                        <a href="index.html" class="footer__logo" aria-label="logo">
                            <img src="/images/logo-alt-green.png" width="400" alt="logo">
                        </a>
                        <p class="mt-4">Whether you're an experienced professional or a fresh graduate eager to dive into the workforce, we have something for everyone.
                        </p>
                    </div>
                    <!-- footer menu -->
                    <div class="rts__footer__widget max-content">
                        <div class="font-20 fw-medium mb-3 h6">Links</div>
                        <ul class="list-unstyled">
                            <li><a href="job-list-1.html" aria-label="footer__menu__link">Browse Jobs</a></li>
                            <li><a href="candidate-1.html" aria-label="footer__menu__link">Browse Candidates</a></li>
                            <li><a href="blog-1.html" aria-label="footer__menu__link">Blog & News</a></li>
                            <li><a href="faq.html" aria-label="footer__menu__link">FAQ Question</a></li>
                            <li><a href="#" aria-label="footer__menu__link">Job Alerts</a></li>
                        </ul>
                    </div>
                    <div class="rts__footer__widget max-content">
                        <div class="font-20 fw-medium mb-3 h6 ">Contact Us</div>
                        <ul class="list-unstyled mb-3">
                            <li><a href="#"><i class="fa-light fa-location-dot"></i>2715 Ash Dr. San Jose,USA</a></li>
                            <li><a href="callto:+880171234578"><i class="fa-light fa-phone"></i>+(61) 545-432-234</a></li>
                            <li><a href="mailto:jobpath@gmail.com"><i class="fa-light fa-envelope"></i> jobpath@gmail.com</a></li>
                        </ul>
                        <div class="font-20 fw-medium mb-20 text-dark">Social Link</div>
                        <div class="rts__social d-flex gap-4">
                            <a target="_blank" href="https://facebook.com"  aria-label="facebook">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a target="_blank" href="https://instagram.com"  aria-label="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a target="_blank" href="https://linkedin.com"  aria-label="linkedin">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                            <a target="_blank" href="https://pinterest.com"  aria-label="pinterest">
                                <i class="fa-brands fa-pinterest"></i>
                            </a>
                            <a target="_blank" href="https://youtube.com"  aria-label="youtube">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>

                    <!-- newsletter form -->
                    <div class="rts__footer__widget max-320">
                        <div class="font-20 fw-medium mb-3 h6 ">Subscribe Our Newsletter</div>
                        <p class="br-sm-none">Subscribe Our Newsletter get <br> Update our New Course</p>
                        <form action="#" class="d-flex align-items-center justify-content-between mt-4 newsletter">
                            <input type="email" name="semail" id="semail" placeholder="Enter your email" required>
                            <button type="submit" class="rts__btn fill__btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- newsletter form end -->
                </div>
            </div>
        </div>
        <div class="rts__copyright">
            <div class="container">
                <p class="text-center fw-medium py-4">
                    Copyright &copy; 2024 All Rights Reserved by jobpath
                </p>
            </div>
        </div>
    </footer>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
        <div class="offcanvas-header p-0 mb-5 mt-4">
            <a href="index.html" class="offcanvas-title" id="offcanvasLabel">
                <img src="/images/logo-alt.png" alt="logo">
            </a> 
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- login offcanvas -->
        <div class="mb-4 d-block d-sm-none">
            <div class="header__right__btn d-flex justify-content-center gap-3">
                <a href="#" class="small__btn no__fill__btn border-6 font-xs" aria-label="Login Button" data-bs-toggle="modal" data-bs-target="#loginModal"> <i class="rt-login"></i>Sign In</a>
                <a href="#" class="small__btn d-xl-flex fill__btn border-6 font-xs" aria-label="Job Posting Button">Add Job</a>
            </div>
        </div>
        <div class="offcanvas-body p-0">
            <div class="rts__offcanvas__menu overflow-hidden">
                <div class="offcanvas__menu"></div>
            </div>
            <p class="max-auto font-20 fw-medium text-center text-decoration-underline mt-4">Our Social Links</p>
            <div class="rts__social d-flex justify-content-center gap-3 mt-3">
                <a target="_blank" href="https://facebook.com"  aria-label="facebook">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a target="_blank" href="https://instagram.com"  aria-label="instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a target="_blank" href="https://linkedin.com"  aria-label="linkedin">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a target="_blank" href="https://pinterest.com"  aria-label="pinterest">
                    <i class="fa-brands fa-pinterest"></i>
                </a>
                <a target="_blank" href="https://youtube.com"  aria-label="youtube">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- THEME PRELOADER START -->
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- THEME PRELOADER END -->
    <button type="button" class="rts__back__top" id="rts-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <!-- all plugin js -->
    <script src="/js/plugins.min.js"></script>
    <script src="/js/main.js"></script>
    </body>
</html>