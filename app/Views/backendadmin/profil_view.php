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
                    <!-- Form tambah profil -->
                    <form action="<?php echo base_url('profil/tambah'); ?>" method="post">
                        <input type="text" name="judul" placeholder="Judul">
                        <input type="text" name="keterangan" placeholder="Keterangan">
                        <input type="text" name="deskripsi" placeholder="Deskripsi">
                        <button type="submit" class="btn btn-primary">Tambah Profil</button>
                    </form>
                    
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
                                            <!-- Form edit profil -->
                                            <form action="<?php echo base_url('profil/edit/'.$profil['id_profil']); ?>" method="post">
                                                <input type="text" name="judul" value="<?php echo $profil['judul']; ?>">
                                                <input type="text" name="keterangan" value="<?php echo $profil['keterangan']; ?>">
                                                <input type="text" name="deskripsi" value="<?php echo $profil['deskripsi']; ?>">
                                                <button type="submit" class="btn btn-warning btn-sm"><i class="la la-edit"></i></button>
                                            </form>
                                            <!-- Tombol hapus profil dengan konfirmasi -->
                                            <a href="<?php echo base_url('profil/hapus/'.$profil['id_profil']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus profil ini?');"><i class="la la-trash"></i></a>
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
