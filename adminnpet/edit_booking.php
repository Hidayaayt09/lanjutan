<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['idbooking'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$idbooking = $_GET['idbooking'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM tabelpelayanan WHERE idbooking='$idbooking'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$namapemilik = $_POST['namapemilik'];
			$namahewan = $_POST['namahewan'];
			$jenis = $_POST['jenis'];
			$sakit = $_POST['sakit'];
			$nohp = $_POST['nohp'];
			$tanggal = $_POST['tanggal'];
			$waktu = $_POST['waktu'];
			$keterangan = $_POST['keterangan'];

		
			$sql = mysqli_query($koneksi, "UPDATE tabelpelayanan SET idbooking='$idbooking', namapemilik='$namapemilik', namahewan='$namahewan', jenis='$jenis', sakit='$sakit', nohp='$nohp', tanggal='$tanggal', waktu='$waktu', keterangan='$keterangan' WHERE idbooking='$idbooking'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=booking";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<div class="row">
		<form action="index.php?page=edit_bkg&idbooking=<?php echo $idbooking; ?>" method="post">
			<div class="form-group">
					<input type="text" name="idbooking" class="form-control" value="<?php echo $data['idbooking']; ?>" readonly required>
				</div>
			</div>
			<div class="form-group">
						<input type="text" class="form-control" name="namapemilik" placeholder="id"  value="<?php echo $data['namapemilik']; ?>" required >
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="namahewan" placeholder="Nama Hewan"  value="<?php echo $data['namahewan']; ?>" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="jenis" placeholder="Jenis hewan"  value="<?php echo $data['jenis']; ?>" required >
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="sakit" placeholder="Gejala"  value="<?php echo $data['sakit']; ?>" required >
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" name="nohp" placeholder="No Hp" value="<?php echo $data['nohp']; ?>" required >
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="tanggal" placeholder="tanggal" value="<?php echo $data['tanggal']; ?>" required >
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="waktu" placeholder="waktu" value="<?php echo $data['waktu']; ?>" required >
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="keterangan" placeholder="keterangan" value="<?php echo $data['keterangan']; ?>" required >
					</div>

			<div class="form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=booking" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
	</div>
