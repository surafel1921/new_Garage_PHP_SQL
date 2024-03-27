<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="./css/signin.css">
    <title>Document</title>
</head>
<body >
    <div class="container shadow-lg p-5">
               <form action="signin.php" method="post" >
<h1 class="mb-5 text-muted text-center">Welcome</h1>

                <div class="form-floating mb-3 ">
                   <input class="form-control " type="text" name="firstname"id="Firstname" required placeholder="">
               <label for="Firstname" class="lable" >Firstname </label>
               </div>
           <div class="form-floating mb-3">
                   <input class="form-control" type="text" name="lastname" id="" required placeholder="">
           <label for="Firstname"class="lable">Lastname </label>
                     
           </div>

                  <div class="form-floating mb-3">
                   <input class="form-control" type="text" name="email"id="" required placeholder="">
                  <label for="Firstname"class="lable">Email </label>
                   
                  </div>
                <div class="form-floating mb-3">
                   <input class="form-control" type="password" name="password" id="" placeholder="">
                   <label for="passcode"class="lable">Password</label>

                </div>
                 
                   <input class="form-control mb-3 p-3" class="text-white" type="submit" value="Signin" name="submit" class="submit">
                   <p class="">Not Registerd?<a href="./login.php">Create an account</a></p>
              
               </form><br>
                  <div class="bg "></div>               
    </div>
</body>
</html>

<?php
require 'connect.php';
  if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

            


$insert="INSERT INTO  garage_auto_tables(firstname,lastname,email,password) VALUE('$firstname','$lastname','$email','$password')";
$insert_query=mysqli_query($conn,$insert);

if ($insert_query) {
    header('location:dashboard.php');
    // echo '<script>';
    // echo 'alert("insertd data")';
    // echo '</script>';
    // echo 'insert';
}else{
    // echo ' not insert'.mysqli_error($conn);

     echo '<script>';
    echo 'alert("not insertd data")';
    echo '</script>';
}
}

?>
