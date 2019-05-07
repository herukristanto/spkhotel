<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Sistem Penunjang Keputusan - SMART</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="assets/css/marudama.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>
		<?php
			include ("atas.php");
		?>
        <!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<img src="assets/images/logo123.png">
                <!--#sidebar-shortcuts-->

<?php
	include ("menu.php");
?>
				<!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						
					</ul><!--.breadcrumb-->

					<div class="nav-search" id="nav-search">
						<form class="form-search" />
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>



	<div class="page-content">
		<div class="row-fluid">
			<div class="span12">
                <div class="widget-box">
					<div class="widget-header header-color-blue">
						<h5 class="bigger lighter">
							<i class="icon-table"></i>
							Form Input Alternatif Hotel
						</h5>
					</div>
				</div>

					<br>	
					
					<form class="form-horizontal" action="tambah_hotel.php" method="post">
						<div class="span6">
                                <div class="control-group">
									<label class="control-label" for="form-field-1">ID</label>
                                    
                                    <div class="controls">
										<input type="number" name="id" id="form-field-1" placeholder="Masukan ID Hotel">
									</div>
								</div>
                                 <div class="control-group">
									<label class="control-label" for="form-field-2">Nama Hotel</label>
                                    
                                    <div class="controls">
										<input type="text" name="nama" id="form-field-2" placeholder="Masukan Nama Hotel">
									</div>
								</div>

								<div class="row-fluid">
									<label class="control-label" for="form-field-3">Alamat</label>
										<div class="controls">
											<textarea  name="alamat" id="form-field-3" placeholder="Masukan Alamat Hotel"></textarea>
										</div>
								</div>
								<br>

								 <div class="control-group">
									<label class="control-label" for="form-field-4">Harga</label>
                                    
                                    <div class="controls">
										<input type="number" name="harga" id="form-field-4" placeholder="Masukan Harga Hotel">
									</div>
								</div>

								<!-- <div class="control-group">
									<label class="control-label" for="form-field-4">Harga</label>

									<div class="controls">
										<select id="form-field-select-4" name="harga">
												<option value=""></option>
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
                						</select>
									</div>
								</div> -->

                                <div class="control-group">
									<label class="control-label" for="form-field-5">Lokasi</label>

									<div class="controls">
										<select id="form-field-select-5" name="lokasi">
												<option value=""></option>
							                  <option value='1'>1 </option>
							                  <option value='2'>2 </option>
							                  <option value='3'>3 </option>
							                  <option value='4'>4 </option>
							                  <option value='5'>5 </option>
							                  <option value='6'>6 </option>
							                  <option value='7'>7 </option>
							                  <option value='8'>8 </option>
							                  <option value='9'>9 </option>
							                  <option value="10">10 </option>
							                </select>
							                <span>km</span>
									</div>
								</div>

								 <div class="control-group">
									<label class="control-label" for="form-field-6">Jenis Hotel</label>

									<div class="controls">
										<select id="form-field-select-6" name="jenis_hotel">
												<option value=""></option>
							                  <option value='berbintang'>Berbintang</option>
							                  <option value='melati'>Melati</option>
							                </select>
                                    </div>
								</div>

							</div>

						
						<div class="span6">
                             <div class="control-group">
									<label><b>Fasilitas</label>
								
									
												<label>
													<input name="fasilitas[]" class="ace-checkbox-2" type="checkbox" value="WiFi">
													<span class="lbl"> WiFi</span>
												</label>
											
												<label>
													<input name="fasilitas[]" class="ace-checkbox-2" type="checkbox" value="Swimming Pool">
													<span class="lbl"> Swimming Pool</span>
												</label>
											
												<label>
													<input name="fasilitas[]" class="ace-checkbox-2" type="checkbox" value="Restaurant">
													<span class="lbl"> Restaurant</span>
												</label>
										
												<label>
													<input name="fasilitas[]" class="ace-checkbox-2" type="checkbox" value="24-Hour Front Desk">
													<span class="lbl"> 24-Hour Front Desk</span>
												</label>
											
												<label>
													<input name="fasilitas[]" class="ace-checkbox-2" type="checkbox" value="Elevator">
													<span class="lbl"> Elevator</span>
												</label>
											
												<label>
													<input name="fasilitas[]" class="ace-checkbox-2" type="checkbox" value="Wheelchair Access">
													<span class="lbl"> Wheelchair Access</span>
												</label>
											

												<label>
													<input name="fasilitas[]" class="ace-checkbox-2" type="checkbox" value="Fitness Center">
													<span class="lbl"> Fitness Center</span>
												</label>
											
												<label>
													<input name="fasilitas[]" class="ace-checkbox-2" type="checkbox" value="Meeting Facilities">
													<span class="lbl"> Meeting Facilities</span>
												</label>
											
												<label>
													<input name="fasilitas[]" class="ace-checkbox-2" type="checkbox" value="Parking">
													<span class="lbl"> Parking</span>
												</label>
											
												<label>
													<input name="fasilitas[]" class="ace-checkbox-2" type="checkbox" value="Airport Transfer">
													<span class="lbl"> Airport Transfer</span>
												</label>
											
											</div>
										</div>

										<div >
								 			<button class="btn btn-primary" type="submit" name="Submit">Simpan</button>
										</div>   

										</form>
						</div>

<!-- 



								
								                                
								
                                
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;


								
 -->
								
				</div>
				
			</div>
			
	


								
        <?php
		
	if(isset($_POST['Submit'])) {
		
		
		
		$id 			= $_POST['id'];
		$nama 			= $_POST['nama'];
		$alamat			= $_POST['alamat'];
		$harga			= $_POST['harga'];
		$lokasi			= $_POST['lokasi'];
		$jenis_hotel	= $_POST['jenis_hotel'];
		$fasilitas 	= implode(', ', $_POST['fasilitas']);
		
		
		include_once("koneksi.php");
		
		$result = mysqli_query($mysqli, "INSERT INTO tb_hotel(id,nama,alamat,harga,lokasi,jenis_hotel,fasilitas) VALUES('$id','$nama','$alamat','$harga','$lokasi','$jenis_hotel','$fasilitas')");
		
		echo "Hotel added successfully. <a href='hotel.php'>View Hotel</a>";
	}
	?>

<!--/.edit ng kne-->



								</div>
                        </div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->

				
			</div><!--/.main-content-->
		</div><!--/.main-container--><!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--ace scripts-->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->
	</body>
</html>
