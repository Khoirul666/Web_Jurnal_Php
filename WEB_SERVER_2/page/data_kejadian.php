<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>DATA KEJADIAN</h5>
                <div class="p-t-20">
                    <a href="index.php?data=add_kejadian" class="btn btn-success btn-sm text-white"><i class="fa fa-plus"></i> TAMBAH DATA</a>
                </div>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table dataTable" id="rekap_data">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Pelapor</th>
                                <th>TLP</th>
                                <th>Lokasi</th>
                                <th>Tanggal</th>
                                <th>Isi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            $data_kejadian = $koneksi->query("SELECT * FROM laporan where jenis='Laporan Kejadian' AND is_read='false' ORDER BY id DESC");
                            while ($data = mysqli_fetch_array($data_kejadian)) {
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>
                                        <?php if (file_exists($folder.'/'.$data['gmbr'])) {
                                            ?>
                                            <img src="<?= $folder.'/'.$data['gmbr'] ?>" height="100px"><br>
                                            <label class="label label-danger notif_baru">Belum Dibaca</label>
                                            <?php
                                        } 
                                        else{
                                            ?>
                                            -
                                        <?php } 
                                        ?>
                                    </td>
                                    <td><?= $data['nm_pelapor'] ?></td>
                                    <td><?= $data['tlp'] ?></td>
                                    <td><?= $data['lokasi'] ?></td>
                                    <td><?= DATE('d m Y',strtotime($data['tanggal'])) ?></td>
                                    <td><?= $data['isi'] ?></td>
                                    <td>
                                        <a href="index.php?data=read_kejadian&id=<?= $data['id'] ?>" class="btn btn-info btn-sm" style="color:#000"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?data=update_kejadian&id=<?= $data['id'] ?>" class="btn btn-warning btn-sm" style="color:#000"><i class="fa fa-edit"></i></a>
                                        <a href="proses.php?data=hapus_kejadian&id=<?= $data['id'] ?>" class="btn btn-danger btn-sm" style="color:#000"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            $data_kejadian = $koneksi->query("SELECT * FROM laporan where jenis='Laporan Kejadian' AND is_read='true' ORDER BY id DESC");
                            while ($data = mysqli_fetch_array($data_kejadian)) {
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>
                                        <?php if (file_exists($folder.'/'.$data['gmbr'])) {
                                            ?>
                                            <img src="<?= $folder.'/'.$data['gmbr'] ?>" height="100px">
                                            <?php
                                        } 
                                        else{
                                            ?>
                                            -
                                        <?php } 
                                        ?>
                                    </td>
                                    <td><?= $data['nm_pelapor'] ?></td>
                                    <td><?= $data['tlp'] ?></td>
                                    <td><?= $data['lokasi'] ?></td>
                                    <td><?= DATE('d m Y',strtotime($data['tanggal'])) ?></td>
                                    <td><?= $data['isi'] ?></td>
                                    <td>
                                        <a href="index.php?data=read_kejadian&id=<?= $data['id'] ?>" class="btn btn-info btn-sm" style="color:#000"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?data=update_kejadian&id=<?= $data['id'] ?>" class="btn btn-warning btn-sm" style="color:#000"><i class="fa fa-edit"></i></a>
                                        <a href="proses.php?data=hapus_kejadian&id=<?= $data['id'] ?>" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    posisi = "data_kejadian";
</script>