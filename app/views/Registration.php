    <div class="body-login">
        <div class="container mt-5 d-flex justify-content-center align-items-center">
            <form>
                <div>
                    <div class="text-center col">
                        <img class="img-logo-login"
                            src="https://mattampapoledesa.maroskab.go.id/assets/files/logo/opensid_logo.png" alt="...">
                    </div>
                    <div class="text-center col">
                        <h2>Kantor Kecamatan Mallawa</h2>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="mb-3 row">
                        <label for="namaLengkap" class="col-sm-2 col-form-label"
                            style="font-weight: bold; color: black;">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="namaLengkap"
                                placeholder="Masukkan nama lengkap">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label"
                            style="font-weight: bold; color: black;">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" placeholder="Masukkan username">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label"
                            style="font-weight: bold; color: black;">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" placeholder="Masukkan password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jabatan" class="col-sm-2 col-form-label"
                            style="font-weight: bold; color: black;">Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jabatan" placeholder="Masukkan jabatan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label"
                            style="font-weight: bold; color: black;">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label"
                            style="font-weight: bold; color: black;">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="me-3"> <!-- Menambahkan margin-end -->
                            <button type="submit" class="btn btn-primary">Masuk</button>
                        </div>
                        <div>
                            <a href="<?= BASEURL; ?>" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                    <!-- <div class="create-account" style="font-weight: bold; color: black;">
                        Belum memiliki akun? <a style="color: blue; font-weight: bold;" href="#">Buat</a>
                    </div> -->
            </form>
        </div>
    </div>