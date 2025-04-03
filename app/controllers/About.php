<?php
    require_once '../app/core/Controller.php';
    class About extends Controller {
        public function index($name = "Rasyid", $job = "student") {
            $title = ["About Page"];
            $data = [$name, $job];
            $this->view("templates/header", $title);
            $this->view("about/index", $data);
            $this->view("templates/footer");
        }
        
        public function page() {
            $title = ["About Page - Page"];
            $this->view("templates/header", $title);
            $this->view("about/page");
            $this->view("templates/footer");
        }
    }
?>