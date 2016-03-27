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
				<li><a class="active" href="<?=base_url()?>index.php/categorias"><i class="fa fa-clone"></i> Administración de Categorías</a></li>
				<li><a href="<?=base_url()?>index.php/empresas"><i class="fa fa-suitcase"></i> Administración de Empresas</a></li>
				<li><a href="#"><i class="fa fa-star"></i> Administración de Destacadas</a></li>
				<li><a href="<?=base_url()?>/index.php/promocion"><i class="fa fa-ticket"></i> Administración de Promociones</a></li>
			</ul>
		</div>

		<div class="right-content">	
			<div class="list-mod-panel">
				<h2><a href="<?=base_url()?>">Visitar Sitio</a></h2>
				<h2><a href="<?=current_url()?>/form">Añadir Categoría</a></h2>
			</div>

			<table cellspacing="14" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th scope="col"><span>Categoría</span></th>
						<th scope="col"><span>Color</span></th>
						<th scope="col"><span>Imagen</span></th>
						<th scope="col"><span>Opciones</span></th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ( $data as $row ) { ?>
					<tr>
						<td><strong><?=$row->categoria?></strong></td>
						<td><div style="background: <?=$row->color?>" width="30" height="30"><?=$row->color?></div></td>
						<td><?php if ( $row->imagen ) { ?> <img width="30" height="30" src="<?=base_url()?>uploads/<?=$row->nombre?>"><?php } ?></td>
						<td><a href="<?=current_url()?>/form/<?=$row->id?>"><img src="<?=base_url()?>img/editar.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=current_url()?>/delete/<?=$row->id?>"><img src="<?=base_url()?>img/eliminar.png"></a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

</body>
</html>