<?php 
include "koneksi.php";
if(isset($_POST['username'])){

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

    if(mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_array($cek);
        $_SESSION['user'] = $data;
        echo '<script>alert("Login berhasil!"); location.href="index.php"</script>';
    } else {
        echo '<script>alert("Login gagal!");</script>'; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi Kasir Sembako</title>
    <link href="css/styles.css" rel="stylesheet"/>
    <link rel="icon" type="image/png" sizes="96x96" href="smlogo2.png">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>

.wave-group {
  position: relative;
}

.wave-group .input {
  font-size: 20px;
  padding: 10px 10px 10px 5px;
  display: block;
  width: 200px;
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
}

.wave-group .input:focus {
  outline: none;
}

.wave-group .label {
  color: #999;
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  pointer-events: none;
  left: 5px;
  top: 10px;
  display: flex;
}

.wave-group .label-char {
  transition: 0.2s ease all;
  transition-delay: calc(var(--index) * .05s);
}

.wave-group .input:focus ~ label .label-char,
.wave-group .input:valid ~ label .label-char {
  transform: translateY(-20px);
  font-size: 14px;
  color: blue;
}

.wave-group .bar {
  position: relative;
  display: flex;
  width: 500px;
}

.wave-group .bar:before,.wave-group .bar:after {
  content: '';
  height: 2px;
  margin-right: 85px;
  width: 0;
  bottom: 0;
  position: absolute;
  background: blue;
  transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -webkit-transition: 0.2s ease all;
}

.wave-group .bar:before {
  left: 0;
}

.wave-group .bar:after {
  right: 0;
}

.wave-group .input:focus ~ .bar:before,
.wave-group .input:focus ~ .bar:after {
    width: 50%;
    transition: width 0.2s ease;
}
    </style>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login!</h3>
                                    <h3 class="text-center font-weight-light my-4"><strong>SembakoMart</strong></h3>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="wave-group mb-5">
                                            <input required="" id="inputEmail" type="text" name="username" class="input">
                                            <span class="bar"></span>
                                            <label class="label">
                                                <span class="label-char" style="--index: 0">U</span>
                                                <span class="label-char" style="--index: 1">s</span>
                                                <span class="label-char" style="--index: 2">e</span>
                                                <span class="label-char" style="--index: 3">r</span>
                                                <span class="label-char" style="--index: 4">n</span>
                                                <span class="label-char" style="--index: 5">a</span>
                                                <span class="label-char" style="--index: 6">m</span>
                                                <span class="label-char" style="--index: 7">e</span>
                                            </label>
                                        </div>
                                        <div class="wave-group">
                                            <input required="" id="inputPassword" type="password" name="password" class="input" />
                                            <span class="bar"></span>
                                            <label class="label">
                                                <span class="label-char" style="--index: 0">P</span>
                                                <span class="label-char" style="--index: 1">a</span>
                                                <span class="label-char" style="--index: 2">s</span>
                                                <span class="label-char" style="--index: 3">s</span>
                                                <span class="label-char" style="--index: 4">w</span>
                                                <span class="label-char" style="--index: 5">o</span>
                                                <span class="label-char" style="--index: 6">r</span>
                                                <span class="label-char" style="--index: 7">d</span>
                                            </label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary w-100">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">Belum Punya Akun? Registrasi Sekarang!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Aplikasi Kasir SembakoMart Reylucha 2024</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>

