<style>
	.foto {
		width: 100%;
		height: 180px;
		margin: 5px;
	}
	.infobox {
		margin-right: 20px;
	}
</style>
<div>
	<img class="foto"  src="<?= base_url()?>aceadmin/assets/images/logo.png" alt="logo" />
</div>


<div class="space-4"></div>
<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="ace-icon fa fa-times"></i></button>
		<i class="ace-icon fa fa-check green"></i> Selamat Datang di Aplikasi Penyusunan RKAPe 
</div>


<div class="data">
		<div class="infobox infobox-red">
			<div class="infobox-icon">
				<i class="ace-icon fa fa-calendar"></i>
			</div>

			<div class="infobox-data">
		<div class="infobox-content">Tanggal Sekarang</div>
			<span class="infobox-data-number"><?php echo tanggal() ?></span>
			</div>
		</div>

	<!-- 
		<div class="infobox infobox-green">
			<div class="infobox-icon">
				<i class="ace-icon fa fa-users"></i>
			</div>

			<div class="infobox-data">
				<div class="infobox-content">Users</div>
			<span class="infobox-data-number">7</span>
			</div>
		</div> -->
	
	<!-- 	<div class="infobox infobox-green">
			
			<div class="infobox-icon">
					<i class="ace-icon fa fa-pencil-square-o"></i>
			</div>
			<div class="infobox-data">

				<div class="infobox-content">Laporan</div>
					<span class="infobox-data-number"><?php echo tahun() ?></span>
			</div>
		</div> -->
</div>


   
