<!-- <div class="modal modal-info fade" id="modal-info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Form Tambah Data</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
            </div>
        </div>
    </div>
  
</div> -->

<div class="modal modal-info fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <!-- <h4 class="modal-title">Info Modal</h4> -->
            </div>
            <div class="modal-body">
                <!-- <p>One fine body&hellip;</p> -->
                <!-- <div class="box box-primary "> -->
                <div class="box-header">
                    <h3 class="box-title">Form Tambah Data Mahasiswa</h3>
                </div>
                <div class="box-body">
                    <form action="<?= base_url() ?>Inventaris/tambahbarang" method="post">
                        <div class="form-group">
                            <label for="kd_barang" class="col-form-label">Kode Barang</label>
                            <input type="text" class="form-control" id="kd_barang" name="kd_barang">
                            <small class="form-text text-danger"><?= form_error('kd_barang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nm_barang" class="col-form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="nm_barang" name="nm_barang">
                            <small class="form-text text-danger"><?= form_error('nm_barang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" class="form-control" id="stok" name="stok">
                            <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                            <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                        </div>

                </div>
                <!-- </div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal"> <i class="fa fa-close"></i> Batal</button>
                <a href="<?= base_url(); ?>inventaris">
                    <button type="submit" name="tambah" class="btn btn-outline"><i class="fa fa-plus"></i> Tambah Data</button>
                </a>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>