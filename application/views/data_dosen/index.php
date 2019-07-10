<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary ">
            <div class="box-header">
                <?php if ($this->session->flashdata('flash')) : ?>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="alert alert-success alert-dismissible" role="alert">
                                Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row mt-3">
                    <div class="col-md-5">
                        <form action="" method="post">
                            <div class="input-group" style="width:450px;">
                                <input type="text" class="form-control" placeholder="Cari Data Mahasiswa.." name="keyword">
                                <div class="input-group-btn" style=" width: 100px;">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <br>
                <h3 class="box-title">Daftar Dosen</h3>
            </div>
            <!-- <div class="box-body table-responsive no-padding"> -->
            <?php if (empty($dosen)) : ?>
                <div class="alert alert-danger" style="width:450px;" role="alert">
                    Data Dosen Tidak Ditemukan
                </div>
            <?php endif; ?>

            <?php foreach ($dosen as $dsn) : ?>
                <li class="list-group-item">
                    <?= $dsn['nama']; ?>
                    <a href="<?= base_url(); ?>Data_dosen/hapus_dosen/<?= $dsn['id']; ?>" class="label label-danger pull-right" onclick="return confirm('yakin ?');">Hapus</a>
                    <a href="<?= base_url(); ?>Data_dosen/ubah_dosen/<?= $dsn['id']; ?>" class="label label-success pull-right">Ubah</a>
                    <a href="<?= base_url(); ?>Data_dosen/detail_dosen/<?= $dsn['id']; ?>" class="badge badge-primary float-right">Detail</a>
                </li>
            <?php endforeach ?>

            <!-- <div class="box-footer clearfix">
                <button type="button" name="tambah">
                    <a href=" <?= base_url(); ?>Data_mahasiswa" class="btn btn-primary pull-right"> Cetak <i class="fa fa-arrow-circle-right"></i> </a>
                </button>
            </div> -->

            <div class="box-footer clearfix">
                <div type="button" name="tambah_dosen">
                    <a href="<?= base_url(); ?>Data_dosen/tambah_dosen" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Data Dosen </a>
                </div>
            </div>
        </div>
    </div>
</div>