<?php
include("inc_koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kopi Sangah</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-MBXlMfYd3b/f2/Hji0A4enjFOkAMok7hpROaCfUp5rc5dmav3kiu8tWx/ZwlZ6Oj8IaSVEjmDp1h1/NKgbsgO5g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    body {
      background-image: url('perkebunan.jpeg');
      background-size: cover;
      background-repeat: no-repeat;
    }

    /* Gaya untuk tautan pesanan */
    .order-link {
      background-color: #ff6600;
      color: #fff;
      padding: 8px 16px;
      border-radius: 5px;
      text-decoration: none;
    }

    .order-link:hover {
      background-color: #e65c00;
    }

    /* Style untuk container */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* Style untuk header */
    header {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
    }

    header h1 {
      margin: 0;
    }

    header p {
      font-size: 18px;
    }

    /* Style untuk navigasi */
    nav {
      background-color: #eee;
      padding: 10px 0;
    }

    nav a {
      text-decoration: none;
      color: #4b2222;
      margin-right: 10px;
    }

    nav .social-links a {
      font-size: 18px;
      margin-right: 10px;
    }

    /* Style untuk section */
    section {
      padding: 40px 0;
      color: #340c05;
    }

    section h2 {
      text-align: center;
    }

    /* Style untuk footer */
    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px 0;
    }

    footer p {
      margin: 0;
    }

    /* Add this style for white text color in the menu items */
    #menu h2,
    {
    color: #000;
    }

    #menu h5 {
      color: #fff;
      /* Ubah sesuai dengan warna teks yang diinginkan (putih) */
    }

    /* Add a margin to the social links for better spacing */
    nav .social-links a {
      font-size: 18px;
      margin-right: 10px;
    }

    #tentang-kami {
      text-align: center;
    }

    #tentang-kami .container {
      max-width: 800px;
      /* Sesuaikan dengan lebar konten yang diinginkan */
      margin: 0 auto;
      /* Mengatur margin kiri dan kanan agar konten berada di tengah */
    }
  </style>
</head>

<body>

  <header>
    <div class="container" style="text-align:center;">
      <h1>Kopi Sangah Asli Barokah</h1>
      <p>Nikmati secangkir kopi berkualitas tinggi bersama kami.</p>
      <a href="pemesanan.php" class="order-link">
        <i class="fas fa-shopping-cart"></i> Pesanan
      </a>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </div>
  </header>

  <section id="tentang-kami">
    <div class="container">
      <h4>Tentang Kami</h4>
      <p>Pada sekitar tahun 1995 hingga 2017 di desa kami, khususnya di Desa Rempek-Darussalam, jumlah petani kopi lokal
        sangat melimpah, dan hasil panennya sangat berlimpah. Pada periode tersebut, harga biji kopi kering sangat
        rendah, sementara biaya pemeliharaan dan ongkos panen sangat tidak seimbang dengan pengeluaran dan hasil yang
        diperoleh. Di lingkungan kami, kami menyaksikan banyak orang yang menganggur karena perkebunan di sekitar kami
        beralih menjadi buruh tani. Oleh karena itu, kami memikirkan bagaimana meningkatkan harga jual kopi kami agar
        sedikit lebih tinggi, sekaligus membantu membuka lapangan pekerjaan.

        Sebagai tanggapan, kami bersama-sama berusaha untuk mengolah biji kopi tersebut. Meskipun hasilnya tidak sesuai
        dengan harapan, semangat kami tetap utuh. Kami terus mencoba, bahkan saat beberapa orang melihat dengan
        pandangan meragukan atau mencemooh oleh sebagian warga. Namun, kami tetap bertekad agar perusahaan kami terus
        berkembang, sehingga dapat dikenal oleh masyarakat, terutama di desa dan kabupaten.

        Seiring berjalannya waktu, kopi lokal mengikuti perubahan zaman, dan kami memutuskan untuk mengelola bibit kopi
        robusta. Alhamdulillah, produk kami berhasil mencapai luar Pulau Lombok. Kopi asli kami semakin dikenal dan
        mendapatkan apresiasi yang baru. Kami terus berupaya untuk meningkatkan kualitas produk edukasi kami, melangkah
        satu demi satu, hingga saat ini..
      </p>
    </div>
  </section>


  <section id="menu">
    <!-- your existing content -->

    <!-- Add Bootstrap Dropdown -->
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="menuDropdown" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Pilih Kopi
      </button>
      <div class="dropdown-menu" aria-labelledby="menuDropdown">
        <a class="dropdown-item" href="#">Kopi Sangah</a>
        <a class="dropdown-item" href="#">Kopi Lanang</a>
        <a class="dropdown-item" href="#">Kopi Luwak</a>
      </div>
    </div>

    <!-- Move your existing content here -->
    <h2>Menu</h2>
    <div class="menu-item">
      <img src="kopi sangah.jpeg" width="300" height="200" alt="Kopi Sangah">
      <h5>Kopi Sangah</h5>
    </div>
    <div class="menu-item">
      <img src="kopi lanag.jpeg" width="300" height="200" alt="Kopi Lanang">
      <h5>Kopi Lanang</h5>
    </div>
    <div class="menu-item">
      <img src="kopi luwak.webp" width="300" height="200" alt="Kopi Luwak">
      <h5>Kopi Luwak</h5>
    </div>
  </section>


  <nav>
    <div class="container" style="text-align:center;">
      <a href="#">Beranda</a>
      <a href="#tentang-kami">Tentang Kami</a>
      <a href="#menu">Menu</a>

      <!-- Add Font Awesome icons for social links -->
      <div class="social-links">
        <a href="https://wa.me/081237171566" target="_blank"><i class="fab fa-whatsapp"></i> WA</a>
        <a href="https://www.facebook.com/profile.php?id=61551839279255&mibextid=AQCFcj8imgClWYJ5" target="_blank"><i
            class="fab fa-facebook"></i> FB</a>
        <a href="https://www.instagram.com/anakdesa15032003?igshid=MmVlMjlkMTBhMg==" target="_blank"><i
            class="fab fa-instagram"></i> IG</a>
      </div>
    </div>
  </nav>

  <footer>
    <div class="container">
      <p style="text-align:center;">
        Jl rempek Rempek-Darussalam
      </p>
      <p style="text-align:center;">
        &copy; 2023 Kopi Sangah. Hak Cipta Dilindungi.
      </p>
    </div>
  </footer>


  <!-- Bootstrap JS and Popper.js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>