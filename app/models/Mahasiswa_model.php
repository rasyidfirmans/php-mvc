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

        public function insertDataMahasiswa($data) {
            $query = "
                INSERT INTO " . $this->table . " (nama, nim, prodi, email)
                VALUES (:nama, :nim, :prodi, :email);
            ";
            $this->db->query($query);
            $this->db->bind(":nama", $data["nama"]);
            $this->db->bind(":nim", $data["nim"]);
            $this->db->bind(":prodi", $data["prodi"]);
            $this->db->bind(":email", $data["email"]);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function deleteDataMahasiswa($id) {
            $query = "
                DELETE FROM " . $this->table . " WHERE id = :id
            ";

            $this->db->query($query);
            $this->db->bind(":id", $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function updateDataMahasiswa($data) {
            $query = "
                UPDATE " . $this->table . "
                SET nama = :nama, nim = :nim, prodi = :prodi, email = :email
                WHERE id = :id;
            ";

            $this->db->query($query);
            $this->db->bind(":nama", $data["nama"]);
            $this->db->bind(":nim", $data["nim"]);
            $this->db->bind(":prodi", $data["prodi"]);
            $this->db->bind(":email", $data["email"]);
            $this->db->bind(":id", $data["id"]);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }
?>