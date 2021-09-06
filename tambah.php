<?php 
require 'functions.php';

// koneksi ke DBSM
$conn = mysqli_connect("localhost", "root", "", "challengephp");

// buat ngecek tombol submit udah dipencet apa blm
if(isset ($_POST["submit"])) {

    // cek apakah data berhasil atau gagal
    if( tambah($_POST) > 0) {
        echo "
        <script>
            alert('Your response has been recorded');
            document.location.href = 'index.php';
        </script>    
        ";
    } else {
        echo "
        <script>
        alert('Failed, please submit the new one!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah berita</title>
    </head>

    <body>
        <h1>Tambah berita</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="judul">Judul : </label>
                    <input type="text" name="judul" id="judul" required>
                </li>
                <li>
                    <label for="isi">Preview isi : </label>
                    <input type="text" name="isi" id="isi">
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
                    <input type="text" name="image" id="image">
                </li>
                <li>
                    <button type="submit" name="submit">Submit</button>
                </li>
            </ul>
        </form>
    </body>
</html>