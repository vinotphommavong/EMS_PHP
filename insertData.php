<?php 
//ເຊື່ອມຕໍ່ຖານຂໍ້ມູນ
require('dbconnect.php');

//ຮັບຄ່າທີ່ສົງມາຈາກຟອມລົງໃນຕົວແປ
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];

$emskill=implode(",",$_POST["skills"]);


//ບັນທຶກຂໍ້ມູນ
$sql = "INSERT INTO employees(fname,lname,gender,skill) VALUES ('$fname','$lname','$gender','$emskill')";



$result=mysqli_query($connect,$sql); //ສັ່ງແລ່ນຄຳສັງ sql

if($result){
	//echo " ບັນທຶກຂໍ້ມູນສຳເລັດແລ້ວ";
	//echo '<a href="insertForm.php"> ກັບຄືນໜ້າເພີ່ມພະນັກງານ</a>';

	header("location:index.php");
	exit(0);
}else{
	echo mysqli_error($connect);
}


?>
