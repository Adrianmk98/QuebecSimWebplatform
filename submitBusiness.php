<?php
session_start();

// Check if the user is logged in
if (!(isset($_SESSION['loggedin']))) {
    header("Location: login.html");
    die();
} else {
    include 'includes/sqlcall.php';
    include 'includes/topbar.php';
    $pid = $_SESSION["loggedin"];
    $sqlhours = "UPDATE user SET hoursinactive = 0 WHERE ID = '$pid'";
    mysqli_query($db_link, $sqlhours);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize inputs
    $pressFlairID = filter_var($_POST['flair_id'], FILTER_SANITIZE_NUMBER_INT); // Sanitize the flair ID
    $pressTitle = filter_var($_POST['title'], FILTER_SANITIZE_STRING); // Sanitize the title
    $pressContent = $_POST['content']; // Content is handled by Quill, so we just store the HTML

    // Validate the inputs
    if (empty($pressFlairID) || empty($pressTitle) || empty($pressContent)) {
        echo "<p>Error: Please ensure all fields are filled in.</p>";
        exit;
    }

    // If you want more specific validation, like the title length:
    if (strlen($pressTitle) < 5 || strlen($pressTitle) > 100) {
        echo "<p>Error: Title must be between 5 and 100 characters.</p>";
        exit;
    }

    // Ensure pressFlairID is one of the allowed values (1, 2, or 3)
    if (!in_array($pressFlairID, [1, 2, 3,4,5,6,7,8,9])) {
        echo "<p>Error: Invalid flair ID.</p>";
        exit;
    }

    $createdAt = date('Y-m-d H:i:s'); // Get current timestamp

    // Prepare the SQL statement with the correct number of placeholders
    $stmt = $db_link->prepare("INSERT INTO `bills` (`flairID`, `pressTitle`, `authorID`, `billContent`, `createdAT`) VALUES (?, ?, ?, ?, ?)");

    // Check if the statement is valid
    if ($stmt === false) {
        die('MySQL prepare failed: ' . $db_link->error);
    }

    // Bind the correct number of parameters
    $stmt->bind_param("issss", $pressFlairID, $pressTitle, $pid, $pressContent, $createdAt);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<p>Press entry created successfully!</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    // Close the statement
    $stmt->close();
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Press Entry</title>
    <!-- Include Quill.js -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 600px;
            margin: auto;
        }
        input, select, button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        #editor {
            height: 300px;  /* Height of the Quill editor */
            background-color: white; /* Solid white background */
            border: 1px solid #ccc; /* Border to give the editor a clear boundary */
            padding: 10px; /* Optional padding inside the editor */
        }

        /* Custom styles to remove transparency from Quill toolbar buttons */
        .ql-toolbar {
            background-color: #f8f9fa;  /* Light background for toolbar */
            border: 1px solid #ccc;  /* Border around toolbar */
            border-radius: 5px;  /* Optional rounded corners */
        }
        .ql-toolbar button {
            background-color: #ffffff !important;  /* Solid white background */
            border: 1px solid #ccc;  /* Add border to buttons */
            border-radius: 3px;  /* Rounded corners for buttons */
            color: #007bff;  /* Button text color */
            padding: 5px 10px;  /* Padding inside buttons */
        }
        .ql-toolbar button:hover {
            background-color: #f0f0f0;  /* Slight background change on hover */
        }
        .ql-toolbar .ql-active {
            background-color: #007bff;  /* Active button background */
            color: white;  /* Change active button text to white */
        }
    </style>
</head>
<body>
<h1>Create Bill Entry</h1>
<form method="POST" action="">
    <label for="flair_id">Flair:</label>
    <select id="flair_id" name="flair_id" required>
        <option value="1">Bill</option>
        <option value="2">Motion</option>
        <option value="3">Unanimous Consent Motion</option>
        <option value="4">Point of Order</option>
        <option value="5">Question of Privilege</option>
        <option value="6">Unanimous Consent Motion</option>
        <option value="7">Document for Tabling</option>
        <option value="8">Statement by Minister</option>
        <option value="9">Notice of Closure</option>
    </select>

    <label for="title">Bill Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="content">Bill Content:</label>
    <div id="editor"></div>
    <input type="hidden" name="content" id="content">  <!-- Hidden input for storing editor content -->

    <button type="submit">Submit</button>
</form>

<script>
    // Initialize the Quill editor
    var quill = new Quill('#editor', {
        theme: 'snow',  // Snow theme for the editor
        modules: {
            toolbar: [
                [{ 'header': '1'}, {'header': '2'}, { 'font': [] }], // Formatting
                [{ 'list': 'ordered'}, { 'list': 'bullet' }], // List types
                [{ 'align': [] }], // Alignment options
                ['bold', 'italic', 'underline'], // Text styles
                ['link'], // Insert link
                ['image'] // Insert image
            ]
        }
    });

    // Handle form submission to add editor content into hidden input
    document.querySelector('form').onsubmit = function () {
        var content = document.querySelector('#content');
        content.value = quill.root.innerHTML;  // Save the content from the editor
    };
</script>
</body>
</html>
