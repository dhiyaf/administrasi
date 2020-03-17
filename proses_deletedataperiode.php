<?php 
	include "koneksi.php";
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	$tgl_awal=$_GET['tgl_awal'];
	$tgl_akhir=$_GET['tgl_akhir'];
	
	$query = mysqli_query($connect,"delete from data where tanggal between '$tgl_awal' and '$tgl_akhir' and keterangan='diproses'") or die(mysqli_error($connect));

	if ($query){
		header('location: pelamar.php');
	} else{
		echo mysqli_error();
	}	
?>