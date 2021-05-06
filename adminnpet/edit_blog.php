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
			$select = mysqli_query($koneksi, "SELECT * FROM blog WHERE id='$id'") or die(mysqli_error($koneksi));

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
			$judul = $_POST['judul'];
			$isi = $_POST['isi'];
			$tgl = $_POST['tgl'];
			$gambar = $_FILES ['gambar']['name'];
			$source = $_FILES ['Gambar']['tmp_name'];
			$folder = 'img/images';

		
			$sql = mysqli_query($koneksi, "UPDATE blog SET id='$id', judul='$judul', isi='$isi', tgl='$tgl', gambar='$gambar' WHERE id='$id'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=blog";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<div class="row">
		<form action="index.php?page=edit_blog&id=<?php echo $id; ?>" method="post">
			<div class="form-group">
					<input type="text" name="id" class="form-control" value="<?php echo $data['id']; ?>" readonly required>
				</div>
			</div>
			<div class="form-group">
						<input type="text" class="form-control" name="judul" placeholder="judul"  value="<?php echo $data['judul']; ?>" required >
					</div>
					<div class="form-group">
						<textarea class="ckeditor" type="text" name="isi"  value="<?php echo $data['isi']; ?>" required ></textarea>
					</div>
					<div class="form-group">

						<input type="date" class="form-control" name="tgl" placeholder="tanggal"  value="<?php echo $data['tgl']; ?>" required >
					</div>
					<div class="form-group">

				    <label class="control-label" for="inputGambar">Gambar Blog</label>  
				     <input type="file" id="inputGambar" name="gambar" value="<?php echo $data['gambar']; ?>" required>  
				    <div class="controls">  
				    </div>  
				  </div> 
					

			<div class="form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=blog" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
	</div>
