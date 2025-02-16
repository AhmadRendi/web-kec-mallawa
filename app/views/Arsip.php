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
                                <th>Keterangan</th>
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
                                    <h6>
                                        <?php echo htmlspecialchars($doc['ket']); ?>
                                    </h6>
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