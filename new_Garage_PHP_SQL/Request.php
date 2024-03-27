<?php
require 'connect.php';
if (isset($_POST['send'])) {
    $Date=$_POST['date'];
    $Driver_Name=$_POST['drivername'];
    $Plate_Code=$_POST['platecode'];
    $Plate=$_POST['plate'];
    $Company=$_POST['company'];
    $vehicle_Name=$_POST['vehiclename'];
    $Service_Type=$_POST['Service_Type'];
    $vehicle_type=$_POST['vehicle_type'];
    $Request=$_POST['request'];
    
    $input="INSERT INTO request_for_car_service(date,drivername,platecode,plate,company,vehiclename,vehicle_type,Service_Type,request) VALUES ('$Date','$Driver_Name','$Plate_Code','$Plate','$Company','$vehicle_Name','$vehicle_type','$Service_Type','$Request')";
    $input_request=mysqli_query($conn,$input);

    if ($input_request) {
        echo '<script>';
        echo 'alert("inserted")';
        echo '</script>';
    }else{
        echo '<script>';
        echo 'alert("not inserted")';
         echo '</script>';
        // echo 'not'.mysqli_error($conn);
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
<link rel="stylesheet" href="./css/request.css">
    <title>Document</title>
</head>



<body><br>
    
        <div class="logo">
            <span>EIIDE</span>  AUTO REQUEST FORM
            <br>
            <hr>
            
        </div><br>
    <div class="container">
   <form action="Request.php" method="post">
    <div class="levelOne">
        <div class="form-floating mb-5">
      <input class="form-control" type="date" name="date" id="" required placeholder="">

     

      </div>
<div class="form-floating mb-5">
<input class="form-control" type="text" name="drivername" id=""required placeholder="">
      <label for="Name"class="lable">Driver Name</label>
</div>
<div class="form-floating mb-5">
      <input class="form-control" type="text" name="platecode" list="list"placeholder="" >
      <datalist id="list">
      <option value=" "></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="35">35</option>
      </datalist>
      <label for="Name"class="lable">Plate Code</label>

      </div>

      <div class="form-floating mb-5">
      <input  class="form-control" type="text" name="plate" id=""placeholder="">
      <label for="Name"class="lable">Plate</label>

      </div>
      </div>
      <div class="levelTwo">
      <div class="form-floating mb-5">
    <input class="form-control" type="text" name="company" list="complist" placeholder="">
      <datalist id="complist">
      <option value=" "></option>
        <option value="Ngo">Ngo</option>
        <option value="Government">Government</option>
        <option value="Privet Comp">Privet Comp.</option>
        <option value="Personal">Personal</option>
</datalist>
       
    
    <label for="Name"class="lable">Company</label>

    </div>
    <div class="form-floating mb-5">
   <input class="form-control" type="text" name="vehiclename" list="vechlist" placeholder="">
    <datalist id="vechlist">

        <option value=" "></option>
        <option value="Mercedes_Benz">Mercedes-Benz</option>
        <option value="Totota">Totota</option>
        <option value="Lexus">Lexus</option>
        <option value="Bmw">Bmw</option>
        <option value="Mazda">Mazda</option>
        <option value="Hyundai">Hyundai</option>
        <option value="Nissan">Nissan</option>
        <option value="Audi">Audi</option>
        <option value="Kia">Kia</option>
</datalist>
<label for="Name"class="lable" >vehicle Name</label>

        </div>
        <div class="form-floating mb-5">
    <input class="form-control" type="text" name="vehicle_type" list="vehicle_typelist" id=""  placeholder="">
<datalist id="vehicle_typelist"> 

        <option value=" "></option>
        <option value="Bus">Bus</option>
        <option value="Light Vehcles">Light Vehcles</option>
        <option value="Heavy Truck">Heavy Truck</option>
     
</datalist>
<label for="Name"class="lable">vehicle Type</label>
</div>
<div class="form-floating mb-5">

    <input class="form-control" type="text" name="Service_Type" list="Service_Typelist"  id="" placeholder="">
    <datalist id="Service_Typelist" >

        <option value="Service_Type"></option>
        <option value="car washing">car washing</option>
        <option value="Bolo">Bolo</option>
        <option value="Body">Body</option>
        <option value="Electric">Electric</option>
       
        </datalist>
        <label for="Name"class="lable">Service Type</label>
        </div>


    <div class="form-floating mb-3">
 <textarea class="form-control" name="request" id="" cols="70" rows="2" placeholder=""></textarea>  
 <label for="Name"class="lable">Request</label>
 </div>
 <input type="submit" name="send"  value="Send"><br><br><br><br><br>  

     </div>
   </form>
    </div>


    
</body>
</html>