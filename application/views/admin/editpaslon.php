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
                            <li class="breadcrumb-item"><a>Data Paslon</a></li>
                            <li class="breadcrumb-item"><a>Edit Paslon</a></li>
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
                        <h5>Edit Data Paslon</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10">

                        <?= form_open_multipart('admin/editpaslon/' . $paslon['id']); ?>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Paslon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $paslon['nama']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jargon" class="col-sm-2 col-form-label">Jargon</label></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="jargon" name="jargon" aria-label="With textarea" placeholder="Misi"><?= $paslon['jargon']; ?></textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="visi" class="col-sm-2 col-form-label">Visi</label></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="visi" name="visi" aria-label="With textarea" placeholder="Misi"><?= $paslon['visi']; ?></textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="misi" class="col-sm-2 col-form-label">Misi</label></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="10" id="misi" name="misi" aria-label="With textarea" placeholder="Misi"><?= $paslon['misi']; ?></textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                Picture
                            </div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?= base_url('assets/back/assets/images/') . $paslon['image']; ?>" class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label for="image" class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success"><i class="feather icon-save" style="margin-right: 3px;"></i>Save Changes</button>
                                <a href="<?= base_url('admin/datapaslon/') ?>" class="btn btn-danger"><i class="feather icon-corner-down-left" style="margin-right: 3px;"></i>Back</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>