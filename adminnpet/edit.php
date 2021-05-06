<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id = $_GET['id'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM tbl_pasien WHERE id='$id'") or die(mysqli_error($koneksi));

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
			$namapemilik= $_POST['namapemilik'];
			$namahewan	= $_POST['namahewan'];
			$jenishewan	= $_POST['jenishewan'];
			$jeniskel	= $_POST['jeniskel'];
			$gejala	= $_POST['gejala'];
			$alamat = $_POST['alamat'];


			$sql = mysqli_query($koneksi, "UPDATE tbl_pasien SET id='$id', namapemilik='$namapemilik', namahewan='$namahewan', jenishewan='$jenishewan', jeniskel='$jeniskel', gejala='$gejala', alamat='$alamat' WHERE id='$id'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=pasien";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<div class="row">
		<form action="index.php?page=edit_psn&id=<?php echo $id; ?>" method="post">
			<div class="form-group">
					<input type="text" name="id" class="form-control" value="<?php echo $data['id']; ?>" readonly required>
				</div>
			</div>
			<div class="form-group">
						<input type="text" class="form-control" name="namapemilik" placeholder="id"  value="<?php echo $data['namapemilik']; ?>" required >
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="namahewan" placeholder="Nama Hewan"  value="<?php echo $data['namahewan']; ?>" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="jenishewan" placeholder="Jenis hewan"  value="<?php echo $data['jenishewan']; ?>" required >
					</div>
					<div class="form-group">
					    <input type="radio" name="jeniskel" value="Jantan" required="required" <?= ($data->jeniskel=="Jantan")?"checked":"" ?>>
					     Jantan
					    <input type="radio" name="jeniskel" value="Betina" required="required" <?= ($data->jeniskel=="Betina")?"checked":"" ?>>
					     Betina
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="gejala" placeholder="Gejala Hewan" value="<?php echo $data['gejala']; ?>" required >
					</div>
					<div class="form-group">
						<textarea name="alamat" cols="30" rows="5" class="form-control" placeholder="Alamat" value="<?php echo $data['alamat']; ?>" required></textarea>
					</div>

			<div class="form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=pasien" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
	</div>
