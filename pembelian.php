<div class="container-fluid px-4">
    <h1 class="mt-4">Pembelian</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pembelian</li>
    </ol>
    <a href="?page=pembelian_tambah" class="btn btn-success mb-3">Tambah Pembelian</a>

    <!-- Tambahkan tombol "Cetak Struk" -->
    <a href="?page=pembelian_cetak" class="btn btn-primary mb-3">Cetak Struk</a>

    <table class="table table-bordered">
        <tr>
            <th>Tanggal Pembelian</th>
            <th>Pelanggan</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>

        <?php 
            // Mulai PHP
            $query = mysqli_query($koneksi, "SELECT * FROM penjualan LEFT JOIN pelanggan ON pelanggan.PelangganID = penjualan.PelangganID");
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data['TanggalPenjualan'];?></td>
            <td><?php echo $data['NamaPelanggan'];?></td>
            <td><?php echo $data['TotalHarga'];?></td>
            <td>
                <a href="?page=pembelian_detail&&id=<?php echo $data['PenjualanID'];?>" class="btn btn-primary">Detail</a>
                <a href="?page=pembelian_hapus&&id=<?php echo $data['PenjualanID'];?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php
            }
            // Akhir PHP
        ?>
    </table>
</div>
