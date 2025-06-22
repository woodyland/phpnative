<?php
include 'dbkonek.php';
session_start();

if (isset($_SESSION['nama'])) {
    header('location:landing.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman daftar</title>
</head>

<body>
    <h1> Syarat daftar</h1>
    <ul>
        <li> panjang password 8 karakter </li>
        <li> ada 1 angka </li>
        <li> dan 1 huruf besar</li>
    </ul>

    <form action="" method="POST">
        <input type="text" name="nama" placeholder="masukkan nama" required>
        <input type="text" name="email" placeholder="masukkan email" required>
        <input type="password" name="password" placeholder="masukkan password" required>
        <input type="password" name="konfirmasi" placeholder="konfirmasi password" required>
        <input type="submit" name="daftar" value="daftar sekarang!">

        <?php
        if (isset($_POST['daftar'])) {
            $nama = trim($_POST['nama']);
            $email = trim($_POST['email']);
            $password = ($_POST['password']);
            $konfirmasi = ($_POST['konfirmasi']);

            $errors = array();

            if (empty($nama) || empty($email) || empty($password) || empty($konfirmasi)) {
                $errors[] = "semua textfield mesti diisi";
            }

            if ($password !== $konfirmasi) {
                $errors[] = "password tidak sama, silahkan smaakan";
            }

            if (strlen($password) < 8) {
                $errors[] = "password kurang dari 8 karakter";
            }

            if (!preg_match('/^(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) {
                $errors[] = "passwords minimal mengandung 1 huuf besar dan 1 angka";
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "format emila salah";
            }

            if (empty($errors)) {
                $cekemail = mysqli_query($konek, "SELECT email FROM tb_sesi WHERE email = '$email' ");
                if (mysqli_num_rows($cekemail)) {
                    $errors[] = "email sudah terdaftar";
                }
            }

            if (empty($errors)) {
                $masukkanuser = mysqli_query($konek, "INSERT INTO tb_sesi (nama, email, password) VALUES ('$nama', '$email', '$password')");

                if ($masukkanuser) {
                    echo "registrasi berhasil, silahkan ke halaman login 🎉";
                } else {
                    echo "ada yang salah cek kode";
                }
            }
        }
        ?>
    </form>
</body>

</html>