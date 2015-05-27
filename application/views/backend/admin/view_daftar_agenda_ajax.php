<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daftar Agenda
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
	       
			<a id="show-list-agenda" href="javascript:void(0)">Lihat Semua</a> |
			<a id="show-form-tambah-agenda" href="javascript:void(0)">Tambah Agenda</a> |
			<a id="show-form-cari-agenda" href="javascript:void(0)">Cari Agenda</a>
			<br /><br />
			<div id="view-form">
			</div>
			<br/>
			<div id="view-list-agenda">
			</div>
		</section><!-- /.content -->
      </div><!-- /.content-wrapper -->



<script type="text/javascript">
$(document).ready(function(){
	// menampilkan semua list agenda saat pertama kali halaman utama diload
	$("#view-list-agenda").load('<?php echo site_url('ajaxsample/lihat_agenda');?>');
	// menampilkan semua list ketika menu lihat agenda ditekan
	$("#show-list-agenda").click(function(){
		$("#view-form").empty();
		$("#view-list-agenda").load('<?php echo site_url('ajaxsample/lihat_agenda');?>');
	});
	// menampilkan form tambah agenda
	$("#show-form-tambah-agenda").click(function(){
		$("#view-form").load('<?php echo site_url('ajaxsample/tambah_agenda');?>');
	});
	// menampilkan form cari agenda
	$("#show-form-cari-agenda").click(function(){
		$("#view-form").load('<?php echo site_url('ajaxsample/cari_agenda');?>');
	});
});
</script>
