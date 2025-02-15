<div class="main-content">
    <div class="header mb-4 d-flex justify-content-between align-items-center">
        <h4 class="m-0">Kantor Kecamatan Mallawa</h4>
            <div class="d-flex align-items-center">
                <span class="me-2">Ikhwan Taufik</span>
                <span class="text-muted small">Administrator</span>
                <img src="https://tse3.mm.bing.net/th?id=OIP.AMUdcdnCeqU2buj3WLaR-QHaHa&pid=Api&P=0&h=220" 
                    class="rounded-circle ms-2" alt="Profile" style="width: 40px; height: 40px;">
            </div>
    </div>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Profil</h5>
                <h6 class="card-subtitle mb-1 text-muted">Data/Admin</h6>
                <div class="row">
                    <div class="col-md-5 text-center">
                        <div class="profile-img-container mb-3">
                            <!-- <img src="<?= BASEURL; ?>/img/<?= $user['foto'] ?>" alt="Profile" class="profile-img rounded-circle"> -->
                            <img src="https://tse3.mm.bing.net/th?id=OIP.AMUdcdnCeqU2buj3WLaR-QHaHa&pid=Api&P=0&h=220" alt="Profile" class="profile-img rounded-circle">
                        </div>
                        <h4 class="mb-1"><?= $data['user']['nama_lengkap'] ?></h4>
                        <p class="text-muted"><?= $data['user']['posisi'] ?></p>
                    </div>

                    <div class="col-md-7">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="data-tab" data-bs-toggle="tab" href="#data">Data Diri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="edit-tab" data-bs-toggle="tab" href="#edit">Edit Profil</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- Data Diri Tab -->
                            <div class="tab-pane fade show active" id="data">
                                <h6 class="border-bottom pb-2 mb-3">Detail Profil</h6>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <strong>Nama Lengkap</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <?= $data['user']['nama_lengkap'] ?>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <strong>Username</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <?= $data['user']['username'] ?>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <strong>Alamat</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <?= $data['user']['alamat'] ?>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <strong>Email</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <?= $data['user']['email'] ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Profil Tab -->
                            <div class="tab-pane fade" id="edit">
                                <form id="profileForm" action="<?=BASEURL;?>/User/editProfile" enctype="multipart/form-data" method="post">
                                    <div class="mb-3">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $data['user']['nama_lengkap'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" value=" <?= $data['user']['username'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" value=" <?= $data['user']['password'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="posisi" class="form-label">Posisi</label>
                                        <input type="text" class="form-control" id="posisi" name="posisi" value="<?= $data['user']['posisi'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['user']['alamat'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?= $data['user']['email'] ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto" class="form-label">Foto Profil</label>
                                        <input type="file" class="form-control" id="foto" name="foto">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>