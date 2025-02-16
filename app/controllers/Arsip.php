<?php

session_start();

class Arsip extends Controller {

    public function index(){

        $data['data'] = [
            [
                'no' => 1,
                'nomorSurat' => '001/SM/2023',
                'tanggal' => '2023-01-15',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. ABC',
                'penerima' => 'Bagian Keuangan',
                'dokumen' => 'Proposal Pengadaan',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 2,
                'nomorSurat' => '002/SM/2023',
                'tanggal' => '2023-01-20',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'HRD',
                'penerima' => 'Direksi',
                'dokumen' => 'Laporan Karyawan',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 3,
                'nomorSurat' => '003/SM/2023',
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
                'tanggal' => '2023-02-10',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. DEF',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 5,
                'nomorSurat' => '005/SM/2023',
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
                'tanggal' => '2023-03-01',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Kepala Cabang',
                'penerima' => 'Direksi',
                'dokumen' => 'Laporan Keuangan',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 7,
                'nomorSurat' => '007/SM/2023',
                'tanggal' => '2023-03-05',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. GHI',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 8,
                'nomorSurat' => '008/SM/2023',
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
                'nomorSurat' => '009/SM/2023',
                'tanggal' => '2023-03-15',
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
                'nomorSurat' => '011/SM/2023',
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
                'nomorSurat' => '012/SM/2023',
                'tanggal' => '2023-04-10',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Keuangan',
                'pengirim' => 'Kepala Cabang',
                'penerima' => 'Direksi',
                'dokumen' => 'Laporan Keuangan',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 13,
                'nomorSurat' => '013/SM/2023',
                'tanggal' => '2023-04-15',
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
                'tanggal' => '2023-05-01',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Permohonan Izin Sakit',
                'ket' => 'Sudah Diterima'
            ],
            [
                'no' => 15,
                'nomorSurat' => '015/SM/2023',
                'tanggal' => '2023-05-05',
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
                'tanggal' => '2023-05-10',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. PQR',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 17,
                'nomorSurat' => '017/SM/2023',
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
                'nomorSurat' => '019/SM/2023',
                'tanggal' => '2023-06-05',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Pengadaan',
                'pengirim' => 'PT. STU',
                'penerima' => 'Bagian Pengadaan',
                'dokumen' => 'Penawaran Harga',
                'ket' => 'Menunggu Persetujuan'
            ],
            [
                'no' => 20,
                'nomorSurat' => '020/SM/2023',
                'tanggal' => '2023-06-10',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Kepegawaian',
                'pengirim' => 'Karyawan',
                'penerima' => 'HRD',
                'dokumen' => 'Surat Permohonan Izin Libur',
                'ket' => 'Sudah Diterima'
            ]
        ];

        $this->view('template/Header');
        $this->view('template/Sidebar');
        $this->view('Arsip', $data);
        $this->view('template/Footer');
    }
}