<?php
include "header.php";
?>

    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
       
	   
	   
	   
	   
	    <div class="content-area">
            <div class="container">
                <div class="clearfix">
                    <!-- blog grid -->
                    <div id="masonry" class="row dlab-blog-grid-3">
					
				
<?php

$stmt = $db->query("SELECT * FROM gambar3 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	?>

						
						
						<div class="col-lg-4 col-md-6 col-sm-6 m-b10">
							<div class="dlab-box">
								<div class="dlab-media"> <a href="#"><img src="images/gallery/<?php echo "$data[foto]";?>" alt=""></a> </div>
								<div class="dlab-info p-a20 text-center bg-gray">
									<div class="p-lr20">
										<h4 class="m-a0 bg-primary service-head"><a href="#" class="text-white"><?php echo "$data[nama]";?></a></h4>
									</div>	
									<p class="m-b0"><?php echo "$data[deskripsi]";?></p>
								</div>
							</div>
						</div>
						
						
	
	<?php
}


?>				
					
       




	   
                    <!-- blog grid END -->
                    <!-- Pagination -->
          
                    <!-- Pagination END -->
                </div>
            </div>
        </div>
		<br/>	<br/>
    </div>


	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
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
