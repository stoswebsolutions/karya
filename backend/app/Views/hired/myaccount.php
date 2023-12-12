<?= $this->extend("layouts/hired") ?>
<?= $this->section("body") ?>
<?php

use App\Models\OccupationsModel;
use App\Models\CoursemanagementModel;
use App\Models\CompanyrequirementsModel;

$occupationsModel = new OccupationsModel();
$coursemanagementModel = new CoursemanagementModel();
$companyrequirementsModel = new CompanyrequirementsModel();

if (isset($css) && $css != NULL) {
    foreach ($css as $cs) {
        echo '<link href="' . $cs . '" rel="stylesheet" type="text/css" />';
    }
}
?>
<!-- my account tab -->
<div class="data my-account-data">
    <div class="my-account d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="my-account-tab" role="tablist">
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="profile-views-tab" data-bs-toggle="pill" data-bs-target="#profile-views" type="button" role="tab" aria-controls="profile-views" aria-selected="true">
                    profile views
                </button>
            </li>
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link text-uppercase w-100" id="job-applications-tab" data-bs-toggle="pill" data-bs-target="#job-applications" type="button" role="tab" aria-controls="job-applications" aria-selected="false">
                    job applications
                </button>
            </li>
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link text-uppercase w-100" id="profiles-sold-tab" data-bs-toggle="pill" data-bs-target="#profiles-sold" type="button" role="tab" aria-controls="profiles-sold" aria-selected="false">
                    profiles sold
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase w-100" id="share-profile-tab" data-bs-toggle="pill" data-bs-target="#share-profile" type="button" role="tab" aria-controls="share-profile" aria-selected="false">
                    share profile
                </button>
            </li>
        </ul>
        <div class="tab-content" id="my-account-tabContent">
            <div class="tab-pane fade show active" id="profile-views" role="tabpanel" aria-labelledby="profile-views-tab" tabindex="0">
                <table id="profile-views-table" class="table table-sm table-striped table-hover table-bordered p-1" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Viewer</th>
                            <th scope="col">Total</th>
                            <th scope="col">Date</th>
                            <th scope="col">View Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($profileViews as $index => $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= $index + 1 ?></th>
                                <td><?= $row['viewer_name'] ?></td>
                                <td><?= $row['total'] ?></td>
                                <td><?= $row['created_date'] ?></td>
                                <td><?= $row['viewer_name'] == 'Public' ? 'No detail available' : 'View' ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Viewer</th>
                            <th scope="col">Total</th>
                            <th scope="col">Date</th>
                            <th scope="col">View Profile</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="tab-pane fade job-applications-tab-content" id="job-applications" role="tabpanel" aria-labelledby="job-applications-tab" tabindex="0">
                <table id="job-applications-table" class="table table-sm table-striped table-hover table-bordered p-1" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Role</th>
                            <th scope="col">Applied On</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($jobApplications as $index => $row) {
                            $course = $coursemanagementModel->where('id', $row['cat_id'])->first();
                            $occupations = $occupationsModel->where('occ_id', $row['role_id'])->first();
                            $company = $companyrequirementsModel->where('id', $row['job_id'])->first();
                        ?>
                            <tr>
                                <th scope="row"><?= $index + 1 ?></th>
                                <td><?= !empty($course) ? $course['courseName'] : '' ?></td>
                                <td><?= !empty($occupations) ? $occupations['occ_role'] : '' ?></td>
                                <td><?= !empty($company) ? $company['job_title'] : '' ?></td>
                                <td><?= $row['applied_on'] ?></td>
                                <td><?= $row['app_status'] == 'A' ? "Applied" : "Expired" ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Role</th>
                            <th scope="col">Applied On</th>
                            <th scope="col">Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="tab-pane fade" id="profiles-sold" role="tabpanel" aria-labelledby="profiles-sold-tab" tabindex="0">
                <table id="profiles-sold-table" class="table table-sm table-striped table-hover table-bordered p-1" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Price</th>
                            <th scope="col">Fee Paid</th>
                            <th scope="col">Net Earning</th>
                            <th scope="col">Status</th>
                            <th scope="col">View Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($profileSold as $index => $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= $index + 1 ?></th>
                                <td><?= $row['company_name'] ?></td>
                                <td><?= $row['date'] ?></td>
                                <td>RM<?= $row['earning'] ?></td>
                                <td>RM10</td>
                                <td>RM<?= $row['earning'] - 10 ?></td>
                                <td><?= $row['transfered'] == 0 ? "Processing" : "Transfered to Bank Account" ?></td>
                                <td>
                                    <span class="view-profile">view profile</span>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Price</th>
                            <th scope="col">Fee Paid</th>
                            <th scope="col">Net Earning</th>
                            <th scope="col">Status</th>
                            <th scope="col">View Profile</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="tab-pane fade" id="share-profile" role="tabpanel" aria-labelledby="share-profile" tabindex="0">
                <h1 class="share-profile-hdr">
                    Share your profile anytime, anywhere!
                </h1>
                <div class="input-group mb-2 share-profile-srch">
                    <span class="input-group-text bg-white" id="">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control">
                </div>
                <div class="social-accounts">
                    <div class="row m-0 gy-2">
                        <div class="col-sm-4 col-lg-3">
                            <div class="account">
                                <span class="icon me-1">
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                </span>
                                <span class="type"> Facebook</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-3">
                            <div class="account">
                                <span class="icon me-1">
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                </span>
                                <span class="type"> Twitter</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-3">
                            <div class="account">
                                <span class="icon me-1">
                                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                </span>
                                <span class="type"> LinkedIn</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-3">
                            <div class="account">
                                <span class="icon me-1">
                                    <i class="fa fa-tumblr-square" aria-hidden="true"></i>
                                </span>
                                <span class="type"> Tumblr</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-3">
                            <div class="account">
                                <span class="icon me-1">
                                    <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                                </span>
                                <span class="type"> Pinterest</span>
                            </div>
                        </div>
                    </div>
                    <div class="add-more d-flex align-items-center justify-content-center mt-3">
                        <div class="add-icon d-flex align-items-center justify-content-center">
                            <span class="icon me-1">
                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                            </span>
                            <span class="addTxt">AddToAny</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion profile-accordion my-account-accordion mobile-only" id="my-account-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="profile-views-hdr">
                <button class="accordion-button text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#profile-views-collapse" aria-expanded="true" aria-controls="profile-views-collapse">
                    profile views
                </button>
            </h2>
            <div id="profile-views-collapse" class="accordion-collapse collapse show" aria-labelledby="profile-views-hdr" data-bs-parent="#my-account-accordion">
                <div class="accordion-body p-0">
                    <div class="table-container">
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
                                <label for="search-txt" class="form-label me-1">Search:
                                </label>
                                <input type="text" class="form-control" id="search-txt">
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Viewer</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">View Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($profileViews as $index => $row) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1 ?></th>
                                        <td><?= $row['viewer_name'] ?></td>
                                        <td><?= $row['total'] ?></td>
                                        <td><?= $row['created_date'] ?></td>
                                        <td><?= $row['viewer_name'] == 'Public' ? 'No detail available' : 'View' ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="pagination-dets">
                            <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                                Showing
                                <span class="top-record-num">1</span>
                                to
                                <span class="bottom-record-num">10</span>
                                of
                                <span class="total-records">445</span>
                                entries
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
                                        <a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">...</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">45</a>
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
            <h2 class="accordion-header" id="job-applications-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#job-applications-collapse" aria-expanded="false" aria-controls="job-applications-collapse">
                    job applications
                </button>
            </h2>
            <div id="job-applications-collapse" class="accordion-collapse collapse" aria-labelledby="job-applications-hdr" data-bs-parent="#my-account-accordion">
                <div class="accordion-body p-0">
                    <div class="table-container">
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
                                <label for="search-txt" class="form-label me-1">Search:
                                </label>
                                <input type="text" class="form-control" id="search-txt">
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Applied On</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($jobApplications as $index => $row) {
                                    $course = $coursemanagementModel->where('id', $row['cat_id'])->first();
                                    $occupations = $occupationsModel->where('occ_id', $row['role_id'])->first();
                                    $company = $companyrequirementsModel->where('id', $row['job_id'])->first();
                                ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1 ?></th>
                                        <td><?= !empty($course) ? $course['courseName'] : '' ?></td>
                                        <td><?= !empty($occupations) ? $occupations['occ_role'] : '' ?></td>
                                        <td><?= !empty($company) ? $company['job_title'] : '' ?></td>
                                        <td><?= $row['applied_on'] ?></td>
                                        <td><?= $row['app_status'] == 'A' ? "Applied" : "Expired" ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="pagination-dets">
                            <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                                Showing
                                <span class="top-record-num">1</span>
                                to
                                <span class="bottom-record-num">10</span>
                                of
                                <span class="total-records">17</span>
                                entries
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
            <h2 class="accordion-header" id="profiles-sold-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#profiles-sold-collapse" aria-expanded="false" aria-controls="profiles-sold-collapse">
                    profiles sold
                </button>
            </h2>
            <div id="profiles-sold-collapse" class="accordion-collapse collapse" aria-labelledby="profiles-sold-hdr" data-bs-parent="#my-account-accordion">
                <div class="accordion-body p-0">
                    <div class="table-container">
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
                                <label for="search-txt" class="form-label me-1">Search:
                                </label>
                                <input type="text" class="form-control" id="search-txt">
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Fee Paid</th>
                                    <th scope="col">Net Earning</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">View Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($profileSold as $index => $row) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1 ?></th>
                                        <td><?= $row['company_name'] ?></td>
                                        <td><?= $row['date'] ?></td>
                                        <td>RM<?= $row['earning'] ?></td>
                                        <td>RM10</td>
                                        <td>RM<?= $row['earning'] - 10 ?></td>
                                        <td><?= $row['transfered'] == 0 ? "Processing" : "Transfered to Bank Account" ?></td>
                                        <td>
                                            <span class="view-profile">view profile</span>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="pagination-dets">
                            <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                                Showing
                                <span class="top-record-num">1</span>
                                to
                                <span class="bottom-record-num">10</span>
                                of
                                <span class="total-records">31</span>
                                entries
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
                                        <a class="page-link" href="#">4</a>
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
            <h2 class="accordion-header" id="share-profile-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#share-profile-collapse" aria-expanded="false" aria-controls="share-profile-collapse">
                    share profile
                </button>
            </h2>
            <div id="share-profile-collapse" class="accordion-collapse collapse" aria-labelledby="share-profile-hdr" data-bs-parent="#my-account-accordion">
                <div class="accordion-body p-1">
                    <h1 class="share-profile-hdr">
                        Share your profile anytime, anywhere!
                    </h1>
                    <div class="input-group mb-2 share-profile-srch">
                        <span class="input-group-text bg-white" id="">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control">
                    </div>
                    <div class="social-accounts">
                        <div class="row m-0 gy-2">
                            <div class="col-6">
                                <div class="account">
                                    <span class="icon me-1">
                                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                    </span>
                                    <span class="type"> Facebook</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="account">
                                    <span class="icon me-1">
                                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                    </span>
                                    <span class="type"> Twitter</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="account">
                                    <span class="icon me-1">
                                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                    </span>
                                    <span class="type"> LinkedIn</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="account">
                                    <span class="icon me-1">
                                        <i class="fa fa-tumblr-square" aria-hidden="true"></i>
                                    </span>
                                    <span class="type"> Tumblr</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="account">
                                    <span class="icon me-1">
                                        <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                                    </span>
                                    <span class="type"> Pinterest</span>
                                </div>
                            </div>
                        </div>
                        <div class="add-more d-flex align-items-center justify-content-center mt-2 mt-sm-3">
                            <div class="add-icon d-flex align-items-center justify-content-center">
                                <span class="icon me-1">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                </span>
                                <span class="addTxt">AddToAny</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ends::my account tab -->
<?php
if (isset($js) && $js != NULL) {
    foreach ($js as $j) {
        echo '<script src="' . $j . '"></script>';
    }
}
?>
<script>
    new DataTable('#profile-views-table');
    new DataTable('#job-applications-table');
    new DataTable('#profiles-sold-table');
</script>
<?= $this->endSection() ?>