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

$affected_rows = $db->exec("DELETE from gambar3 where foto='$_GET[id]'");




  
  header('location:../../media.php?module=daftarproduk');
}




if ($act=='tambah'){


  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 


  if (empty($lokasi_file)){
  
  
$result = $db->exec("INSERT INTO gambar3( nama,deskripsi) 

VALUES('$_POST[nama]','$_POST[deskripsi]')");

  header('location:../../media.php?module=daftarproduk');
  
  }
  
  else{
	  
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=daftarproduk')</script>";
   
   }
    else{
    UploadDisplay($nama_file_unik);
  
  
$result = $db->exec("INSERT INTO gambar3( nama, foto,deskripsi) 

VALUES('$_POST[nama]', '$nama_file_unik','$_POST[deskripsi]' )");

  header('location:../../media.php?module=daftarproduk');
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
	   
$affected_rows = $db->exec("UPDATE gambar3
SET nama='$_POST[nama]',
deskripsi='$_POST[deskripsi]'
 
where id='$_POST[id]'");


  header('location:../../media.php?module=daftarproduk');
  }
  else
  {
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=daftarproduk')</script>";
    }
    else
	{
    UploadDisplay($nama_file_unik);
	
$affected_rows = $db->exec("UPDATE gambar3 
SET nama='$_POST[nama]',
 foto      = '$nama_file_unik' ,
deskripsi='$_POST[deskripsi]' 
 
where id='$_POST[id]'");


  header('location:../../media.php?module=daftarproduk');
   }
  }
  
  
  





  

}


?>
