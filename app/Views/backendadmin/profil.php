<?php echo view('layoutadmin/header'); ?>
        <div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<h4 class="page-title">Profil</h4>
                    <div class="card">
							<div class="card-header">
								<div class="card-title">Profil</div>
							</div>
							<div class="card-body">
								<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
									<thead>
										<tr>
											<th scope="col" style="width: 5%;">No</th>
											<th scope="col" style="width: 15%;">Tgl. Dibuat</th>
											<th scope="col" style="width: 20%;">Judul</th>
											<th scope="col" style="width: 20%;">Keterangan</th>
											<th scope="col" style="width: 30%;">Deskripsi</th>
											<th scope="col" style="width: 10%;">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>22 Mei 2024</td>
											<td>Profil</td>
											<td>Kisi dan Misi</td>
											<td>Kos ini dibuat pada tahun 2024</td>
											<td class="actions">
												<button class="btn btn-success btn-sm">
													<i class="la la-plus-square"></i> 
												</button>
												<button class="btn btn-warning btn-sm">
													<i class="la la-edit"></i>
												</button>
												<button class="btn btn-danger btn-sm">
													<i class="la la-trash"></i>
												</button>
											</td>
										</tr>
									</tbody>
								</table>

							</div>
						</div>
				</div>
				
			</div>
		</div>
<?php echo view('layoutadmin/footer'); ?>