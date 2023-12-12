<?php 
include 'config/koneksi.php';

$data_jenis = $koneksi->query("SELECT jenis, COUNT(jenis) AS jumlah FROM `laporan` GROUP BY jenis");
$isi_data=[];
while($data = mysqli_fetch_array($data_jenis)){
	array_push($isi_data, [
		'jenis'=>$data['jenis'],
		'jumlah'=>$data['jumlah'],
	]);
}

echo json_encode($isi_data);

?>