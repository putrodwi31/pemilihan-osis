<!-- [ Main Content ] start -->
<?php
echo $this->session->flashdata('message');
?>
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><?php echo $title ?></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('user') ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a>Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="card">
            <div class="container">
                <div class="row mt-3">

                    <div class="col-lg">
                        <div class="card">
                            <div class="card-body bg-success">
                                <h1 class="text-center text-white" style="font-size:50px">
                                    <?= $masuk; ?>
                                </h1>
                            </div>
                            <div class="card-footer text-center font-weight-bold">
                                Suara Masuk
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card">
                            <div class="card-body bg-danger">
                                <h1 class="text-center text-white" style="font-size:50px">
                                    <?= $belum; ?>
                                </h1>
                            </div>
                            <div class="card-footer text-center font-weight-bold">
                                Belum Memilih
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card">
                            <div class="card-body bg-warning">
                                <h1 class="text-center text-white" style="font-size:50px">
                                    <?= $dpt; ?>
                                </h1>
                            </div>
                            <div class="card-footer text-center font-weight-bold">
                                Daftar Pemilih Tetap
                            </div>
                        </div>
                    </div>

                    <div class="col-lg">
                        <div class="card">
                            <div class="card-body bg-info">
                                <h1 class="text-center text-white" style="font-size:50px">
                                    <?php

                                    $percent = $masuk / $dpt * 100;

                                    echo number_format($percent, 2) . "%"; ?>
                                </h1>
                            </div>
                            <div class="card-footer text-center font-weight-bold">
                                Total
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg">
                        <h5>Persentase Perolehan Suara Paslon</h5>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($paslon as $p) : ?>
                        <div class="col-lg">

                            <div class="card">
                                <img class="img-fluid card-img-top" src="<?php echo base_url('assets/back/assets/images/') . $p['image']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $p['nama']; ?></h5>

                                    <p class="card-text"><?= $p['jargon']; ?></p>
                                </div>
                                <div class="progress" style="border-radius: 0px!important; height: 40px">
                                    <div class="progress-bar bg-blue" role="progressbar" style="width: <?php if ($masuk != '0') {
                                                                                                            $paspes = $p['jumlah_vote'] / $masuk * 100;
                                                                                                            echo number_format($paspes, 0) . "%";
                                                                                                        } else {
                                                                                                            $paspes = $p['jumlah_vote'] * 100;
                                                                                                            echo number_format($paspes, 0) . "%";
                                                                                                        }
                                                                                                        ?>;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <h5 class="text-light mt-2">
                                            <?php if ($masuk != '0') {
                                                $paspes = $p['jumlah_vote'] / $masuk * 100;
                                                echo number_format($paspes, 2) . "%";
                                            } else {
                                                $paspes = $p['jumlah_vote'] * 100;
                                                echo number_format($paspes, 2) . "%";
                                            }
                                            ?></h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>

    </div>
</div>