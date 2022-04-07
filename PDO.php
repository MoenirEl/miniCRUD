<?php
    $host= '127.0.0.1';
    $db= 'webshop';
    $user='root';
    $pass='';


    try {
        $connect = new PDO("mysql:host=$host;dbname=webshop", $user, $pass);
        // set the PDO error mode to exception
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
      } catch(PDOException $e) {
        // echo "Connection failed: " . $e->getMessage();
      }

?>