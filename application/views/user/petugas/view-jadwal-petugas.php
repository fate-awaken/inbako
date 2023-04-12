<div class="container" style="color: #FE804D;">

	<br>

	<div class="text-center">
		<br>
		<h1 class="fw-bolder">Jadwal Pengambilan</h1>
	</div>

	<div class="text-center">
		<a type="button" data-target="#newJadwal" data-toggle="modal" style="background-color: #FE804D;" class="btn text-white">Buat Jadwal Pengambilan</a>
	</div>

	<br>
	<br>

	<div class="row row-cols-1 row-cols-md-3 g-4">
		<div class="col">
			<div class="card text-center" style="background-color: #FE804D;">
				<img src="https://images.unsplash.com/photo-1679678691001-529c36fdfee5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title text-white">XXXXX - DD/MM/YYYY</h5>
					<div class="text-center">
						<a href="<?= base_url('petugas/jadwal') ?>" class="btn " style="background-color: white; color:#FE804D;">Lihat Pengambilan</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="newJadwal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="newMenuModalLabel">Buat Jadwal Pengambilan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<form action="<?= base_url('mahasiswa/tambahmhs'); ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label class="form-label">Kode Wilayah : </label>
							<input type="number" class="form-control mb-2" id="kode_wilayah" name="kode_wilayah" required>
							<label class="form-label">Tanggal : </label>
							<input type="date" class="form-control mb-2" id="tgl" name="tgl" required>
							<label class="form-label" for="jamAwal">Dari Jam : </label>
							<input type="time" class="form-control mb-2" id="jam_awal" name="jam_awal" placeholder="Jam Awal" required>
							<label class="form-label">Sampai Jam : </label>
							<input type="time" class="form-control mb-2" id="jam_tenggat" name="jam_tenggat" placeholder="Jam Tenggat" required>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Tambah</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
