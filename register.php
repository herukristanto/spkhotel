
<?php

include_once 'koneksi.php';

if(isset($_POST['btn-signup']))
{
	$email = $_POST['email'];
 	$username = $_POST['username'];
 	$password = $_POST['password'];

 
 if(mysqli_query($mysqli, "INSERT INTO user(username,email,password) VALUES('$username','$email','$password')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <script>document.location = 'index.php';</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
