
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
}else{

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barriecito&family=Orelega+One&family=Protest+Revolution&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="./css/_mains.css">
<title>EIIDE GARAGE</title>
</head>
<body >
    <header> 

    <div class="top-header d-flex justify-content-around flex-wrap align-items-center">
        <div class="logo">
         <img src="./img/layout_set_logo (1).png" alt="" srcset=""style="width: 160px;"><br>
            <span>EIIDE</span>  AUTO 


            <hr>
            
        </div>
        <div class="working-time ">

            <div class="working-time-icon d-flex ">
           <span class="material-symbols-outlined">
                  schedule
                     </span>
            <h3 class="text-muted  working-time-text-muted">Opening Hour</h3>
        </div>
            <p class="text-muted text-muted-day">Mon - Fri,2:30 - 10:30 (<?php echo date("l") ?>) 
        </div>




        <div class="Call-time">
            <div class="Call-time-icon d-flex ">
                <span class="material-symbols-outlined">
                    call
                    </span>
            <h3 class="text-muted text-muted-Call-time">Call Us</h3>

            </div>
            <p class="text-muted text-muted-call">+251</p>
        </div>


        <div class="Email-time">

       <div class="Email-time-icon  d-flex ">
                <span class="material-symbols-outlined">
                    mail
                    </span>
            <h3 class="text-muted text-muted-Email-time">Email Us</h3>
            </div>
            <p class="text-muted text-muted-email">example@gmail.com</p>
        </div>
    </div>
    </header>


   
<div class="container-xxxl ">

<nav class="navbar navbar-expand-lg navbar-dark  ">
  <div class="container-fluid">
   <!-- <img src="./img/images-removebg-preview.png" alt="" srcset=""style="width:90px"> -->
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>

    <div class="collapse navbar-collapse row " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto p-2  " >
        <li class="nav-item " style="color:white">
          <a class="nav-link " href="#" >  <span class="rounded">Home</span> </a>
          
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Service</a>
        </li>  <li class="nav-item">
          <a class="nav-link" href="#">Price</a>
      
        </li>  <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li>
            <a class="nav-link" href="logout.php" href="logout.php">Log out</a>
        </li>
    

         
      </ul>
    
      <!-- <form class="d-flex ">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    
    </div>
  </div>
</nav>
</div><br><br>



<div class=" " style="">
<table class="table table-striped "style="text-align:center; ">
  <thead class="thead-dark ">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Driver name</th>
      <th scope="col">Plate code</th>
      <th scope="col">Plate</th>
      <th scope="col">Company</th>
      <th scope="col">Vehicle Name</th>
      <th scope="col">Vehicle Type</th>
      <th scope="col">Service Type</th>
      <th scope="col">Request</th>
      <th scope="col">Date</th>
      <th scope="col">Work Schadules</th>
      



      



    </tr>
  <tbody>
                <?php
                require 'connect.php';
                             $display="SELECT * FROM request_for_car_service";
                             $display_query=mysqli_query($conn,$display);
                             
                             if ($display_query) {
                              while ($row=mysqli_fetch_array($display_query)) {
                                ?>
                                <tr>
                                <th ><?php echo $row['id']?></th>
                                <th ><?php echo $row['drivername']?></th>
                                <th ><?php echo $row['platecode']?></th>
                                <th ><?php echo $row['plate']?></th>
                                <th ><?php echo $row['company']?></th>
                                <th ><?php echo $row['vehiclename']?></th>
                                <th ><?php echo $row['vehicle_type']?></th>
                                <th ><?php echo $row['service_type']?></th>
                                <th ><?php echo $row['request']?></th>
                                <th ><?php echo $row['date']?></th>
                                <th ><a href="./schadules.php">Goto</th>
                                </tr>
                                <?php
                              }
                             }else{
                                echo '<script>';
                                echo 'alert("not display")';
                                 echo '</script>';
                             }

                         
                ?>
 </tbody>
</thead>
</table>
</div><br><br><br><br><br><br><br><br><br><br>


















</div>
<footer  class=" footer-text-white ">
<div class="footer-container d-flex justify-content-around  ">
      <div class="contact ">
        <h3>Contact</h3><br>
        <p class="">EIIDE Garage <br>Piassa Atiklt Tera <br>example@gmail.com <br> <a href="http://www.eiide.com.et/"target="_blank">www.eiide.com </a> <br> +251</p>

       
      </div>
      <div class="service-hours">
        <h3>Service Hours</h3><br>
      <p class="">Monday – Friday , 2:30 - 10:30 (<?php echo date("l") ?>) <br>Saturday Appointment Only. Closed Sunday. </p>
      
      </div>
      <div class="company">
        <h3>Company</h3><br>
         <img src="./img/layout_set_logo (1).png" alt="" srcset="" >
         </div>
        </div><br><br><br><br>

        <h4 style="font-size:12px;text-align:center" >&copy; <?php echo date('Y') ?> <span style="color:rgb(239,76,37)" >Ethiopian Industrial Inputs Development Enterprise  </span>, All Right Reserved. <span style="color:rgb(239,76,37)" >developed By Surafel D.</span> </h4><br><br><br>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>




    <?php
}


?>
        
        
       