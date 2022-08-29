<?php
   include "config.php";

   if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $same = $_POST['same'];

    $sql = "INSERT INTO User(name, username, email, `phone`, is_checked,password) 
            VALUES ('$name', '$username', '$email', '$phone', '$same','$password')";

    //echo $name . " " . $username . " " . $email . " " . $password . " " . $phone . " " . $same;

    $query = $conn->query($sql);
    if ($query) {
        header('location:display.php') ;
    }
    else {
        echo "Insertion failed";
    }
   }
?>