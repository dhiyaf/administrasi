<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/icon.ico">
	<title>SISTEM INFORMASI ADMINISTRASI</title>
</head>
<body>
	<?php include "menu.php"; ?>
		<div class="col-sm-10 col-sm-offset-2" id="content">
	<div class="col-sm-10">
		<div class="row">
			<h2><b>HALAMAN UTAMA</b></h2>
			<h4>SISTEM INFORMASI ADMINISTRASI PT. IMS SERVICE</h4>
			<hr>
		</div>
		<div class="row text-center" style="margin-left:15%;">
			<div class="col-sm-4 text-center" style="background: #f2f2f2; margin: 5%; padding: 4%; border-radius:5px;">
				<div class="row text-center" style="">
					<span class="glyphicon glyphicon-briefcase" style="font-size: 65px; padding: 6%; background: #146b0d; border-radius: 80%; color: white;"></span>
				</div>
				<h4 style="font-weight: bold;">TOTAL PELAMAR</h4>
				<?php 
				include "koneksi.php";
				$sqlCommand = "SELECT COUNT(*) FROM data where keterangan='diproses'";
				$query = mysqli_query($connect, $sqlCommand) or die (mysqli_error($connect));
				$row = mysqli_fetch_row($query);
				mysqli_free_result($query);
				mysqli_close($connect);
				?>
				<h4 style="font-weight: bold;"> <?php echo $row[0]." Orang";?> </h4>
				
			</div>
			
			<div class="col-sm-4 text-center" style="background: #f2f2f2; margin: 5%; padding: 4%; border-radius:5px;">
				<div class="row text-center" style="">
					<span class="glyphicon glyphicon glyphicon-tag" style="font-size: 65px; padding: 6%; background: #0d437c; border-radius: 80%; color: white;"></span>
				</div>
				<h4 style="font-weight: bold;">TOTAL MAGANG</h4>
				<?php 
				include "koneksi.php";
				$sqlCommand = "SELECT COUNT(*) FROM data_magang";
				$query = mysqli_query($connect, $sqlCommand) or die (mysqli_error($connect));
				$row = mysqli_fetch_row($query);
				mysqli_free_result($query);
				mysqli_close($connect);
				?>
				<h4 style="font-weight: bold;"> <?php echo $row[0]." Orang";?> </h4>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>