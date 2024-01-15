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
<h3>TAMBAH DATA BARANG</h3>
<form method="post" action="input.php" enctype="multipart/form-data"> 
<table width="400" >
<tr>
<td>Kode</td>
<td><input type="text" name="kode"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Kategori</td>
<td>
<select name="kategori">
<option value="-">-</option>
<option value="B">Buku</option>
<option value="P">Pulpen</option>
<option value="T">Tas</option>
</select>
</td>
</tr>
<tr>
<td>Satuan</td>
<td>
<Select name=satuan>
<option value=Pcs Informasi>Pcs</option>
<option value=Rim Informatika>Rim</option>
<option value=Pack Informatika>Pack</option>
</select>
</td>
</tr>
<tr>
<td>Harga Modal</td>
<td><input type="text" name="harga"></td>
</tr>
<tr>
<td>Harga Jual</td>
<td><input type="text" name="hrg_jual"></td>
</tr>
<tr>
<td>Photo</td>
<td><input type="file" name="photo" id="photo">
</td>
</tr>
<tr>
<td>Action</td>
<td><input type="text" name="harga"></td>
<td><input type="text" name="hrg_jual"></td>
</tr>
<input name="BtnSimpan" type="submit" value="SIMPAN">
<input name="BtnBatal" type="reset" value="BATAL" />
</td>
</tr>
</table>
</form>
</body>
</html>