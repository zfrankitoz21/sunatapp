<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sunat - Intranet</title>
	<link rel="stylesheet" href="<?=base_url()?>css/styles.css">
	<!--[if lt IE 9]>
		<script type="text/javascript" src="<?=base_url()?>js/modernizr.js"></script>
   <![endif]-->

   <script>

   </script>

</head>
<body>
<header>
	<div class="header-inner">
	    <div class="line-top"><div class="line-min-top"></div></div>
		<div class="content header-main">
			<div class="logo">
				<h1><a href="#" ><img src="<?=base_url()?>img/logo.png" alt=""></a></h1>
				<span class="text-logo">
					INGRESAs<br>
					IMPRIME<br>
					DISFRUTA<br>
				</span>
			</div>

			<div class="box-header-opt pull-right">

				<div class="clearfix">
				   

					<div class="search-options">
					    <ul class="list-menu-sect">
					        <li>
					        	<a href="#"><i class="icon-home"></i> HOME</a>
					        </li>
					        <li>
					        	<a href="#"><i class="icon-call"></i> FAQ</a>
					        </li>
					    </ul>
						<form action="#" method="post">
							<div class="search-control">
								<input class="search-text" type="text" placeholder="Promociones y beneficios">
								<button><i class="icon-search"></i></button>
							</div>
						</form>
					</div>

					 <div class="zonal-option">
				    	<form id="provincias" method="post" action="">
				    	    <div class="title-zonal">Selecciona tu provincia</div>
		                    <div class="ui-dropdown" onclick="sn.dropdown(this, event)">
		                        <input type="hidden" name="pid">
		                        <div class="ui-caption">
		                            <span><?=(@$_POST['pid'])?> <b class="btext">¡NUEVO!</b></span>
		                        </div>
		                        <ul class="ui-list">
		                            <li><a data-value="Lima" href="#">LIMA <b class="btext">¡NUEVO!</b></a></li>
		                            <li><a data-value="Huancayo" href="#">HUANCAYO</a></li>
		                            <li><a data-value="Cuzco" href="#">CUZCO</a></li>
		                        </ul>
		                    </div>
		                </form>
				    </div>

				</div>
			</div>
		    

			
		</div>
		<div class="line-bottom">
			<div class="content">
				¡BIENVENIDO(a) A TU PROGRAMA DE BENEFICIOS CONTIGO SUNAT! - 18 DE MARZO DEL 2016
			</div>
		</div>
	</div>
</header>

<div class="content main-content">
	<div class="ui-orbit orbit-home" data-interval="5000">
		<div class="ui-content">
			<div class="ui-inner">
				<div class="ui-item">
				   <a href="#">
					    <div class="name-promo"><div class="title-promo">Profilaxis y Fluorización</div><div class="description-promo">Evaluación gratuita</div></div>
						<div class="disc"><div class="ficha"><div class="porcentaje">50%</div><span class="calp">Calidad de Vida</span></div></div>
						<img src="<?=base_url()?>tmp/big_img.jpg" alt="">
				   </a>
				</div>
				<div class="ui-item">
				   <a href="#">
					    <div class="name-promo"><div class="title-promo">Profilaxis y Fluorización</div><div class="description-promo">Evaluación gratuita</div></div>
						<div class="disc"><div class="ficha"><div class="porcentaje">50%</div><span class="calp">Calidad de Vida</span></div></div>
						<img src="<?=base_url()?>tmp/big_img.jpg" alt="">
				   </a>
				</div>
				<div class="ui-item">
				   <a href="#">
					    <div class="name-promo"><div class="title-promo">Profilaxis y Fluorización</div><div class="description-promo">Evaluación gratuita</div></div>
						<div class="disc"><div class="ficha"><div class="porcentaje">50%</div><span class="calp">Calidad de Vida</span></div></div>
						<img src="<?=base_url()?>tmp/big_img.jpg" alt="">
				   </a>
				</div>
			</div>
		</div>
		<ul class="ui-pager"></ul>
		<div class="ui-arrows hide"><a href="" class="ui-prev"></a><a href="" class="ui-next"></a></div>
	</div>

	<div class="wrap-promos clearfix">
	    <div class="content-categories">
	       <ul class="list-categories">
		        <li class="item-category cat-entretenimiento">
		       	  <a style="color: #0063a7;" href="<?=base_url()?>index.php/welcome/entretenimiento"><i class="entretenimiento"></i> Entretenimiento</a>
		        </li>
		        <li class="item-category cat-belleza">
		       	  <a href="#"><i class="belleza"></i> Belleza y Salud</a>
		        </li>
		        <li class="item-category cat-gastronomia">
		       	  <a href="#"><i class="gastronomia"></i> Gastronomia</a>
		        </li>
		        <li class="item-category cat-familia">
		       	  <a href="#"><i class="familia"></i> En Familia</a>
		        </li>
		        <li class="item-category cat-educacion">
		       	  <a href="#"><i class="educacion"></i> Educación</a>
		        </li>
		        <li class="item-category cat-detalles">
		       	  <a href="#"><i class="detalles"></i> Detalles y Obsequios</a>
		        </li>
		        <li class="item-category cat-tiempo">
		       	  <a href="#"><i class="tiempo"></i> Tiempo libre / Viajes</a>
		        </li>
	       </ul>
	    	
	    </div>
		<div class="list-promos">
		   <div class="list-promos-inner">
		        <div id="block-promos">

	                <div class="row-promos clearfix">
				   	    <div class="item-promo category-entretenimiento">
				   	   	   <div class="item-inner">
				   	   	   	   <div class="header-promo">
				   	   	   	   	    <div class="title-promo"><a href="#">Profilaxis y Fluorización</a></div>
				   	   	   	   	    <div class="sub-title">Evaluación gratuita</div>
				   	   	   	   	    <div class="new">¡NUEVOS!</div>
				   	   	   	   </div>
				   	   	   	   <figure>
				   	   	   	   	<a href="<?=base_url()?>index.php/promocion"><img src="<?=base_url()?>tmp/thumb_promo.jpg" alt=""></a>
				   	   	   	   </figure>
				   	   	   	   <div class="footer-promo">
				   	   	   	        <div class="percent">
					   	   	   	   	   <div class="percent-m"><span>20</span> <i>%</i> </div>
					   	   	   	   	   <div class="min">Descto</div>
				   	   	   	   	   </div>
				   	   	   	   	   <div class="link-content"><a href="#" class="link"> Ver promociones</a></div>
				   	   	   	   	   <a href="#" class="icon-empresa"><img src="<?=base_url()?>tmp/min_icon.jpg" alt=""></a>
				   	   	   	   </div>
				   	   	   </div>
				   	    </div>

				   	    <div class="item-promo category-belleza">
				   	   	   <div class="item-inner">
				   	   	   	   <div class="header-promo">
				   	   	   	   	    <div class="title-promo"><a href="#">Profilaxis y Fluorización</a></div>
				   	   	   	   	    <div class="sub-title">Evaluación gratuita</div>
				   	   	   	   </div>
				   	   	   	   <figure>
				   	   	   	   	<a href="<?=base_url()?>index.php/promocion"><img src="<?=base_url()?>tmp/thumb_promo.jpg" alt=""></a>
				   	   	   	   </figure>
				   	   	   	   <div class="footer-promo">
				   	   	   	        <div class="percent">
					   	   	   	   	   <div class="percent-m"><span>20</span> <i>%</i> </div>
					   	   	   	   	   <div class="min">Descto</div>
				   	   	   	   	   </div>
				   	   	   	   	   <div class="link-content"><a href="#" class="link"> Ver promociones</a></div>
				   	   	   	   	   <a href="#" class="icon-empresa"><img src="<?=base_url()?>tmp/min_icon.jpg" alt=""></a>
				   	   	   	   </div>
				   	   	   </div>
				   	    </div>

				   	    <div class="item-promo category-educacion">
				   	   	   <div class="item-inner">
				   	   	   	   <div class="header-promo">
				   	   	   	   	    <div class="title-promo"><a href="#">Profilaxis y Fluorización</a></div>
				   	   	   	   	    <div class="sub-title">Evaluación gratuita</div>
				   	   	   	   </div>
				   	   	   	   <figure>
				   	   	   	   	<a href="<?=base_url()?>index.php/promocion"><img src="<?=base_url()?>tmp/thumb_promo.jpg" alt=""></a>
				   	   	   	   </figure>
				   	   	   	   <div class="footer-promo">
				   	   	   	        <div class="percent">
					   	   	   	   	   <div class="percent-m"><span>20</span> <i>%</i> </div>
					   	   	   	   	   <div class="min">Descto</div>
				   	   	   	   	   </div>
				   	   	   	   	   <div class="link-content"><a href="#" class="link"> Ver promociones</a></div>
				   	   	   	   	   <a href="#" class="icon-empresa"><img src="<?=base_url()?>tmp/min_icon.jpg" alt=""></a>
				   	   	   	   </div>
				   	   	   </div>
				   	    </div>
			   	   </div>

			   	   <div class="row-promos clearfix">

				   	    <div class="item-promo category-familia">
				   	   	   <div class="item-inner">
				   	   	   	   <div class="header-promo">
				   	   	   	   	    <div class="title-promo"><a href="#">Profilaxis y Fluorización</a></div>
				   	   	   	   	    <div class="sub-title">Evaluación gratuita</div>
				   	   	   	   </div>
				   	   	   	   <figure>
				   	   	   	   	<a href="<?=base_url()?>index.php/promocion"><img src="<?=base_url()?>tmp/thumb_promo.jpg" alt=""></a>
				   	   	   	   </figure>
				   	   	   	   <div class="footer-promo">
				   	   	   	        <div class="percent">
					   	   	   	   	   <div class="percent-m"><span>20</span> <i>%</i> </div>
					   	   	   	   	   <div class="min">Descto</div>
				   	   	   	   	   </div>
				   	   	   	   	   <div class="link-content"><a href="#" class="link"> Ver promociones</a></div>
				   	   	   	   	   <a href="#" class="icon-empresa"><img src="<?=base_url()?>tmp/min_icon.jpg" alt=""></a>
				   	   	   	   </div>
				   	   	   </div>
				   	    </div>

				   	    <div class="item-promo category-gastronomia">
				   	   	   <div class="item-inner">
				   	   	   	   <div class="header-promo">
				   	   	   	   	    <div class="title-promo"><a href="#">Profilaxis y Fluorización</a></div>
				   	   	   	   	    <div class="sub-title">Evaluación gratuita</div>
				   	   	   	   </div>
				   	   	   	   <figure>
				   	   	   	   	<a href="<?=base_url()?>index.php/promocion"><img src="<?=base_url()?>tmp/thumb_promo.jpg" alt=""></a>
				   	   	   	   </figure>
				   	   	   	   <div class="footer-promo">
				   	   	   	        <div class="percent">
					   	   	   	   	   <div class="percent-m"><span>20</span> <i>%</i> </div>
					   	   	   	   	   <div class="min">Descto</div>
				   	   	   	   	   </div>
				   	   	   	   	   <div class="link-content"><a href="#" class="link"> Ver promociones</a></div>
				   	   	   	   	   <a href="#" class="icon-empresa"><img src="<?=base_url()?>tmp/min_icon.jpg" alt=""></a>
				   	   	   	   </div>
				   	   	   </div>
				   	    </div>

				   	    <div class="item-promo category-detalles">
				   	   	   <div class="item-inner">
				   	   	   	   <div class="header-promo">
				   	   	   	   	    <div class="title-promo"><a href="#">Profilaxis y Fluorización</a></div>
				   	   	   	   	    <div class="sub-title">Evaluación gratuita</div>
				   	   	   	   </div>
				   	   	   	   <figure>
				   	   	   	   	<a href="<?=base_url()?>index.php/promocion"><img src="<?=base_url()?>tmp/thumb_promo.jpg" alt=""></a>
				   	   	   	   </figure>
				   	   	   	   <div class="footer-promo">
				   	   	   	        <div class="percent">
					   	   	   	   	   <div class="percent-m"><span>20</span> <i>%</i> </div>
					   	   	   	   	   <div class="min">Descto</div>
				   	   	   	   	   </div>
				   	   	   	   	   <div class="link-content"><a href="#" class="link"> Ver promociones</a></div>
				   	   	   	   	   <a href="#" class="icon-empresa"><img src="<?=base_url()?>tmp/min_icon.jpg" alt=""></a>
				   	   	   	   </div>
				   	   	   </div>
				   	    </div>
			   	   </div>

		   	   </div>

		   	   <a href="#" class="btn-more" onclick="sn.more(this, event)" data-url="<?=base_url()?>tmp/promociones.json" data-target="#block-promos">VER MÁS</a>

		   	 



		   </div>
		</div>
	</div>
</div>

<footer>
    <div class="content">
        <div class="logo-footer">
		   	 <a href="#"><img src="<?=base_url()?>img/logo_sunat.png" alt=""></a>
		</div>
	</div>
	<div class="footer-line">
	     <div class="line-min-bottom"></div>
	    <div class="content">
		 	POR QUE SOMOS IMPORTANTES - SÉ PARTE DE CONTIGO SUNAT
		</div>
	</div>
</footer>

<script src="<?=base_url()?>js/jquery.js" type="text/javascript"></script>	
<script src="<?=base_url()?>js/core.js" type="text/javascript"></script>
</body>
</html>