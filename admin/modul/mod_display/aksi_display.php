<?php

include "../../koneksi.php";
include "../../fungsi_thumb.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

    mysql_query("DELETE FROM tampilan WHERE id='$_GET[id]'");
  
  header('location:../../media.php?module='.$module);
}




if ($act=='pilih'){

 
      mysql_query("INSERT INTO tampilan(
	  
									   id_berkas  
	  ) 
                            VALUES(
						      '$_GET[id]'
							
							)");
								   
								   
								   
      
  
      echo "<script>window.alert('Kegiatan berhasil di pilih');
        window.location=('../../media.php?module=$module')</script>";
		
	
}



?>
