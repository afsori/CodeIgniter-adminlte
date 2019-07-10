<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary ">
            <div class="box-header">
                <h3 class="box-title">Form Ubah Data Dosen</h3>
            </div>

            <div class="box-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $dosen['id']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $dosen['nama']; ?>">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="id">NIK</label>
                        <input type="text" class="form-control" id="id" name="nik" value="<?= $dosen['nik']; ?>">
                        <small class=" form-text text-danger"><?= form_error('nik'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $dosen['alamat']; ?>">
                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $dosen['email']; ?>">
                        <small class=" form-text text-danger"><?= form_error('email'); ?></small>
                    </div>
                    <button type=" submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>