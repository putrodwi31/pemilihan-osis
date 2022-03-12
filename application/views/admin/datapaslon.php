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
                            <li class="breadcrumb-item"><a>Daftar Paslon</a></li>
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
                        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newAddPasModal"><i class="feather icon-plus" style="margin-left: -10px; margin-right: 3px;"></i>Tambah data paslon</a>
                    </div>
                </div>
                <div class="row mb-3 mt-3">
                    <div class="col-lg">
                        <h5>Daftar Paslon</h5>
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

                                <a href="<?= base_url('admin/editpaslon/') . $p['id']; ?>" class="btn btn-success"><i class="feather icon-edit" style="margin-right: 3px;"></i>Edit</a>
                                <a href="<?= base_url('admin/deletepaslon/') . $p['id']; ?>" class="btn btn-danger tombol-hapus-paslon" data-paslon="<?php echo $p['nama'] ?>"><i class="feather icon-trash-2" style="margin-right: 3px;"></i>Hapus</a>

                            </div>

                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="newAddPasModal" tabindex="-1" role="dialog" aria-labelledby="newAddPasModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newAddPasModalLabel">Tambah Data Paslon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('admin/datapaslon'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Paslon" value="<?php echo set_value('nama') ?>">
                    <?php echo form_error('nama', '<small class="text-danger pt-3 pl-2">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label class="mr-3">Image&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="custom-file col-sm-10">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label for="image" class="custom-file-label">Choose file</label>
                    </div>
                    
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="jargon" name="jargon" placeholder="Jargon" value="<?php echo set_value('jargon') ?>">
                    <?php echo form_error('jargon', '<small class="text-danger pt-3 pl-2">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="visi" name="visi" aria-label="With textarea" placeholder="Visi"><?php echo set_value('visi') ?></textarea>
                    <?php echo form_error('visi', '<small class="text-danger pt-3 pl-2">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="misi" name="misi" aria-label="With textarea" placeholder="Misi"><?php echo set_value('misi') ?></textarea>
                    <?php echo form_error('misi', '<small class="text-danger pt-3 pl-2">', '</small>'); ?>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>