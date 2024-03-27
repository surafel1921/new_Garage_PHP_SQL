<?php
require 'connect.php';
$files="SELECT *FROM request_for_car_service";
$files_query=mysqli_query($conn,$files);

if ($files_query) {
  while ($row=mysqli_fetch_array($files_query)) {
    ?>
    <html>
        <body>
            
                      <h1 style="text-align:center">Comming Soon</h1>
        </body>
    </html>
    <?php
  }
}

?>

