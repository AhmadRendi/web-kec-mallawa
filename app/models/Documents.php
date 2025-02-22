<?php


class Documents {

    private $table = "document";

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addDocument($data){
        try{
            $query = "INSERT INTO $this->table (date, jenis, kategory, pengirim, penerima, document, status, nmr_surat) VALUE (?, ?, ?, ?, ?, ?, ?, ?)";

            $this->db->query($query);

            $this->db->bind(1, $data['tanggal']);
            $this->db->bind(2, $data['jenis']);
            $this->db->bind(3, $data['kategori']);
            $this->db->bind(4, $data['pengirim']);
            $this->db->bind(5, $data['penerima']);
            $this->db->bind(6, $data['dokumen']);
            $this->db->bind(7, $data['status']);
            $this->db->bind(8, $data['nomor_surat']);

            $this->db->execute();

            return "Success";
        }catch (PDOException $e){
            throw new PDOException($e->getMessage()); 
        }
    }

    public function getAllData(){
        try{
            $query = "SELECT * FROM $this->table";
            $this->db->query($query);
            return $this->db->resultSet();
        }catch (PDOException $e){
            throw new PDOException($e->getMessage()); 
        }
    }

    public function delete($id){
        try{
            $query = "DELETE FROM $this->table WHERE id_document = ?";
            $this->db->query($query);
            $this->db->bind(1, $id);
            $this->db->single();
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }

    public function getById($id){
        try{
            $query = "SELECT * FROM $this->table WHERE id_document = ?";
            $this->db->query($query);
            $this->db->bind(1, $id);
            return $this->db->single();
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }

    public function update($data){
        try{
            $query = "UPDATE $this->table SET jenis = ?, kategory = ?, 
                pengirim = ?, penerima = ?, document = ? WHERE id_document = ?";

            $this->db->query($query);

            $this->db->bind(1, $data['jenis']);
            $this->db->bind(2, $data['kategori']);
            $this->db->bind(3, $data['pengirim']);
            $this->db->bind(4, $data['penerima']);
            $this->db->bind(5, $data['dokumen']);
            $this->db->bind(6, $data['id']);
            // $this->db->bind(8, $data['nomor_surat']);

            $this->db->execute();

            // return $this->db->rowCount();
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }

    public function updateStatus($id, $reason, $status){
        try{
            $query = "UPDATE $this->table SET status = ?, reason = ?
                WHERE id_document = ?";
            $this->db->query($query);
            $this->db->bind(1, $status);
            $this->db->bind(2, $reason);
            $this->db->bind(3, $id);
            $this->db->execute();
            return $id;
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }

    public function getDocumentById($id){
        try{
            $query = "SELECT document FROM $this->table WHERE id_document = ?";
            $this->db->query($query);
            $this->db->bind(1, $id);
            return $this->db->single();
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }

}