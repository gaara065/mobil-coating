<?php

$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';




switch($_GET['act']){
  // Tampil Banner
  default:

 



?>


	 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rekapitulasi
        <small>Rekap Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Menu Aplikasi</a></li>
               <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  <form role="form" method="POST" action='#'>      
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Form Rekapitulasi</h3>
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
                <label>Pilih Tanggal</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation" name="tanggal">
                </div>
                <!-- /.input group -->
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
						if ($_POST['submit'])
						{




	$pieces=explode(" - ",$_POST['tanggal']);	   

	
$timea=strtotime($pieces['0']);
$tgla=date('Y-m-d',$timea);

$timeb=strtotime($pieces['1']);
$tglb=date('Y-m-d',$timeb);


					
						?>		
		
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
 - Total Transaksi =
";
 
echo rupiah($rowtot['totalall']);
echo " <br/>
 - Total Panjar  =
";
echo rupiah($rowtot['totalpanjar']);
echo "<br/>
 - Total Sisa  =
";
echo rupiah($rowtot['totalsisa']);
		  
echo "</b>";
			  ?>
             
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
													      <th width="30%">Paket</th>
													     <th width="10%">Total</th>
														   <th width="10%">Panjar</th>
														    <th width="10%">Sisa</th>
														  
														
                </tr>
                </thead>
                <tbody>
				
				
													   <?php


$no='1';


					if ($_POST['hadir']<>'100' )
	{

$stmt = $db->query("SELECT *
      FROM transaksi a, toko b
      WHERE (a.tanggal >= '$tgla' and a.tanggal <= '$tglb') and a.id_toko=b.id_toko and a.id_toko='$_POST[hadir]'
	  ORDER BY  a.id_transaksi asc");

	}
	else if ($_POST['hadir']=='100')
	{
$stmt = $db->query("SELECT *
      FROM transaksi a, toko b
      WHERE (a.tanggal >= '$tgla' and a.tanggal <= '$tglb') and a.id_toko=b.id_toko
	  ORDER BY  a.id_transaksi asc");
	}
	
	

	  
	  

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
	  ORDER BY  a.id_cucian asc");
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
			
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
         <th width="2%">No</th>
      <th >Toko</th>                                                   
												   <th>Tanggal</th>
                                                   
													   <th>Pengeluaran</th>
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
