<?php
 require_once('../admin/modul/head.php');
 require_once('../admin/modul/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class='content-wrapper'>
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
        Kelas Yang ikut
        <small>ujian </small>
      </h1>
      <ol class='breadcrumb'>
        <li><a href='?module=home'><i class='fa fa-dashboard'></i> Home</a></li>
        <li><a href='?module=ujian'>ujian</a></li>
        <li class='active'>Kelas</li>
      </ol>
    </section>

     <!-- Main content -->
    <section class='content'>
      <div class='row'>
        <div class='col-xs-12'><!-- /.box -->

          <div class='box'>
       
       
          
          <!-- Input addon -->
		    <form  method=POST enctype='multipart/form-data' action=modul/mod_guru/aksi_unbk.php?module=ujian&act=kelas>
          <input type=hidden name=id value=1>
         
		 <div class='box-body'>
		 
		 
		 <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
		  
    <th>Tingkat</th>	
	<th>Nama Kelas</th>
	          </tr>
                </thead>
                <tbody> <tr>
<td width='20'>Kelas 1 </td><td>                
<label> <input type='checkbox' class='flat-red' value=2 name=kelas[] checked> </label> 
<label> 12 IPA 1 </label>
	</td></tr><tr>
<td width='20'>Kelas 2 </td><td></td></tr><tr>
<td width='20'>Kelas 3 </td><td></td></tr></tbody>
              </table></div>
		 <p class='stdformbutton'>
                                <button class='btn btn-primary'>Simpan</button>
								<input type=button value=Batal onclick=self.history.back() class='btn btn-warning btn-rounded'>
                                
                            </p></form> </div>
          <!-- /.box -->
      </div></div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
<?php
 require_once('../admin/modul/footer.php');
?>