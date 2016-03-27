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
				<li><a href="<?=current_url()?>/promocion"><i class="fa fa-ticket"></i> Administración de Promociones</a></li>
			</ul>
		</div>


	    <div class="right-content">	
	        <div class="list-mod-panel">
				<h2><a href="<?=base_url()?>">Visitar Sitio</a></h2>
				<h2><a href="<?=base_url()?>/index.php/categorias">Regresar a Categorías</a></h2>
			</div>

		<?php $data = @$data[0]; ?>
		<hr>

		<?php if ( $data )
			echo form_open_multipart('categorias/edit/' . $data->id);
		else
			echo form_open_multipart('categorias/add');
		?>
			<table>
				<tr>
					<td>Nombre : </td><td><input type="text" name="categoria" value="<?=@$data->categoria?>"></td>
				</tr>
				<tr>
					<td>Color : </td><td><input type="text" name="color" value="<?=@$data->color?>"></td>
				</tr>
				<tr>
					<td>Imagen : </td><td><input type="file" name="userfile" size="20"></td>
				</tr>
				<tr>
					<td><input type="submit" value="<?=(@$data? 'Editar' : 'Crear')?>"></td>
				</tr>
			</table>
			<?php if ( @$data->imagen ) { ?>
				<input type="hidden" name="imagen" value="<?=$data->imagen?>">
				<img width="30" height="30" src="<?=base_url()?>uploads/<?=$data->nombre?>"><br>
			<?php } ?>
			
		</div>
	</div>

</body>
</html>