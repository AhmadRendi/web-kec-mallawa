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
        <div class="card">
            <div class="card-body shadow p-3 bg-body rounded">
                <h5 class="card-title mb-4">Tambah Arsip</h5>

                <form id="uploadDocument" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nomor_surat" class="form-label">Nomor Surat</label>
                        <input type="text" class="form-control border border-dark" id="nomor_surat" name="nomor_surat"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control border border-dark" id="tanggal" name="tanggal" required>
                    </div>

                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis</label>
                        <select class="form-control border border-dark" id="jenis" name="jenis" required>
                            <option style="color:rgb(0, 0, 0); font-weight: 500" value="">Pilih Jenis</option>
                            <option style="color:rgb(0, 0, 0); font-weight: 500" value="masuk">Surat Masuk</option>
                            <option style="color:rgb(0, 0, 0); font-weight: 500" value="keluar">Surat Keluar</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-control border border-dark" id="kategori" name="kategori" required>
                            <option style="color:rgb(0, 0, 0); font-weight: 500" value="">Pilih Kategori</option>
                            <option style="color:rgb(0, 0, 0); font-weight: 500" value="umum">Umum</option>
                            <option style="color:rgb(0, 0, 0); font-weight: 500" value="penting">Penting</option>
                            <option style="color:rgb(0, 0, 0); font-weight: 500" value="rahasia">Rahasia</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="pengirim" class="form-label">Pengirim</label>
                        <input type="text" class="form-control border border-dark" id="pengirim" name="pengirim"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="penerima" class="form-label">Penerima</label>
                        <input type="text" class="form-control border border-dark" id="penerima" name="penerima"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="dokumen" class="form-label">Dokumen</label>
                        <input type="file" class="form-control border border-dark" id="dokumen" name="dokumen" required>
                    </div>
                    <div class="container d-flex justify-content-center align-items-center mt-2">
                        <div class="" style="height: 30px; width: 100px;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal untuk sukses registrasi -->
<div class="modal fade" id="successUpload" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Sukses!</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Upload Document Anda berhasil!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Menampilkan Pesan Kesalahan -->
<div class="modal fade" id="failedUpload" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
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