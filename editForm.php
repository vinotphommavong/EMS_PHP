<?php 
require("dbconnect.php");
echo $_GET["id"];
echo "<br>";
$id = $_GET["id"];

$sql = "SELECT * FROM employees WHERE id = $id";
$result = mysqli_query($connect,$sql);

$row=mysqli_fetch_assoc($result);

print_r($row);
echo "<br>";

$skill_arr = array("Java","PHP","Python","HTML"); //ກຽມຕົວເລືອກ 4 ຕົວເລືອກ

echo $row["skill"];


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ບັນທຶກຂໍ້ມູນພະນັກງານ</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container my-3 ">
		<h2 class="text-center">ແບບຟອມແກ້ໄຂຂໍ້ມູນ</h2>
		<form action="updateData.php" method="post">
			<input type="text" value="<?php echo $row['id'];?>" name="id">
			<div class="form-group">
				<label for="firstname">ຊື່</label>
				<input type="text" name="fname" id="" class="form-control" value="<?php echo $row['fname'];?> " >
			</div>
			<div class="form-group">
				<label for="lastname">ນາມສະກຸນ</label>
				<input type="text" name="lname" id="" class="form-control" value="<?php echo $row['lname'];?>" >
			</div><br>
			<div class="form-group">
				<label for="gender"> ເພດ</label>
				<?php 
				if($row["gender"] == "male"){
					echo "<input type='radio' name='gender' value='male' checked> ຊາຍ ";
					echo "<input type='radio' name='gender' value='female' > ຍິງ ";
					echo "<input type='radio' name='gender' value='other' > ອື່ນໆ ";

				}else if($row["gender"] == "female"){
					echo "<input type='radio' name='gender' value='male'> ຊາຍ ";
					echo "<input type='radio' name='gender' value='female' checked> ຍິງ ";
					echo "<input type='radio' name='gender' value='other' > ອື່ນໆ ";

				}else{
					echo "<input type='radio' name='gender' value='male' > ຊາຍ ";
					echo "<input type='radio' name='gender' value='female' > ຍິງ ";
					echo "<input type='radio' name='gender' value='other' checked> ອື່ນໆ ";

				}

				?>
			</div>
			<div class="form-group">
				<label for="">ທັກສະ/ຄວາມສາມາດ</label>
				<?php 

				$skill=explode(",",$row["skill"]); // string => array

				foreach($skill_arr as $value){
					if(in_array($value,$skill)){
						echo "<input type='checkbox' name='skills[]' value='$value' checked>$value";
					}else{
						echo "<input type='checkbox' name='skills[]' value='$value'>$value";
					}
				}

				?>
			</div>

			<input type="submit" name="" value="ແກ້ໄຂຂໍ້ມູນ" class="btn btn-success">
			<input type="reset" name="" value="ລ້າງຂໍ້ມູນ" class="btn btn-danger">
			<a href="index.php" class="btn btn-primary">ກັບຄືນໜ້າຫຼັກ</a>

		</form>
		
	</div>


	
</body>
</html>