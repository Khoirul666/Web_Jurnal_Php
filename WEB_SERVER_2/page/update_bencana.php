<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>UBAH DATA BENCANA</h5>
                <div class="p-t-20">
                    <a href="index.php?data=bencana" class="btn btn-success btn-sm text-white"><i class="fa fa-arrow-left"></i> KEMBALI</a>
                </div>
            </div>

            <?php
            $data_bencana = $koneksi->query("SELECT * FROM laporan LEFT JOIN tb_kecamatan ON laporan.kecamatan=tb_kecamatan.id_kecamatan where id='".$_GET['id']."'");
            while($data = mysqli_fetch_array($data_bencana)){
                // echo $data['is_read'];
                if ($data['is_read']=='false') {
                    $koneksi->query("UPDATE laporan SET is_read='true' WHERE id='".$_GET['id']."'");
                }
                ?>
                <form action="proses.php?data=ubah_bencana&id=<?= $data['id'] ?>" enctype="multipart/form-data" method="POST">
                    <div class="card-block">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Upload File</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="gmbr" placeholder="Gambar Bencana">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Pelapor</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nm_pelapor" placeholder="Nama Bencana" required value="<?= $data['nm_pelapor'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nomor Tlp</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tlp" placeholder="Nomor Telp" required value="<?= $data['tlp'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Lokasi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="lokasi" placeholder="Lokasi Bencana" required value="<?= $data['lokasi'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kecamatan</label>
                            <div class="col-sm-9">
                                <select class="form-control" required name="lokasi">
                                    <?php
                                    $data_lokasi = $koneksi->query("SELECT * FROM tb_kecamatan");
                                    while($data_l = mysqli_fetch_array($data_lokasi)){
                                        ?>
                                        <option value="<?= $data_l['id_kecamatan'] ?>" <?= $data_l['id_kecamatan']==$data['id_kecamatan']?'selected':'' ?> ><?= $data_l['nama_kecamatan'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tanggal" placeholder="Tanggal Bencana" required value="<?= $data['tanggal'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Isi</label>
                            <div class="col-sm-9">
                                <textarea rows="5" cols="5" class="form-control" name="isi" placeholder="Isi Laporan"><?= $data['isi'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <select name="status" class="form-control">
                                    <option value="menunggu" <?= $data['status']=='menunggu'?'selected':''?>>MENUNGGU</option>
                                    <option value="diproses" <?= $data['status']=='diproses'?'selected':''?>>DIPROSES</option>
                                    <option value="ditolak" <?= $data['status']=='ditolak'?'selected':''?>>DITOLAK</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kronologi</label>
                            <div class="col-sm-9">
                                <textarea rows="5" cols="5" class="form-control" name="kronologi" placeholder="Kronologi Kejadian"><?= $data['kronologi'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="submit" name="id" value="<?= $data['id'] ?>" class="form-control btn btn-sm btn-success">SIMPAN</button>
                            </div>
                            <div class="col-sm-6">
                                <a href="index.php?data=bencana" class="form-control btn btn-sm btn-default">BATAL</a>
                            </div>
                        </div>
                    </div>
                </form>
                <?php
            }
            ?>

        </div>
    </div>
</div>
<script type="text/javascript">

</script>