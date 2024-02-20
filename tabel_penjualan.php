<body><center>
<form action=”proses.php” method=”post”>
<table>
<tr><td colspan=”3″ align=”center”>
<h2>INPUT DATA</h2></td></tr>
<tr><td>Penjualan</td>
<td>:</td>
<td><input type=”text” name=”id_penjualan”></td></tr>
<tr><td>id_penjualan</td>
<td>:</td>
<td><input type=”text” name=”tgl_penjualan”></td></tr>
<tr><td>tgl_penjualan</td>
<td>:</td>
<td><input type=”text” name=”total_harga”></td></tr>
<tr><td>total_harga</td>
<td>:</td>
<center><input type=”submit” value=”Sent”>
<input type=”reset” value=”Cancel”></td></tr></center></table></form>
<?php”id_penjualan”; ?></center>
</body>

save pada folder C://xampp/project2

buat lagi sebuah file dengan nama proses.php lalu masukkan script ini:

<?php
$a=$_POST[‘id_penjualan’];
$b=$_POST[‘tgl_penjualan’];
$d=$_POST[‘total_harga’];mysql_connect(“localhost”,”root”,””);
mysql_select_db(“penjualan”);$sql=”;
mysql_query($sql);header(“location:index.php”);
?>
save pada folder C://xampp/project2

buat lagi sebuah file dengan nama prosesedit.php lalu masukkan script ini:

<?php

$a=$_POST[‘id_penjualan’];
$b=$_POST[‘tgl_penjualan’];
$c=$_POST[‘total_harga’];

mysql_connect(“localhost”,”root”,””);
mysql_select_db(“penjualan”);

$sql=”update;

mysql_query($sql);

header(“location:index.php”);
?>