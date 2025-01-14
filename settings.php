<?php session_start(); 
if (!(isset($_SESSION['loggedin'])))
{
    header("Location: login.html");
   die();
}else
{
    include '/home1/murvetop/includes/sqlcall.php';
    include '/home1/murvetop/includes/topbar.php';
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
  background: lightblue url("background.jpg") no-repeat fixed center; 
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
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
table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 30%;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.blueTable tbody td {
  font-size: 13px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTablead {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 30%;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  border-collapse: collapse;
  table-layout: fixed ;
}
table.blueTablead td, table.blueTablead th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.blueTablead tbody td {
  font-size: 13px;
}
table.blueTablead tr:nth-child(even) {
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
   $state = "SELECT state FROM user  WHERE ID='$uid'";
$result = $db_link->query($state)or die($db_link->error);
$state = $result->fetch_assoc();
$state = $state['state'];
   $sql = "SELECT population FROM statedemo  WHERE state='$state'";
$result = $db_link->query($sql)or die($db_link->error);
$statepop = $result->fetch_assoc();
$statepop = $statepop['population'];
$istate = "SELECT state_influ FROM user  WHERE ID='$uid'";
$result = $db_link->query($istate)or die($db_link->error);
$state_influ = $result->fetch_assoc();
$state_influ = $state_influ['state_influ'];
$fundmodifier=5000+$statepop*($state_influ/1000);
$locfundmodifier=3*$fundmodifier;
$natfundmodifier=5*$fundmodifier;
?>
   <table class="blueTable">
       <tbody>
           <form action=<?php echo $self ?> method="POST">
<tr>
<td>
    Change Picture (Please use the ending of an imgur link)<br>
  <label for="plink">Picture Link:</label>
  <input type="text" id="plink" name="piclink"></td>
  <td><input type="submit" name="cpic"></td></tr>
  <tr>
<td>
    Change Biography<br>
  <label for="biog">Biography:</label>
  <textarea id="biog" name="chanbio" rows="4" cols="50"maxlength="200">
  </textarea></td>
  <td><input type="submit" name="cbio"></td></tr>
<tr>
<td>
     Change Campaign Song (Please use the ending of a youtube link)<br>
  <label for="csong">Campaign Song Link:</label>
  <input type="text" id="csong" name="ccampsong"></td>
  <td><input type="submit" name="ccsong"></td> </tr>
<tr>
<td>
      <label for="curpass">Current Password:</label>
  <input type="password" id="cpass" name="curpass"><br>
    <label for="newpass">New Password:</label>
  <input type="password" id="npass" name="newpass"><br></td>
  <td><input type="submit" name="chanpass"></td></tr>
<tr>
<td>Resign from Elected position</td>
  
  <td><input type="submit" name="rpos"></td></tr>
<tr>
<td>Delete Character (Currently off)</td>
  <td><input type="submit" name="resetchar"></td></tr>

    </tbody>
     </form>
    </table>
        
<?php
   
   if ((isset($_POST['cpic'])))
   {
    $plink=$_POST['piclink'];
    $uid=$_SESSION["loggedin"];
        $sqlupdatecpic = "UPDATE user SET cpic='$plink' WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatecpic);
        
        
   }
   if ((isset($_POST['ccsong'])))
   {
    $pcampsong=$_POST['ccampsong'];
    $uid=$_SESSION["loggedin"];
        $sqlupdatecbio = "UPDATE user SET campaignsong='$pcampsong' WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatecbio);
        
      
        }
   if ((isset($_POST['cbio'])))
   {
    $pbio=$_POST['chanbio'];
    $uid=$_SESSION["loggedin"];
        $sqlupdatecbio = "UPDATE user SET biography='$pbio' WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatecbio);
        
   }
     if (isset($_POST['chanpass']))
   {
    $uid=$_SESSION["loggedin"];
    $sql = "SELECT password FROM accounts  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$cpass = $result->fetch_assoc();
$cpass = $cpass['password'];
    $currentpass=$_POST['curpass'];
    if($currentpass==$cpass)
    {
    $newpass=$_POST['newpass'];
    $sqlchanpass = "UPDATE accounts SET Password='$newpass' WHERE ID='$uid'";
        mysqli_query($db_link, $sqlchanpass);
    }
   }
     if (isset($_POST['rpos']))
   {
     $uid=$_SESSION["loggedin"];
     $sqlresignpos = "UPDATE user SET positionid=0 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlresignpos);  
        
   }
   if (isset($_POST['deletechar']))
   {
    $uid=$_SESSION["loggedin"];
        
   }
?>
        </body>
    </head>
</html>