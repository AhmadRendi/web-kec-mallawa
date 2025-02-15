<?php

class verification extends Controller{

    public function index(){

        $data['data'] = [
            [
                'no' => 1,
                'id' => 1,
                'nomor_surat' => '123/ABC/2023',
                'tanggal' => '2023-01-15',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Penting',
                'pengirim' => 'John Doe',
                'penerima' => 'Jane Smith',
                'dokumen' => 'Dokumen1.pdf'
            ],
            [
                'no' => 2,
                'id' => 2,
                'nomor_surat' => '124/ABC/2023',
                'tanggal' => '2023-02-20',
                'jenis' => 'Surat Keluar',
                'kategori' => 'Biasa',
                'pengirim' => 'Alice Johnson',
                'penerima' => 'Bob Brown',
                'dokumen' => 'Dokumen2.pdf'
            ],
            [
                'no' => 3,
                'id' => 3,
                'nomor_surat' => '125/ABC/2023',
                'tanggal' => '2023-03-10',
                'jenis' => 'Surat Masuk',
                'kategori' => 'Penting',
                'pengirim' => 'Charlie White',
                'penerima' => 'Diana Green',
                'dokumen' => 'Dokumen3.pdf'
            ],
        ];

        $this->view('template/Header');
        $this->view('template/Sidebar');
        $this->view('Verification', $data); 
        $this->view('template/Footer');
    }

    // public function logout(){
    //     session_destroy();
    //     header('Location: ' . BASEURL . '/login');
    // }
}