<?php
require 'functions.php';
$portalberita = query("SELECT * FROM portalberita");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman utama</title>
    </head>
    <body>
        <h1>Portal Berita</h1>

        <a href="tambah.php">Tambah berita</a>
        <br><br>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Judul</th>
                <th>Preview isi</th>
                <th>Nama situs</th>
                <th>Tanggal publish</th>
                <th>Gambar</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach($portalberita as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="update.php?id=<?= $row["id"]; ?>">Update</a> | 
                    <a href="delete.php?id=<?= $row["id"]; ?>">Delete</a>
                </td>
                <td><?= $row["judul"]; ?></td>
                <td><?= $row["isi"]; ?></td>
                <td><?= $row["situs"]; ?></td>
                <td><?= $row["tanggal"]; ?></td>
                <td><img src="img/<?= $row["image"]; ?>" width="100"></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </body>
</html>