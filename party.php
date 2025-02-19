<?php session_start(); 
if (!(isset($_SESSION['loggedin'])))//FLIP AFTER DONE
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
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="tableStyle.css">
<link rel="stylesheet" href="headerStyle.css">
    <link rel="stylesheet" href="partyStyle.css">
</head>
<?php

$partyid=$_GET['id'];
?><center><?php
if($partyid==0)
{
echo "Independents";
}
else
{
      $pnamed = "SELECT pname FROM parties where partyid= '$partyid'";
$result = $db_link->query($pnamed)or die($db_link->error);
$pnamedisplay = $result->fetch_assoc();
$pnamedisplay = $pnamedisplay['pname'];
echo $pnamedisplay;

$parpic = "SELECT ppic FROM parties  WHERE partyid='$partyid'";
$result = $db_link->query($parpic)or die($db_link->error);
$partypic = $result->fetch_assoc();
$partypic = $partypic['ppic'];
?>
<br>
<img src="https://i.imgur.com/<?php echo $partypic; ?>" alt="partylogo" width="50" height="50">
<br>
<?php
}
?> <br>
<center>
          <?php
   $pid=$_GET['id'];
   $self = $_SERVER['PHP_SELF'];
?><center>
              <form action="<?php echo $self ?>?id=<?php echo $pid ?>" method="POST">
                  <button class='partyButton' type="submit" name="jp">Join Party</button><br><br>
                  </form>
                  
                  <form action="partydiscussion.php" method="POST">
    <button class='partyButton' type="submit" name="pd">Party Discussion</button>
</form>
                  </center>      
   <table>
       <tr><th>Party Leader</th><th>Chief Whip</th><th>Treasurer</th></tr>

               <tr>
               <td>
                 <?php
                 
                 $mostvotes = "SELECT ID FROM user WHERE partyid='$pid' ORDER BY leadervotes DESC LIMIT 1";
$result = $db_link->query($mostvotes)or die($db_link->error);
$mvote = $result->fetch_assoc();
$mvote = $mvote['ID'];

$sqlupdatelead = "UPDATE parties SET pleaderid='$mvote' WHERE partyid='$pid'";
        mysqli_query($db_link, $sqlupdatelead); 


                 $pic = "SELECT cpic FROM user  WHERE ID='$mvote'";
$result = $db_link->query($pic)or die($db_link->error);
$cpic = $result->fetch_assoc();
$cpic = $cpic['cpic'];

$sql = "SELECT cname FROM user  WHERE ID='$mvote'";
$result = $db_link->query($sql)or die($db_link->error);
$cname = $result->fetch_assoc();
$cname = $cname['cname'];


?>
<img src="https://i.imgur.com/<?php echo $cpic; ?>" alt="Character" max-width="100" height="50"><br>

<?php
echo $cname;
                 ?>
               </td>
               <td>
                   <?php
                   $pid=$_GET['id'];
                   $whip = "SELECT pwhipid FROM parties WHERE partyid='$pid'";
$result = $db_link->query($whip)or die($db_link->error);
$whipe = $result->fetch_assoc();
$whipe = $whipe['pwhipid']??0;
                 $picw = "SELECT cpic FROM user WHERE ID='$whipe'";
$result = $db_link->query($picw)or die($db_link->error);
$cpicw = $result->fetch_assoc();
$cpicw = $cpicw['cpic']??0;

$sqlw = "SELECT cname FROM user WHERE ID='$whipe'";
$result = $db_link->query($sqlw)or die($db_link->error);
$cnamew = $result->fetch_assoc();
$cnamew = $cnamew['cname']??0;

?>
<img src="https://i.imgur.com/<?php echo $cpicw; ?>" alt="Character" max-width="100" height="50"><br>
<?php
echo $cnamew;
                 ?>
               </td>
               <td>
                  <?php
                   $pid=$_GET['id'];
                   $treasure = "SELECT ptreasurerid FROM parties WHERE partyid='$pid'";
$result = $db_link->query($treasure)or die($db_link->error);
$tre = $result->fetch_assoc();
$tre = $tre['ptreasurerid']??0;
                 $pict = "SELECT cpic FROM user  WHERE ID='$tre'";
$result = $db_link->query($pict)or die($db_link->error);
$cpict = $result->fetch_assoc();
$cpict = $cpict['cpic']??0;

$sqlt = "SELECT cname FROM user  WHERE ID='$tre'";
$result = $db_link->query($sqlt)or die($db_link->error);
$cnamet = $result->fetch_assoc();
$cnamet = $cnamet['cname']??0;

?>
<img src="https://i.imgur.com/<?php echo $cpict; ?>" alt="Character" max-width="100" height="50"><br>
<?php
echo $cnamet;
                 ?> 
               </td>
               
           </tr>
         
           
            </tbody>
            </table>
    <br>
    <?
    //start of tax table and where party treasury is located
    ?>

            <table>
                <tr><th>Party Tax</th><th>Party Treasury</th></tr>
                <tbody>
                    <tr>

               <td>
                   <?php
                   $pid=$_GET['id'];
$patax = "SELECT ptax FROM parties WHERE partyid='$pid'";
$result = $db_link->query($patax)or die($db_link->error);
$partax = $result->fetch_assoc();
$partax = $partax['ptax'];
echo "$partax%";
                   
                   ?>
               </td>

               <td>
                   <?php
                   $pid=$_GET['id'];
$patre = "SELECT ptreasury FROM parties WHERE partyid='$pid'";
$result = $db_link->query($patre)or die($db_link->error);
$partre = $result->fetch_assoc();
$partre = $partre['ptreasury'];
echo "$"."$partre";



?>

               </td>
           </tr>
           </tbody>
            </table>
<?php
$uid=$_SESSION["loggedin"];
$pid=$_GET['id'];
$patreid = "SELECT ptreasurerid FROM parties WHERE partyid='$pid'";
$result = $db_link->query($patreid)or die($db_link->error);
$partrerid = $result->fetch_assoc();
$partrerid = $partrerid['ptreasurerid']??0;

$tresid = "SELECT ID FROM user WHERE ID='$partrerid'";
$result = $db_link->query($tresid)or die($db_link->error);
$trid = $result->fetch_assoc();
$trid = $trid['ID']??0;

//If the player is the treasurer this will be displayed. The treasurer is only able to take money out of the party and cannot do anything else
if($uid==$trid)
{
    ?>
<table>
    <tr><th>Withdraw from Treasury</th></tr>
                <tbody>
                   
                    <tr>
               <td>
                   <form action="<?php echo $self ?>?id=<?php echo $pid ?>" method="POST">
                   <input type="text" name="rtreasuryt" style="width: 50px">
                    <button class='partyButton' type="submit" name="rtreasury">Submit</button>
                    </form>
               </td>
               </tr>
               
               
               <?php
}
//Person with most votes is the party leader and will have access to more different abilities and can influence the party in more ways
if($uid==$mvote)
{
    ?>
    <h2>Party Leader Actions</h2>
    <form action="<?php echo $self ?>?id=<?php echo $pid ?>" method="POST">
    <table>
                <tbody>
                   
                    <tr>
               <td>
                   Appoint Whip
               </td>
               <td>
                   <input type="text" name="awhipt" maxlength="3"style="width: 50px">
                   <button type="submit" name="awhip">Submit</button>
               </td>
           </tr>
           <tr>
               <td>
                   Appoint Treasurer
               </td>
               <td>
                   <input type="text" name="atreasurert" maxlength="3" style="width: 50px">
                    <button type="submit" name="atreasurer">Submit</button>
               </td>
           </tr>
           <tr>
               <td>
                   Set Tax
               </td>
               <td>
                   <input type="text" name="staxt" maxlength="3" style="width: 50px">
                    <button type="submit" name="stax">Submit</button>
               </td>
           </tr>
           <tr>
               <td>
                   Withdraw from Treasury
               </td>
               <td>
                   <input type="text" name="rtreasuryt" style="width: 50px">
                    <button type="submit" name="rtreasury">Submit</button>
               </td>
           </tr>
           </tbody>
            </table>
</form>
<?php
}

$partyid=$_GET['id'];
$pid=$_GET['id'];
      $q1 = mysqli_query($db_link,"SELECT ID,cname,state FROM user where partyid= '$partyid'");
      
while($rows[] = mysqli_fetch_assoc($q1));
?>
<h2>Members</h2>
<table>
        <tbody>
            <tr>
               
               <td>
                 Name
               </td>
               <td>
                  State
               </td>
               <td>
                   Vote Party Leader
               </td>
               <td>
                   Votes
               </td>
               <td>
                   Voting For
               </td>
               
           </tr>
            <form action="<?php echo $self ?>?id=<?php echo $pid ?>" method="POST">
<?php
foreach ($rows as $row) {
    // Validate row existence before accessing array keys
    if (!isset($row['ID']) || is_null($row['ID'])) {
        continue;
    }

    // Skip empty rows or those with an ID of 0
    if ($row['ID'] == 0) {
        continue;
    }
    ?>
    <tr>
        <td>
            <a href="profile.php?id=<?php echo htmlspecialchars($row['ID']); ?>">
                <?php echo htmlspecialchars($row['cname'] ?? 'Unknown'); ?>
            </a>
        </td>
        <td><?php echo htmlspecialchars($row['state'] ?? 'Unknown'); ?></td>
        <td>
            <button type="submit" name="vote[<?php echo htmlspecialchars($row['ID']); ?>]" value="vote">Vote</button>
        </td>
        <td>
            <?php
            $partvote = $row['ID'];
            $plead = "SELECT COUNT(pleadervoteid) AS count FROM user WHERE partyid='$pid' AND pleadervoteid='$partvote'";
            $result = $db_link->query($plead);
            $partre = ($result && $result->num_rows > 0) ? $result->fetch_assoc()['count'] : 0;
            echo $partre;

            $sqlupdatevotecount = "UPDATE user SET leadervotes='$partre' WHERE partyid='$pid' AND ID='$partvote'";
            mysqli_query($db_link, $sqlupdatevotecount);
            ?>
        </td>
        <td>
            <?php
            $plead = "SELECT pleadervoteid FROM user WHERE partyid='$pid' AND ID='$partvote'";
            $result = $db_link->query($plead);
            $partrer = ($result && $result->num_rows > 0) ? $result->fetch_assoc()['pleadervoteid'] : null;

            if ($partrer !== null) {
                $plead = "SELECT cname FROM user WHERE partyid='$pid' AND ID='$partrer'";
                $result = $db_link->query($plead);
                $partrerr = ($result && $result->num_rows > 0) ? $result->fetch_assoc()['cname'] : 'Unknown';
            } else {
                $partrerr = 'Unknown';
            }

            echo htmlspecialchars($partrerr);
            ?>
        </td>
    </tr>
    <?php
}
?>
</table>
</form><br><br>
<?php

if ((isset($_POST['awhip'])))
   {
       $aw = $_POST['awhipt'];
       if($uid!=$aw && $aw >0)
       {
$pid=$_GET['id'];

$whip = "SELECT partyid FROM user WHERE ID='$aw'";
$result = $db_link->query($whip)or die($db_link->error);
$whipinp = $result->fetch_assoc();
$whipinp = $whipinp['partyid'];
if($pid==$whipinp)
{
         $sqlupdatewhip = "UPDATE parties SET pwhipid='$aw' WHERE partyid='$pid'";
        mysqli_query($db_link, $sqlupdatewhip); 
}
else{
}
       }
       else
       {
            
       }
   }
if ((isset($_POST['atreasurer'])))
   {
       $at = $_POST['atreasurert'];
       if($uid!=$at && $at >0)
       {
$pid=$_GET['id'];

$tre = "SELECT partyid FROM user WHERE ID='$at'";
$result = $db_link->query($tre)or die($db_link->error);
$treinp = $result->fetch_assoc();
$treinp = $treinp['partyid'];
if($pid==$treinp)
{
         $sqlupdatetre = "UPDATE parties SET ptreasurerid='$at' WHERE partyid='$pid'";
        mysqli_query($db_link, $sqlupdatetre); 
}
else{
}
       }
       else
       {
            
       }
   }
if ((isset($_POST['stax'])))
   {
       $st = $_POST['staxt'];
       if($st>=0 || $st<=100)
       {
       $sqlupdatepmoney = "UPDATE parties SET ptax='$st' WHERE partyid='$pid'";
        mysqli_query($db_link, $sqlupdatepmoney); 
       }
   }
   if ((isset($_POST['rtreasury'])))
   {
       $rt = $_POST['rtreasuryt'];
       $pid=$_GET['id'];
       $parmoney = "SELECT ptreasury FROM parties WHERE partyid='$pid'";
$result = $db_link->query($parmoney)or die($db_link->error);
$parmon = $result->fetch_assoc();
$parmon = $parmon['ptreasury'];
       if($parmon>$rt)
       {
           $uid=$_SESSION["loggedin"];
         $sqlupdateparmon = "UPDATE parties SET ptreasury=ptreasury-'$rt' WHERE partyid='$pid'";
        mysqli_query($db_link, $sqlupdateparmon);
        $sqlupdategivetre = "UPDATE user SET money=money+'$rt' WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdategivetre); 
       }
   }
if ((isset($_POST['jp'])))
   {
       $pid=$_GET['id'];
      $uid=$_SESSION["loggedin"];
        $sql = "SELECT partyid FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$upid = $result->fetch_assoc();
$upid = $upid['partyid'];
if($upid==$pid)
{
    $messageu = "Already an Member";
echo "<script type='text/javascript'>alert('$messageu');</script>";
}else
{
$userid = "SELECT ID FROM user  WHERE ID='$uid'";
$result = $db_link->query($userid)or die($db_link->error);
$usid = $result->fetch_assoc();
$usid = $usid['ID'];

$sqlupdateupartynowhip = "UPDATE parties SET pwhipid=0 WHERE partyid='$upid' and pwhipid=$usid";
        mysqli_query($db_link, $sqlupdatenowhip);
 $sqlupdateupartynotre = "UPDATE parties SET ptreasurerid=0 WHERE partyid='$upid' and ptreasurerid=$usid";
        mysqli_query($db_link, $sqlupdatenotre);       
        
    
    $sqlupdateuparty2 = "UPDATE parties SET nummem=nummem-1 WHERE partyid='$upid'";
    $sqlupdateupid = "UPDATE user SET partyid='$pid' WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdateupid);
        
}
      
   }
   

if (isset($_POST['vote']))
   {
$votechange=key($_POST['vote']); 
$pid=$_GET['id'];
$uid=$_SESSION["loggedin"];
        $sql = "SELECT partyid FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$upid = $result->fetch_assoc();
$upid = $upid['partyid'];
if($pid==$upid)
{
$sqlupdateupdateleader = "UPDATE user SET pleadervoteid='$votechange' WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdateupdateleader);
}
else
{
$messagel = "You are not in this Party and Cannot vote for their leader ";
echo "<script type='text/javascript'>alert('$messagel');</script>";
}

}
?>
<br><br>
</html>