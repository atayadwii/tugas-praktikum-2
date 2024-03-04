<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan dari formulir
    $customer = $_POST['cus'];
    $produk = $_POST['jeniskelamin'];
    $jumlah = $_POST['jumlah'];

    // Proses selanjutnya, misalnya menyimpan data ke database atau mengirimkan email

    // Tampilkan pesan berhasil
    echo "<h1>Pesanan Berhasil Diproses!</h1>";
    echo "<p>Customer: $customer</p>";
    echo "<p>Produk: $produk</p>";
    echo "<p>Jumlah: $jumlah</p>";
} else {
    // Jika formulir tidak di-submit, redirect kembali ke formulir
    header("Location: form.php");
    exit;
}
?>
