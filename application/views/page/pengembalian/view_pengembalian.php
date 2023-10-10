<div class="container-fluid">
	<h2>Pengembalian</h2>
	<hr>
	<div class="row pt-3">
		<div class="col-lg-4">
            <div class="form-group">
				<label for="">Kode Peminjaman : <?= $peminjaman['peminjaman_id'] ?> - <?= $peminjaman['anggota_nm'] ?></label>
            </div>
		</div>
	</div>
	<div class="row pt-5">
		<div class="col-lg-12">
			<!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                   <h6 class="m-0 font-weight-bold text-primary ">Detail yang dipinjam</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Buku</th>
									<th>Tanggal Pinjam</th>
									<th>Tanggal Keluar</th>
									<th>Denda</th>
									<th>Status</th>
									<th>aksi</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
                        </table>
                    </div>
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
