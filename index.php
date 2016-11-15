<html>
<body>
<p>MENGHITUNG LUAS DAN KELILING LINGKARAN <br></p>
<form name="form1" method="post" action="index.php">
<pre>

Masukkan Jari-Jari= <input type="text" name="jari"><br>
<input type="submit" name="hitung" value="Hitung">

<?php
	$phi=22/7;
	$r=$_REQUEST['jari'];
	$luas=$phi*$r*$r;
	$keliling= $phi*($r+$r);

	extract($_POST);
	if (isset ($hitung))
	{
		echo "LUAS LINGKARAN : $luas <br>
KELILING LINGKARAN : $keliling";}
?>

</pre>
</form>
</body>
</html>