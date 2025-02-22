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
                                <th>Alasan</th>
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
                                        <?php echo htmlspecialchars($doc['nmr_surat']); ?>
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        <?php echo date('Y-m-d', strtotime($doc['date'])); ?>
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        <?php echo htmlspecialchars($doc['jenis']); ?>
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        <?php echo htmlspecialchars($doc['kategory']); ?>
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
                                        <?php echo htmlspecialchars($doc['document']); ?>
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        <?php echo htmlspecialchars($doc['reason']); ?>
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        <?php echo htmlspecialchars($doc['status']); ?>
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