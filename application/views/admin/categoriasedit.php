<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SUNAT INTRANET</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css">
</head>
<body>

	<div id="container">
		<h1>Bienvenidos al administrador de contenido SUNAT</h1>
		<ul>
			<li><a href="<?=base_url()?>index.php/categorias">Administración de Categorías</a></li>
			<li><a href="#">Administración de Destacadas</a></li>
			<li><a href="#">Administración de Items</a></li>
			<li><a href="#">Administración de Empresas</a></li>
		</ul>
	</div>

	<h2><a href="<?=base_url()?>">Visitar Sitio</a></h2>
	<h3><a href="<?=base_url()?>index.php/categorias">Regresar a Categorías</a></h2>

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

</body>
</html>