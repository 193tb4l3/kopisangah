<?php
include("inc_koneksi.php");

try {
    // Ambil data pemesanan dari database
    $query = "SELECT * FROM pemesanan";
    $stmt = $koneksi->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan</title>
    <style>
  /* Gaya untuk tabel */
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    border-radius: 8px;
  }

  th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #333;
    color: #fff;
  }

  /* Gaya untuk data pemesanan */
  h2 {
    text-align: center;
    font-size: 28px;
    margin-top: 40px;
    color: #333;
  }

  /* Hover efek pada baris tabel */
  tr:hover {
    background-color: #f5f5f5;
    transition: background-color 0.3s ease;
  }
</style>


</head>

<body>
    <h2>Data Pemesanan</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Jenis Kopi</th>
            <th>Jumlah (gram)</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <?php foreach ($result as $row): ?>
            <tr>
                <td>
                    <?= $row['ID']; ?>
                </td>
                <td>
                    <?= $row['Jenis_Kopi']; ?>
                </td>
                <td>
                    <?= $row['Jumlah_Gram']; ?>
                </td>
                <td>
                    <?= $row['Nama']; ?>
                </td>
                <td>
                    <?= $row['Email']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>