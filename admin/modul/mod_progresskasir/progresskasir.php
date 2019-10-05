<?php


$aksi="modul/mod_progresskasir/aksi_progresskasir.php";
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
		    <div class="pull-right box-tools">
               <a href='media.php?module=menukasir'> <button type="button" class="btn btn-info btn-sm" >
                 Main Menu</button></a>
              </div>
		
		
<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Baru</a></li>
              <li><a href="#tab_2" data-toggle="tab">Dikerjakan</a></li>
              <li><a href="#tab_3" data-toggle="tab">Selesai</a></li>
      
            
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               
			   
			   
			   
			   <div class="box box-primary">
    
            
			
			
		 <div class="box table-responsive no-padding">
               <table  id="example6" class="table table-bordered table-striped">
                <thead>
                <tr>
 
                                                   
													   <th>Nota</th>
												
													      <th>Paket</th>
													      <th width="10%">Total</th>
													
														  
														   <th width="8%">Update</th>
                </tr>
                </thead>
                <tbody>
				
				
													<?php
$no='1';		

$tokoo=$_SESSION['id_toko'];	

$stmt = $db->query("SELECT *
      FROM transaksi a, toko b, pelanggan c
      WHERE a.id_toko=b.id_toko and a.id_toko='$tokoo' and a.id_pelanggan=c.id_pelanggan  and a.status_transaksi='0'
	  ORDER BY  a.id_transaksi desc
	  limit 1000");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   
$pizza  = $data['tanggal'];




	   echo "
	         <tr class='gradeX' >
                                       

			<td align='center'><b>$data[nota]</b>
			<br/>$pizza <br/> $data[nama_pelanggan]
			<br/>$data[hp]</td>
			
			
		<td>	";
												
	$stmta = $db->query("SELECT *
      FROM cucian a, transaksi_detail b
      WHERE a.id_cucian = b.id_cucian and b.id_transaksi = '$data[id_transaksi]'
	  ORDER BY  a.id_cucian asc limit 100");
 while($dataa = $stmta->fetch(PDO::FETCH_ASSOC)) {
 
 echo "
 	
		 $dataa[nama] = $dataa[jumlah] $dataa[satuan] <br> ";
		


													
 }	 
 
 
 echo "<br/>
		";
 
 $stmta2 = $db->query("SELECT *
      FROM jenis_cucian a, transaksi_jenis b
      WHERE a.id_jenis = b.id_jenis and b.id_transaksi = '$data[id_transaksi]'
	  ORDER BY  a.id_jenis asc");
 while($dataa2 = $stmta2->fetch(PDO::FETCH_ASSOC)) {
	 echo" 
                - $dataa2[nama_jenis]
				
                ($dataa2[jumlah_jenis])
				
				<br/>
		
        
	 
	  
	 
	 ";
 }
												    
													
													echo "
													</td>
													<td>";
													echo rupiah2($data['total']);
												echo "</td>
										
<td align='center'>  
													<a href='$aksi?module=progresskasir&act=update1&id=$data[id_transaksi]'  
										      "; ?>
													
												onclick="return confirm('Dikerjakan?')"
                                      
													<?php echo "
													>
													
													<button type='button' class='btn btn-info btn-sm'
                        title='Edit'>
						<i class='fa fa-edit'></i></button>
													</a>
											        "; ?>
													
												
                                      
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
			
			
			
          </div>
		  
		  
			   
			   
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
              
			  <div class="box box-primary">
    
            
			
			
			 <div class="box table-responsive no-padding">
               <table  id="example7" class="table table-bordered table-striped">
                <thead>
                <tr>
 
                                                   
													   <th>Nota</th>
												
													      <th>Paket</th>
													      <th width="10%">Total</th>
													
														  
														   <th width="8%">Update</th>
                </tr>
                </thead>
                <tbody>
				
				
													<?php
$no='1';		

$tokoo=$_SESSION['id_toko'];	

$stmt = $db->query("SELECT *
      FROM transaksi a, toko b, pelanggan c
      WHERE a.id_toko=b.id_toko and a.id_toko='$tokoo' and a.id_pelanggan=c.id_pelanggan  and a.status_transaksi='1'
	  ORDER BY  a.id_transaksi desc
	  limit 1000");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   
$pizza  = $data['tanggal'];




	   echo "
	         <tr class='gradeX' >
                                       

			<td align='center'><b>$data[nota]</b>
			<br/>$pizza <br/> $data[nama_pelanggan]
			<br/>$data[hp]</td>
			
			
		<td>	";
												
	$stmta = $db->query("SELECT *
      FROM cucian a, transaksi_detail b
      WHERE a.id_cucian = b.id_cucian and b.id_transaksi = '$data[id_transaksi]'
	  ORDER BY  a.id_cucian asc limit 100");
 while($dataa = $stmta->fetch(PDO::FETCH_ASSOC)) {
 
 echo "
 	
		 $dataa[nama] = $dataa[jumlah] $dataa[satuan] <br>";
		


													
 }	 
 
 
 echo "<br/>
		";
 
 $stmta2 = $db->query("SELECT *
      FROM jenis_cucian a, transaksi_jenis b
      WHERE a.id_jenis = b.id_jenis and b.id_transaksi = '$data[id_transaksi]'
	  ORDER BY  a.id_jenis asc");
 while($dataa2 = $stmta2->fetch(PDO::FETCH_ASSOC)) {
	 echo" 
                - $dataa2[nama_jenis]
				
                ($dataa2[jumlah_jenis])
				
				<br/>
		
        
	 
	  
	 
	 ";
 }
												    
													
													echo "
													</td>
													<td>";
													echo rupiah2($data['total']);
												echo "</td>
										
<td align='center'>  
													<a href='$aksi?module=progresskasir&act=update2&id=$data[id_transaksi]'
													   "; ?>
													
												onclick="return confirm('Selesai?')"
                                      
													<?php echo "
													
													>
													
													<button type='button' class='btn btn-info btn-sm'
                        title='Edit'>
						<i class='fa fa-edit'></i></button>
													</a>
											        "; ?>
													
												
                                      
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
			
			
			
          </div>
		  
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
             
			 
			 
			 
			 
			 <div class="box box-primary">
    
            
			
			
			 	 <div class="box table-responsive no-padding">
               <table  id="example8" class="table table-bordered table-striped">
                <thead>
                <tr>
 
                                                   
													   <th>Nota</th>
												
													      <th>Paket</th>
													      <th width="10%">Total</th>
													
														  
														   <th width="8%">Update</th>
                </tr>
                </thead>
                <tbody>
				
				
													<?php
$no='1';		

$tokoo=$_SESSION['id_toko'];	

$stmt = $db->query("SELECT *
      FROM transaksi a, toko b, pelanggan c
      WHERE a.id_toko=b.id_toko and a.id_toko='$tokoo' and a.id_pelanggan=c.id_pelanggan  and a.status_transaksi='2'
	  ORDER BY  a.id_transaksi desc
	  limit 1000");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   
$pizza  = $data['tanggal'];




	   echo "
	         <tr class='gradeX' >
                                       

			<td align='center'><b>$data[nota]</b>
			<br/>$pizza <br/> $data[nama_pelanggan]
			<br/>$data[hp]</td>
			
			
		<td>	";
												
	$stmta = $db->query("SELECT *
      FROM cucian a, transaksi_detail b
      WHERE a.id_cucian = b.id_cucian and b.id_transaksi = '$data[id_transaksi]'
	  ORDER BY  a.id_cucian asc limit 100");
 while($dataa = $stmta->fetch(PDO::FETCH_ASSOC)) {
 
 echo "
 	
		 $dataa[nama] = $dataa[jumlah] $dataa[satuan] <br>";
		


													
 }	 
 
 
 echo "<br/>
		";
 
 $stmta2 = $db->query("SELECT *
      FROM jenis_cucian a, transaksi_jenis b
      WHERE a.id_jenis = b.id_jenis and b.id_transaksi = '$data[id_transaksi]'
	  ORDER BY  a.id_jenis asc");
 while($dataa2 = $stmta2->fetch(PDO::FETCH_ASSOC)) {
	 echo" 
                - $dataa2[nama_jenis]
				
                ($dataa2[jumlah_jenis])
				
				<br/>
		
        
	 
	  
	 
	 ";
 }
												    
													
													echo "
													</td>
													<td>";
													echo rupiah2($data['total']);
												echo "</td>
										
<td align='center'>  
													<a href='$aksi?module=progresskasir&act=update3&id=$data[id_transaksi]'
													   "; ?>
													
												onclick="return confirm('Diambil?')"
                                      
													<?php echo "
													>
													
													<button type='button' class='btn btn-info btn-sm'
                        title='Edit'>
						<i class='fa fa-edit'></i></button>
													</a>
											        "; ?>
													
												
                                      
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
			
			
			
          </div>
		  
		  
		  
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
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
    
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';

$today = date("Y/m/d");

//echo "$today";
   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=progresskasir&act=tutup"; ?>' enctype='multipart/form-data'>


<?php
$stmt = $db->query("SELECT * FROM sif where tgl_sif='$today' and status_sif='buka' and id_toko='$_SESSION[id_toko]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt2 = $db->query("SELECT sum(total) as totalmasuk FROM transaksi where id_sif='$row[id_sif]'");
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

$allnya=$row2['totalmasuk']+$row['modal_sif'];
?>	
	
	
<input type="hidden" name="id_sif" value='<?php echo $row['id_sif']; ?>'>

<input type="hidden" name="hasil_sif" value='<?php echo $row2['totalmasuk']; ?>'>
<input type="hidden" name="total_sif" value='<?php echo $allnya; ?>'>




              <!-- /.form group -->

				<div class="form-group">
                  <label>Shift</label>
                 <input type="text" class="form-control" name="" value='<?php echo $row['urutan_sif']; ?>' disabled>
                </div>

				<div class="form-group">
                  <label>Modal</label>
                  <input type="text" class="form-control" name="" value='<?php echo rupiah($row['modal_sif']); ?>' disabled>
                </div>
				
				
				<div class="form-group">
                  <label>Pemasukan</label>
                  <input type="text" class="form-control" name="" value='<?php echo rupiah($row2['totalmasuk']); ?>' disabled>
                </div>
				
				
				<div class="form-group">
                  <label>Saldo Akhir</label>
              <input type="text" class="form-control" name="" value='<?php echo rupiah($allnya); ?>' disabled>
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
