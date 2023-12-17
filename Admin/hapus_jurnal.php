<div class="modal fade" id="hjurnalModal<?=$no?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">KONFIRMASI JURNAL?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    APAKAH ANDA YAKIN INGIN MENGAHPUS JURNAL INI ?
                    <input type="hidden" name="id_jurnal" value="<?= $data['id_jurnal']?>">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">BATAL</button>
                    <button class="btn btn-primary" type="submit" name="hapus_jurnal">YA</button>
                </div>
            </form>
        </div>
    </div>
</div>