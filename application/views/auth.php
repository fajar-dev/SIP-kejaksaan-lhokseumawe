
<body class="bg-light">
  <!-- container -->
  <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
        <!-- Card -->
        <div class="card smooth-shadow-md">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4 text-center">
            <img src="<?= base_url() ?>assets/images/logo.svg" width="80px" class="mb-3" alt="">
              <p class="mb-6">Sistem Informasi Penjadwalan Jaksa <br>Kejaksaan Kota Lhokseumawe </p>
            </div>
            <!-- Form -->
            <form method="POST" action="<?= base_url('auth/login') ?>">
            <!-- Select Option -->
            <div class="mb-3">
              <label class="form-label" for="selectOne">Login Sebagai :</label>
                <select class="form-select" name="login" aria-label="Default select example">
                  <option value="1">Jaksa</option>
                  <option value="2">Admin</option>
                </select>
              </div>
              <!-- Username -->
              <div class="mb-3">
                <label for="email" class="form-label">Username</label>
                <input type="text" id="email" class="form-control" name="username" placeholder="Username..." required="">
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required="">
              </div>
              <!-- Checkbox -->
              <div class="d-lg-flex justify-content-between align-items-center
                  mb-4">
                <div class="form-check custom-checkbox">
                  <input type="checkbox" class="form-check-input" id="rememberme">
                  <label class="form-check-label" for="rememberme">Remember
                      me</label>
                </div>

              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Sign
                    in</button>
                </div>
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>