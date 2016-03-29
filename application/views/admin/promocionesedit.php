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
				<h2><a href="<?=base_url()?>/index.php/promocion">Regresar a Promociones</a></h2>
			</div>

		<?php $data = @$data[0]; ?>
		<hr>

		<?php if ( $data )
			echo form_open_multipart('promocion/edit/' . $data->id);
		else
			echo form_open_multipart('promocion/add');
		?>
			<table class="table table-bordered table-striped">
				<tr>
					<td>Título : </td><td><input size="50" type="text" name="titulo" value="<?=@$data->titulo?>"></td>
				</tr>
				<tr>
					<td>Bajada : </td><td><input size="50" type="text" name="bajada" value="<?=@$data->bajada?>"></td>
				</tr>
				<tr>
					<td>Descuento : </td><td><input size="5" type="text" name="descuento" value="<?=@$data->descuento?>"></td>
				</tr>
				<tr>
					<td>Descripción : </td><td><textarea rows="6" cols="80" name="descripcion"><?=@$data->descripcion?></textarea></td>
				</tr>
				<tr>
					<td>Restriccion : </td><td><textarea rows="6" cols="80" name="restriccion"><?=@$data->restriccion?></textarea></td>
				</tr>
				<tr>
					<td>Direccciones y Teléfonos : </td><td><textarea rows="6" cols="80" name="direcciones"><?=@$data->direcciones?></textarea></td>
				</tr>
				<tr>
					<td>Nuevo : </td><td><input type="checkbox" value="1" name="nuevo" <?=(@$data->nuevo)?' checked': ''?>></td>
				</tr>
				<tr>
					<td>Categoría : </td>
					<td>
						<select name="categoriaid">
							<?php foreach ( $categorias as $key => $value ) { ?>
								<option <?=(@$data->categoriaid==$value->id?' selected':'')?> value="<?=$value->id?>"><?=$value->categoria?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Empresa : </td>
					<td>
						<select name="empresaid">
							<?php foreach ( $empresas as $key => $value ) { ?>
								<option <?=(@$data->empresaid==$value->id?' selected':'')?> value="<?=$value->id?>"><?=$value->empresa?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Provincias :</td>
					<td>
						<select multiple name="provincias[]">
							<?php foreach ( $provincias as $key => $value ) { ?>
								<option <?=(@$datap[$value->id])?' selected':''?> value="<?=$value->id?>"><?=$value->nombre?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<?php if ( @$data->id ) { ?>
				<tr>
					<td>Enviar a Destacadas de :</td>
					<td>
						<select multiple name="destacadas[]">
							<?php foreach ( $provincias as $key => $value ) { ?>
								<option <?=(@$datad[$value->id])?' selected':''?> value="<?=$value->id?>"><?=$value->nombre?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<?php } ?>
				<tr>
					<td>Imagen : </td><td><input type="file" name="imagen" size="20"></td>
				</tr>
				<tr>
					<td><input type="submit" value="<?=(@$data? 'Editar' : 'Crear')?>"></td>
				</tr>
			</table>

			<?php if ( @$data->imagen ) { ?>
				<input type="hidden" name="imagenh" value="<?=$data->imagen?>">
				<img src="<?=base_url()?>uploads/promociones/<?=$data->nombre?>"><br>
			<?php } ?>
			
		</div>
	</div>

</body>
</html>