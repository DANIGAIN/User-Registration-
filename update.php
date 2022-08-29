<?php
   include "config.php";

   $id = $_GET['updateId'];

   $sql = "select * from User where id ='$id'";
   $ans = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($ans);
   $name = $row['name'];
   $username = $row['username'];
   $phone = $row['phone'];
   $email = $row['email'];
   $password = $row['password'];
   $same = $row['is_checked'];

   if (isset($_POST['submit'])) 
   {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $same = $_POST['same'];
    $sql = "update User set id='$id' ,name ='$name' , username ='$username',email ='$email',phone ='$phone',password='$password',is_checked = '$same' where id = '$id'";
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>
<body>
    <div  class="container">
        <div class="title"> update </div>
         <form  method="POST">
             <div class="user">
                 <div class="input-box">
                     <span class="details"> Full Name :</span>
                     <input type="text" name="name" id="fname" value= 'name' >
                 </div>
                 <div class="input-box">
                    <span class="details"> UserName :</span>
                    <input type="text" name="username" id="fname" value ='username' >
                </div>
                <div class="input-box">
                    <span class="details"> Email :</span>
                    <input type="email" name="email" id="fname" value ='email'  >
                </div>
                <div class="input-box">
                    <span class="details"> Phone :</span>
                    <input type="number" name="phone" id="fname" value = 'phone' >
                </div>
                <div class="input-box">
                    <span class="details"> Password :</span>
                    <input type="password" name="password" id="password" value = 'password' >
                </div>
                <div class="input-box">
                    <span class="details"> Confirm Password :</span>
                    <input type="password" name="conform_password" id="conform_password"  >
                </div>
                <div class="gender-details">
                    <span class="gender-title"> Gender </span>
                    <div class="catagory">
                          <level for="dot-1">
                               <span class="gender">Male </span>
                               <input type="radio" name="same" value ="male" class="ing">
                          </level>
                          <level for="dot-2">
                              <span class="gender">Female </span>
                              <input type="radio" name="same" value ="female" class="ing">
                          </level>
                    </div>
                </div>
               <button type="submit" name="submit" class="btn btn-primary">update</button>

             </div>



         </form>

    </div>
    
</body>
</html>




