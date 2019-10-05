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
			  <a href='media.php?module=kasirtabel&act=edit'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
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
                                                   
													   <th>No. Nota</th>
													      <th>Paket</th>
													      <th>Total</th>
														  
														   <th>Edit/Hapus</th>
                </tr>
                </thead>
                <tbody>
				
				
													<?php
$no='1';		

$tokoo='1';	

$stmt = $db->query("SELECT *
      FROM transaksi a, toko b
      WHERE a.id_toko=b.id_toko and a.id_toko='$tokoo'
	  ORDER BY  a.id_transaksi asc");
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
<td>  
													<a href='media.php?module=kasirtabel&act=detail&id=$data[id_transaksi]'><button type='button' class='btn btn-success style2'><font color='white'>&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;</font></button></a>
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
                   
                    <h5 class="description-header">123</h5>
                    <span class="description-text">No. Nota</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    
                    <h5 class="description-header">Toko Randi</h5>
                    <span class="description-text">Nama Toko</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    
                    <h5 class="description-header">20 November 2018</h5>
                    <span class="description-text">Tanggal</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                   
                    <h5 class="description-header">Rp 7.000,00</h5>
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
            
			 <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Paket</th>
                  <th>Harga</th>
				  <th>Jumlah</th>
				  <th>Total</th>
                  <th style="width: 40px">Aksi</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>cuci+ strika (3 hari)</td>
				    <td>Rp 7.000,00</td>
					  <td>1 kg</td>
					    <td>Rp 7.000,00</td>
                 <td>
				 
				   <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
						<i class="fa fa-times"></i></button>
				 </td>
                </tr>
				
				
                <tr>
                  <td colspan='4' align='center'><b>Total</b></td>
                
					    <td><b>Rp 7.000,00</b></td>
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


    <form class="form-horizontal" role="form" method="POST" action='<?php echo"$aksi?module=pimpinan&act=simpanedit&id=$data[id]"; ?>' enctype='multipart/form-data'>
	
	
	<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Paket</label>

                  <div class="col-sm-10">
                    
					<select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
              
                  </select>
					
					
                  </div>
                </div>
				
				
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">jumlah</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
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
Pilih pelanggan

			  </h3>
            </div>
			                    
            <!-- /.box-header -->
            <div class="box-body">
			
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
          <th style="width: 10px">#</th>
                  <th>Nama</th>
				     <th>Hp</th>
                  <th>Alamat</th>
				
                  <th style="width: 40px">Aksi</th>
														  
														
                </tr>
                </thead>
                <tbody>


<tr>
                  <td>1.</td>
                  <td>Ayu</td>
				    <td>081313131313</td>
				
					    <td>Tanjung Hulu</td>
                  </td>
<td>  
<a href='media.php?module=kasirtabel&act=detail&id='><button type='button' class='btn btn-success style2'>
<font color='white'>&nbsp;&nbsp;&nbsp;Pilih&nbsp;&nbsp;</font></button></a></td>
                </tr>


             </tbody>
                
              </table>
			  
            </div>
            <!-- /.box-body -->
          </div>





   <div class="progress xs">
                    <div class="progress-bar progress-bar-blue" style="width: 100%;"></div>
                  </div>
				  
 <div class="box-header">
              <h3 class="box-title">Tambah Pelanggan</h3>
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


    <form class="form-horizontal" role="form" method="POST" action='<?php echo"$aksi?module=pimpinan&act=simpanedit&id=$data[id]"; ?>' enctype='multipart/form-data'>
	
	
	
	
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
				
					
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hp</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
				
					
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
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
