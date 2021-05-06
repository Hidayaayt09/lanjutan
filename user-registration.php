<?php session_start();?>
<?include 'koneksi.php'; ?>
<!DOCTYPE html>

<html class="no-js " lang="en">
<head>
<TITLE>User Registration</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="login.php">Login</a>
			</div>
			<div class="">
				<form name="signup" action="berhasil.php" method="post">
					<div class="signup-heading">Registration</div>
				
				<div class="error-msg" id="error-msg"></div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Nama Lengkap<span class="required error" id="nama"></span>
							</div>
							<input class="input-box-330" type="text" name="nama"
								id="nama">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Email<span class="required error" id="email"></span>
							</div>
							<input class="input-box-330" type="email" name="email" id="email">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
					<div class="form-label">
								Username<span class="required error" id="username"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="password"></span>
							</div>
							<input class="input-box-330" type="password"
								name="password" id="password">
						</div>
					</div>
					
					<div class="row">
						<input class="btn" type="submit" name="signup" value="simpan">
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
</body>


          <?php 
          if(!isset($_SESSION)){
          session_start();
    

         if (isset($_POST['signup'])) {
         	include 'koneksi.php';
           $nama = $_POST ['nama'];
           $email = $_POST ['email'];
           $username = $_POST ['username'];
           $password = md5($_POST ['password']);
           $sebagai = '2';

           $ambil1 = mysqli_query($koneksi,"SELECT username FROM login WHERE username = '$username'");
           $cocok1 =mysqli_num_rows($ambil1);

           if ($cocok1 > 0) {
            echo "<div class='alert alert-success text-center'>Maaf Username Sudah Terdaftar</div>";
          }
          else {
           mysqli_query($koneksi,"INSERT INTO login (nama_lengkap,email,username,password,sebagai) VALUES('$nama_lengkap','$email','$username','$password','$sebagai')");
           echo "<div class='alert alert-success text-center'> Data Berhasil Disimpan</div>";
         } 
       }
   }
       ?>
</html>