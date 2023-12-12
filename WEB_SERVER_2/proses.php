<?php 

include 'config/koneksi.php';

if($_GET['data']=='tambah_bencana'){
	$nama_file = rand().".jpeg";
	if ($koneksi->query("INSERT INTO laporan(gmbr,nm_pelapor,tlp,lokasi,tanggal,isi,jenis,is_new,is_read,kecamatan) values('".$nama_file."','".$_POST['nm_pelapor']."','".$_POST['tlp']."','".$_POST['lokasi']."','".$_POST['tanggal']."','".$_POST['isi']."','Laporan Bencana','false','true','".$_POST['lokasi']."')")&&move_uploaded_file($_FILES['gmbr']['tmp_name'], $folder.'/'.$nama_file)) {
		header("Location:index.php?data=bencana");
		exit();
	}
	else{
		header("Location:index.php?data=bencana");
		exit();	
	}
}
else if($_GET['data']=='ubah_bencana'){
	// var_dump($_FILES['gmbr']['tmp_name']);
	if ($_FILES['gmbr']['tmp_name']) {
		// echo 'ada';
		$get_file = $koneksi->query("SELECT * FROM laporan where id='".$_GET['id']."'");
		while($data = mysqli_fetch_array($get_file)){
			if (file_exists($folder.'/'.$data['gmbr'])) {
				unlink($folder.'/'.$data['gmbr']);
			}
		}
		$nama_file = rand().".jpeg";
		if ($koneksi->query("UPDATE laporan SET gmbr='".$nama_file."',nm_pelapor='".$_POST['nm_pelapor']."',tlp='".$_POST['tlp']."',lokasi='".$_POST['lokasi']."',tanggal='".$_POST['tanggal']."',isi='".$_POST['isi']."',status='".$_POST['status']."',kronologi='".$_POST['kronologi']."',kecamatan='".$_POST['lokasi']."' WHERE id='".$_GET['id']."'")&&move_uploaded_file($_FILES['gmbr']['tmp_name'], $folder.'/'.$nama_file)) {
			header("Location:index.php?data=bencana");
			exit();		
		}
		else{
			header("Location:index.php?data=bencana");
			exit();
		}
	}
	else{
		// echo 'tidak';
		// var_dump($_POST);
		if ($koneksi->query("UPDATE laporan SET nm_pelapor='".$_POST['nm_pelapor']."',tlp='".$_POST['tlp']."',lokasi='".$_POST['lokasi']."',tanggal='".$_POST['tanggal']."',isi='".$_POST['isi']."',status='".$_POST['status']."',kronologi='".$_POST['kronologi']."',kecamatan='".$_POST['lokasi']."' WHERE id='".$_GET['id']."'")) {
			header("Location:index.php?data=bencana");
			exit();		
		}
		else{
			header("Location:index.php?data=bencana");
			exit();
		}
	}
}
else if ($_GET['data']=='hapus_bencana'&&$_GET['id']!=''&&$_GET['id']>0) {
	$get_file = $koneksi->query("SELECT * FROM laporan where id='".$_GET['id']."'");
	while($data = mysqli_fetch_array($get_file)){
		if (file_exists($folder.'/'.$data['gmbr'])) {
			unlink($folder.'/'.$data['gmbr']);
		}
	}
	$hapus = $koneksi->query("DELETE FROM laporan WHERE id='".$_GET['id']."'");
	if ($hapus) {
		$koneksi->query("ALTER TABLE laporan AUTO_INCREMENT=0");
		header("Location:index.php?data=bencana");
		exit();
	}
	else{
		header("Location:index.php?data=bencana");
		exit();	
	}
}
else if($_GET['data']=='tambah_kejadian'){
	$nama_file = rand().".jpeg";
	if ($koneksi->query("INSERT INTO laporan(gmbr,nm_pelapor,tlp,lokasi,tanggal,isi,jenis,is_new,is_read,kecamatan) values('".$nama_file."','".$_POST['nm_pelapor']."','".$_POST['tlp']."','".$_POST['lokasi']."','".$_POST['tanggal']."','".$_POST['isi']."','Laporan Kejadian','false','true','".$_POST['lokasi']."')")&&move_uploaded_file($_FILES['gmbr']['tmp_name'], $folder.'/'.$nama_file)) {
		header("Location:index.php?data=kejadian");
		exit();
	}
	else{
		header("Location:index.php?data=kejadian");
		exit();	
	}
}
else if($_GET['data']=='ubah_kejadian'){
	// var_dump($_FILES['gmbr']['tmp_name']);
	if ($_FILES['gmbr']['tmp_name']) {
		// echo 'ada';
		$get_file = $koneksi->query("SELECT * FROM laporan where id='".$_GET['id']."'");
		while($data = mysqli_fetch_array($get_file)){
			if (file_exists($folder.'/'.$data['gmbr'])) {
				unlink($folder.'/'.$data['gmbr']);
			}
		}
		$nama_file = rand().".jpeg";
		if ($koneksi->query("UPDATE laporan SET gmbr='".$nama_file."',nm_pelapor='".$_POST['nm_pelapor']."',tlp='".$_POST['tlp']."',lokasi='".$_POST['lokasi']."',tanggal='".$_POST['tanggal']."',isi='".$_POST['isi']."',status='".$_POST['status']."',kronologi='".$_POST['kronologi']."',kecamatan='".$_POST['lokasi']."' WHERE id='".$_GET['id']."'")&&move_uploaded_file($_FILES['gmbr']['tmp_name'], $folder.'/'.$nama_file)) {
			header("Location:index.php?data=kejadian");
			exit();		
		}
		else{
			header("Location:index.php?data=kejadian");
			exit();
		}
	}
	else{
		// echo 'tidak';
		// var_dump($_POST);
		if ($koneksi->query("UPDATE laporan SET nm_pelapor='".$_POST['nm_pelapor']."',tlp='".$_POST['tlp']."',lokasi='".$_POST['lokasi']."',tanggal='".$_POST['tanggal']."',isi='".$_POST['isi']."',status='".$_POST['status']."',kronologi='".$_POST['kronologi']."',kecamatan='".$_POST['lokasi']."' WHERE id='".$_GET['id']."'")) {
			header("Location:index.php?data=kejadian");
			exit();		
		}
		else{
			header("Location:index.php?data=kejadian");
			exit();
		}
	}
	// $nama_file = rand().".jpeg";
	// if ($koneksi->query("INSERT INTO laporan(gmbr,nm_pelapor,tlp,lokasi,tanggal,isi,jenis) values('".$nama_file."','".$_POST['nm_pelapor']."','".$_POST['tlp']."','".$_POST['lokasi']."','".$_POST['tanggal']."','".$_POST['isi']."','Laporan Kejadian')")&&move_uploaded_file($_FILES['gmbr']['tmp_name'], $folder.'/'.$nama_file)) {
	// 	header("Location:index.php?data=kejadian");
	// 	exit();
	// }
	// else{
	// 	header("Location:index.php?data=kejadian");
	// 	exit();	
	// }
}
else if ($_GET['data']=='hapus_kejadian'&&$_GET['id']!=''&&$_GET['id']>0) {
	$get_file = $koneksi->query("SELECT * FROM laporan where id='".$_GET['id']."'");
	while($data = mysqli_fetch_array($get_file)){
		if (file_exists($folder.'/'.$data['gmbr'])) {
			unlink($folder.'/'.$data['gmbr']);
		}
	}
	$hapus = $koneksi->query("DELETE FROM laporan WHERE id='".$_GET['id']."'");
	if ($hapus) {
		$koneksi->query("ALTER TABLE laporan AUTO_INCREMENT=0");
		header("Location:index.php?data=kejadian");
		exit();
	}
	else{
		header("Location:index.php?data=kejadian");
		exit();	
	}
}


?>