<!--?php
defined('BASEPATH') OR exit('No direct script access allowed');
?--><!DOCTYPE html>
<html lang="en" class="pannel-toolbar">
<head>
	<meta charset="utf-8">
	<title>SUNAT INTRANET</title>
	<link rel="stylesheet" href="css/admin.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
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
			<li><a href=""><i class="fa fa-clone"></i> Administración de Categorías</a></li>
			<li><a href=""><i class="fa fa-suitcase"></i> Administración de Empresas</a></li>
			<li><a href="#"><i class="fa fa-star"></i> Administración de Destacadas</a></li>
			<li><a href="#"><i class="fa fa-cubes"></i> Administración de Items</a></li>
			<li><a href="#"><i class="fa fa-suitcase"></i> Administración de Empresas</a></li>
			<li><a href=""><i class="fa fa-ticket"></i> Administración de Promociones</a></li>
		</ul>
	</div>
	
     <div class="right-content">
	     <div class="list-mod-panel">
			<h2><a href=""><i class="fa fa-external-link"></i> Visitar Sitio</a></h2>
			<h2><a href=""><i class="fa fa-arrow-circle-left"></i> Regresar a Categorías</a></h2>
		</div>
	

	<?php $data = @$data[0]; ?>
	<hr>

	<?php if ( $data )
		echo form_open_multipart('categorias/edit/' . $data->id);
	else
		echo form_open_multipart('categorias/add');
	?>
		Nombre : <input type="text" name="categoria" value="<?=@$data->categoria?>"><br>
		Color : <input type="text" name="color" value="<?=@$data->color?>"><br>
		Imagen : <input type="file" name="userfile" size="20"><br>
		<?php if ( @$data->imagen ) { ?>
			<input type="hidden" name="imagen" value="<?=$data->imagen?>">
			<img width="30" height="30" src="<?=base_url()?>uploads/<?=$data->nombre?>"><br>
		<?php } ?>
		<input type="submit" value="<?=(@$data? 'Editar' : 'Crear')?>">

   </div>

   </div>

</body>
</html>