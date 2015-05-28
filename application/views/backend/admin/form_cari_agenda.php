		<div class="box">
                
			<div class="box-body">
	        <fieldset>
	        	<form action="" method="POST">
	        		Nama : <input id="input-nama" type="text" name="nama" size="100"/>
	        		<input id="btn-form-close" type="button" value="Batal" />
	        	</form>
	        </fieldset>
			
			</div>
      	</div><!-- /.content-wrapper -->



<script type="text/javascript">
	// menutup form ketika tidak akan digunakan
	$("#btn-form-close").click(function(){
		$('#view-form').html('');
	});

	// melakukan proses pencarian ketika mengetikkan nama agenda
	$('#input-nama').keyup(function(){
		var nama = $('#input-nama').val();
		$.ajax({
			type:"POST",
			url:"<?php echo site_url('ajaxsample/proses_cari_agenda');?>",
			data:'nama='+nama,
			success:function(html){
				$('#view-list-agenda').html(html);
			}
		});
	});
</script>
