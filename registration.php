<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        require('dbconnect.php');
        //if form submitted, insert values to database
        if(isset($_REQUEST['username'])){
            //remove backslashes
            $username = stripslashes($_REQUEST['username']);
            //escape special charecter in a string
            $username = mysqli_real_escape_string($connect, $username);
            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($connect, $email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($connect, $password);
            $trn_date = date("Y-m-d H:i:s");

            $query = "INSERT INTO users(username, password, email, trn_date)
                                    VALUES('$username','".md5($password)."', '$email', '$trn_date')";

            $result = mysqli_query($connect, $query);

            if($result){
                echo "<div class='form'>
                    <h3> you are registered successfully</h3>
                    <br> click here to <a href='login.php'>Login</a>
                </div>";
            }

        }else{
    ?>

    <div class="form">
        <h1>Registration</h1>
        <form name="registration" action="" method="POST" >
            <input type="text" name="username" placeholder="username" require>
            <input type="email" name="email" placeholder="email" require>
            <input type="password" name="password" placeholder="password" require><br>
            <input type="submit" name="submit" value="Register">
        </form>
        <p>Click here to Login<a href="login.php">Login</a></p>
            </div>
    </div>

    <?php } ?>
</body>
</html>