<?php

include "../../koneksi.php";
include "../../fungsi_thumb.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapusitem'){

$affected_rows = $db->exec("DELETE from transaksi_jenis where id_transaksi_jenis='$_GET[iddetail]'");


 header('location:../../media.php?module=tambahlaundry&act=detail&id='.$_GET['id']);
}


if ($act=='hapuspaket'){

$affected_rows = $db->exec("DELETE from transaksi_detail where id_transaksi_detail='$_GET[iddetail]'");


 header('location:../../media.php?module=tambahlaundry&act=detail&id='.$_GET['id']);
}





if ($act=='tambahitem'){
	
	
	$today = date("Y/m/d");

$result = $db->exec("INSERT INTO transaksi( id_toko,  tanggal) 

VALUES('$_POST[id_toko]', '$today')");

$insertId = $db->lastInsertId();


$result = $db->exec("INSERT INTO transaksi_jenis(id_transaksi, id_jenis, jumlah_jenis) 

VALUES('$insertId', '$_POST[id_jenis]', '$_POST[jumlah_jenis]')");

 header('location:../../media.php?module=tambahlaundry&act=detail&id='.$insertId);

}







if ($act=='updateitem'){

$result = $db->exec("INSERT INTO transaksi_jenis(id_transaksi, id_jenis, jumlah_jenis) 

VALUES('$_POST[id_transaksi]', '$_POST[id_jenis]', '$_POST[jumlah_jenis]')");

 header('location:../../media.php?module=tambahlaundry&act=detail&id='.$_POST['id_transaksi']);

}


if ($act=='updatepaket'){


$jumlahnormal=str_replace(',' , '.' , $_POST['berat']);

$stmt = $db->query("SELECT * FROM cucian where id_cucian='$_POST[id_cucian]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$jumlah=$jumlahnormal*$row['harga'];


$result = $db->exec("INSERT INTO transaksi_detail(id_transaksi, id_cucian, jumlah, total_detail) 

VALUES('$_POST[id_transaksi]', '$_POST[id_cucian]', $jumlahnormal , '$jumlah')");



 header('location:../../media.php?module=tambahlaundry&act=detail&id='.$_POST['id_transaksi']);

}





if ($act=='tambahnota'){
	

$affected_rows = $db->exec("UPDATE transaksi SET id_sif = '$_POST[id_sif]', nota = '$_POST[nota]' WHERE transaksi.id_transaksi = '$_POST[id_transaksi]'");


$stmt = $db->query("SELECT sum(total_detail) as total FROM transaksi_detail where id_transaksi='$_POST[id_transaksi]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);


$affected_rows = $db->exec("UPDATE transaksi SET total='$row[total]' where id_transaksi='$_POST[id_transaksi]'");



 header('location:../../media.php?module=tambahlaundry&act=pelanggan&id='.$_POST['id_transaksi']);


}








if ($act=='tambahpelanggan'){
	
$stmt = $db->query("SELECT * FROM pelanggan where hp='$_POST[hp]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);	



$_POST['submit1'] = isset($_POST['submit1']) ? $_POST['submit1'] : '';
$_POST['submit2'] = isset($_POST['submit2']) ? $_POST['submit2'] : '';

		
if ($_POST['submit1']<>'')
	{
		if ($row['hp']=='')
	{
	
 header('location:../../media.php?module=tambahlaundry&act=pelanggan&id='.$_POST['id_transaksi'].'&stat=1');
		
	}	
else	
	
	{
	$affected_rows = $db->exec("UPDATE transaksi SET id_pelanggan = '$row[id_pelanggan]' WHERE transaksi.id_transaksi = '$_POST[id_transaksi]'");
	
		
header('location:../../media.php?module=tambahlaundry&act=bayarsekarang&id='.$_POST['id_transaksi'].'');	
	}
	}
	else if ($_POST['submit2']<>'')
	{
		if ($row['hp']=='')
	{
	
 header('location:../../media.php?module=tambahlaundry&act=pelanggan&id='.$_POST['id_transaksi'].'&stat=1');
		
	}	
else	
	
	{
	$affected_rows = $db->exec("UPDATE transaksi SET id_pelanggan = '$row[id_pelanggan]' WHERE transaksi.id_transaksi = '$_POST[id_transaksi]'");
	
		
header('location:../../tesprint.php?id='.$_POST['id_transaksi'].'');	
	}
	}



}






if ($act=='tambahpelanggannew'){
	
$stmt = $db->query("SELECT * FROM pelanggan where hp='$_POST[hp]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);	



$_POST['submit1'] = isset($_POST['submit1']) ? $_POST['submit1'] : '';
$_POST['submit2'] = isset($_POST['submit2']) ? $_POST['submit2'] : '';

if ($_POST['submit1']<>'')
	{
	
if ($row['hp']=='')
	{
$result = $db->exec("INSERT INTO pelanggan(nama_pelanggan, alamat_pelanggan, hp) 

VALUES('$_POST[nama]', '$_POST[alamat]', '$_POST[hp]')");		
$insertId = $db->lastInsertId();	

$affected_rows = $db->exec("UPDATE transaksi SET id_pelanggan = '$insertId' WHERE transaksi.id_transaksi = '$_POST[id_transaksi]'");

		
	}	
else	
	
	{
	
$affected_rows = $db->exec("UPDATE transaksi SET id_pelanggan = '$row[id_pelanggan]' WHERE transaksi.id_transaksi = '$_POST[id_transaksi]'");
		

	}

header('location:../../media.php?module=tambahlaundry&act=bayarsekarang&id='.$_POST['id_transaksi'].'');
	
	}
	else if ($_POST['submit2']<>'')
	{

if ($row['hp']=='')
	{
$result = $db->exec("INSERT INTO pelanggan(nama_pelanggan, alamat_pelanggan, hp) 

VALUES('$_POST[nama]', '$_POST[alamat]', '$_POST[hp]')");		
$insertId = $db->lastInsertId();	

$affected_rows = $db->exec("UPDATE transaksi SET id_pelanggan = '$insertId' WHERE transaksi.id_transaksi = '$_POST[id_transaksi]'");

		
	}	
else	
	
	{
	
$affected_rows = $db->exec("UPDATE transaksi SET id_pelanggan = '$row[id_pelanggan]' WHERE transaksi.id_transaksi = '$_POST[id_transaksi]'");
		

	}

header('location:../../tesprint.php?id='.$_POST['id_transaksi'].'');	
	
	
	}





}




if ($act=='bayarnya'){
	

$jumlahnormala=str_replace('Rp. ' , '' , $_POST['bayar']);
$jumlahnormalb=str_replace('.' , '' , $jumlahnormala);


$stmt = $db->query("SELECT * FROM transaksi where id_transaksi='$_POST[id_transaksi]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);	
$kembalian=$jumlahnormalb-$row[total];


$affected_rows = $db->exec("UPDATE transaksi SET bayar = '$jumlahnormalb', kembalian='$kembalian' WHERE transaksi.id_transaksi = '$_POST[id_transaksi]'");
	
		
header('location:../../tesprint.php?id='.$_POST['id_transaksi'].'');	
	


}


if ($act=='bayarnanti'){
	

$jumlahnormala=str_replace('Rp. ' , '' , $_POST['bayar']);
$jumlahnormalb=str_replace('.' , '' , $jumlahnormala);


$stmt = $db->query("SELECT * FROM transaksi where id_transaksi='$_POST[id_transaksi]'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);	
$kembalian=$jumlahnormalb-$row[total];


$affected_rows = $db->exec("UPDATE transaksi SET bayar = '$jumlahnormalb', kembalian='$kembalian', id_sif_nanti='$_POST[id_sif]' WHERE transaksi.id_transaksi = '$_POST[id_transaksi]'");


$affected_rows = $db->exec("UPDATE transaksi SET id_sif_nanti='0' WHERE id_sif_nanti = id_sif");
	
		
header('location:../../tesprint2.php?id='.$_POST['id_transaksi'].'');	
	


}

if ($act=='hapuslaporan'){
	
$affected_rows = $db->exec("DELETE from transaksi where id_transaksi='$_GET[iddetail]'");


 header('location:../../media.php?module=daydata&hadir='.$_GET['hadir'].'&tgla='.$_GET['tgla'].'&tglb='.$_GET['tglb'].'');
 
 

}


?>
