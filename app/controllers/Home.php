<?php
    class Home extends Controller {
        public function index() {
            $data["title"] = "Home Page";
            $data["name"] = $this->model("Users_model")->getUser();
            $this->view("templates/header", $data);
            $this->view("home/index", $data);
            $this->view("templates/footer");
        }
    }
?>