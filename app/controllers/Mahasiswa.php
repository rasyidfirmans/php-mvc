<?php
    class Mahasiswa extends Controller {
        public function index() {
            $data["title"] = "Page Mahasiswa";

            if (isset($_POST["keyword"])) {
                $data["mahasiswa"] = $this->model("Mahasiswa_model")->searchDataMahasiswa($_POST["keyword"]);
                var_dump($data["mahasiswa"]);
            } else {
                $data["mahasiswa"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
            }


            $this->view("templates/header", $data);
            $this->view("mahasiswa/index", $data);
            $this->view("templates/notification/toast");
            $this->view("templates/footer");

            Notification::unset();
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
                    $message = "Data mahasiswa";
                    $action = "ditambahkan";
                    $type = "berhasil";

                    Notification::setNotification($message, $action, $type);
                    
                    header("Location: " . BASEURL . "/mahasiswa");
                    exit;
                } else {
                    $message = "Data mahasiswa";
                    $action = "ditambahkan";
                    $type = "gagal";
                    
                    Notification::setNotification($message, $action, $type);

                    header("Location: " . BASEURL . "/mahasiswa");
                    exit;
                }
            }

            $data["title"] = "Tambah Data Mahasiswa";
            $this->view("templates/header", $data);
            $this->view("mahasiswa/insert");
            $this->view("templates/footer");
        }

        public function delete($id) {
            $data["title"] = "Delete Mahasiswa";
            $affected_rows = $this->model("Mahasiswa_model")->deleteDataMahasiswa($id);

            if ($affected_rows > 0) {
                $message = "Data mahasiswa";
                $action = "dihapus";
                $type = "berhasil";

                Notification::setNotification($message, $action, $type);
                
                header("Location: " . BASEURL . "/mahasiswa");
                exit;
            } else {
                $message = "Data mahasiswa";
                $action = "dihapus";
                $type = "gagal";
                
                Notification::setNotification($message, $action, $type);

                header("Location: " . BASEURL . "/mahasiswa");
                exit;
            }

            $this->view("templates/header", $data);
            $this->view("mahasiswa/index");
            $this->view("templates/footer");
        }

        public function update($id) {
            $data["title"] = "Update Mahasiswa";
            $data["mahasiswa"] = $this->model("Mahasiswa_model")->getSingleMahasiswa($id);

            if (isset($_POST["submit"])) {
                $affected_rows = $this->model("Mahasiswa_model")->updateDataMahasiswa($_POST);

                if ($affected_rows > 0) {
                    $message = "Data mahasiswa";
                    $action = "diupdate";
                    $type = "berhasil";

                    Notification::setNotification($message, $action, $type);
                    
                    header("Location: " . BASEURL . "/mahasiswa");
                    exit;
                } else {
                    $message = "Data mahasiswa";
                    $action = "diupdate";
                    $type = "gagal";
                    
                    Notification::setNotification($message, $action, $type);

                    header("Location: " . BASEURL . "/mahasiswa");
                    exit;
                }
            }

            $this->view("templates/header", $data);
            $this->view("mahasiswa/update", $data);
            $this->view("templates/footer");

        }
    }
?>