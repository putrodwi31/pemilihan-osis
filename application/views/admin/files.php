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
                            <li class="breadcrumb-item"><a>Password</a></li>
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
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Password</th>
                                    
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
                                        <td><?= $sm['password']; ?></td>
                                        
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>