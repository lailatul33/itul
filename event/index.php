<?php include('koneksi.php');
session_start();?>
<html>
<head><title>Data Peserta</title></head>
<center><h2>Data Peserta<h2></center>
<link rel ="stylesheet" type = "text/css"href="style.css">
<body>

<header><h2><Daftar Siswa></h2></header>
<center><nav><a href="v_form.php"><button>Tambah Baru</button>
</a></nav><center>
<br>
<table border ="1" cellpadding ="8" align ="center" bgcolor = "white">
<thread>
<tr>
<th>Id</th>
<th>Nama</th>
<th>Alamat</th>
<th>Email</th>
<th>Tanggal lahir</th>
<th>Alamat</th>
</tr>
</thread>
<body>
<?php
$sql = "SELECT * FROM daftar";
$query = mysqli_query($koneksi, $sql);
while($daftar = mysqli_fetch_array($query)){
echo "<tr>";
echo "<td>".$daftar['id']."</td>";
echo "<td>".$daftar['nama']."</td>";
echo "<td>".$daftar['email']."</td>";
echo "<td>".$daftar['tanggal_lahir']."</td>";
echo "<td>".$daftar['alamat']."</td>";
echo "<td>";
echo "<a href= 'edit.php?id=".$daftar['id']."'>Edit</a> | ";
echo "<a href= 'hapus.php?id=".$daftar['id']."'>Hapus</a> | ";

}
?>
</body>
</table>
<p>Total:
<?php echo mysqli_num_rows($query) ?>
<br>
<center><nav><a href="home.php"><button>Logout</button>
</a></nav><center>
</p>
</body>
</html>
