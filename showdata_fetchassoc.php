<?php 
require('dbconnect.php');


$sql = "SELECT * FROM employees";
$result=mysqli_query($connect,$sql);



$row=mysqli_fetch_assoc($result);
//ສະແດງເບີ່ງໂຄງສ້າງ ອາເລ
print_r($row);
print("<br>");
print("<hr>");

echo "ລະຫັດພະນັກງານ".$row["id"]."<br>";
echo "ລະຫັດພະນັກງານ".$row["fname"]."<br>";
echo "ລະຫັດພະນັກງານ".$row["lname"]."<br>";
echo "ລະຫັດພະນັກງານ".$row["gender"]."<br>";
echo "ລະຫັດພະນັກງານ".$row["skill"]."<br>";
echo "<hr>";

$row=mysqli_fetch_assoc($result);

echo "ລະຫັດພະນັກງານ".$row["id"]."<br>";
echo "ລະຫັດພະນັກງານ".$row["fname"]."<br>";
echo "ລະຫັດພະນັກງານ".$row["lname"]."<br>";
echo "ລະຫັດພະນັກງານ".$row["gender"]."<br>";
echo "ລະຫັດພະນັກງານ".$row["skill"]."<br>";
echo "<hr>";

$row=mysqli_fetch_assoc($result);

echo "ລະຫັດພະນັກງານ: ".$row["id"]."<br>";
echo "ລະຫັດພະນັກງານ: ".$row["fname"]."<br>";
echo "ລະຫັດພະນັກງານ: ".$row["lname"]."<br>";
echo "ລະຫັດພະນັກງານ: ".$row["gender"]."<br>";
echo "ລະຫັດພະນັກງານ: ".$row["skill"]."<br>";
echo "<hr>";

?>