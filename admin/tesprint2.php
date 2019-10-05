 <style>
@media print
{
  .button
  {
    display: none;
  }
 
}
body {
  font-size: 13px;
font-family: Arial;
}
table {
  font-size: 13px;
font-family: Arial;
margin : 0px 10px;
}
 </style>
 <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
<meta charset="UTF-8"> 
<body style='width:170px;'>
<?php 
include "koneksi.php";
include "library.php";


$stmt = $db->query("SELECT *
      FROM transaksi a, toko b, pelanggan c
      WHERE a.id_toko=b.id_toko and a.id_pelanggan=c.id_pelanggan and a.id_transaksi='$_GET[id]'
	  ");
	  
$data8 = $stmt->fetch(PDO::FETCH_ASSOC);






$pizza  = $data8['tanggal'];


?>	




<script>

function myFunction()
{
    window.print();
}
</script>



<div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class='print'>

                    <div class="invoice-title" align="center">
<?php echo $data8['nama']; ?> <br/>
<?php echo $data8['alamat']; ?> <br/>
085252554400 

                    </div>
	--------------------------------------		


                    <div class="invoice-title" align="center">

Nota Pesanan Pelanggan 

                    </div>
	--------------------------------------			
                    <div class="invoice-title" align="left">
                        Nota #  <?php echo $data8['nota']; ?>
                    </div>


                    <div class="invoice-title" align="left">
                        Tanggal   <?php echo "$pizza";?>
                    </div>
                  
             
--------------------------------------	
                    <div>
                        <div>
							A.N.  <?php echo $data8['nama_pelanggan']; ?> <br/>( <?php echo $data8['hp']; ?> )
							<br/>
--------------------------------------			
<br/>	
				<?php
				
				
				$stmt9 = $db->query("SELECT *
      FROM transaksi_detail a, cucian b
      WHERE a.id_transaksi='$_GET[id]' and a.id_cucian=b.id_cucian
	  ");
 while($data9 = $stmt9->fetch(PDO::FETCH_ASSOC)) {
 
 ?>
 
 	- Paket <?php echo $data9['nama']; ?>
	<br/><?php echo $data9['jumlah']; ?>
						<?php echo $data9['satuan']; ?>-<?php echo rupiah($data9['total_detail']); ?>
						<br/>
 
 <?php
 
 }

	 

?>				
				
					
--------------------------------------							
						
                            <table >
                                <thead>
                                <tr>
                               <td>Item</td>
                  <td>Jumlah</td>
                                </tr>
                                </thead>

                                     <?php
		$no='1';		
					$stmta = $db->query("SELECT *
      FROM jenis_cucian a, transaksi_jenis b
      WHERE a.id_jenis = b.id_jenis and b.id_transaksi = '$_GET[id]'
	  ORDER BY  a.id_jenis asc");
 while($dataa = $stmta->fetch(PDO::FETCH_ASSOC)) {
	 echo" <tr>
	
                  <td>$dataa[nama_jenis]</td>
				
                  <td align='center'>$dataa[jumlah_jenis]</td>
		
        
	 
	  </tr>
	 
	 ";
 }
				
				?>
                            </table>
				
                        </div>
                    </div>
					
--------------------------------------	
                    <div  align="right">
                        Total &nbsp;&nbsp;<?php echo rupiah($data8['total']); ?>
                    </div>
                    <div align="right">
                        Pembayaran  &nbsp;&nbsp; <?php echo rupiah($data8['bayar']); ?>
                    </div>
                    <div align="right">
                        Sisa  &nbsp;&nbsp;   <?php echo rupiah($data8['kembalian']); ?>
                    </div>
--------------------------------------	
       <div class="invoice-title" align="center">


** Barang Sudah Diambil **

                    </div>					
					
                </div>
				&nbsp; <br>
						&nbsp; <br>
							&nbsp; <br>
 <input style="padding:5px;" value="Print" type="button" onclick="myFunction()" class="button"></input>
				<a href="media.php?module=menukasir">	<input style="padding:5px;" value="Tutup" type="button" class="button"></input></a>
      
                <div>
                    <div>
                    </div>
					
	</body>				
					
					
					
					
					
					
					
					