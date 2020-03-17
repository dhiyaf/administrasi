<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/icon.ico">
	<title>LOGIN</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>	
		<h3 style="text-align: center; margin-top: 5%;">SISTEM INFORMASI ADMINISTRASI PT. IMS SERVICE</h3>
		</div>
	</div>
	<div class="modal-dialog">
		<div class="modal-content" style="width: 450px;">
			<div class="modal-heading">
				<h2 class="text-center" style="text-transform: uppercase;">Halaman LOGIN</h2>
			</div>
			<hr/>
			<div class="modal-body"  >
				<form action="proses_login.php" method="POST" role="form">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" class="form-control" name="username" placeholder="Username" required="" />
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
							</span>
							<input type="password" class="form-control" name="password" placeholder="Password" required="" />
						</div>
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-lg" style="width: 160px;"> Login</button></a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<style>
		body {
		  background-color: #e2e2e2;
		  margin:0px;
		  background-size: 200% 200%;

		}
		.modal-dialog {
			margin-top: 2%;
		}
		.modal-content{
			background-color: darkcyan;
			margin-left: 12.5%;
		}
		.btn-link{
			color:white;
		}
		.modal-heading h2{
			color:#ffffff;
		}
		.form-group {
			margin-left: 2%;
			margin-right: 2%;
		}
	</style>
</body>
</html>