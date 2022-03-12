<!-- [ Main Content ] start -->
<?php echo $this->session->flashdata('message'); ?>
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
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a>Daftar Pemilih</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div>
                            <a href="" class="btn mb-3 btn-primary" data-toggle="modal" data-target="#formModal"><i class="feather icon-plus" style="margin-left: -10px; margin-right: 3px;"></i>Tambah Data</a>
                            <a href="" class="btn mb-3 btn-success" data-toggle="modal" data-target="#newAddUserModal"><i class="feather icon-plus" style="margin-left: -10px; margin-right: 3px;"></i>Import Data</a>
                            <a href="<?php echo base_url('admin/resetAll') ?>" class="btn btn-warning mb-3 tombol-resetall"><i class="mr-2 feather icon-refresh-cw" style="margin-left: -5px;"></i>Reset All</a>
                            <a href="" class="btn btn-danger mb-3 tombol-deleteall"><i class="mr-2 feather icon-trash-2" style="margin-left: -5px;"></i>Delete All</a>
                        </div>
                        <table id="daftarpemilih" class="table table-hover col-lg">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Hak pilih</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($user_list as $sm) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $sm['nis']; ?></td>
                                        <td><?= $sm['name']; ?></td>
                                        <td><?= $sm['kelas']; ?></td>
                                        <?php if ($sm['vote'] == '1') : ?>
                                            <td><small class="badge badge-success">Telah digunakan</small></td>
                                        <?php else : ?>
                                            <td><small class="badge badge-danger">Belum digunakan</small></td>
                                        <?php endif; ?>
                                        <td>
                                            <!-- <a href="" class="badge badge-success">edit</a> -->
                                            <a href="<?= base_url('admin/deleteuser/') . $sm['id']; ?>" class="badge badge-danger tombol-hapus" data-user="<?php echo $sm['name'] ?>">delete</a>
                                            <a href="<?= base_url('admin/reset/') . $sm['id']; ?>" class="badge badge-warning tombol-reset" data-user="<?php echo $sm['name'] ?>">reset</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="newAddUserModal" tabindex="-1" role="dialog" aria-labelledby="newAddUserModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newAddUserModalLabel">Import Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?= form_open_multipart('admin/importexcel'); ?>
                    <div class="modal-body">
                        <div>
                            <img class="img-fluid" src="<?= base_url('assets/back/assets/images/contoh.png') ?>" alt="Contoh">
                            <small>*Jadikan format data seperti gambar diatas</small>

                        </div>
                        <div><small>*Format file yang didukung xlsx/csv</small></div>
                        <div class="form-group">
                            <label class="mr-3">File&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <div class="custom-file col-sm-10">
                                <input type="file" class="custom-file-input" id="excel" name="excel" accept=".xlsx, .csv">
                                <label for="excel" class="custom-file-label">Choose file</label>
                            </div>



                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="submit" value="upload"><i class="mr-2 feather icon-save" style="margin-left: -5px;"></i>Import</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- modal box -->
        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="judulModal">Tambah User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <?php echo form_open_multipart('admin/adduser'); ?>

                        <div class="form-group">

                            <input type="text" name="nis" id="nis" class="form-control" placeholder="NIS" value="<?php echo set_value('nis') ?>">

                        </div>
                        <?php echo form_error('nis', '<small class="text-danger pt-3 pl-2">', '</small>'); ?>
                        <div class="form-group">

                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama" required value="<?php echo set_value('name') ?>">

                        </div>
                        <?php echo form_error('name', '<small class="text-danger pt-3 pl-2">', '</small>'); ?>
                        <div class="form-group">

                            <input type="text" name="kelas" id="Kelas" class="form-control" placeholder="Kelas" required value="<?php echo set_value('kelas') ?>">

                        </div>
                        <?php echo form_error('kelas', '<small class="text-danger pt-3 pl-2">', '</small>'); ?>
                        <div class="form-group">
                            <select class="form-control" name="gender">
                                <option value="">Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="address" id="address" class="form-control" placeholder="Alamat"><?php echo set_value('address') ?></textarea>
                        </div>

                        <?php echo form_error('address', '<small class="text-danger pt-3 pl-2">', '</small>'); ?>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Tambah</button>
                        <button class="btn btn-secondary" data-dismiss="modal" type="button">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end -->