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
<head>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1808295948776802"
     crossorigin="anonymous"></script>
     </head>
<center>
<form action=<?php echo $self ?> method="POST">
  <label for="fname">Party Name</label><br>
  <input type="text" name="pname"><br>
  <label for="lname">Party Pic Link</label><br>
  <input type="text" name="ppic"><br>
  <label for="pc">Party Colour</label><br>
  <input type="color" name="pcolour"><br>
  <tr><td>Authoritarian : </td>
			<td><div class="slidecontainer">
  <input type="range" min="1" max="10" value="5" class="slider" name="pauth" >
</div></td>
		</tr>
		<tr>
			<td>Economic : </td>
			<td><div class="slidecontainer">
  <input type="range" min="1" max="10" value="5" class="slider" name="pecon" >
</div></td>
		</tr>
		<tr>
			<td>
			<p><input name="newparty" style="width: 30%;" type="submit" value="Create Party" /></p>
			</td>
</form>
</center>
<?php
$paname = $_POST['pname'];
$papic = $_POST['ppic'];
$pacolour = $_POST['pcolour'];
$paauth = $_POST['pauth'];
$paecon = $_POST['pecon'];
$pid=$_SESSION["loggedin"];
if ((isset($_POST['newparty'])))
   {
       $sqlpartyc = "INSERT INTO parties (pname,partycolour,ppic,pleaderid,pauth,pecon)
values ('$paname','$pacolour','$papic','$pid','$paauth','$paecon')";
mysqli_query($conn, $sqlpartyc);
$sql = "SELECT partyid FROM parties WHERE pname='$paname'";
$result = $conn->query($sql)or die($conn->error);
$parid = $result->fetch_assoc();
$parid = $parid['partyid'];
$sqlupdateuparty = "UPDATE user SET partyid='$parid' WHERE ID='$pid'";
        mysqli_query($conn, $sqlupdateuparty);
        $sqlupdateuparty2 = "UPDATE parties SET nummem=nummem+1 WHERE partyid='$parid'";
        mysqli_query($conn, $sqlupdateuparty2);
        header("Refresh: 2; url=parties.php");
}

   
       ?>