<?php

session_start();

class Pengarsipan extends Controller{

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
        $this->view('Pengarsipan', $data);
        $this->view('template/Footer');
    }

    public function getDocument() {
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

        $id = $_POST['id'];
        $id = $id - 1;
        $firstDocument = $data['data'][$id];
        echo json_encode($firstDocument);
    }

    public function updateData(){
        $data = $_POST;
        echo "Update Data";
    }

    public function download(){
        $idDocument = $_POST['id'];
        var_dump($idDocument);
        echo "Download";
    }

    public function delete(){
        $idDocument = $_POST['id'];
        var_dump($idDocument);
        echo "Delete";
    }

    public function search(){
        $data['title'] = 'Pengarsipan Dokumen';
        $data['documents'] = $this->model('Document_model')->searchDocuments($_POST['keyword']);
        $this->view('template/header', $data);
        $this->view('template/sidebar');
        $this->view('pengarsipan/index', $data);
        $this->view('template/footer');
    }

}