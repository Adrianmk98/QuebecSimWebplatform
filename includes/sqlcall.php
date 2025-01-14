<?php
$servername = "localhost";  // Your database server
$dbusername = "root";
$dbpassword = "";
$dbname = "cmhoc";

   $db_link = mysqli_connect($servername, $dbusername, $dbpassword)
      or die("Could not connect ");
    mysqli_select_db($db_link,$dbname)
      or die("Could not select database ");
      

?>