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
<h1>Premier</h1>
<div class="card">
    <img src="https://i.imgur.com/<?php echo $cpic; ?>" max-width="200" height="150" alt="playerpic">
    <h1>
        <?php echo $cname; ?>
    </h1>

</div><br><br>
<table>
    <tr><th>HM Government Cabinet Positions</th><th>Name</th><th>Party</th></tr>
    <tr>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    </tbody>
</table>
</html>