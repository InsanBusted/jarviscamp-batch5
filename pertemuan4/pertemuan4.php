<?php
// Array products awal
$products = [
    ["barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
    ["barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
    ["barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
    ["barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
    ["barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30]
];


// Memeriksa apakah form telah disubmit
if (isset($_POST['barang'])) {
    // Mengambil data dari form
    $barang = $_POST["barang"];
    $harga = $_POST["harga"];
    $deskripsi = $_POST["deskripsi"];
    $stok = $_POST["stok"];

    // Menambahkan barang baru ke array products menggunakan array_push
    array_push($products, [
        "barang" => $barang,
        "Harga" => $harga,
        "Deskripsi" => $deskripsi,
        "Stok" => $stok
    ]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
</head>

<body>

    <h2>Form Tambah Barang</h2>
    <form method="post" action="">
        <label for="barang">Nama Barang:</label><br>
        <input type="text" id="barang" name="barang" required><br><br>

        <label for="harga">Harga:</label><br>
        <input type="number" id="harga" name="harga" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <input type="text" id="deskripsi" name="deskripsi" required><br><br>

        <label for="stok">Stok:</label><br>
        <input type="number" id="stok" name="stok" required><br><br>

        <input type="submit" value="Tambah Barang">
    </form>

    <h2>Daftar Barang Sebelum Penambahan</h2>
    <table border="1">
        <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Stok</th>
        </tr>
        <?php
        // Menampilkan daftar barang sebelum penambahan
        foreach ($products as $product) {
            echo "<tr>";
            echo "<td>" . $product["barang"] . "</td>";
            echo "<td>" . $product["Harga"], 0, ',', '.' . "</td>";
            echo "<td>" . $product["Deskripsi"] . "</td>";
            echo "<td>" . $product["Stok"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>



</body>

</html>