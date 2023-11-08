<!DOCTYPE html>
<html lang="en">
<?php include "partials/header.php" ?>

<body class="sb-nav-fixed">
    <?php include "partials/navbar.php" ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Jumlah Data Temuan Disetiap Area</li>
                </ol>
                <!--card-->
                <div class="row">
                    <!--total fuguai rm-->
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body"><i class="fas fa-truck-loading"></i> INBOUND RM</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">Total : <?= $data['jumlah_fuguai_rm'] ?></a>
                            </div>
                        </div>
                    </div>

                    <!--total fuguai pm-->
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body"><i class="fa-solid fa-people-carry-box"></i> INBOUND PM</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">Total : <?= $data['jumlah_fuguai_pm'] ?></a>
                            </div>
                        </div>
                    </div>

                    <!--total fuguai outbound-->
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body"><i class="fa-solid fa-truck-fast"></i> OUTBOUND RMPM</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">Total : <?= $data['jumlah_fuguai_outbound'] ?> </a>
                            </div>
                        </div>
                    </div>

                    <!--total fuguai inventory-->
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body"><i class="fas fa-warehouse"></i> INVENTORY RMPM</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">Total : <?= $data['jumlah_fuguai_inventory'] ?></a>
                            </div>
                        </div>
                    </div>

                    <!--all fuguai-->
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-dark text-white mb-4">
                            <div class="card-body"><i class="fas fa-vote-yea"></i> ALL FUGUAI</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">Total : <?= $data['jumlah_fuguai'] ?></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </main>
        <?php include "partials/footer.php" ?>
    </div>
    </div>
    <?php include "partials/js.php" ?>

</body>

</html>