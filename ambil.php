 <?php 

require "koneksi.php";

$result = array();

$ambil = mysqli_query($db,"SELECT * FROM mahasiswa ORDER BY nim DESC");
while ($row = mysqli_fetch_assoc($ambil)) {
		$result[] = $row;
}

	if ($ambil) {
		echo json_encode(array('value'=>1,'mhs'=>$result));
	} else {
		echo json_encode(array('value'=>0,'mhs'=>'Data Gagal Ditambah'));
	}


 ?>