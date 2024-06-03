<?php echo view('layoutadmin/header'); ?>
		
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<h4 class="page-title">Dashboard</h4>
					<div class="row">
						<div class="col-md-3">
							<div class="card card-stats card-warning">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="la la-users"></i>
											</div>
										</div>
										<div class="col-7 d-flex align-items-center">
											<div class="numbers">
												<p class="card-category">Penyewa</p>
												<h4 class="card-title">1,294</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card card-stats card-success">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="la la-bar-chart"></i>
											</div>
										</div>
										<div class="col-7 d-flex align-items-center">
											<div class="numbers">
												<p class="card-category">Data Sewa</p>
												<h4 class="card-title">$ 1,345</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card card-stats card-danger">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="la la-newspaper-o"></i>
											</div>
										</div>
										<div class="col-7 d-flex align-items-center">
											<div class="numbers">
												<p class="card-category">Property</p>
												<h4 class="card-title">1303</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<div class="card">
							<div class="card-header">
								<div class="card-title">Data Sewa</div>
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
