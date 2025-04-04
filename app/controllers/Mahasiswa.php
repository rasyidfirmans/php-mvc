<?php
    class Mahasiswa extends Controller {
        public function index() {
            $data["title"] = "Page Mahasiswa";
            $data["mahasiswa"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
            $this->view("templates/header", $data);
            $this->view("mahasiswa/index", $data);
            $this->view("templates/footer");
        }

        public function detail($id) {
            $data["title"] = "Detail Mahasiswa";
            $data["mahasiswa"] = $this->model("Mahasiswa_model")->getSingleMahasiswa($id);
            $this->view("templates/header", $data);
            $this->view("mahasiswa/detail", $data);
            $this->view("templates/footer");
        }
    }
?>