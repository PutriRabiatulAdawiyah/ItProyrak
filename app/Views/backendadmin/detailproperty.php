<?php echo view('layoutadmin/header'); ?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Detail Property</h4>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Detail Property</div>
                </div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="bi bi-plus"></i> Tambah
                    </button>

                    <!-- Modal Tambah -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">TAMBAH DETAIL PROPERTY</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/detailproperty/tambah" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="namaDetailProperty" class="form-label">Nama Detail Property</label>
                                            <input type="text" name="nama_detail_property" placeholder="Masukkan Nama Detail Property" class="form-control" id="namaDetailProperty">
                                        </div>
                                        <div class="mb-3">
                                            <label for="idProperty" class="form-label">Pilih Property</label>
                                            <select name="id_property" class="custom-select" id="idProperty">
                                                <?php foreach ($detailproperty as $data): ?>
                                                    <option value="<?= $data["id_detail_property"] ?>"><?= $data["nama_detail_property"] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="fotoDetailProperty" class="form-label">Foto Detail Property</label>
                                            <input type="file" name="foto_detail_property" class="form-control" id="fotoDetailProperty">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsiDetailProperty" class="form-label">Deskripsi Detail Property</label>
                                            <input type="text" name="deskripsi_detail_property" placeholder="Masukkan Deskripsi Detail Property" class="form-control" id="deskripsiDetailProperty">
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

                    <table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Detail Property</th>
                                <th scope="col">Foto Detail Property</th>
                                <th scope="col">Deskripsi Detail Property</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($detailproperty as $data): ?> 
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['nama_detail_property'] ?></td>
                                    <td>
                                        <img src="/gambar/<?= $data['foto_detail_property'] ?>" width="50px" alt="">
                                    </td>
                                    <td><?= $data['deskripsi_detail_property'] ?></td>
                                    <td class="d-flex justify-content-center">
                                        <button class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $data['id_detail_property'] ?>"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#hapusModal<?= $data['id_detail_property'] ?>"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>

                                <!-- Modal Edit -->
                                <div class="modal fade" id="editModal<?= $data['id_detail_property'] ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">EDIT DETAIL PROPERTY</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/detailproperty/edit" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="editNamaDetailProperty" class="form-label">Edit Nama Detail Property</label>
                                                        <input type="text" name="nama_detail_property" value="<?= $data['nama_detail_property'] ?>" placeholder="Masukkan Nama Detail Property" class="form-control" id="editNamaDetailProperty">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editFotoDetailProperty" class="form-label">Edit Foto Detail Property</label>
                                                        <input type="file" name="foto_detail_property" class="form-control" id="editFotoDetailProperty">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editDeskripsiDetailProperty" class="form-label">Edit Deskripsi Detail Property</label>
                                                        <input type="text" name="deskripsi_detail_property" value="<?= $data['deskripsi_detail_property'] ?>" placeholder="Masukkan Deskripsi Detail Property" class="form-control" id="editDeskripsiDetailProperty">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="id_detail_property" value="<?= $data['id_detail_property'] ?>">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Hapus -->
                                <div class="modal fade" id="hapusModal<?= $data['id_detail_property'] ?>" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="hapusModalLabel">HAPUS DETAIL PROPERTY</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/detailproperty/hapus" method="post">
                                                <div class="modal-body">
                                                    Apakah Anda ingin menghapus data ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="id_detail_property" value="<?= $data['id_detail_property'] ?>">
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
