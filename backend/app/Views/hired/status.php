<?= $this->extend("layouts/hired") ?>
<?= $this->section("body") ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- status tab -->
<div class="data status-data">
    <h5 class="black-clr fw-600 info">
        Here is what's happening to your job search up to -
        <span class="date"><?= date("d") ?></span>
        <sup>th</sup>
        <span class="month"><?= date("F") ?></span>
    </h5>
    <div class="stats">
        <div class="row gx-3 mb-3 mb-md-4 stats-row-1">
            <div class="col-5 col-sm-3">
                <div class="stats-card mb-2 h-48">
                    <h1 class="applied-count"><?= $jobCount ?></h1>
                    <h6>total jobs applied</h6>
                </div>
                <div class="stats-card h-48">
                    <h1 class="connected-count">6</h1>
                    <h6>connected with employers</h6>
                </div>
            </div>
            <div class="col-7 col-sm-4">
                <div class="stats-card h-100">
                    <!-- add your graph here -->
                    <!-- <img src="<?= site_url() ?>app-assets/images/stats-donut.PNG" alt="chart"> -->
                    <div>
                        <canvas id="doughnut"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-5 mt-2 mt-sm-0">
                <div class="stats-card mb-2 h-48">
                    <h1 class="purchases-count">40</h1>
                    <h6>total profile purchases</h6>
                </div>
                <div class="stats-card h-48">
                    <h1 class="earnings-count">RM1,600</h1>
                    <h6>total earnings</h6>
                </div>
            </div>
        </div>
        <div class="row gx-3">
            <div class="col-12 col-sm-7">
                <div class="stats-card h-100">
                    <!-- add your graph here -->
                    <!-- <img src="<?= site_url() ?>app-assets/images/stats-pie.PNG" alt="chart"> -->
                    <div>
                        <canvas id="bar"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-5">
                <div class="stats-card h-100 jobs-card mt-2 mt-sm-0">
                    <div class="stats-sub-card">
                        <div class="content">
                            <h1 class="matches-count">180</h1>
                            <h6>Job Matches</h6>
                        </div>
                        <div class="indicator">
                            <span class="matches-indicator me-1"></span>
                            <span class="title">Job Matches</span>
                        </div>
                    </div>
                    <div class="stats-sub-card">
                        <div class="content">
                            <h1 class="applied-count"><?= $jobCount ?></h1>
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
<script>
    const d1 = document.getElementById("doughnut");
    new Chart(d1, {
        type: "doughnut",
        data: {
            labels: [
                'Suitable',
                'No Progress'
            ],
            datasets: [{
                label: 'Status',
                data: [0, 100],
                backgroundColor: [
                    'rgb(39, 54, 77)',
                    'rgb(249, 249, 249)'
                ],
                hoverOffset: 4
            }]
        },
    });
    const b1 = document.getElementById("bar");
    new Chart(b1, {
        type: "bar",
        data: {
            labels: ['Corporate Finance Advisetr', 'Equity Analyst', 'Marketing Manager', 'Events Coordinator'],
            datasets: [{
                label: 'List',
                data: [65, 59, 80, 81],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<?= $this->endSection() ?>