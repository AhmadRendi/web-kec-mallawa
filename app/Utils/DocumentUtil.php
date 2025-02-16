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
            throw new Exception('Directory is not found ' . $folderDestination);
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
                            throw new Exception('Cannot create directory: ' . $folderDestination);
                        }
                    }
    
                    // Debug: Periksa apakah file temporary ada
                    if (!file_exists($fileTmp)) {
                        throw new Exception('Temporary file does not exist: ' . $fileTmp);
                    }
    
                    // Pindahkan file ke direktori tujuan
                    if (move_uploaded_file($fileTmp, $fileDestination)) {
                        return $fileNameNew;
                    } else {
                        throw new Exception('Failed to move uploaded file. Check permissions and path. Destination: ' . $fileDestination);
                    }
                } else {
                    throw new Exception('Your file is too big');
                }
            } else {
                throw new Exception('There was an error uploading your file');
            }
        } else {
            throw new Exception('You cannot upload files of this type');
        }
    }

    public function addDocument($data, $file){
        try{
            $filename = $this->uploadImage($file);

            $data['status'] = false;
            $data['dokumen'] = $filename;

            $this->modelDocument->addDocument($data);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

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

    public function deleteDocument($id){
        try{
            $this->modelDocument->delete($id);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    public function updateData($data){
        try{
            
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

}