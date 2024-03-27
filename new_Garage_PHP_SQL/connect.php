<?php
$conn=mysqli_connect('localhost','root','','garage_auto');
if (!$conn) {
  die('not connected'.mysqli_connect_error($conn));
}

?>