<div class="wrapper-property">
      <div class="wrap-property">
        <?php 
        include_once("koneksi.php");
        $sql = 'SELECT * FROM tb_hotel order by nilai DESC LIMIT 3';
        $query = mysqli_query($mysqli, $sql);

        while ($row = mysqli_fetch_array($query)){
        
        echo "<div class='wrap-top'>
                <div class='image'>";
              echo"  <a href='show.php?id=".$row['id']."'>
                  <img src='imgs/izzara-slider-4-6c611.jpg'>
                  </a>";
              echo"  </div>
                <div class='name'>
                  <div class='data'>
                  <p>".$row['nama']."</p>
              </div>";
        echo "<div class='data'>
              <i class='icon-circle-menu'></i>
              </div>
              </div>";
         echo "<div class='data-count'>
                <div class='num counter'>
                  <p class='count'>".$row['nilai']."</p>
                 </div>";
       

        $nilai = $row['nilai'];
        $hnil = $nilai * 5;
        $hhnil = $hnil / 100;
        $hhnill = ceil($hhnil);
        $aa = "<i class='icon-star'></i>";
        echo "<div class='num'>";
          for ($i = 1; $i <= $hhnill; $i++){
            echo $aa;
          }

        "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

                }

      ?>
    </div>
  </div>