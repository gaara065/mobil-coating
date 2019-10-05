<?php


$aksi="modul/mod_alldata/aksi_alldata.php";
$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';




switch($_GET['act']){
  // Tampil Banner
  default:

 



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
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
		
		<?php
if ($_GET['notif']==1)
	{
		?>
		<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Info!</h4>
                Pengiriman notif sms dan email berhasil. terima kasih.
              </div>
		 
		<?php
	}
          ?>
		  
          <!-- /.box -->

          <div class="box table-responsive no-padding">
         
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
														  
														 
                </tr>
                </thead>
                <tbody>
				
				
													   <?php
			   

	
	$query = "SELECT * FROM berkas  ORDER BY  tanggal desc";
	
	

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
	
		
	
case "detail":
include "isi_detail.php";		
break;

 
 }
 

?>
