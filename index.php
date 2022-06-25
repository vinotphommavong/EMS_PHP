<?php 
//session_start();
require("dbconnect.php");
include('auth.php');

$sql = "SELECT * FROM employees ORDER BY fname ASC";//ລຽງລຳດັບຂໍ້ມູນຕາມຊື່
$result = mysqli_query($connect,$sql);

$count = mysqli_num_rows($result);

$order = 1;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ຂໍ້ມູນພະນັກງານ</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@100;400&family=Noto+Serif+Lao:wght@300&display=swap" rel="stylesheet">

</head>
<body>
	<div class="container ">
	<h1 class="text-center my-4">ຂໍ້ມູນພະນັກງານໃນຖານຂໍ້ມູນ</h1>
	<p>Welcome <?php echo $_SESSION['username']; ?><p>
	<a href="logout.php">Logout</a>
	<hr>
	<?php if($count>0){ ?>
	<form action="searchData.php" class="form-group" method="POST">
		<label for="">ຄົ້ນຫາພະນັກງານ</label>
		<input type="text" name="empname"  placeholder="ປ້ອນຊື່ພະນັກງານເພື່ອຄົ້ນຫາ" class="form-control">
		<input type="submit" value="Search" class="btn btn-dark my-2">

	</form>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ລຳດັບທີ</th>
				<th>ລະຫັດພະນັກງານ</th>
				<th>ຊື່</th>
				<th>ນາມສະກຸນ</th>
				<th>ເພດ</th>
				<th>ຄວາມສາມາດ</th>
				<th>ແກ້ໄຂ</th>	
				<th>ລຶບຂໍ້ມູນ</th>	
				<th>ລຶບຂໍ້ມູນ(Checkbox)</th>	
			</tr>
		</thead>
		<tbody>
			<?php while($row=mysqli_fetch_row($result)){?>
			<tr>
				<td><?php echo $order++ ;?></td>
				<td><?php echo $row[0] ;?></td>
				<td><?php echo $row[1] ;?></td>
				<td><?php echo $row[2] ;?></td>
				<td>
				<?php 
				if($row[3] == "male"){?>
					ຊາຍ
				<?php  }else if($row[3] == "female"){?>
					ຍິງ
				<?php }else{ ?>
					ອື່ນໆ
				<?php } ?>
				</td>
				<td><?php echo $row[4] ;?></td>
				<td>
				<a href="editForm.php?id=<?php echo $row["0"];?>" class="btn btn-info" >ແກ້ໄຂ</a>
				</td>
				<td>
					<a href="deleteQueryString.php?idemp=<?php echo $row[0]; ?>" class="btn btn-danger"
					onclick="return confirm('ເຈົ້າຕ້ອງການລຶບຂໍ້ມູນແທ້ບໍ່')"
					>ລຶບຂໍ້ມູນ</a>
				</td>
				<form action="multipleDelete.php" method="post">
				<td>
				<input type="checkbox" class="form-group"  name="idcheckbox[]" value="<?php echo $row[0];?>">
				</td>
				
			</tr>
		<?php } ?>
		</tbody>
	</table>

	<?php } else { ?>
		<div class="alert alert-danger">
			<b>ບໍມີຂໍ້ມູນພະນັກງານໃນຖານຂໍ້ມູນ</b>

		</div>
		

	<?php } ?>
	<a href="insertForm.php" class="btn btn-success">ເພີ້ມພະນັກງານ</a>	
	<?php if($count>0) {?> 
	<input type="submit" value="ລຶບຂໍ້ມູນ(checkbox)" class="btn btn-danger" name="">
	
	<?php } ?>
	</form>
	<button class="btn btn-primary" onclick="checkAll()">ເລືອກທັງໝົດ</button>
	<button class="btn btn-warning" onclick="uncheckAll()">ຍົກເລີກ</button>
	</div>

</body>


<script>
function checkAll(){
	var form_element=document.forms[1].length; // 4 
	
	for(i=0;i<form_element-1;i++){
		document.forms[1].elements[i].checked=true;
	}

}
function uncheckAll(){
	var form_element=document.forms[1].length;
	
	for(i=0;i<form_element-1;i++){
		document.forms[1].elements[i].checked=false;
	}

}


</script>
</html>