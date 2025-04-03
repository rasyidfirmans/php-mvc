<?php
    require_once '../app/core/Controller.php';
    class Home extends Controller {
        public function index() {
            $title = ["Home Page"];
            $this->view("templates/header", $title);
            $this->view("home/index");
            $this->view("templates/footer");
        }
    }
?>