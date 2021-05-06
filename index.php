<!DOCTYPE html>

<html>
<head>
 <title>login</title>
 <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>

 <h1>Log In DHEENA VETS</h1>

 <?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah !</div>";
  }
 }
 ?>

 <div class="panel_login">
  <p class="tulisan_atas">Silahkan Masuk</p>

  <form action="cek_login.php" method="post">
   <label>Username</label>
   <input type="text" name="username" class="form_login" placeholder="Username" required="required">

   <label>Password</label>
   <input type="password" name="password" class="form_login" placeholder="Password" required="required">

   <input type="submit" class="tombol_login" value="LOGIN">
   
    
  

   <br/>
   <br/>
   
  </form>

   <div >
      <hr>
      <a href="index_user.php" class="tombol_user"  >HALAMAN USER</a>
    </div>
  
 </div>


</body>
</html>