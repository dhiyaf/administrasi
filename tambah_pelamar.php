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
					$umur = test_input($_POST['umur']);
					$alamat = test_input($_POST['alamat']);
					$no_hp = test_input($_POST['no_hp']);
					$email = test_input($_POST['email']);
					$pendidikan = test_input($_POST['pendidikan']);
					$jurusan = test_input($_POST['jurusan']);
					$ipk= test_input($_POST['ipk']);
					$pic = test_input($_POST['pic']);
					$jenis = test_input($_POST['jenis']);
					$tanggal = test_input($_POST['tanggal']);

					$query=mysqli_query($connect,"insert into data (id_data, nama, jenis_kelamin, umur, alamat, no_hp, pendidikan, jurusan, ipk, pic, keterangan, jenis, tanggal, email) values(null, '$nama', '$jenis_kelamin','$umur','$alamat','$no_hp','$pendidikan', '$jurusan','$ipk','$pic','diproses', '$jenis','$tanggal','$email')") or die(mysqli_error($connect));

					if ($query){
						$pesan="Data Berhasil Dimasukkan";
						echo "<script>  alert('$pesan'); window.history.back(); window.reload; </script>";
						
					}
					else{
						echo mysqli_error();
					}
				}
			?>