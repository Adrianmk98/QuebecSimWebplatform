<?php
session_start();

// Redirect to login if user is not logged in
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.html");
    exit();
}

// Include necessary files
include 'includes/sqlcall.php';
include 'includes/topbar.php';

// Reset user's inactive hours
$pid = $_SESSION["loggedin"];
$sqlhours = "UPDATE user SET hoursinactive = 0 WHERE ID = '$pid'";
mysqli_query($db_link, $sqlhours);

// Fetch user data
$userData = fetchUserData($db_link, $pid);
$stateData = fetchStateData($db_link, $pid);

// Calculate modifiers
$fundmodifier = 5000 + $stateData['population'] * ($userData['state_influ'] / 100000);
$locfundmodifier = 3 * $fundmodifier;
$natfundmodifier = 5 * $fundmodifier;

// Handle form submissions
handleFormSubmissions();

/**
 * Fetches user data from the database.
 */
function fetchUserData($db_link, $pid) {
    $data = [];
    $queries = [
        'money' => "SELECT money FROM user WHERE ID = '$pid'",
        'actionp' => "SELECT actionp FROM user WHERE ID = '$pid'",
        'state_influ' => "SELECT state_influ FROM user WHERE ID = '$pid'",
        'nation_influ' => "SELECT nation_influ FROM user WHERE ID = '$pid'"
    ];

    foreach ($queries as $key => $query) {
        $result = $db_link->query($query) or die($db_link->error);
        $data[$key] = $result->fetch_assoc()[$key];
    }

    return $data;
}

/**
 * Fetches state data from the database.
 */
function fetchStateData($db_link, $pid) {
    $stateQuery = "SELECT state FROM user WHERE ID = '$pid'";
    $result = $db_link->query($stateQuery) or die($db_link->error);
    $state = $result->fetch_assoc()['state'];

    $populationQuery = "SELECT population FROM states WHERE stateid = '$state'";
    $result = $db_link->query($populationQuery) or die($db_link->error);
    $population = $result->fetch_assoc()['population'];

    return ['state' => $state, 'population' => $population];
}

/**
 * Handles form submissions.
 */
function handleFormSubmissions() {
    if (isset($_POST['press'])) {
        echo "<script>window.open('createPress.php', '_blank');</script>";
    }
    if (isset($_POST['gcampaign'])) {
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actions</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .main {
            padding: 16px;
            margin-bottom: 30px;
        }
        .container {
            position: relative;
            text-align: center;
        }
        .text-block, .text-blockpn {
            background-color: white;
            color: black;
            display: block;
            width: 13%;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }
        table.blueaTable {
            border: 1px solid #1C6EA4;
            background-color: #EEEEEE;
            width: 30%;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
        }
        table.blueaTable td, table.blueaTable th {
            border: 1px solid #AAAAAA;
            padding: 3px 2px;
        }
        table.blueaTable tbody td {
            font-size: 13px;
        }
        table.blueaTable tr:nth-child(even) {
            background: #D0E4F5;
        }
    </style>
</head>
<body>
<table class="blueaTable">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <tbody>
        <tr>
            <td><img src="images/Press.png" alt="Press" style="width:128px;height:128px;"></td>
            <td>X Number Posted Today</td>
            <td><button type="submit" name="press">Create Press</button></td>
        </tr>
        <tr>
            <td><img src="images/Press.png" alt="Press" style="width:128px;height:128px;"></td>
            <td>Campaign</td>
            <td><button type="submit" name="gcampaign">Generic Campaigning</button></td>
        </tr>
        </tbody>
    </form>
</table>
</body>
</html>