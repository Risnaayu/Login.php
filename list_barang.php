<!DOCTYPE html>
<html>

<head>
    <title>DATA BARANG</title>
</head>

<body>
    <h2>DATA BARANG</h2>
    <br />
    <a href="tambahdata.php"> + TAMBAH BARANG</a>
    <br />
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th>Harga Jual</th>
            <th>Photo</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from tb_barang");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['kategori']; ?></td>
                <td><?php echo $d['satuan']; ?></td>
                <td><?php echo $d['harga']; ?></td>
                <td><?php echo $d['hrg_jual']; ?></td>
                <td><img src="<?php echo "file/" . $d['photo']; ?>" width="50" height="70">
                </td>
                <td>
                    <a href="editbrg.php?id=<?php echo $d['kode']; ?>">EDIT</a> |
                    <a href="proseshapus.php?id=<?php echo $d['kode'];
                                            ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>