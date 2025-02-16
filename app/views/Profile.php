<div class="main-content">
    <div class="header mb-4 d-flex justify-content-between align-items-center">
        <h4 class="m-0">Kantor Kecamatan Mallawa</h4>
        <div class="d-flex align-items-center">
            <span class="me-2">
                <?= $data['user']['name_user'] ?>
            </span>
            <span class="text-muted small">
                <?= $data['user']['position'] ?>
            </span>
            <img src="<?= BASEURL;?>/img/asset/<?= $data['user']['picture']?>"
                class="rounded-circle ms-2" alt="Profile" style="width: 40px; height: 40px;">
        </div>
    </div>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body shadow p-3 bg-body rounded">
                    <h5 class="card-title">Profil</h5>
                    <h6 class="card-subtitle mb-1 text-muted">Data/Admin</h6>
                    <div class="row">
                        <div class="col-md-5 text-center">
                            <div class="profile-img-container mb-3">
                                <!-- <img src="<?= BASEURL; ?>/img/<?= $user['foto'] ?>" alt="Profile" class="profile-img rounded-circle"> -->
                                <img src="<?= BASEURL;?>/img/asset/<?= $data['user']['picture']?>"
                                    alt="Profile" class="profile-img rounded-circle">
                            </div>
                            <h4 class="mb-1">
                                <?= $data['user']['name_user'] ?>
                            </h4>
                            <h4 class="mb-1">
                                <?= $data['user']['position'] ?>
                            </h4>
                        </div>

                        <div class="col-md-7">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" id="data-tab" data-bs-toggle="tab" href="#data">Data
                                        Diri</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="edit-tab" data-bs-toggle="tab" href="#edit">Edit Profil</a>
                                </li>
                            </ul>
                            <div class="tab-content shodow-lg p-3 bg-body rounded">
                                <!-- Data Diri Tab -->
                                <div class="tab-pane fade show active" id="data">
                                    <h6 class="border-bottom pb-2 mb-3">Detail Profil</h6>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <strong>Nama Lengkap</strong>
                                        </div>
                                        <div class="col-md-8">
                                            <?= $data['user']['name_user'] ?>
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
                                            <?= $data['user']['address'] ?>
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
                                    <!-- <form action="<?= BASEURL;?>/User/editProfile" enctype="multipart/form-data" method="post"> -->
                                    <form id="updateProfile" enctype="multipart/form-data" method="post">
                                        <div class="mb-3">
                                            <label for="name_user" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="name_user" name="name_user" 
                                            value=<?= $data['user']['name_user'] ?> required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" name="username"
                                                value=<?= $data['user']['username'] ?> readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                value=<?= $data['user']['password'] ?> required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="position" class="form-label">Posisi</label>
                                            <input type="text" class="form-control" id="position" name="position"
                                                value=<?= $data['user']['position'] ?> required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="address" name="address" 
                                                value=<?= $data['user']['address'] ?> required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" 
                                                value=<?= $data['user']['email'] ?> readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="picture" class="form-label">Foto</label>
                                            <input type="file" class="form-control" id="picture" name="picture" 
                                                value=<?= $data['user']['picture'] ?> readonly>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Profil</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal untuk sukses registrasi -->
<div class="modal fade" id="successUpdate" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Sukses!</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Update Anda berhasil!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

    <!-- Modal untuk Menampilkan Pesan Kesalahan -->
    <div class="modal fade" id="errorUpdateProfile" tabindex="-1" aria-labelledby="errorRegistrationLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorRegistrationLabel">Kesalahan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="error-message">Terjadi kesalahan saat memperbarui profil.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>