<?php


$aksi="modul/mod_kasirtabel/aksi_kasirtabel.php";
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
			  <a href='media.php?module=tambahnota'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
         <th width="2%">No</th>
      <th >Toko</th>                                                   
												   <th>Tanggal</th>
                                                   
													   <th>No. Nota</th>
													      <th>Paket</th>
													      <th width="10%">Total</th>
														   <th width="10%">Panjar</th>
														    <th width="10%">Sisa</th>
														  
														   <th width="8%">Edit/Hapus</th>
                </tr>
                </thead>
                <tbody>
				
				
													<?php
$no='1';		

$tokoo=$_SESSION['id_toko'];	

$stmt = $db->query("SELECT *
      FROM transaksi a, toko b
      WHERE a.id_toko=b.id_toko and a.id_toko='$tokoo'
	  ORDER BY  a.id_transaksi desc
	  limit 1000");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   
$pizza  = $data['tanggal'];
$pieces = explode("-", $pizza);
$bln=$pieces['1'];



	   echo "
	         <tr class='gradeX' >
                                                    <td>$no</td>
													<td>$data[nama]</td>
<td>$pieces[2] "; echo bulan($bln);  echo " $pieces[0] </td>
			<td>$data[nota]</td>
		<td>	";
												
	$stmta = $db->query("SELECT *
      FROM cucian a, transaksi_detail b
      WHERE a.id_cucian = b.id_cucian and b.id_transaksi = '$data[id_transaksi]'
	  ORDER BY  a.id_cucian asc limit 100");
 while($dataa = $stmta->fetch(PDO::FETCH_ASSOC)) {
 
 echo "
 	
		- $dataa[nama] = $dataa[jumlah] $dataa[satuan] - ";
		
echo rupiah($dataa['total_detail']);
		 
echo "
		<br/>
	";
													
 }	 
												    
													
													echo "
													</td>
													<td>";
													echo rupiah($data['total']);
												echo "</td>
													<td>";
													echo rupiah($data['panjar']);
												echo "</td>
													<td>";
													echo rupiah($data['sisa']);
												echo "</td>
<td align='center'>  
													<a href='media.php?module=kasirtabel&act=detail&id=$data[id_transaksi]'>
													
													<button type='button' class='btn btn-info btn-sm'
                        title='Edit'>
						<i class='fa fa-edit'></i></button>
													</a>
											        "; ?>
													
													<a href="<?php echo "$aksi?module=kasirtabel&act=hapustransaksi&id=$data[id_transaksi]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus data Ini?')">
													
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
	
		
	
case "detail":
?>



<?php

$stmt = $db->query("SELECT *
      FROM transaksi a, toko b, pelanggan c
      WHERE a.id_toko=b.id_toko and a.id_pelanggan=c.id_pelanggan and a.id_transaksi='$_GET[id]'
	  ");
$data8 = $stmt->fetch(PDO::FETCH_ASSOC);


$pizza  = $data8['tanggal'];
$pieces = explode("-", $pizza);
$bln=$pieces['1'];



?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Transaksi
        <small>Transaksi</small>
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
        <div class="col-md-12">
          <div class="box box-primary">
       
            <div class="box-body">
              <!-- Date -->
	<div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                   
                    <h5 class="description-header"><?php echo "$data8[nota]"; ?></h5>
                    <span class="description-text">No. Nota</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    
                    <h5 class="description-header"><?php echo "$data8[nama]"; ?></h5>
                    <span class="description-text">Nama Toko</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    
                    <h5 class="description-header"><?php echo "$pieces[2] "; echo bulan($bln);  echo " $pieces[0] ";?></h5>
                    <span class="description-text">Tanggal</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                   
                    <h5 class="description-header"><?php echo rupiah($data8['total']); ?></h5>
                    <span class="description-text">Total Bayar</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          
          <!-- /.box -->
        </div>
		
		   </div>
		

      <div class="row">
  
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Jenis Transaksi</h3>
            </div>
            
			 <div class="box-body no-padding table-responsive no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Paket</th>
                  <th>Harga</th>
				  <th>Jumlah</th>
				  <th>Total</th>
                  <th style="width: 40px">Aksi</th>
                </tr>
               
				
				
				<?php
		$no='1';		
					$stmta = $db->query("SELECT *
      FROM cucian a, transaksi_detail b
      WHERE a.id_cucian = b.id_cucian and b.id_transaksi = '$_GET[id]'
	  ORDER BY  a.id_cucian asc");
 while($dataa = $stmta->fetch(PDO::FETCH_ASSOC)) {
	 echo" <tr>
	 <td>$no.</td>
                  <td>$dataa[nama]</td>
				    <td>
					";
		
echo rupiah($dataa['harga']);
		 
echo "
					</td>
					  <td>$dataa[jumlah] $dataa[satuan]</td>
					    <td>";
													echo rupiah($dataa['total_detail']);
												echo "</td>
                 <td>
				 
				  <a href='$aksi?module=kasirtabel&act=hapusdetail&id=$_GET[id]&iddetail=$dataa[id_transaksi_detail]'> <button type='button' class='btn btn-danger btn-sm'
                        title='Hapus'>
						<i class='fa fa-times'></i></button>
				 </td>
	 
	  </tr>
	 
	 ";
 }
				
				?>
                  
               
				
				
                <tr>
                  <td colspan='4' align='center'><b>Total</b></td>
                
					    <td><b><?php echo rupiah($data8['total']); ?></b></td>
                <td></td>
                </tr>
				
				
              </table>
            </div>
			
			<br/>
 <div class="progress xs">
                    <div class="progress-bar progress-bar-blue" style="width: 100%;"></div>
                  </div>
			  
		  
		
			
			 <div class="box-header">
              <h3 class="box-title">Tambah Transaksi</h3>
            </div>
            <!-- /.box-header -->
           
		
		   
		   <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
	
//$query = "SELECT * FROM pimpinan where id='$_GET[id]'";
//$hasil = mysql_query($query);
//$data = mysql_fetch_array($hasil);
   ?>					


    <form class="form-horizontal" role="form" method="POST" action='<?php echo"$aksi?module=kasirtabel&act=simpandetail&id=$_GET[id]"; ?>' enctype='multipart/form-data'>
	
	<input name="id_transaksi" type="hidden" value="<?php echo "$_GET[id]"; ?>">
	
	<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Paket</label>

                  <div class="col-sm-10">
                    
					<select class="form-control" name="id_cucian">
					
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
                </div>
				
				
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">jumlah</label>

                  <div class="col-sm-10">
                    <input name="jumlah" type="text" class="form-control" id="inputEmail3" value="0">
                  </div>
                </div>
				
				


				
 
   <div class="box-footer">
            
				 <input type="submit" name="submit" class="btn btn-info pull-right" value="Simpan" />
              </div>
 
												

		
 
 </form>
            </div>
			
			
			
			
			
			
			
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          
          <!-- /.box -->
        </div>
		
		
		
		
 <div class="col-md-6">
       <div class="box box-primary">   
       <div class="box table-responsive no-padding">
            <div class="box-header">
              <h3 class="box-title">
Detail


			  </h3>
            </div>
			                    
            <!-- /.box-header -->
            <div class="box-body">
			
            
				  

            <!-- /.box-header -->
           
		   
		   
		   <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
	
//$query = "SELECT * FROM pimpinan where id='$_GET[id]'";
//$hasil = mysql_query($query);
//$data = mysql_fetch_array($hasil);
   ?>					

 <form class="form-horizontal" role="form" method="POST" action='<?php echo"$aksi?module=kasirtabel&act=simpanbayar&id=$_GET[id]"; ?>' enctype='multipart/form-data'>

   
<?php
if ($data8['id_pelanggan']<>'0')
{
?>	
	
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 ">Nama </label>
<label for="inputEmail3" class="col-sm-9 ">
<?php echo "$data8[nama_pelanggan]"; ?>
</label>
                 
                </div>
		
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 ">Hp </label>
<label for="inputEmail3" class="col-sm-9 ">
<?php echo "$data8[hp]"; ?>
</label>
                 
                </div>


				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 ">Alamat </label>
<label for="inputEmail3" class="col-sm-9 ">
<?php echo "$data8[alamat_pelanggan]"; ?>
</label>
                 
                </div>

				<hr/>
				
<?php
}
?>	

	<input name="id_transaksi" type="hidden" value="<?php echo "$_GET[id]"; ?>">
						
		<div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 ">Total Bayar </label>
<label for="inputEmail3" class="col-sm-9 ">
<?php echo rupiah($data8['total']); ?>
</label>	
   </div>
 
		<div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 ">Sudah Bayar </label>
<label for="inputEmail3" class="col-sm-9 ">
<input name="panjar" type="text" class="form-control" id="inputEmail3" value="<?php echo $data8['panjar']; ?>">
</label>

  </div>

	<div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 ">Sisa </label>
<label for="inputEmail3" class="col-sm-9 ">
<?php echo rupiah($data8['sisa']); ?>
</label>											
  </div>
 
   <div class="box-footer">
            
				 <input type="submit" name="submit" class="btn btn-info pull-right" value="Simpan" />
              </div>


 </form>
            </div>


	
          <!-- /.box -->

          <!-- iCheck -->
          
          <!-- /.box -->
        </div>
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
