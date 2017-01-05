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

$sql = "SELECT name, textarea FROM blogs";
$result = $db->query($sql);

if ($result ->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "$row[name]" . " "  . "$row[textarea] <br>";
    }
}
else {
    echo "0 results";
}

// Close the connection
$db->close();

?>
