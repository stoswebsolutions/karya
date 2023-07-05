<?= $this->extend("layouts/company") ?>
<?= $this->section("body") ?>
<!-- status tab -->
<div class="data status-data">
    <h5 class="black-clr fw-600 info">
        Here is what's happening to your job search up to -
        <span class="date">29</span><sup>th</sup>
        <span class="month">April</span>
    </h5>
    <div class="stats">
        <div class="row gx-3 mb-3 mb-md-4 stats-row-1">
            <div class="col-5 col-sm-3">
                <div class="stats-card mb-2 h-48">
                    <h1 class="postings-count">5</h1>
                    <h6>total job postings</h6>
                </div>
                <div class="stats-card h-48">
                    <h1 class="connected-count">20</h1>
                    <h6>connected with talents</h6>
                </div>
            </div>
            <div class="col-7 col-sm-4">
                <div class="stats-card h-100">
                    <!-- add your graph here -->
                    <img src="<?= site_url() ?>app-assets/images/stats-donut.PNG" alt="chart" />
                </div>
            </div>
            <div class="col-12 col-sm-5 mt-2 mt-sm-0">
                <div class="stats-card mb-2 h-48">
                    <h1 class="purchases-count">40</h1>
                    <h6>total profile purchases</h6>
                </div>
                <div class="stats-card h-48">
                    <h1 class="earnings-count">RM4,000</h1>
                    <h6>total cost</h6>
                </div>
            </div>
        </div>
        <div class="row gx-3">
            <div class="col-12 col-sm-7">
                <div class="stats-card h-100">
                    <!-- add your graph here -->
                    <img src="<?= site_url() ?>app-assets/images/getTalent-stats-graph.PNG" alt="chart" />
                </div>
            </div>
            <div class="col-12 col-sm-5">
                <div class="stats-card h-100 jobs-card mt-2 mt-sm-0">
                    <div class="stats-sub-card">
                        <div class="content">
                            <h1 class="views-count">80</h1>
                            <h6>Job View</h6>
                        </div>
                        <div class="indicator">
                            <span class="views-indicator me-1"></span>
                            <span class="title">Job View</span>
                        </div>
                    </div>
                    <div class="stats-sub-card">
                        <div class="content">
                            <h1 class="applied-count">20</h1>
                            <h6 class="title">Job Applied</h6>
                        </div>
                        <div class="indicator">
                            <span class="applied-indicator me-1"></span>
                            <span class="title">Job Applied</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ends::status tab -->
<?= $this->endSection() ?>