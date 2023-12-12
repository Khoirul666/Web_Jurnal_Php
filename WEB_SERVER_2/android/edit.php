<?php 

include '../config/koneksi.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$edit = isset($_POST['edit']) ? $_POST['edit'] : '';
class emp{};

if (!empty($edit) && $edit=="LOAD") {
	if(!empty($id)){
		$query = $koneksi->query("SELECT * FROM laporan WHERE id=".$id);
		$row = mysqli_fetch_array($query);
		if (!empty($row)) {
			$response = new emp();
			$response->id = $row["id"];
			$response->gmbr = $row["gmbr"];
			$response->nm_pelapor = $row["nm_pelapor"];
			$response->tlp = $row["tlp"];
			$response->lokasi = $row["lokasi"];
			$response->kecamatan = $row["kecamatan"];

			$tanggal = $row["tanggal"];
			if ($tanggal) {
				$x = explode("-", $tanggal);

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

			$response->tanggal = $tgl;
			$response->isi = $row["isi"];
			$response->jenis = $row["jenis"];
			$response->status = $row["status"];
			$response->kronologi = $row["kronologi"];
			echo (json_encode($response));
		}
	}
	else{
		echo 'id data kosong';
	}
}
else if (!empty($edit) && $edit=="UBAH") {
	$dir = "images/";
	$nama = DATE("YmdHis").".jpeg";

	if(!empty($id)){
		$nm_pelapor = isset($_POST['nm_pelapor']) ? $_POST['nm_pelapor'] : '';
		$tlp = isset($_POST['tlp']) ? $_POST['tlp'] : '';
		$lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : '';
		$kecamatan = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '';
		$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
		$isi = isset($_POST['isi']) ? $_POST['isi'] : '';
		$image = isset($_POST['image']) ? $_POST['image'] : '';

		$tgl = '';

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
		if(empty($nm_pelapor) || empty($tlp) || empty($lokasi) || empty($tgl) || empty($isi) || empty($kecamatan) || empty($image)){
		// echo 'data gagal diinput ('.$nm_pelapor.') ('.$tlp.') ('.$lokasi.') ('.$tgl.') ('.$isi.') ('.$jenis.') (';
			echo 'Kolom isian tidak boleh kosong';
		}
		else{
			$query = $koneksi->query("
				update laporan set 
				gmbr='".$nama."',
				nm_pelapor='".$nm_pelapor."',
				tlp='".$tlp."',
				lokasi='".$lokasi."',
				kecamatan='".$kecamatan."',
				tanggal='".$tgl."',
				isi='".$isi."'
				where id='".$id."'");
				$target_dir = $dir.$nama;
			if ($query&&file_put_contents($target_dir,base64_decode($image))) {
				echo 'data sukses diinput';
			}
			else{
				echo 'data gagal diinput ('.$nm_pelapor.') ('.$tlp.') ('.$lokasi.') ('.$tgl.') ('.$isi.') ('.$kecamatan.')';

			}
		}
	}
	else{
		echo 'id data kosong';
	}
}

?>