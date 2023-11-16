<?php include("navbar.php"); ?>

<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERANDA</title>
    <!-- icon -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- style -->
    <link rel="stylesheet" href="awal.css">
</head>

<body>
    <section class="home" id="home">
        <div class="content">
            <h3>WELCOME TO CHRISTMAS STORE</h3>
            <span>Sambut Natalmu dengan Keindahan dan Kebahagiaan</span>
        </div>

    </section>

    <section class="produk" id="produk">
        <h3>PRODUK POPULER</h3>
        <div class="produk-item">
            <img src="IMG/pohon.jpg" alt="Aksesoris Natal 1">
            <h2>Aksesoris Natal 1</h2>
            <p>Pohon Natal indah untuk pojok rumah anda</p>
            <p class="harga">Rp 500.000,00</p>
        </div>
        <div class="produk-item">
            <img src="IMG/ring.jpg" alt="Aksesoris Natal 2">
            <h2>Aksesoris Natal 2</h2>
            <p>Hiasan Natal cantik</p>
            <p class="harga">Rp 75.000,00</p>
        </div>
        <div class="produk-item">
            <img src="IMG/topinatal.jpg" alt="Aksesoris Natal 3">
            <h2>Aksesoris Natal 3</h2>
            <p>Topi Santa yang lucu untuk anak-anak</p>
            <p class="harga">Rp 50.000,00</p>
        </div>
    </section>

    <section class="Icons-container">
        <div class="Icons">
            <div class="info">
                <h3>free delivery</h3>
                <span>on all orders</span>
            </div>
        </div>

        <div class="Icons">
            <div class="info">
                <h3>10 days returns</h3>
                <span>moneyback guarantee</span>
            </div>
        </div>

        <div class="Icons">
            <div class="info">
                <h3>offer & gifts</h3>
                <span>on all orders</span>
            </div>
        </div>

        <div class="Icons">
            <div class="info">
                <h3>secure paymens</h3>
                <span>protected by paypal</span>
            </div>
        </div>
    </section>
    
        <!-- review section -->
        <section class="review" id="review">
            <h1 class="heading">customer review</h1>

                <div class="box-container">

                    <div class="box">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Toko Aksesoris Natal XmasLom memberikan pengalaman berbelanja Natal yang luar biasa! Saya sangat senang menemukan berbagai koleksi aksesoris kreatif dan unik untuk merayakan momen spesial ini. Situs webnya mudah dinavigasi, dengan gambar produk yang jelas dan deskripsi yang informatif. Proses pembelian juga sangat lancar, dan produk tiba lebih cepat dari yang saya harapkan. Aksesoris yang saya pesan memiliki kualitas yang baik dan menambahkan sentuhan magis pada dekorasi Natal saya. Terima kasih XmasLom, saya pasti akan kembali untuk membeli lebih banyak aksesoris Natal yang menakjubkan! 🎄✨</p>
                        <div class="user">
                            <img src="IMG/poto1.jpg" alt="">
                            <div class="user-info">
                                <h3>Olivia Claire</h3>
                                <span>happy customer</span>
                            </div>
                        </div>
                        <span class="fas fa-quote-right"></span>
                    </div>
                    <div class="box">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>XmasLom adalah toko aksesoris Natal berbasis web yang luar biasa! Navigasi situsnya sangat mudah, dan koleksi aksesoris Natal yang ditawarkan begitu beragam dan menarik. Saya sangat terkesan dengan kualitas produk dan desainnya yang unik. Proses pembelian online pun sangat lancar, dan saya senang dengan kecepatan pengiriman. Setiap produk dikemas dengan baik dan aman tiba di rumah saya. Pelayanan pelanggan juga patut diacungi jempol, sangat responsif dan membantu. XmasLom benar-benar menjadi pilihan terbaik untuk mempercantik dan merayakan suasana Natal. Saya sangat merekomendasikan toko ini kepada semua orang yang mencari aksesoris berkualitas tinggi dan pelayanan prima untuk merayakan kegembiraan Natal</p>
                        <div class="user">
                            <img src="IMG/poto2.jpg" alt="">
                            <div class="user-info">
                                <h3>Marnie Gracia</h3>
                                <span>happy customer</span>
                            </div>
                        </div>
                        <span class="fas fa-quote-right"></span>
                    </div>
                    <div class="box">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Saya sangat puas dengan pengalaman berbelanja di XmasLom. Tersedia beragam aksesoris Natal yang unik dan berkualitas. Layanan pelanggan responsif dan pengiriman tepat waktu. Sangat direkomendasikan untuk persiapan meriah Natal</p>
                        <div class="user">
                            <img src="IMG/poto3.jpg" alt="">
                                <div class="user-info">
                                    <h3>Sky Jane</h3>
                                    <span>happy customer</span>
                                </div>
                        </div>
                        <span class="fas fa-quote-right"></span>
                    </div>
                </div>
        </section>
        <section class="footer">
            <div class="footer-box">
                <h2>XmasLom</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga dolorum a repudiandae facilis ipsam mollitia illo? Animi, dolorum quidem. Vel officiis dolores tempora voluptatum, architecto iusto odio quo tempore enim.</p>
                <div class="sosial">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-tiktok'></i></a>
                </div>
            </div>

            <div class="footer-box">
            <h3>Support</h3>
            <li><a href="#"></a>Product</li>
            <li><a href="#"></a>Help & Support</li>
            <li><a href="#"></a>Return Policy</li>
            <li><a href="#"></a>Terms Of Use</li>
            </div>

            <div class="footer-box">
            <h3>View Guides</h3>
            <li><a href="#"></a>Features</li>
            <li><a href="#"></a>Careers</li>
            <li><a href="#"></a>Blog Posts</li>
            <li><a href="#"></a>Our Branches</li>
            </div>

            <div class="footer-box">
                <h3>Contact</h3>
                <span><i class='bx bx-map' ></i>Samarinda, Kalimantan Timur</span><br>
                <span><i class='bx bx-phone' ></i>+63 857 6578 0098</span><br>
                <span><i class='bx bx-envelope' ></i>XmasLom@gmail.com</span>
            </div>

        </section>

    <script src="script.js" defer></script>
</body>
</html>
