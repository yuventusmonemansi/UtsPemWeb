<?php 
include('koneksi.php');
if(isset($_POST['tombol']))
{
    $temp = $_FILES['gambar']['tmp_name'];
    $name = rand(0,9999).$_FILES['gambar']['name'];
    $size = $_FILES['gambar']['size'];
    $type = $_FILES['gambar']['type'];
    $keterangan = $_POST['keterangan'];
    $folder = "files/";
    if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png')) {
        move_uploaded_file($temp, $folder . $name);
        mysqli_query($koneksi, "insert into tb_gambar (gambar,keterangan,tipe_gambar,ukuran_gambar) values ('$name','$keterangan','$type','$size')");
        header('location:index.php');
    }else{
        echo "<b>Gagal Upload File</b>";
    }
}
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Gambar</td>
                <td><input type="file" name="gambar"/></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><textarea name="keterangan"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tombol"/></td>
            </tr>
        </table>
        </form>
    </body>
</html>