<?php session_start(); 
if (!(isset($_SESSION['loggedin'])))//FLIP AFTER DONE
{
    header("Location: login.html");
   die();
}else
{
   include '/home1/murvetop/includes/sqlcall.php';
$pid=$_SESSION["loggedin"];
$sqlhours = "UPDATE user SET hoursinactive =0 WHERE ID='$pid'";
        mysqli_query($db_link, $sqlhours);
}?>
 <html>
     <header>
         <script data-ad-client="ca-pub-1808295948776802" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<title>Profile
</title>
<?php
$uid=$_GET['id'];
$sql = "SELECT biography FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$biog = $result->fetch_assoc();
$biog = $biog['biography'];
$sql = "SELECT campaignsong FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$csong = $result->fetch_assoc();
$csong = $csong['campaignsong'];
$sql = "SELECT cname FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$cname = $result->fetch_assoc();
$cname = $cname['cname'];
$pic = "SELECT cpic FROM user  WHERE ID='$uid'";
$result = $db_link->query($pic)or die($db_link->error);
$cpic = $result->fetch_assoc();
$cpic = $cpic['cpic'];
$state = "SELECT state FROM user  WHERE ID='$uid'";
$result = $db_link->query($state)or die($db_link->error);
$state = $result->fetch_assoc();
$state = $state['state'];
$cash = "SELECT money FROM user  WHERE ID='$uid'";
$result = $db_link->query($cash)or die($db_link->error);
$money = $result->fetch_assoc();
$money = $money['money'];
$action = "SELECT actionp FROM user  WHERE ID='$uid'";
$result = $db_link->query($action)or die($db_link->error);
$actionp = $result->fetch_assoc();
$actionp = $actionp['actionp'];
$istate = "SELECT state_influ FROM user  WHERE ID='$uid'";
$result = $db_link->query($istate)or die($db_link->error);
$state_influ = $result->fetch_assoc();
$state_influ = $state_influ['state_influ'];

$approv = "SELECT approval FROM user WHERE ID='$uid'";
$result = $db_link->query($approv)or die($db_link->error);
$approval = $result->fetch_assoc();
$approval = $approval['approval'];

$ination = "SELECT nation_influ FROM user  WHERE ID='$uid'";
$result = $db_link->query($ination)or die($db_link->error);
$nation_influ = $result->fetch_assoc();
$nation_influ = $nation_influ['nation_influ'];


$hoursin = "SELECT hoursinactive FROM user WHERE ID='$uid'";
$result = $db_link->query($hoursin)or die($db_link->error);
$hin = $result->fetch_assoc();
$hin=$hin['hoursinactive'];

$corrupt = "SELECT corruption FROM user  WHERE ID='$uid'";
$result = $db_link->query($corrupt)or die($db_link->error);
$cor = $result->fetch_assoc();
$cor = $cor['corruption'];
$pid=$_SESSION["loggedin"];
$pcorrupt = "SELECT corruption FROM user  WHERE ID='$pid'";
$result = $db_link->query($pcorrupt)or die($db_link->error);
$pcor = $result->fetch_assoc();
$pcor = $pcor['corruption'];
$pcash = "SELECT money FROM user  WHERE ID='$pid'";
$result = $db_link->query($pcash)or die($db_link->error);
$pmoney = $result->fetch_assoc();
$pmoney = $pmoney['money'];
$paction = "SELECT actionp FROM user  WHERE ID='$pid'";
$result = $db_link->query($paction)or die($db_link->error);
$pactionp = $result->fetch_assoc();
$pactionp = $pactionp['actionp'];



$parid = "SELECT partyid FROM user WHERE ID='$uid'";
$result = $db_link->query($parid)or die($db_link->error);
$paid = $result->fetch_assoc();
$paid = $paid['partyid'];
$partid = "SELECT partyid FROM user WHERE ID='$pid'";
$result = $db_link->query($partid)or die($db_link->error);
$idpart = $result->fetch_assoc();
$idpart = $idpart['partyid'];
$parname = "SELECT pname FROM parties  WHERE partyid='$paid'";
$result = $db_link->query($parname)or die($db_link->error);
$partyname = $result->fetch_assoc();
$partyname = $partyname['pname'];

$parpic = "SELECT ppic FROM parties  WHERE partyid='$paid'";
$result = $db_link->query($parpic)or die($db_link->error);
$partypic = $result->fetch_assoc();
$partypic = $partypic['ppic'];

$staten = "SELECT statename FROM states  WHERE stateid='$state'";
$result = $db_link->query($staten)or die($db_link->error);
$statename = $result->fetch_assoc();
$statename = $statename['statename'];


$ammail = "SELECT COUNT(seen) FROM mail WHERE recieveid='$pid' and seen='0'";
$result = $db_link->query($ammail)or die($db_link->error);
$mails = $result->fetch_assoc();
$mails = $mails['COUNT(seen)'];

?> 
<body>
    <?php
    include '/home1/murvetop/includes/topbar.php';
?>


<div style="padding-left:16px">
</div>
   <body>
<div class="card">
  <img src="https://i.imgur.com/<?php echo $cpic; ?>" max-width="200" height="150">
  <h1>
      <?php echo $cname; ?>
  </h1>
  <p class="title">
      <?php
      $posid = "SELECT positionid FROM user  WHERE ID='$uid'";
$result = $db_link->query($posid)or die($db_link->error);
$position = $result->fetch_assoc();
$position = $position['positionid'];
   if($position==1)
   {
       echo "Governor of ";
             echo $statename;
   }
   else if($position==2 || $position==3)
   {
       echo "Senator of ";
      echo $statename;
   }
   else if($position==4)
   {
       echo "Congress Person from ";
             echo $statename;
   }
   else if($position==5)
   {
       echo "President";
   }
   else
   {
       echo "Politician from ";
       echo $statename;
   }
    ?>  
  </p>
  <b>
   <?php
   if($hin==0)
   {
       ?>
       <span class="gdot"></span>
       <?php
       echo "Online Now";
       
   }
   else
   {
       ?>
       <span class="rdot"></span>
       <?php
       echo "$hin Hour(s) Inactive";
   }
   
   ?></b> <br>
   <h3>
   Biography
   </h3>
   <center>
   <textarea readonly id="biog" rows="4" cols="50" wrap="hard">
<?php echo $biog ?>
</textarea>
<object width="300" height="30" data="http://www.youtube.com/v/<?php echo $csong?>" type="application/x-shockwave-flash"><param name="src" value="http://www.youtube.com/v/<?php echo $csong ?>" /></object>
   <table class="blueTable">
       <tbody><tr>
<td>State:</td>
<td><img src='flags/<?php echo strtolower("$state"); ?>.png' alt="" width="20" height="20">
    <a href="state.php?state=<?php echo $state ?>"><?php echo $state ?></a></td></tr>
<tr>
<td>Party:</td><td><a href="party.php?id=<?php echo $paid ?>"><img style='vertical-align:middle;' src="https://i.imgur.com/<?php echo $partypic; ?>" alt="partylogo" width="20" height="20"><?php echo $partyname ?></a></td></tr><tr>
<td>Money:</td><td>$<?php echo $money ?></td></tr><tr>
<td>Actions:</td><td><?php echo $actionp ?></td></tr><tr>
    <td>Approval Rating:</td><td><?php echo "$approval" ?></td></tr><tr>
<td><div class="popup" onclick="myFunctionlnr()">LNR:
  <span class="popuptext" id="myPopuplnr">Local Name Recognition</span>
</div>
<script>
// When the user clicks on div, open the popup
function myFunctionlnr() {
  var popup = document.getElementById("myPopuplnr");
  popup.classList.toggle("show");
}
</script></td><td><?php echo $state_influ ?></td></tr><tr>
<td><div class="popup" onclick="myFunctionnnr()">NNR:
  <span class="popuptext" id="myPopupnnr">National Name Recognition</span>
</div>
<script>
// When the user clicks on div, open the popup
function myFunctionnnr() {
  var popup = document.getElementById("myPopupnnr");
  popup.classList.toggle("show");
}
</script></td>
<td><?php echo $nation_influ ?></td></tr>
<tr>
    <td>
        Corruption:
    </td>
    <td>
        <?php 
        echo $cor;
        ?>
    </td>
    
</tr>

<tr>

</div></td></tr></body></table>
<script>
// When the user clicks on div, open the popup
function myFunctionecon() {
  var popup = document.getElementById("myPopupecon");
  popup.classList.toggle("show");
}
</script>
<?php
$uid=$_GET['id'];
$pid=$_SESSION["loggedin"];
if($uid==$pid)
{
}
else
{
$self = $_SERVER['PHP_SELF'];
?>
<center>
    <div class="popup" onclick="myFunctionemail()"><span style='font-size:50px;'>&#9993;</span>
  <span class="popuptext" id="myPopupemail">
         <form action="<?php echo $self ?>?id=<?php echo $uid ?>" method="POST">
  <textarea name="email" rows="5" cols="30" wrap="hard" onclick="stayopen()"></textarea>
       <input name="sendemail" type="submit" value="Send" />
</form>
       
  </span>
</div>
<script>
// When the user clicks on div, open the popup
function myFunctionemail() {
  var popup = document.getElementById("myPopupemail");
  popup.classList.toggle("show");
}
function stayopen() {
  var popup = document.getElementById("myPopupemail");
  popup.classList.toggle("show");
}
</script>
    
<form action="<?php echo $self ?>?id=<?php echo $uid ?>" method="POST">
  <br>
  <input type="text" name="fundamount">
  <input name="sendfund" type="submit" value="Send Funds" /><br>
  <input name="attackad" type="submit" value="Attack Ad" />
</form></div>
<?php

$fa = $_POST['fundamount'];
if ((isset($_POST['sendemail'])))
   {
$ga = $_POST['email'];
       $uid=$_GET['id'];
$pid=$_SESSION["loggedin"];

        $sqlmail ="INSERT INTO mail (sendid, recieveid, messageid, message, seen)
VALUES ('$pid', '$uid', 1, '$ga',0)";
        mysqli_query($db_link, $sqlmail);
   }
if ((isset($_POST['sendfund'])))
   {
       $uid=$_GET['id'];
$pid=$_SESSION["loggedin"];
    if($pmoney>$fa && $pmoney > 0)
    {
        $sqlupdatec1 = "UPDATE user SET money =money+'$fa' WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatec1);
        $sqlupdatec2 = "UPDATE user SET money =money-'$fa' WHERE ID='$pid'";
        mysqli_query($db_link, $sqlupdatec2);
        
        $sqlmail ="INSERT INTO mail (sendid, recieveid, messageid, message, seen)
VALUES ('$pid', '$uid', 4, '$fa',0)";
        mysqli_query($db_link, $sqlmail);
        
    }else
    {
        $messageu = "Not Enough Money";
echo "<script type='text/javascript'>alert('$messageu');</script>";
    }
   }
   if ((isset($_POST['attackad'])))
   {
       $uid=$_GET['id'];
$pid=$_SESSION["loggedin"];


$csi = "SELECT state_influ FROM user  WHERE ID='$pid'";
$result = $db_link->query($csi)or die($db_link->error);
$checksi = $result->fetch_assoc();
$checksi = $checksi['state_influ'];
$cni = "SELECT nation_influ FROM user  WHERE ID='$pid'";
$result = $db_link->query($cni)or die($db_link->error);
$checkni = $result->fetch_assoc();
$checkni = $checkni['nation_influ'];



    if($pmoney >= 2000 && $pactionp >= 4 && $state_influ >= 1 && $checksi > 20 && $checkni > 5)
            {
                $random=(rand(0,100));
                $sqlAA1 = "UPDATE user SET money =money-2000 WHERE ID='$pid'";
        mysqli_query($db_link, $sqlAA1);
        $sqlAA2 = "UPDATE user SET actionp =actionp-4 WHERE ID='$pid'";
        mysqli_query($db_link, $sqlAA2);
            if($random>$pcor)
            {
                $hit=($cor/25)+1;
                
           $cad = "SELECT advisor1id FROM user  WHERE ID='$pid'";
$result = $db_link->query($cad)or die($db_link->error);
$checkad = $result->fetch_assoc();
$checkad = $checkad['advisor1id'];

 $cadattacked = "SELECT advisor1id FROM user  WHERE ID='$uid'";
$result = $db_link->query($cadattacked)or die($db_link->error);
$checkattacked = $result->fetch_assoc();
$checkattacked = $checkattacked['advisor1id'];

if($checkad==2)
{
    $hit=$hit+($hit*0.1);
}
if($checkattacked==3)
{
    $hit=$hit-($hit*0.1);
}
                
        $sqlAA3 ="UPDATE user SET state_influ=state_influ-'$hit' WHERE ID='$uid'";
        mysqli_query($db_link, $sqlAA3);
        
        $sqlmail ="INSERT INTO mail (sendid, recieveid, messageid, message, seen)
VALUES ('$pid', '$uid', 3, 'succeeded',0)";
$sqlcorruptionsuc ="UPDATE user SET corruption=corruption+2 WHERE ID='$pid'";
        mysqli_query($db_link, $sqlcorruptionsuc);
        
        
}else{
    $sqlmail ="INSERT INTO mail (sendid, recieveid, messageid, message, seen)
VALUES ('$pid', '$uid', 3, 'failed',0)";

$sqlcorruptionfail ="UPDATE user SET corruption=corruption+3 WHERE ID='$pid'";
        mysqli_query($db_link, $sqlcorruptionfail);

} 
        mysqli_query($db_link, $sqlmail);
            }
            else
        {
            if($pmoney >= 2000 && $pactionp <= 4)
            {
            $messageu = "Not enough Actions ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
            }
            elseif($pmoney <= 2000 && $pactionp >= 4)
            {
            $messageu = "Not enough Money ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
            }
            elseif($pmoney >= 2000 && $pactionp >= 4 && $state_influ < 1){
                $messageu = "They do not have enough Influence in state ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
                }
                else{
                $messageu = "Not enough of both resources ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
            }
        }
   }
}

?> <br><br><br>
   </center>
   <button onclick="window.location.href='playerposition.php?id=<?php echo $pid;?>'">View Positions</button>
   
   </body>
   </header>
     <br>  <br>  <br>
   </html>