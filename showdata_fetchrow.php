<?php 
require('dbconnect.php');


$sql = "SELECT * FROM employees";
$result=mysqli_query($connect,$sql);

$row=mysqli_fetch_row($result);
//ສະແດງເບີ່ງໂຄງສ້າງ ອາເລ
print_r($row);
print("<br>");
print("<hr>");

echo "ລະຫັດພະນັກງານ = ".$row[0]."<br>";
echo "ຊື່ = ".$row[1]."<br>";
echo "ນາມສະກຸນ = ".$row[2]."<br>";
echo "ເພດ = ".$row[3]."<br>";
echo "ທັກສະ = ".$row[4]."<br>";
echo "<hr>";

$row=mysqli_fetch_row($result);

echo "ລະຫັດພະນັກງານ = ".$row[0]."<br>";
echo "ຊື່ = ".$row[1]."<br>";
echo "ນາມສະກຸນ = ".$row[2]."<br>";
echo "ເພດ = ".$row[3]."<br>";
echo "ທັກສະ = ".$row[4]."<br>";
echo "<hr>";

?>