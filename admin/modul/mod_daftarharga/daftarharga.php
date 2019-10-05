<?php


$aksi="modul/mod_daftarharga/aksi_daftarharga.php";
$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';




switch($_GET['act']){
  // Tampil Banner
  default:

 



?>


<div class="content-wrapper">
   
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
		  
		  
          <!-- /.box -->

          <div class="box table-responsive no-padding">
            <div class="box-header">
                <div class="pull-right box-tools">
               
              </div>
			  
			  <a href='media.php?module=daftarharga&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
 
      <th width="47%">Kategori</th>                                                   
												   <th width="8%">Foto</th>
                                                   
											
													      
														  
														   <th width="8%">Edit/Hapus</th>
                </tr>
                </thead>
                <tbody>
				
				
													<?php
$no='1';		

$tokoo='1';	

$stmt = $db->query('SELECT *
FROM gambar2
INNER JOIN proyek2 ON gambar2.id_proyek=proyek2.id');
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "
	         <tr class='gradeX' >
                                               
													<td>$data[nama]</td>
														<td>
															";
													?>
<img  width="240" height="150"  src="../images/gallery/<?php echo "$data[foto]"; ?>" class="attachment-post-thumbnail" alt="Building-Trades" />
												
												<?php echo "</td>
												

<td align='center'>  
<a href='media.php?module=daftarharga&act=ubah&id=$data[foto]'>
													
													<button type='button' class='btn btn-info btn-sm'
                        title='Edit'>
						<i class='fa fa-edit'></i></button>
													</a>
													
												
											        "; ?>
													
<a href="<?php echo "$aksi?module=daftarharga&act=hapus&id=$data[foto]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus data Ini?')">
													
													<button type='button' class='btn btn-danger btn-sm'
                        title='Hapus'>
						<i class='fa fa-times'></i></button>
                                      
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
	

	
		
	
case "tambah":
 
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
               
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';

$today = date("m/d/Y");

   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=daftarharga&act=tambah"; ?>' enctype='multipart/form-data'>
	
	
	

              <!-- /.form group -->
		



				<div class="form-group">
                  <label>Kategori</label>
                
				<select class="form-control" name="kategori">	
		  <?php
			 

$stmt = $db->query('SELECT * FROM proyek2');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
																
																
                </div>

		
					<div class="form-group">
                  <label>Foto</label>
				  
              <input type=file name='fupload' size=40> 
				 
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
               
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';



$stmt = $db->query("SELECT * FROM gambar2 a where a.foto='$_GET[id]' ");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=daftarharga&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id" value="<?php echo $rowa['id']; ?>"/>

              <!-- /.form group -->
			  
	
				<div class="form-group">
                  <label>Nama</label>
                <select class="form-control" name="kategori">	
		  <?php
echo "
	     <option value='$rowa[id]'>$rowa[nama]</option>
	   
	   ";				 

$stmt = $db->query('SELECT * FROM proyek2');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>

				<div class="form-group">
                  <label>Foto</label>
                      <input type='file' name='fupload' size='40'> 
					  
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
