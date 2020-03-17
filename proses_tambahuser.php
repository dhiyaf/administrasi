<?php 

include "koneksi.php";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	$username = test_input($_POST['username_user']);
	$password = test_input($_POST['password_user']);

	$hash = password_hash($password, PASSWORD_DEFAULT);

	$query = mysqli_query($connect,"insert into user(id_user,username,password)
		values('','$username','$hash')" ) or die(mysqli_error($connect));

	if ($query){
		header('location: user.php');
	} else{
		echo mysqli_error();
	}
?>	