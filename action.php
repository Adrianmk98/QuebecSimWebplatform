<?php session_start(); 
if (!(isset($_SESSION['loggedin'])))
{
    header("Location: login.html");
    die();
}else
{
    include 'includes/sqlcall.php';
    include 'includes/topbar.php';
$pid=$_SESSION["loggedin"];
$sqlhours = "UPDATE user SET hoursinactive =0 WHERE ID='$pid'";
        mysqli_query($db_link, $sqlhours);
}
?>
<html>
    <head>

        <body>
            
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}


.main {
  padding: 16px;
  margin-bottom: 30px;
}
.container {
  position: relative;
  text-align: center;
  
}

.text-block {
  background-color: white;
  color: black;
  display: block;
  width: 13%;
  margin-left: auto;
  margin-right: auto;
  padding-left: 20px;
  padding-right: 20px;
}
.text-blockpn {
  background-color: white;
  color: black;
  display: block;
  width: 13%;
  margin-left: auto;
  margin-right: auto;
  padding-left: 20px;
  padding-right: 20px;
}
table.blueaTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 30%;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  border-collapse: collapse;
}
table.blueaTable td, table.blueaTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.blueaTable tbody td {
  font-size: 13px;
}
table.blueaTable tr:nth-child(even) {
  background: #D0E4F5;
}


</style>
<?php
      $pid=$_SESSION["loggedin"];
$pcash = "SELECT money FROM user  WHERE ID='$pid'";
$result = $db_link->query($pcash)or die($db_link->error);
$pmoney = $result->fetch_assoc();
$pmoney = $pmoney['money'];
$paction = "SELECT actionp FROM user  WHERE ID='$pid'";
$result = $db_link->query($paction)or die($db_link->error);
$pactionp = $result->fetch_assoc();
$pactionp = $pactionp['actionp'];
$istate = "SELECT state_influ FROM user  WHERE ID='$pid'";
$result = $db_link->query($istate)or die($db_link->error);
$state_influ = $result->fetch_assoc();
$state_influ = $state_influ['state_influ'];
$ination = "SELECT nation_influ FROM user  WHERE ID='$pid'";
$result = $db_link->query($ination)or die($db_link->error);
$nation_influ = $result->fetch_assoc();
$nation_influ = $nation_influ['nation_influ'];
?>

            <?php
    $uid=$_SESSION["loggedin"];
   $self = $_SERVER['PHP_SELF'];
   $state = "SELECT state FROM user  WHERE ID='$pid'";
$result = $db_link->query($state)or die($db_link->error);
$state = $result->fetch_assoc();
$state = $state['state'];
   $sql = "SELECT population FROM statedemo WHERE State='$state'";
$result = $db_link->query($sql)or die($db_link->error);
$statepop = $result->fetch_assoc();
$statepop = $statepop['population'];
$istate = "SELECT state_influ FROM user  WHERE ID='$uid'";
$result = $db_link->query($istate)or die($db_link->error);
$state_influ = $result->fetch_assoc();
$state_influ = $state_influ['state_influ'];
$fundmodifier=5000+$statepop*($state_influ/100000);
$locfundmodifier=3*$fundmodifier;
$natfundmodifier=5*$fundmodifier;
?>
   <table class="blueaTable">
       <form action=<?php echo $self ?> method="POST">
       <tbody>
<tr>
    <td> <img src="images/Press.png" alt=" Press"style="width:128px;height:128px;"> </td>
<td> X Number Posted Today </td>
<td><button type="submit" name="press">Create Press</button></td>
</tr>
<tr>
    </table>
   <br><br><br> 
<?php

if (isset($_POST['press'])) {
    $url = "createPress.php"; // The URL you want to open
    echo "<script>window.open('$url', '_blank');</script>";
}
?>
        </body>
    </head>
</html>