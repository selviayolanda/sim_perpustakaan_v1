<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>Edit buku</h3>
	<form method="post" action="<?= base_url('buku/edit_buku/'.$buku['buku_id'])?>" enctype="multipart/form-data">

	<input type="hidden" name="buku_id" class="form-control" value="<?= $buku['buku_id'] ?>">
		
		<div class="form-group">
			<label>Nama buku</label>
			<input type="text" name="buku_nm" class="form-control" value="<?= $buku['buku_nm'] ?>">
		</div>

		<div class="form-group">
			<label>Kategori</label>
			<select name="kategori_id" id="kategori_id" class="form-control">
				<option value="">-- pilih --</option>
				<?php foreach($kategori as $item): ?>
				<option value="<?= $item['kategori_id'] ?>" <?= (($item['kategori_id'] == $buku['kategori_id'])? 'selected' : '') ?> ><?= $item['kategori_nm'] ?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<div class="form-group">
			<label>Penulis buku</label>
			<input type="text" name="penulis" class="form-control" value="<?= $buku['penulis'] ?>">
		</div>

		<div class="form-group mb-3">
			<label>Penerbit buku</label>
			<input type="text" name="penerbit" class="form-control" value="<?= $buku['penerbit'] ?>">
		</div>

		<button type="submit" class="btn btn-success btn-sm">Simpan</button>

	</form>
</div>