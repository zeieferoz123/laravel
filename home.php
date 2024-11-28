<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Load Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-... (integrity value)" crossorigin="anonymous" />
  <style>
    /* CSS untuk Bagian About Us */
    .about-us-section {
        background-color: #f8f9fa; /* Warna latar belakang */
        padding: 40px 20px; /* Padding */
        border-radius: 10px; /* Sudut bulat */
    }

    .about-us-title {
        color: #333; /* Warna teks */
        font-size: 28px; /* Ukuran font judul */
        font-weight: bold; /* Ketebalan font */
        text-align: center; /* Posisi teks di tengah */
        margin-bottom: 20px; /* Jarak antara judul dan teks */
    }

    .about-us-content {
        color: #555; /* Warna teks konten */
        font-size: 18px; /* Ukuran font konten */
        text-align: center; /* Posisi teks di tengah */
    }

    .about-us-section img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    border: 10px solid gray;
    border-radius: 100%;
    max-width: 200px;
}

  </style>
</head>
<body>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4 ml-5">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM pelanggan"));?>Total Pelanggan <i class="fa-solid fa-users" style="margin-left: 35px; font-size: 30px;"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="pelanggan.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM produk"));?>Total Produk <i class="fas fa-shopping-bag" style="margin-left: 55px; font-size: 30px;"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="produk.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM user"));?>Total User <i class="fa-solid fa-users" style="margin-left: 60px; font-size: 30px;"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM penjualan"));?> Pembelian <i class="fas fa-shopping-cart" style="margin-left: 60px; font-size: 30px;"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="pembelian.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

    <!-- About Us Section -->
    <div class="row mt-4 about-us-section">
        <div class="col-lg-12">
            <h2 class="about-us-title">About Us</h2>
            <img src="smlogo2.png" alt="" class="logo">
            <p class="about-us-content" id="aboutUsContent">
                <strong>Selamat datang di SembakoMart: Solusi Kasir Modern untuk Bisnis Sembako Anda!</strong><br><br>

                Apakah Anda mengoperasikan toko sembako yang sibuk? Apakah Anda mencari cara untuk meningkatkan efisiensi, mengelola inventaris dengan lebih baik, dan memberikan pengalaman pelanggan yang tak tertandingi? Jika ya, maka SembakoMart adalah solusi yang Anda cari!<br><br>

                SembakoMart adalah aplikasi kasir canggih yang dirancang khusus untuk toko sembako, minimarket, warung kelontong, dan bisnis ritel lainnya dalam industri sembako. Dengan fitur-fitur inovatif dan antarmuka yang mudah digunakan, SembakoMart memberikan alat yang Anda butuhkan untuk mengelola bisnis Anda dengan efektif, meningkatkan produktivitas, dan mengoptimalkan pengalaman pelanggan.<br><br>

                <strong>Fitur Unggulan SembakoMart:</strong><br><br>

                <strong>1. Manajemen Inventaris yang Efisien:</strong> Lupakan kekhawatiran tentang kehabisan stok atau mengalami kelebihan persediaan. Dengan SembakoMart, Anda dapat dengan mudah melacak dan mengelola inventaris sembako Anda, memberi tahu Anda kapan saatnya untuk mengisi ulang, dan memastikan bahwa Anda selalu memiliki barang yang pelanggan butuhkan.<br><br>

                <strong>2. Pengelolaan Transaksi yang Cepat dan Mudah:</strong> Tidak perlu lagi menghabiskan waktu berjam-jam untuk menghitung uang tunai atau mencatat transaksi secara manual. SembakoMart menyediakan sistem kasir modern yang memungkinkan Anda untuk melakukan transaksi dengan cepat, akurat, dan tanpa repot.<br><br>

                <strong>3. Pemantauan Penjualan Real-Time:</strong> Dengan SembakoMart, Anda dapat melacak kinerja penjualan toko Anda secara real-time. Pantau penjualan harian, mingguan, atau bulanan, identifikasi tren penjualan, dan buat strategi yang tepat untuk meningkatkan pendapatan.<br><br>

                <strong>4. Pengelolaan Pelanggan yang Personal:</strong> Bangun hubungan yang kuat dengan pelanggan Anda melalui fitur pengelolaan pelanggan SembakoMart. Tawarkan promosi khusus, program loyalitas, atau diskon yang disesuaikan untuk meningkatkan loyalitas pelanggan dan memperluas jangkauan bisnis Anda.<br><br>

                <strong>5. Laporan Analisis yang Mendalam:</strong> Dapatkan wawasan yang berharga tentang kinerja bisnis Anda melalui laporan analisis yang komprehensif. Identifikasi peluang pertumbuhan, evaluasi kinerja produk, dan buat keputusan yang lebih cerdas berdasarkan data yang akurat.<br><br>

                SembakoMart tidak hanya memberikan alat yang Anda butuhkan untuk mengelola bisnis sembako Anda dengan efektif, tetapi juga membantu Anda mengambil langkah berani menuju masa depan yang sukses. Bergabunglah dengan ribuan pemilik bisnis sembako yang telah memilih SembakoMart sebagai mitra mereka dalam meraih kesuksesan!<br><br>

                <strong>Jadilah Bagian dari Revolusi Bisnis Sembako dengan SembakoMart!</strong>
            </p>
        </div>
    </div>
<!-- JavaScript untuk Efek Animasi -->
<script>
    // Animasi untuk memperlihatkan bagian About Us ketika halaman dimuat
    document.addEventListener("DOMContentLoaded", function() {
        var aboutSection = document.querySelector('.about-us-section');
        aboutSection.style.opacity = 0;
        aboutSection.style.transform = 'translateY(20px)';
        setTimeout(function() {
            aboutSection.style.opacity = 1;
            aboutSection.style.transform = 'translateY(0)';
        }, 500);
    });
</script>

</body>
</html>
