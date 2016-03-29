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
				<h1 style="float: left;">Bienvenidos al administrador de contenido SUNAT</h1>
				<p style="float: right;">Bienvenido <em>Admin</em>, <a href="<?=base_url()?>index.php/admin/unset_session">Cerrar Sesión</a></p>
			</div>
		</header>
		<div class="right-list-admin">
			<ul class="list-menu">
				<li><a href="<?=base_url()?>/index.php/promocion"><i class="fa fa-ticket"></i> Administración de Promociones</a></li>
				<li><a class="active" href="<?=base_url()?>index.php/destacadas"><i class="fa fa-star"></i> Administración de Destacadas</a></li>
				<li><a href="<?=base_url()?>index.php/categorias"><i class="fa fa-clone"></i> Administración de Categorías</a></li>
				<li><a href="<?=base_url()?>index.php/empresas"><i class="fa fa-suitcase"></i> Administración de Empresas</a></li>
				<li><a href="<?=base_url()?>index.php/provincias"><i class="fa fa-cubes"></i> Administración de Provincias</a></li>
			</ul>
		</div>


	    <div class="right-content">	
	        <div class="list-mod-panel">
				<h2><a href="<?=base_url()?>">Visitar Sitio</a></h2>
				<h2><a href="<?=base_url()?>/index.php/destacadas">Regresar a Destacadas</a></h2>
			</div>

		<?php $data = @$data[0]; ?>
		<hr>

		<?=form_open_multipart('destacadas/edit/' . $data->id);	?>
		
			Imagen : <input type="file" name="imagen" size="20">
			<br><br><input type="submit" value="Cargar Imagen">
			<?php if ( @$data->imagen ) { ?>
				<input type="hidden" name="imagen" value="<?=$data->imagen?>"><hr>
				<img src="<?=base_url()?>uploads/destacadas/<?=$data->nombre?>"><br>
			<?php } ?>
		</div>
	</div>

</body>
</html>