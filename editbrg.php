<!DOCTYPE html>
<html>
<head>
<title>DATA BARANG</title>
</head>
<body>
<h2>DATA BARANG</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA BARANG</h3>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from tb_barang where kode='$id'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="prosesupdate.php"
enctype="multipart/form-data">
<table>
<tr>
<td>Kode</td>
<td>
<input type="text" name="kode" value="<?php echo
$d['kode']; ?>" readonly>
</td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" value="<?php echo
$d['nama']; ?>"></td>
</tr>
<tr>
<td>Kategori</td>
<td>
<input type="radio" name="kategori" value="B" <?php
if($d['kategori']=='B') echo 'checked'?>>Buku
<input type="radio" name="kategori" value="P" <?php
if($d['kategori']=='P') echo 'checked'?>>Pulpen
<input type="radio" name="kategori" value="T" <?php
if($d['kategori']=='T') echo 'checked'?>>Tas
</td>
</tr>
<tr>
<td>Satuan</td>
<td>
<Select name=satuan>
<option value="Pcs" <?php if($d['satuan']=="Pcs") echo
'selected="selected"'; ?> >Pcs</option>
<option value="Rim" <?php if($d['satuan']=="Rim") echo
'selected="selected"'; ?> >Rim</option>
<option value="Pack" <?php if($d['satuan']=="Pack") echo
'selected="selected"'; ?> >Pack</option>
</select>
</td>
</tr>
<tr>
<td>Harga Modal</td>
<td><input type="text" name="harga" value="<?php echo
$d['harga']; ?>"></td>
</tr>
<tr>
<td>Harga Jual</td>
<td><input type="text" name="hrg_jual" value="<?php echo
$d['hrg_jual']; ?>"></td>
</tr>
<tr>
<td>Photo</td>
<td><input type="file" name="file"> <img src="file/<?php echo
$d['photo']; ?>" style="width: 100px;float: left;margin-bottom: 5px;">
<br/><i style="float: left;font-size: 11px;color:
red">Abaikan jika tidak merubah photo</i>
</td>
</tr>
<tr>
<td></td>
<td>
<br/><br/>
<input name="BtnSimpan" type="submit" value="SIMPAN">
<input name="BtnBatal" type="reset" value="BATAL" />
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>