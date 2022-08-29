<?php

    include 'config.php';
    if(isset($_GET['deleteId']))
    {
        $id = $_GET['deleteId'];
        $sql = "delete from User where id = $id";
        $ans = mysqli_query($conn,$sql);
        if($ans)
        {
            header('location:display.php');
        }else 
        {
            die(mysqli_error($conn));
        }
    }
?>