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
$mstate = "SELECT state FROM user  WHERE ID='$pid'";
$result = $db_link->query($mstate)or die($db_link->error);
$mystate = $result->fetch_assoc();
$state = $mystate['state'];

$state=$_GET['state'];

$sql = "SELECT cname FROM user  WHERE state='$state' && positionid=1";
$result = $db_link->query($sql)or die($db_link->error);
$cname = $result->fetch_assoc();
$cnamegov = $cname['cname'];

$pic = "SELECT cpic FROM user  WHERE state='$state' && positionid=1";
$result = $db_link->query($pic)or die($db_link->error);
$cpic = $result->fetch_assoc();
$cpicgov = $cpic['cpic'];
$sql = "SELECT cname FROM user  WHERE state='$state' && positionid=2";
$result = $db_link->query($sql)or die($db_link->error);
$cname = $result->fetch_assoc();
$cnames1 = $cname['cname'];
$pic = "SELECT cpic FROM user  WHERE state='$state' && positionid=2";
$result = $db_link->query($pic)or die($db_link->error);
$cpic = $result->fetch_assoc();
$cpics1 = $cpic['cpic'];

$sql = "SELECT cname FROM user  WHERE state='$state' && positionid=3";
$result = $db_link->query($sql)or die($db_link->error);
$cname = $result->fetch_assoc();
$cnames2 = $cname['cname'];
$pic = "SELECT cpic FROM user  WHERE state='$state' && positionid=3";
$result = $db_link->query($pic)or die($db_link->error);
$cpic = $result->fetch_assoc();
$cpics2 = $cpic['cpic'];


?>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

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
table.bluesTable {
  background-color: transparent;
  min-width:100px
  width: 30%;
  text-align: center;
  border-collapse: collapse;
}
table.bluesTable td, table.blueTable th {
  padding: 3px 2px;
}
table.bluesTable tbody td {
  font-size: 13px;
}
table.bluesTable tr:nth-child(even) {
  background: #D0E4F5;
  border: 1px solid #AAAAAA;
}
table.electionTable {
  background-color: transparent;
  min-width:100px
  width: 50%;
  text-align: center;
  border-collapse: collapse;
}
table.blueTableplayers {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 30%;
  text-align: center;
  border-collapse: collapse;
}
table.blueTableplayers td, table.blueTableplayers th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.blueTableplayers tbody td {
  font-size: 13px;
}
table.blueTableplayers tr:nth-child(even) {
  background: #D0E4F5;
}
</style>
<?php

$state=$_GET['state'];
?><center>
<br><?php

$statename = "SELECT statename FROM states WHERE stateid='$state'";
$result = $db_link->query($statename)or die($db_link->error);
$statename = $result->fetch_assoc();
$statename = $statename['statename'];
echo $statename;

?> <br>
<img src='flags/<?php echo strtolower("$state"); ?>.png' alt="" width="150" height="100"><br>
<?php
   
   $self = $_SERVER['PHP_SELF'];
   $pid=$_SESSION["loggedin"];
   $parid = "SELECT partyid FROM user WHERE ID='$pid'";
$result = $db_link->query($parid)or die($db_link->error);
$pid = $result->fetch_assoc();
$pid = $pid['partyid'];
?>
<table class="bluesTable">
     <tbody><tr><td>
              <form action="<?php echo $self ?>?state=<?php echo $state ?>" method="POST">
                  </td><td>
                  <button type="submit" width="50%" name="cstate">Relocate</button></td>
                  <?php 
                  if($pid != 0)
                  {
                      ?>
                  <td><button type="submit" width="50%" name="istate">Increase Party Influence</button></td>
                  <?php } ?>
                  </form></tr></tbody></table>
                  
                  <form action="<?php echo $self ?>?state=<?php echo $state ?>" method="POST">
                     
                     
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        <?php

$state=$_GET['state'];
$statelower=strtolower("$state");
$statelower='i'.$statelower;
$paridnames = "SELECT pname,$statelower,partycolour FROM parties WHERE $statelower>0";
$result = $db_link->query($paridnames)or die($db_link->error);


        ?>
        var data = google.visualization.arrayToDataTable([
            ['Party Name','Party Influence'],
            <?php
            while($row = mysqli_fetch_assoc($result))
            {
                echo "['".$row['pname']."',".$row[$statelower]."],";
            }
            ?>
          ]);

        var options = {
         
          sliceVisibilityThreshold: .1,
          legend: 'none',
          backgroundColor:'none',
        slices:{
          <?php
          $count=0;
          $paridnames = "SELECT pname,$statelower,partycolour FROM parties WHERE $statelower>0";
          $result = $db_link->query($paridnames)or die($db_link->error);
         while($row = mysqli_fetch_assoc($result))
            {
         echo $count." : { color : '".$row['partycolour']."'},";
         $count=$count+1;
         }
         ?>
        }
        };

        var chart = new google.visualization.PieChart(document.getElementById('influencechart'));

        chart.draw(data, options);
      }
    </script>
<div id="influencechart" style="width: 300px; height: 200px;"></div>

                     <table class="bluesTable">
     <tbody> <tr><td>
                  <button type="submit" name="gov">Governor Election</button></td>
                  <td><button type="submit" name="ssen">Senior Senator Election</button></td>
                  <td><button type="submit" name="jsen">Junior Senator Election</button></td></tr>
                  </form>
                  <tr><td>
                      Governor <br>
                      <img src="https://i.imgur.com/<?php echo $cpicgov; ?>" alt="Character" max-width="100" height="64"><br>
                      <?php 
                      
                        $govid = "SELECT ID FROM user  WHERE cname='$cnamegov'";
                        $result = $db_link->query($govid)or die($db_link->error);
                        $idGov = $result->fetch_assoc();
                        $idGov = $idGov['ID'];
                        ?>
                      <a href="profile.php?id=<?php echo $idGov ?>"><?php echo $cnamegov ?></a>
                      <?php
                      //echo $cnamegov;
                      
                      
                      
                      
                      ?> <br> <?php
                      echo "Time until election ".$gtime;
                      ?>
                  </td>
                  <td>
                      Senator <br>
                      <img src="https://i.imgur.com/<?php echo $cpics1; ?>" alt="Character" max-width="100" height="64"><br>
                      <?php
                      
                      $sen1id = "SELECT ID FROM user  WHERE cname='$cnames1'";
                        $result = $db_link->query($sen1id)or die($db_link->error);
                        $idSen1 = $result->fetch_assoc();
                        $idSen1 = $idSen1['ID'];
                        ?>
                      <a href="profile.php?id=<?php echo $idSen1 ?>"><?php echo $cnames1 ?></a>
                      <?php
                      
                      
                      ?> <br> <?php
                      echo "Time until election ".$sstime;
                      ?>
                  </td>
                  <td>
                      Senator <br>
                      <img src="https://i.imgur.com/<?php echo $cpics2; ?>" alt="Character" max-width="100" height="64"><br>
                    <?php 
                    
                    $sen2id = "SELECT ID FROM user  WHERE cname='$cnames2'";
                        $result = $db_link->query($sen2id)or die($db_link->error);
                        $idSen2 = $result->fetch_assoc();
                        $idSen2 = $idSen2['ID'];
                        ?>
                      <a href="profile.php?id=<?php echo $idSen2 ?>"><?php echo $cnames2 ?></a>
                      <?php
                    
                    ?> <br> <?php

                      echo "Time until election ".$jstime;
                      ?>
                  </td></tr>
                  
                  
                  
                  <?php
if ((isset($_POST['gov'])))
   {
    $state=$_GET['state'];
    $uid=$_SESSION["loggedin"];
$sqlupdateelection = "UPDATE user SET inelection =1 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdateelection);
        
   }
   if ((isset($_POST['ssen'])))
   {
    $state=$_GET['state'];
    $uid=$_SESSION["loggedin"];
$sqlupdateelection = "UPDATE user SET inelection =2 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdateelection);
        
   }
   if ((isset($_POST['jsen'])))
   {
    $state=$_GET['state'];
    $uid=$_SESSION["loggedin"];
$sqlupdateelection = "UPDATE user SET inelection =3 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdateelection);
        
   }
   $q1 = mysqli_query($db_link,"SELECT ID,cname,state_influ FROM user WHERE state='$state' and inelection=1  order by state_influ DESC");
      
while($rows1[] = mysqli_fetch_assoc($q1));
?>
<tr><td>
    
    
️
    ️<div class="popup" onclick="OpenElectionGov()"><span style='font-size:50px;'>🗳</span>
  <span class="popuptext" style="background: transparent;" id="OpenElectionGov">
      
      
      <?php
      $ELECTIONPOSITIONNUMID=1;
        include '/home1/murvetop/includes/electionInfo.php';
        ?>
      
  </span>
  </div>
<br>

<div class="popup" onclick="myFunctionemail()"><span style='font-size:50px;'>🌎</span>
  <span class="popuptext" style="background: transparent;" id="myPopupemail">
      
        
        <?php
        $ELECTIONPOSITIONNUMID=1;
        $thecall='/home1/murvetop/includes/maps/'.$state.'map'.'.php';
        include $thecall;
        ?>
  </span>
</div>
<script>
// When the user clicks on div, open the popup
function myFunctionemail() {

  var popup = document.getElementById("myPopupemail");
  popup.classList.toggle("show");
  
}
function myFunctionemail2() {
  var popup = document.getElementById("myPopupemail2");
  popup.classList.toggle("show");
}
function stayopen2() {
  var popup = document.getElementById("myPopupemail2");
  popup.classList.toggle("show");
}
function myFunctionemail3() {
  var popup = document.getElementById("myPopupemail3");
  popup.classList.toggle("show");
}
function stayopen3() {
  var popup = document.getElementById("myPopupemail3");
  popup.classList.toggle("show");
}
function OpenElectionGov() {
  var popupOpenEG = document.getElementById("OpenElectionGov");
  popupOpenEG.classList.toggle("show");
}
function OpenElectionGov() {
  var popupOpenEG = document.getElementById("OpenElectionGov");
  popupOpenEG.classList.toggle("show");
}

function OpenElectionSSen() {
  var popupOpenESS = document.getElementById("OpenElectionSSen");
  popupOpenESS.classList.toggle("show");
}

function OpenElectionJSen() {
  var popupOpenEJS = document.getElementById("OpenElectionJSen");
  popupOpenEJS.classList.toggle("show");
}


</script>


<?php
$q2 = mysqli_query($db_link,"SELECT ID,cname,state_influ FROM user WHERE state='$state' and inelection=2  order by state_influ DESC");
      
while($rows2[] = mysqli_fetch_assoc($q2));
?>
<td>
<?php
foreach($rows2 as $row2) {
    ?>
       <div id="piechartssen"></div>
    <a href="profile.php?id=<?php echo $row2['ID'] ?>"><?php echo $row2['cname'] ?></a> <?php
    echo $row2['state_influ'] ; ?><br><?php
}
?>

️<div class="popup" onclick="OpenElectionSSen()"><span style='font-size:50px;'>🗳</span>
  <span class="popuptext" style="background: transparent;" id="OpenElectionSSen">
      
      
      <?php
        $ELECTIONPOSITIONNUMID=2;
        include '/home1/murvetop/includes/electionInfo.php';
        ?>
      
  </span>

</div>
<br>
<div class="popup" onclick="myFunctionemail2()"><span style='font-size:50px;'>🌎</span>
  <span class="popuptext" style="background: transparent;" id="myPopupemail2">
        
        <?php
        $ELECTIONPOSITIONNUMID=2;
        $thecall='/home1/murvetop/includes/maps/'.$state.'map'.'.php';
        include $thecall;
        ?>
  </span>
</div>
</td>
<?php
$q3 = mysqli_query($db_link,"SELECT ID,cname,state_influ FROM user WHERE state='$state' and inelection=3  order by state_influ DESC");
      
while($rows3[] = mysqli_fetch_assoc($q3));
?>
<td>
<?php
foreach($rows3 as $row3) {
    ?>
       <div id="piechartjsen"></div>
    <a href="profile.php?id=<?php echo $row3['ID'] ?>"><?php echo $row3['cname'] ?></a> <?php
    echo $row3['state_influ'] ; ?><br><?php
}
   ?>
   ️<div class="popup" onclick="OpenElectionJSen()"><span style='font-size:50px;'>🗳</span>
  <span class="popuptext" style="background: transparent;" id="OpenElectionJSen">
      
      
      <?php
        $ELECTIONPOSITIONNUMID=3;
        include '/home1/murvetop/includes/electionInfo.php';
        ?>
      
  </span></div>
<br>
   <div class="popup" onclick="myFunctionemail3()"><span style='font-size:50px;'>🌎</span>
  <span class="popuptext" style="background: transparent;" id="myPopupemail3">
        
        <?php
        $ELECTIONPOSITIONNUMID=3;
        $thecall='/home1/murvetop/includes/maps/'.$state.'map'.'.php';
        include $thecall;
        ?>
  </span>
</div>
   </td>
   </tr>
   
   </tbody></table>
   
   <div id="piechart"></div>
   <?php
                  if ((isset($_POST['cstate'])))
   {
    $state=$_GET['state'];
    $uid=$_SESSION["loggedin"];
$sqlupdatec = "UPDATE user SET state ='$state' WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatec);
   }
   if ((isset($_POST['istate'])))
   {
    $state=$_GET['state'];
    $uid=$_SESSION["loggedin"];
$sql = "SELECT money FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$money = $result->fetch_assoc();
$money = $money['money'];
$sql = "SELECT actionp FROM user  WHERE ID='$uid'";
$result = $db_link->query($sql)or die($db_link->error);
$actionp = $result->fetch_assoc();
$actionp = $actionp['actionp'];
$nstate = "SELECT nation_influ FROM user  WHERE ID='$uid'";
$result = $db_link->query($nstate)or die($db_link->error);
$nat_influ = $result->fetch_assoc();
$nat_influ = $nat_influ['nation_influ'];

$parid = "SELECT partyid FROM user  WHERE ID='$uid'";
$result = $db_link->query($parid)or die($db_link->error);
$upartyid = $result->fetch_assoc();
$upartyid = $upartyid['partyid'];
 $pstate=$_GET['state'];
$pgrabber='i'.$pstate;
$pistate=strtolower($pgrabber);
$stpopid = "SELECT population FROM statedemo  WHERE State='$pstate'";
$result = $db_link->query($stpopid)or die($db_link->error);
$spopid = $result->fetch_assoc();
$spopid = $spopid['population'];
$influincreasemodifier=5000+$spopid*($state_influ/1000);
        if($actionp >= 5 && $nat_influ >=5 && $money >=10000)
        {
        $sqlupdatec = "UPDATE user SET money =money-10000 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatec);
        $sqlupdatep = "UPDATE user SET actionp =actionp-5 WHERE ID='$uid'";
        mysqli_query($db_link, $sqlupdatep);
        $sqlupdateinflu = "UPDATE parties SET $pistate=$pistate+1 WHERE partyid='$upartyid'";
        mysqli_query($db_link, $sqlupdateinflu);
        $messageu = "Increased Party Power in state ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
        }elseif($actionp >=5 && $stateinflu <5 && money >=10000)
        {
            $messageu = "Not enough Influence ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
        }elseif($actionp < 5 && $stateinflu >= 5 && money >=10000)
        {
            $messageu = "Not enough Actions ";
echo "<script type='text/javascript'>alert('$messageu');</script>";
        }
        elseif($actionp >= 5 && $nat_influ >=5 && money < 10000)
        {
          $messageu = "Not enough Money";
echo "<script type='text/javascript'>alert('$messageu');</script>";  
        }
        else
        {
            $messageu = "Not enough Actions and Local Influence";
echo "<script type='text/javascript'>alert('$messageu');</script>";
        } 
   }
   ?>
<?php

getvalue();
function getvalue() {
    include '/home1/murvetop/includes/sqlcall.php';
    $states=$_GET['state'];
      $q1 = mysqli_query($db_link,"SELECT ID,cname,state_influ FROM user  WHERE state='$states' order by state_influ DESC ");
while($rows[] = mysqli_fetch_assoc($q1));
?> 
<table class="blueTableplayers">
     <tbody> <tr>
         <td>
         Name
     </td><td>
         State Influence
     </td>
     </tr>
         <?php
foreach($rows as $row) {
    if ($row['ID']==0){
    }
    else{
    ?><tr><td>
    <a href="profile.php?id=<?php echo $row['ID'] ?>"><?php echo $row['cname'] ?></a></td><td><?php
    echo $row['state_influ'] ; ?></td></tr><?php
} }
?> </tbody> </table> <?php
}
?>
<br><br><br>
</center>