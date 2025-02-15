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
    <div class="container-fluid">
        <div class="card">
            <div class="card-body shadow p-3 bg-body rounded">
                <h5 class="card-title mb-4">Tambah Arsip</h5>

                <form action="<?= BASEURL;?>/AddDocument/addDocument" method="POST" enctype="multipart/form-data">
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