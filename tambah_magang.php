			<?php 
			include "koneksi.php";
			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
				if (!empty($_POST['simpan'])){
	
					
					$nama = test_input($_POST['nama']);
					$jenis_kelamin = test_input($_POST['jenis_kelamin']);
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
					$jenis = test_input($_POST['jenis']);

					$query=mysqli_query($connect,"insert into data_magang (id_magang, nama, jenis_kelamin, asal_sekolah, nis, kelas, program, penempatan, tgl_masuk, tgl_keluar, nilai_kinerja, nilai_perilaku, sertifikat, tgl_data, no_hp, jenis) values(null, '$nama', '$jenis_kelamin','$asal_sekolah','$nis','$kelas','$program', '$penempatan','$tgl_masuk','$tgl_keluar','$nilai_kinerja', '$nilai_perilaku','$sertifikat','$tgl_data', '$no_hp', '$jenis' )") or die(mysqli_error($connect));

					if ($query){
						$pesan="Data Berhasil Dimasukkan";
						echo "<script>  alert('$pesan'); window.history.back(); window.reload; </script>";
					}
					else{
						echo mysqli_error();
					}
				}
			?>