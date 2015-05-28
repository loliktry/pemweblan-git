
		<div class="box">
		  		<div class="box-header with-border">
                  <h3 class="box-title">Direct Chat</h3>
                  
                </div>
		  	<div class="box-body" >
			<fieldset>
				<form id="form-tambah-agenda" method="POST" action="">
					Nama : <input name="nama" id="nama" size="100"/>
					<br/><br/>
					Keterangan : <br/><textarea name="keterangan" id="keterangan" cols="50" rows="3"></textarea>
					<br/><br/>
					<input type="submit" value="Tambah" />
					<input id="btn-form-close" type="button" value="Batal" />
				</form>
			</fieldset>
			
			</div><!-- /.content -->
		</div><!-- /.content-wrapper -->



<script type="text/javascript">
	$(document).ready(function(){
		// menutup form ketika tidak akan digunakan
		$("#btn-form-close").click(function(){
			$('#view-form').html('');
		});
		// melakukan proses tambah agenda ketika tombol ditekan
		$('#form-tambah-agenda').submit(function(){
			var nama = $('#nama').val();
			var keterangan = $('#keterangan').val();
			$('#view-form').empty();

			$.ajax({
				type	:"POST",
				url 	:"<?php echo site_url('ajaxsample/proses_tambah_agenda') ?>",
				data	:$(this).serialize(),
				//data	: "nama="+nama+"&keterangan="+keterangan;
				success	:function (data) {
							$('#view-list-agenda').load("<?php echo site_url('ajaxsample/lihat_agenda') ?>");	
						},
				error	:function (data){
							$('#view-list-agenda').html('<h1>Penambahan agenda gagal !!</h1>');
						}
			});
			return false;
		});
	});
</script>