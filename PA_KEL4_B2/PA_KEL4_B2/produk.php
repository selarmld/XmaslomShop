<?php
require 'koneksi.php';
$result_produk = mysqli_query($conn, "SELECT * FROM barang") or die('query failed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATALOG</title>

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="produk.css">
</head>

<body>
    <!-- navbar -->
    <header>
        <input type="checkbox" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a class="logo">XmasLom<span>.</span></a>

        <nav class="navbar">
            <a href="index.php #home">home</a>
            <a href="index.php #produk">Bestseller</a>
            <a href="index.php #about">About</a>
            <a href="transaksiuser.php">shop</a>
        </nav>

        <div class="icons">
            <?php
            $select_rows = mysqli_query($conn, "SELECT * FROM `transaksi`") or die('query failed');
            $row_count = mysqli_num_rows($select_rows);
            ?>

            <!-- span digunakan untuk angka di samping shoping cart -->
            <a href="cart.php" class="fas fa-shopping-cart"><span><?php echo $row_count; ?></span></a>

            <!-- <a href="#about" class="fas fa-user"></a> -->
            <button id="toggleThemeButton"><i id="themeIcon" class="fas fa-sun"></i></button>
        </div>
    </header>

    <h3>Christmas Accessories Products</h3>
    <section class="produk" id="produk">
        <?php
        // Loop untuk menampilkan data produk dari tabel barang
        while ($row_produk = mysqli_fetch_assoc($result_produk)) :
        ?>
            <div class="produk-item">
                <a href="#" onclick="showProductDetails(
                    '<?php echo $row_produk['nama_barang']; ?>',
                    '<?php echo $row_produk['harga_barang']; ?>',
                    '<?php echo $row_produk['stok_barang']; ?>',
                    '<?php echo $row_produk['id_barang']; ?>'
                )">
                    <img src="img/<?php echo $row_produk['gambar']; ?>" alt="">
                    <h2><?php echo $row_produk['nama_barang']; ?></h2>
                    <p class="harga">Rp <?php echo $row_produk['harga_barang']; ?></p>
                    <button onclick="addToCart('<?php echo $row_produk['id_barang']; ?>')">Masukan Keranjang</button>
                </a>
            </div>
        <?php
        endwhile;
        ?>
    </section>

    <div id="productDetailsModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="productName"></h2>
            <p id="productPrice"></p>
            <p id="productStock"></p>
            <!-- Tambahan informasi detail barang -->
        </div>
    </div>

    <script src="script.js" defer></script>
    <script>
        function showProductDetails(name, price, stock, productId) {
            document.getElementById('productName').innerText = 'Nama Barang: ' + name;
            document.getElementById('productPrice').innerText = 'Harga: Rp ' + price;
            document.getElementById('productStock').innerText = 'Stok: ' + stock;
            document.getElementById('productDetailsModal').style.display = 'block';
            document.getElementById('productDetailsModal').setAttribute('data-productId', productId);
        }

        function closeModal() {
            document.getElementById('productDetailsModal').style.display = 'none';
        }

        function addToCart(productId) {
            var quantity = 1; // Anda bisa mengganti ini sesuai kebutuhan
            var url = `tambahkekeranjang.php?halaman=keranjang-belanja&kode_produk=${productId}&aksi=tambah_produk&jumlah=${quantity}`;
            window.location.href = url;
        }
    </script>
</body>

</html>
