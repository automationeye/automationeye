<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

    <link href="assets/css/all.min.css" rel="stylesheet">

    <link href="assets/css/fontawesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <link href="assets/css/boxicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

    <link href="assets/css/boxicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/preloader.css">
    <link rel="stylesheet" href="assets/css/style2.css">

    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="logo.png" type="image/gif" sizes="15x15">
</head>

<body class="bg-dark-5 tt-magic-cursor">

    <div class="preloader">
        <div id="particles-background" class="vertical-centered-box"></div>
        <div id="particles-foreground" class="vertical-centered-box"></div>
        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <svg width="50" height="50" viewBox="0 0 40 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M31.5875 7.80132C26.1756 2.71548 18.9772 3.33531 13.0177 7.36702C12.9433 7.45181 12.4808 7.69025 12.9963 6.94836C24.4371 -5.54919 45.4795 11.5151 33.7252 25.7347C36.3568 20.0872 37.0161 12.9032 31.5879 7.80144L31.5875 7.80132Z"
                        fill="#06D889" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M26.7504 1.91075C8.15888 -3.63601 -7.81139 25.1051 12.8958 38C-10.3418 27.992 1.07241 -2.40195 21.5296 0.151704C23.1991 0.358215 25.7562 1.14769 26.7503 1.91051L26.7504 1.91075Z"
                        fill="#06D889" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M31.656 20.3691C31.656 26.5676 26.6425 31.6058 20.4701 31.6058C14.2923 31.6058 9.2793 26.5675 9.2793 20.3691C9.2793 14.1705 14.2928 9.13232 20.4701 9.13232C26.6425 9.13232 31.656 14.1706 31.656 20.3691ZM12.2671 21.8578C11.4325 23.1348 12.4106 26.377 15.3081 28.2948C18.1789 30.2125 21.8579 30.0695 22.7139 28.7876C23.5485 27.5373 21.7676 28.3426 18.514 27.1345C13.1444 25.1426 13.0966 20.5759 12.2671 21.8578Z"
                        fill="#06D889" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M38.395 13.1796C46.0027 27.7854 24.886 46.5405 10.1649 33.2636C8.28281 31.579 7.45359 29.9525 6.08203 27.8385C17.5284 43.6315 42.7177 31.1549 38.1986 13.4121C38.0338 12.7603 38.1402 12.7021 38.3952 13.179L38.395 13.1796Z"
                        fill="#06D889" />
                </svg>
            </div>
        </div>
    </div>

    <div class="main-nav-wrapper">
        <div class="main-nav2">
            <div class="menu-close-btn"><i class="bi bi-x-lg"></i></div>
            <div class="mobile-logo-area d-flex justify-content-start align-items-center">
                <div class="header-logo">
                    <a href=""><img alt="image" class="" src="logo.png" width="100" height="50"></a>
                </div>
            </div>
            <div class="sidebar-menu-area">
                <ul class="menu-list">
                    <li class="menu-item-has-children menu-item ">
                        <a href="/" class="drop-down" data-hover="Home">Home</a><i
                            class=""></i>

                    </li>
                    <li class="menu-item-has-children menu-item"><a href="" data-hover="About">About</a><i
                            class="bi bi-plus-lg dropdown-icon2"></i>
                        <ul class="sub-menu">
                            <li><a href="/about#innovation">Innovation Hub</a></li>
                            <li><a href="/about#partnerships">Partnerships</a></li>
                            <li><a href="/about#sc">Symposiums and Conference</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children menu-item">
                        <a href="blog-grid.html" data-hover="Services">Services</a><i
                            class="bi bi-plus-lg dropdown-icon2"></i>
                        <ul class="sub-menu">
                            <li><a href="/services#engineering">Engineering Services</a></li>
                            <li><a href="/services#training">Training and Development</a></li>
                            <li><a href="/services#consult">Consultancy</a></li>
                            <li><a href="/services#repair">Industrial Repair</a></li>

                        </ul>
                    </li>
                    <li class="menu-item"><a href="https://shop.automationeye.com">E-shop</a></li>

                    <li class="menu-item"><a href="/services#training">Engineering safety</a></li>
                    <li class="menu-item"><a href="/contact">Contact us</a></li>
                    <li class="menu-item"><a href="/careers">Careers</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="sidebar-wrapper">
            <div class="header-logo">
                <a href="/"><img alt="image" class="" src="logo.png" width="100" height="50"></a>
            </div>
            <div class="sidebar-button mobile-menu-btn">
                <span></span>
            </div>
            <div class="header-btn">
                <a class="primary-btn6" href="contact.html">Get A Quote</a>
            </div>
        </div>
        <div class="main-content">
            <header class="header5 d-lg-none d-flex">
                <div class="header-logo">
                    <a href=""><img alt="image" class="" src="logo.png" width="100" height="50"></a>
                </div>
                <div class="sidebar-button mobile-menu-btn2">
                    <span></span>
                </div>
            </header>
           @yield('content');
           <footer class="two">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-top-content">
                            <div class="footer-logo">
                                <a href="/"><img class="img-fluid" src="logo.png" width="100" height="50" alt></a>
                            </div>
                            <div class="footer-contect">
                                <div class="icon">
                                    <svg width="33" height="33" viewBox="0 0 33 33" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1999_295)">
                                            <path
                                                d="M26.0808 20.4417C25.4052 19.7383 24.5903 19.3622 23.7267 19.3622C22.87 19.3622 22.0481 19.7313 21.3447 20.4348L19.1438 22.6287C18.9627 22.5312 18.7816 22.4407 18.6075 22.3501C18.3568 22.2248 18.12 22.1063 17.918 21.981C15.8564 20.6716 13.9828 18.9652 12.1859 16.7573C11.3153 15.6569 10.7302 14.7305 10.3054 13.7903C10.8765 13.2679 11.4058 12.7247 11.9212 12.2023C12.1162 12.0073 12.3113 11.8053 12.5063 11.6103C13.9689 10.1477 13.9689 8.25321 12.5063 6.79058L10.6049 4.88917C10.3889 4.67326 10.1661 4.45038 9.95713 4.22751C9.53923 3.79569 9.10045 3.34993 8.64773 2.93204C7.97214 2.26341 7.16421 1.9082 6.3145 1.9082C5.46478 1.9082 4.64293 2.26341 3.94644 2.93204C3.93947 2.939 3.93947 2.939 3.93251 2.94597L1.56445 5.33492C0.672947 6.22643 0.164512 7.31295 0.0530735 8.57359C-0.114084 10.6073 0.484896 12.5018 0.944577 13.7415C2.07289 16.7852 3.75839 19.606 6.27271 22.6287C9.32332 26.2713 12.9938 29.1478 17.1867 31.1746C18.7886 31.9338 20.9268 32.8323 23.3158 32.9855C23.462 32.9924 23.6152 32.9994 23.7545 32.9994C25.3634 32.9994 26.7146 32.4213 27.7733 31.2721C27.7802 31.2582 27.7942 31.2512 27.8011 31.2373C28.1633 30.7985 28.5812 30.4015 29.02 29.9767C29.3195 29.6911 29.6259 29.3916 29.9254 29.0782C30.6149 28.3608 30.9771 27.525 30.9771 26.6683C30.9771 25.8047 30.608 24.9759 29.9045 24.2794L26.0808 20.4417ZM28.5742 27.7758C28.5673 27.7758 28.5673 27.7827 28.5742 27.7758C28.3026 28.0683 28.024 28.3329 27.7245 28.6255C27.2718 29.0573 26.8121 29.51 26.3803 30.0184C25.6768 30.7707 24.848 31.1259 23.7615 31.1259C23.657 31.1259 23.5456 31.1259 23.4411 31.1189C21.3726 30.9866 19.4503 30.1786 18.0085 29.4891C14.0664 27.5807 10.6049 24.8714 7.72837 21.4377C5.35334 18.5752 3.76535 15.9285 2.71366 13.0868C2.06592 11.3526 1.82912 10.0014 1.93359 8.72682C2.00324 7.91193 2.31666 7.23633 2.89474 6.65825L5.26976 4.28323C5.61104 3.96284 5.97322 3.78872 6.32843 3.78872C6.76721 3.78872 7.12242 4.05339 7.3453 4.27626C7.35226 4.28323 7.35923 4.29019 7.36619 4.29716C7.79105 4.69415 8.19501 5.10508 8.61987 5.54387C8.83578 5.76675 9.05866 5.98962 9.28153 6.21946L11.1829 8.12087C11.9212 8.85915 11.9212 9.54171 11.1829 10.28C10.981 10.482 10.7859 10.6839 10.584 10.879C9.99891 11.4779 9.44173 12.0351 8.83578 12.5784C8.82185 12.5923 8.80792 12.5993 8.80096 12.6132C8.20198 13.2122 8.31342 13.7972 8.43878 14.1942C8.44575 14.2151 8.45271 14.236 8.45968 14.2569C8.95418 15.4549 9.65067 16.5832 10.7093 17.9274L10.7163 17.9344C12.6386 20.3024 14.6654 22.1481 16.9011 23.562C17.1867 23.7431 17.4792 23.8894 17.7578 24.0287C18.0085 24.154 18.2453 24.2724 18.4473 24.3978C18.4752 24.4117 18.503 24.4326 18.5309 24.4465C18.7677 24.5649 18.9906 24.6207 19.2204 24.6207C19.7985 24.6207 20.1607 24.2585 20.2791 24.1401L22.6611 21.7581C22.8979 21.5213 23.274 21.2357 23.7128 21.2357C24.1446 21.2357 24.4998 21.5074 24.7157 21.7442C24.7227 21.7511 24.7227 21.7511 24.7296 21.7581L28.5673 25.5958C29.2847 26.3062 29.2847 27.0375 28.5742 27.7758Z" />
                                            <path
                                                d="M17.8345 7.85011C19.6593 8.15656 21.3169 9.02021 22.6403 10.3435C23.9636 11.6669 24.8203 13.3245 25.1337 15.1493C25.2103 15.609 25.6073 15.9294 26.06 15.9294C26.1157 15.9294 26.1645 15.9224 26.2202 15.9154C26.7356 15.8319 27.0769 15.3443 26.9933 14.8289C26.6172 12.621 25.5725 10.6082 23.9775 9.01324C22.3826 7.41829 20.3697 6.37355 18.1618 5.99745C17.6464 5.91387 17.1659 6.25515 17.0753 6.76359C16.9848 7.27202 17.3191 7.76653 17.8345 7.85011Z" />
                                            <path
                                                d="M32.9619 14.557C32.3421 10.9213 30.6287 7.61301 27.996 4.98029C25.3633 2.34757 22.055 0.634209 18.4193 0.0143347C17.9108 -0.0762086 17.4303 0.272035 17.3397 0.780471C17.2562 1.29587 17.5974 1.77645 18.1128 1.86699C21.3585 2.41722 24.3185 3.95645 26.6727 6.30362C29.0268 8.65774 30.5591 11.6178 31.1093 14.8634C31.1859 15.3231 31.5829 15.6435 32.0356 15.6435C32.0913 15.6435 32.1401 15.6365 32.1958 15.6296C32.7042 15.553 33.0525 15.0654 32.9619 14.557Z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content">
                                    <span>Call Any Time</span>
                                    <h6><a href="tel: 29658718617">+254719548918</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-4 col-sm-6 d-flex">
                    <div class="footer-widget">
                        <div class="footer-contact mb-40">
                            <h4>
                                <svg width="14" height="20" viewBox="0 0 14 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.9213 3.4249C11.7076 1.33021 9.55162 0.0504883 7.15416 0.00158203C7.05181 -0.000527344 6.9488 -0.000527344 6.84642 0.00158203C4.449 0.0504883 2.29306 1.33021 1.07923 3.4249C-0.161468 5.566 -0.195414 8.13787 0.988414 10.3047L5.94791 19.3823C5.95013 19.3863 5.95236 19.3904 5.95466 19.3944C6.17287 19.7736 6.56377 20 7.00037 20C7.43693 20 7.82783 19.7736 8.04599 19.3944C8.0483 19.3904 8.05052 19.3863 8.05275 19.3823L13.0122 10.3047C14.196 8.13787 14.162 5.566 12.9213 3.4249ZM7.00029 9.06252C5.44947 9.06252 4.18779 7.80084 4.18779 6.25002C4.18779 4.6992 5.44947 3.43752 7.00029 3.43752C8.55111 3.43752 9.81279 4.6992 9.81279 6.25002C9.81279 7.80084 8.55115 9.06252 7.00029 9.06252Z" />
                                </svg>
                                Address
                            </h4>
                            <a href="#">8,Kampala Road,Industrial Area,Nairobi- Kenya</a>
                        </div>
             
                        <div class="footer-contact">
                            <h6>See Our New updates</h6>
                            <form>
                                <div class="form-inner">
                                    <input type="text" placeholder="Email here...">
                                    <button type="submit">
                                        <svg width="17" height="17" viewBox="0 0 13 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 d-flex justify-content-lg-start justify-content-sm-end">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h4>Our Solutions</h4>
                        </div>
                        <div class="menu-container">
                            <ul>
                                <li><a href="service.html">Web Development</a></li>
                                <li><a href="service.html">Mobile Development</a></li>
                                <li><a href="service.html">Cloud Services</a></li>
                                <li><a href="service.html">Network Connectivity</a></li>
                                <li><a href="service.html">Data analytics</a></li>
                                <li><a href="service.html">Software Development</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 d-flex justify-content-lg-center">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h4>Company</h4>
                        </div>
                        <div class="menu-container">
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="case-study.html">Case Study</a></li>
                                <li><a href="blog.html">News & Article</a></li>
                                <li><a href="team1.html">Our Team</a></li>
                                <li><a href="project.html">All Portfolio</a></li>
                                <li><a href="pricing.html">Pricing Plan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 d-flex justify-content-sm-end">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h4>Resources</h4>
                        </div>
                        <div class="menu-container">
                            <ul>
                                <li><a href="#">Support Area</a></li>
                                <li><a href="#">Support Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="pricing.html">Pricing Plan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-btm">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-btn-content">
                            <div class="copyright-area">
                                <p>©Copyright 2025 <a href="#">Automationeye</a> | Design By <a
                                        href="https://www.automationeye.com/">Automation eye</a></p>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="bx bxl-pinterest-alt"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

        </div>
    </div>




    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/swiper-bundle.min.js"></script>

    <script src="assets/js/waypoints.min.js"></script>

    <script src="assets/js/jquery.counterup.min.js"></script>

    <script src="assets/js/isotope.pkgd.min.js"></script>

    <script src="assets/js/jquery.fancybox.min.js"></script>

    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/simpleParallax.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>

    <script src="assets/js/jquery.marquee.min.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/sidebar.js"></script>

    <script src="assets/js/preloader.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        $(".marquee_text").marquee({
            direction: "left",
            duration: 40000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
        $(".marquee_text2").marquee({
            direction: "left",
            duration: 40000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });

    </script>
</body>

<!-- Mirrored from demo-egenslab.b-cdn.net/html/softconic/preview/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Mar 2024 08:07:57 GMT -->

</html>
