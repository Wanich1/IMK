<?php
 require_once('../admin/modul/head.php');
 require_once('../admin/modul/sidebar.php');
?>
<script>
function confirmdelete(delUrl) {
   if (confirm("Anda yakin ingin menghapus?")) {
      document.location = delUrl;
   }
}
function import_data(){
   var formdata = new FormData();      
   var file = $('#file')[0].files[0];
   formdata.append('file', file);
   $.each($('#modal_upload form').serializeArray(), function(a, b){
      formdata.append(b.name, b.value);
   });
   $.ajax({
      url: 'modul/mod_operator/upload_siswa.php',
      data: formdata,
      processData: false,
      contentType: false,
      type: 'POST',
      success: function(data) {
         if(data=="ok"){
           $('#modal_upload').modal('hide');
           document.location = "media.php?module=siswa";
         }else{
            alert(data);
         }
      },
      error: function(data){
         alert('Tidak dapat mengimport data!');
      }
   });
   return false;
}

</script>

<style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>


  <!-- Content Wrapper. Contains page content -->
  <div class='content-wrapper'>
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1><i class='fa fa-user'></i>
Data Siswa Kelas<small>12 IPA 1</small>
      </h1>
      <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
        <li><a href='#'>member</a></li>
        <li><a href='#'>siswa</a></li>
        
      </ol>
    </section>
<!-- Main content -->
<section class='content'>
	<div class='box box-default color-palette-box'>
        
        <div class='box-body'>
          <div class='row'>
            <div class='col-sm-4 col-md-2'>
              <h4 class='text-center'>Tambah</h4>
<a href='?module=siswa&act=tambahsiswa&kelas=2'><button type='button' class='btn btn-block btn-primary'><i class='fa fa-user-plus'></i></button></a>
            </div>
            <!-- /.col -->
            <div class='col-sm-4 col-md-2'>
              <h4 class='text-center'>Cetak Kartu</h4>
<a href='export/pdf_kartu.php?lv=siswa&kelas=2' target='_new'><button type='button' class='btn btn-block btn-primary'><i class='fa fa-print'></i></button></a>
            </div>
            <!-- /.col -->
            <div class='col-sm-4 col-md-2'>
              <h4 class='text-center'>Export Excel</h4>
<a href='export/excel_data.php?kelas=2&lv=anakkelas'><button type='button' class='btn btn-block btn-primary'><i class='fa fa-file-excel-o'></i></button></a>
              
            </div>
            <!-- /.col -->
            <div class='col-sm-4 col-md-2'>
              <h4 class='text-center'>Upload Excel</h4>
             <button type='button' class='btn btn-block btn-primary' data-toggle='modal' data-target='#modal_upload'>
               <i class='fa fa-upload'></i></button>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row --><!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <div class='row'>
        <div class='col-xs-12'><!-- /.box -->

          <div class='box'>
            <!-- /.box-header -->
            <div class='box-body'>
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
	<th>No</th>	
	<th>Foto</th>
	<th>Nis</th>
	<th>Nama</th>
	<th>Aksi</th>
	          </tr>
                </thead>
                <tbody><tr><td width='20'>1</td>
	  		<td><img src='/BDL/foto_user/small_avatar.png' ></td><td><p style='font-weight: bold'>123</p></td>
			<td>M. Ichwan Fanani</td>
			<td width='100'> <a  class='btn btn-primary'><i class='fa fa-pencil'></i></a>   
<a  class='btn btn-danger'><i class='fa fa-trash'></i></a></td>                </tr></tbody>
                <tfoot>
                <tr>
    <th>No</th>	
	<th>Foto</th>
	<th>NIS</th>
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