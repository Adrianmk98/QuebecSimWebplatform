<?php session_start(); 
$mapid=$_GET['id'];
if (isset($_SESSION['loggedin']))//FLIP AFTER DONE
{
    include '/home1/murvetop/includes/sqlcall.php';
    include '/home1/murvetop/includes/topbarlogout.php';
}else
{
    include '/home1/murvetop/includes/sqlcall.php';
    include '/home1/murvetop/includes/topbar.php';
}
?>
<html>
    
<header>
    <script data-ad-client="ca-pub-1808295948776802" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <center>
    <textarea readonly id="" name="" rows="8" cols="80">
Welcome to Republica. This is a realtime political simulator game which gives you to opportunity to play as a politician and make the US something which you wish it to be.
</textarea><br>
    </center>
</header>
</html>