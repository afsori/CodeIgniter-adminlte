<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Data Inventaris Barang</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-wrench"></i></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <!-- <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/remunerasi/setting/score_jabatan/241'">Tambah Data</button> -->
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
                </div>
                <br>
                <br>
                <!-- <a href="<?= site_url() ?>" data-toggle="modal" data-target="#modal-default"> -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-plus"></i> Tambah Data
                </button>
                <!-- </a> -->

                <div class="modal modal-info fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
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
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal"> <i class="fa fa-close"></i> Batal</button>
                                <a href="<?= base_url(); ?>inventaris">
                                    <button type="submit" name="tambah" class="btn btn-outline"><i class="fa fa-plus"></i> Tambah Data</button>
                                </a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <?php if ($this->session->flashdata('flash')) : ?>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="alert alert-success alert-dismissible" role="alert">
                                Data Barang <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <table class="table table-bordered table-responsive table-striped">
                    <thead align="center">
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama Barang</th>
                            <th width="5%">Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($barang as $brg) {
                            ?>
                            <tr>
                                <td align="center"><?= $no; ?></td>
                                <td><?= $brg['nm_barang'] ?></td>
                                <td align="center"><?= $brg['stok'] ?></td>
                                <td>
                                    <a href="<?= base_url() ?>Inventaris/hapusdata/<?= $brg['brg_id']; ?>" class=" btn btn-danger btn-sm " onclick="javasciprt:return confirm('Data Barang Akan Dihapus ?')"><i class="fa fa-trash-o" aria-hidden=" true "></i></a>
                                    <a href="<?= base_url() ?>Inventaris/update/<?= $brg['brg_id']; ?>" class=" btn btn-success btn-sm "><i class="fa fa-edit" aria-hidden=" true "></i></a>
                                    <a href="<?= base_url() ?>Inventaris/detilBarang/<?= $brg['brg_id']; ?>" class=" btn btn-primary btn-sm "><i class="fa fa-paper-plane" aria-hidden=" true "></i></a>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
                <div class="row">

                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
<!-- </section> -->