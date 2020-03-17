<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/icon.ico">
	<title> CETAK DATA MAGANG</title>
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
	<div class="container ">
	<div style="margin-top: 1.5%; margin-left: 50px; margin-bottom: 1%;">
		<button class="noprint btn btn-primary" onclick="window.print()"><span class="glyphicon glyphicon-print"></span> Cetak</button>
	</div>
	</div>
	<div class="container col-sm-7 col-sm-offset-3">
		<div class="header-form">
			<div class="row">
				<img src="img/logo_imss.png" style="align-content: left; margin-left: 3%; margin-top: 2%;" width="150px" height="50px">
				<h3 align="center" style="text-transform: uppercase;"><b>DATA KARYAWAN MAGANG </b></h3>
			</div>
		</div>
		<div> 
			<?php
						error_reporting(E_ALL^(E_NOTICE|E_WARNING));
			            include "koneksi.php";
			            $nama =$_GET['nama'];
			            $i=1;
			            $query = " SELECT * FROM data_magang where nama='$nama' order by id_magang desc";
			            $result = mysqli_query($connect, $query) or die (mysqli_error($connect));
			            while ($row = mysqli_fetch_array($result)){
			?>	
		<div class="body-form ">
			<div class="row" style="margin: 2% 2%;">
				<table class="table" id="tabel" >
					<tbody>
						<tr>
							<td width="200">Nama</td>
							<td width="5"> : </td>
							<td style="text-transform: capitalize;"><?php echo $row['nama']; ?></td>
						</tr>
						<tr>
							<td>Asal Sekolah</td>
							<td> : </td>
							<td style="text-transform: capitalize;"><?php echo $row['asal_sekolah']; ?></td>
						</tr>
						<tr>
							<td>NIS/NIM</td>
							<td> : </td>
							<td><?php echo $row['nis']; ?></td>
						</tr>
						<tr>
							<td>No. HP</td>
							<td> : </td>
							<td><?php echo $row['no_hp']; ?></td>
						</tr>
						<tr>
							<td>Kelas/Semester </td>
							<td> : </td>
							<td><?php echo $row['kelas']; ?></td>
						</tr>
						<tr>
							<td>Program</td>
							<td> : </td>
							<td style="text-transform: capitalize;"><?php echo $row['program']; ?></td>
						</tr>
						<tr>
							<td>Penempatan</td>
							<td> : </td>
							<td style="text-transform: capitalize;"><?php echo $row['penempatan']; ?></td>
						</tr>
						<tr>
							<td>Tanggal Pelaksanaan</td>
							<td> : </td>
							<td><?php echo date('d F Y', strtotime($row['tgl_masuk']));  ?></td>
						</tr>
						<tr>
							<td>Tanggal Berakhir</td>
							<td> : </td>
							<td><?php echo date('d F Y', strtotime($row['tgl_keluar']));  ?></td>
						</tr>
						<tr>
							<td>Tanggal Tenor</td>
							<td> : </td>
							<td> <?php
								$masuk = strtotime($row['tgl_masuk']);
								$keluar = strtotime($row['tgl_keluar']);
								include "tenor.php";
								?> Hari </td>
						</tr>
						<tr>
							<td>Nilai Kinerja</td>
							<td> : </td>
							<td style="text-transform: capitalize; text-align: justify;"><?php echo $row['nilai_kinerja']; ?></td>
						</tr>
						<tr>
							<td>Nilai Perilaku</td>
							<td> : </td>
							<td style="text-transform: capitalize; text-align: justify;"><?php echo $row['nilai_perilaku']; ?></td>
						</tr>
						<tr>
							<td>No. Sertifikat</td>
							<td> : </td>
							<td style="text-transform: uppercase;"><?php echo $row['sertifikat']; ?></td>
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
			border: none;
			vertical-align: middle;
			text-align: left;
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