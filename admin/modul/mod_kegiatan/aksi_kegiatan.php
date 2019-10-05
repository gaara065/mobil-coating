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

    mysql_query("DELETE FROM berkas WHERE id='$_GET[id]'");
  
  header('location:../../media.php?module='.$module);
}






else if ($act=='kirimnotif'){
	
	

$query1 = "SELECT * FROM berkas where id='$_GET[id]' ";
$hasil1 = mysql_query($query1);
$data1 = mysql_fetch_array($hasil1); 


$query11 = "SELECT * FROM pimpinan where id='$data1[hadir]' ";
$hasil11 = mysql_query($query11);
$data11 = mysql_fetch_array($hasil11);



$noo=$data11['email'];
$pecah=explode("\n",$noo);
$a=count($pecah);

  for ( $i = 0; $i < $a  ; $i++)
  
{
	
	//echo "$pecah[$i]";
	require_once ("../../phpmailer/class.phpmailer.php");
  $Correo = new PHPMailer();
  $Correo->IsSMTP();
  $Correo->SMTPAuth = true;
  $Correo->SMTPSecure = "ssl";
  $Correo->Host = "smtp.mail.yahoo.com";
  $Correo->Port = 465;
  $Correo->Username = "gp_angga@yahoo.co.id";
  $Correo->Password = "telkom135";
  $Correo->SetFrom('gp_angga@yahoo.co.id','De Yo');
  $Correo->FromName = "Agenda Pemerintah Kapuas Hulu";
 
  $Correo->AddAddress("$pecah[$i]");

  $Correo->Subject = "Agenda Pemerintah Kapuas Hulu";
  $Correo->Body = "
  <H3>Agenda Pemerintah Kapuas Hulu</H3><br/>
  Nama : $data1[tanggal]<br/>
  Jam : $data1[jam]<br/>
  Tempat : $data1[tempat]<br/>
  Nama Kegiatan : $data1[nama]<br/>
  
  
  
  ";
  $Correo->IsHTML (true);
  if (!$Correo->Send())
  {
    
  }
  else
  {
   
  }
	
}
  

$_POST['tujuan']=$data11['hp'];
  $_POST['isi']='[Info Agenda] Tanggal : '.$data1['tanggal'].',  Jam : '.$data1['jam'].',  Tempat : '.$data1['tempat'].',  Nama Kegiatan :'.$data1['nama'].'';
  
include "../../simpankirim.php"; 
 
   



  
  header('location:../../media.php?module='.$module.'&notif=1');

  
}





if ($act=='simpanedit'){

  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  
  
  
  $pizza  = $_POST['tanggal'];
$pieces = explode(" ", $pizza);
$bln=$pieces['1'];


  if (empty($lokasi_file)){

  
         mysql_query("UPDATE berkas SET tanggal       = '$pieces[1]',
                                   jam   = '$pieces[2]', 
                                   tempat = '$_POST[tempat]',
                                   nama    = '$_POST[nama]',
                                   dari         = '$_POST[dari]',
                                   hadir  = '$_POST[hadir]',
								    status  = '$_POST[status]',
									 catatan  = '$_POST[catatan]',
									  no  = '$_POST[no]',
									   telp  = '$_POST[telp]'
									   
                             WHERE id  = '$_POST[id]'");
   header('location:../../media.php?module='.$module);
  
  }
  else{

   UploadFile($nama_file_unik);
   
   
       mysql_query("UPDATE berkas SET tanggal       = '$pieces[1]',
                                   jam   = '$pieces[2]', 
                                   tempat = '$_POST[tempat]',
                                   nama    = '$_POST[nama]',
                                   dari         = '$_POST[dari]',
                                   hadir  = '$_POST[hadir]',
								    status  = '$_POST[status]',
									 catatan  = '$_POST[catatan]',
									  no  = '$_POST[no]',
									   telp  = '$_POST[telp]',
									   
                                   berkasnya      = '$nama_file_unik'   
                             WHERE id  = '$_POST[id]'");
   
 
   header('location:../../media.php?module='.$module);
   
  }
}






if ($act=='simpantambah'){

  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  
  
  
  $pizza  = $_POST['tanggal'];
$pieces = explode(" ", $pizza);
$bln=$pieces['1'];


if ($_POST['tanggal']<>'' and $_POST['nama']<>'' and $_POST['tempat']<>'')
{

  if (empty($lokasi_file)){

  
  
      mysql_query("INSERT INTO berkas(
	  tanggal  ,
                                   jam   ,
                                   tempat ,
                                   nama    ,
                                   dari  ,
                                   hadir  ,
								    status ,
									 catatan  ,
									  no  ,
									   telp  
	  ) 
                            VALUES(
						      '$pieces[1]',
                                 '$pieces[2]', 
                                  '$_POST[tempat]',
                                  '$_POST[nama]',
                                 '$_POST[dari]',
                                  '$_POST[hadir]',
								  '$_POST[status]',
								'$_POST[catatan]',
									'$_POST[no]',
									'$_POST[telp]'
							
							)");
								   
								   
								   
      
      
 
  
  }
  else{

   UploadFile($nama_file_unik);
   
   
           mysql_query("INSERT INTO berkas(
	  tanggal  ,
                                   jam   ,
                                   tempat ,
                                   nama    ,
                                   dari  ,
                                   hadir  ,
								    status ,
									 catatan  ,
									  no  ,
									   telp  ,
									   berkasnya
	  ) 
                            VALUES(
						      '$pieces[1]',
                                 '$pieces[2]', 
                                  '$_POST[tempat]',
                                  '$_POST[nama]',
                                 '$_POST[dari]',
                                  '$_POST[hadir]',
								  '$_POST[status]',
								'$_POST[catatan]',
									'$_POST[no]',
									'$_POST[telp]',
									'$nama_file_unik'   
							
							)");
									   
                     
 

   
  }
  
  
      echo "<script>window.alert('Kegiatan berhasil di input');
        window.location=('../../media.php?module=$module')</script>";
		
		
		
		
}
else
{
	  echo "<script>window.alert('Data Tanggal, Jam, Nama Kegiatan, Tempat Kegiatan Dan Yang Menghadiri tidak boleh kosong');
        window.location=('../../media.php?module=kegiatan&act=tambahberkas')</script>";
}
}



?>
