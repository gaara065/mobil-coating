<style type="text/css">

table
{
    width:  100%;
    border:  1px #5544DD;
}

th
{
    text-align: center;
    border:  1px #113300;
    background: #d5edff;
}

td
{
    text-align: left;
    border:1px;
}

td.col1
{
    border: solid 1px red;
    text-align: right;
}


</style>
<span style="font-size: 20px; font-weight: bold">KEMENTERIAN AGRARIA DAN TATA RUANG/BADAN PERTANAHAN NASIONAL<br/>&nbsp;KANTOR PERTANAHAN KABUPATEN KUBU RAYA</span>
<br>
<br>
<table border="1" cellspacing="0">
   <col style="width: 3%">
    <col style="width: 12%">
    <col style="width: 12%">
 <col style="width: 12%">
 <col style="width: 12%">
 <col style="width: 13%">
 <col style="width: 12%">
 <col style="width: 12%">
 <col style="width: 12%"> <thead>

        <tr>
		    <th data-field="no" data-sortable="true">No.</th>
						           <th data-field="berkas" data-sortable="true">No. Berkas</th>
								   <th data-field="di302nya"  data-sortable="true">DI302</th>
								 <th data-field="tanggal"  data-sortable="true">Tanggal</th>
						        <th data-field="pemohon" data-sortable="true">Nama Pemohon</th>
								<th data-field="lokasi" data-sortable="true">Letak Tanah</th>				
								<th data-field="kegiatan" data-sortable="true">Kegiatan</th>							
								<th data-field="petugas" data-sortable="true">Petugas Ukur</th>
								<th data-field="di307nya"  data-sortable="true">DI307</th>
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

			   
$namakeg="and kegiatan=$_GET[keg]";		   
 if ($_GET['keg']=='100')
{
	$namakeg="";
	
}


$blnnya='';
if ($_GET['bln']<>'100')
{
$blnnya="and month(tanggal)='$_GET[bln]'";	
}
			   
if ($_GET['jenis']=='1')
{
	
$query = "SELECT * FROM berkas where (selesai = '0' or selesai='100') $blnnya and year(tanggal)='$_GET[thn]' $namakeg order by urutan asc";
	
}
else if ($_GET['jenis']=='2' and $_GET['di307']=='1')
{

$query = "SELECT * FROM berkas where (selesai='1' or selesai='2' or selesai='3') $blnnya and year(tanggal)='$_GET[thn]' $namakeg and di307_awal<>'' order by urutan asc";	
	
}

else if ($_GET['jenis']=='2' and $_GET['di307']=='2')
{

$query = "SELECT * FROM berkas where (selesai='1' or selesai='2' or selesai='3') $blnnya and year(tanggal)='$_GET[thn]' $namakeg and di307_awal='' order by urutan asc";	
	
}

else if ($_GET['jenis']=='2' and $_GET['di307']=='3')
{

$query = "SELECT * FROM berkas where (selesai='1' or selesai='2' or selesai='3') $blnnya and year(tanggal)='$_GET[thn]' $namakeg order by urutan asc";	
	
}

else if ($_GET['nama']<>'' and $_GET['no']=='')
{

$query = "SELECT * FROM berkas where nama_pemohon like '%$_GET[nama]%' and (selesai='1' or selesai='2' or selesai='3') order by urutan asc";	
	
}

else if ($_GET['no']<>'' and $_GET['nama']=='')
{

$query = "SELECT * FROM berkas where (no_berkas = '$_GET[no]' or no_loket = '$_GET[no]') and year(tanggal)=$_GET[thn] and (selesai='1' or selesai='2' or selesai='3')  order by urutan asc";	
	
}
else if ($_GET['no']<>'' and $_GET['nama']<>'')
{

$query = "SELECT * FROM berkas where (no_berkas = '$_GET[no]' or no_loket = '$_GET[no]') and year(tanggal)=$_GET[thn] and nama_pemohon like '%$_GET[nama]%' and (selesai='1' or selesai='2' or selesai='3')  order by urutan asc";	
	
}


$hasil = mysql_query($query);

$numResults = mysql_num_rows($hasil);
$counter = 0;
$no = 1;


while ($data = mysql_fetch_array($hasil))
   {
	/*   
$query1 = "SELECT * FROM kecamatan where id='$data[kecamatan]'";
$hasil1 = mysql_query($query1);
$data1 = mysql_fetch_array($hasil1);

$query2 = "SELECT * FROM desa where id='$data[desa]'";
$hasil2 = mysql_query($query2);
$data2 = mysql_fetch_array($hasil2);


	"kecamatan": "<?php echo "$data1[kecamatan]";?>",
									"desa": "<?php echo "$data2[desa]";?>",
	*/
	
	
$query3 = "SELECT * FROM kegiatan where id='$data[kegiatan]'";
$hasil3 = mysql_query($query3);
$data3 = mysql_fetch_array($hasil3);







	$query6 = "SELECT * FROM petugas where id='$data[id_petugas]'";
$hasil6 = mysql_query($query6);
$data6 = mysql_fetch_array($hasil6);


$query11 = "SELECT * FROM desa where id='$data[desa]' ";
$hasil11 = mysql_query($query11);
$data11 = mysql_fetch_array($hasil11);


$query111 = "SELECT * FROM kecamatan where id='$data[kecamatan]' ";
$hasil111 = mysql_query($query111);
$data111 = mysql_fetch_array($hasil111);


$a=$data['no_berkas'];
if ($a=='0')
{ $noo=$data['no_loket'];}
else { $noo=$data['no_berkas'];}


$pizza  = $data['tanggal'];
$pieces = explode("-", $pizza);

$bln=$pieces['1'];


if ($data['kegiatan']=='1' or $data['kegiatan']=='2' or $data['kegiatan']=='4' or $data['kegiatan']=='6')
{
$di302='';
$di302nya=$data['di302_awal'];	
$di307nya=$data['di307_awal'];	
}
else
{
$di302=$data['di302_jml'];
$di302nya=$data['di302_awal'].' s.d '.$data['di302_akhir'];	
if ($data['di307_awal']<>'')
{
$di307nya=$data['di307_awal'].' s.d '.$data['di307_akhir'];	
}
}




$query113 = "SELECT * FROM petugas where id='$data[id_petugas]'";
$hasil113 = mysql_query($query113);
$data1113 = mysql_fetch_array($hasil113);

$query112 = "SELECT * FROM pembantu where id='$data[pembantu]'";
$hasil112 = mysql_query($query112);
$data112 = mysql_fetch_array($hasil112);



if ($data['yg_ukur']=='2')
{
$namanya=$data112['nama'];
$hpnya=$data112['hp'];	
}
else
{
$namanya=$data1113['nama_lengkap'];
$hpnya=$data1113['hp'];
}





	
	
	?>
	
			
	   <tr>
	 <td><?php echo "$no";?></td>      
      <td><?php echo "  $data[no_berkas]/$data[tahun]";?></td> 
	      <td><?php echo "$di302nya";?></td> 
		      <td><?php echo "$pieces[2] "; echo bulan($bln);  echo " $pieces[0]";?></td> 
			      <td><?php echo "$data[nama_pemohon]";?></td> 
				      <td><?php echo "$data111[kecamatan] - $data11[desa]";?></td> 
					       <td><?php echo "$data3[kode] $di302";?></td> 
					      <td><?php echo "$namanya";?></td> 
						      <td><?php echo "$di307nya";?></td> 
							 
	  </tr>
	
	
	
		<?php
	++$no;
	$di307nya='';
	$namanya='';
    
	
	
	
	   
   }
   
   
?>





</table>
