<?php  ?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Login - SMKN 2 Kota Bekasi</title>

	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Pemilihan Ketua OSIS SMKN 2 Kota Bekasi" name="descriptison">
  	<meta content="Pilkasis" name="keywords">

	<link href="<?php echo base_url('assets/front/') ?>img/logoo.png" rel="icon">
 	<link href="<?php echo base_url('assets/front/') ?>img/logoo.png" rel="apple-touch-icon">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/back/') ?>assets/css/style.css">
	
	


</head>

<!-- [ auth-signin ] start -->
<form action="<?php echo base_url('auth') ?>" method="post">
<div class="auth-wrapper" style="background-image: url(<?php echo base_url('assets/front/')?>img/team-bg.jpg);">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="<?php echo base_url('assets/front/') ?>img/kpo.png" alt="" class="img-fluid mb-4" style="width:110px; height: 110px; ">
						<h4 class="mb-3 f-w-400">Login Akun</h4>
						 <?php echo $this->session->flashdata('message'); ?>
						<div class="form-group mb-3">
							<label class="floating-label" for="nis">NIS</label>
							<input type="text" class="form-control" id="nis" name="nis" value="<?php echo set_value('nis') ?>">							
							<?php echo form_error('nis', '<small class="form-text text-danger text-left">', '</small>') ?>
						</div>						
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" class="form-control" id="Password" name="password">
							<?php echo form_error('password', '<small class="form-text text-danger text-left">', '</small>') ?>
						</div>
						<div>
							<p>Default Password : 123</p>
						</div>
						<button class="btn btn-block btn-primary mb-4">Login</button>
						<p class="mb-2 text-muted">Halaman Sebelumnya? <a href="<?php echo base_url() ?>" class="f-w-400">Back</a></p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="<?php echo base_url('assets/back/') ?>assets/js/vendor-all.min.js"></script>
<script src="<?php echo base_url('assets/back/') ?>assets/js/plugins/bootstrap.min.js"></script>

<script src="<?php echo base_url('assets/back/') ?>assets/js/pcoded.min.js"></script>



</body>

</html>
