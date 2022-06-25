<?php 

$connect=mysqli_connect("localhost","root", "", "mydata");

mysqli_query($connect,"set names 'utf8' ");

if(mysqli_connect_error()){
    echo"Fail to connect to MySQL:" . mysqli_connect_error();
}



?>