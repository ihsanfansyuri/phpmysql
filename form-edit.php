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
    $id     = $_GET['id'];
    $mahasiswa  = mysqli_query($koneksi, "SELECT * from mahasiswa where id_mahasiswa='$id'");
    $row    = mysqli_fetch_array($mahasiswa);

    $jurusan    = array('TEKNIK INFORMATIKA','TEKNIK ELEKTRO','REKAMEDIS');

    function active_radio_button($value,$input){
        $result = $value==$input?'checked':'';
        return $result;
    }
    ?>

    <form action="post" action="uodate.php">
    <input type="hidden" value="<?php echo $row['id_mahasiswa'];?>" name="id_mahasiswa">
    <table>
        <tr><td>NIM</td><td><input type="text" value="<?php echo $row['nim'];?>" name="nim"></td></tr>
        <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nim'];?>" name="nama"></td></tr>
        <tr><td>JENIS KELAMIN</td><td>
            <input type="radio" name="jenis_kelamin" value="L">
                <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki laki
            <input type="radio" name="jenis_kelamin" value="P">
                <?php echo active_radio_button("P", $row['jenis_kelamin'])?>>Perempuan
            </td></tr>
        <tr><td>JURUSAN <?php echo $row['jurusan'];?></td><td>
            <select name="jurusan">
            <?php
            foreach ($jurusan as $j) {
                echo "<option value='$j' ";
                echo $row['jurusan']==$j?'selected="selected"':'';
                echo ">$j</option>";
            }
            ?>
            </select>
        </td></tr>
    <tr><td>ALAMAT</td><td><input value="<?php echo $row['alamat'];?>" type="text" name="alamat"></td></tr>
    <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button> <a href="index.php">Kembali</a></td></tr>
    </table>
    </form>
</body>
</html>