
<?php

require 'connect.php';
$login_error='';
if (isset($_POST['submit'])) {
    $firstname=$_POST['firstname'];
    $password=$_POST['password'];



    $select="SELECT * FROM admin_login";
    $select_query=mysqli_query($conn,$select);
    if ($select_query) {
         while ($row=mysqli_fetch_assoc($select_query)) {
            $dbfirstname=$row['firstname'];
            $dbpassword=$row['password'];
        }


            if ($dbfirstname == $firstname && $dbpassword == $password) {
                session_start();
                $_SESSION['user']=$dbfirstname;
                header('location:admin.php');


         }else{
             $login_error ='Please first registration'.mysqli_error($conn);
         }



}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="./css/_logins.css">
    <title>Document</title>
</head>
<body class="">


<div class="container shadow-lg p-5">
               <form action="login.php" method="post" >
<h1 class="mb-5 text-muted text-center">Welcome</h1>

                <div class="form-floating mb-3 ">
                <input class="form-control " type="text" name="firstname"required id=""placeholder="">
               <label for="Firstname" class="lable" >Firstname </label>
               </div>
           <div class="form-floating mb-3">
           <input class="form-control" type="password" name="password"" id="" placeholder=""><br>
           <label for="passcode" class="lable">Passward</label>
           <p style="color:red"><?php echo $login_error?></p>       
           </div>

                   <input class="form-control mb-3 p-3" class="text-white" type="submit" value="Login" name="submit" class="submit">
                   <p class="">Not Registerd?<a href="./signin.php">Create an account</a></p>
              
               </form>
                  <div class="bg"></div>               
    </div>




</body>
</html>

