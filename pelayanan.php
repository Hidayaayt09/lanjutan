

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pelayanan</title>
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
      <a class="navbar-brand d-flex align-items-center" href="index_user.php"><span class="flaticon flaticon-stethoscope"></span><h1>DHEE-NA VET<span class="mini">Pets Care</span></h1></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
         <li class="nav-item "><a href="index_user.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="tentangkami.html" class="nav-link">Tentang kami</a></li>
          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="galeri.php" class="nav-link">Galeri</a></li>
          <li class="nav-item"><a href="hubungi.php" class="nav-link">Hubungi Kami</a></li>
          <li class="nav-item cta"><a href="pelayanan.php" class="nav-link">Pelayanan</a></li>

        </ul>
      </div>
    </div>
  </nav>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg10.jpeg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Pelayanan<i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-3 bread">Semua Pelayanan</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb bg-light">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 col-lg-5 d-flex">
        <div class="img w-100 d-flex align-self-stretch align-items-center" style="background-image:url(images/icon1.png);">
        </div>
      </div>
      <div class="col-md-6 col-lg-7 pl-lg-5">
        <div class="py-md-4">
          <div class="row justify-content-start pb-3">
            <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
              <span class="subheading">Pelayanan Dhee-na vet</span>
              <h2 class="mb-4">Kami Akan Lakukan Terbaik <br> Untuk Hewan Anda</h2>
              <p></p>
              <ul class="list-services">
                <li class="d-flex align-items-center">
                  <div class=""><span class=""></span></div>
                  <p>JAM PRAKTEK</p>
                </li>
                 <li class="d-flex align-items-center">
                  <div class=""><span class=""></span></div>
                  <p>(Senin- Jumat)</p>
                </li>
                 <li class="d-flex align-items-center">
                  <div class=""><span class=""></span></div>
                  <p>- 12.00 - 13.00</p>
                </li>
                <li class="d-flex align-items-center">
                  <div class=""><span class=""></span></div>
                  <p>- 16.30 - 21.00</p>
                </li>
                 <li class="d-flex align-items-center">
                  <div class=""><span class=""></span></div>
                  <p>(Sabtu - Minggu)</p>
                </li>
                <li class="d-flex align-items-center">
                  <div class=""><span class=""></span></div>
                  <p>- Buka (Dengan Perjanjian)</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="ftco-section bg-light">
  <div class="container">
<div class="panel panel-warning">
    <div class="col-md-12 py-1 text-center">
          <h2 class="appointment-heading">Booking Perawatan Hewan</h2>
    </div>
    <div class="panel-body">
     <form  method="POST" action="simpan_booking.php" class="appointment-form ftco-animate">
          <input type="hidden" name="idbooking" value="<?php echo $dbrt['idbooking']; ?>">
       
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Pemilik</label>
    <input type="text" class="form-control" name="namapemilik" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Hewan</label>
    <input type="text" class="form-control" name="namahewan" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Jenis Hewan</label>
    <input type="text" class="form-control" name="jenis" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Sakit Hewan</label>
    <input type="text" class="form-control" name="sakit" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nomor Hp Pemilik</label>
    <input type="text" class="form-control" name="nohp" placeholder="">
  </div>
   <div class="form-group">
      <label for="exampleFormControlInput1">Tanggal Booking</label>
            <input type="text" class="form-control appointment_date" placeholder="" name="tanggal">
        </div>
       </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jam Booking</label>
    <select class="form-control" name="waktu">
      <option></option>
      <option>12.00 - 13.00</option>
      <option>16.30 - 21.00</option>
       <option>Dengan Perjanjian</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Keterangan</label>
    <textarea class="form-control" name="keterangan" rows="4"></textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Konfirmasi</button>
</form>
      </form>
    </div>
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
                <li><a href="#"><span class="fa fa-phone mr-3"></span><span class="text">081 328 353 001</span></a></li>
                <li><a href="#"><span class="fa fa-paper-plane mr-3"></span><span class="text">dheenavet@gmail.com</span></a></li>
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