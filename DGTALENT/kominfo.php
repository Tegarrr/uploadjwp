<html>
<head>
    <title>Membuat Form Validasi </title>
</head>

<body>

<h1>Membuat Form Validasi Dengan PHP <br/> ---</h1>

<?php

if(isset($_GET['nama'])){

if($_GET['nama'] == "kosong"){

echo "<h4 style='color:red'>Nama Belum Di Masukkan
!</h4>";

}

}

?>
<h4>Masukkan Nama Anda :</h4>

<form action="cek.php" method="post">

<table>

<tr>

<td>Nama</td>

<td><input type="text" name="nama"></td>

<td><input type="submit" value="Cek"></td>

</tr>

</table>

</form>

</body>

</html>

PHP Example