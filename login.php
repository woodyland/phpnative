<?php
include 'dbkonek.php';
session_start();
if (isset($_SESSION['nama'])) {
    header('location:tampil.php');
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>hal login</title>
    </head>

    <body>
        <form action="" method="POST">
            <input type="text" placeholder="masukkan email" name="email">
            <input type="password" placeholder="masukkan password" name="password">
            <input type="submit" value="lu'u" name="submit">
            <?php
            if (isset($_POST['submit'])) {
                $ceking = mysqli_query($konek, "SELECT * FROM tb_sesi WHERE email=
                '" . $_POST['email'] . "'AND password = '" . $_POST['password'] . "'
                ");

                $login = mysqli_fetch_array($ceking);
                $ygmasuk = mysqli_num_rows($ceking);
                if ($ygmasuk > 0) {
                    $pelaku = $login["nama"];
                    session_start();
                    $_SESSION["nama"] = $pelaku;
                    header('location:landing.php');
                } else {
                    echo "email atau password salah";
                }
            }
            ?>


        </form>
    </body>

    </html>

<?php
}
?>