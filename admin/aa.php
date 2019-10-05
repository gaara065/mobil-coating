<!doctype html>
<html>
	<head>
		<title>Inputan Format Angka</title>
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.maskMoney.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#angka1').maskMoney();
			$('#angka2').maskMoney({prefix:'US$'});
			$('#angka3').maskMoney({thousands:'.', decimal:',', precision:0});
			$('#angka4').maskMoney();
		});
		</script>
	</head>
	<body>
	<form action="" method="post">
		Input angka (default): <input type="text" name="angka1" id="angka1"/>
		<br/>Input angka (US$): <input type="text" name="angka2" id="angka2"/>
		<br/>Input angka (Rp. ): <input type="text" name="angka3" id="angka3"/>
		<br/>Input angka (Rp. ) - HTML5: <input type="text" name="angka4" id="angka4" data-affixes-stay="true" data-prefix="Rp. " data-thousands="." data-decimal="," />
		<br/><input type="submit" name="submit" value="Submit"/>
	</form>
	<?php
	if(isset($_POST['submit'])) {
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
	}
	?>
	</body>
</html>




<script type="text/javascript" src="https://members.phpmu.com/asset/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	$(".input").keyup(function(){
	    var val1 = +$(".value1").val();
	    var val2 = +$(".value2").val();
	    $("#result").val(val1+val2);
	});
});
</script>
 
<table class='table table-condensed table-bordered'>
    <tbody>
      <tr><th>Nilai 1 </th>    <td><input type='number' class='input value1' value='500000'></td></tr>
      <tr><th>Nilai 2</th>    <td><input type='number' class='input value2'></td></tr>
      <tr><th>Hasil</th>    <td><input type='text' id='result' disabled></td></tr>
    </tbody>
</table>