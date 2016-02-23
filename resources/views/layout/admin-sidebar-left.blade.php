
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('asset/dist/img/avatar5.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>USER : ADMIN UKT</p>

              <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="header">Cari Mahasiswa</li> 
          </ul>
          <form class="sidebar-form" method="get" action="#">
            <div class="input-group">
              <input type="text" placeholder="Search..." class="form-control" name="q">
              <span class="input-group-btn">
                <button class="btn btn-flat" id="search-btn" name="search" type="submit"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">            
            <li class="header">Main Menu</li>
            <li><a href="{{ URL('/home') }}"><i class="fa fa-dashboard"></i> Dashboard </a></li>            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-database"></i> <span> Data Master </span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL('datamaster/fakultas') }}"><i class="fa fa-university"></i> Fakultas</a></li>
                <li><a href="{{ URL('datamaster/jurusan') }}"><i class="fa fa-university"></i> Jurusan/Prodi</a></li>
                <li><a href="{{ URL('datamaster/konsentrasi') }}"><i class="fa fa-university"></i> Konsentrasi</a></li>
                <li><a href="{{ URL('datamaster/jalurmasuk') }}"><i class="fa fa-road"></i> Jalur Masuk </a></li>
                <li><a href="{{ URL('datamaster/kelompokukt') }}"><i class="fa fa-group"></i> Kelompok UKT </a></li>
                <li><a href="{{ URL('datamaster/profileukt') }}"><i class="fa fa-user-plus"></i> Profile UKT </a></li>
                <li><a href="{{ URL('datamaster/grouppertanyaan') }}"><i class="fa fa-question-circle"></i> Group Pertanyaan </a></li>
                <li><a href="{{ URL('datamaster/pertanyaan') }}"><i class="fa fa-question"></i> Pertanyaan </a></li>
                <li><a href="{{ URL('datamaster/bobot') }}"><i class="fa fa-magnet"></i> Bobot </a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-gear"></i> <span> Setting </span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL('setting/periode') }}"><i class="fa fa-clock-o"></i> Periode Pengisian UKT</a></li>
                <li><a href="{{ URL('setting/profilegroup') }}"><i class="fa fa-group"></i> Profile Group</a></li>
                <li><a href="{{ URL('setting/isigrouppertanyaan') }}"><i class="fa fa-question-circle"></i> Isi Group Pertanyaan</a></li>
                <li><a href="{{ URL('setting/bobotpertanyaan') }}"><i class="fa fa-magnet"></i> Pembobotan Pertanyaan</a></li>
                <li><a href="{{ URL('setting/bobotjawaban') }}"><i class="fa fa-magnet"></i> Pembobotan Jawaban</a></li>
                <li><a href="{{ URL('setting/persentaseukt') }}"><i class="fa fa-pie-chart"></i> Persentase Kelompok UKT </a></li>
                <li><a href="{{ URL('setting/proditawar') }}"><i class="fa fa-bank"></i> Prodi Ditawarkan </a></li>
              </ul>
            </li>
            <li><a href="{{ URL('lihatukt') }}"><i class="fa fa-desktop"></i> Lihat UKT </a></li>
            <li><a href="{{ URL('lihatisiukt') }}"><i class="fa fa-desktop"></i> Lihat Isian UKT </a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-gear"></i> <span> Hitung UKT </span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL('proses/fcm') }}"><i class="fa fa-rocket"></i> FCM </a></li>
                <li><a href="{{ URL('proses/electre') }}"><i class="fa fa-star"></i> ELECTRE </a></li>
                <li><a href="#"><i class="fa fa-star"></i> FCM ELECTRE </a></li>
              </ul>
            </li> 
          </ul>
        </section>
        <!-- /.sidebar -->