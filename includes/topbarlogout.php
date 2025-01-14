   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php
   include '/home1/murvetop/includes/sqlcall.php';
   $uid=$_GET[id];
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
$ination = "SELECT nation_influ FROM user  WHERE ID='$uid'";
$result = $db_link->query($ination)or die($db_link->error);
$nation_influ = $result->fetch_assoc();
$nation_influ = $nation_influ['nation_influ'];
$authorityp = "SELECT auth FROM user  WHERE ID='$uid'";
$result = $db_link->query($authorityp)or die($db_link->error);
$auth = $result->fetch_assoc();
$auth = $auth['auth'];
$economicp = "SELECT econ FROM user  WHERE ID='$uid'";
$result = $db_link->query($economicp)or die($db_link->error);
$econ = $result->fetch_assoc();
$econ = $econ['econ'];
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
$pstatep = "SELECT state FROM user  WHERE ID='$pid'";
$result = $db_link->query($pstatep)or die($db_link->error);
$pstate = $result->fetch_assoc();
$pstate = $pstate['state'];
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
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
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
  z-index: 1;
  
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
  width: 50%;
  text-align: center;
  border-collapse: collapse;
}
table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 75%;
  text-align: center;
  border-collapse: collapse;
}
table.blueTablemap {
  width: 50%;
  text-align: center;
  border-collapse: collapse;
  position: absolute;
  top: 80%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)
}
table.blueTablec {
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
.dropdown {
  float: left;
  overflow: hidden;
}
  
  .dropdown .dropbtn {
  font-size: 17px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
   text-align: center;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
  .dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 450px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}
input[type=submit] {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover, {
  opacity: 0.7;
}
.rdot {
  height: 18px;
  width: 18px;
  background-color: #DC143C;
  border-radius: 50%;
  display: inline-block;
}
.gdot {
  height: 18px;
  width: 18px;
  background-color: #7FFF00;
  border-radius: 50%;
  display: inline-block;
}
textarea {
  resize: none;
  border: 3px solid #cccccc;
  font-family: Tahoma, sans-serif;
}
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 250px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -125px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
.notification {
  color: white;
  text-decoration: none;
  padding: 16px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: 8px;
  right: -8px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
}
</style>
<body>
    <?php
$result = $db_link->query($sql);
$service = $result->fetch_assoc();
$service = $service['ID'];



?>
<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="map.php">Map</a>
  
  <div class="dropdown">

      <i class="fa fa-caret-down"></i>
    </button>

      </div>
   <div class="dropdown">
    <button class="dropbtn">Executive
      <i class="fa fa-caret-down"></i>
    </button>
  <div class="dropdown-content">
      <a href="#" >Executive</a>
      <a href="#" >Presidential Election</a>
      <a href="#" >Presidential Primary</a>
      <a href="#" >Presidential History</a>
      
      </div>
      </div>
   <div class="dropdown">
    <button class="dropbtn">Legislature
      <i class="fa fa-caret-down"></i>
    </button>
  <div class="dropdown-content">
      <a href="#" >Senate</a>
      <a href="#" >House</a>
      <a href="#" >Senate History</a>
      <a href="#" >House History</a>
      
      </div>
      </div>
      <div class="dropdown">
    <button class="dropbtn">Parties
      <i class="fa fa-caret-down"></i>
    </button>
  <div class="dropdown-content">
      <a href="parties.php" >Party List</a>
      
      </div>
      
      </div>
<a href="login.html">Login</a>


</a>
</div>
