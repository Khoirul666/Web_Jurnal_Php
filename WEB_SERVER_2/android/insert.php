<?php 

include '../config/koneksi.php';

$gmbr = "";
$nm_pelapor = isset($_POST['nm_pelapor']) ? $_POST['nm_pelapor'] : '';
$tlp = isset($_POST['tlp']) ? $_POST['tlp'] : '';
$lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : '';
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$isi = isset($_POST['isi']) ? $_POST['isi'] : '';
$image = isset($_POST['image']) ? $_POST['image'] : '';
$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';
$kecamatan = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '';
$tgl = '';

// echo dirname(__DIR__)."/assets/images/app/";

if ($tanggal) {
	$x = explode(" ", $tanggal);

	if ($x[1]=="Januari") {$x[1]='01';}
	else if ($x[1]=="Februari") {$x[1]='02';}
	else if ($x[1]=="Maret") {$x[1]='03';}
	else if ($x[1]=="April") {$x[1]='04';}
	else if ($x[1]=="Mei") {$x[1]='05';}
	else if ($x[1]=="Juni") {$x[1]='06';}
	else if ($x[1]=="Juli") {$x[1]='07';}
	else if ($x[1]=="Agustus") {$x[1]='08';}
	else if ($x[1]=="September") {$x[1]='09';}
	else if ($x[1]=="Oktober") {$x[1]='10';}
	else if ($x[1]=="November") {$x[1]='11';}
	else if ($x[1]=="Desember") {$x[1]='12';}
	else{
		$x[2]=0;$x[1]=0;$x[0]=0;
	}
	$tgl = $x[2].'-'.$x[1].'-'.$x[0];
}

if(empty($nm_pelapor) || empty($tlp) || empty($lokasi) || empty($tgl) || empty($isi) || empty($jenis) || empty($kecamatan) || empty($image)){
	echo 'g i ('.$kecamatan.') ('.$image.') ('.$lokasi.') ('.$tgl.') ('.$isi.') ('.$jenis.') ('.$kecamatan.') ('.$image.') (';
	// echo 'Kolom isian tidak boleh kosong';
}
else{
	$dir = dirname(__DIR__)."/assets/images/app/";
	// echo __DIR__;
	// echo $dir;
	$nama = rand().".jpeg";
	if ($kecamatan=="MOJOROTO") {
		$data_kecamatan = 1;
	}
	if ($kecamatan=="KOTA") {
		$data_kecamatan = 2;
	}
	if ($kecamatan=="PESANTREN") {
		$data_kecamatan = 3;
	}
	$query = $koneksi->query("
		insert into laporan (gmbr,nm_pelapor,tlp,lokasi,tanggal,isi,jenis,kecamatan
		)
		values(
		'".$nama."','".$nm_pelapor."','".$tlp."','".$lokasi."','".$tgl."','".$isi."','".$jenis."','".$data_kecamatan."'
		)
		");
	$target_dir = $dir.$nama;
	
	if ($query&&file_put_contents($target_dir,base64_decode($image))) {
		echo 'data sukses diinput';
	}
	else{
		echo 'data gagal diinput ('.$nm_pelapor.') ('.$tlp.') ('.$lokasi.') ('.$tgl.') ('.$isi.') ('.$jenis.') ('.$data_kecamatan.') (';
	}
}

?>