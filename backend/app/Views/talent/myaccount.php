<?= $this->extend("layouts/talent") ?>
<?= $this->section("body") ?>
<?php

use App\Models\AnswersModel;
use App\Models\BoughtModel;
use App\Models\CartModel;

$cartModel = new CartModel();
$boughtModel = new BoughtModel();
$answersModel = new AnswersModel();
?>
<!-- my account tab -->
<div class="data my-account-data">
    <div class="my-account-content d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="my-account-tab" role="tablist">
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="purchased-profiles-tab" data-bs-toggle="pill" data-bs-target="#purchased-profiles" type="button" role="tab" aria-controls="purchased-profiles" aria-selected="true">
                    purchased profiles
                </button>
            </li>
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link text-uppercase w-100" id="shortlisted-profiles-tab" data-bs-toggle="pill" data-bs-target="#shortlisted-profiles" type="button" role="tab" aria-controls="shortlisted-profiles" aria-selected="false">
                    shortlisted profiles
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase w-100" id="transactions-tab" data-bs-toggle="pill" data-bs-target="#transactions" type="button" role="tab" aria-controls="transactions" aria-selected="false">
                    transactions
                </button>
            </li>
        </ul>
        <div class="tab-content" id="my-account-tabContent">
            <div class="tab-pane fade show active" id="purchased-profiles" role="tabpanel" aria-labelledby="purchased-profiles-tab" tabindex="0">
                <div class="table-container purchased-profiles-table-container">
                    <div class="filters">
                        <div class="num-of-records d-flex align-items-center">
                            <label for="select-records" class="form-label me-1">
                                Show
                            </label>
                            <select id="select-records" class="form-select">
                                <option selected value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <div class="search d-flex align-items-center">
                            <label for="search-txt" class="form-label me-1">Search:</label>
                            <input type="text" class="form-control" id="search-txt" />
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">View Profile</th>
                                <th scope="col">Video</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($boughtDetails)) {
                                foreach ($boughtDetails as $index => $row) {
                            ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1 ?></th>
                                        <td><?= $row['user_email'] ?></td>
                                        <td><?= $row['date'] ?></td>
                                        <td>
                                            <?php
                                            $s = '';
                                            $s1 = '';
                                            $s2 = '';
                                            $s3 = '';
                                            if ($row['bought_type'] == "KIV") {
                                                $s1 = 'selected';
                                            } else if ($row['bought_type'] == "Selected for Interview") {
                                                $s2 = 'selected';
                                            } else if ($row['bought_type'] == "Hired") {
                                                $s3 = 'selected';
                                            } else {
                                                $s = 'selected';
                                            }
                                            ?>
                                            <select name="bought_type" id="bought_type" onchange="bought_type(this)">
                                                <option value=0 <?= $s ?>>--select--</option>
                                                <option value="<?= $row['tb_bought_id'] ?>@KIV" <?= $s1 ?>>KIV</option>
                                                <option value="<?= $row['tb_bought_id'] ?>@Selected for Interview" <?= $s2 ?>>Selected for Interview</option>
                                                <option value="<?= $row['tb_bought_id'] ?>@Hired" <?= $s3 ?>>Hired</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button class="btn view-prfl-btn">
                                                <a href="<?= site_url() ?>talent/hired_profile/<?= $row['candidate_id'] ?>" class="text-decoration-none text-white">view profile</a>
                                            </button>
                                        </td>
                                        <td>
                                            <?php
                                            $answerRow = $answersModel->where(array('user_id' => $row['candidate_id']))->findAll();
                                            if (!empty($answerRow)) {
                                            ?>
                                                <button class="btn vid-applicant-btn">
                                                    <a href="<?= site_url() ?>assets/<?= $answerRow[0]['answer_video'] ?>" target="_new" class="text-decoration-none">video applicant</a>
                                                </button>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="pagination-dets">
                        <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                            Showing <span class="top-record-num">1</span> to
                            <span class="bottom-record-num">10</span> of
                            <span class="total-records">23</span> entries
                        </p>
                        <nav aria-label="Page navigation">
                            <ul class="pagination flex-wrap">
                                <li class="page-item">
                                    <a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link active" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade shortlisted-profiles-tab-content" id="shortlisted-profiles" role="tabpanel" aria-labelledby="shortlisted-profiles-tab" tabindex="0">
                <div class="table-container shortlisted-profiles-table-container">
                    <div class="filters">
                        <div class="num-of-records d-flex align-items-center">
                            <label for="select-records" class="form-label me-1">
                                Show
                            </label>
                            <select id="select-records" class="form-select">
                                <option selected value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <div class="search d-flex align-items-center">
                            <label for="search-txt" class="form-label me-1">Search:</label>
                            <input type="text" class="form-control" id="search-txt" />
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User</th>
                                <th scope="col">Date</th>
                                <th scope="col">View Profile</th>
                                <th scope="col">Buy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($shortlistDetails)) {
                                foreach ($shortlistDetails as $index => $row) {
                                    $boughtRow = $boughtModel->where(array('candidate_id' => $row['candidate_id'], 'company_id' => $row['company_id'], 'status' => 1))->findAll();
                                    if (!empty($boughtRow)) {
                                        $cartRow = $cartModel->where(array('candidate_id' => $row['candidate_id'], 'company_id' => $row['company_id'], 'occ_id' => $row['occ_id'], 'status' => 1))->findAll();
                            ?>
                                        <tr>
                                            <th scope="row"><?= $index + 1 ?></th>
                                            <td><?= $row['candidate_email'] ?></td>
                                            <td><?= $row['created_t'] ?></td>
                                            <td>
                                                <button class="btn view-prfl-btn">
                                                    <a href="<?= site_url() ?>talent/hired_profile/<?= $row['candidate_id'] ?>" class="text-decoration-none text-white">view profile</a>
                                                </button>
                                            </td>
                                            <td>
                                                <?php
                                                if (!empty($cartRow)) {
                                                ?>
                                                    <button class="btn karya-btn remove-cart-btn">
                                                        <a href="<?= site_url() ?>talent/removeCart/<?= $cartRow[0]['tb_cart_id'] ?>" class="text-decoration-none">Remove Cart</a>
                                                    </button>
                                                <?php
                                                } else {
                                                ?>
                                                    <form class="" id="hiredform" action="<?= base_url('talent/addCart') ?>" method="post">
                                                        <input type="hidden" name="candidate_id" value="<?= $row['candidate_id'] ?>">
                                                        <input type="hidden" name="user_email" value="<?= $row['candidate_email'] ?>">
                                                        <input type="hidden" name="occ_id" value="<?= $row['occ_id'] ?>">
                                                        <button class="btn remove-cart-btn" type="submit">Add Cart</button>
                                                    </form>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="pagination-dets">
                        <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                            Showing <span class="top-record-num">1</span> to
                            <span class="bottom-record-num">5</span> of
                            <span class="total-records">5</span> entries
                        </p>
                        <nav aria-label="Page navigation">
                            <ul class="pagination flex-wrap">
                                <li class="page-item">
                                    <a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link active" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="transactions" role="tabpanel" aria-labelledby="transactions-tab" tabindex="0">
                <div class="table-container transactions-table-container">
                    <div class="filters">
                        <div class="num-of-records d-flex align-items-center">
                            <label for="select-records" class="form-label me-1">
                                Show
                            </label>
                            <select id="select-records" class="form-select">
                                <option selected value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <div class="search d-flex align-items-center">
                            <label for="search-txt" class="form-label me-1">Search:</label>
                            <input type="text" class="form-control" id="search-txt" />
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Date</th>
                                <th scope="col">Transaction Type</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($transactionsDetails)) {
                                foreach ($transactionsDetails as $index => $row) {
                                    $trans_type = $row['trans_type'];
                                    if ($trans_type == 1)
                                        $clr = 1;
                                    else
                                        $clr = 2;
                            ?>
                                    <tr class="<?= $clr == 1 ? 'credited-row' : 'debited-row' ?>">
                                        <th scope="row"><?= $index + 1 ?></th>
                                        <td><?= $row['trans_amount'] ?></td>
                                        <td><?= $row['created_at'] ?></td>
                                        <td>
                                            <?php
                                            if ($trans_type == 1)
                                                echo "Credited";
                                            else
                                                echo "Debited"; ?>
                                        </td>
                                        <td><?= $row['trans_reason'] ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="pagination-dets">
                        <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                            Showing <span class="top-record-num">1</span> to
                            <span class="bottom-record-num">6</span> of
                            <span class="total-records">6</span> entries
                        </p>
                        <nav aria-label="Page navigation">
                            <ul class="pagination flex-wrap">
                                <li class="page-item">
                                    <a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link active" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion profile-accordion my-account-accordion mobile-only" id="my-account-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="purchase-profiles-hdr">
                <button class="accordion-button text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#purchase-profiles-collapse" aria-expanded="true" aria-controls="purchase-profiles-collapse">
                    purchase profiles
                </button>
            </h2>
            <div id="purchase-profiles-collapse" class="accordion-collapse collapse show" aria-labelledby="purchase-profiles-hdr" data-bs-parent="#my-account-accordion">
                <div class="accordion-body p-0">
                    <div class="table-container purchased-profiles-table-container">
                        <div class="filters">
                            <div class="num-of-records d-flex align-items-center">
                                <label for="select-records" class="form-label me-1">
                                    Show
                                </label>
                                <select id="select-records" class="form-select">
                                    <option selected value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <div class="search d-flex align-items-center">
                                <label for="search-txt" class="form-label me-1">Search:</label>
                                <input type="text" class="form-control" id="search-txt" />
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">View Profile</th>
                                    <th scope="col">Video</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($boughtDetails)) {
                                    foreach ($boughtDetails as $index => $row) {
                                ?>
                                        <tr>
                                            <th scope="row"><?= $index + 1 ?></th>
                                            <td><?= $row['user_email'] ?></td>
                                            <td><?= $row['date'] ?></td>
                                            <td>
                                                <?php
                                                $s = '';
                                                $s1 = '';
                                                $s2 = '';
                                                $s3 = '';
                                                if ($row['bought_type'] == "KIV") {
                                                    $s1 = 'selected';
                                                } else if ($row['bought_type'] == "Selected for Interview") {
                                                    $s2 = 'selected';
                                                } else if ($row['bought_type'] == "Hired") {
                                                    $s3 = 'selected';
                                                } else {
                                                    $s = 'selected';
                                                }
                                                ?>
                                                <select name="bought_type" id="bought_type" onchange="bought_type(this)">
                                                    <option value=0 <?= $s ?>>--select--</option>
                                                    <option value="<?= $row['tb_bought_id'] ?>@KIV" <?= $s1 ?>>KIV</option>
                                                    <option value="<?= $row['tb_bought_id'] ?>@Selected for Interview" <?= $s2 ?>>Selected for Interview</option>
                                                    <option value="<?= $row['tb_bought_id'] ?>@Hired" <?= $s3 ?>>Hired</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button class="btn view-prfl-btn">
                                                    <a href="<?= site_url() ?>talent/hired_profile/<?= $row['candidate_id'] ?>" class="text-decoration-none text-white">view profile</a>
                                                </button>
                                            </td>
                                            <td>
                                                <?php
                                                $answerRow = $answersModel->where(array('user_id' => $row['candidate_id']))->findAll();
                                                if (!empty($answerRow)) {
                                                ?>
                                                    <button class="btn vid-applicant-btn">
                                                        <a href="<?= site_url() ?>assets/<?= $answerRow[0]['answer_video'] ?>" target="_new" class="text-decoration-none">video applicant</a>
                                                    </button>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="pagination-dets">
                            <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                                Showing <span class="top-record-num">1</span> to
                                <span class="bottom-record-num">10</span> of
                                <span class="total-records">23</span> entries
                            </p>
                            <nav aria-label="Page navigation">
                                <ul class="pagination flex-wrap">
                                    <li class="page-item">
                                        <a class="page-link" href="#">Previous</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link active" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="shorlisted-profiles-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#shorlisted-profiles-collapse" aria-expanded="false" aria-controls="shorlisted-profiles-collapse">
                    shorlisted profiles
                </button>
            </h2>
            <div id="shorlisted-profiles-collapse" class="accordion-collapse collapse" aria-labelledby="shorlisted-profiles-hdr" data-bs-parent="#my-account-accordion">
                <div class="accordion-body p-0">
                    <div class="table-container shortlisted-profiles-table-container">
                        <div class="filters">
                            <div class="num-of-records d-flex align-items-center">
                                <label for="select-records" class="form-label me-1">
                                    Show
                                </label>
                                <select id="select-records" class="form-select">
                                    <option selected value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <div class="search d-flex align-items-center">
                                <label for="search-txt" class="form-label me-1">Search:</label>
                                <input type="text" class="form-control" id="search-txt" />
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">View Profile</th>
                                    <th scope="col">Buy</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($shortlistDetails)) {
                                    foreach ($shortlistDetails as $index => $row) {
                                        $boughtRow = $boughtModel->where(array('candidate_id' => $row['candidate_id'], 'company_id' => $row['company_id'], 'status' => 1))->findAll();
                                        if (!empty($boughtRow)) {
                                            $cartRow = $cartModel->where(array('candidate_id' => $row['candidate_id'], 'company_id' => $row['company_id'], 'occ_id' => $row['occ_id'], 'status' => 1))->findAll();
                                ?>
                                            <tr>
                                                <th scope="row"><?= $index + 1 ?></th>
                                                <td><?= $row['candidate_email'] ?></td>
                                                <td><?= $row['created_t'] ?></td>
                                                <td>
                                                    <button class="btn view-prfl-btn">
                                                        <a href="<?= site_url() ?>talent/hired_profile/<?= $row['candidate_id'] ?>" class="text-decoration-none text-white">view profile</a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <?php
                                                    if (!empty($cartRow)) {
                                                    ?>
                                                        <button class="btn karya-btn remove-cart-btn">
                                                            <a href="<?= site_url() ?>talent/removeCart/<?= $cartRow[0]['tb_cart_id'] ?>" class="text-decoration-none">Remove Cart</a>
                                                        </button>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <form class="" id="hiredform" action="<?= base_url('talent/addCart') ?>" method="post">
                                                            <input type="hidden" name="candidate_id" value="<?= $row['candidate_id'] ?>">
                                                            <input type="hidden" name="user_email" value="<?= $row['candidate_email'] ?>">
                                                            <input type="hidden" name="occ_id" value="<?= $row['occ_id'] ?>">
                                                            <button class="btn remove-cart-btn" type="submit">Add Cart</button>
                                                        </form>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                <?php
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="pagination-dets">
                            <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                                Showing <span class="top-record-num">1</span> to
                                <span class="bottom-record-num">5</span> of
                                <span class="total-records">5</span> entries
                            </p>
                            <nav aria-label="Page navigation">
                                <ul class="pagination flex-wrap">
                                    <li class="page-item">
                                        <a class="page-link" href="#">Previous</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link active" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="transactions-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#transactions-collapse" aria-expanded="false" aria-controls="transactions-collapse">
                    transactions
                </button>
            </h2>
            <div id="transactions-collapse" class="accordion-collapse collapse" aria-labelledby="transactions-hdr" data-bs-parent="#my-account-accordion">
                <div class="accordion-body p-0">
                    <div class="table-container transactions-table-container">
                        <div class="filters">
                            <div class="num-of-records d-flex align-items-center">
                                <label for="select-records" class="form-label me-1">
                                    Show
                                </label>
                                <select id="select-records" class="form-select">
                                    <option selected value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <div class="search d-flex align-items-center">
                                <label for="search-txt" class="form-label me-1">Search:</label>
                                <input type="text" class="form-control" id="search-txt" />
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Transaction Type</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($transactionsDetails)) {
                                    foreach ($transactionsDetails as $index => $row) {
                                        $trans_type = $row['trans_type'];
                                        if ($trans_type == 1)
                                            $clr = 1;
                                        else
                                            $clr = 2;
                                ?>
                                        <tr class="<?= $clr == 1 ? 'credited-row' : 'debited-row' ?>">
                                            <th scope="row"><?= $index + 1 ?></th>
                                            <td><?= $row['trans_amount'] ?></td>
                                            <td><?= $row['created_at'] ?></td>
                                            <td>
                                                <?php
                                                if ($trans_type == 1)
                                                    echo "Credited";
                                                else
                                                    echo "Debited"; ?>
                                            </td>
                                            <td><?= $row['trans_reason'] ?></td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="pagination-dets">
                            <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                                Showing <span class="top-record-num">1</span> to
                                <span class="bottom-record-num">6</span> of
                                <span class="total-records">6</span> entries
                            </p>
                            <nav aria-label="Page navigation">
                                <ul class="pagination flex-wrap">
                                    <li class="page-item">
                                        <a class="page-link" href="#">Previous</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link active" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ends::my account tab -->
<?= $this->endSection() ?>