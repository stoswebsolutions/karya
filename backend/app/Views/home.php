<?= $this->extend("layouts/app") ?>
<?= $this->section("body") ?>
<?php
if (isset($css) && $css != NULL) {
    foreach ($css as $cs) {
        echo '<link href="' . $cs . '" rel="stylesheet" type="text/css" />';
    }
} ?>
<div class="karya-container">
    <section class="karya-section carousel-section">
        <div id="carouselIndicators" class="carousel slide h-100" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="me-2 active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner h-100">
                <div class="carousel-item active carousel-talent h-100" data-bs-interval="5000">
                    <nav class="w-100 d-flex align-items-center justify-content-between karya-px">
                        <img src="<?= site_url() ?>app-assets/images/logo_pathafinder.png" alt="logo" class="brand" />
                        <ul class="m-0 p-0">
                            <li class="">
                                <a href="<?= site_url() ?>hired"> Get Hired </a>
                            </li>
                            <li class="ms-4">
                                <a href="<?= site_url() ?>talent"> Get Talent </a>
                            </li>
                            <li class="ms-4">
                                <a href="<?= site_url() ?>price"> Pricing Plans </a>
                            </li>
                            <li class="ms-4">
                                <a href="<?= site_url() ?>home"> Join </a>
                            </li>
                        </ul>
                        <i class="fa fa-bars menu-icon" aria-hidden="true" data-bs-toggle="offcanvas" href="#offcanvasMenu" aria-controls="offcanvasMenu"></i>
                    </nav>
                    <div class="headers w-100 karya-px">
                        <h1 class="font-kai text-white mb-md-2 mb-lg-3">
                            Where passion meets purpose
                        </h1>
                        <h4 class="font-cd pri-clr fw-600">
                            Connecting extraordinary talents with inspiring companies.
                        </h4>
                    </div>
                    <div class="talent-card">
                        <h6 class="font-kai text-white mb-0"><a href="<?= site_url() ?>talent" class="text-white" style="text-decoration: none;"># Get Talent</a></h6>
                    </div>
                </div>
                <div class="carousel-item carousel-hired h-100" data-bs-interval="5000">
                    <nav class="w-100 d-flex align-items-center justify-content-between karya-px">
                        <img src="<?= site_url() ?>app-assets/images/logo_pathafinder.png" alt="logo" class="brand" />
                        <ul class="m-0 p-0">
                            <li class="">
                                <a href="<?= site_url() ?>hired"> Get Hired </a>
                            </li>
                            <li class="ms-4">
                                <a href="<?= site_url() ?>talent"> Get Talent </a>
                            </li>
                            <li class="ms-4">
                                <a href="<?= site_url() ?>price"> Pricing Plans </a>
                            </li>
                            <li class="ms-4">
                                <a href="<?= site_url() ?>home"> Join </a>
                            </li>
                        </ul>
                        <i class="fa fa-bars menu-icon" aria-hidden="true" data-bs-toggle="offcanvas" href="#offcanvasMenu" aria-controls="offcanvasMenu"></i>
                    </nav>
                    <div class="headers w-100 karya-px">
                        <h1 class="font-kai pri-clr mb-md-2 mb-lg-3">
                            Unlocking hidden talent
                        </h1>
                        <div class="d-flex">
                            <h4 class="font-cd pri-clr fw-600">
                                Empowering you to achieve your potential while earning
                                passive income.
                            </h4>
                            <img src="<?= site_url() ?>app-assets/images/hero-image-02.png" alt="woman" />
                        </div>
                    </div>
                    <div class="hired-card">
                        <h6 class="font-kai text-white mb-0"><a href="<?= site_url() ?>hired" class="text-white" style="text-decoration: none;"># Get Hired</a></h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas menu -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasMenuLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="m-0 p-0">
                    <li class="">
                        <a href="<?= site_url() ?>hired"> Get Hired </a>
                    </li>
                    <li class="">
                        <a href="<?= site_url() ?>talent"> Get Talent </a>
                    </li>
                    <li class="">
                        <a href="<?= site_url() ?>price"> Pricing Plans </a>
                    </li>
                    <li class="">
                        <a href="<?= site_url() ?>home"> Join </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ends::offcanvas menu -->
    </section>
    <!-- <section class="karya-section hired-talent-form-section" id="hired-talent-form-section">
        <div class="row h-100 gx-0">
            <div class="col-12 col-md-6">
                <div class="hired-sub-section sec-bg h-100 position-relative">
                    <div class="karya-px content">
                        <h1 class="font-kai text-white title">Get Hired</h1>
                        <h6 class="pri-clr details">
                            With our insights, we can assist you in finding the ideal
                            position that matches your personality, skills and career
                            aspirations. Our tool will assist you in providing that
                            perfect pitch for your interview.
                        </h6>
                        <form class="" id="hiredform" action="<?= base_url('hiredLogin') ?>" method="post">
                            <?= csrf_field(); ?>
                            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                            <?php elseif (!empty(session()->getFlashdata('success'))) : ?>
                                <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                            <?php endif ?>
                            <div class="mb-3">
                                <label for="email" class="form-label text-uppercase text-white">
                                    Email
                                </label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>" aria-describedby="email" placeholder="Enter Registered Email" />
                                <div class="text-danger"><?= !empty(session()->getFlashdata('validation')) ? error(session()->getFlashdata('validation'), 'email') : '' ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label text-uppercase text-white">
                                    Password
                                </label>
                                <input type="password" class="form-control" id="password" name="password" value="<?= set_value('password') ?>" aria-describedby="password" placeholder="Enter Password" />
                                <div class="text-danger"><?= !empty(session()->getFlashdata('validation')) ? error(session()->getFlashdata('validation'), 'password') : '' ?></div>
                            </div>
                            <button type="submit" class="btn karya-btn pri-bg text-white submit-btn">
                                Sign In
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="talent-sub-section pri-bg h-100 position-relative">
                    <div class="karya-px content">
                        <h1 class="font-kai text-white title">Get Talent</h1>
                        <h6 class="pri-clr details">
                            With the right partner by your side, finding the right talent
                            for your organisation is not a complex task. Our tool will
                            connect you with outstanding candidates who can materialise
                            your projects and plans.
                        </h6>
                        <form class="" id="talentform" action="<?= base_url('talentLogin') ?>" method="post">
                            <?= csrf_field(); ?>
                            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                            <?php elseif (!empty(session()->getFlashdata('success'))) : ?>
                                <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                            <?php endif ?>
                            <div class="mb-3">
                                <label for="email" class="form-label text-uppercase text-white">
                                    Email
                                </label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>" aria-describedby="careerRole" placeholder="Email Address" />
                                <div class="text-danger"><?= !empty(session()->getFlashdata('validation')) ? error(session()->getFlashdata('validation'), 'email') : '' ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label text-uppercase text-white">
                                    Password
                                </label>
                                <input type="password" class="form-control" id="password" name="password" value="<?= set_value('password') ?>" aria-describedby="location" placeholder="Password" />
                                <div class="text-danger"><?= !empty(session()->getFlashdata('validation')) ? error(session()->getFlashdata('validation'), 'password') : '' ?></div>
                            </div>
                            <button type="submit" class="btn karya-btn sec-bg text-white submit-btn">
                                Sign In
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="karya-section about-section pri-bg">
        <div class="container">
            <div class="row h-100 gx-0">
                <div class="col-12 col-md-6">
                    <div class="etymology-sub-section pri-bg h-100 karya-py">
                        <div class="etymology-dets mb-4 mb-md-5">
                            <h6 class="yellow-clr">Etymology</h6>
                            <h6 class="text-white d-flex flex-column points">
                                <span> From Malay; (karya), </span>
                                <span> From Old Malay; (karyya), </span>
                                <span> From Sanskrit; (karya). </span>
                            </h6>
                        </div>
                        <div class="pronunciation-dets">
                            <h6 class="yellow-clr">Pronunciation</h6>
                            <h6 class="text-white points">
                                IPA (key): Karia, karja, kariya.
                            </h6>
                        </div>
                        <div class="noun-dets">
                            <h6 class="text-white points">Noun</h6>
                            <ul class="p-0 m-0 text-white">
                                <li>Work, product; the result of effort.</li>
                                <li>A literary, artistic, or intellectual production.</li>
                                <li>Outcome of a particular action.</li>
                                <li>To perform deeds.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-sub-section pri-bg h-100 karya-py">
                        <h6 class="text-white mb-4 mb-md-5 points">
                            <span class="sec-clr">Karya.asia</span> is a talent marketplace
                            platform that transcends the boundaries of artificial
                            intelligence, science, and art to connect job seekers with
                            employers.
                        </h6>
                        <h6 class="text-white points ">
                            Our mission is to revolutionise the way talent is discovered and
                            matched with the best opportunities. By harnessing the power of
                            Al in the GPT model and data-driven insights through personality
                            profiling and people skills evaluation, we assist individuals to
                            unlock their full potential in their careers and enable
                            organisations to build teams that are truly aligned with their
                            values and vision.
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="karya-section what-section bg-white">
        <div class="row h-100 gx-0">
            <div class="col-12 col-md-6">
                <div class="what-sub-section h-100 karya-py">
                    <h1 class="font-kai pri-clr mb-2 mb-md-3 mb-lg-4">What we do</h1>
                    <h6 class="">Revolutionising the recruitment experience!</h6>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="video-sub-section h-100 karya-py">
                    <video controls poster="<?= site_url() ?>app-assets/images/poster.jpg" class="w-100 hoverable">
                        <source src="<?= site_url() ?>app-assets/images/video.mp4" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>
    <section class="karya-section job-section yellow-bg">
        <div class="row gx-0">
            <h1 class="font-kai pri-clr karya-p mb-0 section-title">Jobseeker</h1>
            <div class="col-12 col-md-4">
                <div class="info-card discover-card">
                    <div class="circle-icon">
                        <div class="minus-icon"></div>
                    </div>
                    <h1 class="font-kai sec-clr">Discover your strengths</h1>
                    <h6 class="">
                        Using personality profiling, jobseekers are able to discover
                        their strengths and unique abilities and showcase them to
                        potential employers.
                    </h6>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="info-card guided-card">
                    <div class="circle-icon">
                        <div class="minus-icon"></div>
                    </div>
                    <h1 class="font-kai sec-clr">Guided Interview Preparation</h1>
                    <h6 class="">
                        Take advantage of the preparation tools to thoroughly prepare
                        for an interview to be able to make a strong impression on
                        potential employers.
                    </h6>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="info-card connect-card">
                    <div class="circle-icon">
                        <div class="minus-icon"></div>
                    </div>
                    <h1 class="font-kai sec-clr">Connect with Employers</h1>
                    <h6 class="">
                        Personalised job match based on your strengths and skills, and
                        connect & communicate seamlessly with potential employers
                        anytime and anywhere.
                    </h6>
                </div>
            </div>
        </div>
    </section>
    <section class="karya-section job-steps-section bg-white h-100 d-flex align-items-center">
        <div class="row gx-0">
            <div class="col-12 col-md-4">
                <div class="stepper-card d-flex align-items-center h-100 strengths-card karya-py">
                    <div class="step d-flex align-items-center h-100">
                        <h1 class="mb-0">1</h1>
                    </div>
                    <div class="details">
                        <h1 class="title">Discover Strengths</h1>
                        <h6 class="about mb-0">
                            Register and complete an assessment to discover your strengths
                            and unique qualities.
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="stepper-card d-flex align-items-center h-100 showcase-card karya-py">
                    <div class="step d-flex align-items-center h-100">
                        <h1 class="mb-0">2</h1>
                    </div>
                    <div class="details">
                        <h1 class="title">Showcase Yourself</h1>
                        <h6 class="about mb-0">
                            Upload your resume, indulge in our guided interview
                            preparation and generate a video pitch.
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="stepper-card d-flex align-items-center h-100 explore-card karya-py">
                    <div class="step d-flex align-items-center h-100">
                        <h1 class="mb-0">3</h1>
                    </div>
                    <div class="details">
                        <h1 class="title">Explore Jobs Posts</h1>
                        <h6 class="about mb-0">
                            Respond through customised video pitches and connect with
                            employers via text, voice and video calls.
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="higlighted-line pri-bg karya-p">
                    <h6 class="mb-0 yellow-clr">
                        “Discover your strengths, project your potential, and land your
                        dream job!”
                    </h6>
                </div>
            </div>
        </div>
    </section>
    <section class="karya-section employer-section pri-bg">
        <div class="row gx-0">
            <h1 class="font-kai yellow-clr karya-p mb-0 section-title">
                Employer
            </h1>
            <div class="col-12 col-md-4">
                <div class="info-card understanding-card">
                    <div class="circle-icon">
                        <div class="minus-icon"></div>
                    </div>
                    <h1 class="font-kai sec-clr">Understanding Your Needs</h1>
                    <h6 class="">
                        Using Al, we analyse your exact needs and generate the necessary
                        details for your job posting and talent match.
                    </h6>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="info-card talent-card">
                    <div class="circle-icon">
                        <div class="minus-icon"></div>
                    </div>
                    <h1 class="font-kai sec-clr">Talent Match and Recommendations</h1>
                    <h6 class="pri-clr">
                        Using Al, we will match the best talents suitable for the vacant
                        role and suggest other possible roles where they could excel.
                    </h6>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="info-card save-card">
                    <div class="circle-icon">
                        <div class="minus-icon"></div>
                    </div>
                    <h1 class="font-kai sec-clr">Save Time and Money</h1>
                    <h6 class="pri-clr">
                        View snapshot details of suitable talents prior to making
                        payment and thereafter are able to seamlessly connect to them.
                    </h6>
                </div>
            </div>
        </div>
    </section>
    <section class="karya-section employer-steps-section bg-white h-100 d-flex align-items-center">
        <div class="row gx-0">
            <div class="col-12 col-md-4">
                <div class="stepper-card d-flex align-items-center h-100 onboard-card karya-py">
                    <div class="step d-flex align-items-center h-100">
                        <h1 class="mb-0">1</h1>
                    </div>
                    <div class="details">
                        <h1 class="title">Get Onboard</h1>
                        <h6 class="about mb-0">
                            Register and tell us about yourself and we will analyse your
                            needs.
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="stepper-card d-flex align-items-center h-100 discover-card karya-py">
                    <div class="step d-flex align-items-center h-100">
                        <h1 class="mb-0">2</h1>
                    </div>
                    <div class="details">
                        <h1 class="title">Discover Talents</h1>
                        <h6 class="about mb-0">
                            We will match the most suitable talents and other possible
                            roles they can contribute to you.
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="stepper-card d-flex align-items-center h-100 discover-card2 karya-py">
                    <div class="step d-flex align-items-center h-100">
                        <h1 class="mb-0">3</h1>
                    </div>
                    <div class="details">
                        <h1 class="title">Discover Talents</h1>
                        <h6 class="about mb-0">
                            View talents before making any payments and communicate
                            seamlessly thereafter.
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="higlighted-line pri-bg karya-p">
                    <h6 class="mb-0 yellow-clr">
                        “Our Al technology does the heavy lifting so you can focus on
                        selecting the best.”
                    </h6>
                </div>
            </div>
        </div>
    </section>
    <section class="karya-section contact-section sec-bg">
        <div class="row gx-0">
            <div class="col-12 col-md-6">
                <div class="contact-message karya-py h-100 d-flex flex-column justify-content-center">
                    <h1 class="title yellow-clr mb-2 mb-sm-3 mb-lg-4">
                        Let us contact you
                    </h1>
                    <h6 class="message pri-clr">
                        Our clients are at the center of everything we do, and they are
                        of utmost importance to us. We strive to understand our client's
                        needs and provide them with the highest quality of service,
                        tailored to their unique requirements. We believe in building
                        strong, long-lasting relationships with our clients, based on
                        trust, integrity, and open communication.
                    </h6>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="contact-form karya-py h-100 d-flex flex-column justify-content-center">
                    <form action="">
                        <div class="row gx-0 gx-sm-5">
                            <div class="col-12 col-sm-6">
                                <div class="mb-3">
                                    <label for="first-name" class="form-label text-uppercase fw-600 pri-clr">
                                        first name
                                    </label>
                                    <input type="text" class="form-control" id="first-name" aria-describedby="firstName" placeholder="Enter First Name" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-3">
                                    <label for="last-name" class="form-label text-uppercase fw-600 pri-clr">
                                        last name
                                    </label>
                                    <input type="text" class="form-control" id="last-name" aria-describedby="lastName" placeholder="Enter City" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-3">
                                    <label for="category" class="form-label text-uppercase fw-600 pri-clr">
                                        category
                                    </label>
                                    <input type="text" class="form-control" id="category" aria-describedby="category" placeholder="Enter Job Seeker or Employer" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label text-uppercase fw-600 pri-clr">
                                        phone
                                    </label>
                                    <input type="number" class="form-control" id="phone" aria-describedby="phone" placeholder="Enter Mobile Number" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label text-uppercase fw-600 pri-clr">
                                        email
                                    </label>
                                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter Email" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-3">
                                    <label for="location" class="form-label text-uppercase fw-600 pri-clr">
                                        location
                                    </label>
                                    <input type="text" class="form-control" id="location" aria-describedby="location" placeholder="Enter Location" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="message" class="form-label text-uppercase fw-600 pri-clr">
                                        message
                                    </label>
                                    <input type="text" class="form-control" id="message" aria-describedby="message" placeholder="Write Message" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-check privacy-check">
                                    <input class="form-check-input" type="checkbox" id="terms-check" />
                                    <label class="form-check-label fw-500" for="terms-check">
                                        I Accept the Privacy Policy
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 d-flex justify-content-end">
                                <button type="submit" class="btn karya-btn yellow-bg pri-clr submit-btn fw-600">
                                    SUBMIT
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12">
                <div class="links-address pri-bg karya-px">
                    <div class="row">
                        <div class="col-12 col-sm-5">
                            <div class="abt-karya">
                                <img src="<?= site_url() ?>app-assets/images/logo_pathafinder.png" alt="logo" class="logo" />
                                <p class="lite-white msg-txt">
                                    Karya is a talent marketplace platform that transcends the
                                    boundaries of artificial intelligence, science, and art to
                                    connect job seekers with employers.
                                </p>
                                <a href="#" class="lite-white anchor-link">www.karya.asia</a>
                            </div>
                        </div>
                        <div class="col-1 d-none-mobile"></div>
                        <div class="col-6 col-sm-3">
                            <div class="links">
                                <h6 class="yellow-clr">QUICK LINKS</h6>
                                <ul class="p-0 m-0">
                                    <li>
                                        <a href="#" class="lite-white anchor-link">Employer Login</a>
                                    </li>
                                    <li>
                                        <a href="#" class="lite-white anchor-link">Job Seeker Login</a>
                                    </li>
                                    <li>
                                        <a href="#" class="lite-white anchor-link">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="#" class="lite-white anchor-link">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#" class="lite-white anchor-link">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="contact">
                                <h6 class="yellow-clr">CONTACT</h6>
                                <p class="lite-white">
                                    Karya Asia Sdn Bhd 10 Jalan BRP 3/3, Sunway Rahman Putra,
                                    Seksyen U20, Shah Alam, 40160 Selangor. Malaysia.
                                </p>
                                <p class="lite-white mb-0">
                                    Email: <span>info@karya.asia</span>
                                </p>
                                <p class="lite-white">Phone: <span>+603 6150 1255</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>