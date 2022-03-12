<?php  ?>

<?php
echo $this->session->flashdata('message');
?>
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
							<li class="breadcrumb-item"><a>Coblos</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->

		<div class="row">
			<div class="col-xl-12">
				<?php if ($user['role_id'] != '1') : ?>
					<?php if ($user['vote'] != '1') : ?>
						<?php if ($user['password'] != 123) : ?>
							<div class="card-deck">
								<?php foreach ($paslon as $p) : ?>
									<div class="card">
										<img class="img-fluid card-img-top" src="<?php echo base_url('assets/back/assets/images/') . $p['image']; ?>" alt="<?php echo $p['nama'] ?>" title="<?php echo $p['nama'] ?>">
										<div class="card-body">
											<h5 class="card-title"><?= $p['nama']; ?></h5>
											<p class="card-text"><?= $p['jargon']; ?></p>
										</div>
										<div class="card-footer">
											<small class="text-muted"><a data-toggle="modal" data-target="#newPas<?= $p['id']; ?>Modal" class="btn btn-outline-success btn-block">Visi & Misi</a></small>
											<br>
											<small class="text-muted"><a href="<?= base_url('coblos/') . $p['id']; ?>" class="btn btn-outline-primary btn-block tombol-coblos" data-paslon="<?php echo $p['nama'] ?>">Coblos</a></small>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						<?php else : ?>
							<div class="card-deck">
								<div class="card">
									<div class="card-body">
										<a href="<?php echo base_url('user/changePassword') ?>" class="btn btn-primary btn-block mt-5 mb-5">Silahkan ganti password anda terlebih dahulu, klik disini!</a>
									</div>

								</div>
							</div>
						<?php endif ?>
					<?php else : ?>
						<div class="card-deck">
							<div class="card">
								<div class="card-body">
									<button class="btn btn-primary btn-block mt-5 mb-5">Terimakasih telah menggunakan Hak Pilih anda</button>
								</div>

							</div>
						</div>
					<?php endif; ?>

				<?php else : ?>
					<div class="card-deck">
						<div class="card">
							<div class="card-body">
								<button class="btn btn-warning btn-block mt-5 mb-5">Mohon maaf admin tidak mempunyai Hak Pilih</button>
							</div>

						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<!-- Modal -->
		<?php foreach ($paslon as $p) : ?>
			<div class="modal fade" id="newPas<?= $p['id'] ?>Modal" tabindex="-1" role="dialog" aria-labelledby="newPas<?= $p['id'] ?>ModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="newPas<?= $p['id'] ?>ModalLabel"><?= $p['nama']; ?></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h6><i class="feather icon-link-2" style="margin-right: 3px;"></i>Visi</h6>

							<textarea class="form-control" rows="5" name="visi" id="visi" readonly><?= $p['visi']; ?></textarea>


							<h6 class="mt-3"><i class="feather icon-link-2" style="margin-right: 3px;"></i>Misi</h6>
							<div class="container-fluid pr-4 text-justify">
								<?= $p['misi']; ?>
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>