<?php
 session_start();

 

 ?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Utama</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
	<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
				
				<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/606542f2067c2605c0be40cc/1f25or0te';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand d-flex align-items-center" href="index_user.php"><span ><link rel="shortcut icon" href="logo.ico"></span><h1>DHEE-NA VET<span class="mini">Pets Care</span></h1></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index_user.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="tentangkami.html" class="nav-link">Tentang kami</a></li>
					<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="galeri.php" class="nav-link">Galeri</a></li>
					<li class="nav-item"><a href="hubungi.php" class="nav-link">Hubungi Kami</a></li>
					<li class="nav-item cta"><a href="pelayanan.php" class="nav-link">Pelayanan</a></li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<section class="hero-wrap js-fullheight" style="background-image: url('images/bg10.jpeg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-lg-6 pt-md-5 ftco-animate">
					<div class="mt-5">
						<h1 class="mb-4"> Perawatan Hewan Peliharaan Anda</h1>
						<p class="mb-4"></p>
						<p><a href="pelayanan.php" class="btn btn-primary py-3 px-4">Pelayanan</a> <a href="hubungi.html" class="btn btn-secondary py-3 px-4 font-weight-bold">Hubungi kami</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	


	<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb bg-light">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 col-lg-5 d-flex">
					<div class="img w-100 d-flex align-self-stretch align-items-center" style="background-image:url(images/icon3.png);">
					</div>
				</div>
				<div class="col-md-6 col-lg-7 pl-lg-5">
					<div class="py-md-4">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
								<span class="subheading">Welcome to Dhee-na vet</span>
								<h2 class="mb-4">Kami Akan Lakukan Terbaik <br> Untuk Hewan Anda</h2>
								<p></p>
								<ul class="list-services">
									<li class="d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
										<p>Dokter Berpengalaman</p>
									</li>
									<li class="d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
										<p>Sudah Lama Buka</p>
									</li>
									<li class="d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
										<p>Menyukai Binatang</p>
									</li>
									<li class="d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
										<p>Pet Care Terbaik</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-no-pt bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-5">
				<div class="col-md-10 heading-section text-center ftco-animate">
					<span class="subheading">Blog Terbaru</span>
					<h2 class="mb-4">Pembaruan Blog Terbaru</h2>
				</div>
			</div>
			
			<?php

$koneksi = mysqli_connect("localhost","root","","adminpetcare");



#------- memulai page number -------------------------------------------------------------------------------------#
$dataPerPage = 3; 
if(isset($_GET['hal']))
{ 
  $noPage = $_GET['hal'];
}else{  
  $noPage = 1;
}
$offset   = ($noPage - 1) * $dataPerPage;

$ambil_data = mysqli_query($koneksi, "select * from blog order by id desc limit $offset, $dataPerPage");
$hitung_record = mysqli_query($koneksi, "SELECT COUNT(*) AS jumData FROM blog");
$data          = mysqli_fetch_array($hitung_record);
$jumData       = $data['jumData'];
$jumPage  = ceil($jumData/$dataPerPage);
# ceil digunakan untuk membulatkan hasil pembagian
#------- akhir page number -------------------------------------------------------------------------------------#

while($hasil_data = mysqli_fetch_array($ambil_data)){
?>

  <div class="row-fluid">
      <div class="span4">
        <img alt="300x200" src="images/<?=$hasil_data['gambar'];?>" style="width: 300px; height: 200px;">
      </div>
      <div class="span8">
          <h2><?=$hasil_data['judul'];?></h2>
          <p style="text-align:justify;"><?=substr($hasil_data['isi'],0,500);?></p>
          <p>
            <a href="lihatblog.php?id=<?=$hasil_data['id'];?>" class="btn btn-primary">Baca Selengkapnya</a> 
            <a href="#" class="btn btn-inverse">Dipostkan pada <?=$hasil_data['tgl'];?></a>
          </p>
      </div>      
    </div>
    <hr>

    
<?php
}
?>
				 		
			<div class="container">
  <div class="col-md-12 py-1 text-center">
          <h2 class="appointment-heading"><span class="fa fa-map-marker"></span> DENAH LOKASI DHEE-NA VET</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.457980551856!2d108.33435004886724!3d-6.334669463718207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ebfec24d0af95%3A0x692b65c54c4f3a1f!2sDokter%20Hewan%20praktek%20indramayu!5e0!3m2!1sid!2sid!4v1604616059778!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>
		</section>

		<footer class="ftco-footer">
			<div class="container mb-5 pb-4">
				<div class="row">
					<div class="col-lg col-md-6">
						<div class="ftco-footer-widget">
							<h2 class="logo d-flex align-items-center">
								<a href="#" class="d-flex align-items-center">
									<div class="icon"><span class="flaticon-stethoscope flaticon"></span></div>
									<div class="logo1">
										<span> DHEE-NA VET</span>
										<span class="sub">Pets Care</span>
									</div>
								</a>
							</h2>
							<p>Kami Akan Lakukan Terbaik Untuk Hewan Anda.</p>
							<ul class="ftco-footer-social list-unstyled mt-4">
								<li><a href="hubungi.html"><span class="fa fa-phone"></span></a></li>
								<li><a href="hubungi.html"><span class="fa fa-map-marker"></span></a></li>
								<li><a href="hubungi.html"><span class="fa fa-paper-plane"></span></a></li>
							</ul>
						</div>
					</div>


					<div class="col-lg-2 col-md-6">
						<div class="ftco-footer-widget">
							<h2 class="ftco-heading-2">Semua Halaman</h2>
							<ul class="list-unstyled">
								<li><a href="index_user.php"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
								<li><a href='pelayanan.php'><span class="fa fa-chevron-right mr-2"></span>Pelayanan</a></li>
								<li><a href="blog.php"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
								<li><a href="galeri.php"><span class="fa fa-chevron-right mr-2"></span>Galeri</a></li>
								<li><a href="tentangkami.html"><span class="fa fa-chevron-right mr-2"></span>Tentang Kami</a></li>
								<li><a href="hubungi.html"><span class="fa fa-chevron-right mr-2"></span>Hubungi Kami</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg col-md-6">
						<div class="ftco-footer-widget">
							<h2 class="ftco-heading-2">Silahkan Hubungi?</h2>
							<div class="block-23 mb-3">
								<ul>
									<li><span class="fa fa-map-marker mr-3"></span><span class="text">Indramayu</span></li>
									<li><a href="hubungi.html"><span class="fa fa-phone mr-3"></span><span class="text">081 328 353 001</span></a></li>
									<li><a href="hubungi.html"><span class="fa fa-paper-plane mr-3"></span><span class="text">dheenavet@gmail.com</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid bg-primary py-5">
				<div class="row">
					<div class="col-md-12 text-center">


					</div>
				</div>
			</div>
		</footer>



		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/jquery.timepicker.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>

		<script src="js/main.js"></script>

	</body>
	</html>