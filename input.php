<?php
//koneksi ke mysql
$conn = mysqli_connect ("localhost","root","","db_barang");
if (mysqli_connect_errno()){
echo "Koneksi Gagal".mysqli_connect_error();
}
else{
    $vkode = $_POST['kode'];
    $vnama= $_POST['nama'];
    $vkategori= $_POST['kategori'];
    $vsatuan=$_POST['satuan'];
    $vharga=$_POST['harga'];
    $vhargajual=$_POST['hrg_jual'];
    $vphoto=$_POST['photo'];
    $query= mysqli_query($conn,"insert into tb_barang (kode,nama,kategori,satuan,harga,hrg_jual,photo) values ('$vkode','$vnama','$vkategori','$vsatuan','$vharga','$vhargajual','$vphoto')");
    if ($query)
    echo "Input Data Sukses<br>";
    else
    echo "Input Data Gagal<br>";
    }
    ?>