<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/icon.ico">
	<title> CETAK DATA PELAMAR</title>
	<!-- bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<!-- bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	@media print {
  
	  .noprint {
	    visibility: hidden;
	  }
  			
}
</style>
<body>
	<div class="container">
	<div style="margin-top: 1.5%; margin-left: -45px; margin-bottom: 1%;">
		<button class="noprint btn btn-primary" onclick="window.print()"><span class="glyphicon glyphicon-print"></span> Cetak</button>
	</div>
	</div>
	<div class="container" style="border: 2px solid black; width: 90%;">
		<div class="header-form">
			<div class="row">
				<img src="img/logo_imss.png" style="align-content: left; margin-left: 3%; margin-top: 2%;" width="150px" height="50px">
				<h3 align="center" style="text-transform: uppercase;"><b>DATA PELAMAR DITERIMA KATEGORI <?php echo $_GET['jenis']; ?></b></h3>
			</div>
		</div>
		<div> 
		<div class="body-form">
			<div class="row" style="margin: 2% 2%;">
				<table class="table" id="tabel" >
					<thead>
						<tr>
							<th width="50">NO</th>
							<th width="200">NAMA</th>
							<th width="100">GENDER</th>
							<th width="80">UMUR</th>
							<th width="250">ALAMAT</th>
							<th width="100">NO. HP</th>
							<th width="100">EMAIL</th>
							<th width="300">PENDIDIKAN TERAKHIR</th>
							<th width="100">JURUSAN</th>
							<th width="50">IPK</th>
							<th width="80">PIC</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<?php
						error_reporting(E_ALL^(E_NOTICE|E_WARNING));
			            include "koneksi.php";
			            $jenis =$_GET['jenis'];
			            $tgl_awal=$_GET['tgl_awal'];
			            $tgl_akhir=$_GET['tgl_akhir'];
			            $i=1;
			            $query = " SELECT * FROM data where jenis='$jenis' and keterangan='diterima' and tanggal between '$tgl_awal' and '$tgl_akhir' order by id_data desc";
			            $result = mysqli_query($connect, $query) or die (mysqli_error($connect));
			            while ($row = mysqli_fetch_array($result)){
			            ?>
							<td><?php echo $i++; ?></td>
							<td style="text-transform: capitalize;"><?php echo $row['nama']; ?></td>
							<td style="text-transform: capitalize;"><?php echo $row['jenis_kelamin']; ?></td>
							<td><?php echo $row['umur']; ?></td>
							<td style="text-transform: capitalize;"><?php echo $row['alamat']; ?></td>
							<td><?php echo $row['no_hp']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td style="text-transform: capitalize;"><?php echo $row['pendidikan']; ?></td>
							<td style="text-transform: capitalize;"><?php echo $row['jurusan']; ?></td>
							<td><?php echo $row['ipk']; ?></td>
							<td style="text-transform: capitalize;"><?php echo $row['pic']; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	</div>

	
	<style>
		.body-form th{
			text-align: center;
			font-size: 15px;
			line-height: 70%;
			padding: 3px !important;
		}
		.body-form td{
			text-align: center;
			font-size: 15px;
			line-height: 70%;
			padding: 3px !important;
		}
		#tabel td, #tabel th{
			border: 1px solid black;
			vertical-align: middle;
		}
		.footer-form td{
			text-align: center;
			font-size: 17px;
		}
		#bank td, #bank th{
			text-align: left;
			font-size: 14px;
			border: 1px solid black;
		}
		#header td{
			font-size: 18px;
			line-height: 110%;
		}
	</style>
</body>
</html>