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

$affected_rows = $db->exec("DELETE from gambar2 where foto='$_GET[id]'");




  
  header('location:../../media.php?module=daftarharga');
}




if ($act=='tambah'){


  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 


  if (empty($lokasi_file)){
  
  
$result = $db->exec("INSERT INTO gambar2( id_proyek) 

VALUES('$_POST[kategori]')");

  header('location:../../media.php?module=daftarharga');
  
  }
  
  else{
	  
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=daftarharga')</script>";
   
   }
    else{
    UploadDisplay($nama_file_unik);
  
  
$result = $db->exec("INSERT INTO gambar2( id_proyek, foto) 

VALUES('$_POST[kategori]', '$nama_file_unik' )");

  header('location:../../media.php?module=daftarharga');
   }
  }
  
  
  

  

}








if ($act=='ubah'){
 $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
 
 
 
   if (empty($lokasi_file)){
	   
$affected_rows = $db->exec("UPDATE gambar2 
SET id_proyek='$_POST[kategori]'
 
where id='$_POST[id]'");


  header('location:../../media.php?module=daftarharga');
  }
  else
  {
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=daftarharga')</script>";
    }
    else
	{
    UploadDisplay($nama_file_unik);
	
$affected_rows = $db->exec("UPDATE gambar2 
SET id_proyek='$_POST[kategori]',
 foto      = '$nama_file_unik'  
 
where id='$_POST[id]'");


  header('location:../../media.php?module=daftarharga');
   }
  }
  
  
  





  

}


?>
