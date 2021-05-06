<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>

		<?php
		if(isset($_POST['submit'])){
		    $id			= $_POST['id'];
		    $gambar = $_FILES ['gambar']['name'];
			$source = $_FILES ['gambar']['tmp_name'];
			$folder = 'img/images';

			$cek = mysqli_query($koneksi, "SELECT * FROM galeri WHERE id='$id'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO galeri(id, gambar) VALUES('$id', '$gambar')") or die(mysqli_error($koneksi));
				
				  
				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=galeri";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, id sudah terdaftar.</div>';
			}
		}
	
?>

		<div class="row">
	<div class="col-md-12">
				<form enctype="multipart/form-data" action="index.php?page=tambfoto" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="id" placeholder="Id" required="required" >
					</div>
					<div class="form-group">

				    <label class="control-label" for="inputGambar">Gambar Galeri</label>  
				     <input type="file" id="inputGambar" name="gambar"  required>  
				    <div class="controls">  
				    </div>  
				  </div>  
								
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Simpan" >
						<a href="index.php?page=galeri" class="btn btn-warning">Kembali</a>
			</div>
				</form>
	</div>

</div>

<?php  ?>