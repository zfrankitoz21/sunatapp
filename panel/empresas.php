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
		<h2><a href="">Visitar Sitio</a></h2>

		<h2><a href="">Añadir Empresa</a></h2>
	</div>

	<table cellspacing="14" class="table table-bordered table-striped">
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

	</div>

	</div>

</body>
</html>