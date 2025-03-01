<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.html");
    die();
} else {
    include 'includes/sqlcall.php';
    include 'includes/topbar.php';
    $pid = $_SESSION["loggedin"];
    $sqlhours = "UPDATE user SET hoursinactive = 0 WHERE ID='$pid'";
    mysqli_query($db_link, $sqlhours);
}
?>
<html>
<head>
    <title>Profile</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
<div class="card">
    <h2>Press Posts</h2>
    <?php
    $uid = $_GET['id'];
    $stmt = $db_link->prepare("SELECT pressID, pressTitle,createdAT FROM press WHERE authorID = ?");
    $stmt->bind_param("i", $uid);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Post Title</th><th>Posted</th><th>Actions</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['pressTitle']) . "</td>";
            echo "<td>" . htmlspecialchars($row['createdAT']) . "</td>";
            echo "<td><a href='viewPost.php?pressID=" . $row['pressID'] . "'>View</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No press posts found.</p>";
    }

    $stmt->close();
    $db_link->close();
    ?>
</div>
</body>
</html>
