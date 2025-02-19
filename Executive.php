<?php session_start();
if (!(isset($_SESSION['loggedin'])))//FLIP AFTER DONE
{
    header("Location: login.html");
    die();
}else
{
    include 'includes/topbar.php';
    include 'includes/sqlcall.php';
    $pid=$_SESSION["loggedin"];
    $sqlhours = "UPDATE user SET hoursinactive =0 WHERE ID='$pid'";
    mysqli_query($db_link, $sqlhours);
}?>
<html>
<header>
    <link rel="stylesheet" href="tableStyle.css">
    <link rel="stylesheet" href="headerStyle.css">
    <link rel="stylesheet" href="executiveStyle.css">
</header>
<br><br>
<table>
    <tr><th>Position</th><th>Player</th></tr>
    <tr>
        <td>
        </td>
        <td>
        </td>
    </tr>
    </tbody>
</table>
</html>