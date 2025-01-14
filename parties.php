<?php session_start(); 
if (!(isset($_SESSION['loggedin'])))
{
    //header("Location: login.html");
   // die();
}else
{
    include '/home1/murvetop/includes/sqlcall.php';
    include '/home1/murvetop/includes/topbar.php';
$pid=$_SESSION["loggedin"];
$sqlhours = "UPDATE user SET hoursinactive =0 WHERE ID='$pid'";
        mysqli_query($db_link, $sqlhours);
}
?>
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
  width: 16%;
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
</style>

<?php


?><center><strong><?php
echo "Parties"; ?> </strong><br>
 <?php
   
   $self = $_SERVER['PHP_SELF'];
?><center>
              <form action=<?php echo $self ?> method="POST">
                  <button type="submit" name="beindy">Become Independent</button><br><br></form>
                  <form action=createparty.php method="POST">
                  <button type="submit" name="cparty">Create Party</button><br><br></form>
                  </form></center>
<?php
if ((isset($_POST['beindy'])))
   {
      $uid=$_SESSION["loggedin"];
        $sql = "SELECT partyid FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$upid = $result->fetch_assoc();
$upid = $upid['partyid'];
if($upid==0)
{
    $messageu = "Already an Independant";
echo "<script type='text/javascript'>alert('$messageu');</script>";
}else
{
    $sqlupdateupid = "UPDATE user SET partyid=0 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdateupid);
        
        $userid = "SELECT ID FROM user  WHERE ID='$uid'";
$result = $db_link->query($userid)or die($db_link->error);
$usid = $result->fetch_assoc();
$usid = $usid['ID'];

$sqlupdateupartynowhip = "UPDATE parties SET pwhipid=0 WHERE partyid='$upid' and pwhipid=$usid";
        mysqli_query($db_link, $sqlupdatenowhip);
 $sqlupdateupartynotre = "UPDATE parties SET ptreasurerid=0 WHERE partyid='$upid' and ptreasurerid=$usid";
        mysqli_query($db_link, $sqlupdatenotre);    
        
}
      
   }
getparty();

function getparty() {
   include '/home1/murvetop/includes/sqlcall.php';
      $part = mysqli_query($db_link,"SELECT partyid,pname,nummem,pleaderid FROM parties ORDER BY nummem DESC");
      $partstrentot = "SELECT SUM(state_influ) FROM user";
$resultps = $db_link->query($partstrentot)or die($db_link->error);
$partstrentot = $resultps->fetch_assoc();
$partstrentot = $partstrentot['SUM(state_influ)'];
      
while($prows[] = mysqli_fetch_assoc($part));
?>
<table class="blueTable">
     <tbody>
         <tr>
             <th>
                 Party Name
             </th>
             <th>
                 Number of Members
             </th>
             <th>
                 Party Strength
             </th>
             <th>
                 Party Leader
             </th>
             
         </tr>
<?php
foreach($prows as $prow) {
    if ($prow['partyid']==0){
    }
    else{
    ?>
      
           <tr><td>
    <a href="party.php?id=<?php echo $prow['partyid'] ?>"><?php echo $prow['pname'] ?></a> </td>
    
    <td><?php
    $partid=$prow['partyid'];
    $nummem = "SELECT COUNT(partyid) FROM user where partyid='$partid'";
$resultcpic = $db_link->query($nummem)or die($db_link->error);
$nummemp = $resultcpic->fetch_assoc();
$nummemp = $nummemp['COUNT(partyid)'];
    echo $nummemp;
    
    $sqlupdatenummem = "UPDATE parties SET nummem='$nummemp' WHERE partyid='$partid'";
        mysqli_query($db_link, $sqlupdatenummem);
    ?></td>
    
    <td>
        <?php
    $plid=$prow['pleaderid']; 
    
    $partstren = "SELECT SUM(state_influ)sumsi FROM user WHERE partyid='$partid'";
$resultps = $db_link->query($partstren)or die($db_link->error);
$charplpic = $resultps->fetch_assoc();
$charplpic = $charplpic['sumsi'];



$charplpicdiv=100/$partstrentot*$charplpic;
echo $charplpicdiv;
?>




    </td>
    <td><?php
    
    
    $plid=$prow['pleaderid']; 
    
    $cpicsql = "SELECT cpic FROM user where ID='$plid'";
$resultcpic = $db_link->query($cpicsql)or die($db_link->error);
$charplpic = $resultcpic->fetch_assoc();
$charplpic = $charplpic['cpic'];
?>
<img src="https://i.imgur.com/<?php echo $charplpic; ?>" alt="Character" max-width="50" height="50"><br>
<?php
    $sql = "SELECT cname FROM user where ID='$plid'";
$result = $db_link->query($sql)or die($db_link->error);
$upid = $result->fetch_assoc();
$upid = $upid['cname'];
    ?>
    <a href="profile.php?id=<?php echo $plid ?>"><?php echo $upid ?></a>
    <?php
    
    ?></td>
    </tr>
    <?php
}
}
?>
</tbody>
    </table><br><br><br>
<?php
}

?>

</center>