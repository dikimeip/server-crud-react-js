<?php 

include "koneksi.php";
$_POST = json_decode(file_get_contents("php://input"),true);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST['alamat'];

	$query = mysqli_query($db,"INSERT INTO mahasiswa VALUES ('$nim','$nama','$kelas','$alamat') ");
	if ($query) {
		echo json_encode(array('value'=>1,'message'=>'Data Berhasil Ditambah'));
	} else {
		echo json_encode(array('value'=>2,'message'=>'Data Gagal Ditambah'));
	}
} else {
	echo json_encode(array('value'=>101,'message'=>'Data Not Ditambah'));
}


 ?>

 