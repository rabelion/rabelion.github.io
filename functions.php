<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "challengephp");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data) {
        global $conn;
        $judul = $data["judul"];
        $isi = $data["isi"];
        $situs = $data["situs"];
        $tanggal = $data["tanggal"];
        $image = $data["image"];
    
        $query = "INSERT INTO portalberita
                    VALUES 
                    ('', '$judul', '$isi', '$situs', '$tanggal', '$image')
                    ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM portalberita WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function update($data) {
    global $conn;

    $id = $data["id"];
    $judul = $data["judul"];
    $isi = $data["isi"];
    $situs = $data["situs"];
    $tanggal = $data["tanggal"];
    $image = $data["image"];

    $query = "UPDATE portalberita SET
                judul = '$judul',
                isi = '$isi',
                situs = '$situs',
                tanggal = '$tanggal',
                image = '$image'
               WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>