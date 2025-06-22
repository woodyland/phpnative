<?php
include 'dbkonek.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pertemuan 8 php</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td> Masukkan Nama </td>
                <td> : </td>
                <td> <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>upload gambar </td>
                <td> : </td>
                <td> <input type="file" name="gambar"> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> <input type="submit" name="kirim" value="kirim"> </td>
                <?php
                if (isset($_POST["kirim"])) {
                    $nama = $_POST["nama"];
                    $nama_file = $_FILES["gambar"]["name"];
                    $sumber = $_FILES["gambar"]["tmp_name"];
                    $folder = "./img/";
                    move_uploaded_file($sumber, $folder . $nama_file);
                    $insert = mysqli_query($konek, "INSERT INTO tb_a VALUES (NULL, '$nama', '$nama_file')");
                    if ($insert) {
                        echo "data berhasil ditambah";
                    } else {
                        echo "ada yg salah dibagian insert cek kode!";
                    }
                }
                ?>
            </tr>
        </table>
    </form>
</body>

</html>