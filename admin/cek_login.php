<?php
include "../koneksi.php";


$username = $_POST['username'];
$pass     = $_POST['password'];



$stmt = $db->query("SELECT * FROM user WHERE username='$username' AND password='$pass'");
$r = $stmt->fetch(PDO::FETCH_ASSOC);
$ketemu = $stmt->rowCount();


// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();




  $_SESSION['namauser']     = $r['username'];
    $_SESSION['status']     = $r['status'];


	
  header('location:media.php?module=home');


}
else{
	
	// include "index.php";
  header('location:media.php?module=login&id=1');
}

?>
