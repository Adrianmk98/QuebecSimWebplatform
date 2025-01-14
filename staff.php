<?php session_start(); 
if (!isset($_SESSION['loggedin']))
{
    header("Location: login.html");
    die();
}else
{
include '/home2/mfp6cy5i/includes/sqlcall.php';
    include '/home2/mfp6cy5i/includes/topbar.php';
$pid=$_SESSION["loggedin"];
$sqlhours = "UPDATE user SET hoursinactive =0 WHERE ID='$pid'";
        mysqli_query($db_link, $sqlhours);
}
?>
<html>
    <head>
        <script data-ad-client="ca-pub-1808295948776802" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
$istate = "SELECT state_influ FROM user  WHERE ID='$uid'";
$result = $db_link->query($istate)or die($db_link->error);
$state_influ = $result->fetch_assoc();
$state_influ = $state_influ['state_influ'];
?>
   <table class="blueTable">
       <form action=<?php echo $self ?> method="POST">
       <tbody>
<tr>
<td><label for="AdvisorA">Choose an Advisor:</label>
  <select name="AdvisorA" id="AdvisorA">
    <option value="1">Workhorse</option>
    <option value="2">Spindoctor</option>
    <option value="3">PR Person</option>
    <option value="4">Speech Writer</option>
    <option value="5">Activist</option>
    <option value="6"> Banker</option>
  </select>
  <td><input type="submit" name="submit"></td></tr>


    </tbody>
     </form>
    </table>
    
    <table class="blueTablead">
        <tbody>
            
           <tr>
               <td>
                   Current Advisor
                   <?php 
                   $sql = "SELECT advisor1id FROM user WHERE ID='$uid'";
                    $result = $db_link->query($sql)or die($db_link->error);
                    $advisor = $result->fetch_assoc();
               $advisor = $advisor['advisor1id'];
               ?>
               <br>
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
               if($advisor==1)
               {
                echo "Workhorse";  
                ?>
                <br>
                <img src="images/Workhorse.jpg" alt=" Workhorse"style="width:256px;height:256px;"> <br>
                <?php 
                echo "Costs:";
                echo $fundmodifier/4 ;
                echo " per hour";
                ?>
                <br>
                <?php
                echo "Gains:";
                echo " 2 Actions per hour";
                
               }
               if($advisor==2)
               {
                echo "Spin Doctor";  
                ?>
                <br>
                <img src="images/SpinDoctor.jpg" alt=" Spin Doctor"style="width:256px;height:256px;"> <br>
                <?php 
                echo "Costs:";
                echo $fundmodifier/4 ;
                echo " per hour";
                ?>
                <br>
                <?php
                echo "Gains:";
                echo " AA's 10% more effective";
                
               }
               if($advisor==3)
               {
                echo "PR Person";  
                ?>
                <br>
                <img src="images/PRPerson.jpg" alt=" PR Person"style="width:200px;height:256px;"> <br>
                <?php 
                echo "Costs:";
                echo $fundmodifier/4 ;
                echo " per hour";
                ?>
                <br>
                <?php
                echo "Gains:";
                echo " AA's against you 10% less effective";
                
               }
               if($advisor==4)
               {
                echo "Activist";  
                ?>
                <br>
                <img src="images/Activist.jpg" alt=" Activist"style="width:256px;height:256px;"> <br>
                <?php 
                echo "Costs:";
                echo $fundmodifier/4 ;
                echo " per hour";
                ?>
                <br>
                <?php
                echo "Gains:";
                echo "Lowers Loss of Local Influence by 0.1 per hour";
                
               }
               if($advisor==5)
               {
                echo "Speech Writer";  
                ?>
                <br>
                <img src="images/SpeechWriter.jpg" alt="Speech Writer"style="width:256px;height:200px;"> <br>
                <?php 
                echo "Costs:";
                echo $fundmodifier/4 ;
                echo " per hour";
                ?>
                <br>
                <?php
                echo "Gains:";
                echo "Corruption goes down 50% faster";
                
               }
               if($advisor==6)
               {
                echo "Banker";  
                ?>
                <br>
                <img src="images/Banker.jpg" alt="Banker"style="width:256px;height:256px;"> <br>
                <?php 
                echo "Costs:";
                echo "3 Actions per hour";
                ?>
                <br>
                <?php
                echo "Gains:";
                echo $fundmodifier*0.5 ;
                echo " per hour";
                
               }
?>
               </td>

           </tr>
            </tbody>
            </table>
        
        
<?php
   
   if ((isset($_POST['submit'])))
   {
   $advis = $_POST['AdvisorA'];
    if($advis==1)
       {
           
           $checkmon = "SELECT money FROM user  WHERE ID='$uid'";
$result = $db_link->query($checkmon)or die($db_link->error);
$mon = $result->fetch_assoc();
$mon = $mon['money'];

$adv = "SELECT advisor1id FROM user  WHERE ID='$uid'";
$result = $db_link->query($adv)or die($db_link->error);
$adv = $result->fetch_assoc();
$adv = $adv['advisor1id'];

        if($mon>$locfundmodifier)
        {
        
           $sqlupdatewh = "UPDATE user SET advisor1id =1 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatewh);
        $sqlupdatewh = "UPDATE user SET money =money-$locfundmodifier WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatewh);
        
        }else
        {
            $message = "Not enough Money ";
echo "<script type='text/javascript'>alert('$message');</script>";
        }
       }
       if($advis==2)
       {
                     $checkmon = "SELECT money FROM user  WHERE ID='$uid'";
$result = $db_link->query($checkmon)or die($db_link->error);
$mon = $result->fetch_assoc();
$mon = $mon['money'];

$adv = "SELECT advisor1id FROM user  WHERE ID='$uid'";
$result = $db_link->query($adv)or die($db_link->error);
$adv = $result->fetch_assoc();
$adv = $adv['advisor1id'];

        if($mon>$locfundmodifier)
        {
        
           $sqlupdatewh = "UPDATE user SET advisor1id =2 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatewh);
        $sqlupdatewh = "UPDATE user SET money =money-$locfundmodifier WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatewh);
        
        }else
        {
            $message = "Not enough Money ";
echo "<script type='text/javascript'>alert('$message');</script>";
        }
       }
       if($advis==3)
       {
                      $checkmon = "SELECT money FROM user  WHERE ID='$uid'";
$result = $db_link->query($checkmon)or die($db_link->error);
$mon = $result->fetch_assoc();
$mon = $mon['money'];

$adv = "SELECT advisor1id FROM user  WHERE ID='$uid'";
$result = $db_link->query($adv)or die($db_link->error);
$adv = $result->fetch_assoc();
$adv = $adv['advisor1id'];

        if($mon>$locfundmodifier)
        {
        
           $sqlupdatewh = "UPDATE user SET advisor1id =3 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatewh);
        $sqlupdatewh = "UPDATE user SET money =money-$locfundmodifier WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatewh);
        
        }else
        {
            $message = "Not enough Money ";
echo "<script type='text/javascript'>alert('$message');</script>";
        }
       }
       if($advis==4)
       {
                      $checkmon = "SELECT money FROM user  WHERE ID='$uid'";
$result = $db_link->query($checkmon)or die($db_link->error);
$mon = $result->fetch_assoc();
$mon = $mon['money'];

$adv = "SELECT advisor1id FROM user  WHERE ID='$uid'";
$result = $db_link->query($adv)or die($db_link->error);
$adv = $result->fetch_assoc();
$adv = $adv['advisor1id'];

        if($mon>$locfundmodifier)
        {
        
           $sqlupdatewh = "UPDATE user SET advisor1id =4 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatewh);
        $sqlupdatewh = "UPDATE user SET money =money-$locfundmodifier WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatewh);
        
        }else
        {
            $message = "Not enough Money ";
echo "<script type='text/javascript'>alert('$message');</script>";
        }
       }
       if($advis==5)
       {
                      $checkmon = "SELECT money FROM user  WHERE ID='$uid'";
$result = $db_link->query($checkmon)or die($db_link->error);
$mon = $result->fetch_assoc();
$mon = $mon['money'];

$adv = "SELECT advisor1id FROM user  WHERE ID='$uid'";
$result = $db_link->query($adv)or die($db_link->error);
$adv = $result->fetch_assoc();
$adv = $adv['advisor1id'];

        if($mon>$locfundmodifier)
        {
        
           $sqlupdatewh = "UPDATE user SET advisor1id =5 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatewh);
        $sqlupdatewh = "UPDATE user SET money =money-$locfundmodifier WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatewh);
        
        }else
        {
            $message = "Not enough Money ";
echo "<script type='text/javascript'>alert('$message');</script>";
        }
       }
       if($advis==6)
       {
                      $checkmon = "SELECT actionp FROM user WHERE ID='$uid'";
$result = $db_link->query($checkmon)or die($db_link->error);
$act = $result->fetch_assoc();
$act = $act['actionp'];

$adv = "SELECT advisor1id FROM user  WHERE ID='$uid'";
$result = $db_link->query($adv)or die($db_link->error);
$adv = $result->fetch_assoc();
$adv = $adv['advisor1id'];

        if($adv<50)
        {
        
           $sqlupdatewh = "UPDATE user SET advisor1id =6 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatewh);
        $sqlupdatewh = "UPDATE user SET actionp =actionp-50 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatewh);
        
        }else
        {
            $message = "Not enough Actions ";
echo "<script type='text/javascript'>alert('$message');</script>";
        }
       }

   }




?>
<br><br><br>
        </body>
    </head>
</html>