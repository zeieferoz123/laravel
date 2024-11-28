<?php
$koneksi = mysqli_connect("localhost", "root", "", "kasir_dudi");
$no = 1;
$sql = mysqli_query($koneksi, "SELECT * FROM penjualan LEFT JOIN pelanggan ON pelanggan.PelangganID = penjualan.PelangganID");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembelian SembakoMart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Struk Pembelian SembakoMart</h2>
        
        <table border="1">
            <tr>
                <th>No</th>
                <th>Tanggal Pembelian</th>
                <th>Pelanggan</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total Harga Produk</th>
                <th>Total Harga</th>
            </tr>
            <?php while($data = mysqli_fetch_array($sql)) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['TanggalPenjualan']; ?></td>
                    <td><?php echo $data['NamaPelanggan']; ?></td>
                    <?php
                    $produk_query = mysqli_query($koneksi, "SELECT produk.NamaProduk, detailpenjualan.JumlahProduk, produk.Harga, (detailpenjualan.JumlahProduk * produk.Harga) AS TotalHargaProduk 
                                                            FROM detailpenjualan 
                                                            LEFT JOIN produk ON produk.ProdukID = detailpenjualan.ProdukID 
                                                            WHERE detailpenjualan.PenjualanID = '{$data['PenjualanID']}'");
                    if(mysqli_num_rows($produk_query) > 0) {
                        while($produk = mysqli_fetch_array($produk_query)) {
                            ?>
                            <td><?php echo $produk['NamaProduk']; ?></td>
                            <td><?php echo $produk['JumlahProduk']; ?></td>
                            <td><?php echo $produk['Harga']; ?></td>
                            <td><?php echo $produk['TotalHargaProduk']; ?></td>
                            <td rowspan="<?php echo mysqli_num_rows($produk_query); ?>"><?php echo $data['TotalHarga']; ?></td>
                            <?php
                        }
                    } else {
                        ?>
                        <td colspan="4">-</td>
                        <td><?php echo $data['TotalHarga']; ?></td>
                        <?php
                    }
                    ?>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>

    <script>
        window.print();
    </script>

</body>
</html>
