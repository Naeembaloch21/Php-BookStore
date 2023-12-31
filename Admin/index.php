<?php include('assets/layout/header.php') ?>
<?php include('assets/layout/sidebar.php') ?>
<div class="page-wrapper">
    <?php include('assets/layout/breadcrumb.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daily Sales</h4>
                        <div class="text-end">
                            <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i> $120</h2>
                            <span class="text-muted">Todays Income</span>
                        </div>

                        <span class="text-success">80%</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Weekly Sales</h4>
                        <div class="text-end">
                            <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i> $5,000</h2>
                            <span class="text-muted">Todays Income</span>
                        </div>
                        <span class="text-info">30%</span>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Revenue Statistics</h4>
                        <div class="flot-chart">
                            <div class="flot-chart-content " id="flot-line-chart" style="padding: 0px; position: relative;">
                                <canvas class="flot-base w-100" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include('assets/layout/footer.php') ?>

<!-- Authorpage 
crud ,create/read/undate/delete,
-->