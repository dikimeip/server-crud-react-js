<?php 
include "koneksi.php";
$_POST = json_decode(file_get_contents("php://input"),true);
//if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST['alamat'];

	$query = mysqli_query($db,"UPDATE mahasiswa SET nama = '$nama',kelas='$kelas',alamat='$alamat' WHERE 	nim='$nim' ");

	if ($query) {
		echo json_encode(array('value'=>1,'message'=>'Data Berhasil Ditambah'));
	} else {
		echo json_encode(array('value'=>0,'message'=>'Data Gagal Ditambah'));
	}
// } else {
// 	echo json_encode(array('value'=>404,'message'=>'NotFound'));
// }

 ?>

