<?php 

if(isset($_POST['NamaProduk'])){
    $nama = $_POST['NamaProduk'];
    $harga = $_POST['Harga'];
    $stok = $_POST['Stok'];

    $query = mysqli_query($koneksi, "INSERT INTO produk(NamaProduk,Harga,Stok) VALUES('$nama','$harga','$stok')");
    if($query) {
        echo '<script>alert("Tambah Data Berhasil!")</script>';
    }else {
        echo '<script>alert("Tambah Data Gagal!")</script>';
    } 
}

?>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                        <a href="?page=produk" class="btn btn-danger mb-3">Kembali</a>

                        <form method="post">
                            <table class="table table-bordered">
                                <tr>
                                    <td width="200">Nama Produk</td>
                                    <td width="1">:</td>
                                    <td><input class="form-control" type="text" name="NamaProduk"></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td><input class="form-control" type="number" step="0" name="Harga"></td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>:</td>
                                    <td><input class="form-control" type="number" step="0" name="Stok"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </td>
                                </tr>
                            </table>
                        </form>

                    </div>