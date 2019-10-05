<?php

include "../../koneksi.php";
include "../../fungsi_thumb.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapustransaksi'){

$affected_rows = $db->exec("DELETE from transaksi_detail where id_transaksi='$_GET[id]'");

$affected_rows = $db->exec("DELETE from transaksi where id_transaksi='$_GET[id]'");


  
  header('location:../../media.php?module=kasirtabel');
}



if ($act=='hapusdetail'){

$affected_rows = $db->exec("DELETE from transaksi_detail where id_transaksi_detail='$_GET[iddetail]'");


$stmt = $db->query("SELECT sum(total_detail) as total FROM transaksi_detail where id_transaksi='$_GET[id]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);


$affected_rows = $db->exec("UPDATE transaksi SET total='$row[total]' where id_transaksi='$_GET[id]'");

  
  header('location:../../media.php?module=kasirtabel&act=detail&id='.$_GET['id']);
}








if ($act=='simpandetail'){

  $jumlahnormal=str_replace(',' , '.' , $_POST['jumlah']);
$stmt = $db->query("SELECT * FROM cucian where id_cucian='$_POST[id_cucian]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$jumlah=$jumlahnormal*$row['harga'];


$result = $db->exec("INSERT INTO transaksi_detail(id_transaksi, id_cucian, jumlah, total_detail) 

VALUES('$_POST[id_transaksi]', '$_POST[id_cucian]', $jumlahnormal , '$jumlah')");


$stmt = $db->query("SELECT sum(total_detail) as total FROM transaksi_detail where id_transaksi='$_POST[id_transaksi]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);


$affected_rows = $db->exec("UPDATE transaksi SET total='$row[total]' where id_transaksi='$_POST[id_transaksi]'");
 
 
 header('location:../../media.php?module=kasirtabel&act=detail&id='.$_POST['id_transaksi']);

}




if ($act=='simpanbayar'){

$stmt = $db->query("SELECT * FROM transaksi where id_transaksi='$_POST[id_transaksi]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$sisa=$row['total']-$_POST['panjar'];


$affected_rows = $db->exec("UPDATE transaksi SET panjar='$_POST[panjar]' , sisa ='$sisa'
where id_transaksi='$_POST[id_transaksi]'");
 
 
 header('location:../../media.php?module=kasirtabel&act=detail&id='.$_POST['id_transaksi']);

}





?>
