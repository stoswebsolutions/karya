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
            <div class="personality-assessment position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="circle"></span>
                </div>
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
    <!-- upload video pitch -->
    <div class="upload-video-pitch-section">
        <form class="" id="" action="<?= base_url('hired/uploadVideoSubmit') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
            <div class="row">
                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php elseif (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>
            </div>
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
                                <input type="file" class="form-control" name="video-file-upload" id="video-file-upload" required>
                                <span class="btn profile-forms-btn">
                                    UPLOAD VIDEO PITCH
                                </span>
                            </label>
                            <input type="hidden" value="PROFILE_PIC" name="PROFILE_PIC">
                            <input type="hidden" value="from_profile" name="from_profile">
                            <input type="hidden" name="event_title" value="Video CV">
                        </div>
                        <button class="btn profile-forms-btn publish-btn">
                            PUBLISH COMPLETE PROFILE
                        </button>
                    </div>
                </div>
            </div>
            <div class="to-fro-btns">
                <button class="btn back-btn upload-video-back">Go Back</button>
                <button class="btn next-btn upload-video-next" type="submit">Next</button>
            </div>
        </form>
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
            <a href="<?= site_url() ?>hired/myProfile" class="text-decoration-none">
                <button class="btn profile-forms-btn my-profile-btn">
                    MY PROFILE
                </button>
            </a>
        </div>
    </div>
    <!-- ends::congrats note -->
</div>
<!-- ends::profile tab -->
<?= $this->endSection() ?>