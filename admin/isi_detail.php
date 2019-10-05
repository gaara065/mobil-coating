<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kegiatan
        <small>Jadwal Kegiatan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Menu Aplikasi</a></li>
        <li class="active">Dashboard</li>
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


    <form role="form" method="POST" action='<?php echo"$aksi?module=kegiatan&act=simpanedit&id=$data[id]"; ?>' enctype='multipart/form-data'>
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
 
 
 
 	<?php
												
														if ($_GET['module']=='kegiatan')
												{
													
												?>
												
			 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />									
												
												<?php
												}
?>
				
												
												<?php
												
												if ($_GET['module']=='alldata')
												{
													
												?>
								<a href='<?php echo "$aksi?module=alldata&act=kirimnotif&id=$data[id]"; ?>'><button type='button' class='btn btn-primary style3'><font color='white'>Kirim Notifikasi</font></button></a>				
												
<?php
												}
?>
							
 
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