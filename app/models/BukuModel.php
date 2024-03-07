<?php

    class BukuModel {
        private $table = 'buku';
        private $db;

        public function __construct(){
            $this->db = new Database;
        }
        public function getAllBuku(){
            $this->db->query("SELECT buku.*, kategori.nama_kategori FROM " . $this->table . " JOIN kategori ON kategori.id = buku.kategori_id");
            return $this->db->resultSet();
        }

        public function tambahBuku($data){
            $query = "INSERT INTO buku (tanggal, nama, kelas, judul_buku, banyaknya, tanggal_kembali, kategori_id, keterangan) VALUES(:tanggal, :nama, :kelas, :judul_buku, :banyaknya, :tanggal_kembali, :kategori_id, :keterangan)";
            $this->db->query($query);
            $this->db->bind('tanggal', $data['tanggal']);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('kelas', $data['kelas']);
            $this->db->bind('judul_buku', $data['judul_buku']);
            $this->db->bind('banyaknya', $data['banyaknya']);
            $this->db->bind('tanggal_kembali', $data['tanggal_kembali']);
            $this->db->bind('kategori_id', $data['kategori_id']);
            $this->db->bind('keterangan', $data['keterangan']);
            $this->db->execute();

            return $this->db->rowCount();
        }

        public function getBukuById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function updateDataBuku($data){
            $query = "UPDATE buku SET tanggal=:tanggal, nama=:nama, kelas=:kelas, judul_buku=:judul_buku, banyaknya=:banyaknya, tanggal_kembali=:tanggal_kembali, kategori_id=:kategori_id, keterangan=:keterangan WHERE id=:id";
            $this->db->query($query);
            $this->db->bind('id', $data['id']);
            $this->db->bind('tanggal', $data['tanggal']);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('kelas', $data['kelas']);
            $this->db->bind('judul_buku', $data['judul_buku']);
            $this->db->bind('banyaknya', $data['banyaknya']);
            $this->db->bind('tanggal_kembali', $data['tanggal_kembali']);
            $this->db->bind('kategori_id', $data['kategori_id']);
            $this->db->bind('keterangan', $data['keterangan']);
            $this->db->execute();

            return $this->db->rowCount();
        }

        public function deleteBuku($id){
            $this->db->query(' DELETE FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id' , $id);
            $this->db->execute();
    
            return $this->db->rowCount();
        }

        public function cariBuku(){
            $key = $_POST['key'];
            $this->db->query("SELECT buku.*, kategori.nama_kategori FROM " . $this->table . " JOIN kategori ON kategori.id = buku.kategori_id where tanggal like :key or nama like :key or kelas like :key or judul_buku like :key or tanggal_kembali like :key or nama_kategori like :key");
            $this->db->bind('key', "%$key%");
            return $this->db->resultSet();
        
        }     
        public function tampilData(){
            $this->db->query("SELECT buku.*, kategori.nama_kategori FROM " . $this->table . " JOIN kategori ON kategori.id = buku.kategori_id");
            return $this->db->resultSet();
        }   
    }
?>