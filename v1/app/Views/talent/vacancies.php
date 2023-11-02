<?= $this->extend("layouts/talent") ?>
<?= $this->section("body") ?>
<!-- vacancies tab -->
<div class="data vacancies-data">
    <div class="vacancies-content d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="vacancies-tab" role="tablist">
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="post-jobs-tab" data-bs-toggle="pill" data-bs-target="#post-jobs" type="button" role="tab" aria-controls="post-jobs" aria-selected="true">
                    post jobs
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase w-100" id="all-postings-tab" data-bs-toggle="pill" data-bs-target="#all-postings" type="button" role="tab" aria-controls="all-postings" aria-selected="false">
                    all job postings
                </button>
            </li>
        </ul>
        <div class="tab-content" id="vacancies-tabContent">
            <div class="tab-pane fade show active" id="post-jobs" role="tabpanel" aria-labelledby="post-jobs-tab" tabindex="0">
                <!-- input forms -->
                <div class="input-forms bg-white p-2">
                    <div class="basic-dets">
                        <h1 class="title">Basic Details</h1>
                        <form action="">
                            <div class="row gx-3">
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                                        <select id="relocate" class="form-select relocate-slct">
                                            <option selected disabled>
                                                Candidate must be willing to relocate to a
                                                different city
                                            </option>
                                            <option value="y">Yes</option>
                                            <option value="n">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                                        <select id="emp-position" class="form-select position-slct">
                                            <option selected disabled>
                                                Candidate most recent employment position
                                            </option>
                                            <option value="p1">Position 1</option>
                                            <option value="p2">Poition 2</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                                        <select id="edu-level" class="form-select edu-slct">
                                            <option selected disabled>
                                                Candidate highest level of education
                                            </option>
                                            <option value="e1">Edu 1</option>
                                            <option value="e2">Edu 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                                        <select id="work-exp" class="form-select exp-slct">
                                            <option selected disabled>
                                                Candidate's year of work experience
                                            </option>
                                            <option value="ex1">Exp 1</option>
                                            <option value="ex2">Exp 2</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                                        <select id="work-beyond" class="form-select beyond-slct">
                                            <option selected disabled>
                                                Will you prefer candidate that is willing to
                                                work beyond working hours
                                            </option>
                                            <option value="y">Yes</option>
                                            <option value="n">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                                        <select id="perform" class="form-select perform-slct">
                                            <option selected disabled>
                                                Will you prefer a candidate that is willing to
                                                perform
                                            </option>
                                            <option value="y">Yes</option>
                                            <option value="n">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                                        <select id="job-function" class="form-select job-function-slct">
                                            <option selected disabled>
                                                What kind of job function category are you
                                                offering?
                                            </option>
                                            <option value="f1">Function 1</option>
                                            <option value="f2">Function 2</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="input-group input-group-sm d-flex flex-column">
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-text bg-transparent pe-0 input-icon">
                                                <i class="fa fa-comments" aria-hidden="true"></i>
                                            </span>
                                            <textarea class="form-control border-start-0 skills-text" placeholder="Skills List" rows="1"></textarea>
                                        </div>

                                        <div class="info-txt">
                                            Please mention Skill name with comma(,)
                                            seperated
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="job-specs pt-3">
                        <h1 class="title">Job Specifications</h1>
                        <form action="">
                            <div class="row gx-3">
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3 flex-column">
                                        <label for="" class="form-label mb-0">Job Title</label>
                                        <input type="text" class="form-control job-title w-100" placeholder="Job Title" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3 flex-column">
                                        <label for="" class="form-label mb-0">Number of Positions</label>
                                        <input type="number" class="form-control job-positions w-100" placeholder="Number of Positions" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3 flex-column">
                                        <label for="" class="form-label mb-0">Short Description</label>
                                        <input type="number" class="form-control job-desc w-100" placeholder="Short Description" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3 flex-column">
                                        <label for="" class="form-label mb-0">Expiry Date</label>
                                        <input type="date" class="form-control exp-date w-100" placeholder="" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3 flex-column">
                                        <label for="" class="form-label mb-0">City</label>
                                        <input type="text" class="form-control pref-city w-100" placeholder="Preferred City" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3 flex-column">
                                        <label for="" class="form-label mb-0">Country</label>
                                        <input type="text" class="form-control pref-country w-100" placeholder="Preferred Country" />
                                    </div>
                                </div>

                                <div class="col-1">
                                    <div class="d-flex">
                                        <label for="" class="form-label mb-2 mb-sm-3">Job Type</label>
                                    </div>
                                </div>
                                <div class="col-11">
                                    <div class="radio-options mb-2 mb-sm-3">
                                        <div class="radio-input d-flex align-items-center">
                                            <input class="form-check-input mt-0 me-1" type="radio" name="job-type" id="ft" />
                                            <label class="form-check-label mb-0" for="ft">
                                                Full Time
                                            </label>
                                        </div>
                                        <div class="radio-input d-flex align-items-center">
                                            <input class="form-check-input mt-0 me-1" type="radio" name="job-type" id="pt" />
                                            <label class="form-check-label mb-0" for="pt">
                                                Part Time
                                            </label>
                                        </div>
                                        <div class="radio-input d-flex align-items-center">
                                            <input class="form-check-input mt-0 me-1" type="radio" name="job-type" id="intern" />
                                            <label class="form-check-label mb-0" for="intern">
                                                Internship
                                            </label>
                                        </div>
                                        <div class="radio-input d-flex align-items-center">
                                            <input class="form-check-input mt-0 me-1" type="radio" name="job-type" id="temp" />
                                            <label class="form-check-label mb-0" for="temp">
                                                Temporary
                                            </label>
                                        </div>
                                        <div class="radio-input d-flex align-items-center">
                                            <input class="form-check-input mt-0 me-1" type="radio" name="job-type" id="freelance" />
                                            <label class="form-check-label mb-0" for="freelance">
                                                Freelance
                                            </label>
                                        </div>
                                        <div class="radio-input d-flex align-items-center">
                                            <input class="form-check-input mt-0 me-1" type="radio" name="job-type" id="remote" />
                                            <label class="form-check-label mb-0" for="remote">
                                                Remote
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm flex-column mb-2 mb-sm-3">
                                        <label for="" class="form-label mb-0">Salary Range</label>
                                        <input type="number" class="form-control range-from w-100" placeholder="Range From" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm flex-column mb-2 mb-sm-3">
                                        <label for="" class="form-label mb-0">To</label>
                                        <input type="number" class="form-control range-to w-100" placeholder="Range To" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="generate-btn-container d-flex justify-content-center">
                        <button class="btn get-talent-btn">
                            generate ai job posting
                        </button>
                    </div>
                </div>
                <!-- ends::input forms -->
                <br />
                <!-- generated output -->
                <div class="ai-generated-posting p-2">
                    <div class="row gx-3">
                        <div class="col-8">
                            <div class="generated-card mb-3">
                                <span class="label mb-1"> Job Title </span>
                                <p class="desc mb-0 p-2">Senior Product Designer</p>
                            </div>
                            <div class="generated-card mb-3">
                                <span class="label mb-1"> Job Description </span>
                                <p class="desc mb-0 p-2">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book.
                                </p>
                            </div>
                            <div class="generated-card">
                                <span class="label mb-1"> Responsibilities </span>
                                <p class="desc mb-0 p-2">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text.
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="job-dets-card p-2 h-100">
                                <span class="main-label label mb-3 d-block">
                                    Job Details
                                </span>
                                <span class="label"> Job Creation Date </span>
                                <p class="desc mb-2">1<sup>st</sup> May 2023</p>
                                <span class="label"> Position Available </span>
                                <p class="desc mb-2">3</p>
                                <span class="label"> Experience Required </span>
                                <p class="desc mb-2">5 Years</p>
                                <span class="label"> Location </span>
                                <p class="desc mb-2">Kuala Lumpur</p>
                                <span class="label"> Salary </span>
                                <p class="desc mb-0">RM10,000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends::generated output -->
                <br />
                <!-- video job qstns -->
                <div class="video-job-qstns bg-white p-2">
                    <h1 class="title">Video Job Interview Questions</h1>
                    <div class="row gx-1 m-0">
                        <div class="col-12 col-sm-6">
                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                <input type="text" class="form-control qstn" value="What are your strengths?" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                <input type="text" class="form-control strengths-ansr" />
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                <input type="text" class="form-control qstn" value="Are you an effective leader? State past experiences." />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                <input type="text" class="form-control past-exp-ansr" />
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                <input type="text" class="form-control qstn" value="How do you contribute to this role you are applying to?" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                <input type="text" class="form-control contribute-ansr" />
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                <input type="text" class="form-control qstn" value="What do you do in your spare time?" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                <input type="text" class="form-control spare-ansr" />
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                <input type="text" class="form-control qstn" value="How do you overcome pressure and stress?" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                <input type="text" class="form-control stress-ansr" />
                            </div>
                        </div>
                    </div>
                    <div class="row gx-2 m-0">
                        <div class="col-12 col-sm-6">
                            <h1 class="title job-post-title">
                                Your Video Job Post
                            </h1>
                            <p class="info mb-0 p-2">
                                A video job post is a video-based overview of the role
                                and its responsibilities, but it can also go further.
                                Your unique, branded video job description may
                                showcase your workplace, team and culture.
                            </p>
                            <div class="publish-post d-flex justify-content-center pt-sm-4 pt-md-2 pt-lg-5">
                                <button class="btn get-talent-btn">
                                    publish job posting
                                </button>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <video controls class="w-100 hoverable">
                                <source src="<?= site_url() ?>app-assets/images/video.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                            <input type="file" class="form-control" id="video-job-post-file-upload" />
                            <div class="note">Allowed &lt; 30 MB size Video</div>
                        </div>
                    </div>
                </div>
                <!-- ends::video job qstns -->
            </div>
            <div class="tab-pane fade" id="all-postings" role="tabpanel" aria-labelledby="all-postings-tab" tabindex="0">
                <div class="table-container get-talent-table-container">
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
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Role</th>
                                <th scope="col">Experience</th>
                                <th scope="col">Positions</th>
                                <th scope="col">Created Date</th>
                                <th scope="col">Expires Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Applicants</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($jobDetails)) {
                                foreach ($jobDetails as $index => $row) {
                                    $course = $coursemanagementModel->where(array("id" => $row['cat_id']))->first();
                                    $occupation = $occupationsModel->where(array("occ_id" => $row['role_id']))->first();
                            ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1 ?></th>
                                        <td><?= $row['job_title'] ?></td>
                                        <td><?= @$course['courseName'] ?></td>
                                        <td><?= @$occupation['occ_role'] ?></td>
                                        <td><?= $row['totalExperience'] ?></td>
                                        <td><?= $row['pos_no'] ?></td>
                                        <td><?= $row['createdAt'] ?></td>
                                        <td><?= $row['expiry_date'] ?></td>
                                        <td>
                                            <?php
                                            $date_now = date("Y-m-d");
                                            $st = '';
                                            if ($date_now <= $row['expiry_date']) {
                                                $st = $row['post_status'];
                                                if ($st == 'A'){
                                                    ?><button type="button" class="btn  btn-sm btn-success">Active</button><?php
                                                }
                                                else{
                                                    ?><button type="button" class="btn btn-sm btn-danger">Expired</button><?php
                                                }
                                            }
                                            else{
                                                ?><button type="button" class="btn btn-sm btn-danger">Expired</button><?php
                                            }
                                            ?>
                                        </td>
                                        <td><button type="button" class="btn btn-sm btn-info" onclick="javascript: location.href='<?php echo base_url('CompanyRequirement/viewjobapplicants/' . $row['id']); ?>';">View</button></td>
                                        <td>
                                            <?php
                                            if ($st == 'A') {
                                                ?><a title="Status is active please click to make expire" href="<?php echo base_url('CompanyRequirement/inactivate/' . $row['id']); ?>"><i class="fa fa-check" aria-hidden="true"></i></a><?php
                                            }
                                            else{
                                                ?><a title="Status is expired please click to make active" href="<?php echo base_url('CompanyRequirement/activate/' . $row['id']); ?>"><i class="fa fa-times" aria-hidden="true"></i></a><?php
                                            }
                                            ?>
                                            <a href="<?php echo base_url('CompanyRequirement/updatejobpost/' . base64_encode($row['id'])); ?>"><i class="fa fa-pencil"></i></a>
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
    <div class="accordion profile-accordion vacancies-accordion mobile-only" id="vacancies-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="post-jobs-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#post-jobs-collapse" aria-expanded="false" aria-controls="post-jobs-collapse">
                    post jobs
                </button>
            </h2>
            <div id="post-jobs-collapse" class="accordion-collapse collapse" aria-labelledby="post-jobs-hdr" data-bs-parent="#vacancies-accordion">
                <div class="accordion-body p-2">
                    <div class="vacancies-content">
                        <!-- input forms -->
                        <div class="input-forms">
                            <div class="basic-dets">
                                <h1 class="title">Basic Details</h1>
                                <form action="">
                                    <div class="row gx-3">
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                                <select id="relocate" class="form-select relocate-slct">
                                                    <option selected disabled>
                                                        Candidate must be willing to relocate to a
                                                        different city
                                                    </option>
                                                    <option value="y">Yes</option>
                                                    <option value="n">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                                <select id="emp-position" class="form-select position-slct">
                                                    <option selected disabled>
                                                        Candidate most recent employment position
                                                    </option>
                                                    <option value="p1">Position 1</option>
                                                    <option value="p2">Poition 2</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                                <select id="edu-level" class="form-select edu-slct">
                                                    <option selected disabled>
                                                        Candidate highest level of education
                                                    </option>
                                                    <option value="e1">Edu 1</option>
                                                    <option value="e2">Edu 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                                <select id="work-exp" class="form-select exp-slct">
                                                    <option selected disabled>
                                                        Candidate's year of work experience
                                                    </option>
                                                    <option value="ex1">Exp 1</option>
                                                    <option value="ex2">Exp 2</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                                <select id="work-beyond" class="form-select beyond-slct">
                                                    <option selected disabled>
                                                        Will you prefer candidate that is willing
                                                        to work beyond working hours
                                                    </option>
                                                    <option value="y">Yes</option>
                                                    <option value="n">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                                <select id="perform" class="form-select perform-slct">
                                                    <option selected disabled>
                                                        Will you prefer a candidate that is
                                                        willing to perform
                                                    </option>
                                                    <option value="y">Yes</option>
                                                    <option value="n">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                                <select id="job-function" class="form-select job-function-slct">
                                                    <option selected disabled>
                                                        What kind of job function category are you
                                                        offering?
                                                    </option>
                                                    <option value="f1">Function 1</option>
                                                    <option value="f2">Function 2</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-group input-group-sm d-flex flex-column">
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text bg-transparent pe-0 input-icon">
                                                        <i class="fa fa-comments" aria-hidden="true"></i>
                                                    </span>
                                                    <textarea class="form-control border-start-0 skills-text" placeholder="Skills List" rows="1"></textarea>
                                                </div>

                                                <div class="info-txt">
                                                    Please mention Skill name with comma(,)
                                                    seperated
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="job-specs pt-3">
                                <h1 class="title">Job Specifications</h1>
                                <form action="">
                                    <div class="row gx-3">
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm mb-2 mb-sm-3 flex-column">
                                                <label for="" class="form-label mb-0">Job Title</label>
                                                <input type="text" class="form-control job-title w-100" placeholder="Job Title" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm mb-2 mb-sm-3 flex-column">
                                                <label for="" class="form-label mb-0">Number of Positions</label>
                                                <input type="number" class="form-control job-positions w-100" placeholder="Number of Positions" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm mb-2 mb-sm-3 flex-column">
                                                <label for="" class="form-label mb-0">Short Description</label>
                                                <input type="number" class="form-control job-desc w-100" placeholder="Short Description" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm mb-2 mb-sm-3 flex-column">
                                                <label for="" class="form-label mb-0">Expiry Date</label>
                                                <input type="date" class="form-control exp-date w-100" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm mb-2 mb-sm-3 flex-column">
                                                <label for="" class="form-label mb-0">City</label>
                                                <input type="text" class="form-control pref-city w-100" placeholder="Preferred City" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm mb-2 mb-sm-3 flex-column">
                                                <label for="" class="form-label mb-0">Country</label>
                                                <input type="text" class="form-control pref-country w-100" placeholder="Preferred Country" />
                                            </div>
                                        </div>

                                        <div class="col-3 col-sm-1">
                                            <div class="d-flex">
                                                <label for="" class="form-label mb-2 mb-sm-3">Job Type</label>
                                            </div>
                                        </div>
                                        <div class="col-9 col-sm-11">
                                            <div class="radio-options mb-2 mb-sm-3">
                                                <div class="radio-input d-flex align-items-center">
                                                    <input class="form-check-input mt-0 me-1" type="radio" name="job-type" id="ft" />
                                                    <label class="form-check-label mb-0" for="ft">
                                                        Full Time
                                                    </label>
                                                </div>
                                                <div class="radio-input d-flex align-items-center">
                                                    <input class="form-check-input mt-0 me-1" type="radio" name="job-type" id="pt" />
                                                    <label class="form-check-label mb-0" for="pt">
                                                        Part Time
                                                    </label>
                                                </div>
                                                <div class="radio-input d-flex align-items-center">
                                                    <input class="form-check-input mt-0 me-1" type="radio" name="job-type" id="intern" />
                                                    <label class="form-check-label mb-0" for="intern">
                                                        Internship
                                                    </label>
                                                </div>
                                                <div class="radio-input d-flex align-items-center">
                                                    <input class="form-check-input mt-0 me-1" type="radio" name="job-type" id="temp" />
                                                    <label class="form-check-label mb-0" for="temp">
                                                        Temporary
                                                    </label>
                                                </div>
                                                <div class="radio-input d-flex align-items-center">
                                                    <input class="form-check-input mt-0 me-1" type="radio" name="job-type" id="freelance" />
                                                    <label class="form-check-label mb-0" for="freelance">
                                                        Freelance
                                                    </label>
                                                </div>
                                                <div class="radio-input d-flex align-items-center">
                                                    <input class="form-check-input mt-0 me-1" type="radio" name="job-type" id="remote" />
                                                    <label class="form-check-label mb-0" for="remote">
                                                        Remote
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm flex-column mb-2 mb-sm-3">
                                                <label for="" class="form-label mb-0">Salary Range</label>
                                                <input type="number" class="form-control range-from w-100" placeholder="Range From" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-sm flex-column mb-2 mb-sm-3">
                                                <label for="" class="form-label mb-0">To</label>
                                                <input type="number" class="form-control range-to w-100" placeholder="Range To" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="generate-btn-container d-flex justify-content-center">
                                <button class="btn get-talent-btn generate-posting-btn">
                                    generate ai job posting
                                </button>
                            </div>
                        </div>
                        <!-- ends::nput forms -->
                        <br />
                        <!-- generated output -->
                        <div class="ai-generated-posting">
                            <div class="row gx-2">
                                <div class="col-12">
                                    <div class="generated-card mb-1">
                                        <span class="label mb-1"> Job Title </span>
                                        <p class="desc mb-0 p-2">
                                            Senior Product Designer
                                        </p>
                                    </div>
                                    <div class="generated-card mb-1">
                                        <span class="label mb-1"> Job Description </span>
                                        <p class="desc mb-0 p-2">
                                            Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been
                                            the industry's standard dummy text ever since
                                            the 1500s, when an unknown printer took a galley
                                            of type and scrambled it to make a type specimen
                                            book.
                                        </p>
                                    </div>
                                    <div class="generated-card">
                                        <span class="label mb-1"> Responsibilities </span>
                                        <p class="desc mb-0 p-2">
                                            Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been
                                            the industry's standard dummy text.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="job-dets-card p-2 h-100">
                                        <span class="main-label label mb-1 d-block">
                                            Job Details
                                        </span>
                                        <span class="label"> Job Creation Date </span>
                                        <p class="desc mb-1">1<sup>st</sup> May 2023</p>
                                        <span class="label"> Position Available </span>
                                        <p class="desc mb-1">3</p>
                                        <span class="label"> Experience Required </span>
                                        <p class="desc mb-1">5 Years</p>
                                        <span class="label"> Location </span>
                                        <p class="desc mb-1">Kuala Lumpur</p>
                                        <span class="label"> Salary </span>
                                        <p class="desc mb-0">RM10,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends::generated output -->
                        <br />
                        <!-- video job qstns -->
                        <div class="video-job-qstns bg-white p-0">
                            <h1 class="title">Video Job Interview Questions</h1>
                            <div class="row gx-1 m-0">
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-1">
                                        <input type="text" class="form-control qstn" value="What are your strengths?" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                                        <input type="text" class="form-control strengths-ansr" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-1">
                                        <input type="text" class="form-control qstn" value="Are you an effective leader? State past experiences." />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                                        <input type="text" class="form-control past-exp-ansr" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-1">
                                        <input type="text" class="form-control qstn" value="How do you contribute to this role you are applying to?" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                                        <input type="text" class="form-control contribute-ansr" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-1">
                                        <input type="text" class="form-control qstn" value="What do you do in your spare time?" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                                        <input type="text" class="form-control spare-ansr" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-1">
                                        <input type="text" class="form-control qstn" value="How do you overcome pressure and stress?" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                                        <input type="text" class="form-control stress-ansr" />
                                    </div>
                                </div>
                            </div>
                            <div class="row gx-2 m-0 mt-2">
                                <div class="col-12 col-sm-6">
                                    <h1 class="title job-post-title">
                                        Your Video Job Post
                                    </h1>
                                    <p class="info mb-0 p-2">
                                        A video job post is a video-based overview of the
                                        role and its responsibilities, but it can also go
                                        further. Your unique, branded video job
                                        description may showcase your workplace, team and
                                        culture.
                                    </p>
                                    <div class="publish-post d-flex justify-content-center my-2">
                                        <button class="btn get-talent-btn">
                                            publish job posting
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <video controls class="w-100 hoverable">
                                        <source src="<?= site_url() ?>app-assets/images/video.mp4" type="video/mp4" />
                                        Your browser does not support the video tag.
                                    </video>
                                    <input type="file" class="form-control" id="video-job-post-file-upload" />
                                    <div class="note">
                                        Allowed &lt; 30 MB size Video
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends::video job qstns -->
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="all-postings-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#all-postings-collapse" aria-expanded="false" aria-controls="all-postings-collapse">
                    all job postings
                </button>
            </h2>
            <div id="all-postings-collapse" class="accordion-collapse collapse" aria-labelledby="all-postings-hdr" data-bs-parent="#vacancies-accordion">
                <div class="accordion-body p-0">
                    <div class="table-container get-talent-table-container">
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
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Experience</th>
                                    <th scope="col">Positions</th>
                                    <th scope="col">Created Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Corporate Finance Adviser</td>
                                    <td>
                                        Lifestyle (Fashion, beauty, home, gastronomy,
                                        retail, hospotality & travel)
                                    </td>
                                    <td>Social Media Coordinator</td>
                                    <td>0 to 4 years</td>
                                    <td>2</td>
                                    <td>2023-02-10</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Corporate Finance Adviser</td>
                                    <td>
                                        Lifestyle (Fashion, beauty, home, gastronomy,
                                        retail, hospotality & travel)
                                    </td>
                                    <td>Social Media Coordinator</td>
                                    <td>0 to 4 years</td>
                                    <td>2</td>
                                    <td>2023-02-10</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Corporate Finance Adviser</td>
                                    <td>
                                        Lifestyle (Fashion, beauty, home, gastronomy,
                                        retail, hospotality & travel)
                                    </td>
                                    <td>Social Media Coordinator</td>
                                    <td>0 to 4 years</td>
                                    <td>2</td>
                                    <td>2023-02-10</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Corporate Finance Adviser</td>
                                    <td>
                                        Lifestyle (Fashion, beauty, home, gastronomy,
                                        retail, hospotality & travel)
                                    </td>
                                    <td>Social Media Coordinator</td>
                                    <td>0 to 4 years</td>
                                    <td>2</td>
                                    <td>2023-02-10</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Corporate Finance Adviser</td>
                                    <td>
                                        Lifestyle (Fashion, beauty, home, gastronomy,
                                        retail, hospotality & travel)
                                    </td>
                                    <td>Social Media Coordinator</td>
                                    <td>0 to 4 years</td>
                                    <td>2</td>
                                    <td>2023-02-10</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Corporate Finance Adviser</td>
                                    <td>
                                        Lifestyle (Fashion, beauty, home, gastronomy,
                                        retail, hospotality & travel)
                                    </td>
                                    <td>Social Media Coordinator</td>
                                    <td>0 to 4 years</td>
                                    <td>2</td>
                                    <td>2023-02-10</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Corporate Finance Adviser</td>
                                    <td>
                                        Lifestyle (Fashion, beauty, home, gastronomy,
                                        retail, hospotality & travel)
                                    </td>
                                    <td>Social Media Coordinator</td>
                                    <td>0 to 4 years</td>
                                    <td>2</td>
                                    <td>2023-02-10</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Corporate Finance Adviser</td>
                                    <td>
                                        Lifestyle (Fashion, beauty, home, gastronomy,
                                        retail, hospotality & travel)
                                    </td>
                                    <td>Social Media Coordinator</td>
                                    <td>0 to 4 years</td>
                                    <td>2</td>
                                    <td>2023-02-10</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Corporate Finance Adviser</td>
                                    <td>
                                        Lifestyle (Fashion, beauty, home, gastronomy,
                                        retail, hospotality & travel)
                                    </td>
                                    <td>Social Media Coordinator</td>
                                    <td>0 to 4 years</td>
                                    <td>2</td>
                                    <td>2023-02-10</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Corporate Finance Adviser</td>
                                    <td>
                                        Lifestyle (Fashion, beauty, home, gastronomy,
                                        retail, hospotality & travel)
                                    </td>
                                    <td>Social Media Coordinator</td>
                                    <td>0 to 4 years</td>
                                    <td>2</td>
                                    <td>2023-02-10</td>
                                </tr>
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
    </div>
</div>
<!-- ends::vacancies tab -->
<?= $this->endSection() ?>