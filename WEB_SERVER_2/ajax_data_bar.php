<?php 
include 'config/koneksi.php';

$data_bar = $koneksi->query("SELECT YEAR(tanggal) AS tahun,COUNT(CASE WHEN jenis='Laporan Kejadian' THEN 1 END) AS kejadian,COUNT(CASE WHEN jenis='Laporan Bencana' THEN 1 END) AS bencana FROM laporan GROUP BY YEAR(tanggal)");
$isi_data=[];
while($data = mysqli_fetch_array($data_bar)){
	array_push($isi_data, [
		'tahun'=>$data['tahun'],
		'kejadian'=>$data['kejadian'],
		'bencana'=>$data['bencana'],
	]);
}

echo json_encode($isi_data);

?>