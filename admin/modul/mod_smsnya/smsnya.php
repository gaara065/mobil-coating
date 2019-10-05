<?php


$aksi="modul/mod_smsnya/aksi_smsnya.php";
$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';




switch($_GET['act']){
  // Tampil Banner
  default:

 



?>



<div class="content-wrapper">
   
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <div class="pull-right box-tools">
               <a href='media.php?module=menuadmin'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Main Menu</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';


$stmt = $db->query("SELECT * FROM format_sms a ");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);



   ?>					

   


<form role="form" method="POST" action='<?php echo"$aksi?module=smsnya&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	

              <!-- /.form group -->
			  
	
				<div class="form-group">
                  <label>Nama</label>
				  <textarea name='isi' class="form-control" rows="3"><?php echo $rowa['isi']; ?></textarea>
				 
				  
                   </div>

			
				
				
				
				

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
	

	
		
	
case "tambah":
 
 ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
	
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <div class="pull-right box-tools">
               <a href='media.php?module=menuadmin'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Main Menu</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';

$today = date("m/d/Y");

   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=daftartoko&act=tambah"; ?>' enctype='multipart/form-data'>
	
	
	

              <!-- /.form group -->
		



				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value=''>
                </div>

				<div class="form-group">
                  <label>Alamat</label>
                 <input type="text" placeholder="" class="form-control" name="alamat" value=''>
                </div>
				
					

				
				

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

 case "ubah":
 
 ?>


<div class="content-wrapper">
   
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <div class="pull-right box-tools">
               <a href='media.php?module=menuadmin'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Main Menu</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';



$stmt = $db->query("SELECT * FROM toko a where a.id_toko='$_GET[id]' ");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=daftartoko&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_toko" value="<?php echo $rowa['id_toko']; ?>"/>

              <!-- /.form group -->
			  
	
				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value='<?php echo $rowa['nama']; ?>'>
                </div>

				<div class="form-group">
                  <label>Alamat</label>
                 <input type="text" placeholder="" class="form-control" name="alamat" value='<?php echo $rowa['alamat']; ?>'>
                </div>
				
				
				
				

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
