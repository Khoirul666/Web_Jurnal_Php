<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>TAMBAH DATA KEJADIAN</h5>
                <div class="p-t-20">
                    <a href="index.php?data=kejadian" class="btn btn-success btn-sm text-white"><i class="fa fa-arrow-left"></i> KEMBALI</a>
                </div>
            </div>
            <form action="proses.php?data=tambah_kejadian" enctype="multipart/form-data" method="POST">
                <div class="card-block">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Upload File</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="gmbr" placeholder="Gambar Kejadian" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Pelapor</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nm_pelapor" placeholder="Nama Kejadian" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nomor Tlp</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="tlp" placeholder="Nomor Telp" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Lokasi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="lokasi" placeholder="Lokasi Kejadian" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kecamatan</label>
                        <div class="col-sm-9">
                            <select class="form-control" required name="lokasi">
                                <?php
                                $data_lokasi = $koneksi->query("SELECT * FROM tb_kecamatan");
                                while($data = mysqli_fetch_array($data_lokasi)){
                                    ?>
                                    <option value="<?= $data['id_kecamatan'] ?>"><?= $data['nama_kecamatan'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="tanggal" placeholder="Tanggal Kejadian" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Isi</label>
                        <div class="col-sm-9">
                            <textarea rows="5" cols="5" class="form-control" name="isi" placeholder="Isi Laporan"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <button type="submit" class="form-control btn btn-sm btn-success">SIMPAN</button>
                        </div>
                        <div class="col-sm-6">
                            <a href="index.php?data=kejadian" class="form-control btn btn-sm btn-default">BATAL</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    
</script>