<?php
include ("koneksi.php");
if (isset($_GET['id'])){
	$title ="Edit";
	$url ='proses_edit';
	$id = $_GET['id'];
	//buat query untuk ambil data dari database
	$sql ="SELECT * FROM daftar WHERE id = $id";
	$query = mysqli_query ($koneksi,$sql);
	$daftar = mysqli_fetch_array ($query);
	//jika data yang diedit tidak ditemukan
	if (mysqli_num_rows($query) < 1){
	die("data tidak ditemukan ...");}
	//url jika edit data 
	
	}else{
		$title ="Add";
		//url jika tambah data
		$url='proses_pendaftaran.php';
	}
	?>
	<html>
	<head><title> Formulir daftar</title></head>
	<body>
	<header><h3> Formulir Daftar </h3></header>
	<form action = "proses_pendaftaran.php" method = "POST">
	<fieldset>
	<legend><h2>Form Daftar </h2></legend>
	<div>
	<label for ='id'>Id: </label><br>
	<input type ="text" name ="id" value =" <?php if (isset($_GET['id']))
	{echo $daftar['id'];} ?> "/>
	</div>
	<label for ='nama'>Nama: </label><br>
	<input type = "text" name ="nama" value =" <?php if (isset($_GET['id']))
	{echo $daftar['nama'];} ?> "/>
</div>
<div>
<label for ='email'>Email: </label><br>
<textarea name ="email" row = "5"> <?php if (isset($_GET['id']))
{echo $daftar['email'];} ?>	</textarea>
</div>
<div>
<label for ='tanggal_lahir'>Tanggal lahir: </label><br>
<input name = "tanggal_lahir" row="5" type ="Date"
	<?php if (isset($_GET['id'])){echo$daftar['tanggal_lahir'];}?> />"
</div>
<div>
<label for = "alamat">Alamat: </label><br>
<input type = "text" name ="alamat" value =" <?php if (isset($_GET['id']))
	{echo $daftar['alamat'];} ?> "/>
</div>
<hr>
<div>
<input type ="submit" value ="Simpan" name = "simpan"/>
</div>
</fieldset>
</form></body></html>



