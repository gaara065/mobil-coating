<?php


$aksi="modul/mod_sifkasir/aksi_sifkasir.php";
$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';




switch($_GET['act']){
  // Tampil Banner
  default:

 



?>


   <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    
	
	
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
    <div class="pull-right box-tools">
               <a href='media.php?module=menukasir'> <button type="button" class="btn btn-info btn-sm" >
                 Main Menu</button></a>
              </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';

$today = date("Y/m/d");

//echo "$today";
   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=sifkasir&act=tambah"; ?>' enctype='multipart/form-data'>


<?php
$stmt = $db->query("SELECT * FROM sif where tgl_sif='$today' and id_toko='$_SESSION[id_toko]' order by id_sif desc");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$sifnya=$row['urutan_sif']+1;
?>	
	
	
<input type="hidden" name="tgl_sif" value='<?php echo $today; ?>'>
<input type="hidden" name="id_toko" value='<?php echo $_SESSION['id_toko']; ?>'>
<input type="hidden" name="urutan_sif" value='<?php echo $sifnya; ?>'>
              <!-- /.form group -->

				<div class="form-group">
                  <label>Shift</label>
                 <input type="text" class="form-control" name="" value='<?php echo $sifnya; ?>' disabled>
                </div>

				
	<div class="form-group">
                  <label>Pilihan Petugas</label>
                 <select class="form-control" name="id_petugas">	  
			  <?php
$stmt = $db->query("SELECT * FROM sif_petugas where id_toko='$_SESSION[id_toko]'");
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_petugas]'>$row[nama_petugas]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>				
				
			<div class="form-group">
                  <label>Modal</label>
				
                 <input type="text" placeholder="" class="form-control" name="modal_sif" value='' id="angka3">
				         
                </div>
				



 <input type="submit" name="submit" class="btn btn-success style2" value="Buka Kasir" />

                                                  
												
													
												
											
							
 
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
	

	
		
	
case "tutup":
 
 ?>



   <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    
	
	
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
        <div class="pull-right box-tools">
               <a href='media.php?module=menukasir'> <button type="button" class="btn btn-info btn-sm" >
                 Main Menu</button></a>
              </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';

$today = date("Y/m/d");

//echo "$today";
   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=sifkasir&act=tutup"; ?>' enctype='multipart/form-data'>


<?php
$stmt = $db->query("SELECT * FROM sif where status_sif='buka' and id_toko='$_SESSION[id_toko]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt2 = $db->query("SELECT sum(total) as totalmasuk FROM transaksi where id_sif='$row[id_sif]'");
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);


$stmt22 = $db->query("SELECT sum(total) as totalmasuk2 FROM transaksi where id_sif='$row[id_sif]' and bayar<>'0'");
$row22 = $stmt22->fetch(PDO::FETCH_ASSOC);


$stmt222 = $db->query("SELECT sum(total) as totalmasuk3 FROM transaksi where id_sif_nanti='$row[id_sif]'");
$row222 = $stmt222->fetch(PDO::FETCH_ASSOC);

$allnya=$row2['totalmasuk']+$row['modal_sif'];

$saldonya=$row22['totalmasuk2']+$row['modal_sif']+$row222['totalmasuk3'];




?>	
	
	
<input type="hidden" name="id_sif" value='<?php echo $row['id_sif']; ?>'>

<input type="hidden" name="hasil_sif" value='<?php echo $row2['totalmasuk']; ?>'>
<input type="hidden" name="total_sif" value='<?php echo $allnya; ?>'>
<input type="hidden" name="bayar_sif" value='<?php echo $row22['totalmasuk2']; ?>'>
<input type="hidden" name="bayar_nanti_sif" value='<?php echo $row222['totalmasuk3']; ?>'>
<input type="hidden" name="setor_sif" value='<?php echo $saldonya; ?>'>




              <!-- /.form group -->

				<div class="form-group">
                  <label>Shift</label>
                 <input type="text" class="form-control" name="" value='<?php echo $row['urutan_sif']; ?>' disabled>
                </div>

 <?php
$stmta = $db->query("SELECT * FROM sif_petugas where id_petugas='$row[id_petugas]'");
$rowa= $stmta->fetch(PDO::FETCH_ASSOC);
 ?>
   
   
   <div class="form-group">
                  <label>Petugas sif</label>
                  <input type="text" class="form-control" name="" value='<?php echo $rowa['nama_petugas']; ?>' disabled>
                </div>
				
				
				
				<div class="form-group">
                  <label>Modal</label>
                  <input type="text" class="form-control" name="" value='<?php echo rupiah($row['modal_sif']); ?>' disabled>
                </div>
				
				
				<div class="form-group">
                  <label>Transaksi</label>
                  <input type="text" class="form-control" name="" value='<?php echo rupiah($row2['totalmasuk']); ?>' disabled>
                </div>
				
				
				<div class="form-group">
                  <label>Total Transaksi</label>
              <input type="text" class="form-control" name="" value='<?php echo rupiah($allnya); ?>' disabled>
                </div>
				
	
	         <div class="form-group">
                  <label>Total Pelanggan Bayar</label>
              <input type="text" class="form-control" name="" value='<?php echo rupiah($row22['totalmasuk2']); ?>' disabled>
                </div>
				
				  <div class="form-group">
                  <label>Total Pelanggan Bayar Nanti</label>
              <input type="text" class="form-control" name="" value='<?php echo rupiah($row222['totalmasuk3']); ?>' disabled>
                </div>
				
					<div class="form-group">
                  <label>Total Setor</label>
              <input type="text" class="form-control" name="" value='<?php echo rupiah($saldonya); ?>' disabled>
                </div>
				
				

 <input type="submit" name="submit" class="btn btn-success style2" value="Tutup Kasir" />

                                                  
												
													
												
											
							
 
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
