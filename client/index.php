<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div>
    <?php
      include ("nav.php");
    ?>
  </div>
  <br><br><br>

 

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  <img class="card-img-bottom" src="img1.jpg" alt="Card image cap">
</div>

<table">
  <thead>
    <tr>
      <th>Name</th>
        <th>Selling</th>
        <th>Location</th>
        <th>Type</th>
    </tr>
  </thead>
  <tbody>

     <?php 
      include("koneksi.php");
      $sql = 'SELECT * FROM tb_hotel order by nilai DESC LIMIT 10';
      $query = mysqli_query($mysqli, $sql);
      
      
      while ($row = mysqli_fetch_array($query))
      {
        echo "<div class='list-group'>";
        echo "<button type='button' class='list-group-item list-group-item-action'>";
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['alamat']."</td>";
        echo "<td>".$row['nilai']."</td>";
        $nilai = $row['nilai'];
        $hnil = $nilai * 5;
        $hhnil = $hnil / 100;
        $hhnill = ceil($hhnil);
        $aa = "<i class='icon-star'></i>";
        echo "<div class=''num'><td class='center'>";
          for ($i = 1; $i <= $hhnill; $i++){
            echo $aa;
          }
          echo $hhnil;
        "</td></div></tr></div>";
      echo "</button>";
      }
      ?>
                    
                  </tbody>
                </table>
          



<div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active">
    Cras justo odio
  </button>
  <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
  <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
  <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
  <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
</div>s






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>