<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Proses Upload Berhasil !!!
            <small>ok</small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
        	<blockquote>
	        	<h3></h3>
            <ul>
            <?php foreach ($upload_data as $item => $value):?>
            <li><?php echo $item;?>: <?php echo $value;?></li>
            <?php endforeach; ?>
            </ul>
            <p><?php echo anchor('uploadsample', 'Coba lagi !'); ?></p>

    			</blockquote>

    		</section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

