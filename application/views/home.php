<body class="bg-light">
  <div class="container p-6">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 text-center">
        <!-- Page header -->
     
        <img src="assets/images/logo.svg" width="120px" alt="">

          <div class="border-bottom pb-4 mb-4">              
              <h3 class="mb-0 fw-bold mt-3">Kejaksaan Tinggi Kota Lhokseumawe</h3>             
            <p>Sistem Pengajuan pertemuan jaksa</p>
          </div>
       
      </div>
    </div>
    <?= $this->session->flashdata('msg'); ?>
    <div class="row mb-8">
      <div class="col-xl-3 col-lg-4 col-md-12 col-12">
        <div class="mb-4 mb-lg-0">
          <h4 class="mb-1">Profil</h4>
          <p class="mb-0 fs-5 text-muted">Biodata Pengaju </p>
        </div>

      </div>

      <div class="col-xl-9 col-lg-8 col-md-12 col-12">
        <!-- card -->
        <div class="card">
          <!-- card body -->
          <div class="card-body">
            <div>
              <?php echo form_open_multipart('home/tambah');?>
                <!-- row -->
                <div class="mb-3 row">
                  <label for="fullName" class="col-sm-4 col-form-label form-label">Nama Lengkap</label>
                  <div class="col-sm-4 mb-3 mb-lg-0">
                    <input type="text" class="form-control" placeholder="Nama Depan" id="fullName" required="" name="n_depan">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Nama Belakang" id="lastName" required="" name="n_belakang">
                  </div>
                </div>
                <!-- row -->
                <div class="mb-3 row">
                  <label for="langauge" class="col-sm-4 col-form-label
                      form-label">Jenis Kelamin</label>
  
                  <div class="col-md-8 col-12">
                    <select class="form-select" id="langauge" name="jk" required>
                        <option selected="" disabled>--Jenis Kelamin--</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                  </div>
                </div>
                <!-- row -->
                <div class="mb-3 row">
                  <label for="nik" class="col-sm-4 col-form-label form-label">NIK</label>
                  <div class="col-md-8 col-12">
                    <input type="number" class="form-control" placeholder="NIK" id="nik" required="" name="nik">
                  </div>
                </div>
                <!-- row -->
                <div class="mb-3 row">
                  <label for="email" class="col-sm-4 col-form-label form-label">Email</label>
                  <div class="col-md-8 col-12">
                    <input type="email" class="form-control" placeholder="Email" id="email" required="" name="email">
                  </div>
                </div>
                <!-- row -->
                <div class="mb-3 row">
                  <label for="phone" class="col-sm-4 col-form-label form-label">No. HP</label>
                  <div class="col-md-8 col-12">
                    <input type="text" class="form-control" placeholder="No. HP" id="phone" required="" name="hp">
                  </div>
                </div>
                <!-- row -->
                <div class="mb-3 row">
                  <label for="addressLine" class="col-sm-4 col-form-label form-label">Alamat</label>
                  <div class="col-md-8 col-12">
                    <input type="text" class="form-control" placeholder="Alamat" id="addressLine" required="" name="alamat">
                  </div>
                </div>
                <!-- row -->
                <div class="mb-3 row">
                  <label for="foto" class="col-sm-4 col-form-label form-label">Foto</label>
                  <div class="col-md-8 col-12">
                    <input type="file" class="form-control"  id="foto" required="" name="foto">
                  </div>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="row mb-8">
      <div class="col-xl-3 col-lg-4 col-md-12 col-12">
        <div class="mb-4 mb-lg-0">
          <h4 class="mb-1">Pengajuan</h4>
          <p class="mb-0 fs-5 text-muted">Tujuan dan Permintaan anda</p>
        </div>
      </div>

      <div class="col-xl-9 col-lg-8 col-md-12 col-12">
        <!-- card -->
        <div class="card" id="edit">
          <!-- card body -->
          <div class="card-body">
                <!-- row -->
                <div class="mb-3 row">
                  <label for="langauge" class="col-sm-4 col-form-label form-label">Jaksa Tujuan</label>
                  <div class="col-md-8 col-12">
                    <select class="form-select" id="langauge" name="jaksa" required>
                        <option selected="" disabled>--Pilih Jaksa--</option>
                        <?php foreach($hasil as $data){ ?>
                        <option value="<?= $data->id?>"><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></option>
                        <?php } ?>
                      </select>
                  </div>
                </div>
                <!-- row -->
                <div class="mb-3 row">
                  <label for="langauge" class="col-sm-4 col-form-label form-label">Pelayanan</label>
                  <div class="col-md-8 col-12">
                    <select class="form-select" id="langauge" name="pelayanan" required>
                        <option selected="" disabled>--Pilih Pelayanan--</option>
                        <option value="Luring">Luring</option>
                        <option value="Daring">Daring</option>
                      </select>
                  </div>
                </div>
                <!-- row -->
                <div class="mb-3 row">
                  <label for="langauge" class="col-sm-4 col-form-label form-label">Tipe Pengaju</label>
                  <div class="col-md-8 col-12">
                    <select class="form-select" id="langauge" name="tipe">
                        <option selected="" disabled>--Pilih Pengaju--</option>
                        <option value="Tamu Biasa">Tamu Biasa</option>
                        <option value="Saksi">Saksi</option>
                        <option value="Terdakwa">Terdakwa</option>
                        <option value="Ahli">Ahli</option>
                        <option value="Tamu VVip">Tamu VVip</option>
                      </select>
                  </div>
                </div>
              <!-- row -->
              <div class="mb-3 row">
                <label for="tujuan" class="col-sm-4 col-form-label form-label">Tujuan</label>
                <div class="col-md-8 col-12">
                  <textarea class="form-control" placeholder="Isi Tujuan..." id="tujuan" required="" name="tujuan"></textarea>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="col-xl-9 col-lg-8 col-md-12 col-12 offset-xl-3">
        <button class="btn btn-primary mt-5" type="submit">Kirim Ajuan</button>
      </div>
    </div>
    <?php echo form_close(); ?>   
  </div>