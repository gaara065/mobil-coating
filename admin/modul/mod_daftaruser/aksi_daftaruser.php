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

$affected_rows = $db->exec("DELETE from user where id_user='$_GET[id]'");




  
  header('location:../../media.php?module=daftaruser');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO user( id_toko, username, password, status) 

VALUES('$_POST[id_toko]', '$_POST[username]', '$_POST[password]', '4')");

  
  header('location:../../media.php?module=daftaruser');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE user 
SET id_toko='$_POST[id_toko]',
username='$_POST[username]',
password='$_POST[password]'
 
where id_user='$_POST[id_user]'");


  
  header('location:../../media.php?module=daftaruser');
}


?>
