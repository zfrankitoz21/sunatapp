<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" class="pannel-toolbar">
<head>
	<meta charset="utf-8">
	<title>SUNAT INTRANET</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css">
	<link rel="stylesheet" href="<?=base_url()?>css/font-awesome.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script>
		$(function(){
	    	$( "#sortable ul" ).sortable({
	        	connectWith: '#sortable ul',
	        	placeholder: 'ui-state-highlight',
	        	distance: 5,
	        	update: function(event, ui) {
		            var newOrder = $(this).sortable('toArray');//.toString();
		            //$("#result").html("Datos a enviar: order=" + newOrder + "&parent=" + id_parent + "&id=" + id_item)
					$.ajax({
		                url: 'sort',
		                data: 'order=' + newOrder,
		                type: 'POST',
		                dataType: 'json'
		            });
	        	}
	    	});
		});

		function changeProvincia(value) {
			$("#conf").submit();
		}
	</script>
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
				<li><a href="<?=base_url()?>/index.php/promocion"><i class="fa fa-ticket"></i> Administración de Promociones</a></li>
				<li><a class="active" href="<?=base_url()?>index.php/destacadas"><i class="fa fa-star"></i> Administración de Destacadas</a></li>
				<li><a href="<?=base_url()?>index.php/categorias"><i class="fa fa-clone"></i> Administración de Categorías</a></li>
				<li><a href="<?=base_url()?>index.php/empresas"><i class="fa fa-suitcase"></i> Administración de Empresas</a></li>
				<li><a href="<?=base_url()?>index.php/provincias"><i class="fa fa-cubes"></i> Administración de Provincias</a></li>
			</ul>
		</div>

		<div class="right-content">	
			<div class="list-mod-panel">
				<h2><a href="<?=base_url()?>">Visitar Sitio</a></h2>
				<!--<h2><a href="<?=current_url()?>/form">Añadir Categoría</a></h2>-->
			</div>

			<form id="conf" method="post" action="<?=base_url()?>index.php/destacadas/lista">
				<table>
					<tr>
						<td>Seleccionar provincia : </td>
						<td>
							<select id="provincia" name="provincia" onChange="changeProvincia(this.value);">
							<?php foreach ( $provincias as $key => $value ) { ?>
								<option <?=($provid==$value->id)?' selected':''?> value="<?=$value->id?>"><?=$value->nombre?></option>
							<?php } ?>
						</select>
						</td>
					</tr>
					<tr>
						<td>Items Destacados :</td>
						<td><input size="1" readonly type="text" value="<?=$ndestacadas?>"></td>
					</tr>
				</table>
			</form>
			<hr>

			<?php if ( $data ) { ?>
			<div id="sortable" style="width:20%;">
				<ul>
				<?php foreach ( $data as $row ) { ?>
					<li class="ui-state-default" id="<?=$row->id?>"><p><?=$row->titulo?></p><p><a href="<?=base_url()?>index.php/destacadas/form/<?=$row->id?>"><img src="<?=base_url()?>img/editar.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=base_url()?>index.php/destacadas/delete/<?=$row->id?>"><img src="<?=base_url()?>img/eliminar.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a title="Ver Promoción" href="<?=base_url()?>index.php/promocion/form/<?=$row->promoid?>"><img src="<?=base_url()?>img/ver.png"></a></p>
					</li>
				<?php } ?>
				</ul>
			</div>
			<div id="result">Reordenar para obtener resultados...</div>
			<?php } else { ?>
				<b>No hay destacados.</b>
			<?php } ?>
		</div>
	</div>

</body>
</html>