<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
require("dbconnect.php");
echo $_GET["idemp"];

$id = $_GET["idemp"];

$sql = "DELETE FROM employees WHERE id=$id";

$result = mysqli_query($connect,$sql);

if($result){
	//echo "ລຶບຂໍ້ມູນສຳເລັດ";
	//echo "<a href='index.php' class='btn btn-primary'>ກັບຄືນໜ້າຫຼັກ</a>";

	header("location:index.php");
	exit(0);
}else{

	echo "ເກີດຂໍ້ຜິດຜາດໃນການລຶບ";
}

?>