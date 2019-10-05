<?php

$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';


$today = date("m/d/Y");


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
  <form role="form" method="POST" action='#'>      
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">

		       <div class="pull-right box-tools">
               <a href='media.php?module=menuadmin'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Main Menu</button>
				</a>
              </div>
			  
			  
            <div class="box-body">
              <!-- Date -->
  
              <!-- /.form group -->
  
<div class="form-group">
                  <label>Pilihan Toko</label>
                 <select class="form-control" name="hadir">
														
	<?php



if ($_POST['hadir']<>'')
{
	
$stmt = $db->query("SELECT * FROM toko  where id_toko='$_POST[hadir]'");
$data8 = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_POST['hadir']=='100')
{
	?>
<option value='100'>--Pilih Semua--</option>
	<?php
}
else
{
	echo "<option value='$data8[id]'>$data8[nama]</option>";
}
}
else
{
		?>
<option value='100'>--Pilih Toko--</option>
	<?php
}


?>		


																		
                                                          	<?php
$stmt = $db->query('SELECT * FROM toko');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_toko]'>$row[nama]</option>
	   
	   ";
   }
														?>
														<option value='100'>--Pilih Semua--</option>
                                                        </select>
                </div>				
		




		
				
              <!-- Date range -->

			  
			  
			  
			  
			  <div class="form-group">
                  <label>Tampilkan Mulai</label>
               <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right"  name="tanggala" value="<?php echo date("Y-m-d"); ?>">
                </div>
</div>



<div class="form-group">
                  <label>Sampai</label>
               <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name="tanggalb" value="<?php echo date("Y-m-d"); ?>">
                </div>
</div>
              <!-- /.form group -->

              <!-- Date and time range -->
     
              <!-- /.form group -->

              <!-- Date and time range -->
        
              <!-- /.form group -->
 <input type="submit" name="submit" class="btn btn-primary style2" value="Lihat Rekapan" />
 
 </form>
            </div>
            <!-- /.box-body -->
			
			
			
			
			
			
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          
          <!-- /.box -->
        </div>
		
		
		
						<?php
$_POST['submit'] = isset($_POST['submit']) ? $_POST['submit'] : '';						
$_GET['hadir'] = isset($_GET['hadir']) ? $_GET['hadir'] : '';
$_GET['tgla'] = isset($_GET['tgla']) ? $_GET['tgla'] : '';
$_GET['tglb'] = isset($_GET['tglb']) ? $_GET['tglb'] : '';					

if ($_GET['hadir']<>'' or $_GET['tgla']<>'' or  $_GET['tglb']<>'')
{	
$_POST['submit']='1';
$_POST['hadir']	=$_GET['hadir'];				
$_POST['tanggala']=$_GET['tgla'];
$_POST['tanggalb']=$_GET['tglb'];
}
						



if ($_POST['submit'])
						{




   

	
$timea=strtotime($_POST['tanggala']);
$tgla=date('Y/m/d',$timea);


$timeb=strtotime($_POST['tanggalb']);
$tglb=date('Y/m/d',$timeb);


					
						?>		



<div class="col-xs-12">
          
		  
		  
          <!-- /.box -->

          <div class="box table-responsive no-padding">
            <div class="box-header">
              <h3 class="box-title">
			 
             Data Sif
			  </h3>
            </div>
			                    
            <!-- /.box-header -->
            <div class="box-body">
			
              <table id="example5" class="table table-bordered table-striped">
                <thead>
                <tr>
      

                                                   
													   <th width="10%" align='center'>Sif</th>
													     <th width="10%">Modal</th>
														  <th width="10%">Transaksi</th>
														   <th width="10%">Total Transaksi</th>
														    <th width="10%">Total Pelanggan yang Sudah Bayar</th>
															<th width="10%">Tagihan Pelanggan</th>
															 <th width="10%">Total Setor</th>
														  
														
                </tr>
                </thead>
                <tbody>
				
				
													   <?php


$no='1';


					if ($_POST['hadir']<>'100' )
	{

$stmt = $db->query("SELECT *
      FROM sif a, toko b, sif_petugas c
      WHERE (a.tgl_sif >= '$tgla' and a.tgl_sif <= '$tglb') and a.id_toko=b.id_toko and a.id_toko='$_POST[hadir]' and a.id_petugas=c.id_petugas
	  ORDER BY  a.id_sif asc");

	}
	else if ($_POST['hadir']=='100')
	{
$stmt = $db->query("SELECT *
      FROM sif a, toko b, sif_petugas c
      WHERE (a.tgl_sif >= '$tgla' and a.tgl_sif <= '$tglb') and a.id_toko=b.id_toko  and a.id_petugas=c.id_petugas
	  ORDER BY  a.id_sif asc");
	}
	
	

	  
	  

 while($data = $stmt->fetch(PDO::FETCH_ASSOC)) 
	 
	   
 {
	 
	
	   
$pizza  = $data['tgl_sif'];
$pieces = explode("/", $pizza);
$bln=$pieces['1'];



	   echo "
	         <tr class='gradeX' >
                                                 
			
	<td align='center'>
	$data[nama] - $data[status_sif]<br/>
	$data[urutan_sif] - $data[nama_petugas]<br/>
	$pizza
	</td>";
		echo "<td>";	echo rupiah2($data['modal_sif']);		echo "</td>";
	echo "<td>";	echo rupiah2($data['hasil_sif']);		echo "</td>";
	echo "<td>";	echo rupiah2($data['total_sif']);		echo "</td>";
	echo "<td>";	echo rupiah2($data['bayar_sif']);		echo "</td>";
		echo "<td>";	echo rupiah2($data['bayar_nanti_sif']);		echo "</td>";
	echo "<td>";	echo rupiah2($data['setor_sif']);		echo "</td>";	
								
echo"
                                                   
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



		
		<div class="col-xs-12">
          
		  
		  
          <!-- /.box -->

          <div class="box table-responsive no-padding">
            <div class="box-header">
              <h3 class="box-title">
			  <?php 
			  
			  //echo "<a href='rekapharian.php?hadir=$_POST[hadir]&tgl_awal=$tgla&tgl_akhir=$tglb' target='_blank'><button type='button' class='btn btn-warning style3'><font color='white'>cetak</font></button></a>"; 


   	if ($_POST['hadir']<>'100' )
	{

$stmt = $db->query("SELECT sum(a.total) as totalall , sum(a.panjar) as totalpanjar, sum(a.sisa) as totalsisa
      FROM transaksi a, toko b
      WHERE (a.tanggal >= '$tgla' and a.tanggal <= '$tglb') and a.id_toko=b.id_toko and a.id_toko='$_POST[hadir]'
	  ORDER BY  a.id_transaksi asc");

	}
	else if ($_POST['hadir']=='100')
	{
$stmt = $db->query("SELECT sum(a.total) as totalall , sum(a.panjar) as totalpanjar, sum(a.sisa) as totalsisa
      FROM transaksi a, toko b
      WHERE (a.tanggal >= '$tgla' and a.tanggal <= '$tglb') and a.id_toko=b.id_toko
	  ORDER BY  a.id_transaksi asc");
	}
	
$rowtot = $stmt->fetch(PDO::FETCH_ASSOC);	

echo "

<b>
 - Total Pendapatan =
";
 
echo rupiah($rowtot['totalall']);
echo " <br/>
 
		  
</b>";
			  ?>
             
			  </h3>
            </div>
			                    
            <!-- /.box-header -->
            <div class="box-body">
			
              <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>

													   <th>Nota</th>
												
													      <th>Paket</th>
													      <th width="10%">Total</th>
														<th  width="5%">Aksi</th>
                </tr>
                </thead>
                <tbody>
				
				
													   <?php


$no='1';


					if ($_POST['hadir']<>'100' )
	{

$stmt = $db->query("SELECT *
      FROM transaksi a, toko b, pelanggan c
      WHERE (a.tanggal >= '$tgla' and a.tanggal <= '$tglb') and a.id_toko=b.id_toko and a.id_toko='$_POST[hadir]'  and a.id_pelanggan=c.id_pelanggan
	  ORDER BY  a.id_transaksi asc");

	}
	else if ($_POST['hadir']=='100')
	{
$stmt = $db->query("SELECT *
      FROM transaksi a, toko b, pelanggan c
      WHERE (a.tanggal >= '$tgla' and a.tanggal <= '$tglb') and a.id_toko=b.id_toko  and a.id_pelanggan=c.id_pelanggan
	  ORDER BY  a.id_transaksi asc");
	}
	
	

	  
	  

 while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   
$pizza  = $data['tanggal'];
$pieces = explode("/", $pizza);
$bln=$pieces['1'];



	   echo "
	         <tr class='gradeX' >
			<td align='center'>
			$data[nama]<br/>
			<b>$data[nota]</b>
			<br/>$pizza <br/> $data[nama_pelanggan]
			<br/>$data[hp]</td>
		<td>	";
												
	$stmta = $db->query("SELECT *
      FROM cucian a, transaksi_detail b
      WHERE a.id_cucian = b.id_cucian and b.id_transaksi = '$data[id_transaksi]'
	  ORDER BY  a.id_cucian asc");
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
														
														 <td>
				 
				  <a href='modul/mod_tambahlaundry/aksi_tambahlaundry.php?module=tambahlaundry&act=hapuslaporan&iddetail=$data[id_transaksi]&hadir=$_POST[hadir]&tgla=$tgla&tglb=$tglb'> <button type='button' class='btn btn-danger btn-sm'
                        title='Hapus'>
						<i class='fa fa-times'></i></button>
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
		
		
		
		
		
		
		
		
		
		<div class="col-xs-12">
          
		  
		  
          <!-- /.box -->

          <div class="box table-responsive no-padding">
            <div class="box-header">
              <h3 class="box-title">
			  <?php 
			  
			  //echo "<a href='rekapharian.php?hadir=$_POST[hadir]&tgl_awal=$tgla&tgl_akhir=$tglb' target='_blank'><button type='button' class='btn btn-warning style3'><font color='white'>cetak</font></button></a>"; 


   	if ($_POST['hadir']<>'100' )
	{

$stmt = $db->query("SELECT sum(a.total_pengeluaran) as totalall 
      FROM pengeluaran a, toko b
      WHERE (a.tanggal_pengeluaran >= '$tgla' and a.tanggal_pengeluaran <= '$tglb') and a.id_toko=b.id_toko and a.id_toko='$_POST[hadir]'
	  ORDER BY  a.id_pengeluaran asc");

	}
	else if ($_POST['hadir']=='100')
	{
$stmt = $db->query("SELECT sum(a.total_pengeluaran) as totalall 
      FROM pengeluaran a, toko b
      WHERE (a.tanggal_pengeluaran >= '$tgla' and a.tanggal_pengeluaran <= '$tglb') and a.id_toko=b.id_toko
	  ORDER BY  a.id_pengeluaran asc");
	}
	
$rowtot = $stmt->fetch(PDO::FETCH_ASSOC);	

echo "
<b>
 - Total Pengeluaran =
";
 
echo rupiah($rowtot['totalall']);

		  
echo "</b>";
			  ?>
             
			  </h3>
            </div>
			                    
            <!-- /.box-header -->
            <div class="box-body">
			
              <table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
      

                                                   
													   <th align='center'>Pengeluaran</th>
													     <th width="10%">Total</th>
														  
														
                </tr>
                </thead>
                <tbody>
				
				
													   <?php


$no='1';


					if ($_POST['hadir']<>'100' )
	{

$stmt = $db->query("SELECT *
      FROM pengeluaran a, toko b
      WHERE (a.tanggal_pengeluaran >= '$tgla' and a.tanggal_pengeluaran <= '$tglb') and a.id_toko=b.id_toko and a.id_toko='$_POST[hadir]'
	  ORDER BY  a.id_pengeluaran asc");

	}
	else if ($_POST['hadir']=='100')
	{
$stmt = $db->query("SELECT *
      FROM pengeluaran a, toko b
      WHERE (a.tanggal_pengeluaran >= '$tgla' and a.tanggal_pengeluaran <= '$tglb') and a.id_toko=b.id_toko
	  ORDER BY  a.id_pengeluaran asc");
	}
	
	

	  
	  

 while($data = $stmt->fetch(PDO::FETCH_ASSOC)) 
	 
	   
 {
	 
	
	   
$pizza  = $data['tanggal_pengeluaran'];
$pieces = explode("/", $pizza);
$bln=$pieces['1'];



	   echo "
	         <tr class='gradeX' >
                                                 
			
	<td align='center'>
	$data[nama]<br/>
	$data[nama_pengeluaran]<br/>
	$pizza
	</td>
													<td>";
													echo rupiah2($data['total_pengeluaran']);
												echo "</td>

                                                   
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
		
		
	












	




		
		
		
	<?php
						}
						
						?>		
		
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
