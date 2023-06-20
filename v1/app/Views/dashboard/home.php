<?= $this->extend("layouts/dashboard") ?>
<?= $this->section("body") ?>
<!-- dashboard tab -->
<div class="data dashboard-data">
    <h5 class="black-clr fw-600 info">
        Welcome! We are thrilled that you have decided to take the first
        step towards finding your dream job. Karya is designed to connect
        you with the right employers and opportunities that match your
        strengths, skills and experience. To ensure that we can help you,
        we ask that you take a few moments to complete your profile and
        provide us with all the necessary information. This will enable us
        to accurately match you with potential employers and job openings
        that meet your preferences. So don't wait any longer, take the
        time to complete your profile today and get started on your
        journey to a fulfilling career. We're excited to help you find
        your dream job!
    </h5>
    <div class="row gx-5rem m-0">
        <div class="col-4">
            <div class="step">
                <div class="step-banner">
                    <span class="step-num">STEP 1</span>
                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                </div>
                <h5 class="title">Discover Strengths</h5>
                <p class="step-info">
                    Provide us with a few details of yourself do a personality
                    assessment and upload your resume. We will reveal your
                    unique strengths.
                </p>
            </div>
        </div>
        <div class="col-4">
            <div class="step">
                <div class="step-banner">
                    <span class="step-num">STEP 2</span>
                    <i class="fa fa-tags" aria-hidden="true"></i>
                </div>
                <h5 class="title">Showcase Yourself</h5>
                <p class="step-info">
                    With our customised interview preparation module, you will
                    be able to produce a video pitch to showcase to prospective
                    employers.
                </p>
            </div>
        </div>
        <div class="col-4">
            <div class="step">
                <div class="step-banner">
                    <span class="step-num">STEP 3</span>
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <h5 class="title">Contact Employers</h5>
                <p class="step-info">
                    Explore the current and suggested job vacancies and connect
                    seamlessly with employers via text, Voice and video calls.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- ends::dashboard tab -->
<?= $this->endSection() ?>