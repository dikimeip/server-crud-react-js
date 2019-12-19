<?php 
include "koneksi.php";

//if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$nim = $_GET['nim'];

	$query = mysqli_query($db,"DELETE FROM mahasiswa WHERE nim = '$nim' ");

	if ($query) {
		echo json_encode(array('value'=>1,'message'=>'SUCCES'));
	} else {
		echo json_encode(array('value'=>0,'message'=>'FAILDE'));
	}
// } else {
// 	echo json_encode(array('value'=>404,'message'=>'NotFound'));
// }

 ?>

