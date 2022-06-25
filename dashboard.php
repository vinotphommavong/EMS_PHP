<?php 
    require('dbconnect.php');
    include('auth.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form">
        <p> DashBoard</p>
        <p>This is Dashboard and Secure area !</p>
        <p><a href="index.php">Home</a></p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>