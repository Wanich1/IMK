<?php
 require_once('../admin/modul/head.php');
 require_once('../admin/modul/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class='content-wrapper'>
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1><i class='fa fa-user'></i>
Data Kelas Siswa       </h1>
      <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
        <li><a href='#'>member</a></li>
        <li><a href='#'>kelas</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class='content'>
      <div class='row'>
        <div class='col-xs-12'><!-- /.box -->

          <div class='box'>
            <div class='box-header'>
              <h3 class='box-title'><a href='?module=siswa&act=tambahkelas'><button type='button' class='btn btn-block btn-primary'><i class='fa fa-user-plus'></i>  Buat Kelas Baru</button></a></h3>
<a href='export/excel_data.php?lv=siswa'>                         <button type='button' class='btn btn-primary pull-right'>
               <i class='fa fa-file-excel-o'></i> Download data semua siswa
              </button> </a> 
			</div>
            <!-- /.box-header -->
            <div class='box-body'>
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
	<th>No</th>	
	<th>Kelas</th>
	<th>Siswa</th>
	<th>Aksi</th>
	          </tr>
                </thead>
                <tbody><tr><td width='20'>1</td>				<td><p style='font-weight: bold'>12 IPA 1</p>
</td>

	            <td width='100'> <a href='/BDL/admin/siswa.php'2 class='btn btn-success'><i class='fa fa-user-secret'></i> Jumlah Siswa 28 anak</a>   
   </td><td width='100'> <a href=?module=siswa&act=editkelas&id=2 class='btn btn-primary'><i class='fa fa-pencil'></i></a>   
<a  class='btn btn-danger'><i class='fa fa-trash'></i></a></td>                </tr></tbody>
                <tfoot>
                <tr>
    <th>No</th>	
	<th>Kelas</th>
	<th>Siswa</th>
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