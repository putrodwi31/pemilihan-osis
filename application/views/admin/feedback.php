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
                            <li class="breadcrumb-item"><a>Daftar Saran & Masukan</a></li>
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
                        <table id="daftarpemilih" class="table table-hover col-lg">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Masukan</th>
                                    <th scope="col">Status</th>

                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($feedback as $sm) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $sm['nama']; ?></td>
                                        <td><?= $sm['email']; ?></td>
                                        <td><?= word_limiter($sm['masukan'], 3); ?></td>
                                        <td><?= $sm['status']; ?></td>

                                        <td>
                                            <a href="<?= base_url('admin/viewfeed/') . $sm['id']; ?>" class="badge badge-info">view</a>
                                            <a href="<?= base_url('admin/deletefeed/') . $sm['id']; ?>" class="badge badge-danger tombol-hapus-feedback" data-feedback="<?php echo $sm['nama'] ?>">delete</a>
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