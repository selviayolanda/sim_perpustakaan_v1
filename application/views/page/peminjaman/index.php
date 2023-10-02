<div class="container-fluid">
	<h2>Peminjaman</h2>
	<hr>

	<div class="row pt-3">
		<div class="col-lg-4">
			<div class="form-group">
				<select name="anggota" id="anggota" class="form-control">
					<option value="">-- pilih anggota --</option>
                    <?php foreach($anggota as $item): ?>
                        <option value="<?= $item['anggota_id'] ?>"><?= $item['anggota_nm'] ?></option>
                    <?php endforeach; ?>
				</select>
			</div>
		</div>
		<div class="col-lg-3">
			<button class="btn btn-block btn-primary" id="btn-hstry" data-toggle="modal" data-target="#tambah_peminjaman"></i> History peminjaman</button>
		</div>
	</div>
	<div class="row pt-3">
		<div class="col-lg-6">
			<table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th colspan="3">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="99">
                            <center>Tidak Ada Data!!!</center>
                        </td>
                    </tr>
                </tbody>
			</table>
		</div>
		<div class="col-lg-6">
            
			<div class="row">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label for="">Nama Buku</label>
                        <select name="anggota" id="anggota" class="form-control">
                            <option value="">-- Nama buku --</option>
                            <?php foreach($buku as $item): ?>
                                <option value="<?= $item['buku_id'] ?>"><?= $item['buku_nm'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
			</div>
			<div class="row pt-3">
                <div class="col-lg-3">
                    <div class="form-group">
						<label>Tgl pinjam</label>
						<input type="Date" name="tgl_pinjam" id="tgl_pinjam" value="<?= date('Y-m-d') ?>" readonly class="form-control">
					</div>
				</div>
				<div class="col-lg-3">
                    <div class="form-group">
						<label>Tanggal kembalikan</label>
						<input type="Date" name="tgl_kembali" id="tgl_kembali" class="form-control">
					</div>
				</div>
                <div class="col-lg-3">
                    <label for="">-</label>
                    <a href="" class="btn btn-block btn-success">
                        <i class="fas fa-cart-plus"></i>
                    </a>
                </div>
			</div>
			<div class="row pt-3">
				<div class="col-lg-6">
					<a href="" class="btn btn-block btn-primary">Simpan tindakan</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_peminjaman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('kategori/simpan_kategori')?>" method="post"
					enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama kategori</label>
						<input type="text" name="kategori_nm" id="kategori_nm" class="form-control">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
			</xform>
		</div>
	</div>
</div>
<script>
    document.getElementById('btn-hstry').style.display = "none";
    $('#anggota').on('change', function(){
        var anggota = $('#anggota').val();
        if(anggota != ''){
            document.getElementById('btn-hstry').style.display = "block";
        }else{
            document.getElementById('btn-hstry').style.display = "none";
        }
    });
</script>
