<?php 
require 'functions.php';

// ambil data di url
$id = $_GET["id"];

$prtl = query("SELECT * FROM portalberita WHERE id = $id")[0];

// koneksi ke DBSM
$conn = mysqli_connect("localhost", "root", "", "challengephp");

// buat ngecek tombol submit udah dipencet apa blm
if(isset ($_POST["submit"])) {

    // cek apakah data berhasil atau gagal
    if( update($_POST) > 0) {
        echo "
        <script>
            alert('Your response has been updated');
            document.location.href = 'index.php';
        </script>    
        ";
    } else {
        echo "
        <script>
            alert('Failed, unavailable to update!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update berita</title>
    </head>

    <body>
        <h1>Update berita</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $prtl["id"]; ?>">
            <ul>
                <li>
                    <label for="judul">Judul : </label>
                    <input type="text" name="judul" id="judul" required value="<?= $prtl["judul"]; ?>">
                </li>
                <li>
                    <label for="isi">Preview isi : </label>
                    <input type="text" name="isi" id="isi" value="<?= $prtl["isi"]; ?>">
                </li>
                <li>
                    <label for="situs">Nama situs : </label>
                    <input type="text" name="situs" id="situs">
                </li>
                <li>
                    <label for="tanggal">Tanggal publish : </label>
                    <input type="text" name="tanggal" id="tanggal">
                </li>
                <li>
                    <label for="image">Gambar : </label>
                    <input type="text" name="image" id="image" value="<?= $prtl["image"]; ?>">
                </li>
                <li>
                    <button type="submit" name="submit">Update</button>
                </li>
            </ul>
        </form>
    </body>
</html>