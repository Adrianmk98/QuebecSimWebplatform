<?php session_start(); ?>
<?php
ob_start();
include '/home1/murvetop/includes/sqlcall.php';

   $username= filter_input(INPUT_POST, 'userid');
   $password = filter_input(INPUT_POST, 'userpassword');
   if (isset($username) && isset($password))
   {
      $user = preg_match("/^[a-zA-Z0-9]+$/", $username)
            ? $username : "";
      $pass = preg_match("/^[a-zA-Z0-9]+$/", $password)
            ? $password : "";

       if (isAuthentic($user, $pass))
      {
         go_to_home($user);
      }
      else
      {
         $messageu = "Invalid Login";
echo "<script type='text/javascript'>alert('$messageu');</script>";
header("Refresh: 2; url=login.html");
      }
   }
   else
   {
      $messageu = "Please try to login";
echo "<script type='text/javascript'>alert('$messageu');</script>";
header("Refresh: 2; url=login.html");
   }
?>


<?php

// Function that returns true if the given $id and $password are valid

function isAuthentic($user, $pswd)
{
   // Query database to see if the name and password are valid

include '/home1/murvetop/includes/sqlcall.php';

   $query = "SELECT Username,Password FROM accounts WHERE Username='$user' "
            ." AND Password ='$pswd'";

    $result = mysqli_query($db_link,$query) or die(mysqli_error($db_link));
 $rows = mysqli_num_rows($result);
        if($rows==1){
     return true;
        }else
        return false;
}
?>
<?php
function go_to_home($user)
{
include '/home1/murvetop/includes/sqlcall.php';
   $sql = "SELECT ID FROM accounts  WHERE Username='$user'";
$result = $db_link->query($sql);
$service = $result->fetch_assoc();
$service = $service['ID'];
$_SESSION['loggedin'] = $service;
$messageu = "Sucessful Login in";
echo "<script type='text/javascript'>alert('$messageu');</script>";
header("Refresh: 2; url=profile.php?id=$service");
}
?>
