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
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 mt-6">
                      <!-- card  -->
                      <div class="card">
                        <!-- card header  -->
                        <div class="card-header bg-white  py-4">
                          <h4 class="mb-0">Pengajuan Pending</h4>
                        </div>
                        <?= $this->session->flashdata('msg'); ?>
                        <!-- table  -->
                        <div class="table-responsive">
                          <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                              <tr>
                                <th>Nama pengaju</th>
                                <th>Tipe Pengaju</th>
                                <th>Tanggal Booking</th>
                                <th>Jaksa Tujuan</th>
                                <th>Pelayanan</th>
                                <th>Tujuan</th>
                                <th>Opsi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($hasil as $data){ ?>
                              <tr>
                                <td  class="align-middle">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#pengaju<?= $data->id?>"><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?> <i class="bi bi-info-circle"></i></a>
                                      <!-- Modal -->
                                      <div class="modal fade" id="pengaju<?= $data->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Data Pengaju</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <div class="table-responsive">
                                                      <table class="table fw-normal">
                                                      <div class="text-center mb-3"><img src="<?= base_url() ?>file/<?= $data->foto?>" class="img-fluid" width="300" alt=""> </div>
                                                        <tbody>
                                                            <tr>
                                                                <td>Nama </td>
                                                                <td>:</td>
                                                                <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Kelamin </td>
                                                                <td>:</td>
                                                                <td><?php echo htmlentities($data->jk, ENT_QUOTES, 'UTF-8');?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>NIK </td>
                                                                <td>:</td>
                                                                <td><?php echo htmlentities($data->nik, ENT_QUOTES, 'UTF-8');?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email </td>
                                                                <td>:</td>
                                                                <td><?php echo htmlentities($data->email, ENT_QUOTES, 'UTF-8');?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>No.HP </td>
                                                                <td>:</td>
                                                                <td><?php echo htmlentities($data->hp, ENT_QUOTES, 'UTF-8');?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat </td>
                                                                <td>:</td>
                                                                <td><?php echo htmlentities($data->alamat, ENT_QUOTES, 'UTF-8');?></td>
                                                            </tr>
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div> 
                                </td>
                                <td  class="align-middle"><?php echo htmlentities($data->tipe, ENT_QUOTES, 'UTF-8');?></td>
                                <td  class="align-middle"><?php echo htmlentities($data->tanggal_booking, ENT_QUOTES, 'UTF-8');?></td>
                                <td  class="align-middle"><?php echo htmlentities($data->nama_jaksa, ENT_QUOTES, 'UTF-8');?></td>
                                <td  class="align-middle">
                                  <?php if($data->pelayanan == "Daring"){ ?>
                                      <span class="badge bg-primary">Daring</span>
                                  <?php }else{ ?>
                                      <span class="badge bg-success">Luring</span>
                                  <?php } ?>
                                </td>
                                <td  class="align-middle"><?php echo htmlentities($data->tujuan, ENT_QUOTES, 'UTF-8');?></td>
                                <td  class="align-middle">
                                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#disposisi<?= $data->id?>" class="btn btn-primary text-white"><i class="bi bi-file-arrow-up"></i> Disposisi</a>
                                    <a href="<?= base_url('pengajuan/tolak_pending/'.$data->id) ?>" onclick="confirm('Anda Yakin Ingin Menolak Pengajuan?');" class="btn btn-danger"><i class="bi bi-x-lg"></i> Tolak</a>
                                    
                                    <!-- Modal add -->
                                      <div class="modal fade" id="disposisi<?= $data->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Disposisi Pengajuan</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div>
                                                  <?php echo form_open_multipart('pengajuan/add_disposisi_1');?>
                                                  <input type="hidden" name="id" value="<?= $data->id ?>">
                                                  <div class="modal-body">
                                                      <div class="mb-3">
                                                        <label class="form-label" for="textInput">Tanggal Pertemuan</label>
                                                        <input type="date" id="textInput" value="<?php echo htmlentities($data->tanggal_booking, ENT_QUOTES, 'UTF-8');?>" class="form-control" name="tgl" required>
                                                      </div>
                                                      <div class="mb-3">
                                                        <label for="textarea-input" class="form-label">Isi Disposisi</label>
                                                        <textarea class="form-control" name="isi" id="textarea-input" rows="5" required></textarea>
                                                      </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="sumbit" class="btn btn-primary">Simpan</button>
                                                  </div>
                                                  <?php echo form_close(); ?>   
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </td>
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

