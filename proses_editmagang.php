<?php  

include "koneksi.php";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
					$id_magang = test_input($_GET['id_magang']);
					$nama = test_input($_POST['nama']);
					$jenis_kelamin = test_input($_POST['jenis_kelamin']);
					$jenis=test_input($_POST['jenis']);
					$asal_sekolah = test_input($_POST['asal_sekolah']);
					$nis = test_input($_POST['nis']);
					$kelas = test_input($_POST['kelas']);
					$program = test_input($_POST['program']);
					$penempatan = test_input($_POST['penempatan']);
					$tgl_masuk = test_input($_POST['tgl_masuk']);
					$tgl_keluar = test_input($_POST['tgl_keluar']);
					$nilai_kinerja = test_input($_POST['nilai_kinerja']);
					$nilai_perilaku = test_input($_POST['nilai_perilaku']);
					$sertifikat = test_input($_POST['sertifikat']);
					$tgl_data = test_input($_POST['tgl_data']);
					$no_hp = test_input($_POST['no_hp']);

	$query = mysqli_query($connect,"update data_magang set nama = '$nama',jenis='$jenis', jenis_kelamin ='$jenis_kelamin', asal_sekolah='$asal_sekolah', nis='$nis', kelas='$kelas', program='$program',penempatan='$penempatan', tgl_masuk='$tgl_masuk',tgl_keluar='$tgl_keluar',nilai_kinerja='$nilai_kinerja',nilai_perilaku='$nilai_perilaku', sertifikat='$sertifikat', tgl_data='$tgl_data', no_hp='$no_hp' where id_magang='$id_magang' " ) or die(mysqli_error($connect));

	if ($query){
		header('location: magang.php');
	} else{
		echo mysqli_error();
	}
?>	