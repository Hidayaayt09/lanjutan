<!DOCTYPE html>
<html>

<body>

	<center>

		<h2>DATA BOOKING PELAYANAN PET CARE</h2>
		

	</center>

	<?php 
	include 'config.php';
	?>

	<table border="1" style="width: 100%">
		<tr>
					<th width="1%">No</th>
                    <th>Nama Pemilik</th>
                    <th>Nama Hewan</th>
                    <th>Jenis Hewan</th>
                    <th>Gejala</th>
                    <th>No Hp</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tabelpelayanan");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['namapemilik']; ?></td>
			<td><?php echo $data['namahewan']; ?></td>
			<td><?php echo $data['jenis']; ?></td>
			<td><?php echo $data['sakit']; ?></td>
			<td><?php echo $data['nohp']; ?></td>
			<td><?php echo $data['tanggal']; ?></td>
			<td><?php echo $data['waktu']; ?></td>
			<td><?php echo $data['keterangan']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>