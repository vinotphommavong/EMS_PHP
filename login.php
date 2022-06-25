<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        
        session_start();
        require('dbconnect.php');

        if(isset($_POST['username'])){
            //removes backslashes
            $username = stripslashes($_REQUEST['username']);
            //escapes special character in string
            $username = mysqli_real_escape_string($connect,$username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($connect,$password);
            
            //checking if user existing in the database or not
            $query = "SELECT * FROM users WHERE username='$username' AND password='".md5($password). "' ";

            $result = mysqli_query($connect,$query) or die(mysqli_error());
            $rows = mysqli_num_rows($result);

            if($rows == 1){
                $_SESSION['username'] = $username;
                header("location: dashboard.php");
            }else{
                echo "<div class='form'>
                    <h3>Username/Password is incorrect.</h3>
                    <br>Click here to <a href='login.php'> Login</a>
                </div>";
            }
        }else{ ?>
            <div class="form">
                <h1>Log in</h1>
                <form action="" name="login" method="POST"> 
                    <input type="text" name="username" placeholder="insert your name" required>
                    <input type="password" name="password" placeholder="insert your Pass" required><br>
                    <input type="submit" value="Login" name="submit">

                </form>
                <p>Not registered yet ? <a href="registration.php">Registration</a></p>
            </div>

<?php   }    ?>
</body>
</html>