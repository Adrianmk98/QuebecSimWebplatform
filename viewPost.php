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
    $postID=$_GET['pressID'];
}?>
<html>
<header>

    <title>Profile
    </title>
    <div class="card">
    <?php
    $stmt = $db_link->prepare("SELECT pressID,pressFlairID, authorID,pressTitle,pressContent FROM press WHERE pressID = ?");
    $stmt->bind_param("i", $postID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<li><h1>";
            echo $row['pressTitle'];
            echo "</h1>".$row['pressFlairID'];
            echo "By". $row['authorID'];
            echo $row['pressContent'];
            echo "<br></li>";
        }
        echo "</ul>";
    } else {
        echo "No press posts found.";
    }

    $stmt->close();
    $db_link->close();
    ?>
    </div>
</header>