<div class="container">
	<div class="row">
		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800" align="center">Info Pengumuman pada PDAM Unit Karang Anyar Kota Palembang</h1>
		<br>
		<!-- DataTales Example -->
		<div class="col-lg-12" align="center">
			<!-- Collapsable Card Example -->
			<div class="card shadow mb-4">
				<!-- Card Header - Accordion -->
				<a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
					<h6 class="m-0 font-weight-bold text-primary">Info Pengumuman</h6>
				</a>
				<!-- Card Content - Collapse -->
				<div class="collapse show" id="collapseCardExample">
					<div class="card-body" align="left">
						<?php foreach ($all as $row) { ?>
							<div class="alert alert-info" role="alert">
								<p class="h6">
									<?php echo $row['judul'] ?>
									<br>
									<small>upload date : <?php echo $row['created'] ?> </small>
									<br>
									<button type="button" class="btn btn-primary btn_pengumuman" id="<?php echo $row['id_pengumuman'] ?>" data-toggle="modal" data-target="#PengumumanModal">Details</button>
							</div>
						<?php
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="PengumumanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Laporan Keluhan Pelanggan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-md-12">
					<h3>Info Keluhan</h3>
					<p id="test1"></p>
					<p id="test2"></p>
					<p id="test3"></p>
					<p id="test4"></p>
					<p id="test5"></p>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>

<script type="text/javascript" language="javascript">
	$('#detail_pengumuman').ready(function() {

		$(document).on("click", ".btn_pengumuman", function() {
			var id_pengumuman = $(this).attr('id');

			$.ajax({
				url: "<?php echo site_url('MemberControl/get_detail_pengumuman'); ?>",
				method: "GET",
				data: {
					id_pengumuman: id_pengumuman,
				},
				success: function(ajaxData) {
					var hasil = JSON.parse(ajaxData);
					$("#test1").text(hasil[0]['judul']);
					$("#test2").text(hasil[0]['tanggal']);
					$("#test3").text(hasil[0]['time']);
					$("#test4").text(hasil[0]['wilayah']);
					$("#test5").text(hasil[0]['isi_pengumuman']);

				}
			});

		});




	});
</script>