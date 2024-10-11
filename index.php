<!doctype html>
<html class="no-js" lang="en">


<head>
    <!-- Title and Discription start -->
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Welcome to Global Education4U</title>

    <meta name="description"
        content="Your one-stop destination for global study opportunities, offering expert guidance and resources to help you achieve your academic dreams abroad.">

    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 day">
    <meta name="language" content="English">
    <meta name="generator" content="N/A">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Pragma" content="no-cache" />
    <!-- Title and Discription close -->

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon-skillgro.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/default-icons.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/tg-cursor.css">
    <link rel="stylesheet" href="assets/css/main.css">


<!-- jQuery (required for Bootstrap JS) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>



    <!-- Header Pages -->
    <?php include 'header.php'; ?>
    <!-- Header Pages -->


    
<!-- Modal HTML -->
<div class="modal fade" id="modal-subscribe" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content shadow-lg rounded-3">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="myModalLabel">Enquiry Form</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-light p-4">
                <form method="post" action="backend">
                    <input type="hidden" name="dzToDo" value="Contact">
                    <div class="row">
                        <!-- Child's Name -->
                        <div class="mb-3 col-md-12">
                            <label for="childName" class="form-label">Full Name</label>
                            <input name="name" id="childName" type="text" class="form-control" required placeholder="Enter your name">
                        </div>
                       
                        <!-- Phone Number -->
                        <div class="mb-3 col-md-12">
                            <label for="dzPhone" class="form-label">Phone Number</label>
                            <input name="phone" id="dzPhone" type="text" class="form-control" required placeholder="Enter your phone number">
                        </div>

                        <!-- Message's Name -->
                        <div class="mb-3 col-md-12">
                            <label for="childName" class="form-label">Message</label>
                            <input name="message" id="childName" type="text" class="form-control" required placeholder="Message">
                        </div>
                       
                    </div>
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#modal-subscribe').modal('show');
        }, 500);
    });
</script>

    <!-- main-area -->
    <main class="main-area fix">


        <div id="carouselExampleInterval" class="carousel slide desktop101" data-bs-ride="carousel" data-bs-pause="hover">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="assets/img/home/banner/banner-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/img/home/banner/banner-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/img/home/banner/banner-3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/img/home/banner/banner-4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/img/home/banner/banner-5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/img/home/banner/banner-6.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



        <div id="carouselExampleInterval1" class="carousel slide mobile102" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="assets/img/home/banner/mobile-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/img/home/banner/mobile-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/img/home/banner/mobile-3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/img/home/banner/mobile-4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/img/home/banner/mobile-5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/img/home/banner/mobile-6.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- header section close-->

        <!-- about-area -->
        <section class="about-area-three section-py-120 padding-top padding-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-9">
                        <div class="tg-svg">
                            <img src="assets/img/home/home-page.png" alt="img">
                            <span class="svg-icon" id="about-svg" data-svg-icon="assets/img/others/inner_about_shape.svg"></span>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-three">
                            <div class="section__title mb-10">

                                <h2 class="title">
                                    Transform Your
                                    <span class="position-relative">
                                        <svg x="0px" y="0px" preserveAspectRatio="none" viewBox="0 0 209 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.74438 7.70565C69.7006 -1.18799 136.097 -2.38304 203.934 4.1205C207.178 4.48495 209.422 7.14626 208.933 10.0534C206.793 23.6481 205.415 36.5704 204.801 48.8204C204.756 51.3291 202.246 53.5582 199.213 53.7955C136.093 59.7623 74.1922 60.5985 13.5091 56.3043C10.5653 56.0924 7.84371 53.7277 7.42158 51.0325C5.20725 38.2627 2.76333 25.6511 0.0898448 13.1978C-0.465589 10.5873 1.61173 8.1379 4.73327 7.70565" fill="currentcolor" />
                                        </svg>
                                        Future
                                    </span>
                                    with Global Overseas education
                                </h2>
                            </div>
                            <p> Looking to study abroad?  Studying abroad is a transformative journey that opens doors to
                                world-class education, new skills, and a global mindset. 
                                It’s your chance to enhance your employability and explore the world through an international
                                lens.</p>
                            <p class="desc">Let Global Overseas education help you with end-to-end solutions for your international education
                                journey. 
                                We’re a solution-oriented company dedicated to crafting personalized career paths that fit your
                                unique educational, financial, and personal needs. 
                                Let us help you navigate your overseas education journey with tailored solutions just for you!</p>
                            <ul class="about__info-list list-wrap">
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Your Global Education, Our Expertise.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Study Globally, Succeed Anywhere.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Your Future, Our Priority.</p>
                                </li>
                            </ul>
                            <div class="tg-button-wrap">
                                <a href="contact-us.php" class="btn arrow-btn">Start Free Trial <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- courses-details-area -->
        <section class="courses__details-area padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="courses__details-content">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
                                    <div class="courses__overview-wrap">
                                        <h3 class="title">Global Overseas Education: Opening Doors to International Learning in Mumbai</h3>

                                        <h3 class="title">1. Introduction</h3>
                                        <p>
                                            <span class="color-black">In an era of globalized learning,</span> Mumbai stands at the forefront, with students from the city seeking education in world-class institutions. Global Overseas Education, with its vast network of over 800+ universities worldwide, is playing a key role in helping students turn their international education dreams into reality.
                                        </p>

                                        <h3 class="title">2. Overview of Global Overseas Education</h3>
                                        <p>
                                            <span class="color-black">Company Background:</span> Established with the mission to guide students towards achieving their international education goals, Global Overseas Education has become a trusted name in the field.
                                        </p>
                                        <p>
                                            <span class="color-black">University Partnerships:</span> With partnerships spanning over 800+ universities globally, including prestigious institutions in popular study destinations like the USA, UK, Canada, and Australia, Global Overseas Education opens doors to a myriad of academic opportunities.
                                        </p>
                                        <p>
                                            <span class="color-black">Role in Mumbai:</span> Serving as a vital bridge between Mumbai's students and global universities, Global Overseas Education provides the necessary support and guidance for students embarking on their overseas education journey.
                                        </p>

                                        <h3 class="title">3. Services Offered</h3>
                                        <p>
                                            <span class="color-black">Counseling and Guidance:</span> Global Overseas Education offers personalized career counseling to help students identify the right universities and courses that align with their aspirations.
                                        </p>
                                        <p>
                                            <span class="color-black">Application Assistance:</span> The consultancy provides comprehensive application support, including documentation and visa process guidance, ensuring a smooth application experience for students.
                                        </p>
                                        <p>
                                            <span class="color-black">Test Preparation:</span> Students can benefit from preparatory courses for standardized tests like IELTS and TOEFL, crucial for their admission into international institutions.
                                        </p>

                                        <h3 class="title">4. Mumbai as an Education Hub</h3>
                                        <p>
                                            <span class="color-black">Education Aspirations in Mumbai:</span> As aspirations for global education grow, students in Mumbai increasingly seek opportunities across diverse fields, from business and technology to the arts and sciences.
                                        </p>
                                        <p>
                                            <span class="color-black">Why Overseas Education is Popular:</span> Various factors drive this trend, including better job prospects, access to high-quality education, cultural exposure, and abundant research opportunities.
                                        </p>

                                        <h3 class="title">5. Global Reach</h3>
                                        <p>
                                            <span class="color-black">Countries Covered:</span> Global Overseas Education successfully places students in renowned institutions across multiple regions, including the USA, UK, Australia, Germany, and more.
                                        </p>
                                        <p>
                                            <span class="color-black">Specialized Programs:</span> The consultancy also offers specialized services such as scholarships, internships, and exchange programs to enhance the educational experience for students.
                                        </p>

                                        <h3 class="title">6. Testimonials & Success Stories</h3>
                                        <p>
                                            <span class="color-black">Student Successes:</span> Many students from Mumbai have successfully secured admissions through Global Overseas Education, with unique achievements highlighting the consultancy's effectiveness.
                                        </p>
                                        <p>
                                            <span class="color-black">Industry Recognition:</span> Global Overseas Education has received numerous awards and recognitions for its outstanding services in facilitating overseas education.
                                        </p>

                                        <h3 class="title">7. Challenges and Future Prospects</h3>
                                        <p>
                                            <span class="color-black">Challenges in Overseas Education:</span> Common challenges faced by students in Mumbai include understanding application processes and navigating visa requirements. Global Overseas Education provides invaluable assistance in overcoming these hurdles.
                                        </p>
                                        <p>
                                            <span class="color-black">Future Growth:</span> The consultancy is committed to expanding its services and adapting to future trends in global education to continue providing exceptional support to students.
                                        </p>

                                        <h3 class="title">8. Conclusion</h3>
                                        <p>
                                            <span class="color-black">Conclusion:</span> Global Overseas Education plays a pivotal role in shaping the future of Mumbai’s students by providing access to world-class educational institutions. For students and parents considering overseas study plans, consulting Global Overseas Education is a vital step toward achieving those dreams.
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- courses-details-area-end -->

        <!-- features-area -->
        <section class="features__area-three section-pt-120 section-pb-90 padding-top padding-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-8">
                        <div class="section__title text-center mb-40">
                            <h2 class="title">What We Offer</h2>
                            <p>Discover Our Comprehensive Study Abroad Solutions</p>
                        </div>
                    </div>
                </div>
                <div class="features__item-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">
                                            <img src="assets/img/icons/h2_features_icon01.svg" alt="img" class="injectable">
                                        </div>
                                        <h2 class="title">Language Training</h2>
                                    </div>
                                    <p>Master a new language and unlock global opportunities!</p>
                                </div>
                                <div class="features__item-shape">
                                    <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">
                                            <img src="assets/img/icons/h2_features_icon02.svg" alt="img" class="injectable">
                                        </div>
                                        <h2 class="title">Test Preparation</h2>
                                    </div>
                                    <p>Prepare for success—ace your exams and study abroad!</p>
                                </div>
                                <div class="features__item-shape">
                                    <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">
                                            <img src="assets/img/icons/h2_features_icon03.svg" alt="img" class="injectable">
                                        </div>
                                        <h2 class="title">Study Abroad</h2>
                                    </div>
                                    <p>Embark on a transformative journey—study abroad and broaden your horizons!</p>
                                </div>
                                <div class="features__item-shape">
                                    <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- categories-area -->
        <section class="categories-area padding-bottom padding-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-7 edit-col-lg-6">
                        <div class="section__title text-center mb-40">
                            <span class="sub-title">Trending Categories</span>
                            <h2 class="title">Explore Educational Opportunities Across the Globe</h2>
                            <p class="desc">We connect students with world-class education in 33+ countries, giving you access to some of the best universities and courses internationally. Whether you're looking to study in the USA, Canada, UK, or any of the major education destinations, we have you covered.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="categories__wrap">
                            <div class="swiper categories-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="study-usa.php">
                                                <div class="icon">
                                                    <img src="assets/img/flags/american.png" class="img-radius" alt="">
                                                </div>
                                                <span class="name">USA</span>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="study-australia.php">
                                                <div class="icon">
                                                    <img src="assets/img/flags/australia.png" class="img-radius" alt="">
                                                </div>
                                                <span class="name">Australia</span>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="study-canada.php">
                                                <div class="icon">
                                                    <img src="assets/img/flags/canada.png" class="img-radius" alt="">
                                                </div>
                                                <span class="name">Canada</span>

                                            </a>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="germany.php">
                                                <div class="icon">
                                                    <img src="assets/img/flags/german.png" class="img-radius" alt="">
                                                </div>
                                                <span class="name">Germany</span>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="study-ireland.php">
                                                <div class="icon">
                                                    <img src="assets/img/flags/ireland.png" class="img-radius" alt="">
                                                </div>
                                                <span class="name">Ireland</span>

                                            </a>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="study-uk.php">
                                                <div class="icon">
                                                    <img src="assets/img/flags/uk.png" class="img-radius" alt="">
                                                </div>
                                                <span class="name">UK</span>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="study-newzealand.php">
                                                <div class="icon">
                                                    <img src="assets/img/flags/zealand.png" class="img-radius" alt="">
                                                </div>
                                                <span class="name">Zealand</span>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="categories__nav">
                                <button class="categories-button-prev">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 7L1 7M1 7L7 1M1 7L7 13" stroke="#161439" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <button class="categories-button-next">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="#161439" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- categories-area-end -->


        <!-- course-area -->
        <section class="courses-area section-pt-120 section-pb-90 padding-top padding-bottom" data-background="assets/img/bg/courses_bg.jpg">
            <div class="container">
                <div class="section__title-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 edit-col-lg-6">
                            <div class="section__title text-center">
                                <span class="sub-title">1100 Universities</span>
                                <h2 class="title">Explore Our World's Best Courses</h2>
                                <p class="desc">Choose from over 1,100 renowned universities worldwide, ranging from Ivy League institutions to globally recognized universities in every field of study.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-content" id="courseTabContent">
                    <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                        <div class="swiper courses-swiper-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="contact-us.php" class="shine__animate-link">
                                                <img src="assets/img/unversity/Australian-National-University-ANU.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="contact-us.php">Australia</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="contact-us.php">Australian National University ANU</a></h5>

                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="contact-us.php">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="contact-us.php" class="shine__animate-link">
                                                <img src="assets/img/unversity/University-of-Melbourne-Australia.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="contact-us.php">Australia</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="contact-us.php">University of Melbourne Australia</a></h5>

                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="contact-us.php">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="contact-us.php" class="shine__animate-link">
                                                <img src="assets/img/unversity/California-Institute-of-Technology-Caltech-USA.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="contact-us.php">USA</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.3 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="contact-us.php">California Institute of Technology Caltech USA</a></h5>

                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="contact-us.php">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="contact-us.php" class="shine__animate-link">
                                                <img src="assets/img/unversity/harvard-university-usa.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="contact-us.php">USA</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="contact-us.php">Unversity harvard university usa</a></h5>

                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="contact-us.php">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="contact-us.php" class="shine__animate-link">
                                                <img src="assets/img/unversity/Massachusetts-Institute-of-Technology-MIT-USA.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="contact-us.php">USA</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="contact-us.php">Massachusetts Institute of Technology MIT USA</a></h5>

                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="contact-us.php">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="contact-us.phpl" class="shine__animate-link">
                                                <img src="assets/img/unversity/Stanford-University-USA.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="contact-us.php">USA</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.7 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="contact-us.php">Stanford University USA</a></h5>

                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="contact-us.php">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="contact-us.php" class="shine__animate-link">
                                                <img src="assets/img/unversity/University-of-Cambridge-uk.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="contact-us.php">UK</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.3 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="contact-us.php">University of Cambridge uk</a></h5>

                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="contact-us.php">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="contact-us.php" class="shine__animate-link">
                                                <img src="assets/img/unversity/University-of-Oxford-uk.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="contact-us.php">UK</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="contact-us.php">University of Oxford uk</a></h5>

                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="contact-us.php">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="contact-us.php" class="shine__animate-link">
                                                <img src="assets/img/unversity/University-of-Toronto-0Canada.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="contact-us.php">Cadana</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="contact-us.php">University of Toronto Canada</a></h5>

                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="contact-us.php">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="contact-us.php" class="shine__animate-link">
                                                <img src="assets/img/unversity/ETH-Zurich-Switzerland.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="contact-us.php">Switzerland</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="contact-us.php">ETH Zurich Switzerland</a></h5>

                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="contact-us.php">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses__nav">
                            <div class="courses-button-prev"><i class="flaticon-arrow-right"></i></div>
                            <div class="courses-button-next"><i class="flaticon-arrow-right"></i></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- course-area-end -->

        <!-- fact-area -->
        <section class="fact__area">
            <div class="container">
                <div class="fact__inner-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="fact__item">
                                <h2 class="count"><span class="odometer" data-count="15"></span>+</h2>
                                <p>YEARS OF SUCCESSFUL</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="fact__item">
                                <h2 class="count"><span class="odometer" data-count="15"></span>+</h2>
                                <p>EXPERIENCED IELTS TUTORS</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="fact__item">
                                <h2 class="count"><span class="odometer" data-count="15"></span>+</h2>
                                <p>FREE MOCK TESTS & PRACTICE SESSIONS</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="fact__item">
                                <h2 class="count"><span class="odometer" data-count="15"></span>+</h2>
                                <p>Award Achieved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- faq-area -->
        <section class="faq__area padding-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq__img-wrap tg-svg">
                            <div class="faq__round-text">
                                <div class="curved-circle">
                                    * Education * System * can * Make * Change *
                                </div>
                            </div>
                            <div class="faq__img">
                                <img src="assets/img/home/home-page-2.png" alt="img">
                                <div class="shape-one">
                                    <img src="assets/img/others/faq_shape01.svg" class="injectable tg-motion-effects4" alt="img">
                                </div>
                                <div class="shape-two">
                                    <span class="svg-icon" id="faq-svg" data-svg-icon="assets/img/others/faq_shape02.svg"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq__content">
                            <div class="section__title pb-10">
                                <span class="sub-title">Faq’s</span>
                                <h2 class="title">Start Learning From <br> World’s Pro Instructors</h2>
                            </div>
                            <p>Find concise answers to common questions about our services and study abroad process.</p>
                            <div class="faq__wrap">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                What services do you offer?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>We provide guidance on country and course selection, admission assistance, documentation support, language coaching, visa preparation, bank loan help, and accommodation finding.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                How do you help with choosing a country?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>We offer personalized advice based on your preferences and goals to help you select the best country for your studies.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                What assistance do you provide for courses and universities?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>We guide you through course and university options and help you make informed decisions.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                How do you assist with admission and documentation?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>We help with university applications and ensure all documentation is correctly completed.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-area-end -->


    </main>
    <!-- main-area-end -->


    <!-- Footer Pages -->
    <?php include 'footer.php'; ?>
    <!-- Footer Pages -->