<?php


$aksi="modul/mod_display/aksi_display.php";
$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';




switch($_GET['act']){
  // Tampil Banner
  default:

 



?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajeman Display Kegiatan
        <small>Tampilan Monitor Display</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Menu Aplikasi</a></li>
        <li class="active">Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
		  
		  
          <!-- /.box -->

          <div class="box table-responsive no-padding">
            <div class="box-header">
              <h3 class="box-title">
			  <a href='media.php?module=display&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah Jadwal Display</font></button></a>
				
<a href='#'><button type='button' class='btn btn-danger style2' align='right'><font color='white'>Download aplikasi display</font></button></a>
				

				</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
         <th>No</th>
                                                    <th width="17%">Tanggal</th>
                                                   
													   <th>Tempat Kegiatan</th>
													      <th>Nama Kegiatan</th>
													      <th>Asal surat</th>
													      <th>Yang Menghadiri</th>
														  
														  <th>Hapus Display</th>
                </tr>
                </thead>
                <tbody>
				
				
											 <?php
			   

	
	$query = "SELECT * FROM tampilan  ORDER BY  id_berkas desc";
	
	

$no='1';
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
   {
	   ?>
	   
	   <?php
	  

$querya = "SELECT * FROM berkas where id='$data[id_berkas]' ";
$hasila = mysql_query($querya);
$dataa= mysql_fetch_array($hasila);

	  
$pizza  = $dataa['tanggal'];
$pieces = explode("-", $pizza);
$bln=$pieces['1'];









$query1 = "SELECT * FROM pimpinan where id='$dataa[hadir]' ";
$hasil1 = mysql_query($query1);
$data1 = mysql_fetch_array($hasil1);

	   echo "
	         <tr class='gradeX' >
                                                    <td>$no</td>
													<td> $dataa[jam] Wib <br/>$pieces[2] "; echo bulan($bln);  echo " $pieces[0] </td>
												
													<td>$dataa[tempat]</td>
													<td>$dataa[nama]</td>
													<td>$dataa[dari]</td>
													<td>$data1[nama]</td>
													
													<td> <a href='$aksi?module=display&act=hapus&id=$data[id]'><button type='button' class='btn btn-danger style3'><font color='white'>Hapus</font></button></a></td>
													
                                                </tr>
	   ";
	   $no++;
   }
   
	   ?>

	   
          
                
                </tbody>
                
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
  
  
  
  
  
  
    <?php
  
  
  
  
  break;
	
		
 case "tambah":
 
 
 

?>





<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kegiatan
        <small>Tabel Semua Kegiatan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Menu Aplikasi</a></li>
        <li class="active">Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
		  
		  
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
						
								</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
         <th>No</th>
                                                    <th width="17%">Tanggal</th>
                                                   
													   <th>Tempat Kegiatan</th>
													      <th>Nama Kegiatan</th>
													      <th>Asal surat</th>
													      <th>Yang Menghadiri</th>
														  
														 <th>Pilih</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
											
														   <?php
			   

	
	$query = "SELECT * FROM berkas  ORDER BY  id desc";
	
	

$no='1';
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
   {
	   ?>
	   
	   <?php
	   
$pizza  = $data['tanggal'];
$pieces = explode("-", $pizza);
$bln=$pieces['1'];









$query1 = "SELECT * FROM pimpinan where id='$data[hadir]' ";
$hasil1 = mysql_query($query1);
$data1 = mysql_fetch_array($hasil1);

	   echo "
	         <tr class='gradeX' >
                                                    <td>$no</td>
													<td> $data[jam] Wib <br/>$pieces[2] "; echo bulan($bln);  echo " $pieces[0] </td>
												
													<td>$data[tempat]</td>
													<td>$data[nama]</td>
													<td>$data[dari]</td>
													<td>$data1[nama]</td>
													
													<td> <a href='$aksi?module=display&act=pilih&id=$data[id]'><button type='button' class='btn btn-primary style3'><font color='white'>Tambahkan ke display</font></button></a></td>
													
                                                   
                                                </tr>
	   ";
	   $no++;
   }
   
	   ?>

	   
          
                
                </tbody>
                
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
  
  
  
  
  

<?php
		
break;

 
 }
 

?>
