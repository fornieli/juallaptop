<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $qty = $_POST['qty'];
    $q = $conn->query("INSERT INTO produk VALUES ('', '$nama_produk', '$harga', '$qty')");

    if ($q) {
        echo "<script>alert('Data produk berhasil ditambahkan'); window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='index.php'</script>";
    }
} else {
    header('Location: index.php');
}
