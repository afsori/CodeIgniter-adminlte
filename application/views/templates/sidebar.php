<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url() ?>templates/dist/img/afs.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview active">
            <li><a href="<?= site_url() ?>Data_mahasiswa"><i class="fa fa-dashboard"></i> <span>Dashboard </span></a></li>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-files-o"></i>
                    <span>Data</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= site_url() ?>Data_mahasiswa/mahasiswa"><i class="fa fa-circle-o"></i> Data Mahasiswa</a></li>
                    <li><a href="<?= site_url() ?>Data_dosen"><i class="fa fa-circle-o"></i> Data Dosen</a></li>
                    <li><a href="<?= site_url() ?>Data_mahasiswa/testya"><i class=" fa fa-circle-o"></i> test ya</a></li>
                    <li><a href="<?= site_url() ?>Data_mahasiswa/pesan"><i class="fa fa-circle-o"></i> Pesan</a></li>

                </ul>
            </li>
            <li class="">
                <a href="<?= site_url() ?>Inventaris/index">
                    <i class="fa fa-laptop"></i> <span>Inventaris</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
            <!-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>

                </ul>
            </li> -->
            <!-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li> -->
            <li><a href="<?= site_url() ?>auth/logout"><i class="fa fa-sign-out"></i> <span>Log Out </span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>