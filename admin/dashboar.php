<?php
 require_once('../admin/modul/head.php');
 require_once('../admin/modul/sidebar.php');
?>
     <div class='content-wrapper'>
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
        <li class='active'>Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class='content'>

      <!-- /.row -->
      <!-- Main row -->
      <div class='row'>
        <!-- Left col -->
        <section class='col-lg-7 connectedSortable'>
         
          

          <!-- Chat box -->
          <div class='box box-success'>
            <div class='box-header'>
              <i class='fa fa-bell'></i>

              <h3 class='box-title'>Kabar Berita Umum</h3>
 </div>
         </div> 
		 
		 
		   <div class='box box-widget'>
		  <!-- Input addon -->
		 <form method=POST action='modul/mod_umum/aksi_isi.php?module=home&act=kabar' enctype='multipart/form-data'>
     <div class='box-body'>
            
			 <div class='form-group'>
                  <textarea class='form-control textarea' name='isi_pengumuman' rows='3' placeholder='Isi Pengumuman ...' ></textarea>
                </div>
				<div class='form-group'>
                  <label for='exampleInputFile'>Gambar</label>
                  <input type='file' name='fupload' size=40>

                  <p class='help-block'>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px.</p>
				  </div>
				  	<p class='stdformbutton'>
                                <button class='btn btn-info'>Kirim</button> | 
							
                            </p>
                    </form>
    </div>
          <!-- /.box -->
      </div>
		 
		 
		      </section>
       
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class='col-lg-5 connectedSortable'>

          
          <!-- Calendar -->
          <div class='box box-solid bg-blue-gradient'>
            <div class='box-header'>
              <i class='fa fa-calendar'></i>

              <h3 class='box-title'>Calendar</h3>
              <!-- tools box -->
            
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class='box-body no-padding'>
              <!--The calendar -->
              <div id='calendar' style='width: 100%'></div>
            </div>
            <!-- /.box-body -->
         
          </div>
          <!-- /.box -->
<div class='box box-solid '>
         
		 <img src='../images/iklan/png' height='100%' />
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
 
		 </div>
    </section>
    <!-- /.content -->
  </div> 
  <!-- /.content-wrapper -->
<?php
 require_once('../admin/modul/footer.php');
?>
 