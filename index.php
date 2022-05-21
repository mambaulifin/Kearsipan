<?php
include 'config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="Assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="Assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <?php include 'menu.html'; ?>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="card p-2 bg-dark">
                        <div class="col-sm-12 badge badge-dark">
                            <h3 class="font-weight-bold">DASHBOARD</h3>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <div class="small-box bg-info border border-dark">
                                    <div class="inner">
                                        <h3><?= $count1; ?></h3>
                                        <strong>Surat Keterangan</strong>
                                    </div>
                                    <div class="icon">
                                        <i>
                                            <img src="Assets/dist/img/logo.png" style="height: 90px;width:90px; margin-top:-80px;">
                                        </i>
                                    </div>
                                    <a class="small-box-footer" data-toggle="collapse" href="#body1" role="button" aria-expanded="false" aria-controls="body1">
                                        Informasi <i class="fas fa-info-circle"></i>
                                    </a>
                                    <div class="collapse text-center" id="body1">
                                        <div class="card-body bg-info">
                                            Surat yang digunkan masyarakat untuk keperluannya yang membutuhkan legalitas dari desa
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="small-box bg-info border border-dark">
                                    <div class="inner">
                                        <h3><?= $count2; ?></h3>
                                        <strong>Surat Masuk</strong>
                                    </div>
                                    <div class="icon">
                                        <i>
                                            <img src="Assets/dist/img/logo.png" style="height: 90px;width:90px; margin-top:-80px;">
                                        </i>
                                    </div>
                                    <a class="small-box-footer" data-toggle="collapse" href="#body2" role="button" aria-expanded="false" aria-controls="body2">
                                        Informasi <i class="fas fa-info-circle"></i>
                                    </a>
                                    <div class="collapse text-center" id="body2">
                                        <div class="card-body bg-gradient-info">
                                            Surat dari instansi / lembaga luar yang berkepentingan dengan desa
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="small-box bg-info border border-dark">
                                    <div class="inner">
                                        <h3><?= $count3; ?></h3>
                                        <strong>Surat Keluar</strong>
                                    </div>
                                    <div class="icon">
                                        <i>
                                            <img src="Assets/dist/img/logo.png" style="height: 90px;width:90px; margin-top:-80px;">
                                        </i>
                                    </div>
                                    <a class="small-box-footer" data-toggle="collapse" href="#body3" role="button" aria-expanded="false" aria-controls="body3">
                                        Informasi <i class="fas fa-info-circle"></i>
                                    </a>
                                    <div class="collapse text-center" id="body3">
                                        <div class="card-body bg-gradient-info">
                                            Surat yg dikeluarkan desa untuk disampaikan kepada dinas/lembaga resmi tertentu
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="small-box bg-info border border-dark">
                                    <div class="inner">
                                        <h3><?= $count4; ?></h3>
                                        <strong>Surat Pindah Masuk</strong>
                                    </div>
                                    <div class="icon">
                                        <i>
                                            <img src="Assets/dist/img/logo.png" style="height: 90px;width:90px; margin-top:-80px;">
                                        </i>
                                    </div>
                                    <a class="small-box-footer" data-toggle="collapse" href="#body4" role="button" aria-expanded="false" aria-controls="body4">
                                        Informasi <i class="fas fa-info-circle"></i>
                                    </a>
                                    <div class="collapse text-center" id="body4">
                                        <div class="card-body bg-gradient-info">
                                            Surat pernyataan / pengantar dari desa untuk orang dari luar daerah yang akan masuk atau pindah ke desa
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="small-box bg-info border border-dark">
                                    <div class="inner">
                                        <h3><?= $count5; ?></h3>
                                        <strong>Surat Pindah Keluar</strong>
                                    </div>
                                    <div class="icon">
                                        <i>
                                            <img src="Assets/dist/img/logo.png" style="height: 90px;width:90px; margin-top:-80px;">
                                        </i>
                                    </div>
                                    <a class="small-box-footer" data-toggle="collapse" href="#body5" role="button" aria-expanded="false" aria-controls="body5">
                                        Informasi <i class="fas fa-info-circle"></i>
                                    </a>
                                    <div class="collapse text-center" id="body5">
                                        <div class="card-body bg-gradient-info">
                                            Surat pernyataan / pengantar dari desa untuk orang dari dalam desa yang akan pindah ke desa lain
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="small-box bg-info border border-dark">
                                    <div class="inner">
                                        <h3><?= $count6; ?></h3>
                                        <strong>Peraturan Desa</strong>
                                    </div>
                                    <div class="icon">
                                        <i>
                                            <img src="Assets/dist/img/logo.png" style="height: 90px;width:90px; margin-top:-80px;">
                                        </i>
                                    </div>
                                    <a class="small-box-footer" data-toggle="collapse" href="#body6" role="button" aria-expanded="false" aria-controls="body6">
                                        Informasi <i class="fas fa-info-circle"></i>
                                    </a>
                                    <div class="collapse text-center" id="body6">
                                        <div class="card-body bg-gradient-info">
                                            Ketetapan yang dibuat oleh desa melalui perstejuan BPD berdasarkan pada aturan negara yang sah
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="small-box bg-info border border-dark">
                                    <div class="inner">
                                        <h3><?= $count7; ?></h3>
                                        <strong>Peraturan Kepala Desa</strong>
                                    </div>
                                    <div class="icon">
                                        <i>
                                            <img src="Assets/dist/img/logo.png" style="height: 90px;width:90px; margin-top:-80px;">
                                        </i>
                                    </div>
                                    <a class="small-box-footer" data-toggle="collapse" href="#body7" role="button" aria-expanded="false" aria-controls="body7">
                                        Informasi <i class="fas fa-info-circle"></i>
                                    </a>
                                    <div class="collapse text-center" id="body7">
                                        <div class="card-body bg-gradient-info">
                                            Peraturan yang dibuat oleh desa dan disepkati oleh kepala desa yang berlaku khusus untuk desa tersebut
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="small-box bg-info border border-dark">
                                    <div class="inner">
                                        <h3><?= $count8; ?></h3>
                                        <strong>SK Kepala Desa</strong>
                                    </div>
                                    <div class="icon">
                                        <i>
                                            <img src="Assets/dist/img/logo.png" style="height: 90px;width:90px; margin-top:-80px;">
                                        </i>
                                    </div>
                                    <a class="small-box-footer" data-toggle="collapse" href="#body8" role="button" aria-expanded="false" aria-controls="body8">
                                        Informasi <i class="fas fa-info-circle"></i>
                                    </a>
                                    <div class="collapse text-center" id="body8">
                                        <div class="card-body bg-gradient-info">
                                            Keputusan untuk menetapkan suatu lembaga atau organisasi yang ada di desa tersebut
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

        <footer class="main-footer bg-dark">
            <div class="float-right d-none d-sm-block">
                <b>UNIVERSITAS ISLAM BALITAR</b>
            </div>
            <strong>Copyright &copy; 2019-2022 <a href="#" class="font-weight-bold">BuwungPuyuh</a>.</strong> All rights reserved.
        </footer>
    </div>
    <script src="Assets/plugins/jquery/jquery.min.js"></script>
    <script src="Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/dist/js/adminlte.min.js"></script>
</body>

</html>