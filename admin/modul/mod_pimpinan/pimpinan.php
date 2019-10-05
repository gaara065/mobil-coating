<?php


$aksi="modul/mod_pimpinan/aksi_pimpinan.php";
$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';




switch($_GET['act']){
  // Tampil Banner
  default:

 



?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pimpinan
        <small>Tabel Semua Pimpinan</small>
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
			  <a href='media.php?module=pimpinan&act=tambahpimpinan'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah Pimpinan</font></button></a>
</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
         <th>No</th>
                                                    <th>Pimpinan</th>
                                                    <th>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
													   <th>HP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
													
														   <th>Edit/Hapus</th>
                </tr>
                </thead>
                <tbody>
				
				
													<?php
			
				$query = "SELECT * FROM pimpinan  ORDER BY  id asc";
	
	

$no='1';
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
   {
	?>
<?php	


echo "
  <tr class='gradeX'>
                                                    <td>$no</td>
													<td>$data[nama]</td>
													<td><textarea rows='5' class='form-control' name='catatan' readonly>$data[email]</textarea></td>
													<td><textarea rows='5' class='form-control' name='catatan' readonly>$data[hp]</textarea></td>
														<td>  
													<a href='media.php?module=pimpinan&act=detail&id=$data[id]'><button type='button' class='btn btn-success style2'><font color='white'>&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;</font></button></a>
											        <br/><br/>"; ?>
													
													<a href="<?php echo "$aksi?module=pimpinan&act=hapus&id=$data[id]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus notifikasi Ini?')"><button type='button' class='btn btn-danger style2'><font color='white'>Hapus</font></button></a>
                                      
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
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pimpinan
        <small>Pimpinan</small>
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
              <h3 class="box-title">Detail Pimpinan</h3>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
	
$query = "SELECT * FROM pimpinan where id='$_GET[id]'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
   ?>					


    <form role="form" method="POST" action='<?php echo"$aksi?module=pimpinan&act=simpanedit&id=$data[id]"; ?>' enctype='multipart/form-data'>
	
	
	
  <input type="hidden"  name="id" value='<?php echo "$data[id]"; ?>'>	
              <!-- /.form group -->
  <div class="form-group">
                  <label>Nama Pimpinan</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value='<?php echo "$data[nama]"; ?>'>
                </div>
				
	
<div class="form-group">
                  <label>Email</label>
                  <textarea rows="3" class="form-control" name="email"><?php echo "$data[email]"; ?></textarea>
                </div>
				
				
				
				<div class="form-group">
                  <label>No HP</label>
                 <textarea rows="3" class="form-control" name="hp"><?php echo "$data[hp]"; ?></textarea>
                </div>


				
				

				
				
				
		
				
				
				
              <!-- /.form group -->

              <!-- Date and time range -->
     
              <!-- /.form group -->

              <!-- Date and time range -->
        
              <!-- /.form group -->
 
 
 

												
																											 <tr>
                                                    <td class="col-md-4"></td>
                                                    <td class="col-md-8">
												

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

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

 
 
 case "tambahpimpinan":
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pimpinan
        <small>Pimpinan</small>
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
              <h3 class="box-title">Detail Pimpinan</h3>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
	
$query = "SELECT * FROM pimpinan where id='$_GET[id]'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
   ?>					


    <form role="form" method="POST" action='<?php echo"$aksi?module=pimpinan&act=simpantambah&id=$data[id]"; ?>' enctype='multipart/form-data'>
	
	
	
  <input type="hidden"  name="id" value='<?php echo "$data[id]"; ?>'>	
              <!-- /.form group -->
  <div class="form-group">
                  <label>Nama Pimpinan</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value='<?php echo "$data[nama]"; ?>'>
                </div>
				
	
<div class="form-group">
                  <label>Email</label>
                  <textarea rows="3" class="form-control" name="email"><?php echo "$data[email]"; ?></textarea>
                </div>
				
				
				
				<div class="form-group">
                  <label>No HP</label>
                 <textarea rows="3" class="form-control" name="hp"><?php echo "$data[hp]"; ?></textarea>
                </div>


				
				

				
				
				
		
				
				
				
              <!-- /.form group -->

              <!-- Date and time range -->
     
              <!-- /.form group -->

              <!-- Date and time range -->
        
              <!-- /.form group -->
 
 
 

												
																											 <tr>
                                                    <td class="col-md-4"></td>
                                                    <td class="col-md-8">
												

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

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
