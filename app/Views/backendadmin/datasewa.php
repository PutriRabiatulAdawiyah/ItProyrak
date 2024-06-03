<?php echo view('layoutadmin/header'); ?>
        <div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<h4 class="page-title">Data Sewa</h4>
                    <div class="card">
							<div class="card-header">
								<div class="card-title">DATA SEWA</div>
							</div>
							<div class="card-body">
								<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Tgl. Masuk</th>
											<th scope="col">Tgl. Keluar</th>
											<th scope="col">Nama</th>
											<th scope="col">Kos</th>
											<th scope="col">Aksi</th>
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>22 mei 2023</td>
											<td>22 juni 2025</td>
											<td>Putri Rabiatul</td>
											<td>Kos no1</td>
											<td><a href="icon.html"><i class="las la-edit"> Edit</i></a></td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
				</div>
				
			</div>
		</div>
<?php echo view('layoutadmin/footer'); ?>