<?php 
//ເຊື່ອມຕໍ່ຖານຂໍ້ມູນ
require('dbconnect.php');

//ຮັບຄ່າທີ່ສົງມາຈາກຟອມລົງໃນຕົວແປ
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];

$emskill=implode(",",$_POST["skills"]);//arr=>string


echo $_FILES['upload']['name'];
$tmp=explode(".",$_FILES['upload']['name']); //ແຍກfileຮູບໃຫ້ເປັນarray
$ext = end($tmp); //ເລືອກເອົາ array ໂຕສຸດທ້າຍ

$avatar = "avatars/".md5(uniqid()).".{$ext}"; //ຕັ້ງຊື່ file ໃໝ່ ແລະ ເກັບໄວ້ທີຢູ່ໃໝ່
move_uploaded_file($_FILES['upload']['tmp_name'],$avatar); //ຍ້າຍ file ຈາກ folder ຊົ່ວຄວາໄປຍັງທີ່ຢູ່ໃໝ່



//ບັນທຶກຂໍ້ມູນ
$sql = "INSERT INTO employees(fname,lname,gender,skill,av) VALUES ('$fname','$lname','$gender','$emskill','$avatar')";



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
