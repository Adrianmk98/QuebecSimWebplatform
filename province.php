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

// Array to store data by position
$data = [];

// Loop through position IDs 1 to 3
for ($positionid = 1; $positionid <= 3; $positionid++) {
    // Query to fetch cname and cpic together
    $sql = "SELECT cname, cpic FROM user WHERE state='$state' AND positionid=$positionid";
    $result = $db_link->query($sql) or die($db_link->error);

    // Check if a result exists
    if ($result && $row = $result->fetch_assoc()) {
        $data[$positionid] = [
            'cname' => $row['cname'] ?? null,
            'cpic' => $row['cpic'] ?? null
        ];
    } else {
        // Default to null if no result
        $data[$positionid] = [
            'cname' => null,
            'cpic' => null
        ];
    }
}

// Access data
$cnamegov = $data[1]['cname'];
$cpicgov = $data[1]['cpic'];
$cnames1 = $data[2]['cname'];
$cpics1 = $data[2]['cpic'];
$cnames2 = $data[3]['cname'];
$cpics2 = $data[3]['cpic'];



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
                      ?>
                  </td>
                  <td>
                      Senator <br>
                      <img src="https://i.imgur.com/<?php echo $cpics1; ?>" alt="Character" max-width="100" height="64"><br>
                      <a href="profile.php?id=<?php echo $idSen1 ?>"><?php echo $cnames1 ?></a>
                      <?php
                      
                      
                      ?> <br>
                  </td>
                  <td>
                      Senator <br>
                      <img src="https://i.imgur.com/<?php echo $cpics2; ?>" alt="Character" max-width="100" height="64"><br>
                      <a href="profile.php?id=<?php echo $idSen2 ?>"><?php echo $cnames2 ?></a>
                      <?php
                    
                    ?> <br>
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
        include 'includes/electionInfo.php';
        ?>
      
  </span>
  </div>
<br>

<div class="popup" onclick="myFunctionemail()"><span style='font-size:50px;'>🌎</span>
  <span class="popuptext" style="background: transparent;" id="myPopupemail">
      
        
        <?php
        $ELECTIONPOSITIONNUMID=1;
        $thecall='includes/maps/'.$state.'map'.'.php';
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
<br><?php
}
?>

️<div class="popup" onclick="OpenElectionSSen()"><span style='font-size:50px;'>🗳</span>
  <span class="popuptext" style="background: transparent;" id="OpenElectionSSen">
      
      
      <?php
        $ELECTIONPOSITIONNUMID=2;
        include 'includes/electionInfo.php';
        ?>
      
  </span>

</div>
<br>
<div class="popup" onclick="myFunctionemail2()"><span style='font-size:50px;'>🌎</span>
  <span class="popuptext" style="background: transparent;" id="myPopupemail2">
        
        <?php
        $ELECTIONPOSITIONNUMID=2;
        $thecall='includes/maps/'.$state.'map'.'.php';
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
<br><?php
}
   ?>
   ️<div class="popup" onclick="OpenElectionJSen()"><span style='font-size:50px;'>🗳</span>
  <span class="popuptext" style="background: transparent;" id="OpenElectionJSen">
      
      
      <?php
        $ELECTIONPOSITIONNUMID=3;
        include 'includes/electionInfo.php';
        ?>
      
  </span></div>
<br>
   <div class="popup" onclick="myFunctionemail3()"><span style='font-size:50px;'>🌎</span>
  <span class="popuptext" style="background: transparent;" id="myPopupemail3">
        
        <?php
        $ELECTIONPOSITIONNUMID=3;
        $thecall='includes/maps/'.$state.'map'.'.php';
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
    include 'includes/sqlcall.php';
    $states=$_GET['state'];
$q1 = mysqli_query($db_link, "SELECT ID, cname, state_influ FROM user WHERE state='$states' ORDER BY state_influ DESC");

$rows = [];
if ($q1) {
    while ($row = mysqli_fetch_assoc($q1)) {
        $rows[] = $row; // Add only valid rows to the array
    }
}
?>
    <table class="blueTableplayers">
        <tbody>
        <tr>
            <td>Name</td>
            <td>State Influence</td>
        </tr>
        <?php
        if (!empty($rows)) {
            foreach ($rows as $row) {
                if (!empty($row['ID'])) { // Ensure ID is valid
                    ?>
                    <tr>
                        <td>
                            <a href="profile.php?id=<?php echo htmlspecialchars($row['ID']); ?>">
                                <?php echo htmlspecialchars($row['cname']); ?>
                            </a>
                        </td>
                        <td><?php echo htmlspecialchars($row['state_influ']); ?></td>
                    </tr>
                    <?php
                }
            }
        } else {
            // Display a message if no rows are returned
            echo "<tr><td colspan='2'>No players found.</td></tr>";
        }
        }
        ?>
        </tbody>
    </table>

    <br><br><br>
</center>