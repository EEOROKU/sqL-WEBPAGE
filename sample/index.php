<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Insert the data into the database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    mysqli_query($conn, $sql);
    
    echo "Registration successful!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post" action="connect.php">
        <label>Name:</label>
        <input type="text" name="name" id="name"><br><br>
        
        <label>Email:</label>
        <input type="email" name="email" id="email"><br><br>
        
        <label>Password:</label>
        <input type="password" name="password" id="password"><br><br>
        
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
