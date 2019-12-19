<?php 

include "koneksi.php";

//if ($_SERVER['REQUEST_METHOD'] == "POST") {
//$_GET = json_decode(file_get_contents("php://input"),true);
	$cari = $_GET['nim'];
	//$result = array();
	$query = mysqli_query($db,"SELECT * FROM mahasiswa WHERE nim='$cari' ");

	//data satu jadi ngak perlu perulangan
	$result = mysqli_fetch_assoc($query);

	if ($query) {
		echo json_encode(array("mhs"=>$result));
	} else {
		echo json_encode(array("value" => 0 ,"mhs" => "Data Gagal"));
	}
	
// } else {
// 	echo json_encode(array('value'=>101,'mhs'=>'Data Not Ditambah'));
// }


 ?>