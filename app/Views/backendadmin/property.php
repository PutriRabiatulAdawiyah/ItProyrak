<?php echo view('layoutadmin/header'); ?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Property</h4>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Property</div>
                </div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="bi bi-plus"></i> Tambah
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">TAMBAH PROPERTY</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/property/tambah" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Nama Property</label>
                                            <input type="text" name="nama_property" placeholder="Masukkan Nama Detail Property"
                                                class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Harga Property</label>
                                            <input type="text" name="harga_property" placeholder="Masukkan Foto Detail Property"
                                                class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Gambar
                                                Property</label>
                                            <input type="file" name="foto_property" placeholder="Masukkan Deskripsi Detail Property"
                                                class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">status
                                                Property</label>
                                            <input type="text" name="status_property" placeholder="Masukkan Deskripsi Detail Property"
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
                    <table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Property</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php $no=1; foreach($property as $data): ?>
                            <tr>
                                <td><?= $no ++; ?></td>
                                <td> <?= $data['nama_property'] ?> </td>
                                <td> <?= $data['harga_property'] ?> </td>
                                <td>
                                    <img src="/gambar/<?= $data['foto_property'] ?>" width="50px" alt="">
                                </td>
                                <td><?= $data['status_property'] ?></td>
                                <td class="d-flex justify-content-center">
                                    <button class="btn btn-warning" data-toggle="modal" data-target="#editModal"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-danger" data-toggle="modal"
                                        data-target="#hapusModal<?= $data['id_property'] ?>"><i
                                            class="bi bi-trash"></i></button>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="hapusModal<?= $data['id_property'] ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">HAPUS PROPERTY</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="/property/hapus" method="post">
                                            <div class="modal-body">
                                                Apkah anda ingin menghapus data ini?
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="id_property"
                                                    value="<?= $data['id_property'] ?>">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">EDIT DETAIL PROPERTY</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="/property/edit" method="post">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Edit Nama
                                                        Property</label>
                                                    <input type="text" name="nama_property"
                                                        value="<?= $data['nama_property'] ?>"
                                                        placeholder="Masukkan Nama Detail Property" class="form-control"
                                                        id="exampleInputPassword1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Edit Harga
                                                        Property</label>
                                                    <input type="text" name="harga_property"
                                                        value="<?= $data['harga_property'] ?>"
                                                        placeholder="Masukkan Foto Detail Property" class="form-control"
                                                        id="exampleInputPassword1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Edit Gambar
                                                        Property</label>
                                                    <input type="file" placeholder="Masukkan Deskripsi Detail Property"
                                                        class="form-control" id="exampleInputPassword1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Edit Status
                                                        Property</label>
                                                    <input type="text" name="status_property"
                                                        value="<?= $data['status_property'] ?>"
                                                        placeholder="Masukkan Deskripsi Detail Property"
                                                        class="form-control" id="exampleInputPassword1">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="id_property"
                                                    value="<?= $data['id_property'] ?>">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan Data</button>
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