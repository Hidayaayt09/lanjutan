<?php
//memasukkan file config.php
include('config.php');

?>


    <div class="row" style="margin-top:20px">
        <center><font size="6">Data Booking Pelayanan</font></center>
        <hr>
        <a href="index.php?page=cetak_bkg"><button class="btn btn-dark right">Cetak Data</button></a>
       
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nama Pemilik</th>
                    <th>Jenis Hewan</th>
                    <th>Gejala</th>
                    <th>No Hp</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
                $sql = mysqli_query($koneksi, "SELECT * FROM tabelpelayanan ORDER BY idbooking DESC") or die(mysqli_error($koneksi));
                //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                if(mysqli_num_rows($sql) > 0){
                    //membuat variabel $no untuk menyimpan nomor urut
                    $no = 1;
                    //melakukan perulangan while dengan dari dari query $sql
                    while($data = mysqli_fetch_assoc($sql)){
                        //menampilkan data perulangan
                        echo '
                        <tr>
                            <td>'.$data['idbooking'].'</td>
                            <td>'.$data['namapemilik'].'</td>
                            <td>'.$data['jenis'].'</td>
                            <td>'.$data['sakit'].'</td>
                            <td>'.$data['nohp'].'</td>
                            <td>'.$data['tanggal'].'</td>
                            <td>'.$data['waktu'].'</td>
                            <td>'.$data['keterangan'].'</td>
                            <td>
                            
            
                                <a href="index.php?page=edit_bkg&idbooking='.$data['idbooking'].'" class="btn btn-secondary btn-sm">Edit</a>
                                <a href="hapus_booking.php?namapemilik='.$data['namapemilik'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
                            </td>
                        </tr>
                        ';
                        $no++;
                    }
                //jika query menghasilkan nilai 0
                }else{
                    echo '
                    <tr>
                        <td colspan="6">Tidak ada data.</td>
                    </tr>
                    ';
                }
                ?>
            <tbody>
        </table>
    </div>
    </div>


