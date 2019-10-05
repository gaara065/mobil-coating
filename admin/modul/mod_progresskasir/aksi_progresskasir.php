<?php

include "../../koneksi.php";
include "../../fungsi_thumb.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='update1'){



$affected_rows = $db->exec("UPDATE transaksi 
SET status_transaksi='1'
 
where id_transaksi='$_GET[id]'");


  
  header('location:../../media.php?module=progresskasir');
}


if ($act=='update2'){



$affected_rows = $db->exec("UPDATE transaksi 
SET status_transaksi='2'
 
where id_transaksi='$_GET[id]'");

$stmt = $db->query("SELECT *
      FROM transaksi a, toko b, pelanggan c
      WHERE a.id_toko=b.id_toko and a.id_pelanggan=c.id_pelanggan and a.id_transaksi='$_GET[id]'
	  ");
$data8 = $stmt->fetch(PDO::FETCH_ASSOC);


$stmt5 = $db->query("SELECT * FROM format_sms a ");
$rowa5 = $stmt5->fetch(PDO::FETCH_ASSOC);


$isinya=str_replace("[nama_pelanggan]",$data8['nama_pelanggan'], $rowa5['isi']);
$isinya2=str_replace("[nota]",$data8['nota'], $isinya);
$isinya3=str_replace("[nama_toko]",$data8['nama'], $isinya2);




    include "../../vendor/autoload.php";

    $clients = new SMSGatewayMe\Client\ClientProvider("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU0MzM4MDE1NCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY0NzQ0LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.PDzUPxHHTZ-MZ3-wHkLU7bCWZioWag51L_krZRFSUT4");

    $sendMessageRequest = new SMSGatewayMe\Client\Model\SendMessageRequest([
        'phoneNumber' => $data8['hp'], 'message' => $isinya3, 'deviceId' => 106894
    ]);

    $sentMessages = $clients->getMessageClient()->sendMessages([$sendMessageRequest]);
	
	
	
  
  header('location:../../media.php?module=progresskasir');
}

if ($act=='update3'){



$affected_rows = $db->exec("UPDATE transaksi 
SET status_transaksi='3'
 
where id_transaksi='$_GET[id]'");


$stmt = $db->query("SELECT *
      FROM transaksi a, toko b, pelanggan c
      WHERE a.id_toko=b.id_toko and a.id_pelanggan=c.id_pelanggan and a.id_transaksi='$_GET[id]'
	  ");
$data8 = $stmt->fetch(PDO::FETCH_ASSOC);


if ($data8['bayar']=='0')
{
	 header('location:../../media.php?module=tambahlaundry&act=bayarnanti&id='.$data8['id_transaksi'].'');
	 
}
else
{
	 header('location:../../media.php?module=progresskasir');
}
  

}


?>
