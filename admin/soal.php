<?php
 require_once('../admin/modul/head.php');
 require_once('../admin/modul/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class='content-wrapper'>
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
Data Bank Soal           </h1>
      <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
        <li><a href='#'>Ujian</a></li>
        <li><a href='#'>Soal</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class='content'>
      <div class='row'>
        <div class='col-xs-12'><!-- /.box -->

          <div class='box'>
            <div class='box-header'>
              <h3 class='box-title'><a href='?module=soal&act=tambahsoal&id=1'><button type='button' class='btn btn-block btn-primary'><i class='glyphicon glyphicon-pencil'></i>  Tambah Soal</button></a></h3>
                         <button type='button' class='btn btn-info pull-right' data-toggle='modal' data-target='#modal_upload'>
               <i class='fa fa-file-excel-o'></i> upload dari excel
              </button>

			</div>
            <!-- /.box-header -->
            <div class='box-body'>
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
		  
    <th>No</th>	
	<th>Soal</th>
	<th>Pilganda</th>
	<th>Aksi</th>
	          </tr>
                </thead>
                <tbody><tr><td width='20'>1</td>
                <td><p style='font-weight: bold'>Apa yang di maksud dengan hewan amfibi?</p>
</td>
                <td><ol type='A'>
  <li style='font-weight: bold'>hewan yang hidup di dua alam</li><li>hewan yang memakan semua jenismakanan</li><li>hewan yang berkembang biak dengan cara bertelur dan melahirkan</li><li>hewan yang menyusui</li><li>hewan yang memakan tanaman</li></ol></td>
                <td width='80'> <a href=?module=soal&act=editsoal&id=1 class='btn btn-info'><i class='fa fa-pencil'></i></a>   
   <a href=javascript:confirmdelete('modul/mod_guru/aksi_unbk.php?module=soal&act=hapus&ujian=1&id=1') 
   class='btn btn-danger'><i class='fa fa-trash'></i></a></td>
                </tr></tbody>
                <tfoot>
                <tr>
                 
		  
    <th>No</th>	
	<th>Soal</th>
	<th>Pilganda</th>
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
  
  <!-- Modal uploa xls -->
<div class='modal modal-info fade' id='modal_upload'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                
                  
                <h4 class='modal-title'>Upload EXCEL</h4>
              </div>
			  <form enctype='multipart/form-data'  onsubmit='return import_data()'>
  <input type=hidden name=ujian value=1>
              <div class='modal-body'>
            <div class='form-group has-feedback'>
		
			 <input type='file' class='file' id='file' name='file' required>
      </div>
              </div>
              <div class='modal-footer'>
				 <a href='../download/soal.xls' class='btn btn-outline pull-left'>contoh excel</a>
                 <button type='submit' class='btn btn-primary btn-save'>Upload</button>
              

              </div>
            </form>
			</div>
			
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal --> 
  <!-- /.content-wrapper -->
  <?php
 require_once('../admin/modul/footer.php');
?>