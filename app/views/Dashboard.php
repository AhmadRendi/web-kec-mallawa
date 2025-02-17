<div class="main-content">
        <div class="header mb-4 d-flex justify-content-between align-items-center">
            <h4 class="m-0">Kantor Kecamatan Mallawa</h4>
            <div class="d-flex align-items-center">
                <span class="me-2"><?= $_SESSION['name_user']?></span>
                <span class="text-muted small"><?= $_SESSION['position']?></span>
                <img src="<?= BASEURL;?>/img/asset/<?= $_SESSION['picture']?>" 
                class="rounded-circle ms-2" alt="Profile" style="width: 40px; height: 40px;">
            </div>
        </div>

        <div class="container-fluid">
            <div class="card mb-4">
                <div class="card-body shadow p-3 bg-body rounded">
                    <h5 class="card-title mb-4">Sistem Pengarsipan Dokumen</h5>
                    
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="stats-card">
                                <h6>Hari Ini</h6>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="stats-icon me-3">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <div>
                                        <h3 class="m-0"><?php echo $data['todayDocuments'] ?></h3>
                                        <h6 class="text-muted">Dokumen</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-4">
                            <div class="stats-card">
                                <h6>Bulan Ini</h6>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="stats-icon me-3">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <div>
                                        <h3 class="m-0"><?php echo $data['monthDocuments'] ?></h3>
                                        <h6 class="text-muted">Dokumen</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-4">
                            <div class="stats-card">
                                <h6>Tahun Ini</h6>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="stats-icon me-3">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <div>
                                        <h3 class="m-0"><?php echo $data['yearDocuments'] ?></h3>
                                        <h6 class="text-muted">Dokumen</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-4">
                            <div class="stats-card">
                                <h6>Total</h6>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="stats-icon me-3">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <div>
                                        <h3 class="m-0"><?php echo $data['totalDocument'] ?></h3>
                                        <h6 class="text-muted">Dokumen</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>