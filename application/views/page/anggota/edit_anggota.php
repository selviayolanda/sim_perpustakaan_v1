<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>Edit anggota</h3>
	<form method="post" action="<?= base_url('anggota/edit_anggota/'.$anggota['anggota_id'])?>" enctype="multipart/form-data">

	<input type="hidden" name="anggota_id" class="form-control" value="<?= $anggota['anggota_id'] ?>">
		
		<div class="form-group">
			<label>Nama anggota</label>
			<input type="text" name="anggota_nm" class="form-control" value="<?= $anggota['anggota_nm'] ?>">
		</div>

		<div class="form-group">
			<label>Jneis Kelamin</label>
			<select name="jk" class="form-control">
				<option value="L" <?= (($anggota['jk']=='P')? 'selected' : '') ?>>Laki-laki</option>
				<option value="P"  <?= (($anggota['jk']=='P')? 'selected' : '') ?>>Perempuan</option>
			</select>
		</div>

		<div class="form-group">
			<label>No Telp</label>
			<input type="text" name="telp_no" class="form-control" value="<?= $anggota['telp_no'] ?>">
		</div>

		<div class="form-group mb-3">
			<label>Alamat</label>
			<input type="text" name="alamat" class="form-control" value="<?= $anggota['alamat'] ?>">
		</div>

		<button type="submit" class="btn btn-success btn-sm">Simpan</button>

	</form>
</div>