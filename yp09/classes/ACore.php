<?php

abstract class ACore {
    
    protected $db;
    
    public function __construct() {
        $this->db = mysqli_connect(HOST,USER,PASSWORD);
        if (!$this->db){
            exit("Ошибка соединения с БД".mysqli_connect_error());
        }
        if (!mysqli_select_db($this->db, DB)){
            exit("Нет такой базы данных".mysqli_connect_error());
        }
    }    

    protected function get_header(){
        include("../page/header.php");
    }

    protected function get_left_bar(){

        $query = "SELECT id_category,name_category FROM category";

        $result = mysqli_query($query);
    }
    
    
    public function get_body(){
        $this->get_header();
    }
}

?> 