<?php  

include "koneksi.php";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	$id_data = test_input($_GET['id_data']);
	$nama = test_input($_POST['nama']);
	$jenis_kelamin = test_input($_POST['jenis_kelamin']);
	$umur = test_input($_POST['umur']);
	$alamat = test_input($_POST['alamat']);
	$no_hp = test_input($_POST['no_hp']);
	$email = test_input($_POST['email']);
	$pendidikan = test_input($_POST['pendidikan']);
	$jurusan = test_input($_POST['jurusan']);
	$ipk= test_input($_POST['ipk']);
	$pic = test_input($_POST['pic']);
	$keterangan = test_input($_POST['keterangan']);
	$jenis = test_input($_POST['jenis']);
	$tanggal = test_input($_POST['tanggal']);


	$query = mysqli_query($connect,"update data set nama = '$nama', jenis_kelamin ='$jenis_kelamin', umur='$umur', alamat='$alamat', no_hp='$no_hp', email='$email',pendidikan='$pendidikan', jurusan='$jurusan',ipk='$ipk',pic='$pic', keterangan='$keterangan',jenis='$jenis', tanggal='$tanggal' where id_data='$id_data' " ) or die(mysqli_error($connect));

	if ($query){
		header('location: pelamar.php');
	} else{
		echo mysqli_error();
	}
?>	