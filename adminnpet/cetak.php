<!DOCTYPE html>
<html>

<body>

	<center>

		<h2>DATA PASIEN PET CARE</h2>
		

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
			<th>Jenis Kelamin</th>
			<th>Gejala</th>
			<th>Alamat</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tbl_pasien");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['namapemilik']; ?></td>
			<td><?php echo $data['namahewan']; ?></td>
			<td><?php echo $data['jenishewan']; ?></td>
			<td><?php echo $data['jeniskel']; ?></td>
			<td><?php echo $data['gejala']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
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