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
<html>
    <head>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1808295948776802"
     crossorigin="anonymous"></script>
        <body>
            
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: lightblue url("background.jpg") no-repeat fixed center; 
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
   $db_link = mysqli_connect($host, $dbusername, $dbpassword)
      or die("Could not connect to $host");
    mysqli_select_db($db_link,$dbname)
      or die("Could not select database $dbname");
    $uid=$_SESSION["loggedin"];
   $self = $_SERVER['PHP_SELF'];
   $state = "SELECT state FROM user  WHERE ID='$uid'";
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
    <td> <img src="images/SmallFundraise.png" alt=" Small Fundraiser"style="width:128px;height:128px;"> </td>
<td> Small Fundraiser: <br> Projected Profit $<?php echo $fundmodifier ?> <br> Costs: 3 Actions</td>
<td><button type="submit" name="fund">Small Fundraiser</button></td>
</tr>
<tr>
    <td> <img src="images/LocalFundraise.png" alt=" Local Fundraiser"style="width:128px;height:128px;"> </td>
<td> Local Fundraiser: <br> Prokected Profit $<?php echo $locfundmodifier ?> <br> Costs: 5 Actions & 5 Local Influence</td>
<td><button type="submit" name="locfund">Local Fundraiser</button></td></tr>
<tr>
    <td> <img src="images/NationalFundraise.png" alt=" National Fundraiser"style="width:128px;height:128px;"> </td>
<td> National Fundraiser: <?php echo $natfundmodifier ?> Costs: 5 Actions & 5 National Influence</td>
<td><button type="submit" name="natfund">National Fundraiser</button></td></tr>
<tr>
    <td> <img src="images/LocalRally.png" alt=" Small Fundraiser"style="width:128px;height:128px;"> </td>
<td> Local Rally: Costs: 1000 money & 5 Actions</td>
<td><button type="submit" name="rally">Local Rally</button></td></tr>
<tr>
    <td> <img src="images/RadioAd.png" alt=" Small Fundraiser"style="width:128px;height:128px;"> </td>
<td>Radio Ad: Costs: 2000 money & 4 Actions</td>
<td><button type="submit" name="radio">Radio Ad</button></td></tr>
<tr>
     <td> <img src="images/TVAd.png" alt=" Small Fundraiser"style="width:128px;height:128px;"> </td>
    <td>TV Ad: Costs: 2000 money & 4 Actions</td>
<td><button type="submit" name="tvad">TV Ad</button></td></tr>
<tr>
     <td> <img src="images/InternetAd.png" alt=" Small Fundraiser"style="width:128px;height:128px;"> </td>
    <td>Internet Ad: Costs: 2000 money & 4 Actions</td>
<td><button type="submit" name="internetad">Internet Ad</button></td></tr>
<tr>
     <td> <img src="images/NationRally.png" alt=" Small Fundraiser"style="width:128px;height:128px;"> </td>
<td>National Rally: Costs: 50000 money & 15 Actions</td>
<td><button type="submit" name="nrally">National Rally</button></td></tr><tr>
    <td>Change Political Positions: Costs 10 Actions & 10 Local Influence</td>
<td>
    <label for="positions"></label>
  <select name="positions" id="positions">
    <option value="1">Move Authoritarian</option>
    <option value="2">Move Libertarian</option>
    <option value="3">Move Economic Left</option>
    <option value="4">Move Economic Right</option>
  </select>
    <button type="submit" name="pchange">Move Positions</button></td></tr><tr>
    </tbody>
     </form>
    </table>
   <br><br><br> 
<?php
   
   
   if ((isset($_POST['pchange'])))
   {
       $mposit = $_POST['positions'];
       $uid=$_SESSION["loggedin"];
       $sql = "SELECT actionp FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$actionp = $result->fetch_assoc();
$actionp = $actionp['actionp'];
       $sql = "SELECT auth FROM user WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$author = $result->fetch_assoc();
$author = $author['auth'];
$sql = "SELECT econ FROM user WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$econom = $result->fetch_assoc();
$econom = $econom['econ'];
if($state_influ >=10 && $actionp >=10)
{
       if($mposit==1)
       {
             $sqlupdateauth = "UPDATE user SET auth =auth+1 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdateauth);
        $sqlupdatesinflu = "UPDATE user SET state_influ =state_influ-10 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatesinflu);
        $sqlupdatesact = "UPDATE user SET actionp =actionp-10 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatesact);
       }
       if($mposit==2)
       {
             $sqlupdateauth = "UPDATE user SET auth =auth-1 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdateauth);
        $sqlupdatesinflu = "UPDATE user SET state_influ =state_influ-10 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatesinflu);
        $sqlupdatesact = "UPDATE user SET actionp =actionp-10 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatesact);
       }
       if($mposit==3)
       {
             $sqlupdateecon = "UPDATE user SET econ =econ+1 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdateecon);
        $sqlupdatesinflu = "UPDATE user SET state_influ =state_influ-10 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatesinflu);
        $sqlupdatesact = "UPDATE user SET actionp =actionp-10 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatesact);
       }
       if($mposit==4)
       {
             $sqlupdateecon = "UPDATE user SET econ =econ-1 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdateecon);
        $sqlupdatesinflu = "UPDATE user SET state_influ =state_influ-10 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatesinflu);
        $sqlupdatesact = "UPDATE user SET actionp =actionp-10 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatesact);
       }
       
       $sqlupdatehauth = "UPDATE user SET auth =10 WHERE ID='$uid' and auth>10";
        mysqli_query($db_link, $sqlupdatehauth);
        $sqlupdatelauth = "UPDATE user SET auth =0 WHERE ID='$uid' and auth<0";
        mysqli_query($db_link, $sqlupdatelauth);
        $sqlupdatehecon = "UPDATE user SET econ =10 WHERE ID='$uid' and econ>10";
        mysqli_query($db_link, $sqlupdatehecon);
        $sqlupdatelecon = "UPDATE user SET econ =0 WHERE ID='$uid' and econ<0";
        mysqli_query($db_link, $sqlupdatelecon);
}
   }
   
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
    
$sqlp = "SELECT partyid FROM user  WHERE ID='$uid'";
$result = $db_link->query($sqlp)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];

$sqlpar = "SELECT ptax FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($sqlpar)or die($db_link->error);
$partax = $result->fetch_assoc();
$partax = $partax['ptax'];

$locforparty=$locfundmodifier*($partax/100);
$locfundmodifier=$locfundmodifier*((100-$partax)/100);    
$sql = "SELECT money FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$money = $result->fetch_assoc();
$money = $money['money'];
$sql = "SELECT actionp FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$actionp = $result->fetch_assoc();
$actionp = $actionp['actionp'];


        if($actionp >= 5 && $state_influ >=5)
        {
        $sqlupdatec = "UPDATE user SET money =money+$locfundmodifier WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatec);
        $sqlupdatep = "UPDATE user SET actionp =actionp-4 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatep);
        $sqlupdatepartymoney = "UPDATE parties SET ptreasury=ptreasury+$locforparty WHERE partyid='$partyiden'";
        mysqli_query($db_link, $sqlupdatepartymoney);
        $messageu = "Gained $locfundmodifier , Party Gained $locforparty";
echo "<script type='text/javascript'>alert('$messageu');</script>";
        }elseif($actionp >=5 && $state_influ <5)
        {
            $messageu = "Not enough Influence ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
        }elseif($actionp < 5 && $state_influ >= 5)
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
   $db_link = mysqli_connect($host, $dbusername, $dbpassword)
      or die("Could not connect to $host");
    mysqli_select_db($db_link,$dbname)
      or die("Could not select database $dbname");
    
    $uid=$_SESSION["loggedin"];
$sql = "SELECT money FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$money = $result->fetch_assoc();
$money = $money['money'];
$sql = "SELECT actionp FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$actionp = $result->fetch_assoc();
$actionp = $actionp['actionp'];


        if($actionp >= 5 && $nation_influ >=5)
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
         $sqlupdatemax = "UPDATE user SET state_influ =state_influ+1 WHERE ID='$uid'  and state_influ < 100";
mysqli_query($db_link, $sqlupdatemax);
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
     if (isset($_POST['radio']))
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
        if($money >= 2000 && $actionp >= 4)
        {
        $sqlupdatec = "UPDATE user SET money =money-2000 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatec);
        $sqlupdatep = "UPDATE user SET actionp =actionp-4 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatep);
         $sqlupdatemax = "UPDATE user SET state_influ =state_influ+1 WHERE ID='$uid'  and state_influ < 100";
mysqli_query($db_link, $sqlupdatemax);
        }else
        {
            if($money >= 2000 && $actionp <= 4)
            {
            $messageu = "Not enough Actions ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
            }
            elseif($money <= 2000 && $actionp >= 4)
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
   if (isset($_POST['tvad']))
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
        if($money >= 2000 && $actionp >= 4)
        {
        $sqlupdatec = "UPDATE user SET money =money-2000 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatec);
        $sqlupdatep = "UPDATE user SET actionp =actionp-4 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatep);
        $sqlupdatemax = "UPDATE user SET state_influ =state_influ+1 WHERE ID='$uid'  and state_influ < 100";
mysqli_query($db_link, $sqlupdatemax);
        }else
        {
            if($money >= 2000 && $actionp <= 4)
            {
            $messageu = "Not enough Actions ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
            }
            elseif($money <= 2000 && $actionp >= 4)
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
   if (isset($_POST['internetad']))
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
        if($money >= 2000 && $actionp >= 4)
        {
        $sqlupdatec = "UPDATE user SET money =money-2000 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatec);
        $sqlupdatep = "UPDATE user SET actionp =actionp-4 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatep);
         $sqlupdatemax = "UPDATE user SET state_influ =state_influ+1 WHERE ID='$uid'  and state_influ < 100";
mysqli_query($db_link, $sqlupdatemax);
        }else
        {
            if($money >= 2000 && $actionp <= 4)
            {
            $messageu = "Not enough Actions ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
            }
            elseif($money <= 2000 && $actionp >= 4)
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
   if (isset($_POST['nrally']))
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
        if($money >= 50000 && $actionp >= 15)
        {
        $sqlupdatec = "UPDATE user SET money =money-50000 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatec);
        $sqlupdatep = "UPDATE user SET actionp =actionp-15 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatep);
        $sqlupdateni = "UPDATE user SET nation_influ =nation_influ+1 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdateni);
        }else
        {
            if($money >= 50000 && $actionp <= 15)
            {
            $messageu = "Not enough Actions ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
            }
            elseif($money <= 50000 && $actionp >= 15)
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