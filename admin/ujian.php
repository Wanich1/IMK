<?php
 require_once('../admin/modul/head.php');
 require_once('../admin/modul/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class='content-wrapper'>
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
        Data Ujian Anda
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
            <div class='box-header'>
              <h3 class='box-title'><a href='?module=ujian&act=tambahujian'><button type='button' class='btn btn-block btn-primary'><i class='glyphicon glyphicon-pencil'></i>  Tambah Ujian</button></a></h3>
            </div>
            <!-- /.box-header -->
            <div class='box-body'>
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
		  
    <th>No</th>	
	<th>Judul</th>
	<th>Mapel</th>
	<th>Tanggal Ujian</th>
	<th>Bank Soal</th>
	<th>Aksi</th>
	          </tr>
                </thead>
                <tbody><tr><td width='20' >1</td>
                <td >UTS</td>
                <td>IPA</td>
                <td>01 Januari 2020</td><td><a href='/BDL/admin/soal.php' class='btn btn-info'><i class='fa  fa-server'></i> Jumlah Soal 30</a>    </td><td>   
<a href=export/soal.php?id=1 class='btn btn-info'><i class='fa  fa-print'></i></a> 
   <a href='/BDL/admin/pil_kelas.php' class='btn btn-warning'><i class='fa  fa-bullseye'></i></a> 
   <a href=?module=ujian&act=editujian&id=1 class='btn btn-info'><i class='fa fa-pencil'></i></a>   
   <a href=javascript:confirmdelete('modul/mod_guru/aksi_unbk.php?module=ujian&act=hapus&id=1') 
   class='btn btn-danger'><i class='fa fa-trash'></i></a></td>
                </tr></tbody>
                <tfoot>
                <tr>
                 
		  
    <th>No</th>	
	<th>Judul</th>
	<th>Mapel</th>
	<th>Tanggal Ujian</th>
	<th>Bank Soal</th>
	<th>Aksi</th>
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