<?php
    class Manage_products extends CI_Controller{

        function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function index(){
            echo "Database!";
        }

        public function getProducts(){
            // $sql = "SELECT * FROM products WHERE code = 'C2499'";
            // // $query = $this->db->query($sql)->result();
            // // print_r($query);
            // // echo "<br>";
            // $data['query'] = $this->db->query($sql)->result();
            $data["query"] = $this->pm->getAllV2();
            $this->load->view("showProduct", $data);
        }
        public function getProductByCode($code="c2499"){
            $data["query"] = $this->pm->getByCodeV2($code);
            $this->load->view("showProduct", $data);
        }
        public function deleteProductByCode($code){
            $this->pm->deleteProductByCode($code);
            $this->getProducts();
        }
    }
?>