<?php
require "koneksi.php";

$result = mysqli_query($conn, "select * from barang");

$barang = [];

while ($row = mysqli_fetch_assoc($result)) {
    $barang[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTTEST</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
<header>
    <a class="logo">XmasLom<span>.</span></a>

    <nav class="navbar">
        <a href="logout.php">Logout</a>
    </nav>
</header>

<?php

    include "koneksi.php";
    
    if (isset($_GET['id_barang'])) {
        $id_barang=htmlspecialchars($_GET["id_barang"]);

        $sql="delete from barang where id_barang='$id_barang' ";
        $hasil=mysqli_query($kon,$sql);

            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>
    <section class="admin" id="admin">
        <h1>Data Barang</h1>
        <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
                <th>Gambar</th>
            </tr>
            <?php $i = 1;
            foreach ($barang as $brg) : ?>
                <tr>
                    <td> <?= $i; ?> </td>
                    <td> <?= $brg["nama_barang"] ?> </td>
                    <td> Rp. <?= $brg["harga_barang"] ?> </td>
                    <td> <?= $brg["stok_barang"] ?> </td>
                    <td> <img src = "img/<?= $brg ['gambar'] ?>" alt ="ini gambar" width="80px" height="70px"></td>
                </tr>
            <?php $i++;
            endforeach; ?>
        </table><br>
        <center><a href="index.php">Kembali ke home</a></center>
    </section>
</body>

</html>