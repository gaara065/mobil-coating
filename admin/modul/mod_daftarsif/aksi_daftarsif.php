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

$affected_rows = $db->exec("DELETE from sif_petugas where id_petugas='$_GET[id]'");




  
  header('location:../../media.php?module=daftarsif');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO sif_petugas( id_toko, nama_petugas) 

VALUES('$_POST[id_toko]', '$_POST[nama_petugas]')");

  
  header('location:../../media.php?module=daftarsif');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE sif_petugas 
SET id_toko='$_POST[id_toko]',
nama_petugas='$_POST[nama_petugas]'
 
where id_petugas='$_POST[id_petugas]'");


  
  header('location:../../media.php?module=daftarsif');
}


?>
