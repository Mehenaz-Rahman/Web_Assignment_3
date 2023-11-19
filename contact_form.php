<?php
    $name = $_POST["name"];
    $mbl = $_POST['mobile'];
    $visitor_email = $_POST["email"];
    $message = $_POST["message"];
    
    $connection = mysqli_connect("localhost", "root", "", "contact_form") or die("connection failed!");
    
    $sql = "INSERT INTO userInfo (name, mobile, email, message)
            VALUES ('{$name}', '{$mbl}', '{$visitor_email}', '{$message}')";

    $result = mysqli_query($connection, $sql) or die("query failed!");

    mysqli_close($connection);
?>
