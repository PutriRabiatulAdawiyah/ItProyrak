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
                    <?php if (session()->getFlashdata('status')): ?>
                        <div class="alert alert-info" role="alert">
                            <?php echo session()->getFlashdata('status'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Button trigger modal Tambah Profil -->
                    <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">
                    <i class="bi bi-plus"></i>Tambah Profil
                    </button>

                    <!-- Modal Tambah Profil -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">TAMBAH PROFIL</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/profil/tambah" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Tanggal Dibuat</label>
                                            <input type="date" name="tgl_dibuat" placeholder="Masukkan waktu"
                                                class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">judul</label>
                                            <input type="text" name="judul" placeholder="Masukkan Nama Detail Property"
                                                class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                                            <input type="text" name="keterangan" placeholder="Masukkan Foto keterangan"
                                                class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                                            <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi"
                                                class="form-control" id="exampleInputPassword1">
                                        </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tabel untuk menampilkan data -->
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
                            <?php $no=1; foreach($profil as $data): ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo date('d M Y', strtotime($data['tgl_dibuat'])); ?></td>
                                        <td><?php echo $data['judul']; ?></td>
                                        <td><?php echo $data['keterangan']; ?></td>
                                        <td><?php echo $data['deskripsi']; ?></td>
                                        
                                        <td class="d-flex justify-content-center">
                                            <button class="btn btn-warning" data-toggle="modal" data-target="#editModal"><i
                                                    class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-danger" data-toggle="modal"
                                                        data-target="#hapusModal<?= $data['id_profil'] ?>"><i
                                                            class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('layoutadmin/footer'); ?>
