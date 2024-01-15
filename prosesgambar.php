<!DOCTYPE html>
<html>

<head>
    <title>Upload File </title>
</head>

<body>
    <h1>Upload File </h1>
    <?php
    include 'koneksi.php';
    if (isset($_POST["save"])) {
        // menangkap data yang di kirim dari form
        $kode= $_POST['kode'];
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $satuan = $_POST['satuan'];
        $harga = $_POST['harga'];
        $hrg_jual_jual = $_POST['hrg_jual'];

        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $photo = $_FILES['photo']['name'];

        $x = explode('.', $photo);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['photo']['size'];

        $file_tmp = $_FILES['photo']['tmp_name'];
        $namafile = 'img_' . $kode_barang . '.' . $ekstensi;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 1044070) {
                move_uploaded_file($file_tmp, 'file/' . $namafile);
                $query = mysqli_query($koneksi, "insert into tb_barang (kode,nama,kategori,satuan,harga,hrg_jual,photo) values ('$kode','$nama','$kategori','$satuan','$harga','$hrg_jual','$namafile')");
                if ($query) {
                    echo "<script>alert('DATA BERHASIL DI SIMPAN');window.location='index.php';</script>";
                } else {
                    echo "<script>alert('GAGAL MENGUPLOAD GAMBAR');window.location='index.php';</script>";
                }
            } else {
                echo "<script>alert('UKURAN FILE TERLALU BESAR');window.location='tambahdata.php';</script>";
            }
        } else {
            echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');window.location='tambahdata.php';</script>";
        }
    }
