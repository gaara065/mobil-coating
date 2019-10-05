<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Beranda
        <small>Grafik</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Menu Aplikasi</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
   
   
   
   
   
   	<?php 
			
			
			$thn=date("Y");
				$curYear = date('Y');
			
			

$tgla=date('Y-m-01');
$tglb=date('Y-m-32');



$stmt = $db->query("SELECT sum(a.total) as totalall , sum(a.panjar) as totalpanjar, sum(a.sisa) as totalsisa
      FROM transaksi a, toko b
      WHERE (a.tanggal >= '$tgla' and a.tanggal <= '$tglb') and a.id_toko=b.id_toko
	  ORDER BY  a.id_transaksi asc");
$rowtot = $stmt->fetch(PDO::FETCH_ASSOC);	



$stmt2 = $db->query("SELECT sum(a.total_pengeluaran) as totalall 
      FROM pengeluaran a, toko b
      WHERE (a.tanggal_pengeluaran >= '$tgla' and a.tanggal_pengeluaran <= '$tglb') and a.id_toko=b.id_toko
	  ORDER BY  a.id_pengeluaran asc");
	
$rowtot2 = $stmt2->fetch(PDO::FETCH_ASSOC);	


$tut=$rowtot['totalall']-$rowtot2['totalall'];
		?>
		

		

       <section class="content">
	   
	   
	<div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4><?php echo rupiah($rowtot['totalall']); ?></h4>

              <p>Total Kotor <?php echo "$bulan_ini $thn"; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            
          </div>
        </div>
		
		
		
   	<?php 
			
			
		
			
			
//$na = "SELECT count(*) as total FROM berkas where YEAR(tanggal)= '$thn'";
//$na = mysql_query($na);
//$na = mysql_fetch_array($na);	



		?>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4><?php echo rupiah($rowtot2['totalall']); ?></h4>

              <p>Total Pengeluaran <?php echo "$bulan_ini $thn"; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
   	<?php 
			
			
		$bln=date("m");	
			
			
//$na = "SELECT count(*) as total FROM berkas where YEAR(tanggal)= '$thn' AND MONTH(tanggal)= '$bln' ";
//$na = mysql_query($na);
//$na = mysql_fetch_array($na);	



		?>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
          <h4><?php echo rupiah($tut); ?></h4>

              <p>Total Bersih <?php echo "$bulan_ini $thn"; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
      </div>
		 
		  
     
	 
	 	  <?php 

		  
		  
$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 01 
	  ");
$a1 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt2 = $db->query("SELECT  COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 01 
	  ");
	
$b1 = $stmt2->fetch(PDO::FETCH_ASSOC);	


$c1=$a1['totalall']-$b1['totalall'];

//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 02 
	  ");
$a2 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt2 = $db->query("SELECT  COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 02 
	  ");
	
$b2 = $stmt2->fetch(PDO::FETCH_ASSOC);	


$c2=$a2['totalall']-$b2['totalall'];




//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 03 
	  ");
$a3 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt3 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 03 
	  ");
	
$b3 = $stmt3->fetch(PDO::FETCH_ASSOC);	


$c3=$a3['totalall']-$b3['totalall'];


//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 04 
	  ");
$a4 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt4 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 04 
	  ");
	
$b4 = $stmt4->fetch(PDO::FETCH_ASSOC);	


$c4=$a4['totalall']-$b4['totalall'];



//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 05 
	  ");
$a5 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt5 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 05 
	  ");
	
$b5 = $stmt5->fetch(PDO::FETCH_ASSOC);	


$c5=$a5['totalall']-$b5['totalall'];



//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 06 
	  ");
$a6 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt6 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 06 
	  ");
	
$b6 = $stmt6->fetch(PDO::FETCH_ASSOC);	


$c6=$a6['totalall']-$b6['totalall'];




//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 07 
	  ");
$a7 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt7 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 07 
	  ");
	
$b7 = $stmt7->fetch(PDO::FETCH_ASSOC);	


$c7=$a7['totalall']-$b7['totalall'];




//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 08 
	  ");
$a8 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt8 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 08 
	  ");
	
$b8 = $stmt8->fetch(PDO::FETCH_ASSOC);	


$c8=$a8['totalall']-$b8['totalall'];




//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 09 
	  ");
$a9 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt9 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 09 
	  ");
	
$b9 = $stmt9->fetch(PDO::FETCH_ASSOC);	


$c9=$a9['totalall']-$b9['totalall'];



//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 10 
	  ");
$a10 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt10 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 10 
	  ");
	
$b10 = $stmt10->fetch(PDO::FETCH_ASSOC);	


$c10=$a10['totalall']-$b10['totalall'];





//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 11 
	  ");
$a11 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt11 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 11 
	  ");
	
$b11 = $stmt11->fetch(PDO::FETCH_ASSOC);	


$c11=$a11['totalall']-$b11['totalall'];


//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 12 
	  ");
$a12 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt12 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 12 
	  ");
	
$b12 = $stmt12->fetch(PDO::FETCH_ASSOC);	


$c12=$a12['totalall']-$b12['totalall'];



?>
	 
	 
	 
	 
	 
	  <div class="row">

                <canvas id="areaChart" style="height:0px"></canvas>
   
          <!-- /.box -->

          <!-- DONUT CHART -->

          <!-- /.box -->

        <!-- /.col (LEFT) -->
        <div class="col-md-12">
          <!-- LINE CHART -->

          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Pendapatan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
		
									&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;
<span class='glyphicon glyphicon-stop' style="color:#c8691d"></span>	 Kotor &nbsp;&nbsp;&nbsp;
<span class='glyphicon glyphicon-stop' style="color:#00a65a"></span>   Pengeluaran &nbsp;&nbsp;&nbsp;
<span class='glyphicon glyphicon-stop' style="color:#4f98c3"></span>  Laba &nbsp;&nbsp;&nbsp;
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
	  
	  
	  
	  
	  

        </section><!-- /.content -->	
		
		

<!-- page script -->

    <!-- /.content -->
  </div>
  