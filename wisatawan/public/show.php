<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem Pemilihan Hotel</title>
  <link rel="stylesheet" href="assets/css/cta.css">
  <link rel="stylesheet" href="assets/css/font-cava.css">



</head>
<body style="background-color: #8A2BE2">








<?php 
include_once("koneksi.php");
$id = $_GET['id'];
$sql = "SELECT * FROM tb_hotel WHERE id = '$id'";
$query = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_array($query)){

?>

  <div class="wrap-form-out-profile">
    <div class="box-profile profile border-profile-left">
      <div class="profile-circle">
        <!-- <img src="imgs/CnoHyd7UEAEpmCA.png" alt=""> -->

      </div>

      <div class="username-profile">
        <p><?php echo $row['id']; ?></p>
        <p><?php echo $row['nama']; ?></p>
      </div>
      <?php
      $nilai = $row['nilai'];
        $hnil = $nilai * 5;
        $hhnil = $hnil / 100;
        $hhnill = ceil($hhnil);
        $aa = "<i class='icon-star'></i>";
        ?>
        <div class='star-rate'>
          <?php
          for ($i = 1; $i <= $hhnill; $i++){
            echo $aa;
          }
        ?>
        </div>
    

      <div class="edit-profile">
        <p style="color:#FFFFFF;"><?php echo $row['fasilitas']; ?></p>
      </div>

      <div class="edit-profile">
        <a href="listdata.php">Back</a>
      </div>
    </div>

    <div class="box-profile profile-info">
      <div class="info">
        <p class="title">Detail Information</p>
      </div>

      <div class="list-info">
        <ul>
          <li>
            <p class="label">alamat</p>
            <p class="data"><?php echo $row['alamat']; ?></p>
          </li>
          <li>
            <p class="label">Harga</p>
            <p class="data"><?php echo $row['harga']; ?></p>
          </li>
          <li>
            <p class="label">Jarak</p>
            <p class="data"><?php echo $row['lokasi']; ?> km</p>
          </li>
          <li>
            <p class="label">Jenis Hotel</p>
            <p class="data"><?php echo $row['jenis_hotel']; ?></p>
          </li>
          
        </ul>
      </div>
    </div>

    <div class="box-profile slider-profiles border-profile-right">
      <div id="btn-slider" class="btn-slide-profile">
        <div class="grab">
      </div>
    <div class="title">
      <p>Performance Summary</p>
    </div>
  </div>

  <div class="wrapper-perform">
    <div class="wrap-Performance">
      <div class="wrap-summary">
        <div class="top">
          <div class="name">
            <p><?php echo $row['nama']; ?></p>
          </div>
          <div class="nav-menu">
            <i class="icon-circle-menu"></i>
          </div>
        </div>
        <div class="data">
          <p class="num"><?php echo $row['nilai']; ?></p>
          <p class="name">Nilai Total</p>
        </div>
      </div>
      <div class="wrap-summary">
        <div class="top">
          <div class="name">
            <p>Rating</p>
          </div>
          <div class="nav-menu">
            <i class="icon-circle-menu"></i>
          </div>
        </div>
        <div class="data">
          <p class="num"><?php echo number_format($hhnil,1); ?></p>
          <!-- <p class="name">this month</p> -->
        </div>
      </div>
    </div>
    <div class="wrap-Performance hide">
      <div class="chart">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31617.101764521023!2d112.50479436411844!3d-7.88065587603487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7887333731fe9f%3A0xea007d403123935!2sBatu%2C+Kec.+Batu%2C+Kota+Batu%2C+Jawa+Timur!5e0!3m2!1sid!2sid!4v1545371028126" width="410" height="180" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>


          




</div>
</div>

                    <?php } ?>

  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js" charset="utf-8"></script>
  <script src="assets/main.js" charset="utf-8"></script>
</body>
</html>


