<?php 
require("dbconnect.php");

echo $_POST['id'];
echo $_POST['fname'];
$id = $_POST['id'];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];

$emskill=implode(",",$_POST["skills"]); // array=> string

$sql = "UPDATE employees SET fname = '$fname',lname = '$lname', gender = '$gender', skill='$emskill' WHERE id=$id";

echo $sql;
$result = mysqli_query($connect,$sql);

if($result){
	//echo "ແກ້ໄຂຂໍ້ມູນສຳເລັດ";
	header("location:index.php");
	exit(0);
}else{
	echo mysqli_error($connect);

}


?>