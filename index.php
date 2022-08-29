<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div  class="container">
        <div class="title"> Registration </div>
         <form action="user.php" method="POST">
             <div class="user">
                 <div class="input-box">
                     <span class="details"> Full Name :</span>
                     <input type="text" name="name" id="fname" placeholder="Enter your first name" required>
                 </div>
                 <div class="input-box">
                    <span class="details"> UserName :</span>
                    <input type="text" name="username" id="fname" placeholder="Enter your first name" required>
                </div>
                <div class="input-box">
                    <span class="details"> Email :</span>
                    <input type="email" name="email" id="fname" placeholder="Enter your first name" required>
                </div>
                <div class="input-box">
                    <span class="details"> Phone :</span>`
                    <input type="number" name="phone" id="fname" placeholder="Enter your Number" required>
                </div>
                <div class="input-box">
                    <span class="details"> Password :</span>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                    <span class="details"> Confirm Password :</span>
                    <input type="password" name="conform_password" id="conform_password" placeholder=" Confirm  password" required>
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
               <button type="submit" name="submit" class="btn btn-primary">button</button>

             </div>



         </form>

    </div>
    
</body>
</html>