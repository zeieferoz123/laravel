<?php 
$id = $_GET['id'];
if(isset($_POST['NamaProduk'])){
    $nama = $_POST['NamaProduk'];
    $harga = $_POST['Harga'];
    $stok = $_POST['Stok'];

    $query = mysqli_query($koneksi, "UPDATE produk SET NamaProduk='$nama', Harga='$harga', Stok='$stok' WHERE ProdukID=$id");
    if($query) {
        echo '<script>alert("Ubah Data Berhasil!")</script>';
    }else {
        echo '<script>alert("Ubah Data Gagal!")</script>';
    } 
}

$query = mysqli_query($koneksi, "SELECT*FROM produk WHERE ProdukID=$id");
$data = mysqli_fetch_array($query);

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
                                    <td><input class="form-control" value="<?php echo $data['NamaProduk']; ?>" type="text" name="NamaProduk"></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td><input class="form-control" type="number" step="0" value="<?php echo $data['Harga']; ?>" name="Harga"></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Stok</td>
                                    <td>:</td>
                                    <td><input class="form-control" type="number" step="0" value="<?php echo $data['Stok']; ?>" name="Stok"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-success">Ubah</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </td>
                                </tr>
                            </table>
                        </form>

                    </div>