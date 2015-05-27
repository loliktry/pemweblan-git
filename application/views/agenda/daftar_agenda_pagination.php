<!DOCTYPE html>
<html>
<head>
<title>Daftar Hadir Praktikum</title>
</head>
<body>
<h2>Daftar Agenda</h2>
<a href="<?php echo site_url('daftarhadir/tambah_agenda');?>">Tambah Agenda</a>
<br />
<br />
<br />
<?php echo $this->pagination->create_links(); ?>
<br />
<br />
<?php foreach ($daftar_agenda as $agenda) {?>
<fieldset>
<h3><?php echo $agenda->nama;?></h3>
<a href="<?php echo site_url('daftarhadir/edit_agenda/'.$agenda->id_agenda);?>">Edit</a> |
<a href="<?php echo site_url('daftarhadir/delete_agenda/'.$agenda->id_agenda);?>">Delete</a>
<br />
<p>
<?php echo $agenda->keterangan;?>
</p>
</fieldset>
<br />
<?php } ?>
<br />
<?php echo $this->pagination->create_links(); ?>
<br />
<br />
</body>
</html>
