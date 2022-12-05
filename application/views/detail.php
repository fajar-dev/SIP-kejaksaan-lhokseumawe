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
                    <div class="offset-xl-2 col-xl-8 offset-lg-1 col-lg-10 col-md-12
              col-12">
            <div class="row">
              <div class="col-12 mb-6">
                <!-- card  -->
                <div class="card">
                  <!-- card header  -->
                  <div class="card-header p-4 bg-white">
                    <h4 class="mb-0">Pengaju: <?php echo htmlentities($data['nama'], ENT_QUOTES, 'UTF-8');?></h4>
                  </div>
                  <!-- card body  -->
                  <div class="card-body">
                    <!-- row  -->
                    <div class="mb-2">
                      <p class="mb-2">Tipe Tamu: <?php echo htmlentities($data['tipe'], ENT_QUOTES, 'UTF-8');?></p>
                      <p class="mb-2">Pelayanan: <?php echo htmlentities($data['pelayanan'], ENT_QUOTES, 'UTF-8');?></p>
                      <p class="mb-2">Jaksa Tujuan: <?php echo htmlentities($jaksa['nama_jaksa'], ENT_QUOTES, 'UTF-8');?></p>
                      <p class="mb-2">Tujuan: <br> <?php echo htmlentities($data['tujuan'], ENT_QUOTES, 'UTF-8');?></p>
                    </div>
                  </div>
                </div>
                <div class="card mt-4">
                  <!-- card body  -->
                  <div class="card-body">
                        <!-- table  -->
                        <div class="table-responsive">
                          <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                              <tr>
                                <th>ke-</th>
                                <th>Tanggal Disposisi</th>
                                <th>tanggal Pertemuan</th>
                                <th>Isi Disposisi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($hasil as $data){ ?>
                              <tr>
                                <td  class="align-middle"><?php echo htmlentities($data->urut, ENT_QUOTES, 'UTF-8');?></td>
                                <td  class="align-middle"><?php echo htmlentities($data->tanggal_disposisi, ENT_QUOTES, 'UTF-8');?></td>
                                <td  class="align-middle"><?php echo htmlentities($data->tanggal_pertemuan, ENT_QUOTES, 'UTF-8');?></td>
                                <td  class="align-middle"><?php echo htmlentities($data->isi, ENT_QUOTES, 'UTF-8');?></td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
                </div>
            </div>
        </div>
    </div>

