<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    //Database connection

    $conn = new mysqli('localhost','root','','newsletter');
    if($conn->connect_error){
        die('Connection Failed : ' .conn()->connect_error);
    }else{
        $stmt = $conn->prepare("insert into clients(name,surname,email) values(?, ?, ?)");
        $stmt->bind_param("sss",$name, $surname, $email);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
?>