<?php 
	include "koneksi.php";
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	$id_data = test_input($_GET['id_data']);
	
	$query = mysqli_query($connect,"delete from data where id_data='$id_data'") or die(mysqli_error($connect));

	if ($query){
		header('location: diterima.php');
	} else{
		echo mysqli_error();
	}	
?>