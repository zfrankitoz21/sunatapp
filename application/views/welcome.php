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
			<li><a href="#">Administración de Categorías</a></li>
			<li><a href="#">Administración de Destacadas</a></li>
			<li><a href="#">Administración de Items</a></li>
			<li><a href="#">Administración de Empresas</a></li>
                        <li><a href="#">Prueba</a></li>
                        <li><a href="#">Prueba2</a></li>
                        <li><a href="#">Prueba3</a></li>
		</ul>
	</div>

	<h1> Reglas del Negocio </h1>
	<table>
		<tr><td>1. Cada item tiene 1 o más departamentos.</td></tr>
		<tr><td>2. Cada item puede ser destacado.</td></tr>
		<tr><td>3. Cada item pertenece a una empresa.</td></tr>
	</table>

</body>
</html>