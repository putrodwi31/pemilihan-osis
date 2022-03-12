<!-- [ Main Content ] start -->
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
                            <li class="breadcrumb-item"><a>Saran dan Masukan</a></li>
                            <li class="breadcrumb-item"><a>View</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg">
                        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                        <?= $this->session->flashdata('message'); ?>
                        <h5>Saran dan Masukan</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $feedback['nama']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email" value="<?= $feedback['email']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="status" name="status" value="<?= $feedback['status']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="masukan" class="col-sm-2 col-form-label">Masukan</label></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="masukan" name="masukan" aria-label="With textarea" placeholder="masukan"><?= $feedback['masukan']; ?></textarea>

                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <a href="<?= base_url('admin/feedback/') ?>" class="btn btn-danger"><i class="feather icon-corner-down-left" style="margin-right: 3px;"></i>Back</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>