<?php 
    $dsn= 'mysql:host=localhost;dbname=database_suivistock';

    $mysqluser = 'root';
    $mysqlpassword = '';
    $options=[];
   
    try {
        $connection = new PDO($dsn,$mysqluser, $mysqlpassword,$options);
    } catch (PDOExeption $e) {
    }


?>