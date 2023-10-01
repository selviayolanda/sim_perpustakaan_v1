<div class="container-fluid">
	<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_kategori"><i
			class="fas fa-fw fa-plus"></i> Tambah kategori</button>

	<table class="table table-hovered mt-3">
		<tr>
			<th>No</th>
			<th>Nama Anggota</th>
            <th>Jenis Kelamin</th>
			<th>No.Telp.</th>
            <th>Alamat</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php $no=1; ?>
        <?php foreach($anggota as $row): ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $row['anggota_nm'] ?></td>
			<td><?= (($row['jk'] == 'L')? 'Laki-Laki' : 'Perempuan') ?></td>
			<td><?= $row['telp_no'] ?></td>
			<td><?= $row['alamat'] ?></td>
			<td><?= $row['created_at'] ?></td>
			<td><?= $row['updated_at'] ?></td>
			<td>
				<a href="<?= base_url('anggota/hapus_anggota/'.$row['anggota_id']); ?>" class="btn btn-sm btn-danger">
					<i class="fas fa-trash-alt"></i>
				</a>
			</td>
		</tr>
        <?php endforeach; ?>


	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
            <form action="<?= base_url('anggota/simpan_anggota')?>" method="post" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="form-group">
					<label>Nama Anggota</label>
					<input type="text" name="anggota_nm" id="anggota_nm" class="form-control">
				</div>
				<div class="form-group">
					<label>Jenis Kelamin</label>
					<!-- <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control"> -->
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="">-- pilih --</option>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
				</div>
				<div class="form-group">
					<label>No. Telp.</label>
					<input type="text" name="no_telp" id="no_telp" class="form-control">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<!-- <input type="text" name="no_telp" id="no_telp" class="form-control"> -->
                    <textarea name="alamat" id="alamat" class="form-control"></textarea>
				</div>
                
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button class="btn btn-primary">Simpan</button>
			</div>
			</form>
		</div>
	</div>
</div>
