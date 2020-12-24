<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>	
	<title>Tambah data mahasiswa</title>
	<style>
		.container{
			background-color: #F0F8FF;
            margin-left: 50px;
            margin-top:50px;
            width: 600px;
		}
        #btn{
            background-color: #00CED1;
            margin-top: 15px;
        }

	</style>
</head>
<body>

	<div class="container">
	<h1>Tambah Data Mahasiswa</h1>
<form action="" method="POST">
    <table>
        <tbody>
            <tr>
                <td>NRP</td>
                <td>:</td>
                <td><input type="text" name="nrp" id="nrp" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" id="email"></td>

            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="jurusan"></td>

            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="text" name="gambar" id="gambar"></td>

            </tr>
            <tr>
                <td>
                    <button id="btn" type="submit" name="submit">Tambah Data!</button>
                </td>
            </tr>


        </tbody>
    </table>
</form>
</div>

</body>
</html>