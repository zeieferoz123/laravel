<?php 
$id = $_GET['id'];
if(isset($_POST['NamaPelanggan'])){
    $nama = $_POST['NamaPelanggan'];
    $alamat = $_POST['Alamat'];
    $no_telepon = $_POST['NomorTelepon'];

    $query = mysqli_query($koneksi, "UPDATE pelanggan SET NamaPelanggan='$nama', Alamat='$alamat', NomorTelepon='$no_telepon' WHERE PelangganID=$id");
    if($query) {
        echo '<script>alert("Ubah Data Berhasil!")</script>';
    }else {
        echo '<script>alert("Ubah Data Gagal!")</script>';
    } 
}

$query = mysqli_query($koneksi, "SELECT*FROM pelanggan WHERE PelangganID=$id");
$data = mysqli_fetch_array($query);

?>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Pelanggan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pelanggan</li>
                        </ol>
                        <a href="?page=pelanggan" class="btn btn-danger mb-3">Kembali</a>

                        <form method="post">
                            <table class="table table-bordered">
                                <tr>
                                    <td width="200">Nama Pelanggan</td>
                                    <td width="1">:</td>
                                    <td><input class="form-control" value="<?php echo $data['NamaPelanggan']; ?>" type="text" name="NamaPelanggan"></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>
                                        <textarea name="Alamat" rows="5" class="form-control"><?php echo $data['Alamat']; ?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nomor Telepon</td>
                                    <td>:</td>
                                    <td><input class="form-control" type="number" step="0" value="<?php echo $data['NomorTelepon']; ?>" name="NomorTelepon"></td>
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