<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'e-commerce_hombrepoerte');

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];

    $epassword = password_hash($password, PASSWORD_DEFAULT);

    $insert = mysqli_query($koneksi, "INSERT INTO akun (username,password,nama) values ('$username', '$epassword', '$nama')");

    if ($insert) {
        header('location:login.php');
    } else {
        echo '
        <script> 
            alert("Registrasi Gagal");
            window.location.href="register.php";
        </script>
        ';
    }

}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekdb = mysqli_query($koneksi, "SELECT * FROM akun where username='$username'");
    $hitung = mysqli_num_rows($cekdb);
    $pw = mysqli_fetch_array($cekdb);
    $nowpassword = $pw['password'];
    $nama = mysqli_fetch_array($cekdb);
    $ceknama = $nama['nama'];

    if ($hitung > 0) {
        header('location:sellerproduct.html');
    } else {
        echo '
        <script> 
            alert("Registrasi Gagal");
            window.location.href="login.php";
        </script>
        ';
    }

}
?>