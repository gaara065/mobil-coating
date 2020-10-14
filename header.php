<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head> 
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="DOKTER COATING - PONTIANAK KALIMANTAN BARAT" />
	<meta name="author" content="DOKTER COATING - PONTIANAK KALIMANTAN BARAT" />
	<meta name="robots" content="DOKTER COATING - PONTIANAK KALIMANTAN BARAT" />
	<meta name="description" content="DOKTER COATING - PONTIANAK KALIMANTAN BARAT - SCUTO nano ceramic+ paint protection dengan teknologi terbaik saat ini, SCUTO nano ceramic+ paint protection yang biasa di sebut laminating, merupakan paint protection
        berbahan keramik, di proses dengan teknologi nano
        menjadikan partikel keramik memiliki ukuran nano atau 0,0000001 meter. Karena ukuran partikel ini sangat kecil hingga dapat
        menutup pori-pori cat dengan sangat rapat dan
        menjadikannya kedap udara dan mencegah kotoran masuk ke dalam pori cat, dapat mengurangi terjadinya watermark spot, dan mampu melindungi dari sinar UV" />
	<meta property="og:title" content="DOKTER COATING - PONTIANAK KALIMANTAN BARAT" />
	<meta property="og:description" content="DOKTER COATING - PONTIANAK KALIMANTAN BARAT" />

	<meta name="format-detection" content="telephone=087855340881">

	<!-- FAVICONS ICON <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" /> <link rel="icon" href="https://s3.ap-south-1.amazonaws.com/dlab-html/autocare/xhtml/images/favicon.ico" type="image/x-icon" /> -->
	
	
	
	<!-- PAGE TITLE HERE -->
	<title>DOKTER COATING - PONTIANAK KALIMANTAN BARAT</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<link class="skin"  rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="plugins/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="plugins/revolution/css/navigation.css">
	
</head>
<body id="bg">
    <!-- 
<div id="loading-area"></div>
	-->

<div class="page-wraper">
    <!-- header -->
    <header class="site-header header mo-left header-style-1">
        <!-- top bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="dlab-topbar-left"> </div>
                    <div class="dlab-topbar-right">
                        <ul class="social-bx list-inline pull-right">
						
						<?php

$stmt = $db->query("SELECT * FROM dll ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	?>


                            <li><a href="<?php echo "$data[faceb]";?>" target="_blank" class="fa fa-facebook"></a></li>
                          <li><a href="<?php echo "$data[instagl]";?>" target="_blank" class="fa fa-instagram"></a></li>
                            <li><a href="<?php echo "$data[goog]";?>" target="_blank" class="fa fa-google-plus"></a></li>
							
	<?php
}


?>	


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- top bar END-->
        <!-- main header -->
        <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg">
            <div class="main-bar bg-primary clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion"><a href="index.php"><img src="images/logo.png" width="193" height="89" alt=""></a></div>
                    <!-- nav toggle button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button bg-primary-dark"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- Quik search -->
                    <div class="dlab-quik-search bg-primary">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="pencarian">
                            <span id="quik-search-remove"><i class="fa fa-remove"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav nav-style">
						
						   <li > <a href="index.php">Berandaasdasdasdasd</a> </li>
						   
						   
						   <li> <a href="nano.php">Nano Ceramic</a> </li>
						   
						   
						   <li > <a href="produk.php">Produk</a> </li>
						   
						   
						   <li > <a href="galeri.php">Galeri</a> </li>
						   
						   
						   <li > <a href="kontak.php">kontak</a> </li>
							
							
                          
                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>