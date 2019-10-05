<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
   


       <section class="content">
	   
	   
	<div class="row">
	
	
<?php
$today = date("Y/m/d");


$stmt = $db->query("SELECT * FROM sif where status_sif='buka' and id_toko='$_SESSION[id_toko]'");
$row_count = $stmt->rowCount();

if ($row_count>'0')
{
	?>
		  <a href="media.php?module=sifkasir&act=tutup">
		  <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4><i class="fa fa-archive"></i></h4>

              <p>Tutup Kasir </p>
            </div>
    
            
          </div>
        </div>
		</a>
	
	
	
	   <!-- ./col -->
	     <a href="media.php?module=progresskasir">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
             <h4><i class="fa fa-users"></i></h4>

              <p>Progress </p>
            </div>
     
           
          </div>
        </div>
			</a>
        <!-- ./col -->

        <!-- ./col -->
		  <a href="media.php?module=tambahlaundry">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
        <h4><i class="fa fa-calculator"></i></h4>

              <p>Kasir</p>
            </div>
      
           
          </div>
        </div>
			</a>
			
			
			
			
					  <a href="media.php?module=pengeluaran">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
        <h4><i class="fa fa-money"></i></h4>

              <p>Pengeluaran</p>
            </div>
      
           
          </div>
        </div>
			</a>
        <!-- ./col -->
      </div>
	<?php
}
else 
{
	?>
	
	  <a href="media.php?module=sifkasir"><div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4><i class="fa fa-archive"></i></h4>

              <p>Buka Kasir </p>
            </div>
    
            
          </div>
        </div>
		</a>
		
		

     
	<?php
	
}

?>



	  
	  
	  

        </section><!-- /.content -->	
		
		

<!-- page script -->

    <!-- /.content -->
  </div>
  