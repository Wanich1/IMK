<?php
 require_once('../admin/modul/head.php');
 require_once('../admin/modul/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class='content-wrapper'>
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
        Data Ujian
            </h1>
      <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
        <li><a href='#'>Ujian</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class='content'>
      <div class='row'>
        <div class='col-xs-12'><!-- /.box -->

          <div class='box'>
            
            <!-- /.box-header -->
            <div class='box-body'>
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
		  
    <th>No</th>	
	<th>Judul</th>
	<th>Mapel</th>
	<th>Tanggal Ujian</th>
	<th>NILAI</th>
	
	          </tr>
                </thead>
                <tbody><tr><td width='20' >1</td>
                <td >UTS</td>
                <td>IPA</td>
                <td>01 Januari 2020</td><td> <a href='/BDL/admin/detail_nilai.php' class='btn btn-info'><i class='fa  fa-server'></i> 12 IPA 1  (28)</a>  </td></tr></tbody>
                <tfoot>
                <tr>
                 
		  
    <th>No</th>	
	<th>Judul</th>
	<th>Mapel</th>
	<th>Tanggal Ujian</th>
	<th>Nilai</th>
	
	</tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
 require_once('../admin/modul/footer.php');
?>