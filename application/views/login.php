<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" class="pannel-toolbar">
<head>
	<meta charset="utf-8">
	<title>SUNAT INTRANET</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css">
	<link rel="stylesheet" href="<?=base_url()?>css/font-awesome.min.css">
</head>
<body>

	<div id="container">
		<header>
			<div class="header-inner">
			   <h1>Bienvenidos al administrador de contenido SUNAT</h1>
			</div>
		</header>
		<div class="right-list-admin">
			<ul class="list-menu">
				<li><a href="#"><i class="fa fa-ticket"></i> Administración de Promociones</a></li>
				<li><a href="#"><i class="fa fa-star"></i> Administración de Destacadas</a></li>
				<li><a href="#"><i class="fa fa-clone"></i> Administración de Categorías</a></li>
				<li><a href="#"><i class="fa fa-suitcase"></i> Administración de Empresas</a></li>
				<li><a href="#"><i class="fa fa-cubes"></i> Administración de Provincias</a></li>
			</ul>
		</div>

	    <div class="right-content">
	    	<div class="list-mod-panel">
	    		<h2><a href="<?=base_url()?>">Visitar Sitio</a></h2>
	    	</div>

<?php if (isset($message_display)) {
echo $message_display;
} ?>
	    		<?php echo form_open('admin/set_session'); ?>
				<div class='error_msg'>
					<?php echo validation_errors(); ?>
				</div>
				<?php echo form_label('Usuario :');?>
				<input type="text" name="session_value" /><br>
				<?php echo form_label('Contraseña :');?>
				<input type="password" name="session_pass" /><br>
				<input type="submit" value="Iniciar Sesión" id='set_button'/>
				<?php echo form_close(); ?>
		</div>
	</div>

</body>
</html>