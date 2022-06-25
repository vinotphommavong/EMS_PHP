<?php 
require('dbconnect.php');


$sql = "SELECT * FROM employees";
$result=mysqli_query($connect,$sql);

$row=mysqli_fetch_object($result);

var_dump($row);
print("<br>");
print("<hr>");

echo "ລະຫັດພະນັກງານ = ".$row->id."<br>";
echo "ຊື່ = ".$row->fname."<br>";
echo "ນາມສະກຸນ = ".$row->lname."<br>";
echo "ເພດ = ".$row->gender."<br>";
echo "ທັກສະ = ".$row->skill."<br>";
echo "<hr>";

$row=mysqli_fetch_object($result);

echo "ລະຫັດພະນັກງານ = ".$row->id."<br>";
echo "ຊື່ = ".$row->fname."<br>";
echo "ນາມສະກຸນ = ".$row->lname."<br>";
echo "ເພດ = ".$row->gender."<br>";
echo "ທັກສະ = ".$row->skill."<br>";
echo "<hr>";

$row=mysqli_fetch_object($result);

echo "ລະຫັດພະນັກງານ = ".$row->id."<br>";
echo "ຊື່ = ".$row->fname."<br>";
echo "ນາມສະກຸນ = ".$row->lname."<br>";
echo "ເພດ = ".$row->gender."<br>";
echo "ທັກສະ = ".$row->skill."<br>";
echo "<hr>";

?>