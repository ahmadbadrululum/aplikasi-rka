
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>RKAPE</title>

	<meta name="description" content="Static &amp; Dynamic Tables" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="<?= base_url()?>aceadmin/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= base_url()?>aceadmin/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->

	<!-- text fonts -->
	<link rel="stylesheet" href="<?= base_url()?>aceadmin/assets/css/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="<?= base_url()?>aceadmin/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?= base_url()?>aceadmin/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
			<![endif]-->
			<link rel="stylesheet" href="<?= base_url()?>aceadmin/assets/css/ace-skins.min.css" />
			<link rel="stylesheet" href="<?= base_url()?>aceadmin/assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?= base_url()?>aceadmin/assets/css/ace-ie.min.css" />
		  <![endif]-->

		  <!-- inline styles related to this page -->

		  <!-- ace settings handler -->
		  <script src="<?= base_url()?>aceadmin/assets/js/ace-extra.min.js"></script>
		  <link rel='stylesheet' href="<?= base_url('assets/css/datepicker3.css') ?>" type='text/css'>

		  <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		  <!--[if lte IE 8]> -->
		  <!-- script src="<?= base_url()?>aceadmin/assets/js/html5shiv.min.js"></script>
		  <script src="<?= base_url()?>aceadmin/assets/js/respond.min.js"></script -->
		  	<!--[endif]-->

		  	<style>
		  		.table>tbody>tr>td{
		  			vertical-align: middle;

		  		}
		  	</style>
		  </head>

		  <body class="no-skin">
		  	<div id="navbar" class="navbar navbar-default ace-save-state">
		  		<div class="navbar-container ace-save-state" id="navbar-container">
		  			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
		  				<span class="sr-only">Toggle sidebar</span>

		  				<span class="icon-bar"></span>

		  				<span class="icon-bar"></span>

		  				<span class="icon-bar"></span>
		  			</button>

		  			<div class="navbar-header pull-left">
		  				<a href="<?= base_url('index.php/dashboard/') ?>" class="navbar-brand">
		  					<small>
		  						<i class="fa fa-leaf"></i>
		  						RKAPE
		  					</small>
		  				</a>
		  			</div>

		  			<div class="navbar-buttons navbar-header pull-right" role="navigation">
		  				<ul class="nav ace-nav">
		  					<li class=" dropdown-modal">
		  						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
		  							<!-- <img class="nav-user-photo" src="<?= base_url()?>aceadmin/assets/images/avatars/user.jpg" alt="Jason's Photo" /> -->
		  							<span class="user-info">
		  								<small>WELCOME</small>
		  								USER
		  							</span>
		  							<i class="ace-icon fa fa-caret-down"></i>
		  						</a>

		  						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
		  							<li>
		  								<a href="<?= base_url('index.php/auth/logout/') ?>">
		  									<i class="ace-icon fa fa-power-off"></i>
		  									Logout
		  								</a>
		  							</li>
		  						</ul>
		  					</li>
		  				</ul>
		  			</div>
		  		</div>
		  		<!--================== /.navbar-container -->
		  	</div>

		  	<div class="main-container ace-save-state" id="main-container">
		  		<script type="text/javascript">
		  			try{ace.settings.loadState('main-container')}catch(e){}
		  		</script>

		  		<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
		  			<script type="text/javascript">
		  				try{ace.settings.loadState('sidebar')}catch(e){}
		  			</script>


		  			<ul class="nav nav-list">
		  				<li class="">
		  					<a href="<?= base_url('index.php/dashboard'); ?>">
		  						<i class="menu-icon fa fa-tachometer"></i>
		  						<span class="menu-text"> Dashboard </span>
		  					</a>
		  					<b class="arrow"></b>
		  				</li>

		  				<li class="">
		  					<a href="<?= base_url('index.php/divisi'); ?>">
		  						<i class="menu-icon fa fa-list"></i>
		  						<span class="menu-text"> Data Divisi </span>
		  					</a>
		  					<b class="arrow"></b>

		  				</li>

		  				<li class="">
		  					<a href="#" class="dropdown-toggle">
		  						<i class="menu-icon fa fa-list"></i>
		  						<span class="menu-text"> Data Program </span>

		  						<b class="arrow fa fa-angle-down"></b>
		  					</a>

		  					<b class="arrow"></b>

		  					<ul class="submenu">
		  						<li class="">
		  							<a href="<?= base_url('index.php/suboutput'); ?>">
		  								<i class="menu-icon fa fa-caret-right"></i>
		  								SubOutput
		  							</a>

		  							<b class="arrow"></b>
		  						</li>
		  						<li class="">
		  							<a href="<?= base_url('index.php/komponen'); ?>">
		  								<i class="menu-icon fa fa-caret-right"></i>
		  								Komponen
		  							</a>

		  							<b class="arrow"></b>
		  						</li>

		  						<li class="">
		  							<a href="<?= base_url('index.php/subkomponen'); ?>">
		  								<i class="menu-icon fa fa-caret-right"></i>
		  								Subkomponen
		  							</a>

		  							<b class="arrow"></b>
		  						</li>
		  					</ul>
		  				</li>

		  				<li class="">
		  					<a href="<?= base_url('index.php/r_bulan/rincian'); ?>">
		  						<i class="menu-icon fa fa-pencil-square-o"></i>
		  						<span class="menu-text"> Rincian Anggaran </span>
		  					</a
		  					<b class="arrow"></b>
		  				</li>

		  				<li class="">
		  					<a href="<?= base_url('index.php/r_bulan/rekap'); ?>">
		  						<i class="menu-icon fa fa-pencil-square-o"></i>
		  						<span class="menu-text"> Rekapitulasi </span>
		  					</a>
		  					<b class="arrow"></b>
		  				</li>

<!-- 
						<li class="">
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-pencil-square-o"></i>
								<span class="menu-text"> Data Master </span>

								<b class="arrow fa fa-angle-down"></b>
							</a>

							<b class="arrow"></b>

							<?php 
							$ci =&get_instance();
							$ci->load->model('Model_divisi');
							$datadivisi = $ci->Model_divisi->tampilkan_data(); 
							?>

							<ul class="submenu">
								<?php foreach ($datadivisi->result() as $key) { ?>
								<li class="">
									<a href="<?= base_url('index.php/r_bulan/tampilkan_divisi/'.$key->id_divisi)  ?>">
										<i class="menu-icon fa fa-caret-right"></i>
										<?= $key->deskripsi;?>
									</a>

									<b class="arrow"></b>
								</li>
								<?php  } ?>

							</ul>
						</li> -->

						<li class="">
							<a href="<?= base_url('index.php/user/') ?>">
								<i class="menu-icon fa fa-users"></i>
								<span class="menu-text"> Users </span>
							</a>

							<b class="arrow"></b>
						</li>

						
						<!-- ====================== /.nav-list -->

						<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
							<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
						</div>
					</div>

					<div class="main-content">
						<!-- 
						<div class="breadcrumbs ace-save-state" id="breadcrumbs">
							<ul class="breadcrumb">
								<li>
									<i class="ace-icon fa fa-home home-icon"></i>
									<a href="#"><?= $judul ?></a>
								</li>
								<li class="active"><?= $subjudul ?></li>
							</ul>
						</div> -->

						<div class="main-content-inner">
							<div class="page-content">
								<?= $contents; ?>
							</div><!-- /.page-content -->
						</div>
					</div><!-- /.main-content -->

					<div class="footer">
						<div class="footer-inner">
							<div class="footer-content">
								<span class="bigger-120">
									<span class="blue bolder"></span>
									RKAPE &copy; 2017-2018
								</span>
							</div>
						</div>
					</div>

					<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
						<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
					</a>
				</div><!-- /.main-container -->

				<!-- basic scripts -->

				<!--[if !IE]> -->
				<script src="<?= base_url()?>aceadmin/assets/js/jquery-2.1.4.min.js"></script>

				<!-- <![endif]-->

			<!--[if IE]>
			<script src="<?= base_url()?>aceadmin/assets/js/jquery-1.11.3.min.js"></script>
			<![endif]-->
			<script type="text/javascript">
				if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
			</script>
			<script src="<?= base_url('assets/js/tether.min.js')?>"></script>
			<script src="<?= base_url()?>aceadmin/assets/js/bootstrap.min.js"></script>

			<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="<?= base_url()?>aceadmin/assets/js/excanvas.min.js"></script>
		  <![endif]-->
		  <script src="<?= base_url()?>aceadmin/assets/js/jquery-ui.custom.min.js"></script>
		  <script src="<?= base_url()?>aceadmin/assets/js/jquery.ui.touch-punch.min.js"></script>
		  <script src="<?= base_url()?>aceadmin/assets/js/jquery.easypiechart.min.js"></script>
		  <script src="<?= base_url()?>aceadmin/assets/js/jquery.sparkline.index.min.js"></script>
		  <script src="<?= base_url()?>aceadmin/assets/js/jquery.flot.min.js"></script>
		  <script src="<?= base_url()?>aceadmin/assets/js/jquery.flot.pie.min.js"></script>
		  <script src="<?= base_url()?>aceadmin/assets/js/jquery.flot.resize.min.js"></script>

		  <!-- ace scripts -->
		  <script src="<?= base_url()?>aceadmin/assets/js/ace-elements.min.js"></script>
		  <script src="<?= base_url()?>aceadmin/assets/js/ace.min.js"></script>
		  <script src='<?= base_url('assets/js/bootstrap-datepicker.js') ?>'></script>

		  <!-- abis -->
		  <script type="text/javascript">
		  	$('.datepicker').datepicker({
		  		format: "dd-mm-yyyy",
		  		autoclose:true
		  	});
		 //  	jQuery(function($) {
			// 	//initiate dataTables plugin
			// 	var myTable = 
			// 	$('#dynamic-table')
			// 	//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
			// 	.DataTable( {
			// 		bAutoWidth: false,
			// 		"aoColumns": [
			// 		{ "bSortable": false },
			// 		null, null,null, null, null,
			// 		{ "bSortable": false }
			// 		],
			// 		"aaSorting": [],


			// 		"bProcessing": true,
			// 		"bServerSide": true,
			// 		"sAjaxSource": "http://127.0.0.1/table.php"	,

			// 		,
			// 		"sScrollY": "200px",
			// 		"bPaginate": false,

			// 		"sScrollX": "100%",
			// 		"sScrollXInner": "120%",
			// 		"bScrollCollapse": true,
			// 		Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
			// 		you may want to wrap the table inside a "div.dataTables_borderWrap" element

			// 		"iDisplayLength": 50


			// 		select: {
			// 			style: 'multi'
			// 		}
			// 	} );



			// 	$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

			// 	new $.fn.dataTable.Buttons( myTable, {
			// 		buttons: [
			// 		{
			// 			"extend": "colvis",
			// 			"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
			// 			"className": "btn btn-white btn-primary btn-bold",
			// 			columns: ':not(:first):not(:last)'
			// 		},
			// 		{
			// 			"extend": "copy",
			// 			"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
			// 			"className": "btn btn-white btn-primary btn-bold"
			// 		},
			// 		{
			// 			"extend": "csv",
			// 			"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
			// 			"className": "btn btn-white btn-primary btn-bold"
			// 		},
			// 		{
			// 			"extend": "excel",
			// 			"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
			// 			"className": "btn btn-white btn-primary btn-bold"
			// 		},
			// 		{
			// 			"extend": "pdf",
			// 			"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
			// 			"className": "btn btn-white btn-primary btn-bold"
			// 		},
			// 		{
			// 			"extend": "print",
			// 			"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
			// 			"className": "btn btn-white btn-primary btn-bold",
			// 			autoPrint: false,
			// 			message: 'This print was produced using the Print button for DataTables'
			// 		}		  
			// 		]
			// 	} );
			// 	myTable.buttons().container().appendTo( $('.tableTools-container') );

			// 	//style the message box
			// 	var defaultCopyAction = myTable.button(1).action();
			// 	myTable.button(1).action(function (e, dt, button, config) {
			// 		defaultCopyAction(e, dt, button, config);
			// 		$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
			// 	});


			// 	var defaultColvisAction = myTable.button(0).action();
			// 	myTable.button(0).action(function (e, dt, button, config) {

			// 		defaultColvisAction(e, dt, button, config);


			// 		if($('.dt-button-collection > .dropdown-menu').length == 0) {
			// 			$('.dt-button-collection')
			// 			.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
			// 			.find('a').attr('href', '#').wrap("<li />")
			// 		}
			// 		$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
			// 	});

			// 	////

			// 	setTimeout(function() {
			// 		$($('.tableTools-container')).find('a.dt-button').each(function() {
			// 			var div = $(this).find(' > div').first();
			// 			if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
			// 			else $(this).tooltip({container: 'body', title: $(this).text()});
			// 		});
			// 	}, 500);





			// 	myTable.on( 'select', function ( e, dt, type, index ) {
			// 		if ( type === 'row' ) {
			// 			$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
			// 		}
			// 	} );
			// 	myTable.on( 'deselect', function ( e, dt, type, index ) {
			// 		if ( type === 'row' ) {
			// 			$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
			// 		}
			// 	} );




			// 	/////////////////////////////////
			// 	//table checkboxes
			// 	$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

			// 	//select/deselect all rows according to table header checkbox
			// 	$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
			// 		var th_checked = this.checked;//checkbox inside "TH" table header

			// 		$('#dynamic-table').find('tbody > tr').each(function(){
			// 			var row = this;
			// 			if(th_checked) myTable.row(row).select();
			// 			else  myTable.row(row).deselect();
			// 		});
			// 	});

			// 	//select/deselect a row when the checkbox is checked/unchecked
			// 	$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
			// 		var row = $(this).closest('tr').get(0);
			// 		if(this.checked) myTable.row(row).deselect();
			// 		else myTable.row(row).select();
			// 	});



			// 	$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
			// 		e.stopImmediatePropagation();
			// 		e.stopPropagation();
			// 		e.preventDefault();
			// 	});



			// 	//And for the first simple table, which doesn't have TableTools or dataTables
			// 	//select/deselect all rows according to table header checkbox
			// 	var active_class = 'active';
			// 	$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
			// 		var th_checked = this.checked;//checkbox inside "TH" table header

			// 		$(this).closest('table').find('tbody > tr').each(function(){
			// 			var row = this;
			// 			if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
			// 			else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
			// 		});
			// 	});

			// 	//select/deselect a row when the checkbox is checked/unchecked
			// 	$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
			// 		var $row = $(this).closest('tr');
			// 		if($row.is('.detail-row ')) return;
			// 		if(this.checked) $row.addClass(active_class);
			// 		else $row.removeClass(active_class);
			// 	});



			// 	/********************************/
			// 	//add tooltip for small view action buttons in dropdown menu
			// 	$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

			// 	//tooltip placement on right or left
			// 	function tooltip_placement(context, source) {
			// 		var $source = $(source);
			// 		var $parent = $source.closest('table')
			// 		var off1 = $parent.offset();
			// 		var w1 = $parent.width();

			// 		var off2 = $source.offset();
			// 		//var w2 = $source.width();

			// 		if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			// 		return 'left';
			// 	}




			// 	/***************/
			// 	$('.show-details-btn').on('click', function(e) {
			// 		e.preventDefault();
			// 		$(this).closest('tr').next().toggleClass('open');
			// 		$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
			// 	});
			// 	/***************/






			// 	//add horizontal scrollbars to a simple table
			// 	$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
			// 	{
			// 		horizontal: true,
			// 		styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
			// 		size: 2000,
			// 		mouseWheelLock: true
			// 	}
			// 	).css('padding-top', '12px');



			// })
		</script>
	</body>
	</html>
