<?php




$ak='';

$string=str_replace(' ', '', $_POST['tujuan']);
 
if ($string['0']=='0')
	
	{
	
		$ak=str_replace('08', '628', $string);
		 
	}
	
else if ($string['0']=='+')
	
	{
	
		$ak=str_replace('+', '', $string);
		 
	}
	
	else if ($string['0']=='8')
	
	{
	$no='0'.$string;
		$ak=str_replace('08', '628', $no);
		 
	}
	else if ($string['0']=='6')
	
	{

		$ak=$string;
		 
	}
	
	
	
$_POST['tujuan']=$ak;	
	
$_POST['tujuan']=str_replace(' ', '', $_POST['tujuan']);	

$_POST['tujuan'] = preg_replace('/\D/', '', $_POST['tujuan']);
	
	
$name = str_replace(' ', '%20', $_POST['isi']);

$name = trim(preg_replace('/\s\s+/', '%0a', $name));

$no_respon = file_get_contents('http://103.16.199.187/masking/send.php?username=adminhumpro&password=123456789&hp='.$_POST['tujuan'].'&message='.$name.'');


$no_respon = str_replace(' ', '', $no_respon);





   mysql_query("INSERT INTO smsoutbox(
   
				tujuan,
				isi,
			
				no_respon,
				created_at,
				panjang
   
   
   ) 
                            VALUES(
							
							
'$_POST[tujuan]',
'$_POST[isi]',

'$no_respon',
'$today',
$panjang

       
       )");
	   
	   
	   ?>