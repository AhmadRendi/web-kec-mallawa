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
            <div class="card-body shadow p-3 bg-body rounded">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="card-title">Sistem Pengarsipan Dokumen</h5>
                    <a href="<?= BASEURL ?>/verifikasi" class="text-primary text-decoration-none">
                        Dokumen Terverifikasi
                    </a>
                </div>

                <div class="chart-container" style="position: relative; height:400px; width:100%">
                    <canvas id="documentChart"></canvas>
                </div>

                <div class="container mt-4">
                    <div class="row">
                        <div class="d-flex justify-content-between">
                        <?php foreach ($data['data'] as $index => $doc): ?>
                            <div class="card shadow p-3 bg-body rounded">
                                <h6 class="card-title">Tahun <?php echo htmlspecialchars($doc['year']); ?> </h6>
                                <p class="card-text"><?php echo htmlspecialchars($doc['count']); ?> Dokumen</p>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>