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
            <div class="personality-assessment completed position-relative">
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
    <!-- upload video pitch -->
    <div class="upload-video-pitch-section">
        <form class="" id="" action="<?= base_url('hired/gptquestionSubmit') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row">
                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php elseif (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>
            </div>
            <div class="row gx-0">
                <div class="col-12 col-lg-12">
                    <?php
                    $search1 = "any 5 questions on " . $target_career . " and with yes/no answers only";
                    $data = array(
                        "model" => "gpt-3.5-turbo",
                        "messages" => [
                            [
                                "role" => "system",
                                "content" => "You are a helpful assistant."
                            ],
                            [
                                "role" => "user",
                                "content" => $search1
                            ]
                        ],
                        "temperature" => 0.9,
                        "max_tokens" => 150,
                        "top_p" => 1,
                        "frequency_penalty" => 0,
                        "presence_penalty" => 0.6,
                        "stop" => [" Human:", " AI:"]
                    );

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

                    $headers = array();
                    $headers[] = 'Content-Type: application/json';
                    $headers[] = 'Authorization: Bearer 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';
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                    $response = curl_exec($ch);
                    if (curl_errno($ch)) {
                        echo 'Error:' . curl_error($ch);
                    }
                    foreach (json_decode($response) as $key => $value) {
                        if ($key == "choices") {
                            $choices = $value;
                            $questions = explode('?', $choices[0]->message->content);
                            foreach ($questions as $ques) {
                                $ques = trim($ques);
                    ?>
                                <p><strong><?= $ques ?></strong></p>
                    <?php
                            }
                        }
                    }
                    curl_close($ch);
                    ?>
                </div>
            </div>
            <div class="to-fro-btns">
                <a href="<?= site_url() ?>hired/interviewPrep" class="btn back-btn upload-video-back"> Go Back </a>
                <button class="btn next-btn interview-prep-next" type="submit">Next</button>
            </div>
        </form>
    </div>
    <!-- ends::upload video pitch -->
</div>
<!-- ends::profile tab -->
<?= $this->endSection() ?>