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
    $id_mahasiswa = $_GET['id'];
    $query = "DELETE from mahasiswa where id_mahasiswa='$id_mahasiswa'";
    mysqli_query($koneksi, $query);
    header("locatin:index.php");
    ?>
</body>
</html>