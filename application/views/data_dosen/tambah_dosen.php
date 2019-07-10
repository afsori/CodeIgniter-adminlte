<!-- <div class="row">
    <div class="col-xs-12">
        <div class="box box-primary ">
            <div class="box-header">
                <h3 class="box-title">Daftar Dosen</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama ...">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>

                <div class="form-group">
                    <label for="nrp">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik">
                    <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                </div>
                <div class="form-group">
                    <label for="nama">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat ...">
                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                </div>
                <button type="submit" name="tambah_dosen" class="btn btn-primary float-right">Tambah Data </button>
                <a href="<?= base_url(); ?>Data_dosen" class="btn btn-primary float-right">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div> -->

<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary ">
            <div class="box-header">
                <h3 class="box-title">Form Tambah Data Dosen</h3>
            </div>

            <div class="box-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nrp">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik">
                        <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                        <small class="form-text text-danger"><?= form_error('email'); ?></small>
                    </div>

                    <button type="submit" name="tambah" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data </button>
                    <a href="<?= base_url(); ?>Data_dosen" class="btn btn-primary float-right">Kembali</a>

                </form>
            </div>
        </div>
    </div>
</div>