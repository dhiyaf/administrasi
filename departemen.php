<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/icon.ico">
	<title>DEPARTEMEN</title>
</head>
<body>
	<!-- <?php include "menu.php"; ?> -->
	
	<div class="col-sm-9" style="margin: 5% 0px;">
		<div class="row">
			<?php  
				include "koneksi.php";
				$query = "SELECT * FROM departemen";
				$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
				while($row = mysqli_fetch_assoc($result)){
			?>
			<div class="col-sm-4" style="padding: 20px;">
				<a href="" style="text-transform: uppercase;"> <?php echo $row['nama_departemen']; ?></a>
			</div>
			<?php } ?>
		</div>
	</div>
</body>
</html>	