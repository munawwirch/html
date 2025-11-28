<?php
$message = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($name) || empty($email) || empty($password)) {
        $message = "All fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format!";
    } else {
        $message  = "Registration Successful!<br>";
        $message .= "Name: " . htmlspecialchars($name) . "<br>";
        $message .= "Email: " . htmlspecialchars($email) . "<br>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Registration</title>
</head>
<body>
<center>
<h2>Registration Form</h2>

<form method="post" action="">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Register">
</form>

<div style="margin-top: 40px; font-weight: bold;">
    <?php 
        if (!empty($message)) {
            echo $message;
        }
    ?>
</div>
</center>
</body>
</html>

