<?= $this->extend("layouts/talent") ?>
<?= $this->section("body") ?>
<!-- profile tab -->
<div class="data profile-data">
    <!-- stepper -->
    <div class="for-stepper d-flex align-items-center justify-content-center d-none">
        <div class="stepper-container">
            <div class="start">
                <span class="txt">Start</span>
                <span class="circle"></span>
            </div>
            <div class="personal-info position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="upload-resume position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="personality-assessment position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="interview-prep position-relative">
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
    <!-- profile tab -->
    <!-- personal info -->
    <div class="personal-info-form d-none">
        <form action="" class="bg-white">
            <div class="row gx-3">
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 full-name" placeholder="Full name">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 ic-nmbr" placeholder="IC Number">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <select id="gender" class="form-select gender-slct">
                            <option selected disabled>Select Gender</option>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-phone-square" aria-hidden="true"></i>
                        </span>
                        <input type="number" class="form-control border-start-0 phone-nmbr" placeholder="Telephone Number">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control adrs-1" placeholder="Address 1">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control adrs-2" placeholder="Address 2">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control poscode" placeholder="Poscode">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control city" placeholder="City">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control state" placeholder="State">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control country" placeholder="Country">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <select id="status" class="form-select status-slct">
                            <option selected disabled>Select your Status</option>
                            <option value="s1">Status 1</option>
                            <option value="s2">Status 2</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control company-university" placeholder="Current Company/University">
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-3">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="number" class="form-control experience" placeholder="Working Experience">
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <select id="work-type" class="form-select work-type-slct">
                            <option selected disabled>
                                What type of work are you considering?
                            </option>
                            <option value="w1">Work 1</option>
                            <option value="w2">Work 2</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <select id="remote-work" class="form-select remote-work-slct">
                            <option selected disabled>
                                Are you interested in remote(Work from Home)?
                            </option>
                            <option value="y">yeah</option>
                            <option value="n">Nope</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-3">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control location" placeholder="Preferred Location">
                    </div>
                </div>
            </div>
        </form>
        <div class="vacancy-details">
            <div class="row gx-0">
                <div class="col-12 col-sm-6">
                    <h6 class="mb-0 pri-clr vacancy-hdr">
                        Type in the job vacancy that you are currently pursuing.
                    </h6>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="vacancy-btns">
                        <button class="btn activeBtn profile-forms-btn">
                            Targeted Career
                        </button>
                        <button class="btn inactiveBtn">
                            Type in the job role
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <form action="" class="form-2 bg-white">
            <div class="row gx-3">
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select relocate-select w-100">
                            <option disabled selected>
                                Are you willing to relocate to a different city or
                                country?
                            </option>
                            <option value="y">yes</option>
                            <option value="n">no</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 4%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select employment-level-select w-100">
                            <option disabled selected>
                                What level is your most recent employment position?
                            </option>
                            <option value="l1">L1</option>
                            <option value="l2">L2</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 2%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select edu-level-select w-100">
                            <option disabled selected>
                                What level is your highest level of education?
                            </option>
                            <option value="e1">E1</option>
                            <option value="e2">E2</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 2%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select work-exp-select w-100">
                            <option disabled selected>
                                How many years of work experience have you had?
                            </option>
                            <option value="1">&gt;1</option>
                            <option value="5">&gt;5</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 2%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select sal-range-select w-100">
                            <option disabled selected>
                                What is your expected salary range?
                            </option>
                            <option value="5l">&gt;5L</option>
                            <option value="10l">&gt;10L</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 2%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select work-hrs-select w-100">
                            <option disabled selected>
                                Will you be willing to work beyond the daily 8 hours
                                of work?
                            </option>
                            <option value="y">yes</option>
                            <option value="n">no</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 4%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select extra-duties-select w-100">
                            <option disabled selected>
                                Will you be willing to perform relevant duties beyond
                                your job description?
                            </option>
                            <option value="y">yes</option>
                            <option value="n">no</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 4%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select culture-select w-100">
                            <option disabled selected>
                                What kind of corporate culture would you prefer?
                            </option>
                            <option value="c1">culture 1</option>
                            <option value="c2">culture 2</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 2%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select job-function-select w-100">
                            <option disabled selected>
                                What kind of job function would suit you best?
                            </option>
                            <option value="f1">function 1</option>
                            <option value="f2">function 2</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 4%
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="to-fro-btns">
            <button class="btn back-btn personal-info-back">Go Back</button>
            <button class="btn next-btn personal-info-next">Next</button>
        </div>
    </div>
    <!-- ends::personal info -->
    <!-- resume -->
    <div class="upload-resume-form d-none">
        <div class="row gx-0">
            <div class="col-12 col-lg-6">
                <h6 class="mb-0 pri-clr resume-hdr">
                    Thank you for taking the time to fill in your personal
                    information. We invite you to upload your resume and also
                    pictures of your work and achievements. This will allow us
                    to analyse your skills and qualifications more thoroughly,
                    and provide you with a selection of most suitable career
                    roles that suit your personality, strengths, skills and
                    experience.
                </h6>
            </div>
            <div class="col-12 col-lg-6">
                <div class="upload-btns">
                    <div class="resume-btn mb-2 mb-sm-3">
                        <label class="custom-file-upload upload-resume">
                            <input type="file" class="form-control" id="resume-file-upload">
                            <span class="btn profile-forms-btn">UPLOAD RESUME</span>
                        </label>
                    </div>
                    <div class="achievement-btn">
                        <label class="custom-file-upload upload-achievements">
                            <input type="file" class="form-control" id="achievements-file-upload">
                            <span class="btn profile-forms-btn">UPLOAD ACHIEVEMENTS
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="to-fro-btns">
            <button class="btn back-btn resume-back">Go Back</button>
            <button class="btn next-btn resume-next">Next</button>
        </div>
    </div>
    <!-- ends::resume -->
    <!-- personality assessment -->
    <div class="personality-assessment-section d-none">
        <div class="discover-details">
            <div class="row gx-0">
                <div class="col-12">
                    <h6 class="mb-0 pri-clr personality-assessment-hdr">
                        Thank you for taking the time to fill in your personal
                        information. We invite you to upload your resume and also
                        pictures of your work and achievements. This will allow us
                        to analyse your skills and qualifications more thoroughly,
                        and provide you with a selection of most suitable career
                        roles that suit your personality, strengths, skills and
                        experience.
                    </h6>
                </div>
                <div class="col-12 col-sm-6">
                    <ul class="m-0 px-0 py-2 py-lg-3 list-style-none qstn-types-lst">
                        <li>
                            <span class="qstn-type">Core Personality Trait</span>
                            <span class="qstn-cnt">5 questions</span>
                        </li>
                        <li>
                            <span class="qstn-type">Principal Value</span>
                            <span class="qstn-cnt">5 questions</span>
                        </li>
                        <li>
                            <span class="qstn-type">Thinking Style</span>
                            <span class="qstn-cnt">5 questions</span>
                        </li>
                        <li>
                            <span class="qstn-type">Aptitude</span>
                            <span class="qstn-cnt">5 questions</span>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6">
                    <ul class="m-0 px-0 py-0 py-sm-2 py-lg-3 list-style-none qstn-types-lst">
                        <li>
                            <span class="qstn-type">Attitude</span>
                            <span class="qstn-cnt">5 questions</span>
                        </li>
                        <li>
                            <span class="qstn-type">English Proficiency</span>
                            <span class="qstn-cnt">5 questions</span>
                        </li>
                        <li>
                            <span class="qstn-type">Skills</span>
                            <span class="qstn-cnt">7 questions</span>
                        </li>
                        <li>
                            <span class="qstn-type">Competency</span>
                            <span class="qstn-cnt">5 questions</span>
                        </li>
                    </ul>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center pt-2 pt-lg-3">
                    <button class="btn profile-forms-btn discover-btn">
                        Discover Yourself
                    </button>
                </div>
            </div>
        </div>
        <div class="assessment-qstn d-none">
            <h1 class="qstn-title mb-0">I believe in</h1>
            <div class="btn-group qstn-choices" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check qstn-choice choice-a" name="personality-qstn" id="choice-a" autocomplete="off">
                <label class="btn btn-outline-primary choice-a-lbl" for="choice-a">
                    <span class="option">A</span>
                    <span class="option-txt">
                        pushing people to deliver beyond what they would be able
                        to produce.
                    </span>
                </label>
                <input type="radio" class="btn-check qstn-choice choice-b" name="personality-qstn" id="choice-b" autocomplete="off">
                <label class="btn btn-outline-primary choice-b-lbl" for="choice-b">
                    <span class="option">B</span>
                    <span class="option-txt">
                        giving people the space and time for them to deliver a
                        task that will produce outstanding results.
                    </span>
                </label>
                <input type="radio" class="btn-check qstn-choice choice-c" name="personality-qstn" id="choice-c" autocomplete="off">
                <label class="btn btn-outline-primary choice-c-lbl" for="choice-c">
                    <span class="option">C</span>
                    <span class="option-txt">
                        people working together with a shared and common goal will
                        produce amazing results.
                    </span>
                </label>
                <input type="radio" class="btn-check qstn-choice choice-d" name="personality-qstn" id="choice-d" autocomplete="off">
                <label class="btn btn-outline-primary choice-d-lbl" for="choice-d">
                    <span class="option">D</span>
                    <span class="option-txt">
                        people giving more attention to the quality of work which
                        will produce amazing results.
                    </span>
                </label>
            </div>
        </div>
        <div class="thanks-note d-none">
            <h1 class="pri-clr thanks-hdr py-4 py-xl-5">
                Thank you for taking the time to complete our personality
                assessment! We appreciate your effort that will help us
                understand your unique strengths and abilities. We would now
                like to invite you to take the next step by filling in your
                personal information. This information is crucial in matching
                you with the job vacancy available.
            </h1>
            <div class="to-fro-btns">
                <button class="btn back-btn assessment-back">Go Back</button>
                <button class="btn next-btn assessment-next">Next</button>
            </div>
        </div>
    </div>
    <!-- ends::personality assessment -->
    <!-- interview prep -->
    <div class="interview-prep-section d-none">
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
                        <button class="btn back-btn interview-prep-back">
                            Go Back
                        </button>
                        <button class="btn next-btn interview-prep-next">
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
                            <button class="btn back-btn interview-prep-back">
                                Go Back
                            </button>
                            <button class="btn next-btn interview-prep-next">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ends::interview prep -->
    <!-- upload video pitch -->
    <div class="upload-video-pitch-section d-none">
        <div class="row gx-0">
            <div class="col-12 col-lg-6">
                <h6 class="mb-0 pri-clr video-pitch-hdr">
                    <p>
                        To better showcase your communication skills, you need to
                        make a
                        <span class="highlight">'30 Second Video Pitch'</span>
                        based on the personalised interview preparation.
                    </p>
                    <p class="mb-0">
                        This is your moment to shine and show what you're made of.
                        We know that you can do it! The key to success is
                        preparation, practice, and confidence. Upon uploading your
                        video pitch, you may "PUBLISH" your profile for all
                        employers and recruiters to view. We look forward to
                        seeing you land your dream job!
                    </p>
                </h6>
            </div>
            <div class="col-12 col-lg-6">
                <div class="upload-btns">
                    <div class="video-btn mb-2 mb-sm-3">
                        <label class="custom-file-upload upload-video">
                            <input type="file" class="form-control" id="video-file-upload">
                            <span class="btn profile-forms-btn">
                                UPLOAD VIDEO PITCH
                            </span>
                        </label>
                    </div>
                    <button class="btn profile-forms-btn publish-btn">
                        PUBLISH COMPLETE PROFILE
                    </button>
                </div>
            </div>
        </div>
        <div class="to-fro-btns">
            <button class="btn back-btn upload-video-back">Go Back</button>
            <button class="btn next-btn upload-video-next">Next</button>
        </div>
    </div>
    <!-- ends::upload video pitch -->
    <!-- generate evaluation -->
    <div class="generate-eval-section d-none">
        <div class="intro">
            <h1 class="pri-clr generate-eval-intro-hdr py-3 py-sm-4 py-xl-5 mb-0">
                <p class="mb-0">
                    You can improve your chances of landing your dream job by
                    taking advantage of a video evaluation to pinpoint your
                    strengths and weaknesses in video pitch. You can obtain a
                    personalised feedback and we could have a coaching sessions
                    tailored for your needs to work on those specific areas to
                    improve your performance during actual job interviews. With
                    this personalised coaching, you can build your confidence
                    and stand out from the competition in a highly competitive
                    job market.
                </p>
            </h1>
            <button class="btn profile-forms-btn generate-btn">
                Generate Evaluation
            </button>
        </div>
        <div class="eval-dtls d-none">
            <h1 class="hdr-title text-uppercase text-center">
                video pitch evaluation
            </h1>
            <div class="eval strengths black-clr mb-3 mb-sm-4">
                <h6 class="hdr mb-1">Strengths:</h6>
                <p class="txt mb-0">
                    The jobseeker displays enthusiasm and excitement about the
                    job vacancy, which can be engaging and appealing to
                    potential employers.
                </p>
                <p class="txt mb-0">
                    They emphasize their belief in having the necessary skills
                    and experience to excel as a fund manager, showcasing
                    confidence in their abilities.
                </p>
                <p class="txt mb-0">
                    The jobseeker highlights their expertise in the capital
                    market industry, demonstrating relevant knowledge and
                    experience.
                </p>
            </div>
            <div class="eval weaknesses black-clr mb-3 mb-sm-4">
                <h6 class="hdr mb-1">Weaknesses:</h6>
                <p class="txt mb-0">
                    The jobseeker's speech contains multiple filler words ("um,"
                    "aaa"), indicating hesitations and nervousness, which may
                    impact their overall confidence and clarity.
                </p>
                <p class="txt mb-0">
                    They mention a lack of extensive experience in every aspect
                    of the role, which might raise concerns for some employers.
                </p>
                <p class="txt mb-0">
                    Repetition of certain phrases ("I'm truly excited," "I
                    believe") can reduce the impact and convey uncertainty.
                </p>
            </div>
            <div class="eval suggestions black-clr mb-3 mb-sm-4">
                <h6 class="hdr mb-1">Coaching Suggestions:</h6>
                <ul>
                    <li class="txt mb-0">
                        Confidence-building exercises: Help the jobseeker practice
                        and improve their public speaking skills to reduce
                        hesitations and filler words.
                    </li>
                    <li class="txt mb-0">
                        Interview preparation: Guide the jobseeker in effectively
                        articulating their skills and experiences to overcome any
                        perception of lacking comprehensive expertise.
                    </li>
                    <li class="txt mb-0">
                        Storytelling techniques: Assist the jobseeker in crafting
                        compelling narratives to illustrate their past
                        achievements and demonstrate their value as a fund
                        manager.
                    </li>
                    <li class="txt mb-0">
                        Mock interviews: Conduct practice sessions to simulate
                        interview scenarios and provide feedback on their
                        delivery, confidence, and clarity.
                    </li>
                </ul>
            </div>
            <div class="request d-flex justify-content-center mb-2 mb-sm-0">
                <button class="btn profile-forms-btn pri-clr req-coach-btn">
                    REQUEST PERSONAL COACHING
                </button>
            </div>
            <div class="to-fro-btns">
                <button class="btn back-btn eval-back">Go Back</button>
                <button class="btn next-btn eval-next">Next</button>
            </div>
        </div>
    </div>
    <!-- ends::generate evaluation -->
    <!-- congrats note -->
    <div class="congrats-note-section d-none">
        <div class="intro">
            <h1 class="pri-clr congrats-hdr py-3 py-sm-4 py-xl-5 mb-0">
                <p class="mb-3">
                    Congratulations on completing your job seeker profile! You
                    have taken an important step towards finding your dream job.
                    By filling out your profile, you have made it easier for
                    potential employers to learn about your skills and
                    qualifications, which will increase your chances of getting
                    hired. Keep up the good work and stay focused on your job
                    search. The right opportunity is out there, and you're now
                    one step closer to finding it! Best of luck in your job
                    search!
                </p>
                <p class="mb-0">You may now view your complete profile.</p>
            </h1>
            <button class="btn profile-forms-btn my-profile-btn">
                MY PROFILE
            </button>
        </div>
    </div>
    <!-- ends::congrats note -->
    <!-- my profile -->
    <div class="my-profile d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="my-profile-tab" role="tablist">
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="my-resume-tab" data-bs-toggle="pill" data-bs-target="#my-resume" type="button" role="tab" aria-controls="my-resume" aria-selected="true">
                    resume
                </button>
            </li>
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link text-uppercase w-100" id="profiling-tab" data-bs-toggle="pill" data-bs-target="#profiling" type="button" role="tab" aria-controls="profiling" aria-selected="false">
                    profiling
                </button>
            </li>
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link text-uppercase w-100" id="video-pitch-tab" data-bs-toggle="pill" data-bs-target="#video-pitch" type="button" role="tab" aria-controls="video-pitch" aria-selected="false">
                    video pitch
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase w-100" id="achievements-tab" data-bs-toggle="pill" data-bs-target="#achievements" type="button" role="tab" aria-controls="achievements" aria-selected="false">
                    achievements
                </button>
            </li>
        </ul>
        <div class="tab-content" id="my-profile-tabContent">
            <div class="tab-pane fade show active" id="my-resume" role="tabpanel" aria-labelledby="my-resume-tab" tabindex="0">
                <div class="resume-container">
                    <!-- load resume here -->
                    <img src="<?= site_url() ?>app-assets/images/resume.PNG" alt="resume" class="w-100">
                    <!-- ends::load resume here -->
                </div>
            </div>
            <div class="tab-pane fade profiling-tab-content" id="profiling" role="tabpanel" aria-labelledby="profiling-tab" tabindex="0">
                <div class="dominant-data">
                    <div class="row gx-0">
                        <div class="col-6">
                            <div class="content">
                                <h5 class="hdr mb-0 text-uppercase">
                                    primary character
                                </h5>
                                <h2 class="sub-hdr mb-3 text-uppercase">
                                    - dominant (d)
                                </h2>
                                <h6 class="sub-sub-hdr mb-3">
                                    Commanding & Task Oriented
                                </h6>
                                <dl class="row">
                                    <dt class="col-sm-5 col-md-4 col-lg-3 title">
                                        FOCUS
                                    </dt>
                                    <dd class="col-sm-7 col-md-8 col-lg-9">
                                        <p class="mb-0 txt">
                                            Take care of circumstances by persuading others
                                            to have a common vision.
                                        </p>
                                    </dd>
                                    <dt class="col-sm-5 col-md-4 col-lg-3 title">
                                        ACTIONS
                                    </dt>
                                    <dd class="col-sm-7 col-md-8 col-lg-9">
                                        <p class="mb-0 txt">
                                            Look at the bigger picture, assert for results,
                                            take risks and loves adventures.
                                        </p>
                                    </dd>
                                    <dt class="col-sm-5 col-md-4 col-lg-3 title">
                                        APPROACH
                                    </dt>
                                    <dd class="col-sm-7 col-md-8 col-lg-9">
                                        <p class="mb-0 txt">Am direct and blunt.</p>
                                    </dd>
                                    <dt class="col-sm-5 col-md-4 col-lg-3 title">
                                        TENDENCIES
                                    </dt>
                                    <dd class="col-sm-7 col-md-8 col-lg-9">
                                        <p class="mb-0 txt">
                                            Innovate, crave for results, creates commotion
                                            and loves challenges.
                                        </p>
                                    </dd>
                                    <dt class="col-sm-5 col-md-4 col-lg-3 title">
                                        RESPONSE
                                    </dt>
                                    <dd class="col-sm-7 col-md-8 col-lg-9">
                                        <p class="mb-0 txt">
                                            Give short answers and makes fast decisions.
                                        </p>
                                    </dd>
                                    <dt class="col-sm-5 col-md-4 col-lg-3 title">
                                        MOTIVATION
                                    </dt>
                                    <dd class="col-sm-7 col-md-8 col-lg-9">
                                        <p class="mb-0 txt">
                                            Thirive for authority, opportunity and prestige.
                                        </p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="content content-right">
                                <h5 class="hdr mb-3 text-uppercase">
                                    a dominant person
                                </h5>
                                <p class="txt">
                                    Is not afraid to confront tough issues and
                                    situations and can make a decision when no one else
                                    wants to.
                                </p>
                                <p class="txt">
                                    Accept change as a personal challenge and keeps the
                                    team focused and on task.
                                </p>
                                <p class="txt">
                                    May come across as unapproachable and insensitive.
                                </p>
                                <p class="txt">
                                    Is objective driven and results oriented hence
                                    impatient with others and doesn't favour intricate
                                    details.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="competency-data">
                    <h1 class="hdr mt-4 mb-2">
                        COMPETENCY ASSESSMENT: Fund Manager
                    </h1>
                    <div class="content">
                        <div class="row gx-0">
                            <div class="col-6">
                                <div class="graph-data h-100 me-4">
                                    <h5 class="title">Competency Assessment</h5>
                                    <div class="graph">
                                        <!-- add graph here -->
                                        <img src="<?= site_url() ?>app-assets/images/competency-graph.PNG" alt="graph" class="w-100">
                                        <!-- ends::add graph here -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="graph-data h-100 ms-4">
                                    <h5 class="title">RATING</h5>
                                    <div class="graph">
                                        <!-- add graph here -->
                                        <img src="<?= site_url() ?>app-assets/images/rating-graph.PNG" alt="graph" class="w-100">
                                        <!-- ends::add graph here -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <ol class="list text-white fw-500">
                                    <li>
                                        <p class="ms-2">
                                            Have you successfully managed diversified
                                            investment portfolios across different asset
                                            classes, such as equities, fixed income, and
                                            alternative investments?
                                        </p>
                                    </li>
                                    <li>
                                        <p class="ms-2">
                                            Are you proficient in utilizing financial
                                            analysis techniques, such as ratio analysis,
                                            discounted cash flow (DCF) analysis, or relative
                                            valuation methods?
                                        </p>
                                    </li>
                                    <li>
                                        <p class="ms-2">
                                            Have you actively employed risk management
                                            strategies, such as setting stop-loss orders or
                                            implementing hedging techniques, to mitigate
                                            investment risks?
                                        </p>
                                    </li>
                                    <li>
                                        <p class="ms-2">
                                            Are you familiar with regulatory compliance
                                            requirements related to fund management, such as
                                            reporting obligations or investor disclosure
                                            obligations?
                                        </p>
                                    </li>
                                    <li>
                                        <p class="ms-2 mb-0">
                                            Have you actively monitored and evaluated
                                            performance metrics of investment portfolios
                                            such as Sharpe ratio, alpha, or tracking error?
                                        </p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="video-pitch" role="tabpanel" aria-labelledby="video-pitch-tab" tabindex="0">
                <div class="video-container">
                    <video controls poster="<?= site_url() ?>app-assets/images/poster.jpg" class="w-100 hoverable">
                        <source src="<?= site_url() ?>app-assets/images/video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="tab-pane fade" id="achievements" role="tabpanel" aria-labelledby="achievements" tabindex="0">
                <div class="achievements-container bg-white px-2 pt-1 pb-3">
                    <div class="row g-2 m-0">
                        <div class="col-6">
                            <img src="<?= site_url() ?>app-assets/images/achievement-1.PNG" alt="achievement" class="w-100 h-100">
                        </div>
                        <div class="col-6">
                            <img src="<?= site_url() ?>app-assets/images/achievement-2.PNG" alt="achievement" class="w-100 h-100">
                        </div>
                        <div class="col-6">
                            <img src="<?= site_url() ?>app-assets/images/achievement-3.PNG" alt="achievement" class="w-100 h-100">
                        </div>
                        <div class="col-6">
                            <img src="<?= site_url() ?>app-assets/images/achievement-4.PNG" alt="achievement" class="w-100 h-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion profile-accordion my-profile-accordion mobile-only" id="my-profile-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="resume-hdr">
                <button class="accordion-button text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#resume-collapse" aria-expanded="true" aria-controls="resume-collapse">
                    resume
                </button>
            </h2>
            <div id="resume-collapse" class="accordion-collapse collapse show" aria-labelledby="resume-hdr" data-bs-parent="#my-profile-accordion">
                <div class="accordion-body p-0">
                    <!-- load resume here -->
                    <div class="resume-container">
                        <img src="<?= site_url() ?>app-assets/images/resume.PNG" alt="resume" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="profiling-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#profiling-collapse" aria-expanded="false" aria-controls="profiling-collapse">
                    profiling
                </button>
            </h2>
            <div id="profiling-collapse" class="accordion-collapse collapse" aria-labelledby="profiling-hdr" data-bs-parent="#my-profile-accordion">
                <div class="accordion-body p-0">
                    <div class="dominant-data">
                        <div class="row gx-0">
                            <div class="col-12">
                                <div class="content">
                                    <h5 class="hdr mb-0 text-uppercase">
                                        primary character
                                    </h5>
                                    <h2 class="sub-hdr mb-3 text-uppercase">
                                        - dominant (d)
                                    </h2>
                                    <h6 class="sub-sub-hdr mb-3">
                                        Commanding & Task Oriented
                                    </h6>
                                    <dl class="row mb-0">
                                        <dt class="col-3 title">FOCUS</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Take care of circumstances by persuading
                                                others to have a common vision.
                                            </p>
                                        </dd>
                                        <dt class="col-3 title">ACTIONS</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Look at the bigger picture, assert for
                                                results, take risks and loves adventures.
                                            </p>
                                        </dd>
                                        <dt class="col-3 title">APPROACH</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">Am direct and blunt.</p>
                                        </dd>
                                        <dt class="col-3 title">TENDENCIES</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Innovate, crave for results, creates commotion
                                                and loves challenges.
                                            </p>
                                        </dd>
                                        <dt class="col-3 title">RESPONSE</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Give short answers and makes fast decisions.
                                            </p>
                                        </dd>
                                        <dt class="col-3 title">MOTIVATION</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Thirive for authority, opportunity and
                                                prestige.
                                            </p>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="content content-right">
                                    <h5 class="hdr mb-3 text-uppercase">
                                        a dominant person
                                    </h5>
                                    <p class="txt">
                                        Is not afraid to confront tough issues and
                                        situations and can make a decision when no one
                                        else wants to.
                                    </p>
                                    <p class="txt">
                                        Accept change as a personal challenge and keeps
                                        the team focused and on task.
                                    </p>
                                    <p class="txt">
                                        May come across as unapproachable and insensitive.
                                    </p>
                                    <p class="txt mb-0">
                                        Is objective driven and results oriented hence
                                        impatient with others and doesn't favour intricate
                                        details.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="competency-data">
                        <h1 class="hdr mt-4 mb-2 mx-3">
                            COMPETENCY ASSESSMENT: Fund Manager
                        </h1>
                        <div class="content">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="graph-data h-100 me-4">
                                        <h5 class="title">Competency Assessment</h5>
                                        <div class="graph">
                                            <!-- add graph here -->
                                            <img src="<?= site_url() ?>app-assets/images/competency-graph.PNG" alt="graph" class="w-100">
                                            <!-- ends::add graph here -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="graph-data h-100 ms-4">
                                        <h5 class="title">RATING</h5>
                                        <div class="graph">
                                            <!-- add graph here -->
                                            <img src="<?= site_url() ?>app-assets/images/rating-graph.PNG" alt="graph" class="w-100">
                                            <!-- ends::add graph here -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ol class="list text-white fw-500">
                                        <li>
                                            <p class="ms-2 mb-1">
                                                Have you successfully managed diversified
                                                investment portfolios across different asset
                                                classes, such as equities, fixed income, and
                                                alternative investments?
                                            </p>
                                        </li>
                                        <li>
                                            <p class="ms-2 mb-1">
                                                Are you proficient in utilizing financial
                                                analysis techniques, such as ratio analysis,
                                                discounted cash flow (DCF) analysis, or
                                                relative valuation methods?
                                            </p>
                                        </li>
                                        <li>
                                            <p class="ms-2 mb-1">
                                                Have you actively employed risk management
                                                strategies, such as setting stop-loss orders
                                                or implementing hedging techniques, to
                                                mitigate investment risks?
                                            </p>
                                        </li>
                                        <li>
                                            <p class="ms-2 mb-1">
                                                Are you familiar with regulatory compliance
                                                requirements related to fund management, such
                                                as reporting obligations or investor
                                                disclosure obligations?
                                            </p>
                                        </li>
                                        <li>
                                            <p class="ms-2 mb-0">
                                                Have you actively monitored and evaluated
                                                performance metrics of investment portfolios
                                                such as Sharpe ratio, alpha, or tracking
                                                error?
                                            </p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="video-pitch-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#video-pitch-collapse" aria-expanded="false" aria-controls="video-pitch-collapse">
                    video pitch
                </button>
            </h2>
            <div id="video-pitch-collapse" class="accordion-collapse collapse" aria-labelledby="video-pitch-hdr" data-bs-parent="#my-profile-accordion">
                <div class="accordion-body p-0">
                    <div class="video-container">
                        <video controls poster="<?= site_url() ?>app-assets/images/poster.jpg" class="w-100 hoverable">
                            <source src="<?= site_url() ?>app-assets/images/video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="achievements-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#achievements-collapse" aria-expanded="false" aria-controls="achievements-collapse">
                    achievements
                </button>
            </h2>
            <div id="achievements-collapse" class="accordion-collapse collapse" aria-labelledby="achievements-hdr" data-bs-parent="#my-profile-accordion">
                <div class="accordion-body p-0">
                    <div class="achievements-container bg-dark px-1 pb-2">
                        <div class="row g-2 m-0">
                            <div class="col-12">
                                <img src="<?= site_url() ?>app-assets/images/achievement-1.PNG" alt="achievement" class="w-100 h-100">
                            </div>
                            <div class="col-12">
                                <img src="<?= site_url() ?>app-assets/images/achievement-2.PNG" alt="achievement" class="w-100 h-100">
                            </div>
                            <div class="col-12">
                                <img src="<?= site_url() ?>app-assets/images/achievement-3.PNG" alt="achievement" class="w-100 h-100">
                            </div>
                            <div class="col-12">
                                <img src="<?= site_url() ?>app-assets/images/achievement-4.PNG" alt="achievement" class="w-100 h-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ends::my profile -->
    <!-- ends::profile tab -->
</div>
<!-- ends::profile tab -->
<?= $this->endSection() ?>