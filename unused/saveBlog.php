<?php
// connection string
$db = new mysqli('localhost', 'root', '', 'lab');

// TODO You must process the POST data from the form and then set the variables
// below to be inserted in the database

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}
else
  echo "SUCCESS";

// Insert sample data into the database
$blogs = $db->prepare("INSERT INTO users(name, textarea) VALUES (?, ?)");

// These should be retrieved from POST variables
$name = $_POST["name"];
$message = $_POST["comment"];

// Bind the parameters to the SQL query above, s is a string i is an integer
$blogs->bind_param("ss", $name, $message);

// Execute the query, inserting the data
$blogs->execute();

// Close the connection
$blogs->close();
$db->close();

?>
