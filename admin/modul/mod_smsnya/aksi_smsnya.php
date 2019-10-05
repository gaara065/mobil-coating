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

$affected_rows = $db->exec("DELETE from toko where id_toko='$_GET[id]'");




  
  header('location:../../media.php?module=daftartoko');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO toko( nama, alamat) 

VALUES('$_POST[nama]', '$_POST[alamat]')");

  
  header('location:../../media.php?module=daftartoko');
}








if ($act=='ubah'){


$isi=$_POST['isi'];

$affected_rows = $db->exec("UPDATE format_sms 
SET isi='$isi'
 
where id_sms='1'");


echo "UPDATE format_sms 
SET isi='$isi'
 
where id_sms='1'";

  
  header('location:../../media.php?module=smsnya');
}


?>
