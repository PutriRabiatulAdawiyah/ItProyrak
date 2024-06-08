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

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">TAMBAH DETAI PROPERTY</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/detailproperty/tambah" method="post" enctype="multipart/form-data">
                                <div class="modal-body">

                                <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Nama Detail Property</label>
                                            <input type="text" name="nama_detail_property" placeholder="Masukkan Foto Detail Property"
                                                class="form-control" id="exampleInputPassword1">
                                        </div>
                                    
                                        <div class="mb-3">
                                            <label for="">Pilih Property</label>
                                        <select name="id_property" class="custom-select">
                                            <?php foreach ($property as $data): ?>
                                                <option value="<?= $data["id_property"] ?>"><?= $data["nama_property"] ?></option>
                                                <?php endforeach; ?>

</select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Foto Detail
                                                Property</label>
                                            <input type="file" name="foto_detail_property" placeholder="Masukkan Foto Detail Property"
                                                class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" name="deskripsi_detail_property" class="form-label">Deskripsi Detail
                                                Property</label>
                                            <input type="text" name="deskripsi_detail_property" placeholder="Masukkan Deskripsi Detail Property"
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
                                <th scope="col">Nama Detail Property</th>
                                <th scope="col">Foto Detail Property</th>
                                <th scope="col">Deskripsi Detail Property</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>

                        <?php $no=1; foreach($detailproperty as $data): ?> 
                            <tr>
                                <td><?= $no ++; ?></td>
                                <td> <?= $data['nama_detail_property'] ?> </td>
                                <td>
                                    <img src="/gambar/<?= $data['foto_detail_property'] ?>" width="50px" alt="">
                                </td>
                                <td><?= $data['deskripsi_detail_property'] ?></td>
                                
                                <td class="d-flex justify-content-center">
                                    <button class="btn btn-warning" data-toggle="modal" data-target="#editModal"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-danger" data-toggle="modal"
                                        data-target="#hapusModal<?= $data['id_detail_property'] ?>"><i
                                            class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
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
                                        <form action="/detailproperty/edit" method="post">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Edit Nama
                                                        Property</label>
                                                    <input type="text" name="nama_detail_property"
                                                        value="<?= $data['nama_detail_property'] ?>"
                                                        placeholder="Masukkan Nama Detail Property" class="form-control"
                                                        id="exampleInputPassword1">
                                            </div>
                                             <div class="modal-body">
                                            
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Edit Detail
                                                        Property</label>
                                                    <input type="text" placeholder="Masukkan Nama Detail Property"
                                                        class="form-control" id="exampleInputPassword1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Edit Foto Detail
                                                        Property</label>
                                                    <input type="file" placeholder="Masukkan Foto Detail Property"
                                                        class="form-control" id="exampleInputPassword1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Edit Deskripsi
                                                        Detail Property</label>
                                                    <input type="text" placeholder="Masukkan Deskripsi Detail Property"
                                                        class="form-control" id="exampleInputPassword1">
                                                </div>
                                            </form>
                                        </div>
                                        </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="id_detail_property"
                                                    value="">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                                            </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Simpan Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">HAPUS PROPERTY</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                Apkah anda ingin menghapus data ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<?php echo view('layoutadmin/footer'); ?>