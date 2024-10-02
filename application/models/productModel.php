<?php
    defined('BASEPATH') or exit("No direct script access allowed");
    class ProductModel extends CI_Model{

        // Repository + service

        public function getAll(){
            $sql = "SELECT * FROM products";
            $result = $this->db->query($sql)->result();
            return $result;
        }
        public function getAllV2(){
            $sql = $this->db->get("products")->result();
            return $sql;
        }
        public function getByCode($code){
            $sql = "SELECT * FROM products WHERE code = '$code'";
            $result = $this->db->query($sql)->result();
            return $result;
        }
        public function getByCodeV2($code){
            $result = $this->db->where("code", $code)->get("products")->result();
            return $result;
        }
        public function deleteProductByCode($code){
            $sql = "DELETE FROM products WHERE code = '$code'";
            $this->db->query($sql);
        }
        public function addProduct($list){
            $result = $this->db->insert('products',$list);
            return $result;
        }
    }
?>