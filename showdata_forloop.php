<?php 

require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result = mysqli_query($connect,$sql);

$count = mysqli_num_rows($result);


for($i=0; $i<$count; $i++){

	$row=mysqli_fetch_object($result);

	echo "ລະຫັດພະນັກງານ = ".$row->id."<br>";
	echo "ຊື່ = ".$row->fname."<br>";
	echo "ນາມສະກຸນ = ".$row->lname."<br>";
	echo "ເພດ = ".$row->gender."<br>";
	echo "ທັກສະ = ".$row->skill."<br>";
	echo "<hr>";


	/*$row=mysqli_fetch_array($result,MYSQLI_NUM);
	echo "ລະຫັດພະນັກງານ = ".$row[0]."<br>";
	echo "ຊື່ = ".$row[1]."<br>";
	echo "ນາມສະກຸນ = ".$row[2]."<br>";
	echo "ເພດ = ".$row[3]."<br>";
	echo "ທັກສະ = ".$row[4]."<br>";
	echo "<hr>";*/

	/*$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	echo "ລະຫັດພະນັກງານ = ".$row["id"]."<br>";
	echo "ຊື່ = ".$row["fname"]."<br>";
	echo "ນາມສະກຸນ = ".$row["lname"]."<br>";
	echo "ເພດ = ".$row["gender"]."<br>";
	echo "ທັກສະ = ".$row["skill"]."<br>";
	echo "<hr>";*/
}

?>