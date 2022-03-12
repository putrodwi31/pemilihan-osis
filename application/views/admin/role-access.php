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
                            <li class="breadcrumb-item"><a>Role</a></li>
                            <li class="breadcrumb-item"><a>Access</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg">
                            <?= $this->session->flashdata('message'); ?>
                            <h5>Role : <?= $role['role']; ?></h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Menu</th>
                                            <th scope="col">Access</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($menu as $m) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?= $m['menu']; ?></td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                                    </div>
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
            </div>
        </div>