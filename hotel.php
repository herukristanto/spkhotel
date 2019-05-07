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

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
    color: orange;
}
</style>

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
					<ul></ul>
						<div class="text-right">
							<a href="tambah_hotel.php">
								<button class="btn btn-primary text-right">
									Tambah Data
								</button>
							</a>
						</div>
					<ul></ul>
				</div>

				<div class="page-content">
					<div class="row-fluid">
						<div class="span12">
                        	<div class="widget-box">
								<div class="widget-header header-color-blue">
									<h5 class="bigger lighter">
										<i class="icon-table"></i>Hasil Alternatif
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
			<tr role="row" >
				<th>ID</th>
				<th class="center">Nama Hotel</th>
				<th class="center">Alamat</th>
				<th class="center">Rating</th>
				
				
			</tr>
		</thead>
		<tbody role="alert" aria-live="polite" aria-relevant="all"><tr>
	 	<?php 
	 		include_once("koneksi.php");
	 		$sql = 'SELECT id, nama, alamat, nilai FROM tb_hotel';
			$query = mysqli_query($mysqli, $sql);
			
			
	 		while ($row = mysqli_fetch_array($query))
			{
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['nama']."</td>";
				echo "<td>".$row['alamat']."</td>";
				$nilai = $row['nilai'];
				$hnil = $nilai * 5;
				$hhnil = $hnil / 100;
				$hhnill = ceil($hhnil);
				$aa = "<span class='fa fa-star checked'></span>";
				echo "<td class='center'>";
					for ($i = 1; $i <= $hhnill; $i++){
						echo $aa;
					}
					echo $hhnil;
				"</td>";
			}
			?>
    	</tbody>
    </table>
    <div class="row-fluid">
    	<div class="span6">
    		<div class="dataTables_info" id="sample-table-2_info">
    			
    		</div>
    	</div>
    	<div class="span6">
    		<div class="dataTables_paginate paging_bootstrap pagination">
    			
    		</div>
    	</div>
    </div>
</div>
<!--/.edit ng kne-->



			

		
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
