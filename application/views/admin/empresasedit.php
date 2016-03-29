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
				<li><a href="<?=base_url()?>/index.php/promocion"><i class="fa fa-ticket"></i> Administración de Promociones</a></li>
				<li><a href="<?=base_url()?>index.php/destacadas"><i class="fa fa-star"></i> Administración de Destacadas</a></li>
				<li><a href="<?=base_url()?>index.php/categorias"><i class="fa fa-clone"></i> Administración de Categorías</a></li>
				<li><a class="active" href="<?=base_url()?>index.php/empresas"><i class="fa fa-suitcase"></i> Administración de Empresas</a></li>
				<li><a href="<?=base_url()?>index.php/provincias"><i class="fa fa-cubes"></i> Administración de Provincias</a></li>
			</ul>
		</div>


	    <div class="right-content">	
	        <div class="list-mod-panel">
				<h2><a href="<?=base_url()?>">Visitar Sitio</a></h2>
				<h2><a href="<?=base_url()?>/index.php/empresas">Regresar a Empresas</a></h2>
			</div>

			<?php $data = @$data[0]; ?>
			<hr>

			<?php if ( $data )
				echo form_open_multipart('empresas/edit/' . $data->id);
			else
				echo form_open_multipart('empresas/add');
			?>

			<table class="table table-bordered table-striped">
				<tr>
					<td>Nombre : </td><td><input type="text" name="empresa" value="<?=@$data->empresa?>"></td>
				</tr>
				<tr>
					<td>Icon : </td><td><input type="file" name="icon" size="20"></td>
					<?php if ( @$data->icon ) { ?>
					<td>
						<input type="hidden" name="icon" value="<?=$data->icon?>">
						<img width="30" height="30" src="<?=base_url()?>uploads/empresas/<?=$data->iconimg?>">
					</td>
					<?php } ?>
				</tr>
				<tr>
					<td>Logo : </td><td><input type="file" name="logo" size="20"></td>
					<?php if ( @$data->logo ) { ?>
					<td>
						<input type="hidden" name="logo" value="<?=$data->logo?>">
						<img width="100" height="30" src="<?=base_url()?>uploads/empresas/<?=$data->logoimg?>">
					</td>
			<?php } ?>
				</tr>
				<tr>
					<td><input type="submit" value="<?=(@$data? 'Editar' : 'Crear')?>"></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>