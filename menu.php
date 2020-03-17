<!DOCTYPE html>
<html>
<head>
	<title>
		<link rel="shortcut icon" type="image/x-icon" href="img/icon.ico">
	</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="js/javascript.js"></script>
<!-- bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<a id="menu-toggle" href="#" class="navbar-toggle">
						<span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				</a>
	  			<a class="navbar-brand" href="index.php" style="color: white; ">
	  				SISTEM INFORMASI ADMINISTRASI 
	  			</a>
			</div>
			<div class="col-sm-2">
			<div id="sidebar-wrapper" class="sidebar-toggle">
				<ul class="sidebar-nav">
			    	<li>
			    		<img src="img/user.png" style="height: 60%; width: 60%;"> 
			    	</li>
			    	<p><b>Halo! Admin </b></p>
				  	<li>
				  		<a href="index.php"><span class="glyphicon glyphicon-home"></span> DASHBOARD</a>
				  	</li>
				  	<li>
				  		<a href="pelamar.php"><span class="glyphicon glyphicon-briefcase"></span> DATA PELAMAR </a>
				  	</li>
				  	<li>
				  		<a href="magang.php"><span class="glyphicon glyphicon glyphicon-tag"></span> DATA  MAGANG </a>
				  	</li>
				  	<li>
				  		<a href="diterima.php"><span class="glyphicon glyphicon glyphicon-list-alt"></span> PELAMAR DITERIMA </a>
				  	</li>
				  	<li>
				  		<a href="user.php"><span class="glyphicon glyphicon glyphicon-user"></span> USER </a>
				  	</li>
				  	<li>
				  		<a href="logout.php" id="logout"><span class="glyphicon glyphicon glyphicon-log-out"></span> LOGOUT </a> 
				  	</li>
			  	</ul>
			</div>
	  	</div>
	</nav>
  	<style>
  		#sidebar-wrapper p{
  			color: black;
  			font-weight: bold;
  			font-size: 16px;
  			margin:5% 0 3% 19%;
  		}
  		#sidebar-wrapper img{
  			margin-top: 7%;
  		}
  		.navbar{
  			background-color: #2b2b2b;
  			border: none;
  			border-radius: 0px;
  			margin:0px !important;
  		}
  		#menu-toggle{
  			background: white;
  		}
  	</style>
</nav>
<script>
	$(function(){
    $('a#logout').click(function(){
        if(confirm('Anda Yakin Ingin Keluar?')) {
            return true;
        }

        return false;
    });
});
</script>

</body>
</html>