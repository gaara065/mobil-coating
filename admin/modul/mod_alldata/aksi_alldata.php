<?php

include "../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';





if ($act=='hapus'){

    mysql_query("DELETE FROM berkas WHERE urutan='$_GET[id]'");
  
  header('location:../../media.php?module='.$module);
}






else if ($act=='kirimnotif'){
	
	

$query1 = "SELECT * FROM berkas where id='$_GET[id]' ";
$hasil1 = mysql_query($query1);
$data1 = mysql_fetch_array($hasil1); 


$query11 = "SELECT * FROM pimpinan where id='$data1[hadir]' ";
$hasil11 = mysql_query($query11);
$data11 = mysql_fetch_array($hasil11);


$query22 = "SELECT * FROM user ";
$hasil22 = mysql_query($query22);
$data22 = mysql_fetch_array($hasil22);



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
  $Correo->SMTPSecure = "tls";
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
  Tanggal : $data1[tanggal]<br/>
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

?>
