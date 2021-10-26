<?php

    //Process the Value fdrom Form and Save it to DB\    
    //Get data from Form
    $name = $_POST['Name'];
    $people = $_POST['People'];
    $date = $_POST['date'];
    $message = $_POST['Message'];
    $phone = $_POST['Phone'];
    
    //SQL Query
    $sql = "INSERT INTO reservation SET 
        name = '$name',
        people = '$people',
        date = '$date',
        message = '$message',
        phone = '$phone'
    ";
    // Create connection
    $conn = new mysqli("localhost:3306", "root", "", "mydb");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($conn->query($sql) === FALSE) {
        $error_message="Error: " . $sql . "<br>" . $conn->error;
        echo $error_message;//"<script type='text/javascript'>alert('$error_message');</script>";
    }
    // $success_message = "Records insert successful";
    //     echo "<script type='text/javascript'>alert('$success_message');</script>";
    // } else {
?>