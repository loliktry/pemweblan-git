<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Upload File 
            <small>Maju mundur cantik</small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
        	<blockquote>
	        	<?php echo $error;?>
    				<?php echo form_open_multipart('uploadsample/proses_uploadxx');?>
    				Judul: <br>
    				<input type="text" name="judul" size = "30" /> <br/><br/>
    				Upload Filenya : <br /><br />
    				<input type="file" name="userfile" size="20" />
    				<br /><br />
    				<input type="submit" value="upload" />
    				</form>
    			</blockquote>

		    </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

