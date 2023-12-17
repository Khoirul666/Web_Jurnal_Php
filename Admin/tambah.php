<?php 
if (isset($_POST['simpan_jurnal'])) {
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $file_jurnal = $_FILES['file_jurnal']['name'];

    $ext_file = pathinfo($file_jurnal,PATHINFO_EXTENSION);
    $tmp_file = $_FILES['file_jurnal']['tmp_name'];
    $path_file = "../Assets/backend/file/".$_SESSION['id_users']."_".DATE('YmdHis',time()+7*60*60)."_".rand().'.'.$ext_file;
    $id_user = $_SESSION['id_users'];

    $upload_file = move_uploaded_file($tmp_file,$path_file);
    $input_data_jurnal = $koneksi->query("INSERT INTO jurnal(id_user,judul,tahun,nama_file) VALUES ('$id_user','$judul','$tahun','$path_file')");
    
    // var_dump($input_data_jurnal,$koneksi);
    if ($upload_file&&$input_data_jurnal) {
        echo "<div class='alert alert-success'>Berhasil Upload Berkas</div>
        <meta http-equiv='refresh' content='1; url= jurnal.php'/>";
    }
    else{
        echo "<div class='alert alert-warning'>Gagal Upload, Silahkan coba lagi.</div>
        <meta http-equiv='refresh' content='2'>";
    }
}

?>
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ISI FORM?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control mb-2" name="judul" placeholder="JUDUL JURNAL">
                    <input type="text" class="form-control mb-2" name="tahun" placeholder="TAHUN JURNAL ex:2023">
                    <input type="file" class="form-control mb-2" name="file_jurnal">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit" name="simpan_jurnal">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
</div>