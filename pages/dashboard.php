<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div>
<section class="section dashboard">
    <div class="row">
        <div class="col-22">
            <div class="row">
                <div class="col-xxl-3 col-md-6 col-lg-3">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Participants</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-bounding-box"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 id="total-part">0</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-lg-3">
                    <div class="card info-card male-card">
                        <div class="card-body">
                            <h5 class="card-title">Male</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-gender-male"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 id="total-male">0</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-lg-3">
                    <div class="card info-card female-card">
                        <div class="card-body">
                            <h5 class="card-title">Female</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-gender-female"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 id="total-female">0</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-lg-3">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Finished</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-check-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 id="total-finished">0</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php // Utilizing Apex Chart from template (see data.js for code) ?>
                    <div id="barChart"></div>
                </div>
            </div>
        </div>
    </div>
</section>