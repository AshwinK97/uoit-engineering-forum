<?php
    // local connection string
    //$db = new mysqli('localhost', 'root', '', 'lab');
    $db = new mysqli('sofe2800.cbcmxpmm0m7s.us-east-1.rds.amazonaws.com', 'admin', 'sofe2800project', 'lab');
    if($db->connect_errno > 0){
        echo "ERROR";
        die('Unable to connect to database [' . $db->connect_error . ']');
    }

    // SQL query as a prepared statemement
    $query = $db->prepare("INSERT INTO comments(postID, name, comment) VALUES (?, ?, ?)");

    // These should be retrieved from POST variables
    $postID = $_POST["postID"];
    $name = $_POST["name"];
    $comment = $_POST["comment"];

    // Bind the parameters to the SQL query above, i is int and s is string
    $query->bind_param("iss", $postID, $name, $comment);

    // Execute the query, inserting the data
    $query->execute();

    // Close the connection
    $query->close();
    $db->close();

    // return to the forum
    header('Location: forum.php');
?>
