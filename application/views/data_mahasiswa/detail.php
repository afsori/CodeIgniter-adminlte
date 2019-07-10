<!-- <div class="container">
    <div class="row-mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></h6>
                    <p class="card-text"><?= $mahasiswa['nrp']; ?></p>
                    <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
                    <a href="<?= base_url(); ?>Data_mahasiswa/mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div> -->

<section class="content-header">
    <h1>
        Detail Data Mahasiswa
    </h1>
</section>

<section class="content">

    <div class="row">
        <!-- <div class="col-md-3"> -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <!-- <img class="profile-user-img img-responsive img-circle" src="../../dist/img/afs.jpg" alt="User profile picture">

        <h3 class="profile-username text-center">Ganteng</h3>

        <p class="text-muted text-center">Pelajar</p> -->

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <td><b>Nama</b></td>
                        <td class="pull-center"> : <?= $mahasiswa['nama']; ?></td>
                        <!-- <b>NIS :</b> <a class="pull-center">1,322</a> -->
                    </li>
                    <li class="list-group-item">
                        <td><b>Email</b></td>
                        <td> : <?= $mahasiswa['email']; ?></td>
                        <!-- <b>Nama :</b> <a class="pull-right">543</a> -->
                    </li>
                    <li class="list-group-item">
                        <td><b>NPM</b></td>
                        <td> : <?= $mahasiswa['nrp']; ?></td>
                        <!-- <b>Jenjang :</b> <a class="pull-right">13,287</a> -->
                    </li>
                    <li class="list-group-item">
                        <td><b>Jurusan</b></td>
                        <td> : <?= $mahasiswa['jurusan']; ?></td>
                        <!-- <b>Jenjang :</b> <a class="pull-right">13,287</a> -->
                    </li>
                </ul>
                <div type="button" name="tambah">
                    <a href="<?= base_url(); ?>Data_mahasiswa/mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
                <!-- <a href="<?= base_url(); ?>Data_mahasiswa/mahasiswa" class=" col-md-3 btn btn-primary btn-block"><b>Kembali</b></a> -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- </div> -->
    </div>
</section>