<!-- search -->
         <div class="container">
          <div class="row">
             <div class="col-12 kotak">
         <div style="background-color:#1CC69C;" class="card text-white kotak">
          <div class="card-header text-center">Cari Hotel</div>
            <div class="card-body">
          <div class="control-group">
            <div class="row">

              <!-- Example single danger button -->

              <div class="form-group col-3">
              <!-- <label for="exampleFormControlSelect1">Harga</label> -->
              <form method="POST" action="searchlist.php">
                <select class="form-control" id="exampleFormControlSelect1" name="harga">
                  <option value="">Harga</option>
                  <option value='100000'>100.000</option>
                  <option value='200000'>200.000</option>
                  <option value='300000'>300.000</option>
                  <option value='400000'>400.000</option>
                  <option value='500000'>500.000</option>
                  <option value='600000'>600.000</option>
                  <option value='700000'>700.000</option>
                  <option value='800000'>800.000</option>
                  <option value='900000'>900.000</option>
                  <option value='1000000'>1.000.000</option>
                  <option value='2000000'> < 2.000.000</option>
                </select>
                </div>
                  
               <div class="form-group col-3">    
              <!-- <label class="control-label" for="form-field-1">Lokasi</label> -->
                <select class="form-control" name="lokasi">
                  <option value="">Lokasi</option>
                  <option value='1'>1 km</option>
                  <option value='2'>2 km</option>
                  <option value='3'>3 km</option>
                  <option value='4'>4 km</option>
                  <option value='5'>5 km</option>
                  <option value='6'>6 km</option>
                  <option value='7'>7 km</option>
                  <option value='8'>8 km</option>
                  <option value='9'>9 km</option>
                  <option value="10">10 km</option>
                </select>
              </div>

               <div class="form-group col-3">
              <!-- <label class="control-label" for="form-field-1">Jenis Hotel</label> -->
                <select class="form-control" name="jenis_hotel">
                  <option value="">Jenis Hotel</option>
                  <option value='berbintang'>Berbintang</option>
                  <option value='melati'>Melati</option>
                </select>
              </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <button type="submit" name="submit" class="btn btn-dark col-2">Cari Hotel</button>
                

                </div>
              </div>
            </div>
          </div>
        </div></div></div>
        <br>
                <!-- search -->