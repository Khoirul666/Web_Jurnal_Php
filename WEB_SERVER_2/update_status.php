<?php 
include 'config/koneksi.php';

$id = isset($_GET['id'])?$_GET['id']:0;

if ($koneksi->query("UPDATE laporan SET is_new='false' WHERE id='".$id."'")) {
	echo json_encode(array(
		'status'=>'berhasil diupdate',
		'id'=>$id
	));
}
else{
	echo json_encode(array(
		'status'=>'gagal diupdate',
		'id'=>$id
	));
}


?>