<?php
    class About extends Controller {
        public function index() {
            $data["title"] = "About Page";
            $data["name"] = "Rasyid Firmansyah";
            $data["job"] = "Student";
            $this->view("templates/header", $data);
            $this->view("about/index", $data);
            $this->view("templates/footer");
        }
        
        public function page() {
            $data["title"] = "About Page - Page";
            $this->view("templates/header", $data);
            $this->view("about/page");
            $this->view("templates/footer");
        }
    }
?>