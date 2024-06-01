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
                    <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambahProfilModal">
                        Tambah Profil
                    </button>

                    <!-- Modal Tambah Profil -->
                    <div class="modal fade" id="tambahProfilModal" tabindex="-1" role="dialog" aria-labelledby="tambahProfilModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahProfilModalLabel">Tambah Profil</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url('profil/tambah'); ?>" method="post">
                                        <div class="form-group">
                                            <label for="judul">Judul</label>
                                            <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi</label>
                                            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Tambah Profil</button>
                                    </form>
                                </div>
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
                            <?php if (isset($DataProfil) && !empty($DataProfil)): ?>
                                <?php $no = 1; foreach ($DataProfil as $profil): ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo date('d M Y', strtotime($profil['tgl_dibuat'])); ?></td>
                                        <td><?php echo $profil['judul']; ?></td>
                                        <td><?php echo $profil['keterangan']; ?></td>
                                        <td><?php echo $profil['deskripsi']; ?></td>
                                        <td class="actions">
                                            <!-- Button trigger modal Edit Profil -->
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editProfilModal-<?php echo $profil['id_profil']; ?>">
                                                <i class="la la-edit"></i>
                                            </button>

                                            <!-- Modal Edit Profil -->
                                            <div class="modal fade" id="editProfilModal-<?php echo $profil['id_profil']; ?>" tabindex="-1" role="dialog" aria-labelledby="editProfilModalLabel-<?php echo $profil['id_profil']; ?>" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editProfilModalLabel-<?php echo $profil['id_profil']; ?>">Edit Profil</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?php echo base_url('profil/edit/'.$profil['id_profil']); ?>" method="post">
                                                                <div class="form-group">
                                                                    <label for="judul">Judul</label>
                                                                    <input type="text" name="judul" class="form-control" value="<?php echo $profil['judul']; ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="keterangan">Keterangan</label>
                                                                    <input type="text" name="keterangan" class="form-control" value="<?php echo $profil['keterangan']; ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="deskripsi">Deskripsi</label>
                                                                    <input type="text" name="deskripsi" class="form-control" value="<?php echo $profil['deskripsi']; ?>" required>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tombol hapus profil dengan konfirmasi -->
                                            <a href="<?php echo base_url('profil/hapus/'.$profil['id_profil']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus profil ini?');">
                                                <i class="la la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data profil.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('layoutadmin/footer'); ?>
