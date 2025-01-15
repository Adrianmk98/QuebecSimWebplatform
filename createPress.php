<?php session_start();
if (!(isset($_SESSION['loggedin'])))
{
    //header("Location: login.html");
    // die();
}else
{
    include 'includes/sqlcall.php';
    include 'includes/topbar.php';
    $pid=$_SESSION["loggedin"];
    $sqlhours = "UPDATE user SET hoursinactive =0 WHERE ID='$pid'";
    mysqli_query($db_link, $sqlhours);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pressFlairID = $_POST['flair_id']; // Get the flair ID from the dropdown
    $pressTitle = $_POST['title'];
    $pressContent = $_POST['content'];  // The content from Quill
    $createdAt = date('Y-m-d H:i:s');  // Get current timestamp

    // Prepare and execute the SQL statement, including createdAt for the timestamp
    $stmt = $db_link->prepare("INSERT INTO `press` (`pressFlairID`, `pressTitle`,`AuthorID`, `pressContent`, `createdAt`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $pressFlairID, $pressTitle,$pid, $pressContent, $createdAt);

    if ($stmt->execute()) {
        echo "<p>Press entry created successfully!</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
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
            margin: 20px;
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
    </style>
</head>
<body>
<h1>Create Press Entry</h1>
<form method="POST" action="">
    <label for="flair_id">Flair:</label>
    <select id="flair_id" name="flair_id" required>
        <option value="1">Press</option>
        <option value="2">Government Business</option>
        <option value="3">Media</option>
    </select>

    <label for="title">Press Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="content">Press Content:</label>
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
                [{ 'header': '1'}, {'header': '2'}, { 'font': [] }],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'align': [] }],
                ['bold', 'italic', 'underline'],
                ['link'],
                ['image']
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

