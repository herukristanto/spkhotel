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
						<?php
						
							//echo $n;
						?>
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
												Tabel Informasi Kriteria
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
</div>
<!--edit ng kne-->
								<table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
									<thead>
										<tr role="row">
										  <th>Kriteria</th><th>Sub Kriteria</th><th>Bobot</th><th>Normalisasi</th></tr>
									</thead>

									
								<tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
											<td rowspan="4" class="hidden-480 "><strong>Harga</strong></td>
                                            <td class="hidden-480 ">< 200.000</td>
											<td rowspan="4" class="td-actions "><strong>40%</strong></td>
                                            <td rowspan="4" class="td-actions "><strong>0.4%</strong></td>
                                           
										</tr><tr class="even">
											<td class="td-actions "><span class="hidden-480 ">200.000 - 500.000</span></td>
                                           
                                            
										</tr><tr class="odd">
											<td class="td-actions "><span class="hidden-480 ">500.000 - 1000.000</span></td>
                                            </tr><tr class="even">
											<td class="td-actions "><span class="hidden-480 "> >1000.000 </span></td>
                                            
                                            
                                  </tr>
                                  <td rowspan="4" class="hidden-480 "><strong>Lokasi</strong></td>
                                            <td class="hidden-480 "> < 1 km </td>
											<td rowspan="4" class="td-actions "><strong>30%</strong></td>
                                            <td rowspan="4" class="td-actions "><strong>0.3%</strong></td>
                                           
										</tr><tr class="even">
											<td class="td-actions "><span class="hidden-480 ">3 km - 4 km</span></td>
                                           
                                            
										</tr><tr class="odd">
											<td class="td-actions "><span class="hidden-480 ">5 km - 10 km</span></td>
                                            </tr><tr class="even">
											<td class="td-actions "><span class="hidden-480 "> > 10 km</span></td>
                                            </tr>



                                  <td rowspan="4" class="hidden-480 "><strong>Fasilitas</strong></td>
                                            <td class="hidden-480 ">TV, AC, Wifi,</td>
											<td rowspan="4" class="td-actions "><strong>20%</strong></td>
                                            <td rowspan="4" class="td-actions "><strong>0.2%</strong></td>
                                           
										</tr><tr class="even">
											<td class="td-actions "><span class="hidden-480 ">Kamar Mandi, Telephone,</span></td>
										</tr><tr class="odd">
											<td class="td-actions "><span class="hidden-480 ">Loby, Restorant, Aula Pertemuan,</span></td>
                                            </tr><tr class="even">
											<td class="td-actions "><span class="hidden-480 ">Kolam Renang, Tempat Fitnes</span></td>
                                            </tr>

                                     <td rowspan="4" class="hidden-480 "><strong>Jenis Hotel</strong></td>
                                            <td class="hidden-480 ">Berbintang</td>
											<td rowspan="4" class="td-actions "><strong>10%</strong></td>
                                            <td rowspan="4" class="td-actions "><strong>0.1%</strong></td>
                                           
										</tr><tr class="even">
											<td class="td-actions "><span class="hidden-480 ">Melati</span></td>
										</tr><tr class="odd">
                                            </tr><tr class="even">
                                            </tr>

                                  
                                           
                                            
										</tr><tr class="odd">
											
                                  </tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="sample-table-2_info"></div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"></div></div></div></div>
                          
                          
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
