<?php 
    require 'config.php';
?>

!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourCoffe-Ega Sulfika</title>

    <!-- munculkan icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <script src="jquery.js"></script>
</head>
<body>
<header class="header">
    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#gallery">gallery</a>
        <a href="#about">about</a>
        <a href="formulirkotak.php">kotak saran</a>
        <a href="logout.php" style="padding:5px; backgound-color:red; color:white;">logout</a>

    </nav>
</header>

<section class="home" id="home">
    <div class="content">
        <h3>Great Ideas Start With Coffe</h3>
        <h2>Welcome</h2>
    </div>

</section>

<section class="gallery" id="gallery">
    <h1 class="heading"> gallery <span>your coffe</span> </h1>
    <p id="keterangan">Klik tombol di bawah untuk merubah tampilan dark mode atau light mode</p>
    <button id="btn-info">Button</button>
    <div class="swiper gallery-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="images/cart-item-1.png" alt="">
                <h3>KOPI ARABIKA</h3>
                <p>Berasal dari Brasil. Kopi arabika memiliki banyak varietas, tergantung Negara, iklim, dan tanah, tempat kopi ditanam. Misalnya kopi toraja, mandailing, kolumbia, brasilia, dan lain sebagainya. Antara kopi arabika yang satu dan yang lain punya perbedaan rasa. Berikut  ciri-ciri kopi arabika aromanya wangi sedap mirip percampuran bunga dan buah, hidup di daerah yang sejuk dan dingin, Memiliki rasa asam yang tidak dimiliki oleh kopi jenis robusta, Memiliki bodi atau rasa kental saat disesap di mulut, Rasa kopi arabika lebih mild atau halus,  Kopi arabika juga terkenal pahit.</p> 
            </div>

            <div class="swiper-slide box">
                <img src="images/cart-item-2.png" alt="">
                <h3>KOPI LUWAK</h3>
                <p>merupakan kopi khas dari Indonesia. kopi luwak ini diproduksi dengan cara yang unik yaitu melalui bantuan hewan musang, yang biasa disebut dengan luwak. Karena prosesnya yang unik inilah, harga kopi luwak menjadi salah satu kopi dengan harga tertinggi didunia.</p>
            </div>

            <div class="swiper-slide box">
                <img src="images/cart-item-3.png" alt="">
                <h3>GREEN BEAN KOPI</h3>
                <p>Biji kopi mentah yang belum disangrai dan biasanya berwarna hijau. Green bean kopi diproses dari buah ceri kopi matang dan melalui tahap pengeringan dengan teknik tertentu untuk memaksimalkan kandungan senyawa rasa. Manfaat kopi hijau dengan kandungan cholorogenic acid-nya mungkin bisa membantu pencegahan diabetes dan serangan jantung. Manfaat kopi hijau juga berkontribusi mengontrol gula darah, tekanan darah jika dikonsumsi dengan baik.</p>
            </div>

            <div class="swiper-slide box">
                <img src="images/cart-item-4.png" alt="">
                <h3>KOPI ROBUSTA</h3>
                <p>Kopi Robusta merupakan keturunan beberapa spesies kopi, terutama Coffea canephora. Tumbuh baik di ketinggian 400-700 m dpl, temperatur 21-24° C dengan bulan kering 3-4 bulan secara berturut-turut dan 3-4 kali hujan kiriman. Kualitas buah lebih rendah dari Arabika dan Liberika.</p>
            </div>

        </div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>

</section>

<section class="about" id="about">
    <h1 class="heading"> about me <span> why visit us </span></h1>
    <div class="row">
        <div class="image">
            <img src="images/home-img-1.png" alt="">
        </div>
        <div class="content">
            <h3>Apa yang membuat harimu menyenangkan dengan menyajikan sebuah kopi?</h3>
            <p id="judul">Your Coffe adalah sebuh website informasi tentang kopi, mulai dari jenis sampai dengan olahan minumannya. Kopi adalah tumbuhan yang berbuah kecil, bulat dengan ukuran maksimal sebesar biji kelereng. Tumbuhan kopi ini seringkali di buat bubuk, dengan tujuan diminum, dibuat makanan, atau keperluan lainnya.</p>
        </div>

    </div>

</section>

<section class="footer">
    <div class="share">
        <a href="https://www.facebook.com/ega.eva.90" class="fab fa-facebook-f"></a>
        <a href="https://wa.me/qr/S6QPIR4Q6ENBI1" class="fab fa-whatsapp"></a>
        <a href="https://www.instagram.com/egaslfika._/" class="fab fa-instagram"></a>
    </div>

    <div class="links">
        <a href="#home">home</a>
        <a href="#gallery">gallery</a>
        <a href="#about">about</a>
        <a href="formulirkotak.php">kotak saran</a>
    </div>

</section>
<script src="javascript.js"></script>
</body>
</html>