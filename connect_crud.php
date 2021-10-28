<?php


    // Create Database

    function Createdb(){
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "newsletter";
    

    // Connecting to Database

    $conn = mysqli_connect($server,$username,$password,$dbname);

    // Check connection

    if (!$conn){
        die("Connection Failed:" .mysqli_connect_error());
    }

    // Create Database

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($conn, $sql)){
        $conn = mysqli_connect($conn, $sql,$password,$dbname);

        $sql = "
            CREATE TABLE IF NOT EXISTS clients(
                id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR (30) NOT NULL,
                surname VARCHAR (100) NOT NULL,
                email (128) NOT NULL
            );
        ";

    if(mysqli_query($con, $sql)){
        return $conn;
    } else {
        echo "Cannot create table.";
    }

    }else{
        echo "Error while creatind database: ". mysqli_error($conn);
    }

    }

?>

