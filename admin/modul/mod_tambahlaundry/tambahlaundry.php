<?php


$aksi="modul/mod_tambahlaundry/aksi_tambahlaundry.php";
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


<form role="form" method="POST" action='<?php echo"$aksi?module=tambahlaundry&act=tambahitem"; ?>' enctype='multipart/form-data'>
<input type="hidden" name="id_toko" value='<?php echo $_SESSION['id_toko']; ?>'>

              <!-- /.form group -->

			  
			  
			  
			  	<div class="form-group">
                  <label>Pilih Item</label>
<select class="form-control" name="id_jenis">
					
	  <option value=''></option>

	  <?php
									$stmta = $db->query("SELECT *
      FROM jenis_cucian a
	  ORDER BY  a.id_jenis asc");
 while($dataaa = $stmta->fetch(PDO::FETCH_ASSOC)) {
	 
 
			echo "
			  <option value='$dataaa[id_jenis]'>$dataaa[nama_jenis]</option>
			";		
                  
  }                 
          ?>    
                  </select>               
			   </div>
				
				
				
	
				
				
				
				

				<div class="form-group">
                  <label>Jumlah</label>
                 <input type="text" placeholder="" class="form-control" name="jumlah_jenis" value='' id="angka4">
                </div>
				
	 <input type="submit" name="submit" class="btn btn-success style2" value="Tambah Item" />			

 
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
	

	
		
	
case "detail":
 
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


<form role="form" method="POST" action='<?php echo"$aksi?module=tambahlaundry&act=updateitem"; ?>' enctype='multipart/form-data'>

<input type="hidden" name="id_transaksi" value='<?php echo $_GET['id']; ?>'>
<input type="hidden" name="id_toko" value='<?php echo $_SESSION['id_toko']; ?>'>
              <!-- /.form group -->

			  
			  
			  
			  	<div class="form-group">
                  <label>Pilih Item</label>
<select class="form-control" name="id_jenis">
					
	  <option value=''></option>

	  <?php
									$stmta = $db->query("SELECT *
      FROM jenis_cucian a
	  ORDER BY  a.id_jenis asc");
 while($dataaa = $stmta->fetch(PDO::FETCH_ASSOC)) {
	 
 
			echo "
			  <option value='$dataaa[id_jenis]'>$dataaa[nama_jenis]</option>
			";		
                  
  }                 
          ?>    
                  </select>               
			   </div>
				
				
				
	
				
				
				
				

				<div class="form-group">
                  <label>Jumlah</label>
                 <input type="text" placeholder="" class="form-control" name="jumlah_jenis" value='' id="angka4">
                </div>
				
	 <input type="submit" name="submit" class="btn btn-success style2" value="Tambah Item" />			

 
 </form>
            </div>
			
			
			
			
			
			
			
			  <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
   
                  <th>Item</th>
                  <th>Jumlah</th>
                  <th style="width: 40px">Aksi</th>
                </tr>
         <?php
		$no='1';		
					$stmta = $db->query("SELECT *
      FROM jenis_cucian a, transaksi_jenis b
      WHERE a.id_jenis = b.id_jenis and b.id_transaksi = '$_GET[id]'
	  ORDER BY  a.id_jenis asc");
 while($dataa = $stmta->fetch(PDO::FETCH_ASSOC)) {
	 echo" <tr>
	
                  <td>$dataa[nama_jenis]</td>
				
                  <td>$dataa[jumlah_jenis]</td>
		
                 <td>
				 
				  <a href='$aksi?module=tambahlaundry&act=hapusitem&id=$_GET[id]&iddetail=$dataa[id_transaksi_jenis]'> <button type='button' class='btn btn-danger btn-sm'
                        title='Hapus'>
						<i class='fa fa-times'></i></button>
				 </td>
	 
	  </tr>
	 
	 ";
 }
				
				?>
                
              </table>
            </div>
			
			
			
			
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          
          <!-- /.box -->
        </div>
		
		
		
		
		
		 <div class="col-md-6">
          <div class="box box-primary">
   
			
			
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';

$today = date("Y/m/d");

//echo "$today";
   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=tambahlaundry&act=updatepaket"; ?>' enctype='multipart/form-data'>


<?php

$stmt = $db->query("SELECT * FROM sif where tgl_sif='$today' and status_sif='buka' and id_toko='$_SESSION[id_toko]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);



$stmt2 = $db->query("SELECT * FROM transaksi where id_toko='$_SESSION[id_toko]' order by nota desc");
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
$nota=$row2['nota']+1;

?>	
	
<input type="hidden" name="id_transaksi" value='<?php echo $_GET['id']; ?>'>
<input type="hidden" name="id_toko" value='<?php echo $_SESSION['id_toko']; ?>'>
<input type="hidden" name="id_sif" value='<?php echo $row['id_sif']; ?>'>
<input type="hidden" name="nota" value='<?php echo $nota; ?>'>


              <!-- /.form group -->

				<div class="form-group">
                  <label>Pilih Paket</label>
              <select class="form-control" name="id_cucian">
				 <option value=''></option>	
					<?php
									$stmta = $db->query("SELECT *
      FROM cucian a
	  ORDER BY  a.id_cucian asc");
 while($dataaa = $stmta->fetch(PDO::FETCH_ASSOC)) {
	 
 
			echo "
			  <option value='$dataaa[id_cucian]'>$dataaa[nama] - ";
		
echo rupiah($dataaa['harga']);
		 
echo " - $dataaa[satuan]</option>
			";		
                  
  }                 
          ?>    
                  </select>
                </div>

				<div class="form-group">
                  <label>Satuan</label>
                 <input type="text" placeholder="" class="form-control" name="berat" value='' id="">
                </div>
				
	

				
	 <input type="submit" name="submit" class="btn btn-success style2" value="Tambah Paket" />					

                                           
												
													
												
											
							
 
 </form>
            </div>
			
			
			
			 <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
   
                  <th>Paket</th>
                  <th>Banyak</th>
				  <th>Total</th>
                  <th style="width: 40px">Aksi</th>
                </tr>
         <?php
		$no='1';		
					$stmta = $db->query("SELECT *
      FROM cucian a, transaksi_detail b, transaksi c
      WHERE a.id_cucian = b.id_cucian and b.id_transaksi = c.id_transaksi and b.id_transaksi = '$_GET[id]'
	  ORDER BY  a.id_cucian asc");
 while($dataa = $stmta->fetch(PDO::FETCH_ASSOC)) {
	 echo" <tr>
	
                  <td>$dataa[nama]</td>
				
                  <td>$dataa[jumlah]</td>
				  <td>";
													echo rupiah2($dataa['total_detail']);
												echo "</td>
		        
                 <td>
				 
				  <a href='$aksi?module=tambahlaundry&act=hapuspaket&id=$_GET[id]&iddetail=$dataa[id_transaksi_detail]'> <button type='button' class='btn btn-danger btn-sm'
                        title='Hapus'>
						<i class='fa fa-times'></i></button>
				 </td>
	 
	  </tr>
	 
	 ";
 }
				
				?>
                
              </table>
            </div>
			
			<div class="box-footer">
			
<form role="form" method="POST" action='<?php echo"$aksi?module=tambahlaundry&act=tambahnota"; ?>' enctype='multipart/form-data'>
	<?php

$stmt = $db->query("SELECT * FROM sif where tgl_sif='$today' and status_sif='buka' and id_toko='$_SESSION[id_toko]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);



$stmt2 = $db->query("SELECT * FROM transaksi where id_toko='$_SESSION[id_toko]' order by nota desc");
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
$nota=$row2['nota']+1;

?>			
			
<input type="hidden" name="id_transaksi" value='<?php echo $_GET['id']; ?>'>
<input type="hidden" name="id_toko" value='<?php echo $_SESSION['id_toko']; ?>'>
<input type="hidden" name="id_sif" value='<?php echo $row['id_sif']; ?>'>
<input type="hidden" name="nota" value='<?php echo $nota; ?>'>



				 <input type="submit" name="submit" class="btn btn-info pull-right" value="Simpan" />
				 
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


  case "pelanggan":
 
 ?>


		<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_GET['stat'] = isset($_GET['stat']) ? $_GET['stat'] : '';

$today = date("Y/m/d");

//echo "$today";
   ?>	
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    
	
	
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
	  <?php
	  if ($_GET['stat']=='1')
	  {
		  ?>
		     <div class="alert alert-success alert-dismissible">
  
             Nomor hp belum terdaftar.
              </div>
		  <?php
	  }

	  ?>
        

      <div class="row">
  
       
		
		
		
		
		 <div class="col-md-6">
        <div class="pull-right box-tools">
               <a href='media.php?module=menukasir'> <button type="button" class="btn btn-info btn-sm" >
                 Main Menu</button></a>
              </div>

			
			
	  <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Member</a></li>
              <li><a href="#tab_2" data-toggle="tab">Baru</a></li>
    

            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               <form role="form" method="POST" action='<?php echo"$aksi?module=tambahlaundry&act=tambahpelanggan"; ?>' enctype='multipart/form-data'>


<?php

$stmt = $db->query("SELECT * FROM sif where tgl_sif='$today' and status_sif='buka' and id_toko='$_SESSION[id_toko]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);



$stmt2 = $db->query("SELECT * FROM transaksi where id_toko='$_SESSION[id_toko]' order by nota desc");
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
$nota=$row2['nota']+1;

?>	
	
<input type="hidden" name="id_transaksi" value='<?php echo $_GET['id']; ?>'>
<input type="hidden" name="id_toko" value='<?php echo $_SESSION['id_toko']; ?>'>
<input type="hidden" name="id_sif" value='<?php echo $row['id_sif']; ?>'>
<input type="hidden" name="nota" value='<?php echo $nota; ?>'>


              <!-- /.form group -->

				

				<div class="form-group">
                  <label>Hp</label>
                 <input type="text" placeholder="" class="form-control" name="hp" value=''>
                </div>
				
	

				
				

<div class="box-footer">
            
 <input type="submit" name="submit1" class="btn btn-success pull-left" value="Bayar Sekarang" />
<input type="submit" name="submit2" class="btn btn-success pull-right" value="Bayar Nanti" />
</div>                                              
												
													
												
											
							
 
 </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
              <form role="form" method="POST" action='<?php echo"$aksi?module=tambahlaundry&act=tambahpelanggannew"; ?>' enctype='multipart/form-data'>


<?php

$stmt = $db->query("SELECT * FROM sif where tgl_sif='$today' and status_sif='buka' and id_toko='$_SESSION[id_toko]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);



$stmt2 = $db->query("SELECT * FROM transaksi where id_toko='$_SESSION[id_toko]' order by nota desc");
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
$nota=$row2['nota']+1;

?>	
	
<input type="hidden" name="id_transaksi" value='<?php echo $_GET['id']; ?>'>
<input type="hidden" name="id_toko" value='<?php echo $_SESSION['id_toko']; ?>'>
<input type="hidden" name="id_sif" value='<?php echo $row['id_sif']; ?>'>
<input type="hidden" name="nota" value='<?php echo $nota; ?>'>


              <!-- /.form group -->

	<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value=''>
                </div>
				
				
					<div class="form-group">
                  <label>Hp</label>
                 <input type="text" placeholder="" class="form-control" name="hp" value=''>
                </div>
				
					<div class="form-group">
                  <label>Alamat</label>
                 <input type="text" placeholder="" class="form-control" name="alamat" value=''>
                </div>
				
	

				
				

<div class="box-footer">
            
				 <input type="submit" name="submit1" class="btn btn-success pull-left" value="Bayar Sekarang" />
				 <input type="submit" name="submit2" class="btn btn-success pull-right" value="Bayar Nanti" />
</div>                                              
												
													
												
											
							
 
 </form>
              </div>
              <!-- /.tab-pane -->
   
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>


		  
			
			
			
              <!-- Date -->
						



 
 
 
 
 
     
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
  
  
  case "printnya":
 
 ?>



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    
	
	
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
       
		
		
		
		
	
		
		
		
		
		
		

		
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
	
	

    <!-- /.content -->
  </div>
  
  
  
  
    <?php
 
  



  break;
  
  
  
  
  
  case "bayarsekarang":
 
 ?>



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    
	
	
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
       
		
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

<?php





$stmt2 = $db->query("SELECT * FROM transaksi where id_transaksi='$_GET[id]' order by nota desc");
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);


?>	
<form role="form" method="POST" action='<?php echo"$aksi?module=tambahlaundry&act=bayarnya"; ?>' enctype='multipart/form-data'>

<input type="hidden" name="id_transaksi" value='<?php echo $_GET['id']; ?>'>
<input type="hidden" name="id_toko" value='<?php echo $_SESSION['id_toko']; ?>'>
              <!-- /.form group -->

			  
		
				

				<div class="form-group">
                  <label>Jumlah</label>
                 <input type="text" placeholder="" class="form-control" name="" value='<?php 
				 echo rupiah($row2['total']);
				?>' disable>
                </div>
				
					<div class="form-group">
                  <label>Bayar</label>
                 <input type="text" placeholder="" class="form-control" name="bayar" value='' id="angka3">
                </div>
				
				
				
				
	 <input type="submit" name="submit" class="btn btn-success style2" value="bayar" />			

 
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
  
  
  
  
  
   case "bayarnanti":
 
 ?>



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    
	
	
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
       
		
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

   
   <?php

$stmt = $db->query("SELECT * FROM sif where tgl_sif='$today' and status_sif='buka' and id_toko='$_SESSION[id_toko]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);


$stmt2 = $db->query("SELECT * FROM transaksi where id_transaksi='$_GET[id]' order by nota desc");
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);


?>	
<form role="form" method="POST" action='<?php echo"$aksi?module=tambahlaundry&act=bayarnanti"; ?>' enctype='multipart/form-data'>

<input type="hidden" name="id_transaksi" value='<?php echo $_GET['id']; ?>'>
<input type="hidden" name="id_toko" value='<?php echo $_SESSION['id_toko']; ?>'>
<input type="hidden" name="id_sif" value='<?php echo $row['id_sif']; ?>'>
              <!-- /.form group -->

			  
		
				

				<div class="form-group">
                  <label>Jumlah</label>
                 <input type="text" placeholder="" class="form-control" name="" value='<?php 
				 echo rupiah($row2['total']);
				?>' disable>
                </div>
				
					<div class="form-group">
                  <label>Bayar</label>
                 <input type="text" placeholder="" class="form-control" name="bayar" value='' id="angka3">
                </div>
				
				
				
				
	 <input type="submit" name="submit" class="btn btn-success style2" value="bayar" />			

 
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
