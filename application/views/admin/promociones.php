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
				<li><a class="active" href="<?=base_url()?>/index.php/promocion"><i class="fa fa-ticket"></i> Administración de Promociones</a></li>
				<li><a href="<?=base_url()?>index.php/destacadas"><i class="fa fa-star"></i> Administración de Destacadas</a></li>
				<li><a href="<?=base_url()?>index.php/categorias"><i class="fa fa-clone"></i> Administración de Categorías</a></li>
				<li><a href="<?=base_url()?>index.php/empresas"><i class="fa fa-suitcase"></i> Administración de Empresas</a></li>
				<li><a href="<?=base_url()?>index.php/provincias"><i class="fa fa-cubes"></i> Administración de Provincias</a></li>
			</ul>
		</div>

		<div class="right-content">	
			<div class="list-mod-panel">
				<h2><a href="<?=base_url()?>">Visitar Sitio</a></h2>
				<h2><a href="<?=current_url()?>/form">Añadir Promoción</a></h2>
			</div>

			<form id="conf" method="post" action="<?=base_url()?>index.php/promocion">
				<table>
					<tr>
						<td>Seleccionar Provincia : </td>
						<td>
							<select name="provincia">
							<?php foreach ( $provincias as $key => $value ) { ?>
								<option value="<?=$value->id?>"><?=$value->nombre?></option>
							<?php } ?>
						</select>
						</td>
					</tr>
					<tr>
						<td>Seleccionar Estado : </td>
						<td><select name="estado"><option value="1">Activo</option><option value="0">Inactivo</option></select></td>
					</tr>
					<tr>
						<td><input type="submit" value="Buscar"></td>
					</tr>
				</table>
			</form>
			<hr>
			<table cellspacing="14" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th scope="col"><span>Título</span></th>
						<th scope="col"><span>Descuento</span></th>
						<th scope="col"><span>Empresa</span></th>
						<th scope="col"><span>Categoría</span></th>
						<th scope="col"><span>Nuevo</span></th>
						<th scope="col"><span>Opciones</span></th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ( $data as $row ) { ?>
					<tr <?=($row->promoid)?"style='color:red;'":''?>>
						<td><strong><?=$row->titulo?></strong></td>
						<td><?=$row->descuento?>%</td>
						<td><?=$row->empresa?></td>
						<td><?=$row->categoria?></td>
						<td><?=($row->nuevo)?'Si':'No'?></td>
						<td><a href="<?=current_url()?>/form/<?=$row->id?>"><img src="<?=base_url()?>img/editar.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=current_url()?>/delete/<?=$row->id?>"><img src="<?=base_url()?>img/eliminar.png"></a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

</body>
</html>