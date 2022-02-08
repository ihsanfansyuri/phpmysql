<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            include 'koneksi.php';
            $nim            = $_POST['nim'];
            $nama           = $_POST['nama'];
            $jurusan        = $_POST['jurusan'];
            $jenis_kelamin  = $_POST['jenis_kelamin'];
            $alamat         = $_POST['alamat'];

            $query ="INSERT INTO mahasiswa VALUES('', '$nim', '$nama', '$jurusan', '$jenis_kelamin', '$alamat')";
            mysqli_query($koneksi, $query);

            header("location:index.php");
        ?>
    </body>
</html>