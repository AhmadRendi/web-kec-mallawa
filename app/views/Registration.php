    <div class="body-login">
    <div class="container mt-5 d-flex justify-content-center align-items-center">
        <form id="form_registration">
            <div>
                <div class="text-center col">
                    <img class="img-logo-login"
                        src="https://mattampapoledesa.maroskab.go.id/assets/files/logo/opensid_logo.png" alt="...">
                </div>
                <div class="text-center col">
                    <h2>Registrasi Pengguna</h2>
                </div>
                <div class="form-group">
                    <label for="username" class="col-form-label"
                    style="font-weight: bold; color: black;">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name_user" name="name_user" required>
                </div>
                <div class="form-group">
                    <label for="username" class="col-form-label"
                    style="font-weight: bold; color: black;">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label"
                    style="font-weight: bold; color: black;">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="email" class="col-form-label"
                    style="font-weight: bold; color: black;">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="email" class="col-form-label"
                    style="font-weight: bold; color: black;">Jabatan</label>
                    <input type="text" class="form-control" id="position" name="position" required>
                </div>
                <div class="form-group">
                    <label for="email" class="col-form-label"
                    style="font-weight: bold; color: black;">Alamat</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <div class="d-flex justify-content-center align-items-center mt-4   ">
                        <div class="me-3">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </div>
                        <div>
                            <a href="<?= BASEURL; ?>" class="btn btn-danger">Batal</a>
                        </div>
                </div>
                <div id="error-message" class="alert alert-danger mt-3" style="display: none;"></div>
            </div>
        </form>
    </div>
</div>

<!-- Modal untuk sukses registrasi -->
<div class="modal fade" id="successRegistration" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Sukses!</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Registrasi Anda berhasil!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Menampilkan Pesan Kesalahan -->
<div class="modal fade" id="errorRegistration" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Kesalahan</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Pesan kesalahan akan ditampilkan di sini -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
