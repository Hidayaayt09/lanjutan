<?php
//memasukkan file config.php
include('config.php');

?>


    <div class="row" style="margin-top:20px">
        <center><font size="6">Data Testimonial</font></center>
        <hr>
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nama</th>
                    <th>email</th>
                    <th>komentar</th>
                    <th>tgl</th>
                    <th>aktif</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
                $sql = mysqli_query($koneksi, "SELECT * FROM tabelkomentar ORDER BY id DESC") or die(mysqli_error($koneksi));
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
                            <td>'.$data['nama'].'</td>
                            <td>'.$data['email'].'</td>
                            <td>'.$data['komentar'].'</td>
                            <td>'.$data['tgl'].'</td>
                            <td>'.$data['aktif'].'</td>
                            <td>
                            
                                <a href="index.php?page=edit_testi&id='.$data['id'].'" class="btn btn-secondary btn-sm">Edit</a>
                                <a href="hapus_testi.php?nama='.$data['nama'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
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


