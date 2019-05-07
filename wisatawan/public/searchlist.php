

<!-- nav -->
    <?php
      include ("nav.php");
    ?>
<!-- nav -->
<!-- leaderboard -->
    <?php
      include ("leaderboard.php");
    ?>
<!-- leaderboard -->
<!-- search -->
    <?php
      include ("search.php");
    ?>
<!-- search -->
    
      <div class="btn-arrow">
        <a href="#" id="prev-arrow" class="icon-arrow-left"></a>
        <a href="#" id="next-arrow" class="icon-arrow-right"></a>
      </div>
      <hr color="#1CC69C">
      

         

            <?php
            include("koneksi.php");
              if (isset($_POST['submit'])) {
              
              $harga = $_POST['harga'];
              $lokasi = $_POST['lokasi'];
              $jenis_hotel = $_POST['jenis_hotel'];
   
              $sql = "SELECT * FROM tb_hotel WHERE harga < '$harga' OR lokasi <= '$lokasi' OR jenis_hotel LIKE '%$jenis_hotel%'";
              $query = mysqli_query($mysqli, $sql);
    
              if (mysqli_num_rows($query) == 0) {
              echo '<p></p><p>Pencarian tidak ditemukan</p>';
              } else {
              echo '<p></p>';
              while ($row = mysqli_fetch_array($query)) {
              extract($row);

              echo '<div class="card">
                      <div class="card-header" style="background-color:#1CC69C;">
                        <h5 class="card-title text-white" >'.$nama.'</h5>
                         
                      </div>
                      <div class="card-body" style="background-color:#333333;">
                        <p class="text-white">'.$fasilitas.'</p>
                        <a href="show.php?id='.$id.'" class="btn btn-outline-success">Detail Hotel</a>
                           
                      </div>
                    </div><br>';
    }
   }
  }
?>
</div>
</div>

         
      <!-- foo -->
      <?php
        include ("foo.php");
      ?>
      <!-- foo -->
            