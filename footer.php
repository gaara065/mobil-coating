  <footer class="site-footer">
        <!-- newsletter part -->

        <!-- footer top part -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_about">
                            <div class="logo-footer"><img src="images/logo.png" alt=""></div>
                            <p>
							
							<?php
							
$stmt = $db->query("SELECT * FROM dll ");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);

echo "$rowa[footerbawah]";
							?>
							</p>
                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget recent-posts-entry">
                            <div class="dlab-separator-outer m-b10">
                                
                            </div>
                            <div class="widget-post-bx">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Coating Kami</h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-white style-skew"></div>
                            </div>
                            <ul>
                                <li><a href="">Meresap Ke pori pori</a></li>
								   <li><a href="#">Permanent Coating</a></li>
								      <li><a href="#">Tahan Cuaca Ekstrim</a></li>
									     <li><a href="#">Hydrophobic Effect</a></li>
										    <li><a href="#">Kilap Jangka Panjang</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h4 class="m-b15 text-uppercase">Hubungi kami</h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-white style-skew"></div>
                            </div>
                            <ul>
                                <li><i class="ti-location-pin"></i><strong>Alamat</strong> 

						<?php
echo "$rowa[alamat]";
							?>
								</li>
                                <li><i class="ti-mobile"></i><strong>hp</strong>
				<?php
echo "$rowa[hp]";
							?>								<br/>(24/7 Support Line)</li>
                                <li><i class="ti-email"></i><strong>email</strong>
												<?php
echo "$rowa[email]";
							?>
								</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 text-left"> 
						<span>© Copyright 2019</span>
					</div>
					<div class="col-lg-4 col-md-4 text-center"> 
						<span>  <i class="ti-heart text-primary heart"></i> dokter coating </span> 
					</div>
					<div class="col-lg-4 col-md-4 text-right"> 
						<a href="kontak.php"> Lihat Map</a>
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up style5" ></button>
</div>

<!-- JavaScript  files ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS -->
<!-- REVOLUTION JS FILES -->
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/rev.slider.js"></script>

<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_1();
});	/*ready*/
</script>
</body>

<!-- Mirrored from autocare.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 12:20:26 GMT -->
</html>