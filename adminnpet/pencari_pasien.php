<table border="1">
 <tr>
                    <th>id</th>
                    <th>Nama Pemilik</th>
                    <th>Jenis Hewan</th>
                    <th>Jenis Kelamin</th>
                    <th>Gejala</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
 </tr>

<?php  
 include 'config.php';
 $no_urut = 0;
 $search = $_POST['search'];
 $query = "SELECT * FROM tbl_pasien WHERE jeniskel LIKE '%$search%'";
 $result = mysql_query($query);
 while($data = mysql_fetch_array($result)) {
  $no_urut++;
  echo "<tr>
                           <td>".$data['id']."</td>
                            <td>".$data['namapemilik']."</td>
                            <td>".$data['jenishewan']."</td>
                            <td>".$data['jeniskel']."</td>
                            <td>".$data['gejala']."</td>
                            <td>".$data['alamat']."</td>
  <tr>";
 }
?>
</table>