<?php

include "../../koneksi.php";
include "../../fungsi_thumb.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='simpantambahnota'){


$stmt = $db->query("SELECT * FROM transaksi where nota='$_POST[nota]' and id_toko='$_POST[id_toko]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$row_count = $stmt->rowCount();
if ($row_count>'0')
{
	header('location:../../media.php?module=kasirtabel&act=detail&id='.$row['id_transaksi']);
	
}
else
{

$pizza  = $_POST['tanggal'];
$pieces = explode("/", $pizza);
$newtgl = $pieces['2'].'-'.$pieces['0'].'-'.$pieces['1'];


$result = $db->exec("INSERT INTO transaksi( id_toko, nota, tanggal) 

VALUES('$_POST[id_toko]', $_POST[nota] , '$newtgl')");
$insertId = $db->lastInsertId();

  
header('location:../../media.php?module=kasirtabel&act=detail&id='.$insertId);
}
}










?>
