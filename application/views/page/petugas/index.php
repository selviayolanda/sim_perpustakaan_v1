<div class="container-fluid">
	<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_kategori"><i
			class="fas fa-fw fa-plus"></i> Tambah kategori</button>

	<table class="table table-hovered mt-3">
		<tr>
			<th>No</th>
			<th>Nama Petugas</th>
            <th>Username</th>
			<th>Password</th>
            <th>Role Id</th>
			<th>No Telp</th>
            <th>Alamat</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php $no=1; ?>
        <?php foreach($petugas as $row): ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $row['petugas_nm'] ?></td>
			<td><?= $row['username'] ?></td>
			<td><?= $row['password'] ?></td>
			<td><?= $row['role_nm'] ?></td>
			<td><?= $row['telp_no'] ?></td>
			<td><?= $row['alamat'] ?></td>
			<td><?= $row['created_at'] ?></td>
			<td><?= $row['updated_at'] ?></td>
			<td>
				<a href="<?= base_url('petugas/hapus_petugas/'.$row['petugas_id']); ?>" class="btn btn-sm btn-danger">
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
            <form action="<?= base_url('petugas/simpan_petugas')?>" method="post" enctype="multipart/form-data">
			<div class="modal-body">
					<div class="form-group">
						<label>Nama Petugas</label>
						<input type="text" name="petugas_nm" id="petugas_nm" class="form-control">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" id="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" id="password" class="form-control">
					</div>
					<div class="form-group">
						<label>Role</label>
                        <select name="role_id" id="role_id" class="form-control">
                            <option value="">-- pilih --</option>
                            <?php foreach($role as $item): ?>
                            <option value="<?= $item['role_id'] ?>"><?= $item['role_nm'] ?></option>
                            <?php endforeach; ?> 
                        </select>
					</div>
					<div class="form-group">
						<label>No telp</label>
						<input type="text" name="telp_no" id="telp_no" class="form-control">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" id="alamat" class="form-control">
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
