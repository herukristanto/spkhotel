<?php
include  ("koneksi.php");

$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM user WHERE email='$email' and password='$password'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
echo("<script>document.location = 'home.php';</script>");
// echo "anda berhasil login.";
// echo("<a href='home.php'>");
}
else {
echo 'username/password yang anda masukkan salah. Silahkan ulang kembali';	
}
?>