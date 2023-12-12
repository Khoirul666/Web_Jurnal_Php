<?php 

$server = "localhost";
$folder = "AZIZ/WEB_SERVER/assets/images/app";
$user = "root";
$pass = "";
$database = "db_aziz_ta";

$con = mysqli_connect($server,$user,$pass);

$sql = "
CREATE TABLE `laporan` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`gmbr` varchar(255) DEFAULT NULL,
	`nm_pelapor` varchar(255) DEFAULT NULL,
	`tlp` varchar(255) DEFAULT NULL,
	`lokasi` text DEFAULT NULL,
	`tanggal` date DEFAULT NULL,
	`isi` text DEFAULT NULL,
	`jenis` varchar(255) DEFAULT NULL,
	PRIMARY KEY (`id`)
)
";

if (!$con) {
	die("Koneksi gagal : ".mysqli_connect_error());
}
else{
	$db = mysqli_connect($server,$user,$pass,$database);
	// echo "Success".'<br>';
	if ($db) {
		// $x = $db->query($sql);
		// if($x){
		// 	echo "Success membuat database dan tabel 1";
		// }
		// else{
		// 	echo "Tabel dan Database Siap 1";
		// }
		// echo $folder;
	}
	else{
		$cdb = "CREATE DATABASE ".$database;
		echo '<br>alsmlasl<br>';
		if($con->query($cdb)){
			echo 'sukses';
		}
		else{
			echo 'gagal';
		}
		echo $status;
		echo '<br>alsmlasl<br>';
		
		$y = $db->query($sql);
		if(!$y){
			// echo $y;
			echo "Success membuat database dan tabel 2";
		}
		else{
			echo "Tabel dan Database Siap 2";
		}
	}
}
// echo '<br>';


?>