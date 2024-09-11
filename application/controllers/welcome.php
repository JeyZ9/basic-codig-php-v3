<?php
    class Welcome extends CI_Controller{

        public function index(){
            $this->load->view('welcome_message');
        }

        public function hello(){
            $data["name"] = "Somchai";
            $data["email"] = "somchai@gmail.com";

            $data['query'] = $this->cm->showName();
            
            $this->load->view("hello_view", $data);
            // $this->load->model("CustomerModel");
        }
    }
?>