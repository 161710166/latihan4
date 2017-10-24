<!DOCTYPE html>
<html>
<head>
	<title>Dosen</title>
</head>
<body>
	<?php
		include('/laragon/www/rizkyfa/kelas/koneksi.php');
		$id 	= $_GET['id'];
		$d = mysqli_query($koneksi,"SELECT kelas.id,kelas.kelas,kelas.wali_kelas,jurusan.jurusan as nama_jurusan FROM kelas join jurusan on jurusan.id=kelas.id_jurusan WHERE kelas.id='$id'");
		$data	= mysqli_fetch_array($d);
	?>

	<center><h3>Show Data kelas</h3></center>
	<fieldset style="width: 50%; margin: auto;">
		<legend>Form Show Biodata kelas</legend>
		<input type="hidden" name="id" value="<?php echo $data['id'];?>">
			<p>
				Kelas<br />
				<input type="text" name="kelas" class="form-control" value="<?php echo $data['kelas'];?>" readonly>
			</p>
			<p>
				Wali Kelas<br />
				<input type="text" name="wali_kelas" class="form-control" value="<?php echo $data['wali_kelas'];?>" readonly>
			</p>
			<p>
				jurusan<br />
				<input type="text" name="jurusan" class="form-control" value="<?php echo $data['nama_jurusan'];?>" readonly>
			</p>
	</fieldset>
	<br /><center><a href="lihatdata.php" class="btn btn-primary">&Lt; Lihat Data</center>
</body>
</html>