<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/icon.ico">
	<title>USER</title>
</head>
<body>
	<?php include "menu.php"; ?>
	
	<div class="tabel col-sm-10" id="content">
		
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content" style="width: 450px;">
				<div class="modal-heading">
					<h2 class="text-center" style="text-transform: uppercase;">Tambah user</h2>
				</div>
				<hr/>
				<div class="modal-body"  >
					<form  method="POST" action="proses_tambahuser.php" role="form">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="text" class="form-control" name="username_user" placeholder="Username" required="" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input type="password" class="form-control" name="password_user" placeholder="Password" required="" />
							</div>
						</div>
						<div class="form-group text-center">
							<button type="submit" class="btn btn-lg" style="width: 160px;">Submit</button>			
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Tampilan data -->
	<?php 
		error_reporting(E_ALL^(E_NOTICE|E_WARNING));
	?>

	<div class="tabel col-sm-6" id="user" style="padding: 0px !important;">
			<h3><b>DATA USER</b></h3>
			<hr>
			<p align="left"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Tambah User</button></p>
			<table class="table table-bordered" id="myTable" style="margin-top: 2%;">
				<thead>
					<tr>
						<th width="5"> No </th>
						<th width="50"> Nama User </th>
						<th width="50"> Aksi </th>
					</tr>
				</thead>
				<tbody>
					 <?php
			            include "koneksi.php";
			            $i=1;
			            $query = " SELECT * FROM user";
			            $result = mysqli_query($connect, $query) or die (mysqli_error($connect));
			            while ($row = mysqli_fetch_array($result)){
			            ?>
					<tr>
						<td> <?php echo $i++; ?> </td>
						<td style="text-transform: capitalize;"> <?php echo $row['username']; ?> </td>
						<td> 
							<button class="btn btn-danger btn-sm" data-toggle="modal" data-toggle="tooltip" title="Delete" data-target="#delete<?php echo $row['id_user']; ?>" > <span class="glyphicon glyphicon-trash"></span> </button>
							<?php include "button_deleteuser.php"; ?>
						</td>
					</tr>
						<?php 
							}
						?>
				</tbody>
			</table>
	</div>
	


</body>
</html>