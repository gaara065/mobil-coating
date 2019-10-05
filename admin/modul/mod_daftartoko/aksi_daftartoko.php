<?php

include "../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from toko where id_toko='$_GET[id]'");




  
  header('location:../../media.php?module=daftartoko');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO toko( nama, alamat) 

VALUES('$_POST[nama]', '$_POST[alamat]')");

  
  header('location:../../media.php?module=daftartoko');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE dll 
SET footerbawah='$_POST[editor1]',
isinano='$_POST[editor2]',
email='$_POST[email]',
alamat='$_POST[alamat]',
hp='$_POST[hp]',
faceb='$_POST[faceb]',
instagl='$_POST[instagl]',
goog='$_POST[goog]'
	

 
where id='$_POST[id]'");


  
  header('location:../../media.php?module=daftartoko');
}


?>
