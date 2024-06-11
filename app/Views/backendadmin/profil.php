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
                    <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambahModal">
                        <i class="bi bi-plus"></i>Tambah Profil
                    </button>

                    <!-- Modal Tambah Profil -->
                    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahModalLabel">TAMBAH PROFIL</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/profil/tambah" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="tgl_dibuat" class="form-label">Tanggal Dibuat</label>
                                            <input type="date" name="tgl_dibuat" placeholder="Masukkan waktu" class="form-control" id="tgl_dibuat">
                                        </div>
                                        <div class="mb-3">
                                            <label for="judul" class="form-label">Judul</label>
                                            <input type="text" name="judul" placeholder="Masukkan Nama Detail Property" class="form-control" id="judul">
                                        </div>
                                        <div class="mb-3">
                                            <label for="keterangan" class="form-label">Keterangan</label>
                                            <input type="text" name="keterangan" placeholder="Masukkan Foto keterangan" class="form-control" id="keterangan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                            <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi" class="form-control" id="deskripsi">
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

                    <!-- Modal Edit Profil -->
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">EDIT PROFIL</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/profil/edit" method="post">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="edit_judul" class="form-label">Edit Judul Profil</label>
                                            <input type="text" name="judul" placeholder="Masukkan Judul" class="form-control" id="edit_judul">
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_keterangan" class="form-label">Edit Keterangan Profil</label>
                                            <input type="text" name="keterangan" placeholder="Masukkan Keterangan Baru" class="form-control" id="edit_keterangan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_deskripsi" class="form-label">Edit Deskripsi Profil</label>
                                            <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Detail Property" class="form-control" id="edit_deskripsi">
                                        </div>
                                        <input type="hidden" name="id_profil" id="edit_id_profil">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Hapus Profil -->
                    <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="hapusModalLabel">HAPUS PROFIL</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/profil/hapus" method="post">
                                    <div class="modal-body">
                                        Apakah anda ingin menghapus data ini?
                                        <input type="hidden" name="id_profil" id="hapus_id_profil">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
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
                                        <button class="btn btn-warning btn-edit" data-id="<?= $data['id_profil'] ?>" data-judul="<?= $data['judul'] ?>" data-keterangan="<?= $data['keterangan'] ?>" data-deskripsi="<?= $data['deskripsi'] ?>" data-toggle="modal" data-target="#editModal"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-danger btn-hapus" data-id="<?= $data['id_profil'] ?>" data-toggle="modal" data-target="#hapusModal"><i class="bi bi-trash"></i></button>
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

<script>
    // Script untuk menampilkan data pada modal edit
    document.querySelectorAll('.btn-edit').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const judul = this.getAttribute('data-judul');
            const keterangan = this.getAttribute('data-keterangan');
            const deskripsi = this.getAttribute('data-deskripsi');
            
            document.getElementById('edit_id_profil').value = id;
            document.getElementById('edit_judul').value = judul;
            document.getElementById('edit_keterangan').value = keterangan;
            document.getElementById('edit_deskripsi').value = deskripsi;
        });
    });

    // Script untuk menampilkan data pada modal hapus
    document.querySelectorAll('.btn-hapus').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            document.getElementById('hapus_id_profil').value = id;
        });
    });
</script>
