<div class="container" style="color: #FE804D;">

	<br>

	<div class="text-center">
		<br>
		<h1 class="fw-bolder">Data Penduduk</h1>
	</div>

	<br>

	<table class="table table-hover text-dark">
		<thead class="table-secondary">
			<tr>
				<th scope="col">NIK</th>
				<th scope="col">Nama</th>
				<th scope="col">Kelurahan</th>
				<th scope="col">Kecamatan</th>
				<th scope="col">Kota</th>
				<th scope="col">RT</th>
				<th scope="col">RW</th>
				<th scope="col">TTL</th>
				<th scope="col">No. Telepon</th>
				<th scope="col">Kode Wilayah</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($warga as $row) :
			?>

				<tr>
					<td><?= $row->nik; ?></td>
					<td><?= $row->nama; ?></td>
					<td><?= $row->kelurahan; ?></td>
					<td><?= $row->kecamatan; ?></td>
					<td><?= $row->kota; ?></td>
					<td><?= $row->rt; ?></td>
					<td><?= $row->rw; ?></td>
					<td><?= $row->ttl; ?></td>
					<td><?= $row->no_telpon; ?></td>
					<td><?= $row->no_wilayah; ?></td>

				</tr>
			<?php endforeach; ?>
	</table>

</div>