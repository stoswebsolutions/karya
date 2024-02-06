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
            <div class="personal-info position-relative completed">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="upload-resume position-relative completed">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="personality-assessment position-relative completed">
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
    <!-- personality assessment -->
    <div class="personality-assessment-section">
        <div class="discover-details">
            <div class="row gx-0">
                <div class="col-12">
                    <h6 class="mb-0 pri-clr personality-assessment-hdr">
                        Everyone has unique strengths and talents that make them stand out from the crowd.
                        By taking this 41 questions assessment, you will gain valuable insight into your personality,
                        your behaviour traits, your attitude and aptitude, your ideal work environment,
                        your skills and your abilities. This will enable you to make more informed decisions
                        about your career path and help you find the job that's right for you.
                        We're excited to help you on your journey to a fulfilling career!
                    </h6>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center pt-2 pt-lg-3">
                    <button class="btn profile-forms-btn discover-btn">
                        Discover Yourself
                    </button>
                </div>
            </div>
        </div>
        <form class="" id="questionform" action="<?= base_url('hired/perAssessmentSubmit') ?>" method="post">
            <?= csrf_field(); ?>
            <div class="row">
                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php elseif (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>
            </div>
            <?php
            $index = 1;
            foreach ($disc as $i => $row) {
            ?>
                <div class="disc-qstn disc-qstn<?= $index ?> d-none">
                    <h1 class="qstn-title mb-0"><?= $row['disc_question'] ?></h1>
                    <div class="btn-group qstn-choices" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check qstn-choice choice-a" name="DISC<?= $index ?>" id="DISC1<?= $index ?>" value="D" autocomplete="off">
                        <label class="btn btn-outline-primary choice-a-lbl" for="DISC1<?= $index ?>">
                            <span class="option">A</span>
                            <span class="option-txt"><?= $row['D'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-b" name="DISC<?= $index ?>" id="DISC2<?= $index ?>" value="I" autocomplete="off">
                        <label class="btn btn-outline-primary choice-b-lbl" for="DISC2<?= $index ?>">
                            <span class="option">B</span>
                            <span class="option-txt"><?= $row['I'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-c" name="DISC<?= $index ?>" id="DISC3<?= $index ?>" value="S" autocomplete="off">
                        <label class="btn btn-outline-primary choice-c-lbl" for="DISC3<?= $index ?>">
                            <span class="option">C</span>
                            <span class="option-txt"><?= $row['S'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-d" name="DISC<?= $index ?>" id="DISC4<?= $index ?>" value="C" autocomplete="off">
                        <label class="btn btn-outline-primary choice-d-lbl" for="DISC4<?= $index ?>">
                            <span class="option">D</span>
                            <span class="option-txt"><?= $row['C'] ?></span>
                        </label>
                    </div>
                </div>
            <?php
                $index = $index + 1;
            }
            ?>
            <?php
            $index = 10;
            foreach ($lite as $i => $row) {
            ?>
                <div class="lite-qstn lite-qstn<?= $index ?> d-none">
                    <h1 class="qstn-title mb-0"><?= $row['LITE_question'] ?></h1>
                    <div class="btn-group qstn-choices" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check qstn-choice choice-a" name="LITE<?= $index ?>" id="LITE1<?= $index ?>" value="L" autocomplete="off">
                        <label class="btn btn-outline-primary choice-a-lbl" for="LITE1<?= $index ?>">
                            <span class="option">A</span>
                            <span class="option-txt"><?= $row['L'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-b" name="LITE<?= $index ?>" id="LITE2<?= $index ?>" value="I" autocomplete="off">
                        <label class="btn btn-outline-primary choice-b-lbl" for="LITE2<?= $index ?>">
                            <span class="option">B</span>
                            <span class="option-txt"><?= $row['I'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-c" name="LITE<?= $index ?>" id="LITE3<?= $index ?>" value="T" autocomplete="off">
                        <label class="btn btn-outline-primary choice-c-lbl" for="LITE3<?= $index ?>">
                            <span class="option">C</span>
                            <span class="option-txt"><?= $row['T'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-d" name="LITE<?= $index ?>" id="LITE4<?= $index ?>" value="E" autocomplete="off">
                        <label class="btn btn-outline-primary choice-d-lbl" for="LITE4<?= $index ?>">
                            <span class="option">D</span>
                            <span class="option-txt"><?= $row['E'] ?></span>
                        </label>
                    </div>
                </div>
            <?php
                $index = $index + 1;
            }
            ?>
            <?php
            $index = 15;
            foreach ($mensa as $i => $row) {
            ?>
                <div class="mensa-qstn mensa-qstn<?= $index ?> d-none">
                    <h1 class="qstn-title mb-0"><?= $row['mensa_question'] ?></h1>
                    <div class="btn-group qstn-choices" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check qstn-choice choice-a" name="MENSA<?= $index ?>" id="MENSA1<?= $index ?>" value="20" autocomplete="off">
                        <label class="btn btn-outline-primary choice-a-lbl" for="MENSA1<?= $index ?>">
                            <span class="option">A</span>
                            <span class="option-txt"><?= $row['A'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-b" name="MENSA<?= $index ?>" id="MENS2<?= $index ?>" value="80" autocomplete="off">
                        <label class="btn btn-outline-primary choice-b-lbl" for="MENSA2<?= $index ?>">
                            <span class="option">B</span>
                            <span class="option-txt"><?= $row['B'] ?></span>
                        </label>
                    </div>
                </div>
            <?php
                $index = $index + 1;
            }
            ?>
            <?php
            $index = 20;
            foreach ($lpje as $i => $row) {
            ?>
                <div class="lpje-qstn lpje-qstn<?= $index ?> d-none">
                    <h1 class="qstn-title mb-0"><?= $row['LPJE_question'] ?></h1>
                    <div class="btn-group qstn-choices" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check qstn-choice choice-a" name="LPJE<?= $index ?>" id="LPJE1<?= $index ?>" value="L" autocomplete="off">
                        <label class="btn btn-outline-primary choice-a-lbl" for="LPJE1<?= $index ?>">
                            <span class="option">A</span>
                            <span class="option-txt"><?= $row['L'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-b" name="LPJE<?= $index ?>" id="LPJE2<?= $index ?>" value="P" autocomplete="off">
                        <label class="btn btn-outline-primary choice-b-lbl" for="LPJE2<?= $index ?>">
                            <span class="option">B</span>
                            <span class="option-txt"><?= $row['P'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-c" name="LPJE<?= $index ?>" id="LPJE3<?= $index ?>" value="J" autocomplete="off">
                        <label class="btn btn-outline-primary choice-c-lbl" for="LPJE3<?= $index ?>">
                            <span class="option">C</span>
                            <span class="option-txt"><?= $row['J'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-d" name="LPJE<?= $index ?>" id="LPJE4<?= $index ?>" value="E" autocomplete="off">
                        <label class="btn btn-outline-primary choice-d-lbl" for="LPJE4<?= $index ?>">
                            <span class="option">D</span>
                            <span class="option-txt"><?= $row['E'] ?></span>
                        </label>
                    </div>
                </div>
            <?php
                $index = $index + 1;
            }
            ?>
            <?php
            $index = 25;
            foreach ($avk as $i => $row) {
            ?>
                <div class="avk-qstn avk-qstn<?= $index ?> d-none">
                    <h1 class="qstn-title mb-0"><?= $row['avk_question'] ?></h1>
                    <div class="btn-group qstn-choices" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check qstn-choice choice-a" name="AVK<?= $index ?>" id="AVK1<?= $index ?>" value="A" autocomplete="off">
                        <label class="btn btn-outline-primary choice-a-lbl" for="AVK1<?= $index ?>">
                            <span class="option">A</span>
                            <span class="option-txt"><?= $row['A'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-b" name="AVK<?= $index ?>" id="AVK2<?= $index ?>" value="B" autocomplete="off">
                        <label class="btn btn-outline-primary choice-b-lbl" for="AVK2<?= $index ?>">
                            <span class="option">B</span>
                            <span class="option-txt"><?= $row['V'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-c" name="AVK<?= $index ?>" id="AVK3<?= $index ?>" value="C" autocomplete="off">
                        <label class="btn btn-outline-primary choice-c-lbl" for="AVK3<?= $index ?>">
                            <span class="option">C</span>
                            <span class="option-txt"><?= $row['K'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-d" name="AVK<?= $index ?>" id="AVK4<?= $index ?>" value="D" autocomplete="off">
                        <label class="btn btn-outline-primary choice-d-lbl" for="AVK4<?= $index ?>">
                            <span class="option">D</span>
                            <span class="option-txt"><?= $row['D'] ?></span>
                        </label>
                    </div>
                </div>
            <?php
                $index = $index + 1;
            }
            ?>
            <?php
            $index = 30;
            foreach ($skill as $i => $row) {
            ?>
                <div class="skill-qstn skill-qstn<?= $index ?> d-none">
                    <h1 class="qstn-title mb-0"><?= $row['skill_question'] ?></h1>
                    <div class="btn-group qstn-choices" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check qstn-choice choice-a" name="SKILL<?= $index ?>" id="SKILL1<?= $index ?>" value="Beginner" autocomplete="off">
                        <label class="btn btn-outline-primary choice-a-lbl" for="SKILL1<?= $index ?>">
                            <span class="option">A</span>
                            <span class="option-txt"><?= $row['A'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-b" name="SKILL<?= $index ?>" id="SKILL2<?= $index ?>" value="Intermediate" autocomplete="off">
                        <label class="btn btn-outline-primary choice-b-lbl" for="SKILL2<?= $index ?>">
                            <span class="option">B</span>
                            <span class="option-txt"><?= $row['B'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-c" name="SKILL<?= $index ?>" id="SKILL3<?= $index ?>" value="Advance" autocomplete="off">
                        <label class="btn btn-outline-primary choice-c-lbl" for="SKILL3<?= $index ?>">
                            <span class="option">C</span>
                            <span class="option-txt"><?= $row['C'] ?></span>
                        </label>
                    </div>
                </div>
            <?php
                $index = $index + 1;
            }
            ?>
            <?php
            $index = 37;
            foreach ($aptitude as $i => $row) {
            ?>
                <div class="appt-qstn appt-qstn<?= $index ?> d-none">
                    <h1 class="qstn-title mb-0"><?= $row['apptquestion'] ?></h1>
                    <div class="btn-group qstn-choices" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check qstn-choice choice-a" name="APTITUDE<?= $index ?>" id="APTITUDE1<?= $index ?>" value="<?= $row['A_value'] ?>" autocomplete="off">
                        <label class="btn btn-outline-primary choice-a-lbl" for="APTITUDE1<?= $index ?>">
                            <span class="option">A</span>
                            <span class="option-txt"><?= $row['A'] ?></span>
                        </label>
                        <input type="radio" class="btn-check qstn-choice choice-b" name="APTITUDE<?= $index ?>" id="APTITUDE2<?= $index ?>" value="<?= $row['B_value'] ?>" autocomplete="off">
                        <label class="btn btn-outline-primary choice-b-lbl" for="APTITUDE2<?= $index ?>">
                            <span class="option">B</span>
                            <span class="option-txt"><?= $row['B'] ?></span>
                        </label>
                    </div>
                </div>
            <?php
                $index = $index + 1;
            }
            ?>
            <?php
            $index = 42;
            $gptquestions = explode('?', $gptquestions);
            foreach ($gptquestions as $i => $row) {
                $ques = trim($row);
                if ($index < 47) {
            ?>
                    <div class="disc-qstn disc-qstn<?= $index ?> d-none">
                        <h1 class="qstn-title mb-0"><?= $ques ?></h1>
                        <div class="btn-group qstn-choices" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check qstn-choice choice-a" name="GPT<?= $index ?>" id="GPT1<?= $index ?>" value="YES" autocomplete="off">
                            <label class="btn btn-outline-primary choice-a-lbl" for="GPT1<?= $index ?>">
                                <span class="option">A</span>
                                <span class="option-txt">YES</span>
                            </label>
                            <input type="radio" class="btn-check qstn-choice choice-b" name="GPT<?= $index ?>" id="GPT2<?= $index ?>" value="NO" autocomplete="off">
                            <label class="btn btn-outline-primary choice-b-lbl" for="GPT2<?= $index ?>">
                                <span class="option">B</span>
                                <span class="option-txt">NO</span>
                            </label>
                            <input type="radio" class="btn-check qstn-choice choice-c" name="GPT<?= $index ?>" id="GPT3<?= $index ?>" value="PARTIALLY" autocomplete="off">
                            <label class="btn btn-outline-primary choice-c-lbl" for="GPT3<?= $index ?>">
                                <span class="option">C</span>
                                <span class="option-txt">PARTIALLY</span>
                            </label>
                        </div>
                    </div>
            <?php
                    $index = $index + 1;
                }
            }
            ?>
            <div class="thanks-note d-none">
                <h1 class="pri-clr thanks-hdr py-4 py-xl-5">
                    Thank you for taking the time to complete our personality
                    assessment! We appreciate your effort that will help us
                    understand your unique strengths and abilities. We would now
                    like to invite you to take the next step by filling in your
                    personal information. This information is crucial in matching
                    you with the job vacancy available.
                </h1>
                <button class="btn profile-forms-btn assessment-next" type="submit">
                    Showcase Yourself
                </button>
            </div>
        </form>
    </div>
    <!-- ends::personality assessment -->
</div>
<!-- ends::profile tab -->
<?= $this->endSection() ?>