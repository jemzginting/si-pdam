<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<!-- <h1 class="h3 mb-4 text-gray-800">Selamat Datang Website Pengadilan Agama</h1> -->
	<div class="row">
		<div class="col-lg-12">

			<?php if ($session['status'] == 'no') { ?>
				<div class="alert alert-danger" role="alert">
					<h4 align="center">MAAF AKUN ADA BELUM DIKONFIRMASI </h4>
				</div>
			<?php } ?>

		</div>
	</div>
	<div class="row">
		<!-- Earnings (Monthly) Card Example -->
		<?php if ($session['status'] == 'yes') { ?>
			<div class="col-xl-4 col-md-6 mb-4">
				<div class="card bg-gradient-success text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="h5 text-md font-weight-bold text-uppercase">
									<a href="<?= base_url('MemberControl/pendaftaran_konsultasi'); ?>" class="text-white">Pengaduan Keluhan</a>
								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-edit fa-6x text-white"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-4 col-md-6 mb-4">
				<div class="card bg-gradient-primary text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="h5 text-md font-weight-bold text-uppercase">
									<a href="<?= base_url('MemberControl/form_pelayanan'); ?>" class="text-white">Info
										Pengumuman</a>
								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-bullhorn fa-6x text-white"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-4 col-md-6 mb-4">
				<div class="card bg-gradient-warning text-white shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="h5 text-md font-weight-bold text-uppercase">
									<a href="<?= base_url('MemberControl/myprofile'); ?>" class="text-white">Profile
										Pelanggan</a>
								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-user fa-6x text-white"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		<!-- Earnings (Monthly) Card Example -->
		<!-- <div class="col-xl-4 col-md-6 mb-4">
			<div class="card bg-gradient-info text-white shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-md font-weight-bold text-uppercase">
								<a href="<?= base_url('MemberControl/tanggapan_konsultasi'); ?>"
									class="text-white">Tanggapan Permohonan Konsultasi</a>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-pen fa-6x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</div>
<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->