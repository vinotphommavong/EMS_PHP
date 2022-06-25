<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ບັນທຶກຂໍ້ມູນພະນັກງານ</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@100;400&family=Noto+Serif+Lao:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container my-3 ">
		<h2 class="text-center">ແບບຟອມບັນທຶກຂໍ້ມູນ</h2>
		<form action="insertData.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="firstname">ຊື່</label>
				<input type="text" name="fname" id="" class="form-control">
			</div>
			<div class="form-group">
				<label for="lastname">ນາມສະກຸນ</label>
				<input type="text" name="lname" id="" class="form-control">
			</div><br>
			<div class="form-group">
				<label for="upload">ຮູບພາບ</label>
				<input type="file" name="upload" id="upload" class="form-control">
			</div><br>
			<div class="form-group">
				<label for="gender"> ເພດ</label>
				<input type="radio" name="gender" value="male">ຊາຍ
				<input type="radio" name="gender" value="female">ຍິງ
				<input type="radio" name="gender" value="other">ອື່ນໆ
			</div>
			<div class="form-group">
				<label for="">ທັກສະ/ຄວາມສາມາດ</label>
				<input type="checkbox" name="skills[]" value="Java">JAVA
				<input type="checkbox" name="skills[]" value="PHP"> PHP
				<input type="checkbox" name="skills[]" value="Python">Python
				<input type="checkbox" name="skills[]" value="HTML">HTML
			</div>

			<input type="submit" name="" value="ບັນທຶກຂໍ້ມູນ" class="btn btn-success">
			<input type="reset" name="" value="ລ້າງຂໍ້ມູນ" class="btn btn-danger">
			<a href="index.php" class="btn btn-primary">ກັບຄືນໜ້າຫຼັກ</a>

		</form>
		
	</div>


	
</body>
</html>