<?php 

include '../config/koneksi.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';

if(empty($id)){
	echo 'Kolom id tidak boleh kosong';
}
else{
	$query = $koneksi->query("DELETE FROM laporan WHERE id='".$id."'");
	if ($query) {
		echo 'data sukses dihapus';
		$koneksi->query("ALTER TABLE laporan AUTO_INCREMENT=0");
	}
	else{
		echo 'data gagal dihapus ('.$id.')';
	}
}

?>