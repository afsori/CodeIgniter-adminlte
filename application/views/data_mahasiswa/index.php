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
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Cari </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <br>
                <div type="button" name="tambah">
                    <a href="<?= base_url(); ?>Data_mahasiswa/tambah" class="btn btn-primary ">
                        <i class="fa fa-plus"></i> Tambah Data Mahasiswa
                        <!-- <i class="fa fa-arrow-plus-right"> -->
                        </i></a>
                </div>
                <br>
                <h1 class="box-title">Daftar Mahasiswa</h1>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // $no = 1;
                        foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <td><?= ++$start; ?></td>
                                <td><?= $mhs['nama']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>Data_mahasiswa/hapus/<?= $mhs['id']; ?>" class="label label-danger " onclick="return confirm('yakin ?');">Hapus</a>
                                    <a href="<?= base_url(); ?>Data_mahasiswa/ubah/<?= $mhs['id']; ?>" class="label label-success ">Ubah</a>
                                    <a href="<?= base_url(); ?>Data_mahasiswa/detail/<?= $mhs['id']; ?>" class="label label-primary ">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="box-footer clearfix">

                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>

        </div>
    </div>
</div>