<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Pemrograman Web</title>
</head>
<body>
    <div class="judul">
        <h1>Praktikum Pemrograman Web<h1>
        <h2>Politeknik Negeri Batam</h2>
    </div>
    <br/>
    <a class="tombol" href="input.php">+Tambah Data Baru</a>

    <h3>Data User</h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Opsi</th>
        </tr>
        <?php
        include "koneksi.php";
        $query_mysql = mysql_query("SELECT * FROM user")or die (mysql_error());
        $nomor = 1;
        while ($data = mysql_fetch_array($query_mysql)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data ['nama']; ?></td>
            <td><?php echo $data ['alamat']; ?></td>
            <td><?php echo $data ['pekerjaan']; ?></td>
                <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> <label for=""> 
                <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
            </td>
        </tr>
        

        <?php
        if (isset ($_GET['pesan'])) {
            $pesan = $_GET['pesan'];
            if ($pesan  == "input") {
                echo "Data berhasil di input.";
            }else if ($pesan =="update") {
                echo "Data berhasil di update.";
            }else if ($pesan == "hapus") {
                echo "Data berhasil di hapus.";
            }
            }
         

        }
    ?>

</body>
</html>