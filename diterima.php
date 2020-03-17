<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/icon.ico">
	<title> DITERIMA </title>

</head>
<body>
	<!-- <?php include "menu.php";
		error_reporting(E_ALL^(E_NOTICE|E_WARNING));
	?> -->

	<div class="col-sm-10 col-sm-offset-2" id="content">
			
			<div class="panel_body">
			<h3><b>DATA PELAMAR DITERIMA </b></h3>
			<hr>
			<div class="col-sm-2" style="margin-bottom: 20px;">
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
			<div class="col-sm-9">	
				<p align="right"> 
					<button class="btn btn-primary" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-print"></span> Cetak Data </button>
			</div>
		</div>

			<div class="table-responsive col-sm-12">
			<table class="table table-bordered" id="myTable">
				<thead>
					<tr>
						<th width="10"> No </th>
						<th width="80"> Tanggal </th>
						<th width="150"> Nama </th>
						<th width="70"> Gender </th>
						<th width="130"> Pendidikan Terakhir </th>
						<th width="80"> Jurusan </th>
						<th width="100"> Keterangan </th>
						<th width="60"> Aksi </th>
					</tr>
				</thead>

				<tbody>
					 <?php
			            include "koneksi.php";
			            $cari = $_GET['kategori'];
			            $i=1;
			            $query = " SELECT * FROM data where keterangan='diterima' and jenis like '%$cari%' order by tanggal desc";
			            $result = mysqli_query($connect, $query) or die (mysqli_error($connect));
			            while ($row = mysqli_fetch_array($result)){
			            ?>
					<tr>
						<td> <?php echo $i++; ?> </td>
						<td> <?php echo date('d F Y', strtotime($row['tanggal']));  ?> </td>
						<td style="text-transform: capitalize;"> <?php echo $row['nama']; ?> </td>
						<td style="text-transform: capitalize;"> <?php echo $row['jenis_kelamin']; ?></td>
						<td style="text-transform: capitalize;"> <?php echo $row['pendidikan']; ?> </td>
						<td style="text-transform: capitalize;"> <?php echo $row['jurusan']; ?> </td>
						<td style="text-transform: uppercase;"> <p style="background-color: #7fe28c; text-align: center;"><?php echo $row['keterangan']; ?></p> </td>
						<td>
							<button class="btn btn-info btn-sm" data-toggle="modal" data-toggle="tooltip" title="Detail" data-target="#detail<?php echo $row['id_data']; ?>" > <span class="glyphicon glyphicon-check"></span> </button>
							<button class="btn btn-danger btn-sm" data-toggle="modal" data-toggle="tooltip" title="Delete" data-target="#delete<?php echo $row['id_data']; ?>" > <span class="glyphicon glyphicon-trash"></span> </button>
							<?php include "button_data.php"; ?>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>		
	</div>

	<div class="modal fade" id="myModal3">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times; </button>
						<h4 class="modal-title" id="myModalLabel"> Cetak Data Pelamar Diterima</h4>
					</div>
					<!-- Modal Body -->
					<div class="modal-body">
						<form method="get" action="cetakdataditerima.php?jenis=<?php echo $jenis; ?>">
							<div class="form-group">
								<label> Pelamar Diterima </label>
								<select name="jenis" id="jenis" class="form-control" style="text-transform: uppercase;" >
									<?php
						            include "koneksi.php";
						            $jenis = $_GET['jenis'];
						            $query = " SELECT * FROM data group by jenis";
						            $result = mysqli_query($connect, $query) or die (mysqli_error($connect));
						            while ($row = mysqli_fetch_array($result)){
						            ?>
									<option  value="<?php echo $row['jenis']; ?>"><?php echo $row['jenis']; ?></option>
								<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label> Periode </label><br>
								<div class="col-sm-5" style="padding: 0px !important;">
									<input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" name="tgl_awal">
								</div>
								<div class="col-sm-2">
									<p align="center"><b>---</b></p>
								</div>
								<div class="col-sm-5" style="padding: 0px !important;">
									<input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" name="tgl_akhir">
								</div>							
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
    $('#myTable').DataTable();
});
</script>
</body>
</html>