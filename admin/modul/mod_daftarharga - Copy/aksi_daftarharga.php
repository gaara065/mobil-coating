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

$affected_rows = $db->exec("DELETE from cucian where id_cucian='$_GET[id]'");




  
  header('location:../../media.php?module=daftarharga');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO cucian( nama, harga, satuan) 

VALUES('$_POST[nama]', '$_POST[harga]' , '$_POST[satuan]')");

  
  header('location:../../media.php?module=daftarharga');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE cucian 
SET nama='$_POST[nama]',
harga='$_POST[harga]',
satuan='$_POST[satuan]'
 
where id_cucian='$_POST[id_cucian]'");


  
  header('location:../../media.php?module=daftarharga');
}


?>
