<?php
$host = "localhost";
$dbusername = "mfp6cy5i_account";
$dbpassword = "V6L42aD3";
$dbname = "mfp6cy5i_politicalelo";
   $db_link = mysqli_connect($host, $dbusername, $dbpassword)
      or die("Could not connect ");
    mysqli_select_db($db_link,$dbname)
      or die("Could not select database ");
      

?>