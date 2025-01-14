<?php session_start(); 
if (!(isset($_SESSION['loggedin'])))//FLIP AFTER DONE
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
}?>
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
  width: 50%;
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
?>

       <table class="blueTablead">
        <tbody>
            
           <tr>
               <td>
                   Sent By
               </td>
               <td>
                   Message
               </td>

           </tr>
            </tbody>
            </table> 
    <table class="blueTablead">
        <tbody>
        <?php
        $page=$_GET['page'];
        $page=$page*10;
        $ofsetting=$page+10;
$pid=$_SESSION["loggedin"];
      $q1 = mysqli_query($db_link,"SELECT sorter,sendid,messageid,message,seen FROM mail  WHERE recieveid='$pid' order by sorter ASC LIMIT $ofsetting OFFSET $page");
      
while($rows[] = mysqli_fetch_assoc($q1));
foreach($rows as $row) {
    if ($row['sendid']==0){
    }
    else{
    ?>
    <tr>
    <td>
        <?php
$ch=$row['sorter'];
$sqlseen = "UPDATE mail SET seen =1 WHERE sorter='$ch'";
        mysqli_query($db_link, $sqlseen);
        $senderid=$row['sendid'];
$pid=$_SESSION["loggedin"];
    $host = "localhost";
$dbusername = "agamerpw_account";
$dbpassword = "L7g649C";
$dbname = "agamerpw_republica";
$spic = "SELECT cpic FROM user  WHERE ID='$senderid'";
$sendp = $db_link->query($spic)or die($db_link->error);
$sendpic = $sendp->fetch_assoc();
$sendpic = $sendpic['cpic'];
$sname = "SELECT cname FROM user  WHERE ID='$senderid'";
$sendn = $db_link->query($sname)or die($db_link->error);
$sendname = $sendn->fetch_assoc();
$sendname = $sendname['cname'];      
        ?>
        <img src="https://i.imgur.com/<?php echo $sendpic; ?>" max-width="50" height="50"> <br>
        <a href="profile.php?id=<?php echo $row['sendid'] ?>"><?php echo $sendname ?></a> <?php
    echo $row['state_influ'] ; ?><br>
    </td>
    
               <td>
                   <?php
                   $messid=$row['messageid'];
                   if($messid==1)
                   {
                       echo $row['message'];
                   }
                   if($messid==3)
                   {
                       echo "has send an attack ad that has ".$row['message'];
                   }
                   if($messid==4)
                   {
                       echo "has send us money amounting to $".$row['message'];
                   }
                   ?>
               </td>
           </tr>
<?php
}
}
?>
               
            </tbody>
            </table>

        
<?php
$sql = "SELECT COUNT(sorter) FROM mail WHERE recieveid='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$counter = $result->fetch_assoc();
$counter = $counter['COUNT(sorter)'];
$hold=($counter/10)+1;
for($loop=0; $loop<$hold;$loop++)
{
    ?>
    <a href="mail.php?page=<?php echo $loop ?>"><?php echo $loop ?></a>
    <?php
}
?>
<br><br><br><br><br><br>
<?php
   
   if ((isset($_POST['fund'])))
   {
    
    $uid=$_SESSION["loggedin"];
$sql = "SELECT money FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$money = $result->fetch_assoc();
$money = $money['money'];
$sql = "SELECT actionp FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$actionp = $result->fetch_assoc();
$actionp = $actionp['actionp'];


        if($actionp >= 3)
        {
        $sqlupdatec = "UPDATE user SET money =money+$fundmodifier WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatec);
        $sqlupdatep = "UPDATE user SET actionp =actionp-3 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatep);
        $messageu = "Gained $fundmodifier ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
        }else
        {
            $messageu = "Not enough Actions ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
            
        }
   }
   if ((isset($_POST['locfund'])))
   {
    
    $uid=$_SESSION["loggedin"];
$sql = "SELECT money FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$money = $result->fetch_assoc();
$money = $money['money'];
$sql = "SELECT actionp FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$actionp = $result->fetch_assoc();
$actionp = $actionp['actionp'];


        if($actionp >= 5 && $stateinflu >=5)
        {
        $sqlupdatec = "UPDATE user SET money =money+$locfundmodifier WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatec);
        $sqlupdatep = "UPDATE user SET actionp =actionp-4 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatep);
        $messageu = "Gained $locfundmodifier ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
        }elseif($actionp >=5 && $stateinflu <5)
        {
            $messageu = "Not enough Influence ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
        }elseif($actionp < 5 && $stateinflu >= 5)
        {
            $messageu = "Not enough Actions ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
        }
        else
            $messageu = "Not enough Actions and Local Influence";
echo "<script type='text/javascript'>alert('$messageu');</script>";
            
        }
   if ((isset($_POST['natfund'])))
   {
    
    $uid=$_SESSION["loggedin"];
$sql = "SELECT money FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$money = $result->fetch_assoc();
$money = $money['money'];
$sql = "SELECT actionp FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$actionp = $result->fetch_assoc();
$actionp = $actionp['actionp'];


        if($actionp >= 5)
        {
        $sqlupdatec = "UPDATE user SET money =money+$natfundmodifier WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatec);
        $sqlupdatep = "UPDATE user SET actionp =actionp-3 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatep);
        $messageu = "Gained $natfundmodifier ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
        }else
        {
            $messageu = "Not enough Actions ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
            
        }
   }
     if (isset($_POST['rally']))
   {

    $uid=$_SESSION["loggedin"];
        $sql = "SELECT money FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$money = $result->fetch_assoc();
$money = $money['money'];
$sql = "SELECT actionp FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$actionp = $result->fetch_assoc();
$actionp = $actionp['actionp'];
        if($money >= 1000 && $actionp >= 5)
        {
        $sqlupdatec = "UPDATE user SET money =money-1000 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatec);
        $sqlupdatep = "UPDATE user SET actionp =actionp-5 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatep);
        $sqlupdatesi = "UPDATE user SET state_influ =state_influ+1 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatesi);
        }else
        {
            if($money >= 1000 && $actionp <= 5)
            {
            $messageu = "Not enough Actions ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
            }
            elseif($money <= 1000 && $actionp >= 5)
            {
            $messageu = "Not enough Money ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
            }
            else{
                $messageu = "Not enough of both resources ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
            }
        }
   }

?>
        </body>
    </head>
</html>