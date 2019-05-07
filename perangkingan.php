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
							<!--PAGE CONTENT BEGINS-->

							<!--PAGE CONTENT ENDS-->
					    
                        <div class="widget-box">
										<div class="widget-header header-color-blue">
											<h5 class="bigger lighter">
												<i class="icon-table"></i>
												Perangkingan
											</h5>

											<div class="widget-toolbar widget-toolbar-light no-border">
												<select id="simple-colorpicker-1" class="hide">
													<option selected="" data-class="blue" value="#307ECC" />#307ECC
													<option data-class="blue2" value="#5090C1" />#5090C1
													<option data-class="blue3" value="#6379AA" />#6379AA
													<option data-class="green" value="#82AF6F" />#82AF6F
													<option data-class="green2" value="#2E8965" />#2E8965
													<option data-class="green3" value="#5FBC47" />#5FBC47
													<option data-class="red" value="#E2755F" />#E2755F
													<option data-class="red2" value="#E04141" />#E04141
													<option data-class="red3" value="#D15B47" />#D15B47
													<option data-class="orange" value="#FFC657" />#FFC657
													<option data-class="purple" value="#7E6EB0" />#7E6EB0
													<option data-class="pink" value="#CE6F9E" />#CE6F9E
													<option data-class="dark" value="#404040" />#404040
													<option data-class="grey" value="#848484" />#848484
													<option data-class="default" value="#EEE" />#EEE
												</select>
											                                        
                                       
                                            </div>
										</div>

										<!-- cek -->
	

			
	
						
					
										<!-- cek -->

<!--edit ng kne-->
<div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
		
			<div id="sample-table-2">
<br>
								<form class="form-horizontal" action="perangkingan.php" method="post">
                                
                                 <div class="control-group">
									<label class="control-label" for="form-field-1">Nama Hotel</label>

									<div class="controls">
										<select name="nama">
											<option>Masukan Nama Hotel</option>
											<?php
											include("koneksi.php");

												$sql = 'SELECT * FROM tb_hotel ORDER BY nama ASC';
												$query = mysqli_query($mysqli, $sql);
												if (mysqli_num_rows($query) != 0) { ?>
													<?php while ($row = mysqli_fetch_assoc($query)) { ?>
														<option> <?php echo $row['nama'] ?></option>
													
														<?php } ?>
												<?php } ?>
												
											
											</select>
									</div>
                                    
                                    <!-- <div class="controls">
										<input type="text" name="nama" id="form-field-1" placeholder="Masukan Nama Hotel">
									</div> -->
								</div>
								                                
								<div class="control-group">
									<label class="control-label" for="form-field-1">Harga</label>

									<div class="controls">
										<select id="form-field-select-1" name="K1">
															<option value="">
															</option><option value='100'>< 200.000
															</option><option value='80'>200.000 < 500.000
															</option><option value='60'>500.000 < 1000.000
                                                            </option><option value='40'> > 1.000.000 
														</option></select>
									</div>
								</div>
                                
                                <div class="control-group">
									<label class="control-label" for="form-field-1">Lokasi</label>

									<div class="controls">
										<select id="form-field-select-1" name="K2">
															<option value="">
															</option><option value='100'> < 1 km
															</option><option value='80'>1 - 5 km
															</option><option value='60'>5 - 10 km
                                                            </option><option value='40'> > 10 km
														</option>
													</select>
													
									</div>
								</div>

								 <div class="control-group">
									<label class="control-label" for="form-field-1">Jenis Hotel</label>

									<div class="controls">
										<select id="form-field-select-1" name="K4">
															<option value="">
															</option><option value='100'>Berbintang
															</option><option value='50'>Melati
														</option></select>
                                                        
                                                        
									
                                    </div>
								</div>

								 <div class="control-group">
									<label class="control-label" for="form-field-1">Fasilitas</label>
								<div class="controls">
									<div>
										<table style="width:70%">
										<tr>
											<td>
												<label>
													<input name="jml[]" class="ace-checkbox-2" type="checkbox" value="10">
													<span class="lbl"> WiFi</span>
												</label>
											</td>
											<td>
												<label>
													<input name="jml[]" class="ace-checkbox-2" type="checkbox" value="10">
													<span class="lbl"> Swimming Pool</span>
												</label>
											</td>
											<td>
												<label>
													<input name="jml[]" class="ace-checkbox-2" type="checkbox" value="10">
													<span class="lbl"> Restaurant</span>
												</label>
											</td>
											<td>
												<label>
													<input name="jml[]" class="ace-checkbox-2" type="checkbox" value="10">
													<span class="lbl"> 24-Hour Front Desk</span>
												</label>
											</td>
											<td>
												<label>
													<input name="jml[]" class="ace-checkbox-2" type="checkbox" value="10">
													<span class="lbl"> Elevator</span>
												</label>
											</td>
										</tr>
											
												<tr>
													<td>
												<label>
													<input name="jml[]" class="ace-checkbox-2" type="checkbox" value="10">
													<span class="lbl"> Wheelchair Access</span>
												</label>
											</td>
											<td>

												<label>
													<input name="jml[]" class="ace-checkbox-2" type="checkbox" value="10">
													<span class="lbl"> Fitness Center</span>
												</label>
											</td>
											<td>
												<label>
													<input name="jml[]" class="ace-checkbox-2" type="checkbox" value="10">
													<span class="lbl"> Meeting Facilities</span>
												</label>
											</td>
											<td>
												<label>
													<input name="jml[]" class="ace-checkbox-2" type="checkbox" value="10">
													<span class="lbl"> Parking</span>
												</label>
											</td>
											<td>
												<label>
													<input name="jml[]" class="ace-checkbox-2" type="checkbox" value="10">
													<span class="lbl"> Airport Transfer</span>
												</label>
											</td>
										</tr>
												</table>
											</div>
											</div>
										</div>


                                <!-- <div class="control-group">
									<label class="control-label" for="form-field-1">Hotel Bintang</label>

									<div class="controls">
										<select id="form-field-select-1" name="K3">
															<option value="">
															</option><option value='100'>* * * *
															</option><option value='80'>* * *
															</option><option value='60'>* *
                                                            </option><option value='40'>*
														</option></select>
									</div>
								</div> -->

                               
                                
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button class="btn btn-primary" type="submit" name="Submit">Proses</button>

								</form>
							

								
								
        <?php
		$B1 = 0.4146;
		$B2 = 0.2927;
		$B3 = 0.1951;
		$B4 = 0.0976;
	if(isset($_POST['Submit'])) {
		$jml = array_sum($_POST['jml']);
		$K1 = $_POST['K1'];
		$K2 = $_POST['K2'];
		$K3 = $jml;
		$K4 = $_POST['K4'];
		$_POST['nilai'] = ($K1 * $B1) + ($K2 * $B2) + ($K3 * $B3) + ($K4 * $B4);
		// $id 			= $_POST['id'];
		$nama 			= $_POST['nama'];
		$nilai 			= $_POST['nilai'];
		include_once("koneksi.php");
		
		$result = mysqli_query($mysqli, "UPDATE tb_hotel SET nama='$nama',nilai='$nilai' WHERE nama='$nama'");
		
		echo "Perangkingan Berhasil. <a href='hasil.php'>Tampilkan Hasil</a>";
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
