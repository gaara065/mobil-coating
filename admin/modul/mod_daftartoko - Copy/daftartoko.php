<?php


$aksi="modul/mod_daftartoko/aksi_daftartoko.php";
$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';




switch($_GET['act']){
  // Tampil Banner
  default:

 



?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data 
        <small>Tabel Semua </small>
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
			  <a href='media.php?module=daftartoko&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
         <th width="2%">No</th>
      <th width="30%">Nama</th>                                                   
												   <th width="70%">Alamat</th>
                                                   
													 
													     
													      
														  
														   <th width="8%">Edit/Hapus</th>
                </tr>
                </thead>
                <tbody>
				
				
													<?php
$no='1';		

$tokoo='1';	

$stmt = $db->query("SELECT *
      FROM toko
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "
	         <tr class='gradeX' >
                                                    <td>$no</td>
													<td>$data[nama]</td>
														<td>$data[alamat]</td>
														
												

<td align='center'>  
<a href='media.php?module=daftartoko&act=ubah&id=$data[id_toko]'>
													
													<button type='button' class='btn btn-info btn-sm'
                        title='Edit'>
						<i class='fa fa-edit'></i></button>
													</a>
													
												
											        "; ?>
													
<a href="<?php echo "$aksi?module=daftartoko&act=hapus&id=$data[id_toko]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus data Ini?')">
													
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pengeluaran
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
              <h3 class="box-title">Detail </h3>
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data 
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
              <h3 class="box-title">Detail </h3>
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
