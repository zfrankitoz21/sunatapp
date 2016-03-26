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
			<li><a href="<?=current_url()?>/categorias">Administración de Categorías</a></li>
			<li><a href="#">Administración de Destacadas</a></li>
			<li><a href="#">Administración de Items</a></li>
			<li><a href="#">Administración de Empresas</a></li>
		</ul>
	</div>

	<h2><a href="<?=base_url()?>">Visitar Sitio</a></h2>
	<h3><a href="<?=base_url()?>index.php/admin/categorias">Regresar a Categorías</a></h2>

	<?php $data = $data[0]; ?>
	<hr>
	<form method="post" action="<?=base_url()?>index.php/admin/categoriasedit/<?=$data->id?>" enctype="multipart/form-data">
		Nombre : <input type="text" name="categoria" value="<?=$data->categoria?>"><br>
		Color : <input type="text" name="color" value="<?=$data->color?>"><br>
		Imagen : <input type="file" name="imagen"><br>
		<input type="submit" value="Editar">
	</form>

</body>
</html>