<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/icon.ico">
	<title> MAGANG </title>

</head>
<body>
	<!-- <?php include "menu.php";
		error_reporting(E_ALL^(E_NOTICE|E_WARNING));
	?> -->

	<div class="col-sm-10 col-sm-offset-2" id="content">
		<div class="panel_body">
			<h3><b>DATA KARYAWAN MAGANG </b></h3>
			<hr>
			<div class="col-sm-2">
				<form method="get">
					<select class="form-control" name="kategori">
						<option value="">-</option>
						<option value="sarjana">SARJANA</option>
						<option value="diploma">DIPLOMA</option>
						<option value="sma">SMA</option>
					</select>
			</div>
			<div class="col-sm-1">
					<button type="submit" class="btn btn-warning">Cari</button>
				</form>
			</div>
			<div class="col-sm-9" style="margin-bottom: 10px;">
			
				<p align="right"> 
					<button class="btn btn-primary" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-print"></span> Cetak Data </button>
					<a class="btn btn-primary" href="data-magang.php"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Data</a>
				</p>
			</div>
		</div>

			<div class="table-responsive col-sm-12">
			<table class="table table-bordered" id="myTables">
				<thead>
					<tr>
						<th width="30"> No </th>
						<th width="130"> Tanggal </th>
						<th width="130"> Nama </th>
						<th width="70"> NIS/NIM </th>
						<th width="130"> Asal Sekolah </th>
						<th width="50"> Kelas/Semester </th>
						<th width="80"> Kategori </th>
						<th width="80"> Tanggal Tenor </th>
						<th width="150"> Aksi </th>
					</tr>
				</thead>

				<tbody >
					 <?php
			            include "koneksi.php";
			            $cari = $_GET['kategori'];
			            $i=1;
			            $query = " SELECT * FROM data_magang where jenis like '%$cari%'";
			            $result = mysqli_query($connect, $query) or die (mysqli_error($connect));
			            while ($row = mysqli_fetch_array($result)){
			            ?>
					<tr>
						<td> <?php echo $i++; ?> </td>
						<td> <?php echo date('d F Y', strtotime($row['tgl_data']));  ?> </td>
						<td style="text-transform: capitalize;"> <?php echo $row['nama']; ?> </td>
						<td style="text-transform: capitalize;"> <?php echo $row['nis']; ?></td>
						<td style="text-transform: capitalize;"> <?php echo $row['asal_sekolah']; ?> </td>
						<td style="text-transform: capitalize;"> <?php echo $row['kelas']; ?> </td>
						<td style="text-transform: capitalize;"> <?php echo $row['jenis']; ?> </td>
						<td> <?php
						$masuk = strtotime($row['tgl_masuk']);
						$keluar = strtotime($row['tgl_keluar']);
						include "tenor.php";
						?> Hari </td>
						<td> 
							<button class="btn btn-info btn-sm" data-toggle="modal" data-toggle="tooltip" title="Detail" data-target="#detail<?php echo $row['id_magang']; ?>" > <span class="glyphicon glyphicon-check"></span> </button>
							<button class="btn btn-warning btn-sm" data-toggle="modal" data-toggle="tooltip" title="Edit" data-target="#edit<?php echo $row['id_magang']; ?>" > <span class="glyphicon glyphicon-pencil"></span> </button>
							<button class="btn btn-danger btn-sm" data-toggle="modal" data-toggle="tooltip" title="Delete" data-target="#delete<?php echo $row['id_magang']; ?>" > <span class="glyphicon glyphicon-trash"></span> </button>
							<?php include "button_magang.php"; ?>
						</td>
					</tr>
					<?php } ?>

				</tbody>
			</table>
		</div>		
	</div>
<!-- modal cetak -->
<div class="modal fade" id="myModal2">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times; </button>
						<h4 class="modal-title" id="myModalLabel"> Cetak Data Magang</h4>
					</div>
					<!-- Modal Body -->
					<div class="modal-body">
						<form method="get" action="cetakmagang.php?id_magang=<?php echo $id_magang; ?>">
							<div class="form-group">
								<label> Nama Karyawan Magang </label>
								<select name="nama" id="nama" class="form-control" style="text-transform: capitalize;" >
									<?php
						            include "koneksi.php";
						            $nama = $_GET['nama'];
						            $query = " SELECT * FROM data_magang group by id_magang";
						            $result = mysqli_query($connect, $query) or die (mysqli_error($connect));
						            while ($row = mysqli_fetch_array($result)){
						            ?>
									<option  value="<?php echo $row['nama']; ?>"><?php echo $row['nama']; ?></option>
								<?php } ?>
								</select>
							</div>
					</div>
					<!-- Modal Footer -->
					<div class="modal-footer">
						<button type="submit" value="Cetak" class="btn btn-primary">Cetak</button>
						</form>
						<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
					</div>	
				</div>
			</div>
		</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
    $('#myTables').DataTable();
});
</script>
</body>
</html>