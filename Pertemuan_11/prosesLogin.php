<?php
$username=$_POST['username']; $password=$_POST['password'];
if($username=='admin' && $password=='admin'){
 echo "<h1>Login berhasil!</h1><h2>Selamat datang, $username.</h2><a href='login.php'>kembali ke halaman login</a>";
}else{
 echo "<h2>Username : $username Tidak Terdaftar!</h2><a href='login.php'>kembali ke halaman login</a>";
}
?>
