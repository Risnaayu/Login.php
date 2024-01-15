<?php
// koneksi database
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // menangkap data yang di kirim dari form
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $satuan = $_POST['satuan'];
    $harga = $_POST['harga'];
    $hrg_jual = $_POST['hrg_jual'];
    $namaFileBaru = "";


    if ($_FILES['photo']['name']) {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $photo = $_FILES['photo']['name'];
        $x = explode('.', $photo);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['photo']['size'];
        $file_tmp = $_FILES['photo']['tmp_name'];
        $namaFileBaru = 'img_' . $kode . '.'  . $ekstensi;

        if (!in_array($ekstensi, $ekstensi_diperbolehkan)) {
            echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');window location='editbrg.php?id=$kode';</script>";
            return;
        }

        if ($ukuran > 1044070) {
            echo "<script>alert('UKURAN FILE TERLALU BESAR');window.location='tambahdata.php';</script>";
            return;
        }

        if (!move_uploaded_file($file_tmp, 'file/' . $namaFileBaru)) {
            echo "<script>alert('GAGAL MENGUPLOAD GAMBAR');window.location='index.php';</script>";
            return;
        }
    }


    $query = "UPDATE tb_barang SET nama='$nama', kategori='$kategori', satuan='$satuan', hrg_modal='$hrg_modal',harga='$harga'";

    if ($namaFileBaru != "") $query .= ",gambar='$namaFileBaru'";
    $query .= "WHERE kode='$kode'";

    $update = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    if ($update) {
        echo "<script>alert('DATA BERHASIL DI UPDATE');window.location='index.php';</script>";
    } else {
        echo "<script>alert('DATA GAGAL DI UPDATE');window.location='index.php';</script>";
    }
}
