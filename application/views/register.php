<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/logopdam.png">

	<title>
		<?= $title; ?>
	</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-info">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-lg-block bg-register-image" style="background-image: url('/pdamkaranganyar/assets/img/backgroundreg.png')"></div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h6 text-gray-900 mb-4"><img src="/pdamkaranganyar/assets/img/logo.png" style="width: 100px; height: 70px;"></h1>
										<h1 class="h3 text-info mb-4"><b>Pasang Baru</b></h1>
									</div>
									<form class="user" method="POST" action="<?= base_url('AuthLogin/register'); ?>" enctype="multipart/form-data">
										<div class="form-group">
											<input type="text" class="form-control" id="nomor_kontrol" name="nomor_kontrol" placeholder="Nomor Kontrol" value="<?= $no_urut ?>" readonly>
											<?= form_error('nomor_kontrol', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
											<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="no_rekair" name="no_rekair" placeholder="Nomor Rekening Air" value="<?= set_value('no_rekair'); ?>">
											<?= form_error('no_rekair', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
												<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="col-sm-6">
												<input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
											</div>
										</div>
										<div class="form-group">
											<label>Upload KTP : </label>
											<div class="custom-file">
												<input type="file" name="ktp_image" id="ktp_image" accept="image/*">
												<?= form_error('ktp_image', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
										</div>
										<div class="form-group">
											<label>Upload KK : </label>
											<div class="custom-file">
												<input type="file" name="kk" id="kk" accept="image/*">
												<?= form_error('kk', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
										</div>
										<div class="form-group">
											<label>Upload Sertifikat PBB : </label>
											<div class="custom-file">
												<input type="file" name="pbb" id="pbb" accept="image/*">
												<?= form_error('pbb', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat'); ?>">
											<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Nomor Telepon" value="<?= set_value('nomor_telepon'); ?>">
											<?= form_error('nomor_telepon', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<button type="submit" class="btn btn-success btn-block">Register
											Account</button>
									</form>
									<hr>
									<div class="text-center">
										<a class="small" href="<?= base_url('AuthLogin'); ?>" style="font-size:14px;">Sudah
											memiliki akun pasang baru? Silahkan Login!</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>
</body>





</html>