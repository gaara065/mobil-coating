<?php

include "../../../koneksi.php";
include "../../fungsi_thumb.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from proyek2 where id='$_GET[id]'");




  
  header('location:../../media.php?module=daftaritem');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO proyek2( nama, kategori) 

VALUES('$_POST[nama]','$_POST[kategori]')");

  
  header('location:../../media.php?module=daftaritem');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE proyek2 
SET nama='$_POST[nama]', kategori='$_POST[kategori]'

 
where id='$_POST[id]'");


  
  header('location:../../media.php?module=daftaritem');
}


?>
