<?php
include("koneksi.php");
session_start(); ?>
<!DOCTYPE html>
<html>
<head><title>Data Peserta</title></head>
<center><h2>Data Peserta</h2></center>
<link rel="stylesheet" type="text/css" href="style1.css">	
<body>
	<center><nav><a href="v_form.php"><button>Tambah Baru</button>
	</a></nav></center>
	<br>
	<table border="1" cellpadding="8" align="center" bgcolor="white">
	<thread>
    <tr>
    	<th>Id</th>
     	<th>Nama</th>
    	<th>Email</th>
    	<th>Tanggal lahir</th>
    	<th>Alamat</th>
    	<th>Tindakan</th>
    </tr>
</thread>
<body>
<?php 
   $sql = "SELECT * FROM daftar ";
   $query = mysqli_query($koneksi,$sql);
   while ($daftar =  mysqli_fetch_array($query)){
   	echo "<tr>";
   	echo "<td>".$daftar['id']."</td>";
   	echo "<td>".$daftar['nama']."</td>";
   	echo "<td>".$daftar['email']."</td>";
   	echo "<td>".$daftar['tanggal_lahir']."</td>";
   	echo "<td>".$daftar['alamat']."</td>";
   	echo "<td><a href ='edit.php?id =".$daftar['id']."'>Edit</a>|";
    echo "<a href = 'hapus.php?id =".$daftar['id']."'>Hapus</a>|</td>";  	
  
  }
 ?>
</body>
	</table>
	<p>Total :
		<?php echo mysqli_num_rows($query)?>
		<br>
		<center><nav><a href="/perakerin/home.php"><button>Logout</button>
		</a></nav></center>
</body>
</html>
