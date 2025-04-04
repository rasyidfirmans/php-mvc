<?php
    class Mahasiswa_model {
        private $table = "mahasiswa";
        private $db;

        public function __construct() {
            $this->db = new Database();
        }

        public function getAllMahasiswa() {
            $query = "SELECT * FROM " . $this->table;
            $this->db->query($query);
            return $this->db->resultSet();
        }

        public function getSingleMahasiswa($id) {
            $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
            $this->db->query($query);
            $this->db->bind(":id", $id);
            return $this->db->single();
        }
    }
?>