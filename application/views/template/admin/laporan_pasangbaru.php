<div class="container">
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h4 class="m-0 font-weight-bold text-primary">Konfirmasi Pasang Baru</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="laporan_pasangbaru" width="100%">
					<thead>
						<tr>
							<th width="1%">
								<center>No</center>
							</th>
							<th width="20%">
								<center>Nama</center>
							</th>
							<th width="15%">
								<center>No. Rek</center>
							</th>
							<th width="15%">
								<center>Tanggal Pengajuan</center>
							</th>
							<th width="15%">
								<center>Photo KTP</center>
							</th>
							<th width="10%">
								<center>Photo KK</center>
							</th>
							<th width="10%">
								<center>Photo PBB</center>
							</th>
							<th width="10%">
								<center>Alamat</center>
							</th>
							<th width="10%">
								<center>No Telepon</center>
							</th>
							<th width="10%">
								<center>Aksi</center>
							</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>

<script type="text/javascript" language="javascript">
	$('#laporan_pasangbaru').ready(function() {
		var c = $('#laporan_pasangbaru').DataTable();
		load_data();

		function load_data() {
			$.ajax({

				url: '<?php echo site_url("AdminControl/get_aju_pasangbaru") ?>',
				dataType: "JSON",
				success: function(data) {
					c.clear().draw();
					var HTMLbuilder = "";
					for (var i = 0; i < data.length; i++) {
						var btn1 = '<button type="button" name="btn_terima" id="' + data[i]['no_kontrol'] + '" class="btn btn-xs btn-primary btn-circle btn_terima"><i class="fas fa-check"></i></button>';
						var btn2 = '<button type="button" name="btn_delete" id="' + data[i]['no_kontrol'] + '" class="btn btn-xs btn-danger btn-circle btn_tolak"><i class="fas fa-trash"></i></button>';
						var imgHtml = "<img src='../assets/img/" + data[i]['ktp'] + "' width='150' height='100'>";
						var imgHtml1 = "<img src='../assets/img/" + data[i]['kk'] + "' width='150' height='100'>";
						var imgHtml2 = "<img src='../assets/img/" + data[i]['pbb'] + "' width='150' height='100'>";


						c.row.add([
							"<center>" + [i + 1] + "</center>",
							"<center>" + data[i]['name'] + "</center>",
							"<center>" + data[i]['no_rek'] + "</center>",
							"<center>" + data[i]['date_created'] + "</center>",
							"<center>" + imgHtml + "</center>",
							"<center>" + imgHtml1 + "</center>",
							"<center>" + imgHtml2 + "</center>",
							"<center>" + data[i]['alamat'] + "</center>",
							"<center>" + data[i]['no_telepon'] + "</center>",
							"<center>" + btn1 + btn2 + "</center>",

						]).draw();
					}
				}
			});
		}


		$(document).on("click", ".btn_terima", function() {
			var no_kontrol = $(this).attr('id');
			var status = "yes";

			$.ajax({
				url: "<?php echo site_url('AdminControl/konfirm_pasangbaru'); ?>",
				method: "POST",
				data: {
					no_kontrol: no_kontrol,
					status: status
				},
				success: function(data) {
					load_data();
					swal({
						title: 'Konfirmasi Berhasil',
						text: '',
						type: 'success'
					});
				}
			});

		});

		$(document).on("click", ".btn_tolak", function() {
			var no_kontrol = $(this).attr('id');
			var status = "tolak";
			swal({
					title: "Tolak Pasang Baru",
					text: "Apakah anda yakin akan Menolak Pasang Baru ini?",
					type: "warning",
					showCancelButton: true,
					confirmButtonText: "Hapus",
					closeOnConfirm: true,
				},
				function() {
					$.ajax({
						url: "<?php echo site_url('AdminControl/konfirm_pasangbaru'); ?>",
						method: "POST",
						data: {
							no_kontrol: no_kontrol,
							status: status
						},
						success: function(data) {
							load_data();
							swal({
								title: 'Berhasil Ditolak',
								text: '',
								type: 'success'
							});
						}
					});
				});
		});
	});
</script>