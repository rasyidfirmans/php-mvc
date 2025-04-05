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

        public function insert() {
            if (isset($_POST["submit"])) {
                $affected_rows = $this->model("Mahasiswa_model")->insertDataMahasiswa($_POST);

                if ($affected_rows > 0) {
                    header("Location: " . BASEURL . "/mahasiswa");
                    exit;
                }
            }

            $data["title"] = "Tambah Data Mahasiswa";
            $this->view("templates/header", $data);
            $this->view("mahasiswa/insert");
            $this->view("templates/footer");
        }
    }
?>