<?php
if(isset($_GET['id'])){
include('koneksi.php');
$vkode=$_GET['id'];
$del=mysqli_query($koneksi,"DELETE FROM tb_barang WHERE kode='$vkode'");
if($del){
echo'Data barang berhasil dihapus! ';
echo'<a href="index.php">Kembali</a>';
}else{
echo'Gagal menghapus data! ';
echo'<a href="index.php">Kembali</a>';
}
}
?>