<div class="row">
    <div class="">
        <div class="box box-primary ">
            <div class="box-header">
                <h3 class="box-title">Form Tambah Data Mahasiswa</h3>
            </div>

            <div class="box-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control" id="nrp" name="nrp">
                        <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                        <small class="form-text text-danger"><?= form_error('email'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="Mate  - Matika">Mate - Matika</option>

                        </select>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data </button>
                    <a href="<?= base_url(); ?>Data_mahasiswa/mahasiswa" class="btn btn-primary float-right">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>Data_mahasiswa/mahasiswa" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id">NPM</label>
                            <input type="text" class="form-control" id="id" name="npm">
                            <small class="form-text text-danger"><?= form_error('npm'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option>Teknik Informatika</option>
                                <option>Manajemen Informatika</option>
                                <option>Bahasa Inggris</option>
                                <option>Bahasa Indonesia</option>
                                <option>Teknik Komputer</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>

                </div>
            </div>
        </div>


    </div>
</div>
</div> -->