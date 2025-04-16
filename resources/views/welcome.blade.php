@extends('layouts.main')
@section('content')

<style>
    .services-content p {
    display: -webkit-box;
    -webkit-line-clamp: 10; /* Adjust for uniform height */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    max-height: 700px; /* Adjust as needed */
}

</style>

    <div class="banner-area-wrapper">
       
        <div class="banner-area">
            <!-- <div class="social-area">
                <ul>
                    <li><a href="https://www.fb.com/automationeye/"><i class="bx bxl-facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/automationhub/"><i class="bx bxl-linkedin"></i></a></li>

                    <li><a href="https://www.instagram.com/automationeye/"><i class="bx bxl-instagram"></i></a></li>
                </ul>
            </div> -->
            
            <div class="banner-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-title">
                            <h1>Bringing <br> <span>ease</span> to you.</h1>
                        </div>
                        <p>We are the leading Experts in Industrial Automation, Electrical, Mechanical and
                            Instrumentation Support in Africa. With a reach of over half of the African geography, we
                            strive to bring ease to the manufacturing industry with our robust skillest of support,
                            remotely and onsite. </p>


                    </div>
                    <div class="col-lg-6">
                        <div class="banner-img-wrap">
                            <div class="swiper banner5-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="banner-img">
                                            <img class="img-fluid" src="solutions/c1.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-img">
                                            <img class="img-fluid" src="solutions/c5.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-img">
                                            <img class="img-fluid" src="solutions/c4.jpg" alt>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <div class="home5-about-area pt-130 mb-130" id="home5-about-area">
        <div class="container">
            <div class="row g-4 gy-5">
                <div class="col-lg-6 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="about-content">
                        <div class="section-title-5">
                            <span>Our Values & Culture</span>
                            <h2>Who Are We</h2>
                        </div>
                        <p>Automation Eye Limited is a global technology company committed to providing comprehensive
                            solutions across various engineering and technological domains. With a focus on excellence,
                            innovation, and community building, we aim to be a leader in the industry.</p>
                        <ul class="about-featue">
                            <li>
                                <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.376831 8.16821C-0.247095 8.54593 -0.0579659 9.49862 0.662688 9.60837C1.24211 9.69666 1.52052 10.3701 1.17304 10.8431C0.740845 11.4312 1.27942 12.2389 1.98713 12.0639C2.55609 11.9231 3.07065 12.4387 2.9302 13.0088C2.75556 13.718 3.56158 14.2577 4.14855 13.8246C4.62054 13.4764 5.29275 13.7554 5.38073 14.336C5.49024 15.0581 6.44099 15.2476 6.81798 14.6224C7.12107 14.1198 7.84864 14.1198 8.15171 14.6224C8.52867 15.2476 9.47943 15.0581 9.58896 14.336C9.67707 13.7554 10.3492 13.4764 10.8211 13.8246C11.4081 14.2577 12.2142 13.718 12.0395 13.0088C11.899 12.4387 12.4136 11.9231 12.9826 12.0639C13.6903 12.2389 14.2289 11.4312 13.7967 10.8431C13.4492 10.3701 13.7276 9.69653 14.307 9.60837C15.0276 9.49864 15.2168 8.54597 14.5929 8.16821C14.0912 7.86452 14.0912 7.13547 14.5929 6.83178C15.2168 6.45407 15.0277 5.50138 14.307 5.39162C13.7276 5.30334 13.4492 4.62989 13.7967 4.15695C14.2289 3.56879 13.6903 2.76112 12.9826 2.93613C12.4136 3.07687 11.8991 2.5613 12.0395 1.99115C12.2141 1.28199 11.4081 0.742345 10.8211 1.17541C10.3492 1.52356 9.67695 1.2446 9.58896 0.664029C9.47945 -0.0580599 8.5287 -0.247606 8.15171 0.377594C7.84863 0.880237 7.12106 0.880237 6.81798 0.377594C6.44103 -0.247596 5.49027 -0.0580833 5.38073 0.664029C5.29263 1.24462 4.62054 1.5236 4.14855 1.17541C3.56158 0.742345 2.75554 1.28201 2.9302 1.99115C3.07065 2.56126 2.55612 3.07686 1.98713 2.93613C1.2794 2.76113 0.740845 3.56879 1.17304 4.15695C1.52049 4.62989 1.24209 5.30346 0.662688 5.39162C-0.0579425 5.50136 -0.247105 6.45403 0.376831 6.83178C0.878459 7.13548 0.878459 7.86453 0.376831 8.16821Z" />
                                </svg>
                                Excellence
                            </li>
                            <li>
                                <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.376831 8.16821C-0.247095 8.54593 -0.0579659 9.49862 0.662688 9.60837C1.24211 9.69666 1.52052 10.3701 1.17304 10.8431C0.740845 11.4312 1.27942 12.2389 1.98713 12.0639C2.55609 11.9231 3.07065 12.4387 2.9302 13.0088C2.75556 13.718 3.56158 14.2577 4.14855 13.8246C4.62054 13.4764 5.29275 13.7554 5.38073 14.336C5.49024 15.0581 6.44099 15.2476 6.81798 14.6224C7.12107 14.1198 7.84864 14.1198 8.15171 14.6224C8.52867 15.2476 9.47943 15.0581 9.58896 14.336C9.67707 13.7554 10.3492 13.4764 10.8211 13.8246C11.4081 14.2577 12.2142 13.718 12.0395 13.0088C11.899 12.4387 12.4136 11.9231 12.9826 12.0639C13.6903 12.2389 14.2289 11.4312 13.7967 10.8431C13.4492 10.3701 13.7276 9.69653 14.307 9.60837C15.0276 9.49864 15.2168 8.54597 14.5929 8.16821C14.0912 7.86452 14.0912 7.13547 14.5929 6.83178C15.2168 6.45407 15.0277 5.50138 14.307 5.39162C13.7276 5.30334 13.4492 4.62989 13.7967 4.15695C14.2289 3.56879 13.6903 2.76112 12.9826 2.93613C12.4136 3.07687 11.8991 2.5613 12.0395 1.99115C12.2141 1.28199 11.4081 0.742345 10.8211 1.17541C10.3492 1.52356 9.67695 1.2446 9.58896 0.664029C9.47945 -0.0580599 8.5287 -0.247606 8.15171 0.377594C7.84863 0.880237 7.12106 0.880237 6.81798 0.377594C6.44103 -0.247596 5.49027 -0.0580833 5.38073 0.664029C5.29263 1.24462 4.62054 1.5236 4.14855 1.17541C3.56158 0.742345 2.75554 1.28201 2.9302 1.99115C3.07065 2.56126 2.55612 3.07686 1.98713 2.93613C1.2794 2.76113 0.740845 3.56879 1.17304 4.15695C1.52049 4.62989 1.24209 5.30346 0.662688 5.39162C-0.0579425 5.50136 -0.247105 6.45403 0.376831 6.83178C0.878459 7.13548 0.878459 7.86453 0.376831 8.16821Z" />
                                </svg>
                                Value
                            </li>
                            <li>
                                <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.376831 8.16821C-0.247095 8.54593 -0.0579659 9.49862 0.662688 9.60837C1.24211 9.69666 1.52052 10.3701 1.17304 10.8431C0.740845 11.4312 1.27942 12.2389 1.98713 12.0639C2.55609 11.9231 3.07065 12.4387 2.9302 13.0088C2.75556 13.718 3.56158 14.2577 4.14855 13.8246C4.62054 13.4764 5.29275 13.7554 5.38073 14.336C5.49024 15.0581 6.44099 15.2476 6.81798 14.6224C7.12107 14.1198 7.84864 14.1198 8.15171 14.6224C8.52867 15.2476 9.47943 15.0581 9.58896 14.336C9.67707 13.7554 10.3492 13.4764 10.8211 13.8246C11.4081 14.2577 12.2142 13.718 12.0395 13.0088C11.899 12.4387 12.4136 11.9231 12.9826 12.0639C13.6903 12.2389 14.2289 11.4312 13.7967 10.8431C13.4492 10.3701 13.7276 9.69653 14.307 9.60837C15.0276 9.49864 15.2168 8.54597 14.5929 8.16821C14.0912 7.86452 14.0912 7.13547 14.5929 6.83178C15.2168 6.45407 15.0277 5.50138 14.307 5.39162C13.7276 5.30334 13.4492 4.62989 13.7967 4.15695C14.2289 3.56879 13.6903 2.76112 12.9826 2.93613C12.4136 3.07687 11.8991 2.5613 12.0395 1.99115C12.2141 1.28199 11.4081 0.742345 10.8211 1.17541C10.3492 1.52356 9.67695 1.2446 9.58896 0.664029C9.47945 -0.0580599 8.5287 -0.247606 8.15171 0.377594C7.84863 0.880237 7.12106 0.880237 6.81798 0.377594C6.44103 -0.247596 5.49027 -0.0580833 5.38073 0.664029C5.29263 1.24462 4.62054 1.5236 4.14855 1.17541C3.56158 0.742345 2.75554 1.28201 2.9302 1.99115C3.07065 2.56126 2.55612 3.07686 1.98713 2.93613C1.2794 2.76113 0.740845 3.56879 1.17304 4.15695C1.52049 4.62989 1.24209 5.30346 0.662688 5.39162C-0.0579425 5.50136 -0.247105 6.45403 0.376831 6.83178C0.878459 7.13548 0.878459 7.86453 0.376831 8.16821Z" />
                                </svg>
                                Skilled
                            </li>
                            <li>
                                <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.376831 8.16821C-0.247095 8.54593 -0.0579659 9.49862 0.662688 9.60837C1.24211 9.69666 1.52052 10.3701 1.17304 10.8431C0.740845 11.4312 1.27942 12.2389 1.98713 12.0639C2.55609 11.9231 3.07065 12.4387 2.9302 13.0088C2.75556 13.718 3.56158 14.2577 4.14855 13.8246C4.62054 13.4764 5.29275 13.7554 5.38073 14.336C5.49024 15.0581 6.44099 15.2476 6.81798 14.6224C7.12107 14.1198 7.84864 14.1198 8.15171 14.6224C8.52867 15.2476 9.47943 15.0581 9.58896 14.336C9.67707 13.7554 10.3492 13.4764 10.8211 13.8246C11.4081 14.2577 12.2142 13.718 12.0395 13.0088C11.899 12.4387 12.4136 11.9231 12.9826 12.0639C13.6903 12.2389 14.2289 11.4312 13.7967 10.8431C13.4492 10.3701 13.7276 9.69653 14.307 9.60837C15.0276 9.49864 15.2168 8.54597 14.5929 8.16821C14.0912 7.86452 14.0912 7.13547 14.5929 6.83178C15.2168 6.45407 15.0277 5.50138 14.307 5.39162C13.7276 5.30334 13.4492 4.62989 13.7967 4.15695C14.2289 3.56879 13.6903 2.76112 12.9826 2.93613C12.4136 3.07687 11.8991 2.5613 12.0395 1.99115C12.2141 1.28199 11.4081 0.742345 10.8211 1.17541C10.3492 1.52356 9.67695 1.2446 9.58896 0.664029C9.47945 -0.0580599 8.5287 -0.247606 8.15171 0.377594C7.84863 0.880237 7.12106 0.880237 6.81798 0.377594C6.44103 -0.247596 5.49027 -0.0580833 5.38073 0.664029C5.29263 1.24462 4.62054 1.5236 4.14855 1.17541C3.56158 0.742345 2.75554 1.28201 2.9302 1.99115C3.07065 2.56126 2.55612 3.07686 1.98713 2.93613C1.2794 2.76113 0.740845 3.56879 1.17304 4.15695C1.52049 4.62989 1.24209 5.30346 0.662688 5.39162C-0.0579425 5.50136 -0.247105 6.45403 0.376831 6.83178C0.878459 7.13548 0.878459 7.86453 0.376831 8.16821Z" />
                                </svg>
                                Gratitude
                            </li>
                        </ul>
                        <p>Collaboration is key to our success. We believe in the power of teamwork, diversity, and
                            inclusion to foster innovation and drive meaningful change. By fostering an environment where
                            ideas are freely shared, and individuals are encouraged to contribute their unique perspectives,
                            we harness the collective intelligence of our global community to solve complex challenges and
                            achieve shared goals.</p>
                    </div>
                </div>
                <div class="col-lg-6 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="about-img-wrap">
                        <div class="about-img magnetic-item">
                            <img class="img-fluid" src="solutions/repairs.jpg"width="400" height ="100" alt>
                        </div>
                        <div class="about-video-area magnetic-item">
                            <img class="img-fluid" src="assets/img/home-5/about-img-2.png" alt>
                            <a href="https://youtu.be/y8bJk_hGYD4"
                                data-fancybox="gallery" class="about-video-btn video-popup">
                                <i class="bi bi-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home4-services-section">
        <div class="container-xl container-fluid">
            <div class="row wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-12">
                    <div class="section-title-4 two text-center">
                        <span>Solutions We Offer</span>
                        <h2>Bring The Revolution With The <span>Diligence</span> Service</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10 wow animate fadeInUp" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div class="single-service-card magnetic-item">
                        <div class="icon">

                        <img src="solutions/maintenance.jpg">
                            <!-- <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.6731 41.5094C23.438 41.5095 23.2106 41.4256 23.0318 41.2728L16.6219 35.8148C16.5126 35.7218 16.4249 35.6062 16.3648 35.476C16.3046 35.3458 16.2734 35.204 16.2734 35.0606C16.2734 34.9171 16.3046 34.7754 16.3648 34.6452C16.4249 34.5149 16.5126 34.3993 16.6219 34.3063L23.0318 28.8483C23.2318 28.678 23.4912 28.594 23.7531 28.6149C24.0149 28.6358 24.2577 28.7599 24.4281 28.9598C24.7824 29.3767 24.7326 30.0018 24.3159 30.3561L18.7921 35.0603L24.3159 39.7643C24.4704 39.8957 24.5808 40.0714 24.6322 40.2676C24.6837 40.4637 24.6737 40.671 24.6036 40.8613C24.5335 41.0516 24.4066 41.2158 24.2402 41.3317C24.0738 41.4476 23.876 41.5097 23.6731 41.5094ZM36.3269 41.5094C36.0467 41.5094 35.7682 41.3911 35.5725 41.1606C35.4022 40.9606 35.3183 40.7012 35.3392 40.4394C35.3602 40.1775 35.4842 39.9347 35.6842 39.7643L41.208 35.0603L35.6842 30.3561C35.4914 30.1838 35.3736 29.9429 35.356 29.6848C35.3384 29.4268 35.4224 29.1722 35.5901 28.9753C35.7577 28.7784 35.9958 28.6549 36.2533 28.6311C36.5108 28.6074 36.7674 28.6853 36.9682 28.8482L43.3782 34.3062C43.4874 34.3992 43.5751 34.5148 43.6353 34.645C43.6955 34.7752 43.7266 34.917 43.7266 35.0604C43.7266 35.2039 43.6955 35.3456 43.6353 35.4759C43.5751 35.6061 43.4874 35.7217 43.3782 35.8147L36.9682 41.2727C36.7895 41.4255 36.5622 41.5094 36.3271 41.5094H36.3269ZM27.7309 45.6033C27.5834 45.6035 27.4377 45.5707 27.3044 45.5074C27.1711 45.444 27.0537 45.3517 26.9607 45.2372C26.8676 45.1227 26.8014 44.9888 26.7667 44.8454C26.732 44.702 26.7298 44.5526 26.7602 44.4083L30.755 25.4409C30.8092 25.1838 30.9632 24.9588 31.1833 24.8153C31.4034 24.6718 31.6715 24.6217 31.9286 24.6758C32.1857 24.73 32.4107 24.8841 32.5542 25.1042C32.6977 25.3243 32.7478 25.5924 32.6937 25.8494L28.6989 44.8167C28.6521 45.0388 28.5304 45.2382 28.3542 45.3814C28.178 45.5246 27.958 45.603 27.7309 45.6033Z" />
                                <path
                                    d="M53.3491 55.9367H6.65094C2.98387 55.9367 0 52.9534 0 49.2858V9.65094C0 5.98387 2.98387 3 6.65094 3H53.3491C57.0161 3 60 5.98387 60 9.65094V49.2858C60 52.9534 57.0161 55.9367 53.3491 55.9367ZM6.65094 4.98113C4.07618 4.98113 1.98113 7.07618 1.98113 9.65094V49.2858C1.98113 51.8605 4.07618 53.9556 6.65094 53.9556H53.3491C55.9238 53.9556 58.0189 51.8605 58.0189 49.2858V9.65094C58.0189 7.07618 55.9238 4.98113 53.3491 4.98113H6.65094Z" />
                                <path
                                    d="M59.0094 18.8618H0.990565C0.73075 18.8574 0.483062 18.7511 0.300878 18.5658C0.118694 18.3805 0.0166016 18.1311 0.0166016 17.8712C0.0166016 17.6114 0.118694 17.3619 0.300878 17.1766C0.483062 16.9913 0.73075 16.885 0.990565 16.8806H59.0094C59.2692 16.885 59.5169 16.9913 59.6991 17.1766C59.8813 17.3619 59.9834 17.6114 59.9834 17.8712C59.9834 18.1311 59.8813 18.3805 59.6991 18.5658C59.5169 18.7511 59.2692 18.8574 59.0094 18.8618ZM16.9248 14.1218C15.1968 14.1218 13.79 12.7149 13.79 10.9869C13.79 9.25852 15.1968 7.8522 16.9248 7.8522C18.6532 7.8522 20.0595 9.25852 20.0595 10.9869C20.0595 12.7149 18.6532 14.1218 16.9248 14.1218ZM16.9248 9.83333C16.289 9.83333 15.7711 10.3507 15.7711 10.9869C15.7711 11.6231 16.289 12.1406 16.9248 12.1406C17.561 12.1406 18.0784 11.6233 18.0784 10.9869C18.0784 10.3506 17.561 9.83333 16.9248 9.83333ZM7.2934 14.0914C5.56472 14.0914 4.15854 12.685 4.15854 10.9566C4.15854 9.2281 5.56472 7.82178 7.29325 7.82178C9.02179 7.82178 10.428 9.2281 10.428 10.9566C10.428 12.685 9.02193 14.0914 7.2934 14.0914ZM7.2934 9.80291C6.65759 9.80291 6.13967 10.3208 6.13967 10.9566C6.13967 11.5929 6.65759 12.1102 7.29325 12.1102C7.92948 12.1102 8.44684 11.5929 8.44684 10.9566C8.44684 10.3208 7.92962 9.80291 7.2934 9.80291ZM26.5562 14.1516C24.8284 14.1516 23.4221 12.7453 23.4221 11.0168C23.4221 9.28895 24.8283 7.88263 26.5562 7.88263C28.2848 7.88263 29.6909 9.28881 29.6909 11.0168C29.6909 12.7453 28.2848 14.1516 26.5562 14.1516ZM26.5562 9.86319C25.9206 9.86319 25.4032 10.3806 25.4032 11.0168C25.4032 11.653 25.9206 12.1705 26.5562 12.1705C27.1925 12.1705 27.7098 11.653 27.7098 11.0168C27.7098 10.3806 27.1925 9.86319 26.5562 9.86319Z" />
                            </svg> -->
                        </div>
                        <div class="services-content">
                            <h3><a href="service-details.html">Industrial Machines Maintenance and Service</a></h3>
                            <p>One of The Major Concerns of any
                                manufacturer is in their ability to keep
                                their machines running and healthy for
                                as long as it takes before their
                                scheduled Upgrades and expansion to
                                more or bigger machines. With this
                                concern, comes the need to maintain
                                and service the machines, replacing
                                worn out components and restoring the
                                machines to their optimum operating
                                states as quickly as possible. This is
                                true for all industries that We as
                                Automation Eye Limited, partner with,
                                including Food and Beverage, Oil and
                                Gas, Processing and Packaging,
                                Pharmaceutical Industries, Cement
                                Production and Processing, Grain
                                Handling Industries and Motor/Vehicle
                                Assembly Industries</p>
                            <div class="services-btn">
                                <a class="primary-btn5" href="service-details.html">
                                    <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.51038 32.6729C-0.990382 34.1837 -0.232333 37.9945 2.65612 38.4335C4.97848 38.7866 6.09439 41.4804 4.70164 43.3722C2.96938 45.7248 5.12803 48.9555 7.9646 48.2555C10.245 47.6925 12.3074 49.7548 11.7445 52.0354C11.0445 54.8721 14.2752 57.0306 16.6278 55.2984C18.5196 53.9057 21.2139 55.0216 21.5665 57.3439C22.0054 60.2322 25.8161 60.9904 27.3271 58.4896C28.5419 56.479 31.4581 56.479 32.6729 58.4896C34.1837 60.9904 37.9945 60.2323 38.4335 57.3439C38.7866 55.0215 41.4804 53.9056 43.3722 55.2984C45.7248 57.0306 48.9555 54.872 48.2555 52.0354C47.6925 49.755 49.7548 47.6925 52.0354 48.2555C54.872 48.9555 57.0306 45.7248 55.2984 43.3722C53.9057 41.4804 55.0216 38.7861 57.3439 38.4335C60.2322 37.9946 60.9904 34.1839 58.4896 32.6729C56.479 31.4581 56.479 28.5419 58.4896 27.3271C60.9904 25.8163 60.2323 22.0055 57.3439 21.5665C55.0215 21.2134 53.9056 18.5196 55.2984 16.6278C57.0306 14.2752 54.872 11.0445 52.0354 11.7445C49.7549 12.3075 47.6925 10.2452 48.2555 7.9646C48.9555 5.12795 45.7248 2.96938 43.3722 4.70164C41.4804 6.09426 38.7861 4.9784 38.4335 2.65612C37.9946 -0.23224 34.1839 -0.990422 32.6729 1.51038C31.4581 3.52095 28.5419 3.52095 27.3271 1.51038C25.8163 -0.990382 22.0055 -0.232333 21.5665 2.65612C21.2134 4.97848 18.5196 6.09439 16.6278 4.70164C14.2752 2.96938 11.0445 5.12803 11.7445 7.9646C12.3075 10.245 10.2452 12.3074 7.9646 11.7445C5.12795 11.0445 2.96938 14.2752 4.70164 16.6278C6.09426 18.5196 4.9784 21.2139 2.65612 21.5665C-0.232239 22.0054 -0.990423 25.8161 1.51038 27.3271C3.52095 28.5419 3.52095 31.4581 1.51038 32.6729Z" />
                                    </svg>
                                    <div class="content">
                                        Learn More
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 13 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H12M12 1V13M12 1L0.5 12" />
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow animate fadeInUp" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="single-service-card magnetic-item">
                        <div class="icon">

                          <img src ="solutions/Training.jpg">
                        </div>
                        <div class="services-content">
                            <h3><a href="service-details.html"> Industrial Automation Training</a></h3>
                            <p> One of the Key Players to the Optimum Efficiency and Effectiveness of any
                                manufacturing platform is in their knowledge of Industrial Automation.
                                Automation helps manufacturers to be able to run their processes continuously
                                for extended periods of time without having the problem of reduction in
                                quality of product or error that would otherwise be there if the machines were
                                manually run. We acknowledge that there is a gap of knowledge that needs to
                                be closed when it comes to the human resources needed to run the machines.
                                Automation Eye Limited closes this gap by offering Industrial Automation
                                Training to electrical engineers, maintenance engineers, production managers,
                                machine operators and even plant managers to grant them requisite
                                knowledge on how to run automated machines effectively. It helps to reduce
                                machine downtime during troubleshooting especially for fast moving and time
                                sensitive products.</p>
                            <div class="services-btn">
                                <a class="primary-btn5" href="service-details.html">
                                    <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.51038 32.6729C-0.990382 34.1837 -0.232333 37.9945 2.65612 38.4335C4.97848 38.7866 6.09439 41.4804 4.70164 43.3722C2.96938 45.7248 5.12803 48.9555 7.9646 48.2555C10.245 47.6925 12.3074 49.7548 11.7445 52.0354C11.0445 54.8721 14.2752 57.0306 16.6278 55.2984C18.5196 53.9057 21.2139 55.0216 21.5665 57.3439C22.0054 60.2322 25.8161 60.9904 27.3271 58.4896C28.5419 56.479 31.4581 56.479 32.6729 58.4896C34.1837 60.9904 37.9945 60.2323 38.4335 57.3439C38.7866 55.0215 41.4804 53.9056 43.3722 55.2984C45.7248 57.0306 48.9555 54.872 48.2555 52.0354C47.6925 49.755 49.7548 47.6925 52.0354 48.2555C54.872 48.9555 57.0306 45.7248 55.2984 43.3722C53.9057 41.4804 55.0216 38.7861 57.3439 38.4335C60.2322 37.9946 60.9904 34.1839 58.4896 32.6729C56.479 31.4581 56.479 28.5419 58.4896 27.3271C60.9904 25.8163 60.2323 22.0055 57.3439 21.5665C55.0215 21.2134 53.9056 18.5196 55.2984 16.6278C57.0306 14.2752 54.872 11.0445 52.0354 11.7445C49.7549 12.3075 47.6925 10.2452 48.2555 7.9646C48.9555 5.12795 45.7248 2.96938 43.3722 4.70164C41.4804 6.09426 38.7861 4.9784 38.4335 2.65612C37.9946 -0.23224 34.1839 -0.990422 32.6729 1.51038C31.4581 3.52095 28.5419 3.52095 27.3271 1.51038C25.8163 -0.990382 22.0055 -0.232333 21.5665 2.65612C21.2134 4.97848 18.5196 6.09439 16.6278 4.70164C14.2752 2.96938 11.0445 5.12803 11.7445 7.9646C12.3075 10.245 10.2452 12.3074 7.9646 11.7445C5.12795 11.0445 2.96938 14.2752 4.70164 16.6278C6.09426 18.5196 4.9784 21.2139 2.65612 21.5665C-0.232239 22.0054 -0.990423 25.8161 1.51038 27.3271C3.52095 28.5419 3.52095 31.4581 1.51038 32.6729Z" />
                                    </svg>
                                    <div class="content">
                                        Learn More
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 13 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H12M12 1V13M12 1L0.5 12" />
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow animate fadeInUp" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="single-service-card magnetic-item">
                        <div class="icon">
                        <img src="solutions/supply.jpg">
                        </div>
                        <div class="services-content">
                            <h3><a href="service-details.html">Machines Spare Parts Supply </a></h3>
                            <p>With the continuous running of the machines, comes the need to
                                replace worn out or broken machine components, be it electrical,
                                mechanical or automation hardware. The lack of access to such
                                spares can lead to the crippling of production and the potential
                                loss of product or great customer relationships. Automation Eye
                                Limited has partnerships with all major OEMs all around the
                                world and Global logistics companies to ensure that we can
                                quickly and efficiently deliver Any needed spare parts to our
                                partners. We have an array of the most critical spare parts in our
                                warehouses, and access to all other spares that our partners
                                would need, regardless of their location all around the world. Our
                                clients can easily make orders through our official website or
                                make official requisitions using the emails and contacts listed in
                                our portfolios. We ensure that whatever you need is timely
                                delivered to you</p>
                            <div class="services-btn">
                                <a class="primary-btn5" href="service-details.html">
                                    <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.51038 32.6729C-0.990382 34.1837 -0.232333 37.9945 2.65612 38.4335C4.97848 38.7866 6.09439 41.4804 4.70164 43.3722C2.96938 45.7248 5.12803 48.9555 7.9646 48.2555C10.245 47.6925 12.3074 49.7548 11.7445 52.0354C11.0445 54.8721 14.2752 57.0306 16.6278 55.2984C18.5196 53.9057 21.2139 55.0216 21.5665 57.3439C22.0054 60.2322 25.8161 60.9904 27.3271 58.4896C28.5419 56.479 31.4581 56.479 32.6729 58.4896C34.1837 60.9904 37.9945 60.2323 38.4335 57.3439C38.7866 55.0215 41.4804 53.9056 43.3722 55.2984C45.7248 57.0306 48.9555 54.872 48.2555 52.0354C47.6925 49.755 49.7548 47.6925 52.0354 48.2555C54.872 48.9555 57.0306 45.7248 55.2984 43.3722C53.9057 41.4804 55.0216 38.7861 57.3439 38.4335C60.2322 37.9946 60.9904 34.1839 58.4896 32.6729C56.479 31.4581 56.479 28.5419 58.4896 27.3271C60.9904 25.8163 60.2323 22.0055 57.3439 21.5665C55.0215 21.2134 53.9056 18.5196 55.2984 16.6278C57.0306 14.2752 54.872 11.0445 52.0354 11.7445C49.7549 12.3075 47.6925 10.2452 48.2555 7.9646C48.9555 5.12795 45.7248 2.96938 43.3722 4.70164C41.4804 6.09426 38.7861 4.9784 38.4335 2.65612C37.9946 -0.23224 34.1839 -0.990422 32.6729 1.51038C31.4581 3.52095 28.5419 3.52095 27.3271 1.51038C25.8163 -0.990382 22.0055 -0.232333 21.5665 2.65612C21.2134 4.97848 18.5196 6.09439 16.6278 4.70164C14.2752 2.96938 11.0445 5.12803 11.7445 7.9646C12.3075 10.245 10.2452 12.3074 7.9646 11.7445C5.12795 11.0445 2.96938 14.2752 4.70164 16.6278C6.09426 18.5196 4.9784 21.2139 2.65612 21.5665C-0.232239 22.0054 -0.990423 25.8161 1.51038 27.3271C3.52095 28.5419 3.52095 31.4581 1.51038 32.6729Z" />
                                    </svg>
                                    <div class="content">
                                        Learn More
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 13 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H12M12 1V13M12 1L0.5 12" />
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow animate fadeInUp" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="single-service-card magnetic-item">
                        <div class="icon">
                        <img src="solutions/repairs.jpg">
                        </div>
                        <div class="services-content">
                            <h3><a href="service-details.html">Spare Parts Repair and Maintenance</a></h3>
                            <p> We Believe in a recyclable economy for industrial
                                machines. A major challenge for most of our
                                partners has been to Repair their broken machine
                                parts. Replacing parts like Variable Frequency
                                Drives and Motors and other electrical parts can be
                                quite costly. We acknowledge this dilemma of either
                                repairing the broken part or buying a new one all
                                together. Automation Eye Limited has trained
                                Repair Engineers that have vast experience in
                                repairing all electrical parts, from PLCs, to HMIs, to
                                VFDs, to motors and to Pneumatic and Hydraulic
                                Systems. With our cutting edge technologies, we
                                troubleshoot your broken part, and give valued
                                advice and help in repairing it. All our repairs are
                                accompanied with a warranty to ensure partner trust
                                and satisfaction. Where Repair is not possible, we
                                offer our partners with a valued solution on where to
                                get a cost effective replacement or Retrofit of the
                                same in the case of obsolete spare parts. We are
                                here for you. Let's revive those parts stored away for
                                lack of Repair solutions.</p>
                            <div class="services-btn">
                                <a class="primary-btn5" href="service-details.html">
                                    <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.51038 32.6729C-0.990382 34.1837 -0.232333 37.9945 2.65612 38.4335C4.97848 38.7866 6.09439 41.4804 4.70164 43.3722C2.96938 45.7248 5.12803 48.9555 7.9646 48.2555C10.245 47.6925 12.3074 49.7548 11.7445 52.0354C11.0445 54.8721 14.2752 57.0306 16.6278 55.2984C18.5196 53.9057 21.2139 55.0216 21.5665 57.3439C22.0054 60.2322 25.8161 60.9904 27.3271 58.4896C28.5419 56.479 31.4581 56.479 32.6729 58.4896C34.1837 60.9904 37.9945 60.2323 38.4335 57.3439C38.7866 55.0215 41.4804 53.9056 43.3722 55.2984C45.7248 57.0306 48.9555 54.872 48.2555 52.0354C47.6925 49.755 49.7548 47.6925 52.0354 48.2555C54.872 48.9555 57.0306 45.7248 55.2984 43.3722C53.9057 41.4804 55.0216 38.7861 57.3439 38.4335C60.2322 37.9946 60.9904 34.1839 58.4896 32.6729C56.479 31.4581 56.479 28.5419 58.4896 27.3271C60.9904 25.8163 60.2323 22.0055 57.3439 21.5665C55.0215 21.2134 53.9056 18.5196 55.2984 16.6278C57.0306 14.2752 54.872 11.0445 52.0354 11.7445C49.7549 12.3075 47.6925 10.2452 48.2555 7.9646C48.9555 5.12795 45.7248 2.96938 43.3722 4.70164C41.4804 6.09426 38.7861 4.9784 38.4335 2.65612C37.9946 -0.23224 34.1839 -0.990422 32.6729 1.51038C31.4581 3.52095 28.5419 3.52095 27.3271 1.51038C25.8163 -0.990382 22.0055 -0.232333 21.5665 2.65612C21.2134 4.97848 18.5196 6.09439 16.6278 4.70164C14.2752 2.96938 11.0445 5.12803 11.7445 7.9646C12.3075 10.245 10.2452 12.3074 7.9646 11.7445C5.12795 11.0445 2.96938 14.2752 4.70164 16.6278C6.09426 18.5196 4.9784 21.2139 2.65612 21.5665C-0.232239 22.0054 -0.990423 25.8161 1.51038 27.3271C3.52095 28.5419 3.52095 31.4581 1.51038 32.6729Z" />
                                    </svg>
                                    <div class="content">
                                        Learn More
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 13 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H12M12 1V13M12 1L0.5 12" />
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow animate fadeInUp" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="single-service-card magnetic-item">
                        <div class="icon">
                        <img src="solutions/installation.jpg">
                        </div>
                        <div class="services-content">
                            <h3><a href="service-details.html"> Machine Installation, Commissioning,
                                    Upgrades and Retrofits</a></h3>
                            <p>For most of our partners, with
                                increased client reach comes the need
                                to either buy new machines and
                                install them, or upgrade and Retrofit
                                their existing machines to increase
                                production that meets the customer
                                needs. In other scenarios, our
                                partners have a need to change the
                                operating principles of their
                                machines to meet very specific needs.
                                We acknowledge that this can be an
                                expensive venture especially when our
                                partners would want to do it as soon
                                as possible. Automation Eye Limited
                                offers this solution, listening to our
                                partner needs and customising a
                                solution that meets their needs. We
                                offer our consultancy services from
                                project initialization and planning,
                                machine acquisition, installation,
                                commissioning, maintenance, Retrofit
                                and Upgrades. We will walk with you
                                from having an idea to seeing the
                                idea bear fruits. Our team of trained
                                service, installation and
                                commissioning engineers ensure that
                                you will always be a leader in your
                                f
                                ield when it comes to meeting your
                                customer needs.
                            </p>
                            <div class="services-btn">
                                <a class="primary-btn5" href="service-details.html">
                                    <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.51038 32.6729C-0.990382 34.1837 -0.232333 37.9945 2.65612 38.4335C4.97848 38.7866 6.09439 41.4804 4.70164 43.3722C2.96938 45.7248 5.12803 48.9555 7.9646 48.2555C10.245 47.6925 12.3074 49.7548 11.7445 52.0354C11.0445 54.8721 14.2752 57.0306 16.6278 55.2984C18.5196 53.9057 21.2139 55.0216 21.5665 57.3439C22.0054 60.2322 25.8161 60.9904 27.3271 58.4896C28.5419 56.479 31.4581 56.479 32.6729 58.4896C34.1837 60.9904 37.9945 60.2323 38.4335 57.3439C38.7866 55.0215 41.4804 53.9056 43.3722 55.2984C45.7248 57.0306 48.9555 54.872 48.2555 52.0354C47.6925 49.755 49.7548 47.6925 52.0354 48.2555C54.872 48.9555 57.0306 45.7248 55.2984 43.3722C53.9057 41.4804 55.0216 38.7861 57.3439 38.4335C60.2322 37.9946 60.9904 34.1839 58.4896 32.6729C56.479 31.4581 56.479 28.5419 58.4896 27.3271C60.9904 25.8163 60.2323 22.0055 57.3439 21.5665C55.0215 21.2134 53.9056 18.5196 55.2984 16.6278C57.0306 14.2752 54.872 11.0445 52.0354 11.7445C49.7549 12.3075 47.6925 10.2452 48.2555 7.9646C48.9555 5.12795 45.7248 2.96938 43.3722 4.70164C41.4804 6.09426 38.7861 4.9784 38.4335 2.65612C37.9946 -0.23224 34.1839 -0.990422 32.6729 1.51038C31.4581 3.52095 28.5419 3.52095 27.3271 1.51038C25.8163 -0.990382 22.0055 -0.232333 21.5665 2.65612C21.2134 4.97848 18.5196 6.09439 16.6278 4.70164C14.2752 2.96938 11.0445 5.12803 11.7445 7.9646C12.3075 10.245 10.2452 12.3074 7.9646 11.7445C5.12795 11.0445 2.96938 14.2752 4.70164 16.6278C6.09426 18.5196 4.9784 21.2139 2.65612 21.5665C-0.232239 22.0054 -0.990423 25.8161 1.51038 27.3271C3.52095 28.5419 3.52095 31.4581 1.51038 32.6729Z" />
                                    </svg>
                                    <div class="content">
                                        Learn More
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 13 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H12M12 1V13M12 1L0.5 12" />
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow animate fadeInUp" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div class="single-service-card magnetic-item">
                        <div class="icon">
                        <img src="solutions/panels.jpg">
                        </div>
                        <div class="services-content">
                            <h3><a href="service-details.html">Electrical Panel Design, Fabrication,
                                    Building and Upgrade</a></h3>
                            <p> Our team of specialists are vast In the knowledge and
                                understanding of Design, Fabrication and Building of Both High
                                Voltage and Low Voltage Electrical Panels. We walk with you
                                through all the stages from initial concepts, Electrical Diagrams
                                Designs, procurement and acquisition of electrical components,
                                fabrication and commissioning of the panels. We deliver high quality
                                long lasting solutions to our partners and begin a journey with them
                                to maintain their processes and control systems. We also help our
                                partners to make quality decisions on whether or not to upgrade
                                their old existing Electrical panels and electrical components,
                                ensuring that our partners are always on the front line in their
                                respective fields. Reach to us today for all your Electrical Panel
                                Needs.</p>
                            <div class="services-btn">
                                <a class="primary-btn5" href="service-details.html">
                                    <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.51038 32.6729C-0.990382 34.1837 -0.232333 37.9945 2.65612 38.4335C4.97848 38.7866 6.09439 41.4804 4.70164 43.3722C2.96938 45.7248 5.12803 48.9555 7.9646 48.2555C10.245 47.6925 12.3074 49.7548 11.7445 52.0354C11.0445 54.8721 14.2752 57.0306 16.6278 55.2984C18.5196 53.9057 21.2139 55.0216 21.5665 57.3439C22.0054 60.2322 25.8161 60.9904 27.3271 58.4896C28.5419 56.479 31.4581 56.479 32.6729 58.4896C34.1837 60.9904 37.9945 60.2323 38.4335 57.3439C38.7866 55.0215 41.4804 53.9056 43.3722 55.2984C45.7248 57.0306 48.9555 54.872 48.2555 52.0354C47.6925 49.755 49.7548 47.6925 52.0354 48.2555C54.872 48.9555 57.0306 45.7248 55.2984 43.3722C53.9057 41.4804 55.0216 38.7861 57.3439 38.4335C60.2322 37.9946 60.9904 34.1839 58.4896 32.6729C56.479 31.4581 56.479 28.5419 58.4896 27.3271C60.9904 25.8163 60.2323 22.0055 57.3439 21.5665C55.0215 21.2134 53.9056 18.5196 55.2984 16.6278C57.0306 14.2752 54.872 11.0445 52.0354 11.7445C49.7549 12.3075 47.6925 10.2452 48.2555 7.9646C48.9555 5.12795 45.7248 2.96938 43.3722 4.70164C41.4804 6.09426 38.7861 4.9784 38.4335 2.65612C37.9946 -0.23224 34.1839 -0.990422 32.6729 1.51038C31.4581 3.52095 28.5419 3.52095 27.3271 1.51038C25.8163 -0.990382 22.0055 -0.232333 21.5665 2.65612C21.2134 4.97848 18.5196 6.09439 16.6278 4.70164C14.2752 2.96938 11.0445 5.12803 11.7445 7.9646C12.3075 10.245 10.2452 12.3074 7.9646 11.7445C5.12795 11.0445 2.96938 14.2752 4.70164 16.6278C6.09426 18.5196 4.9784 21.2139 2.65612 21.5665C-0.232239 22.0054 -0.990423 25.8161 1.51038 27.3271C3.52095 28.5419 3.52095 31.4581 1.51038 32.6729Z" />
                                    </svg>
                                    <div class="content">
                                        Learn More
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 13 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H12M12 1V13M12 1L0.5 12" />
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 justify-content-center">

                <div class="col-lg-4 col-md-6 col-sm-10 wow animate fadeInUp" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="single-service-card magnetic-item">
                        <div class="icon">
                        <img src="solutions/safety.jpg">
                        </div>
                        <div class="services-content">
                            <h3><a href="service-details.html"> Engineering Workplace Safety
                                    Consultancy and Trainings</a></h3>
                            <p> For any Manufacturing Company, Safety is a Key player to
                                the daily running of its processes, ensuring no injuries or
                                fatalities and creating a safe environment for all employees
                                to work in. As Automation Eye Limited, we understand this
                                need and we have partnered with our Global stakeholders
                                to provide Environmental, Occupational Health and Safety
                                Solutions to all our interested partners. Our consultancy
                                services in this regard include Environmental Impact
                                Assessment (EIA), Occupational Health and Safety Audits,
                                Fire Safety Audits, Fire and Spill Drills, Emergency
                                Evacuation Planning and Designing, Environmental Audits,
                                Risk Assessments, Environmental Aspect Monitoring (Air
                                Quality and Noise Level Survey), ISO 45001:2018 (OHSMS)
                                and ISO 14001:2015 (EMS) implementation, Personal
                                Protective Equipment Consultancy and Supply and finally
                                Fire Safety Appliance Supply and Installation. </p>
                            <div class="services-btn">
                                <a class="primary-btn5" href="service-details.html">
                                    <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.51038 32.6729C-0.990382 34.1837 -0.232333 37.9945 2.65612 38.4335C4.97848 38.7866 6.09439 41.4804 4.70164 43.3722C2.96938 45.7248 5.12803 48.9555 7.9646 48.2555C10.245 47.6925 12.3074 49.7548 11.7445 52.0354C11.0445 54.8721 14.2752 57.0306 16.6278 55.2984C18.5196 53.9057 21.2139 55.0216 21.5665 57.3439C22.0054 60.2322 25.8161 60.9904 27.3271 58.4896C28.5419 56.479 31.4581 56.479 32.6729 58.4896C34.1837 60.9904 37.9945 60.2323 38.4335 57.3439C38.7866 55.0215 41.4804 53.9056 43.3722 55.2984C45.7248 57.0306 48.9555 54.872 48.2555 52.0354C47.6925 49.755 49.7548 47.6925 52.0354 48.2555C54.872 48.9555 57.0306 45.7248 55.2984 43.3722C53.9057 41.4804 55.0216 38.7861 57.3439 38.4335C60.2322 37.9946 60.9904 34.1839 58.4896 32.6729C56.479 31.4581 56.479 28.5419 58.4896 27.3271C60.9904 25.8163 60.2323 22.0055 57.3439 21.5665C55.0215 21.2134 53.9056 18.5196 55.2984 16.6278C57.0306 14.2752 54.872 11.0445 52.0354 11.7445C49.7549 12.3075 47.6925 10.2452 48.2555 7.9646C48.9555 5.12795 45.7248 2.96938 43.3722 4.70164C41.4804 6.09426 38.7861 4.9784 38.4335 2.65612C37.9946 -0.23224 34.1839 -0.990422 32.6729 1.51038C31.4581 3.52095 28.5419 3.52095 27.3271 1.51038C25.8163 -0.990382 22.0055 -0.232333 21.5665 2.65612C21.2134 4.97848 18.5196 6.09439 16.6278 4.70164C14.2752 2.96938 11.0445 5.12803 11.7445 7.9646C12.3075 10.245 10.2452 12.3074 7.9646 11.7445C5.12795 11.0445 2.96938 14.2752 4.70164 16.6278C6.09426 18.5196 4.9784 21.2139 2.65612 21.5665C-0.232239 22.0054 -0.990423 25.8161 1.51038 27.3271C3.52095 28.5419 3.52095 31.4581 1.51038 32.6729Z" />
                                    </svg>
                                    <div class="content">
                                        Learn More
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 13 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H12M12 1V13M12 1L0.5 12" />
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow animate fadeInUp" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="single-service-card magnetic-item">
                        <div class="icon">
                        <img src="solutions/Intelligence.jpg">
                        </div>
                        <div class="services-content">
                            <h3><a href="service-details.html"> Artificial Intelligence (AI) and Smart
                                    Factories Solutions</a></h3>
                            <p>The World is Moving more and more to a technological vantage.
                                Industrial Revolution is slowly shifting from the old Industry 3.0 and the
                                current Industry 4.0 and the soon to come Industry 5.0 Revolution.
                                Advancements in Artificial Intelligence and Smart Technologies are
                                getting more and more into our industries and Factories. We are seeing
                                Robots taking over the production lines. We are also experiencing
                                technologies in breakdown reporting with highly advanced SCADA
                                Systems allowing real time running and maintenance of industrial
                                machines from anywhere around the world. As Automation Eye Limited,
                                we are at the lead in this to ensure that our partners have Solutions that
                                bring Industrial Revelation to their production floor. We provide software
                                solutions to ensure spare parts management in engineering stores,
                                Online SOP solutions, daily reports online tracking and remote support
                                to all our partners all around the world. Reach out to us today and let's
                                custom make a solution for you</p>
                            <div class="services-btn">
                                <a class="primary-btn5" href="service-details.html">
                                    <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.51038 32.6729C-0.990382 34.1837 -0.232333 37.9945 2.65612 38.4335C4.97848 38.7866 6.09439 41.4804 4.70164 43.3722C2.96938 45.7248 5.12803 48.9555 7.9646 48.2555C10.245 47.6925 12.3074 49.7548 11.7445 52.0354C11.0445 54.8721 14.2752 57.0306 16.6278 55.2984C18.5196 53.9057 21.2139 55.0216 21.5665 57.3439C22.0054 60.2322 25.8161 60.9904 27.3271 58.4896C28.5419 56.479 31.4581 56.479 32.6729 58.4896C34.1837 60.9904 37.9945 60.2323 38.4335 57.3439C38.7866 55.0215 41.4804 53.9056 43.3722 55.2984C45.7248 57.0306 48.9555 54.872 48.2555 52.0354C47.6925 49.755 49.7548 47.6925 52.0354 48.2555C54.872 48.9555 57.0306 45.7248 55.2984 43.3722C53.9057 41.4804 55.0216 38.7861 57.3439 38.4335C60.2322 37.9946 60.9904 34.1839 58.4896 32.6729C56.479 31.4581 56.479 28.5419 58.4896 27.3271C60.9904 25.8163 60.2323 22.0055 57.3439 21.5665C55.0215 21.2134 53.9056 18.5196 55.2984 16.6278C57.0306 14.2752 54.872 11.0445 52.0354 11.7445C49.7549 12.3075 47.6925 10.2452 48.2555 7.9646C48.9555 5.12795 45.7248 2.96938 43.3722 4.70164C41.4804 6.09426 38.7861 4.9784 38.4335 2.65612C37.9946 -0.23224 34.1839 -0.990422 32.6729 1.51038C31.4581 3.52095 28.5419 3.52095 27.3271 1.51038C25.8163 -0.990382 22.0055 -0.232333 21.5665 2.65612C21.2134 4.97848 18.5196 6.09439 16.6278 4.70164C14.2752 2.96938 11.0445 5.12803 11.7445 7.9646C12.3075 10.245 10.2452 12.3074 7.9646 11.7445C5.12795 11.0445 2.96938 14.2752 4.70164 16.6278C6.09426 18.5196 4.9784 21.2139 2.65612 21.5665C-0.232239 22.0054 -0.990423 25.8161 1.51038 27.3271C3.52095 28.5419 3.52095 31.4581 1.51038 32.6729Z" />
                                    </svg>
                                    <div class="content">
                                        Learn More
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 13 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H12M12 1V13M12 1L0.5 12" />
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow animate fadeInUp" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="single-service-card magnetic-item">
                        <div class="icon">
                        <img src="solutions/bms.jpg">
                        </div>
                        <div class="services-content">
                            <h3><a href="service-details.html">Building Management Systems
                                    (BMS), Access Control Solutions, Security
                                    Systems and Smart Homes Solutions</a></h3>
                            <p> Our Technological Solutions span to the field of
                                Building Management and Homes. We believe in
                                offering safe and secure solutions that help our
                                partners and stakeholders in their smart buildings and
                                Smart Homes. From limiting only the required
                                personnel to enter the requested places through
                                customised access control solutions, to automated
                                lifting solutions, to card access to hotel rooms and
                                residential houses, to safe automated parking solutions,
                                to entry recording solutions, Smart cameras and
                                integrated building Systems, we ensure that our
                                partner needs are met to their required standard. With
                                a global reach, providing solutions all around the world,
                                you can be sure that we will Bring ease to you. Reach
                                out to us and let us custom make this solution for you.</p>
                            <div class="services-btn">
                                <a class="primary-btn5" href="service-details.html">
                                    <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.51038 32.6729C-0.990382 34.1837 -0.232333 37.9945 2.65612 38.4335C4.97848 38.7866 6.09439 41.4804 4.70164 43.3722C2.96938 45.7248 5.12803 48.9555 7.9646 48.2555C10.245 47.6925 12.3074 49.7548 11.7445 52.0354C11.0445 54.8721 14.2752 57.0306 16.6278 55.2984C18.5196 53.9057 21.2139 55.0216 21.5665 57.3439C22.0054 60.2322 25.8161 60.9904 27.3271 58.4896C28.5419 56.479 31.4581 56.479 32.6729 58.4896C34.1837 60.9904 37.9945 60.2323 38.4335 57.3439C38.7866 55.0215 41.4804 53.9056 43.3722 55.2984C45.7248 57.0306 48.9555 54.872 48.2555 52.0354C47.6925 49.755 49.7548 47.6925 52.0354 48.2555C54.872 48.9555 57.0306 45.7248 55.2984 43.3722C53.9057 41.4804 55.0216 38.7861 57.3439 38.4335C60.2322 37.9946 60.9904 34.1839 58.4896 32.6729C56.479 31.4581 56.479 28.5419 58.4896 27.3271C60.9904 25.8163 60.2323 22.0055 57.3439 21.5665C55.0215 21.2134 53.9056 18.5196 55.2984 16.6278C57.0306 14.2752 54.872 11.0445 52.0354 11.7445C49.7549 12.3075 47.6925 10.2452 48.2555 7.9646C48.9555 5.12795 45.7248 2.96938 43.3722 4.70164C41.4804 6.09426 38.7861 4.9784 38.4335 2.65612C37.9946 -0.23224 34.1839 -0.990422 32.6729 1.51038C31.4581 3.52095 28.5419 3.52095 27.3271 1.51038C25.8163 -0.990382 22.0055 -0.232333 21.5665 2.65612C21.2134 4.97848 18.5196 6.09439 16.6278 4.70164C14.2752 2.96938 11.0445 5.12803 11.7445 7.9646C12.3075 10.245 10.2452 12.3074 7.9646 11.7445C5.12795 11.0445 2.96938 14.2752 4.70164 16.6278C6.09426 18.5196 4.9784 21.2139 2.65612 21.5665C-0.232239 22.0054 -0.990423 25.8161 1.51038 27.3271C3.52095 28.5419 3.52095 31.4581 1.51038 32.6729Z" />
                                    </svg>
                                    <div class="content">
                                        Learn More
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 13 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H12M12 1V13M12 1L0.5 12" />
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 justify-content-center">


                <div class="col-lg-4 col-md-6 col-sm-10 wow animate fadeInUp" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="single-service-card magnetic-item">
                        <div class="icon">
                        <img src="solutions/websites.jpg">
                        </div>
                        <div class="services-content">
                            <h3><a href="service-details.html">Websites and Apps Development</a></h3>
                            <p> Automation Eye Limited also offers
                                our partners customised solutions in
                                developing their websites and
                                applications. From concept
                                initialization, to UI/UX design and
                                development, then programming to
                                launch and deployment, we walk with
                                our partners through each step to
                                create a product that portrays our
                                partner in an excellent way, allowing
                                seamless integration between
                                customers and their clients in offering
                                their various solutions. Reach out to
                                us today and let's help you portray an
                                excellent vision to all your customers
                                and stakeholders.</p>
                            <div class="services-btn">
                                <a class="primary-btn5" href="service-details.html">
                                    <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.51038 32.6729C-0.990382 34.1837 -0.232333 37.9945 2.65612 38.4335C4.97848 38.7866 6.09439 41.4804 4.70164 43.3722C2.96938 45.7248 5.12803 48.9555 7.9646 48.2555C10.245 47.6925 12.3074 49.7548 11.7445 52.0354C11.0445 54.8721 14.2752 57.0306 16.6278 55.2984C18.5196 53.9057 21.2139 55.0216 21.5665 57.3439C22.0054 60.2322 25.8161 60.9904 27.3271 58.4896C28.5419 56.479 31.4581 56.479 32.6729 58.4896C34.1837 60.9904 37.9945 60.2323 38.4335 57.3439C38.7866 55.0215 41.4804 53.9056 43.3722 55.2984C45.7248 57.0306 48.9555 54.872 48.2555 52.0354C47.6925 49.755 49.7548 47.6925 52.0354 48.2555C54.872 48.9555 57.0306 45.7248 55.2984 43.3722C53.9057 41.4804 55.0216 38.7861 57.3439 38.4335C60.2322 37.9946 60.9904 34.1839 58.4896 32.6729C56.479 31.4581 56.479 28.5419 58.4896 27.3271C60.9904 25.8163 60.2323 22.0055 57.3439 21.5665C55.0215 21.2134 53.9056 18.5196 55.2984 16.6278C57.0306 14.2752 54.872 11.0445 52.0354 11.7445C49.7549 12.3075 47.6925 10.2452 48.2555 7.9646C48.9555 5.12795 45.7248 2.96938 43.3722 4.70164C41.4804 6.09426 38.7861 4.9784 38.4335 2.65612C37.9946 -0.23224 34.1839 -0.990422 32.6729 1.51038C31.4581 3.52095 28.5419 3.52095 27.3271 1.51038C25.8163 -0.990382 22.0055 -0.232333 21.5665 2.65612C21.2134 4.97848 18.5196 6.09439 16.6278 4.70164C14.2752 2.96938 11.0445 5.12803 11.7445 7.9646C12.3075 10.245 10.2452 12.3074 7.9646 11.7445C5.12795 11.0445 2.96938 14.2752 4.70164 16.6278C6.09426 18.5196 4.9784 21.2139 2.65612 21.5665C-0.232239 22.0054 -0.990423 25.8161 1.51038 27.3271C3.52095 28.5419 3.52095 31.4581 1.51038 32.6729Z" />
                                    </svg>
                                    <div class="content">
                                        Learn More
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 13 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H12M12 1V13M12 1L0.5 12" />
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <div class="row wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="view-btn">
                        <a class="primary-btn3" href="/services">View All Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    

    <div class="collaborate-section mb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="collaborate-wrapper">
                        <div class="section-title-5">
                            <span>LET’S COLLABORATE</span>
                            <h2>Ready to <br>
                                <span>work with us?</span>
                            </h2>
                            <div class="get-btn">
                                <a class="primary-btn3" href="/contact">Get a quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection