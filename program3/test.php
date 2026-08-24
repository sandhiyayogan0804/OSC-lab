<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connectivity</title>
</head>

<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

// Connect to MYSQL
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    echo "Connection Successful";
} 
else {
    echo "Connection Failed: " . mysqli_connect_error();
}

?>

</body>
</html>