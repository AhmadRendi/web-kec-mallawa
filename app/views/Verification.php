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
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="card-title">Verifikasi Dokumen</h5>
                    <div class="search-box">
                        <input type="text" class="form-control" id="searchInput" placeholder="Cari...">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nomor Surat</th>
                                <th>Tanggal</th>
                                <th>Jenis</th>
                                <th>Kategori</th>
                                <th>Pengirim</th>
                                <th>Penerima</th>
                                <th>Dokumen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['data'] as $index => $doc): ?>
                            <tr>
                                <td>
                                    <h6>
                                        <?php echo $index + 1; ?>
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        <?php echo htmlspecialchars($doc['nomor_surat']); ?>
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        <?php echo date('Y-m-d', strtotime($doc['tanggal'])); ?>
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        <?php echo htmlspecialchars($doc['jenis']); ?>
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        <?php echo htmlspecialchars($doc['kategori']); ?>
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        <?php echo htmlspecialchars($doc['pengirim']); ?>
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        <?php echo htmlspecialchars($doc['penerima']); ?>
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        <?php echo htmlspecialchars($doc['dokumen']); ?>
                                    </h6>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="" class="btn btn-sm btn-primary"
                                        data-bs-toggle="modal" data-bs-target="#downloadModal" data-id="<?= $doc['id']; ?>"
                                        ><i class="bi bi-download"></i></a>

                                        <a href="" class="btn btn-sm btn-warning tampilModalUpdate"
                                        data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $doc['id']; ?>"
                                        ><i class="bi bi-pencil"></i></a>

                                        <a href="" class="btn btn-sm btn-danger"
                                        data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="<?= $doc['id']; ?>"
                                        ><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>   
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Ubah Arsip</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" action="<?= BASEURL; ?>/Pengarsipan/updateData" method="POST">
                    <input type="hidden" name="id" id="editId">
                    <div class="mb-3">
                        <label for="editNomorSurat" class="form-label">Nomor Surat</label>
                        <input type="text" class="form-control" id="editNomorSurat" name="nomor_surat" required>
                    </div>
                    <div class="mb-3">
                        <label for="editTanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="editTanggal" name="tanggal" required>
                    </div>
                    <div class="mb-3">
                        <label for="editJenis" class="form-label">Jenis</label>
                        <select class="form-select" id="editJenis" name="jenis" required>
                            <option value="Surat Masuk">Surat Masuk</option>
                            <option value="Surat Keluar">Surat Keluar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editKategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="editKategori" name="kategori" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPengirim" class="form-label">Pengirim</label>
                        <input type="text" class="form-control" id="editPengirim" name="pengirim" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPenerima" class="form-label">Penerima</label>
                        <input type="text" class="form-control" id="editPenerima" name="penerima" required>
                    </div>
                    <div class="mb-3">
                        <label for="editDokumen" class="form-label">Dokumen</label>
                        <input type="file" class="form-control" id="editDokumen" name="dokumen">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Download Confirmation Modal -->
<div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="downloadModalLabel">Konfirmasi Download</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Yakin ingin mendownload dokumen ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="confirmDownload">Download</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p>Hapus data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Hapus</button>
            </div>
        </div>
    </div>
</div>