
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php 
require('dbconnect.php');

$id = $_POST["idemployee"];

echo $id;

$sql = "DELETE FROM employees WHERE id=$id ";
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