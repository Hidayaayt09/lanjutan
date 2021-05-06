<?php
//memasukkan file config.php
include('config.php');

?>

       <div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Home</h2>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

</script>
<!-- /.row -->


<?php
$data_pasien = $koneksi->query("SELECT * FROM tbl_pasien")->num_rows;
$data_pelayanan = $koneksi->query("SELECT * FROM tabelpelayanan")->num_rows;
$data_komentar = $koneksi->query("SELECT * FROM tabelkomentar")->num_rows;
$data_blog = $koneksi->query("SELECT * FROM blog")->num_rows;
$data_galeri = $koneksi->query("SELECT * FROM galeri")->num_rows;
?>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-paw fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= $data_pasien ?></div>
                        <div>Data Pasien</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=pasien">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-ambulance fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= $data_pelayanan ?></div>
                        <div>Data Pelayanan</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=booking">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
   
   <div class="col-lg-3 col-md-6">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-heartbeat fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= $data_komentar ?></div>
                        <div>Data Testimonial</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=testi">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

     <div class="col-lg-3 col-md-6">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-book fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= $data_blog ?></div>
                        <div>Data Blog</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=blog">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
    
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-camera fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= $data_galeri ?></div>
                        <div>Data Galeri</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=galeri">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


