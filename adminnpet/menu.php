<?php
$queries = array();
      parse_str($_SERVER['QUERY_STRING'], $queries);
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      switch ($queries['page']) {
		
		case "pasien":
			include("pasien.php");
			break;
			case 'tambah_psn':
      		include 'tambah.php';
      		break;
      		case 'edit_psn':
        		# code...
        	include 'edit.php';
        	break;
        	case 'detail_psn':
        		# code...
        	include 'detail.php';
        	break;
          case 'utama':
            # code...
          include 'utama.php';
          break;
          case 'booking':
            # code...
          include 'booking.php';
          break;
          case 'testi':
            # code...
          include 'testimonial.php';
          break;
          case 'cetak':
            # code...
          include 'cetak.php';
          break;
           case 'edit_bkg':
            # code...
          include 'edit_booking.php';
          break;
           case 'edit_testi':
            # code...
          include 'edit_testi.php';
          break;
          case 'cetak_bkg':
            # code...
          include 'cetak_booking.php';
          break;
           case 'blog':
            # code...
          include 'blog.php';
          break;
          case 'tambah_blog':
            # code...
          include 'tamblog.php';
          break;
          case 'edit_blog':
            # code...
          include 'edit_blog.php';
          break;
          case 'detbook':
            # code...
          include 'detail_booking.php';
          break;
           case 'detblog':
            # code...
          include 'lihatblog.php';
          break;
           case 'tambfoto':
            # code...
          include 'tambfoto.php';
          break;
           case 'galeri':
            # code...
          include 'galeri.php';
          break;
           case 'edit_gal':
            # code...
          include 'edit_gal.php';
          break;
		default:
			include("home.php");
			break;
	}
?>