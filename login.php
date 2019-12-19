<?php 

include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = mysqli_query($db,"SELECT * FROM login WHERE username = '$username' AND password = '$password' ");
	if (mysqli_num_rows($query) == 1) {
		echo json_encode(array('value'=>1,'message'=>'Berhasil Login'));
	} else {
		echo json_encode(array('value'=>2,'message'=>'Gagal Login'));
	}
	
} else {
	echo json_encode(array('value'=>101,'message'=>'ERROR SERVER'));
}


 ?>