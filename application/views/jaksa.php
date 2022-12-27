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
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal-2" class="btn btn-white"><i class="bi bi-plus-circle-fill"></i> Tambah Jaksa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 mt-6">
                      <!-- card  -->
                      <div class="card">
                        <!-- card header  -->
                        <div class="card-header bg-white  py-4">
                          <h4 class="mb-0">Data Jaksa</h4>
                        </div>
                        <?= $this->session->flashdata('msg'); ?>
                        <!-- table  -->
                        <div class="table-responsive">
                          <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                              <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Email</th>
                                <th>No.HP</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($hasil as $data){ ?>
                              <tr>
                                <td class="align-middle"><img src="<?= base_url() ?>file/<?= $data->foto_jaksa?>" class="img-fluid" width="100" alt=""> </td>
                                <td  class="align-middle"><?php echo htmlentities($data->nama_jaksa, ENT_QUOTES, 'UTF-8');?></td>
                                <td  class="align-middle"><?php echo htmlentities($data->nip_jaksa, ENT_QUOTES, 'UTF-8');?></td>
                                <td  class="align-middle"><?php echo htmlentities($data->email_jaksa, ENT_QUOTES, 'UTF-8');?></td>
                                <td  class="align-middle"><?php echo htmlentities($data->hp_jaksa, ENT_QUOTES, 'UTF-8');?></td>
                                <td  class="align-middle">
                                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#edit_jaksa<?= $data->id_jaksa?>" class="btn btn-warning text-white"><i class="bi bi-pencil-fill"></i></a> -->
                                    <a href="<?= base_url('main/hapus_jaksa/'.$data->id_jaksa) ?>" onclick="confirm('Anda Yakin Ingin Menghapus Data?');" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                  </div>
                                </td>
                                <!-- Modal -->
                                <!-- <div class="modal fade" id="edit_jaksa<?= $data->id_jaksa?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Jaksa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php echo form_open_multipart('main/edit_jaksa');?>
                                            <input type="hidden" name="id" value="<?= $data->id_jaksa?>">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                  <label class="form-label" for="textInput">Nama</label>
                                                  <input type="text" id="textInput" class="form-control" value="<?php echo htmlentities($data->nama_jaksa, ENT_QUOTES, 'UTF-8');?>" name="nama" placeholder="Nama Jaksa..." required>
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label" for="textInput">NIP</label>
                                                  <input type="number" id="textInput" class="form-control" value="<?php echo htmlentities($data->nip_jaksa, ENT_QUOTES, 'UTF-8');?>" name="nip" placeholder="NIP Jaksa..." required>
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label" for="textInput">Email</label>
                                                  <input type="text" id="textInput" class="form-control" value="<?php echo htmlentities($data->email_jaksa, ENT_QUOTES, 'UTF-8');?>" name="email" placeholder="email Jaksa..." required>
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label" for="textInput">No. HP</label>
                                                  <input type="text" id="textInput" class="form-control" value="<?php echo htmlentities($data->hp_jaksa, ENT_QUOTES, 'UTF-8');?>" name="hp" placeholder="No.HP Jaksa..." required>
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label" for="textInput">Foto</label>
                                                  <input type="file" id="textInput" class="form-control"  name="foto">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="sumbit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            <?php echo form_close(); ?>   
                                        </div>
                                    </div>
                                </div>   -->
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jaksa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('main/tambah_jaksa');?>
            <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label" for="textInput">Nama</label>
                  <input type="text" id="textInput" class="form-control" name="nama" placeholder="Nama Jaksa..." required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="textInput">NIP</label>
                  <input type="number" id="textInput" class="form-control" name="nip" placeholder="NIP Jaksa..." required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="textInput">Email</label>
                  <input type="text" id="textInput" class="form-control" name="email" placeholder="email Jaksa..." required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="textInput">No. HP</label>
                  <input type="text" id="textInput" class="form-control" name="hp" placeholder="No.HP Jaksa..." required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="textInput">Foto</label>
                  <input type="file" id="textInput" class="form-control" name="foto" required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="textInput">Username</label>
                  <input type="text" id="textInput" class="form-control" name="hp" placeholder="Username..." required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="textInput">Password</label>
                  <input type="password" id="textInput" class="form-control" name="hp" placeholder="*******" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="sumbit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close(); ?>   
        </div>
    </div>
</div>