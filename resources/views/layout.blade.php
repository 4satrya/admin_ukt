<!DOCTYPE html>
<html>

@include('/layout/admin-head')
  
    <body class="skin-red fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      

			 @include('/layout/admin-menubar-top')
      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        @include('/layout/admin-sidebar-left')
        <!-- /.sidebar -->
      </aside>
      
      
       <!-- DISINI BADAN DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN DISINI BADAN  DISINI BADAN  DISINI BADAN  -->
      <!-- DISINI BADAN DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN DISINI BADAN  DISINI BADAN  DISINI BADAN  -->
      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" id="badan">
    	    <div class="overlay" style="display:none;">
				    <div id="loader-wrapper">
				        <div id="loader"></div>
				    </div>
					</div>
        @yield('content')
      </div><!-- /.content-wrapper -->
      
      <!-- DISINI BADAN DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN DISINI BADAN  DISINI BADAN  DISINI BADAN  -->
      <!-- DISINI BADAN DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN DISINI BADAN  DISINI BADAN  DISINI BADAN  -->
      <!-- DISINI BADAN DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN  DISINI BADAN DISINI BADAN  DISINI BADAN  DISINI BADAN  -->
      
      
      
      
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Uang Kuliah Tunggal Mahasiswa Baru</b>
        </div>
        <p> <strong>&copy; 2016 USDI-Ariyady Kurniawan. All Rights Reserved | Design by</strong>  <a href="/"> Admin LTE</a></p>
      </footer>
      
      
      
      @include('/layout/admin-sidebar-right')
      
    
    </div><!-- ./wrapper -->
    

    @include('/layout/admin-footer')
  
    
  
  </body>

    </html>