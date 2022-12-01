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
                                  <a href="#" class="btn btn-white">Tambah Jaksa</a>
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
                                <td><img src="<?= base_url() ?>assets/images/brand/<?= $data->foto?>" class="img-fluid" alt=""> </td>
                                <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                <td><?php echo htmlentities($data->nip, ENT_QUOTES, 'UTF-8');?></td>
                                <td><?php echo htmlentities($data->email, ENT_QUOTES, 'UTF-8');?></td>
                                <td><?php echo htmlentities($data->hp, ENT_QUOTES, 'UTF-8');?></td>
                                <td>
                                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="" class="btn btn-warning text-white">Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
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