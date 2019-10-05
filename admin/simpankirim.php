<?php

include "koneksi.php";
$pizza  = $_POST['tujuan'];
$pieces = explode(PHP_EOL, $pizza);

$tot=count($pieces);




$panjangsms=strlen($_POST['isi']);

if ($panjangsms<='160')
{
	$panjang='1';
}
else if($panjangsms>'160' and $panjangsms<='320')
{
	$panjang='2';
}

else if($panjangsms>'320')
{
	$panjang='3';
}

	
	
for ($x = 0; $x < $tot; $x++) {
	
	
	
$_POST['tujuan']=$pieces[$x];

if ($_POST['tujuan']<>'')
{
include "codekirim.php";

	
}


 
}


//$name = str_replace(' ', '%20', $_POST['isi']);


//$no_respon = file_get_contents('http://103.16.199.187/masking/send.php?username=guest&password=123456789&hp='.$_POST['tujuan'].'&message='.$name.'');



//$no_respon = str_replace(' ', '', $no_respon);




		
		
		
		

?>