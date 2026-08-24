<?php
include ('db.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback(name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New record created successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Enter your Name</label><br><br>
        <input type="text" name="name" placeholder="Enter your name" required><br><br>
        <label>Enter your Email</label><br><br>
        <input type="email" name="email" placeholder="Enter your email" required><br><br>
        <label>Enter your Message</label><br><br>
        <textarea name="message" placeholder="Enter your message"></textarea><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
<a href="view.php">view</a>
    
</body>
</html>