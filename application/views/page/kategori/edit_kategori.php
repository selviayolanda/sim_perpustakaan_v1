<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>Edit kategori</h3>
	<form method="post" action="<?= base_url('kategori/edit_kategori/'.$kategori['kategori_id'])?>" enctype="multipart/form-data">

	<input type="hidden" name="kategori_id" class="form-control" value="<?= $kategori['kategori_id'] ?>">
		
		<div class="form-group">
			<label>Nama kategori</label>
			<input type="text" name="kategori_nm" class="form-control" value="<?= $kategori['kategori_nm'] ?>">
		</div>

		<button type="submit" class="btn btn-success btn-sm">Simpan</button>

	</form>
</div>