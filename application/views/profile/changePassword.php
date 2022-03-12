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
                            <li class="breadcrumb-item"><a>Profile</a></li>
                            <li class="breadcrumb-item"><a>Change Password</a></li>
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
                        <h5>Change Password</h5>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg">
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('user/changePassword'); ?>" method="post">
                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" class="form-control" id="current_password" name="current_password">
                                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" class="form-control" id="new_password1" name="new_password1">
                                <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Repeat New Password</label>
                                <input type="password" class="form-control" id="new_password2" name="new_password2">
                                <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <?php if ($user['password'] == 123): ?>                           
                                    <small>*disarankan untuk segera mengganti password akun anda demi keamanan dari penyalahgunaan oleh oknum tidak bertanggung jawab.</small>
                                <?php endif ?>
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                                <a href="<?= base_url('user') ?>" class="btn btn-danger"><i class="feather icon-corner-down-left" style="margin-right: 3px;"></i>Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>