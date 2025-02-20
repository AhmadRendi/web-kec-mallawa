<?php

class DocumentUtil {

    private $modelDocument;

    public function __construct($modelDocument){
        $this->modelDocument = $modelDocument;
    }

    private function uploadImage($file) {

        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileTmp = $file['tmp_name'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
    
        // Tentukan folder tujuan
        $folderDestination =  '../public/img/file/';

        if(!is_dir($folderDestination)){
            throw new Exception('Direktori Tidak Ditemukan ' . $folderDestination);
        }

        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
        $fileDestination = $folderDestination . $fileNameNew;
    
        $allowed = ['pdf'];
    
        // Validasi ekstensi file
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    // Validasi apakah direktori tujuan ada, jika tidak ada, buat direktori
                    if (!is_dir($folderDestination)) {
                        if (!mkdir($folderDestination, 0755, true)) {
                            throw new Exception('Gagal Membuat Direktori: ' . $folderDestination);
                        }
                    }
    
                    // Debug: Periksa apakah file temporary ada
                    if (!file_exists($fileTmp)) {
                        throw new Exception('Temporeri Tidak Tersedia' . $fileTmp);
                    }
    
                    // Pindahkan file ke direktori tujuan
                    if (move_uploaded_file($fileTmp, $fileDestination)) {
                        return $fileNameNew;
                    } else {
                        throw new Exception('Gagal mengupload file');
                    }
                } else {
                    throw new Exception('Ukuran file terlalu besar');
                }
            } else {
                throw new Exception('Error saat mengupload file');
            }
        } else {
            throw new Exception('Ekstensi file tidak diizinkan');
        }
    }

    // validasi inputan hanya huruf
    private function validateAlphabet($data) {
        if (!preg_match('/^[a-zA-Z\s]+$/', $data)) {
            throw new Exception('tidak boleh mengandung angka atau karakter lain.');
        }
    } 

    // fungsi utama untuk menambahkan dokumen
    public function addDocument($data, $file){
        try{
            $filename = $this->uploadImage($file);

            $this->validateAlphabet($data['penerima']);
            $this->validateAlphabet($data['pengirim']);

            $data['status'] = 'Menunggu Verifikasi';
            $data['dokumen'] = $filename;

            $this->modelDocument->addDocument($data);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    // fungsi untuk mendapatkan semua data dokumen
    public function getAllData(){
        try{
            return $this->modelDocument->getAllData();
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    public function getById($id){
        try{
            return $this->modelDocument->getById($id);
        }catch(Exception $e){
            throw new Exception($e->getMesage());
        }
    }

    // fungsi untuk menghapus dokumen
    public function deleteDocument($id){
        try{
            $this->modelDocument->delete($id);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    // fungsi untuk mengupdate data dokumen
    public function updateData($data, $file){
        try{
            $filename = $this->uploadImage($file);
            $data['dokumen'] = $filename;
            $this->validateAlphabet($data);

            $this->modelDocument->update($data);

            return "success";
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    // fungsi untuk menghitung jumlah dokumen yang ada
    public function getDocumentToDashboard(){
        try{
            $today = date('Y-m-d');
            $firstDayOfMonth = date('Y-m-01');
            $firstDayOfYear = date('Y-01-01');

            $allData = $this->modelDocument->getAllData();

            $totalDocument = count($allData);
            $todayDocuments = 0;
            $monthDocuments = 0;
            $yearDocuments = 0;

            foreach($allData as $data){
                // Mengubah format tanggal untuk membandingkan hanya tanggal
                $documentDate = date('Y-m-d', strtotime($data['date']));
                
                if ($documentDate == $today) {
                    $todayDocuments++;
                }
                if (strtotime($documentDate) >= strtotime($firstDayOfMonth)) {
                    $monthDocuments++;
                }
                if (strtotime($documentDate) >= strtotime($firstDayOfYear)) {
                    $yearDocuments++;
                }
            }
            
            return [
                'totalDocument' => $totalDocument,
                'todayDocuments' => $todayDocuments,
                'monthDocuments' => $monthDocuments,
                'yearDocuments' => $yearDocuments
            ];
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    // fungsi untuk mengubah status dokumen
    public function updateStatus($id, $status){
        try{
            // echo $status;
            return $this->modelDocument->updateStatus($id, $status);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    private function doDownload($file){
        try{
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            
            // Bersihkan output buffer
            ob_clean();
            flush();
            
            // Baca file dan kirim ke output
            readfile($file);
            exit;
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    
    // public function download($id){
    //     try {
    //         // Tentukan folder tujuan
    //         $folderDestination =  '../public/img/file/';
    
    //         $filename = $this->modelDocument->getDocumentById($id);
    
    //         if (!$filename || !isset($filename['document'])) {
    //             throw new Exception('File tidak ditemukan di database');
    //         }
    
    //         $file = $folderDestination . $filename['document'];
    
    //         if(!file_exists($file)){
    //             throw new Exception('File Tidak Ditemukan');
    //         }
    
    //         // $this->doDownload($file);

    //         $path = 'localhost/web-ic/public/img/file/' . $filename['document'];
    //         $status = 'success';

    //         $data = [
    //             'path' => $path,
    //             'status' => $status
    //         ];
            
    //         return $data;
    //         // return $data;
    //     } catch(Exception $e) {
    //         throw new Exception($e->getMessage());
    //     }
    // }

    public function download($id){
        try {
            $folderDestination =  '../public/img/file/';
            $filename = $this->modelDocument->getDocumentById($id);
    
            if (!$filename || !isset($filename['document'])) {
                throw new Exception('File tidak ditemukan di database');
            }
    
            $file = $folderDestination . $filename['document'];
    
            if(!file_exists($file)){
                throw new Exception('File Tidak Ditemukan');
            }
    
            $path = 'http://localhost/web-ic/public/img/file/' . $filename['document'];
            $status = 'success';
    
            $data = [
                'path' => $path,
                'status' => $status,
                'filename' => $filename['document'] // Tambahkan nama file asli
            ];
            
            return $data;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}