<style type="text/css">

table
{
    width:  100%;

}

th
{
    text-align: center;
  
    background: #d5edff;
}

td
{

text-align: center;
}

td.col1
{
    border: solid 1px red;
    text-align: right;
}


</style>


<table cellpadding="10">

  <tr>
    <td>
	<img src="assets/images/aa.png" width="180px" alt="" />
	</td>
    <td align="left">
	
	<span style="font-size:20px; font-weight:bold;">&nbsp;PEMERINTAH KABUPATEN KAPUAS HULU</span><br/>
<span style="font-size:17px; font-weight:bold;">&nbsp;TENTATIF JADWAL KEGIATAN PIMPINAN</span><br/>
	</td>
  </tr>
</table>

<br>
<br>

<table border="1" cellspacing="0" cellpadding="10" >

   <col style="width: 3%">
    <col style="width: 12%">
	 <col style="width: 12%">
	  <col style="width: 15%">
	   <col style="width: 20%">
	    <col style="width: 12%">
		 <col style="width: 12%">
		  <col style="width: 12%">


 
 
 <thead>

          <tr>
                                                    <th>&nbsp;No&nbsp;</th>
                                                    <th>&nbsp;<br/>&nbsp;Tanggal&nbsp;<br/>&nbsp;</th>
													<th>&nbsp;Jam&nbsp;</th>
                                                   
													   <th>&nbsp;Tempat Kegiatan&nbsp;</th>
													      <th>&nbsp;Nama Kegiatan&nbsp;</th>
													      <th>&nbsp;Asal surat&nbsp;</th>
													      <th>&nbsp;Yang Menghadiri&nbsp;</th>
														  <th>&nbsp;Keterangan&nbsp;</th>
													
                                                   
                                                </tr>
    </thead>



<?php
include "koneksi.php";
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
?>

			   <?php

			   
   
?>
         					   <?php
			   

if ($_GET['hadir']<>'100' )
	{


$query = "SELECT * FROM berkas where hadir='$_GET[hadir]' and  (tanggal >= '$_GET[tgl_awal]' and tanggal <= '$_GET[tgl_akhir]') ORDER BY  id asc";
	}
	else if ($_GET['hadir']=='100')
	{
$query = "SELECT * FROM berkas where  (tanggal >= '$_GET[tgl_awal]' and tanggal <= '$_GET[tgl_akhir]') ORDER BY  id asc";
	}
	
	
$no='1';
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
   {
	   ?>
	   
	   <?php
	   
$pizza  = $data['tanggal'];
$pieces = explode("-", $pizza);
$bln=$pieces['1'];



$query11 = "SELECT * FROM desa where id='$data[desa]' ";
$hasil11 = mysql_query($query11);
$data11 = mysql_fetch_array($hasil11);


$query111 = "SELECT * FROM kecamatan where id='$data[kecamatan]' ";
$hasil111 = mysql_query($query111);
$data111 = mysql_fetch_array($hasil111);





$query1 = "SELECT * FROM pimpinan where id='$data[hadir]' ";
$hasil1 = mysql_query($query1);
$data1 = mysql_fetch_array($hasil1);

	   echo "
	         <tr class='gradeX' >
                                                    <td>&nbsp;$no&nbsp;</td>
													<td>&nbsp;$pieces[2] "; echo bulan($bln);  echo " $pieces[0]&nbsp;</td>
													<td>&nbsp;$data[jam] Wib&nbsp;</td>
													<td>$data[tempat]&nbsp;</td>
													<td>$data[nama]&nbsp;</td>
													<td>&nbsp;$data[dari]&nbsp;</td>
													<td>&nbsp;$data1[nama]&nbsp;</td>
													<td>&nbsp;$data[status]&nbsp;</td>
													
                                                </tr>
	   ";
	   $no++;
   }
   
	   ?>




</table>
