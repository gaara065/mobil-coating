<?php


$aksi="modul/mod_kegiatan/aksi_kegiatan.php";
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
        <li class="active">Admin</li>
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
            <div class="box-header">
              <h3 class="box-title">
			  <a href='media.php?module=kegiatan&act=tambahberkas'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah Jadwal Kegiatan</font></button></a>
								
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
														  
														  <th>Kirim Notifikasi</th>
														   <th>Edit/Hapus</th>
                                                   
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
													
													<td> <a href='$aksi?module=kegiatan&act=kirimnotif&id=$data[id]'><button type='button' class='btn btn-primary style3'><font color='white'>Kirim</font></button></a></td>
													<td>  
													<a href='media.php?module=kegiatan&act=detail&id=$data[id]'><button type='button' class='btn btn-success style2'><font color='white'>&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;</font></button></a>
											        <br/><br/>"; ?>
													
													<a href="<?php echo "$aksi?module=kegiatan&act=hapus&id=$data[id]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Kegiatan Ini?')"><button type='button' class='btn btn-danger style2'><font color='white'>Hapus</font></button></a>
                                      
													<?php echo "
													</td>
                                                   
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







 case "tambahberkas":
 
 
 ?>
 
 
 
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Jadwal Kegiatan
        <small>jadwal Kegiatan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Menu Aplikasi</a></li>
        <li class="active">Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    
	
	
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Detail Kegiatan</h3>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
	
$query = "SELECT * FROM berkas where id='$_GET[id]'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
   
   ?>		


    <form role="form" method="POST" action='<?php echo"$aksi?module=kegiatan&act=simpantambah&id=$data[id]"; ?>' enctype='multipart/form-data'>
	
	
	
  <input type="hidden"  name="id" value='<?php echo "$data[id]"; ?>'>	
              <!-- /.form group -->
     <div class="form-group">
                  <label>Tanggal / Jam</label>

				  
				  
<script type="text/javascript" src="date1/jquery.js"></script>


 <link href="date1/bootstrap-datetimepicker.css" rel="stylesheet">

 
     
              <input size="25" type="text" value=" <?php echo "$data[tanggal]"; ?> <?php echo "$data[jam]"; ?>" readonly class="form_datetime1 form-control" name="tanggal">
        

  <script src="date1/bootstrap-datetimepicker.min.js?t=20130302"></script>

  <script type="text/javascript">


    $(".form_datetime1").datetimepicker({format: ' yyyy-mm-dd hh:ii', forceParse: true, autoclose: true});
    
  </script>
  
  
               
                </div>
				
	
<div class="form-group">
                  <label>Tempat Kegiatan</label>
                  <textarea rows="3" class="form-control" name="tempat"><?php echo "$data[tempat]"; ?></textarea>
                </div>
				
				
				
				<div class="form-group">
                  <label>Nama Kegiatan</label>
                 <textarea rows="3" class="form-control" name="nama"><?php echo "$data[nama]"; ?></textarea>
                </div>

  <div class="form-group">
                  <label>Asal Surat</label>
                 <input type="text" placeholder="Asal Surat" class="form-control" name="dari" value='<?php echo "$data[dari]"; ?>'>
                </div>
				
				
				

<div class="form-group">
                  <label>Yang Menghadiri</label>
  
                 <select class="form-control" name="hadir">
														
	<?php

$query1 = "SELECT * FROM pimpinan where id='$data[hadir]' ";
$hasil1 = mysql_query($query1);
$data1 = mysql_fetch_array($hasil1);

echo "<option value='$data[id]'>$data1[nama]</option>";
?>		
														
														
                                                       
															
															
															
																													<?php
$query1 = "SELECT * FROM pimpinan order by id asc";
$hasil1 = mysql_query($query1);
while ($data1 = mysql_fetch_array($hasil1))
   {
	   echo "
	     <option value='$data1[id]'>$data1[nama]</option>
	   
	   ";
   }
														?>
                                                        </select>
                </div>	





  <div class="form-group">
                  <label>Keterangan Hadir</label>
                 <select class="form-control" name="status">
<?php

echo "<option value='$data[status]'>$data[status]</option>";
?>	
														    <option value='dihadiri'>dihadiri</option>
															 <option value='tidak dihadiri'>tidak dihadiri</option>

                                                        </select>
                </div>



			<div class="form-group">
                  <label>Catatan</label>
                 <textarea rows="3" class="form-control" name="catatan"><?php echo "$data[catatan]"; ?></textarea>
                </div>

  <div class="form-group">
                  <label>No Surat</label>
                  <input type="text" placeholder="No surat" class="form-control" name="no" value='<?php echo "$data[no]"; ?>'>
                </div>
				
				
				  <div class="form-group">
                  <label>No Telpon Pemohon</label>
                  <input type="text" placeholder="No Telpon Pemohon" class="form-control" name="telp" value='<?php echo "$data[telp]"; ?>'>
                </div>
				
				
				
				<div class="form-group">
                  <label for="exampleInputFile">File input</label>
               <?php
												
												if ($_GET['module']=='kegiatan')
												{
													
												?>
												<input type='file' name='fupload' size='40'> <br/>
												<?php
												}
?>
				
													
													Download File :&nbsp;&nbsp;<a href='berkas/<?php echo "$data[berkasnya]";?>' target='_blank'><?php echo "$data[berkasnya]";?></a>
										           <input type='hidden' name='filelama' value="<?php echo "$data[berkasnya]"; ?>">
                </div>
				
				
				
              <!-- /.form group -->

              <!-- Date and time range -->
     
              <!-- /.form group -->

              <!-- Date and time range -->
        
              <!-- /.form group -->
 
 
 

												
																											 <tr>
                                                    <td class="col-md-4"></td>
                                                    <td class="col-md-8">
												

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan & Kirim Notifikasi" />

                                                    </td>
                                                </tr>
												
													
												
											
							
 
 </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
	
	

    <!-- /.content -->
  </div>
  
  
  
 
 <?php
 break;
 }
 

?>
