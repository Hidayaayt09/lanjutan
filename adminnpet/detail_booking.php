<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Detail Data</font></center>

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
		if(isset($_POST['detail'])){
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
				echo '<div class="alert alert-warning">Gagal menampilkan data.</div>';
			}
		}
		?>

		<div class="row">
		<div class="content-wrapper">
                       <section class="content">
                            	<table class="table">

                            		<tr>
                            			<td>Id Booking</td>
                            			<td>:</td>
                            			<td><?php echo $detail->idbooking ?></td>
                            		</tr>
                            		<tr>
                            			<td>Nama</td>
                            			<td>:</td>
                            			<td><?= $data_pegawai_detail->namaPegawai ?></td>
                            		</tr>
                            		<tr>
                            			<td>Jenis Kelamin</td>
                            			<td>:</td>
                            			<td><?= ($data_pegawai_detail->jenisKelamin=="L")?"Laki-Laki":"Perempuan" ?></td>
                            		</tr>
                            		<tr>
                            			<td>Telepon</td>
                            			<td>:</td>
                            			<td><?= $data_pegawai_detail->noTelp ?></td>
                            		</tr>
                            		<tr>
                            			<td>Alamat</td>
                            			<td>:</td>
                            			<td><?= $data_pegawai_detail->alamat ?></td>
                            		</tr>
                            		<tr>
                            			<td>Level</td>
                            			<td>:</td>
                            			<td><?= $data_pegawai_detail->level ?></td>
                            		</tr>
                            		<tr>
                            			<td>Username</td>
                            			<td>:</td>
                            			<td><?= $data_pegawai_detail->username ?></td>
                            		</tr>
                            		<tr>
                            			<td>Status</td>
                            			<td>:</td>
                            			<td><?= ($data_pegawai_detail->status=="Y")?"Aktif":"Non Aktif" ?></td>
                            		</tr>
                            	</table>
                            </div>
                        </div>
             
					<a href="index.php?page=booking" class="btn btn-warning">Kembali</a>
				</div>
			</div>
			</div>
</section>
	</div>
	</div>
