

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

      <div class="btn-arrow center">
        <a href="#" id="prev-arrow" class="icon-arrow-left"></a>
        <a href="#" id="next-arrow" class="icon-arrow-right"></a>
      </div>
      <hr color="#1CC69C">
<!-- 

      <div class="wrapper-top">
              <div class="wrap-marketing">
                <div class="top-box">
                  <div class="wrap-top">
                    <div class="name-star">
                      <p>Nur Putra Hadi</p>
                      <div class="star">
                        <i class="icon-star"></i>
                       
                      </div>
                    </div>
                  </div>
                  <div class="wrap-center">
                    <div class="rank">
                      <p class="par">Rangking</p>
                      <p class="count">1</p>
                    </div>
                    <div class="rank">
                      <p class="par">Selling</p>
                      <p class="count">9</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
      
      <div class="list-tbl-marketers">
        <table id="tableListStatus">
          <thead>
            <tr>
              <th>ID</th>
              <th class="text-center">Name</th>
              <th class="text-center">Location</th>
              <th>Nilai</th>
              <th>Rating</th>
            </tr>
          </thead>

          <tbody id="bodylisttable">
          <?php 
            include("koneksi.php");
            $sql = 'SELECT * FROM tb_hotel order by nilai DESC LIMIT 10';
            $query = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_array($query)){
              echo "<tr class='post-data' >";
              echo "<td>".$row['id']."</td>";
              echo "<td><a class='text-dark' href='show.php?id=".$row['id']."'>".$row['nama']."</td>";
              echo "<td>".$row['alamat']."</td>";
              echo "<td>".$row['nilai']."</td>";
              $nilai = $row['nilai'];
              $hnil = $nilai * 5;
              $hhnil = $hnil / 100;
              $hhnill = ceil($hhnil);
              $aa = "<i class='icon-star'></i>";
              echo "<td>";
              for ($i = 1; $i <= $hhnill; $i++){
                echo $aa;
              }
            echo number_format($hhnil,1);
            
            echo"</td></tr>";
            }
            ?>

          </tbody>
        </table>
        </div>
</div>

      
      <!-- foo -->
      <?php
        include ("foo.php");
      ?>
      <!-- foo -->
            