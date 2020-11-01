<?php 
include('koneksi.php');
$query = mysqli_query($koneksi,"select * from tb_gambar");
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <a href="form_upload.php">Upload Gambar</a>
        <table border="1" cellpading="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Keterangan</th>
                <th>Tipe</th>
                <th>Ukuran</th>
                <th>Action</th>
                <th>edit</th>
            </tr>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="files/<?php echo $row['gambar']; ?>" width="100"/></td>
                    <td><?php echo $row['keterangan']; ?></td>
                    <td><?php echo $row['tipe']; ?></td>
                    <td><?php echo $row['ukuran_gambar']; ?></td>
                    <td><a href="delete_gambar.php?id_gambar=<?php echo $row['id_gambar']; ?>">Delete</a></td>
                    <td><a href="edit_gambar.php?id_gambar=<?php echo $row['id_gambar']; ?>">edit</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>