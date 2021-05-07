<?php

class model_index{
    function __construct(){

    }
    function getslider() {
      $servername = 'localhost';
      $username = 'root';
      $password = '';
      $dbname = 'digikala';


      $query = 'select * from tbl_slider';
      $stmt = $conn->prepare($query);
      $stmt->fetchAll();
       return $result;
    }
}
