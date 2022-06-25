<?php 
require("dbconnect.php");
print_r($_POST['idcheckbox']);


$id_arr = $_POST["idcheckbox"];

$multiple_id = implode(",", $id_arr);

var_dump($multiple_id);

$sql = "DELETE FROM employees WHERE id in ($multiple_id)";

print($sql);

$result = mysqli_query($connect,$sql);

if($result){
	//echo "ລຶບຂໍ້ມູນສຳເລັດແລ້ວ<br>";
	//echo "<a href='index.php' class='btn btn-primary'>ກັບຄືນໜ້າຫຼັກ</a>";

	header("location:index.php");
	exit(0);
}else{
	echo "ເກີດຂໍ້ຜິດຜາດໃນການລຶບ". mysqli_error($connect);
}

?>