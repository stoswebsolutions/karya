<?= $this->extend("layouts/talent") ?>
<?= $this->section("body") ?>
<!-- explore companies tab -->
<div class="data explore-companies-data">
    <!-- about company -->
    <div class="abt-company d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="abt-company-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="abt-company-details-tab" data-bs-toggle="pill" data-bs-target="#abt-company-details" type="button" role="tab" aria-controls="abt-company-details" aria-selected="true">
                    code life solutions sdn bhd
                </button>
            </li>
        </ul>
        <div class="tab-content" id="abt-company-tabContent">
            <div class="tab-pane fade show active" id="abt-company-details" role="tabpanel" aria-labelledby="abt-company-details-tab" tabindex="0">
                <div class="abt-company-container p-4">
                    <div class="row gx-4">
                        <div class="col-9">
                            <div class="company-video">
                                <h1 class="company">code life solution</h1>
                                <h6 class="abt-hdr">about</h6>
                                <p class="info">
                                    In 2013, our founder start to create find design
                                    thinking from coder community and in 2015 CODE was
                                    born with passionate team members and now we
                                    experiences work for a variety of clients, from
                                    small and medium enterprises to multinational
                                    organizations.
                                </p>
                                <video controls class="hoverable">
                                    <source src="<?= site_url() ?>app-assets/images/video.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <span class="note">Download if your browser not support
                                </span>
                                <button class="btn karya-btn download-btn">
                                    download video
                                </button>
                            </div>
                        </div>
                        <div class="col-3">
                            <img src="<?= site_url() ?>app-assets/images/company-img.PNG" alt="company image" class="w-100 h-100">
                        </div>
                    </div>
                    <div class="row gx-2 mt-2">
                        <div class="col-4">
                            <img src="<?= site_url() ?>app-assets/images/company-img.PNG" alt="company image" class="w-100">
                        </div>
                        <div class="col-4">
                            <img src="<?= site_url() ?>app-assets/images/company-img.PNG" alt="company image" class="w-100">
                        </div>
                        <div class="col-4">
                            <img src="<?= site_url() ?>app-assets/images/company-img.PNG" alt="company image" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion profile-accordion abt-company-accordion mobile-only" id="technology-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="abt-company-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#abt-company-collapse" aria-expanded="false" aria-controls="abt-company-collapse">
                    code life solutions sdn bhd
                </button>
            </h2>
            <div id="abt-company-collapse" class="accordion-collapse collapse" aria-labelledby="abt-company-hdr" data-bs-parent="#abt-company-accordion">
                <div class="accordion-body p-0">
                    <div class="abt-company-container p-1">
                        <div class="row gx-4">
                            <div class="col-12">
                                <div class="company-video">
                                    <h1 class="company">code life solution</h1>
                                    <h6 class="abt-hdr">about</h6>
                                    <p class="info">
                                        In 2013, our founder start to create find design
                                        thinking from coder community and in 2015 CODE was
                                        born with passionate team members and now we
                                        experiences work for a variety of clients, from
                                        small and medium enterprises to multinational
                                        organizations.
                                    </p>
                                    <video controls class="w-100 hoverable">
                                        <source src="<?= site_url() ?>app-assets/images/video.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <span class="note">Download if your browser not support
                                    </span>
                                    <button class="btn karya-btn download-btn">
                                        download video
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 mt-1">
                                <img src="<?= site_url() ?>app-assets/images/company-img.PNG" alt="company image" class="w-100">
                            </div>
                        </div>
                        <div class="row gx-1 mt-1">
                            <div class="col-4">
                                <img src="<?= site_url() ?>app-assets/images/company-img.PNG" alt="company image" class="w-100">
                            </div>
                            <div class="col-4">
                                <img src="<?= site_url() ?>app-assets/images/company-img.PNG" alt="company image" class="w-100">
                            </div>
                            <div class="col-4">
                                <img src="<?= site_url() ?>app-assets/images/company-img.PNG" alt="company image" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ends::about company -->
    <br>
    <!-- metrics -->
    <div class="engagement-metrics d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="metrics-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="metrics-details-tab" data-bs-toggle="pill" data-bs-target="#metrics-details" type="button" role="tab" aria-controls="metrics-details" aria-selected="true">
                    code life solutions sdn bhd
                </button>
            </li>
        </ul>
        <div class="tab-content" id="metrics-tabContent">
            <div class="tab-pane fade show active" id="metrics-details" role="tabpanel" aria-labelledby="metrics-details-tab" tabindex="0">
                <h1 class="title">employer engagement metrics</h1>
                <div class="metrics-container">
                    <div class="content-left">
                        <div class="graph rating-graph">
                            <!-- load graph here -->
                            <img src="<?= site_url() ?>app-assets/images/company-rating-graph.PNG" alt="graph" class="">
                            <!-- ends::load graph here -->
                            <h1 class="title">rating</h1>
                        </div>
                        <div class="graph diversity-graph mt-3">
                            <!-- load graph here -->
                            <img src="<?= site_url() ?>app-assets/images/company-diversity-graph.PNG" alt="graph" class="">
                            <!-- ends::load graph here -->
                            <h1 class="title">diversity</h1>
                        </div>
                    </div>
                    <div class="content-right ms-5">
                        <div class="row gx-5 gy-3">
                            <div class="col-sm-6 col-lg-4">
                                <div class="metric med">
                                    <div class="rating">
                                        <span class="rate-block block1"></span>
                                        <span class="rate-block block2"></span>
                                        <span class="rate-block block3"></span>
                                    </div>
                                    <h6 class="rate-type">medium</h6>
                                    <p class="rate-for">Scaled Salary Structure</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="metric med">
                                    <div class="rating">
                                        <span class="rate-block block1"></span>
                                        <span class="rate-block block2"></span>
                                        <span class="rate-block block3"></span>
                                    </div>
                                    <h6 class="rate-type">medium</h6>
                                    <p class="rate-for">Performance Incentives</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="metric high">
                                    <div class="rating">
                                        <span class="rate-block block1"></span>
                                        <span class="rate-block block2"></span>
                                        <span class="rate-block block3"></span>
                                    </div>
                                    <h6 class="rate-type">high</h6>
                                    <p class="rate-for">Insurance Coverage</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="metric low">
                                    <div class="rating">
                                        <span class="rate-block block1"></span>
                                        <span class="rate-block block2"></span>
                                        <span class="rate-block block3"></span>
                                    </div>
                                    <h6 class="rate-type">low</h6>
                                    <p class="rate-for">Upskilling</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="metric med">
                                    <div class="rating">
                                        <span class="rate-block block1"></span>
                                        <span class="rate-block block2"></span>
                                        <span class="rate-block block3"></span>
                                    </div>
                                    <h6 class="rate-type">medium</h6>
                                    <p class="rate-for">Internal Opportunities</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="metric low">
                                    <div class="rating">
                                        <span class="rate-block block1"></span>
                                        <span class="rate-block block2"></span>
                                        <span class="rate-block block3"></span>
                                    </div>
                                    <h6 class="rate-type">low</h6>
                                    <p class="rate-for">Education Grants</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="metric low">
                                    <div class="rating">
                                        <span class="rate-block block1"></span>
                                        <span class="rate-block block2"></span>
                                        <span class="rate-block block3"></span>
                                    </div>
                                    <h6 class="rate-type">low</h6>
                                    <p class="rate-for">Flexi-Hours</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="metric high">
                                    <div class="rating">
                                        <span class="rate-block block1"></span>
                                        <span class="rate-block block2"></span>
                                        <span class="rate-block block3"></span>
                                    </div>
                                    <h6 class="rate-type">high</h6>
                                    <p class="rate-for">CSR Programs</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="metric med">
                                    <div class="rating">
                                        <span class="rate-block block1"></span>
                                        <span class="rate-block block2"></span>
                                        <span class="rate-block block3"></span>
                                    </div>
                                    <h6 class="rate-type">medium</h6>
                                    <p class="rate-for">Top Management Access</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion profile-accordion metrics-accordion mobile-only" id="technology-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="metrics-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#metrics-collapse" aria-expanded="false" aria-controls="metrics-collapse">
                    employer engagement metrics
                </button>
            </h2>
            <div id="metrics-collapse" class="accordion-collapse collapse" aria-labelledby="metrics-hdr" data-bs-parent="#metrics-accordion">
                <div class="accordion-body p-1">
                    <div class="metrics-container">
                        <div class="content-left">
                            <div class="graph rating-graph">
                                <!-- load graph here -->
                                <img src="<?= site_url() ?>app-assets/images/company-rating-graph.PNG" alt="graph" class="">
                                <!-- ends::load graph here -->
                                <h1 class="title">rating</h1>
                            </div>
                            <div class="graph diversity-graph mt-0 mt-sm-3">
                                <!-- load graph here -->
                                <img src="<?= site_url() ?>app-assets/images/company-diversity-graph.PNG" alt="graph" class="">
                                <!-- ends::load graph here -->
                                <h1 class="title">diversity</h1>
                            </div>
                        </div>
                        <div class="content-right mt-1 mt-sm-0 ms-0 ms-sm-5">
                            <div class="row gx-1 gx-sm-5 gy-1 gy-sm-3">
                                <div class="col-6 col-lg-4">
                                    <div class="metric med">
                                        <div class="rating">
                                            <span class="rate-block block1"></span>
                                            <span class="rate-block block2"></span>
                                            <span class="rate-block block3"></span>
                                        </div>
                                        <h6 class="rate-type">medium</h6>
                                        <p class="rate-for">Scaled Salary Structure</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="metric med">
                                        <div class="rating">
                                            <span class="rate-block block1"></span>
                                            <span class="rate-block block2"></span>
                                            <span class="rate-block block3"></span>
                                        </div>
                                        <h6 class="rate-type">medium</h6>
                                        <p class="rate-for">Performance Incentives</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="metric high">
                                        <div class="rating">
                                            <span class="rate-block block1"></span>
                                            <span class="rate-block block2"></span>
                                            <span class="rate-block block3"></span>
                                        </div>
                                        <h6 class="rate-type">high</h6>
                                        <p class="rate-for">Insurance Coverage</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="metric low">
                                        <div class="rating">
                                            <span class="rate-block block1"></span>
                                            <span class="rate-block block2"></span>
                                            <span class="rate-block block3"></span>
                                        </div>
                                        <h6 class="rate-type">low</h6>
                                        <p class="rate-for">Upskilling</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="metric med">
                                        <div class="rating">
                                            <span class="rate-block block1"></span>
                                            <span class="rate-block block2"></span>
                                            <span class="rate-block block3"></span>
                                        </div>
                                        <h6 class="rate-type">medium</h6>
                                        <p class="rate-for">Internal Opportunities</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="metric low">
                                        <div class="rating">
                                            <span class="rate-block block1"></span>
                                            <span class="rate-block block2"></span>
                                            <span class="rate-block block3"></span>
                                        </div>
                                        <h6 class="rate-type">low</h6>
                                        <p class="rate-for">Education Grants</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="metric low">
                                        <div class="rating">
                                            <span class="rate-block block1"></span>
                                            <span class="rate-block block2"></span>
                                            <span class="rate-block block3"></span>
                                        </div>
                                        <h6 class="rate-type">low</h6>
                                        <p class="rate-for">Flexi-Hours</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="metric high">
                                        <div class="rating">
                                            <span class="rate-block block1"></span>
                                            <span class="rate-block block2"></span>
                                            <span class="rate-block block3"></span>
                                        </div>
                                        <h6 class="rate-type">high</h6>
                                        <p class="rate-for">CSR Programs</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="metric med">
                                        <div class="rating">
                                            <span class="rate-block block1"></span>
                                            <span class="rate-block block2"></span>
                                            <span class="rate-block block3"></span>
                                        </div>
                                        <h6 class="rate-type">medium</h6>
                                        <p class="rate-for">Top Management Access</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ends::metrics -->
</div>
<!-- ends::explore companies tab -->
<?= $this->endSection() ?>