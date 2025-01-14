<?php
ob_start();
$username = filter_input(INPUT_POST, 'userid');
$password = filter_input(INPUT_POST, 'userpassword');
$email = filter_input(INPUT_POST, 'useremail');
$cname = filter_input(INPUT_POST, 'charname');
$cpic = "BsbrGmJ.jpg";
$authl = $_POST['auth'];
$econl = $_POST['econ'];
$cstate = $_POST['states'];
$caction=0;
$cmoney=0;
if(!empty($username)){
if(!empty($password)){
$host = "localhost";
$dbusername = "mfp6cy5i_account";
$dbpassword = "V6L42aD3";
$dbname = "mfp6cy5i_republica";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
session_start();

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
    $mysql_get_users = mysqli_query($conn,"SELECT * FROM accounts where Username='$username'");

$get_rows = mysqli_affected_rows($conn);

if($get_rows >=1){
$messagep = "Username in Use";
echo "<script type='text/javascript'>alert('$messagep');</script>";
header("Refresh: 2; url=register.html");
exit();
}
    $mysql_get_cname = mysqli_query($conn,"SELECT * FROM user where cname='$cname'");

$get_cname = mysqli_affected_rows($conn);

if($get_cname >=1){
$messagep = "Character Name in Use";
echo "<script type='text/javascript'>alert('$messagep');</script>";
header("Refresh: 2; url=register.html");
exit();
}

if(strlen($password) < 6)
{
$messagep = "Password too Short";
echo "<script type='text/javascript'>alert('$messagep');</script>";
header("Refresh: 2; url=register.html");
exit();
}
$sqlaccount = "INSERT INTO accounts (Username, Password, Email)
values ('$username','$password','$email')";
$sqluser = "INSERT INTO user (cpic, cname, state,money,actionp)
values ('$cpic','$cname','$cstate','$cmoney','$caction')";
if ($conn->query($sqlaccount) && $conn->query($sqluser)){
header("Location: quiz.php");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
$messagep = "No Password";
echo "<script type='text/javascript'>alert('$messagep');</script>";
header("Refresh: 2; url=register.html");

}}
else{
$messageu = "No Username";
echo "<script type='text/javascript'>alert('$messageu');</script>";
header("Refresh: 2; url=register.html");

}

?>
