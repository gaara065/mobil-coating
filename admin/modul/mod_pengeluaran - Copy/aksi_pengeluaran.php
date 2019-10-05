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

$affected_rows = $db->exec("DELETE from pengeluaran where id_pengeluaran='$_GET[id]'");




  
  header('location:../../media.php?module=pengeluaran');
}




if ($act=='tambah'){

$pizza  = $_POST['tanggal'];
$pieces = explode("/", $pizza);
$newtgl = $pieces['2'].'-'.$pieces['0'].'-'.$pieces['1'];


$result = $db->exec("INSERT INTO pengeluaran( id_toko, nama_pengeluaran, total_pengeluaran, tanggal_pengeluaran) 

VALUES('$_POST[id_toko]', '$_POST[nama]' , '$_POST[total]' , '$newtgl')");

  
  header('location:../../media.php?module=pengeluaran');
}

if ($act=='ubah'){

$pizza  = $_POST['tanggal'];
$pieces = explode("/", $pizza);
$newtgl = $pieces['2'].'-'.$pieces['0'].'-'.$pieces['1'];

$affected_rows = $db->exec("UPDATE pengeluaran 
SET id_toko='$_POST[id_toko]',
nama_pengeluaran='$_POST[nama]',
total_pengeluaran='$_POST[total]',
tanggal_pengeluaran='$newtgl'
 
where id_pengeluaran='$_POST[id_pengeluaran]'");


  
  header('location:../../media.php?module=pengeluaran');
}


?>
