<?php
if(isset($_GET['id_gambar']))
{
    include('koneksi.php');
    $id_gambar = $_GET['id_gambar'];
    $query = mysqli_query($koneksi,"select * from tb_gambar where id_gambar='$id_gambar'");
    $data_gambar = $query->fetch_array();
 
    $query_hapus = mysqli_query($koneksi,"delete from tb_gambar where id_gambar='$id_gambar'");
    unlink('files/'.$data_gambar['gambar']);
    header('location:index.php');
}
else
{
    header('location:index.php');
}
?>