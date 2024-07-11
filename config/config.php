<?php

    if(!isset($_SERVER['HTTP_REFERER'])){
        // Redirect them to your desired location
        header('location: http://localhost/Freshcery/index.php');
        exit;
    }

    try {
        // Host
        define("HOST", "localhost");

        // dbname
        define("DBNAME", "freshcery");

        // User
        define("USER", "root");

        //Pass
        define("PASS", "");

        $connection = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";", USER, PASS);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // if($connection == true) {
        //     echo "Connected Successfully";
        // } else {
        //     echo "Error";
        // }
    } catch (PDOException $e) {
        echo $e -> getMessage();
    }
