<?php


$aksi="modul/mod_tambahnota/aksi_tambahnota.php";
$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';




switch($_GET['act']){
  // Tampil Banner
  default:

 



?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Laundry
        <small>Tambah</small>
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
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Detail Nota</h3>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';

$today = date("m/d/Y");

   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=tambahnota&act=simpantambahnota"; ?>' enctype='multipart/form-data'>
	
	
	

              <!-- /.form group -->
			  
		<div class="form-group">
                  <label>Pilihan Toko</label>
                 <select class="form-control" name="id_toko">	  
			  <?php
$stmt = $db->query("SELECT * FROM toko where id_toko='$_SESSION[id_toko]'");
 $row = $stmt->fetch(PDO::FETCH_ASSOC);
   
	   echo "
	     <option value='$row[id_toko]'>$row[nama]</option>
	   
	   ";
   
														?>
														
														        </select>
                </div>				




				<div class="form-group">
                  <label>No Nota</label>
                 <input type="text" placeholder="" class="form-control" name="nota" value='0'>
                </div>
				
	
<div class="form-group">
                  <label>Tanggal</label>
               <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="tanggal" value="<?php echo "$today"; ?>">
                </div>
</div>
				
				
				


				
				

				
				
				
		
				
				
				
              <!-- /.form group -->

              <!-- Date and time range -->
     
              <!-- /.form group -->

              <!-- Date and time range -->
        
              <!-- /.form group -->
 
 
 

												
																											 <tr>
                                                    
												

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

                                                  
												
													
												
											
							
 
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
