<?php 
require("dbconnect.php");

//echo $_POST['id'];
//echo $_POST['fname'];
$id = $_POST['id'];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];

$emskill=implode(",",$_POST["skills"]); // array=> string

if($_FILES['upload']['tmp_name']){
	$tmp = explode(".",$_FILES['upload']['name']);
	$ext = end($tmp);
	$avatar = "avatars/".md5(uniqid()).".{$ext}";

	move_uploaded_file($_FILES['upload']['tmp_name'],$avatar);
	//Delete old pic and check is there an old pic
	if($_POST['avat']){
		unlink($_POST['avat']);
	}
}else{
	//Get old picture
	$avatar = $_POST['avat'];
}

$sql = "UPDATE employees SET fname = '$fname',lname = '$lname', gender = '$gender', skill='$emskill', av='$avatar' WHERE id=$id";

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