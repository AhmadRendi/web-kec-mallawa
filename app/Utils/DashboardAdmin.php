<?php

class DashboardAdmin {

    public function __construct(){
        $this->getData();
    }

    public function getData(){

        return $data['data'] = [
            [
                'no' => 1,
                'nomorSurat' => '001/SM/2023',
                'tanggal' => '2025-01-15',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. ABC',
                'penerima' => 'Bagian Keuangan',
                'dokumen' => 'Proposal Pengadaan',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 2,
                'nomorSurat' => '002/SM/2019',
                'tanggal' => '2025-01-20',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'HRD',
                'penerima' => 'Direksi',
                'dokumen' => 'Laporan Karyawan',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 3,
                'nomorSurat' => '003/SM/2020',
                'tanggal' => '2023-02-05',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Bank XYZ',
                'penerima' => 'Bagian Keuangan',
                'dokumen' => 'Bukti Transfer',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 4,
                'nomorSurat' => '004/SM/2023',
                'tanggal' => '2021-02-10',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. DEF',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 5,
                'nomorSurat' => '005/SM/2019',
                'tanggal' => '2023-02-15',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Pengunduran Diri',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 6,
                'nomorSurat' => '006/SM/2023',
                'tanggal' => '2024-03-01',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Kepala Cabang',
                'penerima' => 'Direksi',
                'dokumen' => 'Laporan Keuangan',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 7,
                'nomorSurat' => '007/SM/2020',
                'tanggal' => '2020-03-05',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. GHI',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 8,
                'nomorSurat' => '008/SM/2019',
                'tanggal' => '2023-03-10',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Permohonan Cuti',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 9,
                'nomorSurat' => '009/SM/2022',
                'tanggal' => '2019-03-15',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Bank ABC',
                'penerima' => 'Bagian Keuangan',
                'dokumen' => 'Bukti Transfer',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 10,
                'nomorSurat' => '010/SM/2023',
                'tanggal' => '2023-04-01',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. JKL',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 11,
                'nomorSurat' => '011/SM/2025',
                'tanggal' => '2023-04-05',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Permohonan Kenaikan Gaji',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 12,
                'nomorSurat' => '012/SM/2024',
                'tanggal' => '2018-04-10',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Kepala Cabang',
                'penerima' => 'Direksi',
                'dokumen' => 'Laporan Keuangan',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 13,
                'nomorSurat' => '013/SM/2021',
                'tanggal' => '2022-04-15',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. MNO',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 14,
                'nomorSurat' => '014/SM/2023',
                'tanggal' => '2025-05-01',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Permohonan Izin Sakit',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 15,
                'nomorSurat' => '015/SM/2020',
                'tanggal' => '2021-05-05',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Bank XYZ',
                'penerima' => 'Bagian Keuangan',
                'dokumen' => 'Bukti Transfer',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 16,
                'nomorSurat' => '016/SM/2023',
                'tanggal' => '2022-05-10',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. PQR',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 17,
                'nomorSurat' => '017/SM/2024',
                'tanggal' => '2023-05-15',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Pengunduran Diri',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 18,
                'nomorSurat' => '018/SM/2023',
                'tanggal' => '2023-06-01',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Kepala Cabang',
                'penerima' => 'Direksi',
                'dokumen' => 'Laporan Keuangan',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 19,
                'nomorSurat' => '019/SM/2022',
                'tanggal' => '2025-06-05',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. STU',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 20,
                'nomorSurat' => '020/SM/2021',
                'tanggal' => '2023-06-10',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Permohonan Izin Libur',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 21,
                'nomorSurat' => '021/SM/2023',
                'tanggal' => '2023-06-15',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. XYZ',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 22,
                'nomorSurat' => '022/SM/2020',
                'tanggal' => '2023-06-20',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Permohonan Cuti',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 23,
                'nomorSurat' => '023/SM/2021',
                'tanggal' => '2024-06-25',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Bank DEF',
                'penerima' => 'Bagian Keuangan',
                'dokumen' => 'Bukti Transfer',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 24,
                'nomorSurat' => '024/SM/2022',
                'tanggal' => '2024-07-01',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. GHI',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 25,
                'nomorSurat' => '025/SM/2023',
                'tanggal' => '2024-07-05',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Permohonan Kenaikan Gaji',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 26,
                'nomorSurat' => '026/SM/2024',
                'tanggal' => '2022-07-10',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Kepala Cabang',
                'penerima' => 'Direksi',
                'dokumen' => 'Laporan Keuangan',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 27,
                'nomorSurat' => '027/SM/2025',
                'tanggal' => '2023-07-15',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. JKL',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 28,
                'nomorSurat' => '028/SM/2023',
                'tanggal' => '2021-07-20',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Permohonan Izin Sakit',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 29,
                'nomorSurat' => '029/SM/2022',
                'tanggal' => '2023-07-25',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Bank GHI',
                'penerima' => 'Bagian Keuangan',
                'dokumen' => 'Bukti Transfer',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 30,
                'nomorSurat' => '030/SM/2021',
                'tanggal' => '2023-08-01',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. MNO',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 31,
                'nomorSurat' => '031/SM/2020',
                'tanggal' => '2022-08-05',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Permohonan Cuti',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 32,
                'nomorSurat' => '032/SM/2023',
                'tanggal' => '2019-08-10',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Kepala Cabang',
                'penerima' => 'Direksi',
                'dokumen' => 'Laporan Keuangan',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 33,
                'nomorSurat' => '033/SM/2024',
                'tanggal' => '2021-08-15',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. PQR',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 34,
                'nomorSurat' => '034/SM/2025',
                'tanggal' => '2019-08-20',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Permohonan Kenaikan Gaji',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 35,
                'nomorSurat' => '035/SM/2023',
                'tanggal' => '2017-08-25',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Bank STU',
                'penerima' => 'Bagian Keuangan',
                'dokumen' => 'Bukti Transfer',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 36,
                'nomorSurat' => '036/SM/2022',
                'tanggal' => '2020-09-01',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. ABC',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 37,
                'nomorSurat' => '037/SM/2021',
                'tanggal' => '2020-09-05',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Permohonan Izin Sakit',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 38,
                'nomorSurat' => '038/SM/2020',
                'tanggal' => '2022-09-10',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Bank XYZ',
                'penerima' => 'Bagian Keuangan',
                'dokumen' => 'Bukti Transfer',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 39,
                'nomorSurat' => '039/SM/2023',
                'tanggal' => '2021-09-15',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. DEF',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 40,
                'nomorSurat' => '040/SM/2024',
                'tanggal' => '2022-09-20',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Permohonan Kenaikan Gaji',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 41,
                'nomorSurat' => '041/SM/2023',
                'tanggal' => '2025-09-25',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Kepala Cabang',
                'penerima' => 'Direksi',
                'dokumen' => 'Laporan Keuangan',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 42,
                'nomorSurat' => '042/SM/2025',
                'tanggal' => '2022-10-01',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. GHI',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 43,
                'nomorSurat' => '043/SM/2023',
                'tanggal' => '2021-10-05',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Permohonan Izin Sakit',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 44,
                'nomorSurat' => '044/SM/2022',
                'tanggal' => '2019-10-10',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Bank ABC',
                'penerima' => 'Bagian Keuangan',
                'dokumen' => 'Bukti Transfer',
                'ket' => 'Sudah Diterima'
            ]
        ];
    }

    function processSuratMasukData($data) {

        $currentYear = date('Y');
        $startYear = $currentYear - 4;
        $endYear = $currentYear;
    
        $result = [
            'labels' => [],
            'datasets' => []
        ];
    
        $yearlyCounts = [];

        foreach ($data as $surat) {
            $year = date('Y', strtotime($surat['tanggal']));
    
            if ($year >= $startYear && $year <= $endYear) {
                if (!isset($yearlyCounts[$year])) {
                    $yearlyCounts[$year] = [];
                }
    
                if (!isset($yearlyCounts[$year][$surat['kategori']])) {
                    $yearlyCounts[$year][$surat['kategori']] = 0;
                }
    
                $yearlyCounts[$year][$surat['kategori']]++;
            }
        }

        for ($year = $startYear; $year <= $endYear; $year++) {
            $result['labels'][] = $year;
        }
    
        $categories = array_unique(array_column($data, 'kategori'));

        // foreach ($categories as $category) {
        //     $dataset = [
        //         'label' => $category,
        //         'data' => [],
        //         'borderColor' => '#ffd700',
        //         'tension' => 0.4,
        //         'fill' => false
        //     ];
    
        //     for ($year = $startYear; $year <= $endYear; $year++) {
        //         if (isset($yearlyCounts[$year][$category])) {
        //             $dataset['data'][] = $yearlyCounts[$year][$category];
        //         } else {
        //             $dataset['data'][] = 0;
        //         }
        //     }
    
        //     $result['datasets'][] = $dataset;
        // }

        $colors = [
            '#FF5733', '#33FF57', '#3357FF', '#F3FF33', '#FF33F6',
            '#33FFF6', '#F633FF', '#F6FF33', '#33F6FF', '#FF33A1',
            '#A1FF33', '#33A1FF', '#FFA133', '#33FFA1', '#A133FF'
        ];
        
        $colorIndex = 0;
        foreach ($categories as $category) {
            $dataset = [
                'label' => $category,
                'data' => [],
                'borderColor' => $colors[$colorIndex % count($colors)], // Memilih warna dari array
                'tension' => 0.4,
                'fill' => false
            ];
        
            for ($year = $startYear; $year <= $endYear; $year++) {
                if (isset($yearlyCounts[$year][$category])) {
                    $dataset['data'][] = $yearlyCounts[$year][$category];
                } else {
                    $dataset['data'][] = 0;
                }
            }
        
            $result['datasets'][] = $dataset;
            $colorIndex++;
        }        

        return $result;
    }

    public function getCountDocumentYears(){

        $data = $this->getData();

        $currentYear = date('Y');
        $startYear = $currentYear - 4;
        $endYear = $currentYear;

        $yearlyCounts = [];


        foreach ($data as $item) {
            $year = date('Y', strtotime($item['tanggal']));

            if ($year >= $startYear && $year <= $endYear) {
                if (!isset($yearlyCounts[$year])) {
                    $yearlyCounts[$year] = 0;
                }

                $yearlyCounts[$year]++;
            }
        }

        $response = [];

        for ($year = $startYear; $year <= $endYear; $year++) {
            $response[] = [
                'year' => $year,
                'count' => isset($yearlyCounts[$year]) ? $yearlyCounts[$year] : 0
            ];
        }

        return $response;
    }

    public function get(){
        $data = $this->getData();
        $processedData = $this->processSuratMasukData($data);
        return $processedData;
    }
}