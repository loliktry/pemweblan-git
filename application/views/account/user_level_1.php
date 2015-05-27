<h1>Anda berhasil login :D </h1>
<hr />
Hai, <?php echo $this->session->userdata('level').' ---> '.$this->session->userdata('username');;?> :D
<br />
Selamat Datang di website coba - coba... ADMIN
<br /><br />
<a href="<?php echo site_url('login/logout'); ?>">Keluar</a>
<a href="<?php echo site_url('cetak/cetakpdf'); ?>">PDF</a>
