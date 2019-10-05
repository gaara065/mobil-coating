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

    mysql_query("DELETE FROM pimpinan WHERE id='$_GET[id]'");
  
  header('location:../../media.php?module='.$module);
}








if ($act=='simpanedit'){

  

  
         mysql_query("UPDATE pimpinan SET nama       = '$_POST[nama]',
                                   email   = '$_POST[email]', 
                                   hp = '$_POST[hp]'
                                 
									   
                             WHERE id  = '$_POST[id]'");
  
 
   header('location:../../media.php?module='.$module);

}






if ($act=='simpantambah'){


  
  
      mysql_query("INSERT INTO pimpinan(
	  nama  ,
                                   email   ,
                                   hp 
	  ) 
                            VALUES(
						     
                                  '$_POST[nama]',
                                 '$_POST[email]',
                                  '$_POST[hp]'
							
							)");
								   
					
  
  
      echo "<script>window.alert('Pimpinan berhasil di input');
        window.location=('../../media.php?module=$module')</script>";
		
		
		
		
}



?>
