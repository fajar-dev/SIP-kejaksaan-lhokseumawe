<!-- Container fluid -->
<div class="bg-primary pt-10 pb-21"></div>
            <div class="container-fluid mt-n22 px-6">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-2 mb-lg-0">
                                    <h3 class="mb-0  text-white"><?= $title ?></h3>
                                </div>
                                <div>
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal-2" class="btn btn-white"><i class="bi bi-plus-circle-fill"></i> Tambah Admin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 mt-6">
                      <!-- card  -->
                      <div class="card">
                        <!-- card header  -->
                        <div class="card-header bg-white  py-4">
                          <h4 class="mb-0">Data Admin</h4>
                        </div>
                        <?= $this->session->flashdata('msg'); ?>
                        <!-- table  -->
                        <div class="table-responsive">
                          <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                              <tr>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($hasil as $data){ ?>
                              <tr>
                                <td  class="align-middle"><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                <td  class="align-middle"><?php echo htmlentities($data->nip, ENT_QUOTES, 'UTF-8');?></td>
                                <td  class="align-middle">
                                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#edit_Admin<?= $data->id?>" class="btn btn-warning text-white"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="<?= base_url('main/hapus_admin/'.$data->id) ?>" onclick="confirm('Anda Yakin Ingin Menghapus Data Admin?');" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                  </div>
                                </td>
                                <!-- Modal -->
                                <div class="modal fade" id="edit_Admin<?= $data->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Admin</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php echo form_open_multipart('main/edit_admin');?>
                                            <input type="hidden" name="id" value="<?= $data->id?>">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                  <label class="form-label" for="textInput">Nama</label>
                                                  <input type="text" id="textInput" class="form-control" value="<?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?>" name="nama" placeholder="Nama Admin..." required>
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label" for="textInput">NIP</label>
                                                  <input type="number" id="textInput" class="form-control" value="<?php echo htmlentities($data->nip, ENT_QUOTES, 'UTF-8');?>" name="nip" placeholder="NIP Admin..." required>
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label" for="textInput">Username</label>
                                                  <input type="text" id="textInput" class="form-control" value="<?php echo htmlentities($data->user, ENT_QUOTES, 'UTF-8');?>" name="user" placeholder="Username..." required>
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label" for="textInput">Password</label>
                                                  <input type="password" id="textInput" class="form-control" name="pass" placeholder="***" >
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="sumbit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            <?php echo form_close(); ?>   
                                        </div>
                                    </div>
                                </div>  
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                        <!-- card footer  -->
                        <div class="card-footer bg-white">
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal add -->
<div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('main/tambah_admin');?>
            <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label" for="textInput">Nama</label>
                  <input type="text" id="textInput" class="form-control" name="nama" placeholder="Nama Admin..." required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="textInput">NIP</label>
                  <input type="number" id="textInput" class="form-control" name="nip" placeholder="NIP Admin..." required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="textInput">Username</label>
                  <input type="text" id="textInput" class="form-control" name="user" placeholder="Username..." required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="textInput">password</label>
                  <input type="password" id="textInput" class="form-control" name="pass" placeholder="***" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="sumbit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close(); ?>   
        </div>
    </div>
</div>