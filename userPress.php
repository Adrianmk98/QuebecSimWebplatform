<?php session_start();
if (!(isset($_SESSION['loggedin'])))//FLIP AFTER DONE
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
}?>
    <html>
    <header>

        <title>Profile
        </title>
<?php
$uid=$_GET['id'];
$stmt = $db_link->prepare("SELECT pressID, pressTitle FROM press WHERE authorID = ?");
$stmt->bind_param("i", $uid);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>";
        echo "<a href='viewPost.php?pressID=" . $row['pressID'] . "'>" . htmlspecialchars($row['pressTitle']) . "</a>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "No press posts found.";
}

$stmt->close();
$db_link->close();
?>
