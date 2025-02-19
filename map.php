<?php session_start();
if (!(isset($_SESSION['loggedin'])))//FLIP AFTER DONE
{
    header("Location: login.html");
    die();
}else
{
    include 'includes/topbar.php';
    include 'includes/sqlcall.php';
    $pid=$_SESSION["loggedin"];
    $sqlhours = "UPDATE user SET hoursinactive =0 WHERE ID='$pid'";
    mysqli_query($db_link, $sqlhours);
}?>

<?php
include "includes/QuebecSVG.php";
?>
<br><br><br><br>
