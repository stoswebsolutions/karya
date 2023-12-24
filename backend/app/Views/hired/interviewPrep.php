<?= $this->extend("layouts/hired") ?>
<?= $this->section("body") ?>
<!-- profile tab -->
<div class="data profile-data">
    <!-- stepper -->
    <div class="for-stepper d-flex align-items-center justify-content-center">
        <div class="stepper-container">
            <div class="start">
                <span class="txt">Start</span>
                <span class="circle"></span>
            </div>
            <div class="personality-assessment completed position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="personal-info completed position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="upload-resume completed position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="interview-prep completed position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="upload-vid position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="incomplete">
                <span class="hor-line"></span>
                <span class="circle"></span>
                <span class="txt">Complete</span>
            </div>
        </div>
    </div>
    <!-- ends::stepper -->
    <!-- interview prep -->
    <div class="interview-prep-section">
            <div class="intro">
                <h1 class="pri-clr interview-prep-intor-hdr py-4 py-xl-5">
                    <p>
                        Next, we will be customising personalised interview pitches
                        to help you prepare and ace your interviews. We have a
                        recommended pitch that we believe will work best for you.
                    </p>
                    <p class="mb-0">
                        We will also provide you with the industry outlook and a
                        list of potential questions that could arise during the
                        interview so that you can prepare effectively. Practice
                        makes perfect. The more you practice, the more confident and
                        prepared you will be when it comes time for the interview.
                        All the best!
                    </p>
                </h1>
                <button class="btn profile-forms-btn okay-btn">Okay</button>
            </div>
            <form class="" id="" action="<?= base_url('hired/interviewPrepSubmit') ?>" method="post" enctype="multipart/form-data">
                <div class="interview-pitches d-none-mobile d-none">
                    <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="interview-prep-tab" role="tablist">
                        <li class="nav-item me-1" role="presentation">
                            <button class="nav-link active text-uppercase w-100" id="general-pitch-tab" data-bs-toggle="pill" data-bs-target="#general-pitch" type="button" role="tab" aria-controls="general-pitch" aria-selected="true">
                                general pitch
                            </button>
                        </li>
                        <li class="nav-item me-1" role="presentation">
                            <button class="nav-link text-uppercase w-100" id="advance-pitch-tab" data-bs-toggle="pill" data-bs-target="#advance-pitch" type="button" role="tab" aria-controls="advance-pitch" aria-selected="false">
                                advance pitch
                            </button>
                        </li>
                        <li class="nav-item me-1" role="presentation">
                            <button class="nav-link text-uppercase w-100" id="sector-forecast-tab" data-bs-toggle="pill" data-bs-target="#sector-forecast" type="button" role="tab" aria-controls="sector-forecast" aria-selected="false">
                                sector forecast
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-uppercase w-100" id="spot-qstns-tab" data-bs-toggle="pill" data-bs-target="#spot-qstns" type="button" role="tab" aria-controls="spot-qstns" aria-selected="false">
                                spot questions
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="interview-prep-tabContent">
                        <div class="tab-pane fade show active" id="general-pitch" role="tabpanel" aria-labelledby="general-pitch-tab" tabindex="0">
                            <p>
                                I am Azamin lskandar Bin Yeop Rashidi. I would like to
                                find a job as a Corporate Finance Adviser
                            </p>
                            <p>
                                What I can provide for your company is that I am able to
                                be direct, straight forward and communicate direct to the
                                point.
                            </p>
                            <p>
                                Being commanding & task oriented, I take control of
                                circumstances by persuading others to have a common
                                vision. I also look at the bigger picture, assert for
                                results, take risks and love adventures, innovate, crave
                                results, create commotion and loves challenges., give
                                short answers and makes fast decisions, thrive for
                                authority, opportunity and prestige.
                            </p>
                            <p>
                                I am able to assist my team to solve problems as I trust
                                the proven facts, and appreciate the value of examining
                                and interpreting information which builds confidence in
                                decision-making. I also tend to be attentive.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="advance-pitch" role="tabpanel" aria-labelledby="advance-pitch-tab" tabindex="0">
                            <p>
                                As a corporate finance adviser, my dominant primary
                                personality traits of assertiveness and confidence,
                                coupled with my secondary compliant personality traits of
                                being a great listener and team player, make me an
                                effective communicator and problem solver. I understand
                                the importance of clear and concise communication and I am
                                able to leverage my experiential thinking style to provide
                                innovative solutions to complex problems. My values of
                                equity and fairness ensure that I approach every situation
                                with a level-headed and unbiased perspective, allowing me
                                to create equitable solutions for all parties involved.
                            </p>
                            <p>
                                With over 25 years of experience in investments,
                                technology, talent development, and tourism, I have
                                developed a deep understanding of the corporate finance
                                landscape. I have a proven track record of creating
                                financial models that have led to successful investments,
                                and I have the ability to translate complex financial data
                                into easy-to-understand terms for
                            </p>
                        </div>
                        <div class="tab-pane fade" id="sector-forecast" role="tabpanel" aria-labelledby="sector-forecast-tab" tabindex="0">
                            <p>
                                There are several industry challenges that a corporate
                                finance adviser in Malaysia may face, including increased
                                competition, regulatory changes, and the need to stay
                                up-to-date with new technologies and innovations.
                            </p>
                            <p>
                                One of the key challenges is the increasing competition in
                                the market, with more firms entering the industry and
                                offering similar services. This means that corporate
                                finance advisers need to differentiate themselves and
                                provide unique value propositions to attract and retain
                                clients.
                            </p>
                            <p>
                                Another challenge is the constantly evolving regulatory
                                landscape, which can impact the ability of corporate
                                finance advisers to operate effectively and efficiently.
                                Keeping up with regulatory changes and compliance
                                requirements is crucial to avoid potential legal and
                                financial risks.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="spot-qstns" role="tabpanel" aria-labelledby="spot-qstns-tab" tabindex="0">
                            <ol class="spot-qstns-list">
                                <li class="px-3 mb-3">
                                    How would you describe your approach to financial
                                    modeling, and what factors do you consider when building
                                    a model?
                                </li>
                                <li class="px-3 mb-3">
                                    Can you walk us through a time when you had to navigate
                                    a complex financial situation and how you managed to
                                    reach a successful outcome?
                                </li>
                                <li class="px-3 mb-3">
                                    How do you ensure that you stay up-to-date with the
                                    latest trends and developments in the corporate finance
                                    sector?
                                </li>
                                <li class="px-3 mb-3">
                                    Can you tell us about a time when you had to persuade a
                                    client or stakeholder to adopt a particular financial
                                    strategy or solution?
                                </li>
                            </ol>
                            <div class="to-fro-btns">
                                <a href="<?= site_url() ?>hired/uploadResume" class="btn back-btn interview-prep-back"> Go Back </a>
                                <button class="btn next-btn interview-prep-next" type="submit" >
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion profile-accordion interview-pitches-accordion mobile-only d-none" id="interview-pitches-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="general-pitch-hdr">
                            <button class="accordion-button text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#general-pitch-collapse" aria-expanded="true" aria-controls="general-pitch-collapse">
                                general pitch
                            </button>
                        </h2>
                        <div id="general-pitch-collapse" class="accordion-collapse collapse show" aria-labelledby="general-pitch-hdr" data-bs-parent="#interview-pitches-accordion">
                            <div class="accordion-body">
                                <p>
                                    I am Azamin lskandar Bin Yeop Rashidi. I would like to
                                    find a job as a Corporate Finance Adviser
                                </p>
                                <p>
                                    What I can provide for your company is that I am able to
                                    be direct, straight forward and communicate direct to
                                    the point.
                                </p>
                                <p>
                                    Being commanding & task oriented, I take control of
                                    circumstances by persuading others to have a common
                                    vision. I also look at the bigger picture, assert for
                                    results, take risks and love adventures, innovate, crave
                                    results, create commotion and loves challenges., give
                                    short answers and makes fast decisions, thrive for
                                    authority, opportunity and prestige.
                                </p>
                                <p>
                                    I am able to assist my team to solve problems as I trust
                                    the proven facts, and appreciate the value of examining
                                    and interpreting information which builds confidence in
                                    decision-making. I also tend to be attentive.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="advance-pitch-hdr">
                            <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#advance-pitch-collapse" aria-expanded="false" aria-controls="advance-pitch-collapse">
                                advance pitch
                            </button>
                        </h2>
                        <div id="advance-pitch-collapse" class="accordion-collapse collapse" aria-labelledby="advance-pitch-hdr" data-bs-parent="#interview-pitches-accordion">
                            <div class="accordion-body">
                                <p>
                                    As a corporate finance adviser, my dominant primary
                                    personality traits of assertiveness and confidence,
                                    coupled with my secondary compliant personality traits
                                    of being a great listener and team player, make me an
                                    effective communicator and problem solver. I understand
                                    the importance of clear and concise communication and I
                                    am able to leverage my experiential thinking style to
                                    provide innovative solutions to complex problems. My
                                    values of equity and fairness ensure that I approach
                                    every situation with a level-headed and unbiased
                                    perspective, allowing me to create equitable solutions
                                    for all parties involved.
                                </p>
                                <p>
                                    With over 25 years of experience in investments,
                                    technology, talent development, and tourism, I have
                                    developed a deep understanding of the corporate finance
                                    landscape. I have a proven track record of creating
                                    financial models that have led to successful
                                    investments, and I have the ability to translate complex
                                    financial data into easy-to-understand terms for
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="sector-forecast-hdr">
                            <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#sector-forecast-collapse" aria-expanded="false" aria-controls="sector-forecast-collapse">
                                sector forecast
                            </button>
                        </h2>
                        <div id="sector-forecast-collapse" class="accordion-collapse collapse" aria-labelledby="sector-forecast-hdr" data-bs-parent="#interview-pitches-accordion">
                            <div class="accordion-body">
                                <p>
                                    There are several industry challenges that a corporate
                                    finance adviser in Malaysia may face, including
                                    increased competition, regulatory changes, and the need
                                    to stay up-to-date with new technologies and
                                    innovations.
                                </p>
                                <p>
                                    One of the key challenges is the increasing competition
                                    in the market, with more firms entering the industry and
                                    offering similar services. This means that corporate
                                    finance advisers need to differentiate themselves and
                                    provide unique value propositions to attract and retain
                                    clients.
                                </p>
                                <p>
                                    Another challenge is the constantly evolving regulatory
                                    landscape, which can impact the ability of corporate
                                    finance advisers to operate effectively and efficiently.
                                    Keeping up with regulatory changes and compliance
                                    requirements is crucial to avoid potential legal and
                                    financial risks.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="spot-qstns-hdr">
                            <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#spot-qstns-collapse" aria-expanded="false" aria-controls="spot-qstns-collapse">
                                spot questions
                            </button>
                        </h2>
                        <div id="spot-qstns-collapse" class="accordion-collapse collapse" aria-labelledby="spot-qstns-hdr" data-bs-parent="#interview-pitches-accordion">
                            <div class="accordion-body">
                                <ol class="spot-qstns-list">
                                    <li class="px-3 mb-3">
                                        How would you describe your approach to financial
                                        modeling, and what factors do you consider when
                                        building a model?
                                    </li>
                                    <li class="px-3 mb-3">
                                        Can you walk us through a time when you had to
                                        navigate a complex financial situation and how you
                                        managed to reach a successful outcome?
                                    </li>
                                    <li class="px-3 mb-3">
                                        How do you ensure that you stay up-to-date with the
                                        latest trends and developments in the corporate
                                        finance sector?
                                    </li>
                                    <li class="px-3 mb-3">
                                        Can you tell us about a time when you had to persuade
                                        a client or stakeholder to adopt a particular
                                        financial strategy or solution?
                                    </li>
                                </ol>
                                <div class="to-fro-btns">
                                    <a href="<?= site_url() ?>hired/uploadResume" class="btn back-btn interview-prep-back"> Go Back </a>
                                    <button class="btn next-btn interview-prep-next" type="button" >
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    <!-- ends::interview prep -->
</div>
<!-- ends::profile tab -->
<?= $this->endSection() ?>