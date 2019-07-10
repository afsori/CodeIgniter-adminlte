<section class="content-header">
    <h1>
        Detail Data Barang
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
                        <td><b>Kode Barang</b></td>
                        <td class="pull-center"> : <?= $barang['kd_barang']; ?></td>
                        <!-- <b>NIS :</b> <a class="pull-center">1,322</a> -->
                    </li>
                    <li class="list-group-item">
                        <td><b>Nama Barang</b></td>
                        <td> : <?= $barang['nm_barang']; ?></td>
                        <!-- <b>Nama :</b> <a class="pull-right">543</a> -->
                    </li>
                    <li class="list-group-item">
                        <td><b>Stok</b></td>
                        <td> : <?= $barang['stok']; ?></td>
                        <!-- <b>Jenjang :</b> <a class="pull-right">13,287</a> -->
                    </li>
                    <li class="list-group-item">
                        <td><b>Keterangan</b></td>
                        <td> : <?= $barang['keterangan']; ?></td>
                        <!-- <b>Jenjang :</b> <a class="pull-right">13,287</a> -->
                    </li>
                </ul>
                <div type="button" name="kembali">
                    <a href="<?= base_url(); ?>Inventaris" class="btn btn-primary">Kembali</a>
                </div>
                <!-- <a href="<?= base_url(); ?>Data_mahasiswa/mahasiswa" class=" col-md-3 btn btn-primary btn-block"><b>Kembali</b></a> -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- </div> -->
    </div>
</section>