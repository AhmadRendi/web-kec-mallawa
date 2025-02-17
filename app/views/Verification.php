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
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="card-title">Verifikasi Dokumen</h5>
                </div>
                <div class="table-responsive">
                    <table id="data_table" class="display" style="width:100%">
                        <thead style="background-color:rgb(8, 24, 41); color:white;">
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
                                        <?php echo htmlspecialchars($doc['nomorSurat']); ?>
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
                                    <div class="col-auto">
                                        <div class="d-flex">
                                            <a href="" class="icon-button bg-success-custom text-white"
                                            data-bs-toggle="modal" data-bs-target="#downloadModal" data-id="<?= $doc['id']; ?>">
                                            <i class="bi bi-download"></i>

                                            <a href="" class="icon-button bg-warning-custom text-white"
                                                data-bs-toggle="modal" data-bs-target="#successVerification" data-id="<?= $doc['id']; ?>">
                                                <i class="bi bi-check-lg"></i>
                                            </a>

                                            <a href="" class="icon-button bg-danger-custom text-white"
                                                data-bs-toggle="modal" data-bs-target="#btlVerification" data-id="<?= $doc['id']; ?>">
                                                <i class="bi bi-x-lg"></i>
                                            </a>

                                        </div>
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

<!-- Verifikasi Confirmation Modal -->
<div class="modal fade" id="successVerification" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="downloadModalLabel">Konfirmasi Verifikasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Yakin ingin Memverifikasi dokumen ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="confirmVerification">Verifikasi</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="btlVerification" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p>Tidak Verifikasi data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="cancelVerification">Batal Verifikasi</button>
            </div>
        </div>
    </div>
</div>