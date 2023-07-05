<?= $this->extend("layouts/company") ?>
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
            <div class="company-info position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="upload-gallery position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="engagement-assessment position-relative">
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
    <!-- company info -->
    <div class="company-info-form">
        <form action="" class="bg-white">
            <h1 class="hdr">Company Info</h1>
            <div class="row gx-3">
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-building" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 company-name" placeholder="Company name" value="Code Life Solution" />
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-copyright" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 copyright" placeholder="Copyright" value="123456P" />
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 phone" placeholder="Phone" value="0199999999" />
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 mail" placeholder="Mail" value="codeadmin@gmail.com" />
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 website" placeholder="Website" value="www.codelife.com" />
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <select id="" class="form-select">
                            <option disabled>Select</option>
                            <option selected value="t&m">
                                Technology and Media
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <select id="" class="form-select">
                            <option disabled>Select</option>
                            <option selected value="1kAbove">
                                Conglomerate - 1000 and above personnel
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 adrs-1" placeholder="Address" value="B-3-4, Block B, Plaza Damas" />
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 adrs-2" placeholder="Address" value="60 Jalan Sri Hartamas 1, Sri Hari" />
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 pin" placeholder="Pincode" value="40580" />
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 loc-1" placeholder="Location 1" value="Kuala Lumpur" />
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 loc-2" placeholder="Location 2" value="Wilayah Peresekutuan" />
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 loc-coordinate" placeholder="Location Coordinate" />
                    </div>
                </div>
            </div>
        </form>
        <form action="" class="form-2 bg-white pt-0">
            <div class="row gx-3">
                <div class="col-12">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text bg-transparent pe-0 input-icon">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                            </span>
                            <textarea class="form-control border-start-0 details details-1" placeholder="Details 1">
                                                In 2013, our founder start to create find design thinking from coder community and in 2015 CODE was born with passionate team members and now we experiences work for a variety of clients, from small and medium enterprises to multinational organizations.</textarea>
                        </div>
                        <div class="info-txt">
                            More details about company:
                            <span class="hlpr-txt">add more specific details about company, please write
                                between 10 - 300 characters.</span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text bg-transparent pe-0 input-icon">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                            </span>
                            <textarea class="form-control border-start-0 details details-2" placeholder="Details 1">
                                                In 2013, our founder start to create find design thinking from coder community and in 2015 CODE was born with passionate team members and now we experiences work for a variety of clients, from small and medium enterprises to multinational organizations.</textarea>
                        </div>
                        <div class="info-txt">
                            More details about company:
                            <span class="hlpr-txt">add more specific details about company, please write
                                between 10 - 300 characters.</span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="to-fro-btns">
            <button class="btn back-btn company-info-back">Go Back</button>
            <button class="btn next-btn company-info-next">Next</button>
        </div>
    </div>
    <!-- ends::company info -->
    <!-- upload video gallery -->
    <div class="upload-video-gallery d-none">
        <!-- upload images -->
        <div class="upload-imgs-section">
            <div class="sample-pics">
                <div class="row">
                    <div class="col-4">
                        <img src="<?= site_url() ?>app-assets/images/sample-profile-pic.PNG" alt="profile" class="w-100" />
                    </div>
                    <div class="col-8">
                        <img src="<?= site_url() ?>app-assets/images/sample-bg-img.PNG" alt="background image" class="w-100" />
                    </div>
                </div>
            </div>
            <div class="upload-files-labels px-2 mt-1">
                <div class="row">
                    <div class="col-6 col-sm-4">
                        <span class="label-names">Profile Picture</span>
                    </div>
                    <div class="col-6 col-sm-4">
                        <span class="label-names"> Background Image </span>
                    </div>
                </div>
            </div>
            <div class="upload-files p-1 p-sm-2">
                <div class="row align-items-center">
                    <div class="col-6 col-sm-4">
                        <input type="file" class="form-control file-upload" id="profile-pic-upload" />
                    </div>
                    <div class="col-6 col-sm-4">
                        <input type="file" class="form-control file-upload" id="bg-img-upload" />
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="d-flex justify-content-center justify-content-sm-end mt-1 mt-sm-0">
                            <span class="hlpr-txt upload-pics-btn">
                                upload pictures
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends::upload images -->
        <!-- upload video -->
        <div class="upload-video-file d-none">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="upload-video-section">
                        <p class="abt mb-2">
                            A corporate video is a powerful tool for showcasing your
                            organization in a dynamic and engaging way. By visually
                            highlighting your company's values, mission and culture,
                            a corporate video can help to establish a strong brand
                            identity, build credibility and trust with potential
                            customers and investors, and differentiate your company
                            from competitors.
                        </p>
                        <div class="upload-files upload-video-file-label p-1 p-sm-2 d-flex align-items-center">
                            <input type="file" class="form-control file-upload me-0 me-sm-2" id="profile-pic-upload" />
                            <span class="hlpr-txt mt-1 mt-sm-0 upload-vid-btn">upload video</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <video controls class="hoverable mt-2 mt-lg-0">
                        <source src="<?= site_url() ?>app-assets/images/video.mp4" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <!-- ends::upload video -->
        <!-- upload img table -->
        <div class="upload-img-table d-none">
            <div class="image-upload mb-2">
                <label for="">Choose Image</label>
                <input type="file" class="form-control file-upload" id="profile-img-upload" />
            </div>
            <button class="btn karya-btn add-btn mb-2">add</button>
            <div class="table-container">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>ARRENLCARXY</td>
                            <td>
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="user img" />
                            </td>
                            <td>
                                <div class="delete-icon">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>hiring_asians</td>
                            <td>
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="user img" />
                            </td>
                            <td>
                                <div class="delete-icon">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>asia_business</td>
                            <td>
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="user img" />
                            </td>
                            <td>
                                <div class="delete-icon">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>JobInterview</td>
                            <td>
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="user img" />
                            </td>
                            <td>
                                <div class="delete-icon">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Talent_lounge_21</td>
                            <td>
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="user img" />
                            </td>
                            <td>
                                <div class="delete-icon">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="to-fro-btns">
                <button class="btn back-btn upload-img-back">Go Back</button>
                <button class="btn next-btn upload-img-next">Next</button>
            </div>
        </div>
        <!-- ends::upload img table -->
    </div>
    <!-- ends::upload video gallery -->
    <!-- engagement assessment -->
    <div class="talent-engagement-assessment my-0 my-sm-2 d-none">
        <!-- assessment dets -->
        <div class="assessment-dets">
            <h6 class="info mb-3 pe-2">
                The following section will be a 10 questions
                <span class="highlight">Employer Engagement Assessment</span>
                to determine how an organisation value employees, provides
                benefits, regards culture as important and a range of factors
                that contribute to employee satisfaction and well-being. It
                also encourages employers to prioritise employee satisfaction
                and well-being by conducting an assessment to determine if
                their company meets the necessary criteria. By doing so,
                employers can identify areas where thet can improve and create
                a positive and engaging workplace that attracts top talent,
                reduces turnover, boosts productivity, and ensures their
                business's long term success and growth.
            </h6>
            <div class="d-flex justify-content-center w-100">
                <button class="btn get-talent-btn strt-assessment-btn">
                    Start Assessment
                </button>
            </div>
        </div>
        <!-- ends::assessment dets -->
        <!-- assessment qstn -->
        <div class="assessment-qstn d-none">
            <h1 class="qstn-title mb-0">
                Is a scaled salary structure based on years experience being
                practiced in your organisation?
            </h1>
            <div class="btn-group qstn-choices" role="group" aria-label="Basic radio toggle button group">
                <div>
                    <input type="radio" class="btn-check qstn-choice choice-a" name="personality-qstn" id="choice-a" autocomplete="off" />
                    <label class="btn btn-outline-primary choice-a-lbl" for="choice-a">
                        <span class="option">A</span>
                        <span class="option-txt"> NO </span>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check qstn-choice choice-b" name="personality-qstn" id="choice-b" autocomplete="off" />
                    <label class="btn btn-outline-primary choice-b-lbl" for="choice-b">
                        <span class="option">B</span>
                        <span class="option-txt"> PARTIALLY </span>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check qstn-choice choice-c" name="personality-qstn" id="choice-c" autocomplete="off" />
                    <label class="btn btn-outline-primary choice-c-lbl" for="choice-c">
                        <span class="option">C</span>
                        <span class="option-txt"> YES </span>
                    </label>
                </div>
            </div>
        </div>
        <!-- ends::assessment qstn -->
        <!-- thanks note -->
        <div class="thanks-note d-none">
            <h1 class="pri-clr thanks-hdr py-4 py-xl-5 d-flex flex-column">
                <p>Congratulations on completing your company profile!</p>
                <p class="mb-0">
                    You can now "PUBLISH" your profile for talents to view. You
                    have taken an important step towards finding your amazing
                    talent. Best of luck in your talent search! You may now view
                    your complete profile.
                </p>
            </h1>
            <div class="d-flex justify-content-center w-100">
                <button class="btn get-talent-btn publish-btn">
                    publish complete profile
                </button>
            </div>
        </div>
        <!-- ends::thanks note -->
    </div>
    <!-- ends::engagement assessment -->
    <!-- my profile - about company -->
    <div class="my-profile-abt-company d-none">
        <!-- abt company -->
        <div class="abt-company-container p-2 p-sm-4">
            <div class="row gx-2 gx-sm-4">
                <div class="col-12 col-sm-7 col-lg-9">
                    <div class="company-video">
                        <h1 class="company">code life solution</h1>
                        <h6 class="abt-hdr">about</h6>
                        <p class="info">
                            In 2013, our founder start to create find design
                            thinking from coder community and in 2015 CODE was born
                            with passionate team members and now we experiences work
                            for a variety of clients, from small and medium
                            enterprises to multinational organizations.
                        </p>
                        <video controls class="hoverable">
                            <source src="<?= site_url() ?>app-assets/images/video.mp4" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                        <span class="note">Download if your browser not support</span>
                        <button class="btn karya-btn download-btn">
                            download video
                        </button>
                    </div>
                </div>
                <div class="col-12 col-sm-5 col-lg-3 mt-2 mt-sm-0">
                    <img src="<?= site_url() ?>app-assets/images/company-img.PNG" alt="company image" class="w-100 h-100" />
                </div>
            </div>
        </div>
        <!-- ends::abt company -->
        <br />
        <!-- metrics -->
        <div class="engagement-metrics p-2 p-sm-0">
            <h1 class="title">employer engagement metrics</h1>
            <div class="metrics-container">
                <div class="content-left">
                    <div class="graph rating-graph">
                        <!-- load graph here -->
                        <img src="<?= site_url() ?>app-assets/images/company-rating-graph.PNG" alt="graph" class="" />
                        <!-- ends::load graph here -->
                        <h1 class="title">rating</h1>
                    </div>
                    <div class="graph diversity-graph mt-1 mt-sm-3">
                        <!-- load graph here -->
                        <img src="<?= site_url() ?>app-assets/images/company-diversity-graph.PNG" alt="graph" class="" />
                        <!-- ends::load graph here -->
                        <h1 class="title">diversity</h1>
                    </div>
                </div>
                <div class="content-right mt-1 mt-sm-0 ms-0 ms-sm-4 ms-md-5">
                    <div class="row gx-1 gx-sm-4 gx-md-5 gy-1 gy-sm-3 w-100">
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
        <!-- ends::metrics -->
    </div>
    <!-- ends::my profile - about company -->
    <!-- ends::profile tab -->
</div>
<!-- ends::profile tab -->
<?= $this->endSection() ?>