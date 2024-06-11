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

					
					<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Rekening Pembayaran</th>
								<th scope="col">Tgl Bayar</th>
								<th scope="col">Jumlah Pembayaran</th>
								<th scope="col">Nama Bank</th>
								<th scope="col">No. Rekening</th>
								<th scope="col">Bukti Transpfer</th>
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

                              
							<?php endforeach; ?>

						



						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo view('layoutadmin/footer'); ?>