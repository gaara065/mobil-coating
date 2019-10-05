<?php
include "header.php";
?>

    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
       
	   
	   
	   
	   
	<div class="section-full content-inner bg-white contact-style-1">
			<div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-8">
                        <div class="p-a30 bg-gray clearfix m-b30 ">
							
							
							<div class="row m-b30">
					<div class="col-lg-12">
					<!-- Map part start -->
					<h2>Lokasi Kami</h2>
                        	<!-- Map part END -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14634.706559930073!2d109.35853702532064!3d-0.07203297980502357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d5b7ce3c7c36d%3A0xf36861480e396cff!2sKantor+%2F+workhsop+kurnia+kencana+persada!5e0!3m2!1sid!2sid!4v1553609410750" style="border:0; width:100%; height:400px;" allowfullscreen></iframe>
					
					</div>
				</div>

						</div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-lg-4 d-lg-flex">
                        <div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
							<h2 class="m-b10">Kontak Cepat</h2>
							<p>Konsultasikan Coating Mobil Anda Dengan Kami</p>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Alamat:</h6>
                                        <p> 		<?php
										$stmt = $db->query("SELECT * FROM dll ");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);
echo "$rowa[alamat]";
							?></p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="ti-email"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                        <p>		<?php
echo "$rowa[email]";
							?></p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Hp</h6>
                                        <p>		<?php
echo "$rowa[hp]";
							?>	</p>
                                    </div>
                                </li>
                            </ul>
							<div class="m-t20">
								<ul class="dlab-social-icon dez-border dlab-social-icon-lg">
								
								
											<?php

$stmt = $db->query("SELECT * FROM dll ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	?>

                            <li><a href="<?php echo "$data[faceb]";?>" target="_blank" class="fa fa-facebook bg-primary"></a></li>
                          <li><a href="<?php echo "$data[instagl]";?>" target="_blank" class="fa fa-instagram bg-primary"></a></li>
                            <li><a href="<?php echo "$data[goog]";?>" target="_blank" class="fa fa-google-plus bg-primary"></a></li>
							
	<?php
}


?>	


								</ul>
							</div>
                        </div>
                    </div>
                    <!-- right part END -->
                </div>



	      </div>
                    <!-- right part END -->
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
