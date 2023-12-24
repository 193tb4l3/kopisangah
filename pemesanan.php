<?php
include("inc_koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kopi Sangah</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      background-image: url('perkebunan.jpeg');
      background-size: cover;
      background-repeat: no-repeat;
    }

    .order-link {
      background-color: #ff6600;
      color: #fff;
      padding: 8px 16px;
      border-radius: 5px;
      text-decoration: none;

      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      color: #333;
      background: linear-gradient(#271f17, #5e4e3c), url('texture-kayu.jpg') fixed;
      background-blend-mode: color;
      background-size: cover;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    header {
      background-color: #080000;
      color: #fdfcfc;
      padding: 20px 0;
      text-align: center;
    }

    h1 {
      margin: 0;
      font-size: 36px;
    }

    nav {
      background-color: #555;
      padding: 10px 0;
      text-align: center;
    }

    nav a {
      text-decoration: none;
      color: #fff;
      margin-right: 20px;
      font-size: 18px;
    }

    section {
      padding: 40px 0;
    }

    h2 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;
      color: #fdfcfc;
    }

    form {
      max-width: 600px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #fdfcfc;
      font-size: 18px;
    }

    input,
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
    }

    button {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 12px 20px;
      cursor: pointer;
      font-size: 16px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #9eb567;
    }

    @media (max-width: 768px) {
      nav {
        text-align: center;
      }

      nav a {
        display: block;
        margin: 10px 0;
      }
    }
  </style>
</head>

<body>
  <header>
    <h1>Kopi Sangah</h1>
  </header>

  <form action="pemesanan.php" method="post" name="form1">
    <table width="70%" border="0">
      <tr>
        <select id="Jenis_Kopi" name="Jenis_Kopi">
          <option value="Sangah">Kopi Sangah</option>
          <option value="Lanang">Kopi Lanang</option>
          <option value="Luwak">Kopi Luwak</option>
        </select>
      </tr>
      <tr>
        <td>Jumlah_Gram</td>
        <td><input type="text" name="Jumlah_Gram"></td>
      </tr>
      <tr>
        <td>Name</td>
        <td><input type="text" name="Nama"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="Email"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="Submit" value="Kirim"></td>
      </tr>
    </table>
  </form>

  <?php

  if (isset($_POST['Submit'])) {
    $Jenis_Kopi = $_POST['Jenis_Kopi'];
    $Jumlah_Gram = $_POST['Jumlah_Gram'];
    $Nama = $_POST['Nama'];
    $Email = $_POST['Email'];

    $sql = "INSERT INTO pemesanan(Jenis_Kopi, Jumlah_Gram, Nama, Email) VALUE ('$Jenis_Kopi','$Jumlah_Gram','$Nama', '$Email')";
    $query = mysqli_query($db, $sql);
  }
  ?>

  <script>
    function submitOrder() {
      var jenisKopi = document.getElementById('coffeeType').value;
      var jumlah = document.getElementById('jumlah').value;
      var nama = document.getElementById('name').value;
      var email = document.getElementById('email').value;

      var whatsappMessage = `Pesanan Baru!\nJenis Kopi: ${jenisKopi}\nJumlah: ${jumlah} gram\nNama: ${nama}\nEmail: ${email}`;

      window.open(`https://wa.me/6281237171566?text=${encodeURIComponent(whatsappMessage)}`);

      alert('Pesanan berhasil! Terima kasih atas pesanan Anda.');
    }
  </script>
</body>

</html>