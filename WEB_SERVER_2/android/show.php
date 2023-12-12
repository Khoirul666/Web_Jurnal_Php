<?php 

include '../config/koneksi.php';

$query = $koneksi->query("SELECT * FROM laporan");

$json = array();

// var_dump(mysqli_fetch_assoc($query));

while ($row = mysqli_fetch_assoc($query)) {
	// $json[] = $row;
	$tgl="";
	if ($row['tanggal']) {
		$x = explode("-",$row['tanggal']);

		if ($x[1]=="01") {$x[1]='Januari';}
		else if ($x[1]=="02") {$x[1]='Februari';}
		else if ($x[1]=="03") {$x[1]='Maret';}
		else if ($x[1]=="04") {$x[1]='April';}
		else if ($x[1]=="05") {$x[1]='Mei';}
		else if ($x[1]=="06") {$x[1]='Juni';}
		else if ($x[1]=="07") {$x[1]='Juli';}
		else if ($x[1]=="08") {$x[1]='Agustus';}
		else if ($x[1]=="09") {$x[1]='September';}
		else if ($x[1]=="10") {$x[1]='Oktober';}
		else if ($x[1]=="11") {$x[1]='November';}
		else if ($x[1]=="12") {$x[1]='Desember';}
		else{
			$x[2]=0;$x[1]=0;$x[0]=0;
		}
		$tgl = $x[2].' '.$x[1].' '.$x[0];
	}

	array_push($json, 
		[
			'id'=>$row['id'],
			'gmbr'=>$row['gmbr'],
			'nm_pelapor'=>$row['nm_pelapor'],
			'tlp'=>$row['tlp'],
			'lokasi'=>$row['lokasi'],
			'tanggal'=>$tgl,
			'isi'=>$row['isi'],
			'jenis'=>$row['jenis'],
			'status'=>$row['status'],
			'kronologi'=>$row['kronologi'],
		]
	);
}

echo json_encode($json);

mysqli_close($koneksi);

?>