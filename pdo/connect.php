<?php
try {
   // buat koneksi dengan database
   $dbh = new PDO('mysql:host=localhost;dbname=phpdasar', "admin", "12345");
  
   // set error mode
   $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  
   // jalankan query
   $result = $dbh->query('SELECT * FROM mahasiswa');
  
   // tampilkan data
  //  while($row = $result->fetch()) {
  //    echo "$row[0] $row[1] $row[2] $row[3] $row[4]";    
  //    echo "<br />";
  //  }

  //  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
  //   echo $row['nama']." ".$row['nrp']." ".$row['email']." ";  
  //   echo "<br />";
  //   echo "<hr />";
  // }
    $mahasiswa = $result->fetchAll(PDO::FETCH_ASSOC);
   // hapus koneksi
   $dbh = null;
}
catch (PDOException $e) {
   // tampilkan pesan kesalahan jika koneksi gagal
   print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
   die();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>


<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $mahasiswa as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>		
		<td><?= $row["nrp"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>

</body>
</html>