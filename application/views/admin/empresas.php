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
			<li><a href="<?=base_url()?>index.php/empresas">Administración de Empresas</a></li>
			<li><a href="#">Administración de Destacadas</a></li>
			<li><a href="#">Administración de Items</a></li>
			<li><a href="#">Administración de Empresas</a></li>
			<li><a href="<?=current_url()?>/promocion">Administración de Promociones</a></li>
		</ul>
	</div>

	<h2><a href="<?=base_url()?>">Visitar Sitio</a></h2>

	<h2><a href="<?=current_url()?>/form">Añadir Empresa</a></h2>

	<table cellspacing="14">
		<thead>
			<tr>
				<th scope="col"><span>Empresa</span></th>
				<th scope="col"><span>Imagen</span></th>
				<th scope="col"><span>Opciones</span></th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ( $data as $row ) { ?>
			<tr>
				<td><strong><?=$row->empresa?></strong></td>
				<td><img width="30" height="30" src="<?=base_url()?>uploads/empresas/<?=$row->nombre?>"></td>
				<td><a href="<?=current_url()?>/form/<?=$row->id?>">Editar</a> | <a href="<?=current_url()?>/delete/<?=$row->id?>">Eliminar</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>