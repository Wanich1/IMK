<?php
 require_once('../admin/modul/head.php');
 require_once('../admin/modul/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class='content-wrapper'>
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
        Data Nilai
            
        <small> UTS</small></h1>
      <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
        <li><a href='#'>Nilai</a></li>
		    <li><a href='#'>IPA</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class='content'>
      <div class='row'>
        <div class='col-xs-12'><!-- /.box -->

          <div class='box'>
            <div class='box-header'>
              <h3 class='box-title'><a href='export/excel_analisis.php?ujian=1&kelas=2'><button type='button' class='btn btn-block btn-primary'><i class='fa fa-check-square'></i>  Analisis Soal</button></a></h3>
<a href='export/excel_nilai.php?ujian=1&kelas=2'>			  <button type='button' class='btn btn-info pull-right' >
               <i class='fa fa-download'></i> Download Ke excel
              </button></a>
            </div>
            <!-- /.box-header -->
            <div class='box-body'>
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
	<th>No</th>	
	<th>Nama</th>
	<th>Status</th>
	<th>Benar</th>
	<th>Salah</th>
	<th>Kosong</th>
	<th>NILAI</th>
	<th>aksi</th>
	          </tr>
                </thead>
                <tbody><tr><td width='20' >1</td>
                <td>M. Ichwan Fanani</td>
                <td></td>
	            <td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><a href=javascript:confirmdelete('modul/mod_guru/aksi_unbk.php?module=nilai&act=hapus&ujian=1&kls=2&nilai=&nis=123')><button type='button' class='btn btn-danger'><i class='fa fa-trash'></i>  Hapus</button></a></td>
				</tr></tbody>
                <tfoot>
                <tr>
    <th>No</th>	
	<th>Nama</th>
	<th>Status</th>
	<th>Benar</th>
	<th>Salah</th>
	<th>Kosong</th>
	<th>NILAI</th>
	<th>aksi</th>
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