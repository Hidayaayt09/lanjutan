<?php
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
  header("location:login.php?pesan=gagal");
 }

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Poliklinik">
    <meta name="author" content="dsyafaatul">

    <title>ADMIN PET CARE</title>

    <link rel="icon" type="img/png" href="img/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="vendor/sweetalert/sweetalert.min.js"></script>

    <!-- Select2 -->
    <link rel="stylesheet" href="vendor/select2/dist/css/select2.min.css">

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css" >
        .text-red{
            color: #d9534f;
        }
        .text-blue{
            color: #337ab7;
        }
        .text-green{
            color: #5cb85c;
        }
        .text-orange{
            color: #f0ad4e;
        }
        .text-info{
            color: #5bc0de;
        }
    </style>
    <script type="text/javascript">
        function confirm_logout(){
            swal({
                text: "Apakah anda yakin ingin logout?",
                icon: "warning",
                title: "",
                buttons: true,
            }).then((value)=>{
                if(value){
                    document.location='logout.php'
                }
            })
        }
    </script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" class="logo-mini" href="index.php"><img src="img/klinik.png" alt="" class="img-responsive" width="40" height="40" style="margin: -10px 0px;padding: 0px 0px;background-color: transparent;"></a>
                <a class="navbar-brand hidden-xs" href="index.php" style="margin-left: -25px;">ADMIN PET CARE</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">

                     <?php

                     include('config.php');

                        $jumlah_pelayanan = $koneksi->query("SELECT * FROM tabelpelayanan")->num_rows;
                        $jumlah_komentar = $koneksi->query("SELECT * FROM tabelkomentar")->num_rows;
                        $jumlah = $jumlah_pelayanan+$jumlah_komentar;
                        ?>
                   
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i><span class="badge"><?= $jumlah ?></span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="index.php?page=booking">
                                <div>
                                    <i class="fa fa-heartbeat fa-fw"></i> Booking
                                    <span class="pull-right text-muted small"><?= $jumlah_pelayanan?></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?page=testi">
                                <div>
                                    <i class="fa fa-heart fa-fw"></i> Testimonial
                                    <span class="pull-right text-muted small"><?= $jumlah_komentar?></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                   
                        <li class="divider"></li>
                        <li><a href="../logout.php" onclick="confirm_logout()"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->



            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php?page=utama"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        
                    
                        <li>
                            <a href="#"><i class="fa fa-paw fa-fw"></i> Pasien<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?page=tambah_psn">Tambah Pasien</a>
                                </li>
                                <li>
                                    <a href="index.php?page=pasien">Data Pasien</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                          <li>
                            <a href="#"><i class="fa fa-ambulance fa-fw"></i> Pelayanan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?page=booking">Booking</a>
                                </li>
                                <li>
                                    <a href="index.php?page=testi">Testimonial</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Portal Blog<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?page=tambah_blog">Tambah Blog</a>
                                </li>
                                <li>
                                    <a href="index.php?page=blog">Tampil Data</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       

                        <li>
                            <a href="#"><i class="fa fa-camera fa-fw"></i> Galeri<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?page=tambfoto">Tambah Gambar</a>
                                </li>
                                <li>
                                    <a href="index.php?page=galeri">Tampil Data</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <?php
            include("menu.php");
            ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
    <!-- InputMask -->
    <script src="vendor/input-mask/jquery.inputmask.js"></script>
    <script src="vendor/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="vendor/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- Select2 -->
    <script src="vendor/select2/dist/js/select2.full.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".slideDown").delay(500).slideDown(500).delay(1000).slideUp(500);
        $('.data-tables').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : true,
            'ordering'    : true,
            'info'        : false,
            'responsive'  : true,
            'autoWidth'   : true
        });
        $('#datemask').inputmask('yyyy/mm/dd', { 'placeholder': 'yyyy/mm/dd' });
        $('[data-mask]').inputmask();
        $('.select2').select2();
    });
    </script>
</body>

</html>
<?php
?>