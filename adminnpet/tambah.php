<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$id			= $_POST['id'];
			$namapemilik= $_POST['namapemilik'];
			$namahewan	= $_POST['namahewan'];
			$jenishewan	= $_POST['jenishewan'];
			$jeniskel	= $_POST['jeniskel'];
			$gejala	= $_POST['gejala'];
			$alamat = $_POST['alamat'];


			$cek = mysqli_query($koneksi, "SELECT * FROM tbl_pasien WHERE id='$id'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO tbl_pasien(id, namapemilik, namahewan, jenishewan, jeniskel, gejala, alamat) VALUES('$id', '$namapemilik', '$namahewan', '$jenishewan', '$jeniskel', '$gejala', '$alamat')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=pasien";</script>';
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
				<form enctype="multipart/form-data" action="index.php?page=tambah_psn" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="id" placeholder="Id Hewan" required="required" >
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="namapemilik" placeholder="Nama Pemilik" required="required" >
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="namahewan" placeholder="Nama Hewan" required="required" >
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="jenishewan" placeholder="Jenis hewan" required="required" >
					</div>
					<div class="form-group">
				
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="jeniskel" value="Jantan" required>Jantan
						</label>
						<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="jeniskel" value="Betina" required>Betina
						</label>
					</div>
				</div>
					<div class="form-group">
						<input type="text" class="form-control" name="gejala" placeholder="Gejala Hewan" required="required" >
					</div>
					<div class="form-group">
						<textarea name="alamat" cols="30" rows="5" class="form-control" placeholder="Alamat" required="required"></textarea>
					</div>
				
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
				</form>
	</div>

