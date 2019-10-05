<?php

$a = isset($_GET['module']) ? $_GET['module'] : '';

?> 
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

	  
	  
	  
	  
	  
	  
	  
	  
	  
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
          			
			
		

<?php
		
if ($_SESSION['status']=='')
{	
		
		?>
			
			
			
			
	 <li class="header">Login Admin</li>
		
   <li <?php if ($a=='login'){echo 'class="active"';}  ?>>
              <a href="media.php?module=login">
                <i class="fa fa-group text-red"></i> <span>Login </span> 
              </a></li>    
<?php
}
		
else if ($_SESSION['status']<>'')
{	
		
		?>   

<li class="header">
		
		
		</li>
		
   <li <?php if ($a=='home' or $a==''){echo 'class="active"';}  ?>>
              <a href="media.php?module=home">
                <i class="fa fa-dashboard text-aqua"></i> <span>profil </span> 
              </a>
         </li>    
   


 	  		
     
		 <li class="header"> </li>
		
   <li <?php if ($a=='kegiatan'){echo 'class="active"';}  ?>>
              <a href="media.php?module=daftarproduk">
                <i class="fa fa-edit text-yellow"></i> <span>produk </span> 
              </a></li>    
			    
            
			
			  
			  
			 <li class="header"> </li>
			
		    <li <?php if ($a=='daftarharga'){echo 'class="active"';}  ?>>
              <a href="media.php?module=daftaritem">
                <i class="fa fa-edit text-red"></i> <span>galeri </span> 
              </a></li>    
			  
			    <li <?php if ($a=='daftartoko'){echo 'class="active"';}  ?>>
              <a href="media.php?module=daftarharga">
                <i class="fa fa-edit text-red"></i> <span>foto galeri </span> 
              </a></li> 
			  
			   
			      
			  
			  
	<?php
}






else if ($_SESSION['status']=='2')
{	
		
		?>   

<li class="header">Menu Aplikasi
		
		
		</li>
		
   <li <?php if ($a=='home' or $a==''){echo 'class="active"';}  ?>>
              <a href="media.php?module=home">
                <i class="fa fa-dashboard text-aqua"></i> <span>Beranda </span> 
              </a>
         </li>    
   


 	<li <?php if ($a=='daydata'){echo 'class="active"';}  ?>>
              <a href="media.php?module=daydata">
                <i class="fa fa-calendar text-aqua"></i> <span>Rekapitulasi Laundry </span> 
              </a>
         
            </li>   		
     
		
			  
			  
			 <li class="header">Manajemen Admin</li>
			
		    <li <?php if ($a=='daftarharga'){echo 'class="active"';}  ?>>
              <a href="media.php?module=daftarharga">
                <i class="fa fa-edit text-red"></i> <span>Daftar Harga </span> 
              </a></li>    
			  
			    <li <?php if ($a=='daftartoko'){echo 'class="active"';}  ?>>
              <a href="media.php?module=daftartoko">
                <i class="fa fa-edit text-red"></i> <span>Daftar Toko </span> 
              </a></li> 
			  
			     <li <?php if ($a=='daftaruser'){echo 'class="active"';}  ?>>
              <a href="media.php?module=daftaruser">
                <i class="fa fa-edit text-red"></i> <span>Daftar User </span> 
              </a></li> 
			      
			  
			  
	<?php
}



else if ($_SESSION['status']=='3')
{	
		
		?>   


			  
			  
			 <li class="header">Manajemen Admin</li>
			
		    <li <?php if ($a=='daftarharga'){echo 'class="active"';}  ?>>
              <a href="media.php?module=daftarharga">
                <i class="fa fa-edit text-red"></i> <span>Daftar Harga </span> 
              </a></li>    
			  
			    <li <?php if ($a=='daftartoko'){echo 'class="active"';}  ?>>
              <a href="media.php?module=daftartoko">
                <i class="fa fa-edit text-red"></i> <span>Daftar Toko </span> 
              </a></li> 
			  
			     <li <?php if ($a=='daftaruser'){echo 'class="active"';}  ?>>
              <a href="media.php?module=daftaruser">
                <i class="fa fa-edit text-red"></i> <span>Daftar User </span> 
              </a></li> 
			      
			  
			  
	<?php
}




else if ($_SESSION['status']=='4')
{	
		
		?>   

	
     
		 <li class="header">Manajemen Kasir</li>
		
   <li <?php if ($a=='kegiatan'){echo 'class="active"';}  ?>>
              <a href="media.php?module=tambahnota">
                <i class="fa fa-edit text-yellow"></i> <span>Tambah Nota </span> 
              </a></li>    
			   <li <?php if ($a=='kasirtabel'){echo 'class="active"';}  ?>>
              <a href="media.php?module=kasirtabel">
                <i class="fa fa-edit text-yellow"></i> <span>Data Laundry  </span> 
              </a></li>    
            
			 <li <?php if ($a=='pengeluaran'){echo 'class="active"';}  ?>>
              <a href="media.php?module=pengeluaran">
                <i class="fa fa-edit text-yellow"></i> <span>Pengeluaran </span> 
              </a></li>
			  
	
			  
			  
	<?php
}
		?>	

			
			
		
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>