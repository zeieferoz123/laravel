<?php 

if(isset($_POST['NamaPelanggan'])){
    $nama = $_POST['NamaPelanggan'];
    $alamat = $_POST['Alamat'];
    $no_telepon = $_POST['NomorTelepon'];

    $query = mysqli_query($koneksi, "INSERT INTO pelanggan(NamaPelanggan,Alamat,NomorTelepon) VALUES('$nama','$alamat','$no_telepon')");
    if($query) {
        echo '<script>alert("Tambah Data Berhasil!")</script>';
    }else {
        echo '<script>alert("Tambah Data Gagal!")</script>';
    } 
}

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
                                    <td><input class="form-control" type="text" name="NamaPelanggan"></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>
                                        <textarea name="Alamat" rows="5" class="form-control"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nomor Telepon</td>
                                    <td>:</td>
                                    <td><input class="form-control" type="number" step="0" name="NomorTelepon"></td>
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