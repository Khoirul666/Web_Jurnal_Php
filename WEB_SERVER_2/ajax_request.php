<?php 
include 'config/koneksi.php';
$bencana_baru=[];
$data_bencana = $koneksi->query("SELECT * FROM laporan WHERE jenis='Laporan Bencana' AND is_new='true' AND is_read='false'");
while ($data = mysqli_fetch_array($data_bencana)) {
	array_push($bencana_baru,[
		'id'=>$data['id'],
		'gmbr'=>$data['gmbr'],
		'nm_pelapor'=>$data['nm_pelapor'],
		'tlp'=>$data['tlp'],
		'lokasi'=>$data['lokasi'],
		'tanggal'=>$data['tanggal'],
		'isi'=>$data['isi'],
		'jenis'=>$data['jenis'],
		'status'=>$data['status'],
	]);
}
$kejadian_baru=[];
$data_kejadian = $koneksi->query("SELECT * FROM laporan WHERE jenis='Laporan Kejadian' AND is_new='true' AND is_read='false'");
while ($data = mysqli_fetch_array($data_kejadian)) {
	array_push($kejadian_baru,[
		'id'=>$data['id'],
		'gmbr'=>$data['gmbr'],
		'nm_pelapor'=>$data['nm_pelapor'],
		'tlp'=>$data['tlp'],
		'lokasi'=>$data['lokasi'],
		'tanggal'=>$data['tanggal'],
		'isi'=>$data['isi'],
		'jenis'=>$data['jenis'],
		'status'=>$data['status'],
	]);
}

$data = [
	'bencana_baru'=>$bencana_baru,
	'jumlah_bencana_baru'=>count($bencana_baru),
	'kejadian_baru'=>$kejadian_baru,
	'jumlah_kejadian_baru'=>count($kejadian_baru),
];

// echo $koneksi->query("SELECT * FROM laporan WHERE is_new='true' AND is_read='false'");
echo json_encode($data);

?>