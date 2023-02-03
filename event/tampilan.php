<?php
 include ("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Peserta</title>
</head>
<body>
	<h2>peserta yang sudah terdaftar</h2>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Tanggal lahir</th>
			<th>Alamat</th>
		</tr>
		
		<?php 
		$sql = "SELECT * FROM daftar";
		$query = mysqli_query($db,$sql);

while ($daftar = mysqli_fetch_array($query)) {
	echo "<tr>";

	echo "<td>".$daftar['id']."</td>";
	echo "<td>".$daftar['nama']."</td>";
	echo "<td>".$daftar['email']."</td>";
	echo "<td>".$daftar['tanggal_lahir']."</td>";
	echo "<td>".$daftar['alamat']."</td>";

	echo "<td>";
	echo "<a href = 'edit.php?id=".$daftar['id']."'>Edit</a> | ";
	echo "<a href = 'hapus.php?id=".$daftar['id']."'>Hapus</a>  ";
	echo "</td>";

	echo "</tr>";	
}
?>
</table>
	<p>Total: <?php echo mysqli_num_rows($query)?>                     
	<a href="index.php"> Home </a>
		</p>
</body>
</html>