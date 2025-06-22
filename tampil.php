<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="create.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">signup</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <table>
        <tr>
            <td> NO </td>
            <td> NAMA </td>
            <td> GAMBAR </td>
            <td> ACTION </td>
        </tr>
        <?php
        include 'dbkonek.php';
        $query = mysqli_query($konek, "SELECT * FROM tb_a");
        while ($baris = mysqli_fetch_array($query)) {
        ?>
            <tr>

                <td><?php echo $baris['id_a'] ?></td>
                <td><?php echo $baris['nama'] ?></td>
                <td><img src="img/<?php echo $baris['gambar'] ?>" height="100" width="100"></td>
                <td><a href="sunting.php?id=<?php echo $baris['id_a'] ?>"> sunting </a> <br>
                    <a href="hapus.php?id=<?php echo $baris['id_a'] ?>" onclick="return confirm('yakin?')"> hapus </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>