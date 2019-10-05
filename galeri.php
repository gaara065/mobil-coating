<?php
include "header.php";
?>

    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
       
	   
	   
	   
	   
	   <div class="content-area">
            <!-- Left & right section start -->
            <div class="container">
                <!-- Gallery -->
                <div class="site-filters clearfix center  m-b40">
                    <ul class="filters" data-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Tampilkan Semua</span></a> </li>
<?php

$stmt = $db->query("SELECT * FROM proyek2 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	?>

 <li data-filter="<?php echo "$data[id]";?>" class="btn">
                            <input type="radio" >
                            <a href="#" class="site-button-secondry"><span><?php echo "$data[nama]";?> </span></a> </li>
	
	<?php
}


?>									
							
                       
							
							
                    </ul>
                </div>
                <div class="clearfix">
                    <ul id="masonry" class="row dlab-gallery-listing gallery-grid-4 mfp-gallery">
                        
<?php

$stmt = $db->query("SELECT * FROM gambar2 inner join proyek2 on proyek2.id=gambar2.id_proyek");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	?>


							<li class="<?php echo "$data[id_proyek]";?> card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/<?php echo "$data[foto]";?>"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="images/gallery/<?php echo "$data[foto]";?>" class="mfp-link"  title="<?php echo "$data[nama]";?>"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>


						
	<?php
}


?>								
						
						
						
						
						
                    </ul>
					<br/>	<br/>	<br/>	<br/>
                </div>


	       </div>    </div>
	   
	   
	   
	   
	   
	   
	   
	   
	   
        <!-- Slider END -->
        <!-- meet & ask -->
        <div class="section-full z-index100 meet-ask-outer bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 meet-ask-row p-tb30">
                        <div class="row d-flex">
                            <div class="col-lg-6">
                                <div class="icon-bx-wraper clearfix text-white left">
                                    <div class="icon-xl "> <span class=" icon-cell"><i class="ti-home"></i></span> </div>
                                    <div class="icon-content">
                                        <h3 class="dlab-tilte text-uppercase m-b10">Meet & Ask</h3>
                                        <p>Silahkan datang ke tempat kami atau hubungi kami sekarang  </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 m-t20">
								<a href="kontak.php" class="site-button-secondry button-skew m-l10">
								<span>Kontak Kami</span><i class="fa fa-angle-right"></i></a>
								<a href="produk.php" class="site-button-secondry button-skew m-l20">
								<span>Produk Kami</span><i class="fa fa-angle-right"></i></a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- meet & ask END -->
        <!-- About Company -->
      
        <!-- Client logo END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
  <?php
  include "footer.php";
  ?>
