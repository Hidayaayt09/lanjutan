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
			$select = mysqli_query($koneksi, "SELECT * FROM tabelkomentar WHERE id='$id'") or die(mysqli_error($koneksi));

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
			
			$aktif = $_POST['aktif'];

		
			$sql = mysqli_query($koneksi, "UPDATE tabelkomentar SET id='$id', aktif='$aktif' WHERE id='$id'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=testi";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<div class="row">
		<form action="index.php?page=edit_testi&id=<?php echo $id; ?>" method="post">
			<div class="form-group">
					<input type="text" name="id" class="form-control" value="<?php echo $data['id']; ?>" readonly required>
				</div>
			</div>
			<div class="form-group">
					    <input type="radio" name="aktif" value="Y" required="required" <?= ($data->aktif=="Y")?"checked":"" ?>>
					     Y
					    <input type="radio" name="aktif" value="N" required="required" <?= ($data->aktif=="N")?"checked":"" ?>>
					     N
					</div>

			<div class="form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=testi" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
	</div>
