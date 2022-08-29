<?php
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>view page</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="index.php" class="text-light">add user</a></button>
        <div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">Password</th>
      <th scope="col">Operation </th>

    </tr>
  </thead>
  <tbody>
   
   <?php

     $sql = "select * from User";
     $ans = mysqli_query($conn,$sql);
     if($ans)
     {
         while($row = mysqli_fetch_assoc($ans))
         {
            $id  = $row['ID'];
            $name  = $row['name'];
            $username  = $row['username'];
            $email  = $row['email'];
            $phone  = $row['phone'];
            $gender  = $row['is_checked'];
            $password = $row['password'];

            echo ' <tr>
                      <th scope="row">'.$id.'</th>
                      <td>'.$name.'</td>
                      <td>'.$username.'</td>
                      <td>'.$email.'</td>
                      <td>'.$phone.'</td>
                      <td>'.$gender.'</td>
                      <td>'.$password.'</td>
                      <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                         <button class="btn btn-info btn-sm me-md-2" type="button"> <a class="text-light" href="update.php?updateId='.$id.'">Update</a></button>
                                         <button class="btn btn-danger btn-sm" type="button"> <a class="text-light" href="delete.php?deleteId='.$id.'">Delete</a></button>
                               </div>

                      </td>
                    </tr>';

         }
    }
  
    

 ?>

  </tbody>
  </table>
        </div>
    </div>
     
    
</body>
</html>