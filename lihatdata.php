<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h3>DATA KELAS</h3></center>
	<center><table border="2">
		<th>Nomor</th>
		<th>Kelas</th>
		<th>Jurusan</th>
		<th>Wali Kelas</th>
		<th colspan="3">Opsi</th>
	<?php
		include('koneksi.php');
		$d = mysqli_query($koneksi,"SELECT kelas.id,kelas.kelas,kelas.wali_kelas,jurusan.jurusan as nama_jurusan FROM kelas join jurusan on jurusan.id=kelas.id_jurusan ");
		
		$no = 1;

		foreach ($d as $data) {
				
			echo "<tr>
			<td>$no</td>
			<td>".$data['kelas']."</td>
			<td>".$data['nama_jurusan']."</td>
			<td>".$data['wali_kelas']."</td>
			<td><a href='show.php?id=$data[id]'>Show</a></td>
			<td><a href='edit.php?id=$data[id]'>Edit</a></td>
			<td><a href='delete.php?id=$data[id]'>Delete</a></td>
			</tr>";
			$no++;
			}	
		  ?>
	</table>
	</center>
	<br>
	<center><a href="tambah.php"> &plus; Tambah Data Kelas </a></center>
</body>
</html>