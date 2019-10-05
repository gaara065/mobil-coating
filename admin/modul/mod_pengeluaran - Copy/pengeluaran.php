<?php


$aksi="modul/mod_pengeluaran/aksi_pengeluaran.php";
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
			  <a href='media.php?module=pengeluaran&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
         <th width="2%">No</th>
      <th width="17%">Toko</th>                                                   
												   <th width="17%">Tanggal</th>
                                                   
													   <th>Pengeluaran</th>
													     
													      <th>Total</th>
														  
														   <th width="8%">Edit/Hapus</th>
                </tr>
                </thead>
                <tbody>
				
				
													<?php
$no='1';		

$tokoo=$_SESSION['id_toko'];	

$stmt = $db->query("SELECT *
      FROM pengeluaran a, toko b 
	  where a.id_toko=b.id_toko and a.id_toko='$tokoo'
	  ORDER BY  a.id_pengeluaran desc
	  limit 1000");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   
$pizza  = $data['tanggal_pengeluaran'];
$pieces = explode("-", $pizza);
$bln=$pieces['1'];



	   echo "
	         <tr class='gradeX' >
                                                    <td>$no</td>
													<td>$data[nama]</td>
												
<td>$pieces[2] "; echo bulan($bln);  echo " $pieces[0] </td>
			
	<td>$data[nama_pengeluaran]</td>
													<td>";
													echo rupiah($data['total_pengeluaran']);
												echo "</td>
<td align='center'>  
<a href='media.php?module=pengeluaran&act=ubah&id=$data[id_pengeluaran]'>
													
													<button type='button' class='btn btn-info btn-sm'
                        title='Edit'>
						<i class='fa fa-edit'></i></button>
													</a>
													
												
											        "; ?>
													
<a href="<?php echo "$aksi?module=pengeluaran&act=hapus&id=$data[id_pengeluaran]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus data Ini?')">
													
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


<form role="form" method="POST" action='<?php echo"$aksi?module=pengeluaran&act=tambah"; ?>' enctype='multipart/form-data'>
	
	
	

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
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value=''>
                </div>

				<div class="form-group">
                  <label>Total</label>
                 <input type="text" placeholder="" class="form-control" name="total" value='0'>
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
              <h3 class="box-title">Detail Nota</h3>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';



$stmt = $db->query("SELECT * FROM pengeluaran a, toko b where a.id_pengeluaran='$_GET[id]' and a.id_toko=b.id_toko");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);


$pizza  = $rowa['tanggal_pengeluaran'];
$pieces = explode("-", $pizza);
$newtgl = $pieces['1'].'/'.$pieces['2'].'/'.$pieces['0'];


   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pengeluaran&act=ubah&id=$rowa[id_pengeluaran]"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_pengeluaran" value="<?php echo $rowa['id_pengeluaran']; ?>"/>

              <!-- /.form group -->
			  
		<div class="form-group">
                  <label>Pilihan Toko</label>
                 <select class="form-control" name="id_toko">	  
			  <?php
echo "
	     <option value='$rowa[id_toko]'>$rowa[nama]</option>
	   
	   ";
	   
$stmt = $db->query('SELECT * FROM toko');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_toko]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>				



				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value='<?php echo "$rowa[nama_pengeluaran]";  ?>'>
                </div>

				<div class="form-group">
                  <label>Total</label>
                 <input type="text" placeholder="" class="form-control" name="total" value='<?php echo "$rowa[total_pengeluaran]";  ?>'>
                </div>
				
	
<div class="form-group">
                  <label>Tanggal</label>
               <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="tanggal" value="<?php echo "$newtgl"; ?>">
                </div>
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
