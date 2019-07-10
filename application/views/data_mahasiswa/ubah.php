<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary ">
            <div class="box-header">
                <h3 class="box-title">Form Ubah Data Mahasiswa</h3>
            </div>

            <div class="box-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="id">NPM</label>
                        <input type="text" class="form-control" id="id" name="nrp" value="<?= $mahasiswa['nrp']; ?>">
                        <small class=" form-text text-danger"><?= form_error('nrp'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']; ?>">
                        <small class=" form-text text-danger"><?= form_error('email'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <?php foreach ($jurusan as $ju) : ?>
                                <?php if ($ju == $mahasiswa['jurusan']) : ?>

                                    <option value="<?= $ju; ?>" selected><?= $ju; ?></option>
                                <?php else : ?>
                                    <option value="<?= $ju; ?>"><?= $ju; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type=" submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>