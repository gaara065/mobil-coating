<?php
date_default_timezone_set('Asia/Jakarta'); // PHP 6 mengharuskan penyebutan timezone.
$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari = date("w");
$hari_ini = $seminggu[$hari];

$tgl_sekarang = date("Ymd");
$tgl_skrg     = date("d");
$bln_sekarang = date("m");
$thn_sekarang = date("Y");
$jam_sekarang = date("H:i:s");

$nama_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei", 
                    "Juni", "Juli", "Agustus", "September", 
                    "Oktober", "November", "Desember");

$bln_sekarang = date("n");
					
$bln_skrg = $bln_sekarang;

$bulan_ini = $nama_bln[$bln_skrg];





function bulan($bulan)
{
Switch ($bulan){
    case 1 : $bulan="Januari";
        Break;
    case 2 : $bulan="Februari";
        Break;
    case 3 : $bulan="Maret";
        Break;
    case 4 : $bulan="April";
        Break;
    case 5 : $bulan="Mei";
        Break;
    case 6 : $bulan="Juni";
        Break;
    case 7 : $bulan="Juli";
        Break;
    case 8 : $bulan="Agustus";
        Break;
    case 9 : $bulan="September";
        Break;
    case 10 : $bulan="Oktober";
        Break;
    case 11 : $bulan="November";
        Break;
    case 12 : $bulan="Desember";
        Break;
    }
return $bulan;
}


function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}


function rupiah2($angka){
	
	$hasil_rupiah2 = number_format($angka,0,',','.');
	return $hasil_rupiah2;
 
}
					
?>
