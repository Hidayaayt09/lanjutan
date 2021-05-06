<?php
//memasukkan file config.php
include('config.php');

?>


    <div class="row" style="margin-top:20px">
        <center><font size="6">Data Blog</font></center>
        <hr>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <a class="form-group" style="margin-left: 850px">
        <label for="sel1"</label>
       
    </form>
        <a href="index.php?page=tambah_blog"><button class="btn btn-dark right">Tambah Data</button></a>
       
        <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Judul Blog</th>
                    <th>Isi Blog</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
                $sql = mysqli_query($koneksi, "SELECT * FROM blog ORDER BY id DESC") or die(mysqli_error($koneksi));
                //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                if(mysqli_num_rows($sql) > 0){
                    //membuat variabel $no untuk menyimpan nomor urut
                    $no = 1;
                    //melakukan perulangan while dengan dari dari query $sql
                    while($data = mysqli_fetch_assoc($sql)){
                        //menampilkan data perulangan
                        echo '
                        <tr>
                            <td>'.$data['id'].'</td>
                            <td>'.$data['judul'].'</td>
                            <td>'.$data['isi'].'</td>
                            <td>'.$data['tgl'].'</td>
                            
                            <td>
                            
                                <a href="index.php?page=edit_blog&id='.$data['id'].'" class="btn btn-secondary btn-sm">Edit</a>
                                <a href="hapusblog.php?judul='.$data['judul'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
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


