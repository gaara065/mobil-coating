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


$jumlahnormala=str_replace('Rp. ' , '' , $_POST['modal_sif']);
$jumlahnormalb=str_replace('.' , '' , $jumlahnormala);
  


$result = $db->exec("INSERT INTO sif( id_toko, tgl_sif, modal_sif, urutan_sif, status_sif, id_petugas) 

VALUES('$_POST[id_toko]', '$_POST[tgl_sif]' , '$jumlahnormalb'  , '$_POST[urutan_sif]', 'buka', '$_POST[id_petugas]')");

  
  header('location:../../media.php?module=menukasir');
}








if ($act=='tutup'){



$affected_rows = $db->exec("UPDATE sif 
SET hasil_sif='$_POST[hasil_sif]',
total_sif='$_POST[total_sif]',
status_sif='tutup',
bayar_sif='$_POST[bayar_sif]',
bayar_nanti_sif='$_POST[bayar_nanti_sif]',
setor_sif='$_POST[setor_sif]'
 
where id_sif='$_POST[id_sif]'");


  
  header('location:../../media.php?module=menukasir');
}


?>
