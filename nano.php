<?php
include "header.php";
?>

    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
       
	   
	   
	   
	   
	    <div class="section-full bg-img-fix content-inner overlay-black-middle" style="background-image:url(https://s3.ap-south-1.amazonaws.com/dlab-html/autocare/xhtml/images/background/bg1.jpg);">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2 class="text-uppercase">Nano Ceramic</h2>
                    <div class="dlab-separator-outer ">
                        <div class="dlab-separator bg-white style-skew"></div>
                    </div>
                      </div>
               
		 <div class="section" id="section1">
       
        <p>
		
								<?php
							
$stmt = $db->query("SELECT * FROM dll ");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);

echo "$rowa[isinano]";
							?>
	   
	   
	   </p>
        </div>		
				
      <div class="section " id="section0" align ="center">
        
       
        <video autoplay loop id="myVideo" style="border:0; width:100%; height:400px;">
          <source src="videos/video_nano_ceramic.mp4" type="video/mp4" >
          Your browser does not support the video tag.
        </video> <br/>   <br/>
         <img src="images/nano-mobil2.png"  align="center"/>
		 
		 
      </div>
     
        
      
   <br/>
      <br/>   <br/>   <br/>
	  
	  
				
				
            </div>
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
