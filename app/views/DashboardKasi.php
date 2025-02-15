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
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="card-title">Sistem Pengarsipan Dokumen</h5>
                    <a href="<?= BASEURL ?>/verifikasi" class="text-primary text-decoration-none">
                        Dokumen Terverifikasi
                    </a>
                </div>

                <!-- Chart Container -->
                <div class="chart-container" style="position: relative; height:400px; width:100%">
                    <canvas id="documentChart"></canvas>
                </div>

                <!-- Document Count Boxes -->
                <div class="document-counts d-flex justify-content-center gap-3 mt-4">
                    <div class="doc-count-box" style="background-color: #ffd700">
                        300 Dok.
                        <div class="year">2021</div>
                    </div>
                    <div class="doc-count-box" style="background-color: #ffa500">
                        350 Dok.
                        <div class="year">2022</div>
                    </div>
                    <div class="doc-count-box" style="background-color: #ff7f50">
                        400 Dok.
                        <div class="year">2023</div>
                    </div>
                    <div class="doc-count-box" style="background-color: #333">
                        450 Dok.
                        <div class="year">2024</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Initialize Chart -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('documentChart').getContext('2d');
    
    // Sample data - replace with actual data from your backend
    const data = {
        labels: ['2021', '2022', '2023', '2024'],
        datasets: [
            {
                label: 'Surat Masuk',
                data: [65, 62, 48, 45],
                borderColor: '#ffd700',
                tension: 0.4,
                fill: false
            },
            {
                label: 'Surat Keluar',
                data: [55, 53, 40, 38],
                borderColor: '#ffa500',
                tension: 0.4,
                fill: false
            },
            {
                label: 'Undangan',
                data: [45, 43, 35, 32],
                borderColor: '#ff7f50',
                tension: 0.4,
                fill: false
            },
            {
                label: 'Penting',
                data: [35, 33, 25, 22],
                borderColor: '#ff6b35',
                tension: 0.4,
                fill: false
            },
            {
                label: 'Biasa',
                data: [25, 23, 15, 12],
                borderColor: '#4a90e2',
                tension: 0.4,
                fill: false
            }
        ]
    };

    const config = {
        type: 'line',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 70,
                    ticks: {
                        stepSize: 10
                    },
                    grid: {
                        color: '#e0e0e0'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            },
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        usePointStyle: true,
                        padding: 20
                    }
                }
            },
            elements: {
                point: {
                    radius: 0
                },
                line: {
                    borderWidth: 2
                }
            }
        }
    };

    new Chart(ctx, config);
});
</script>