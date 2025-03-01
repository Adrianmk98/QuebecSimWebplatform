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
    <link rel="stylesheet" href="tableStyle.css">
    <link rel="stylesheet" href="headerStyle.css">
    <link rel="stylesheet" href="partyStyle.css">
    <div class="card">
    <?php
    $stmt = $db_link->prepare("SELECT pressID,pressFlairID, authorID,pressTitle,pressContent FROM press WHERE pressID = ?");
    $stmt->bind_param("i", $postID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $playerID=$row['authorID'];
            $AuthorName="SELECT cname from user where ID=$playerID";
            $result = $db_link->query($AuthorName)or die($db_link->error);
            $username = $result->fetch_assoc();
            $username = $username['cname'];

            if($row['pressFlairID']==1)
            {
                $flairname="Press";
            }
            if($row['pressFlairID']==2)
            {
                $flairname="Government Business";
            }
            if($row['pressFlairID']==3)
            {
                $flairname="Media";
            }
            echo "<li><h1>";
            echo $row['pressTitle']."<br>";
            echo "</h1><h3>".$flairname."</h3><br>";
            echo "By ". $username."<br>";
            echo $row['pressContent']."<br>";
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