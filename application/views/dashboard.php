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
                    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mt-6">
                        <!-- card -->
                        <div class="card ">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Pending</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                        <i class="bi bi-bullseye fs-4"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <h1 class="fw-bold"><?=  $pending ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mt-6">
                        <!-- card -->
                        <div class="card ">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Proses</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                        <i class="bi bi-bullseye fs-4"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                <h1 class="fw-bold"><?=  $proses ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mt-6">
                        <!-- card -->
                        <div class="card ">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Selesai</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                        <i class="bi bi-bullseye fs-4"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                <h1 class="fw-bold"><?=  $selesai ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>