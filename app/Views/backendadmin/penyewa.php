<?php echo view('layoutadmin/header'); ?>
<div class="main-panel">
	<div class="content">
		<div class="container-fluid">
			<h4 class="page-title">Data Penyewa</h4>
			<div class="card">
				<div class="card-header">
					<div class="card-title">DATA penyewa</div>
				</div>
				<div class="card-body">

					<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Penyewa
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">alamat</label>
    <input type="kos" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No_HP</label>
    <input type="kos" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">batas_sewa</label>
    <input type="kos" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">jenis_kelamin</label>
    <input type="kos" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Masuk</label>
    <input type="tanggal masuk" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Keluar</label>
    <input type="tanggal keluar" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input type="kos" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
					<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama</th>
								<th scope="col">Nama Property</th>
								<th scope="col">Batas Sewa</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1;foreach($penyewa as $data): ?>
							<tr>
								<td><?= $no ++; ?></td>
								<td> <?= $data['nama_penyewa'] ?> </td>
								<td> <?= $data['nama_property'] ?> </td>
								<td> <?= $data['batas_sewa'] ?> </td>
								<td class="d-flex">
									<button class="btn btn-warning" data-toggle="modal" data-target="#editModal"><i class="bi bi-pencil"> Edit</i></button>
									<button class="btn btn-danger" data-toggle="modal" data-target="#hapusModal<?= $data['id_penyewa'] ?>"><i class="bi bi-trash"> Hapus</i></>
								</td>
							</tr>
							<div class="modal fade" id="hapusModal<?= $data['id_penyewa'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<!--modal -->
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="/penyewa/hapus" method="post">
      <div class="modal-body">

	  Apakah anda yakin ingin menghapus data ini?
		  </div>
		  <div class="modal-footer">
			<input type="hidden" name="id_penyewa" value="<?= $data['id_penyewa'] ?>">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="submit" class="btn btn-danger">Hapus</button>
			</div>
		</form>
    </div>
  </div>
</div>

	<!-- Modal -->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="/penyewa/edit" method="post">
      <div class="modal-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input type="text" name="nama_penyewa" value="<?= $data['nama_penyewa'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kos</label>
    <input type="kos" name="nama_property" value="<?= $data['nama_property'] ?>" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"> batas_sewa</label>
    <input type="date" name="batas_sewa" value="<?= $data['batas_sewa'] ?>" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
</div>
<div class="modal-footer">
	<input type="hidden" name="id_penyewa" value="<?= $data['id_penyewa'] ?>">
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
    </div>
  </div>
</div>
							<!-- Modal -->

							<?php endforeach; ?>

						



						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo view('layoutadmin/footer'); ?>