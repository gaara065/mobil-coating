  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-lg-4">
		  </div>
        <!-- ./col -->
        <div class="col-lg-4">
		
		
		
		
		
		
		
		
          <!-- small box -->
          <div class="box-body">
              
			  
			  
			  
			  
			  
			  
			  
			  <div class="login-box-body">
<?php
if ($_GET['id']=='1')
{
?>			  
		<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Perhatian!</h4>
                Username dan password yang anda masukkan salah.
              </div>
<?php
}
?>			  
			  
    <p class="login-box-msg">Silahkan Masukkan Login Anda</p>

    <form action="cek_login.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama" name="username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
        
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>



  </div>
  <!-- /.login-box-body -->
</div>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
        </div>
        <!-- ./col -->
     
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      














      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
