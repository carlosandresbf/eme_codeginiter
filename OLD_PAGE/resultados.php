<!DOCTYPE html>

<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="assets/css/jquery.slider.min.css" type="text/css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
	<title>EME Propiedad Raiz - Ventas y Arriendos en Medellín, Colombia</title>
</head>


<body class="page-search" id="page-top">
	<!-- Preloader -->
	<div id="page-preloader">
		<div class="loader-ring"></div>
		<div class="loader-ring2"></div>
	</div>
	<!-- End Preloader -->

    <!-- boton down -->
    <script src='http://code.jquery.com/jquery-1.10.2.min.js' type='text/javascript'></script>
    <script type="text/javascript">
        $(document).ready(function(){
          
            $(window).scroll(function(){
                if ($(this).scrollTop() < 100) {
                    $('.boton_down').fadeIn();
                } else {
                    $('.boton_down').fadeOut();
                }
            });

            $('.boton_down').click(function(){
                $("html, body").animate({ scrollTop: 600 }, 600);
                return false;
            });

        });
    </script>
    <div class="boton_down"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
    <!-- end boton down -->

	<!-- Wrapper -->
	<div class="wrapper">
		<!-- Start Header -->
		<div id="header"></div>
		<!-- End Header -->
		
       <?php include "botones.php" ?>
		
        <!-- Page Content -->
        <div id="page-content-search">
			<div class="wide_container_2">
				<div class="tabs colored_tabs">
                	<ul class="tab-links tabs_usados col-lg-12 col-md-12">
						<li class="col-md-3 col-xs-3 active"><a href="#tab_a">Inmuebles</a></li>
						<li class="col-md-3 col-xs-3"><a href="#tab_b">Pago y consulta de cuentas</a></li>
						<li class="col-md-3 col-xs-3"><a href="#tab_c">Proceso y documentos</a></li>
						<li class="col-md-3 col-xs-3"><a href="#tab_d">Consigna tu inmueble</a></li>
					</ul>
                    <div class="clearfix" style="background-color:#16C6E9"></div>
					<div class="tab-content" style="height:auto">
						<div id="tab_a" class="tab active">
	                       <div class="container">
                                <div class="wide_container_2">
                                        <div class="tabs">
                                            <header class="col-md-12 col-xs-12 no-pad">
                                                <div class="col-sm-12 col-xs-12">
                                                    <input type="number" class="form-control" placeholder="Buscar por  código" min="30" max="999998" style="border-bottom:solid 1px #ccc">
                                                </div>
                                                
                                                <div class="col-sm-2 col-xs-2">
                                                    <select class="selection">
                                                        <option>Ciudad</option>
                                                        <option>Calí</option>
                                                        <option>Bogotá</option>
                                                        <option>Medellín</option>
                                                        <option>Santa Marta</option>
                                                    </select>
                                                </div>
                                                <div class="select-block select-multiple col-sm-2 col-xs-2">
                                                    <div data-value="Tipo" class="item item-barrio">Barrio</div>
                                                    <!-- <select id="selection_multiple" class="selection" multiple> -->
                                                        <!-- <option>Barrio</option> -->
                                                        <!-- <option>Ciudad Jardin</option>
                                                        <option>El Ingenio</option>
                                                        <option>Granada</option>
                                                        <option>Versalles</option>
                                                    </select> -->
                                                    <input type="text" id="input-tags" class="input-tags demo-default" value="Ciudad Jardin,El Ingenio,Granada,Versalles" placeholder="Barrio">
                                                </div>
                                                <div class="select-block col-sm-2 col-xs-2 ">
                                                    <select class="selection">
                                                        <option>Tipo</option>
                                                        <option>Casa</option>
                                                        <option>Apartamento</option>
                                                        <option>Finca</option>
                                                        <option>Lote</option>
                                                        <option>Oficina</option>
                                                    </select>
                                                </div>
                                                
                                                <!-- <div class="select-block col-sm-2 col-xs-2 ">
                                                    <input type="text" class="form-control pad_input" placeholder="Área en mt2">
                                                </div> -->
                                                <div class="select-block col-md-3 col-xs-4">
                                                    <a class="options-button" id="toggle-link">Otros filtros</a>
                                                </div>
                                                
                                                <!-- OTROS FILTROS -->
                                                <div class="options-overlay col-md-offset-4 col-sm-offset-5 col-sm-7" id="hidden_content" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-md-8 col-xs-8 top-mrg">
                                                            <div class="internal-container features">
                                                                <div class="form-group col-md-6">
                                                                    <label>Habitaciones</label>
                                                                    <select class="form-control">
                                                                        <option>0</option>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>+10</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Baños</label>
                                                                    <select class="form-control">
                                                                        <option>0</option>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>+10</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Parqueaderos</label>
                                                                    <select class="form-control">
                                                                        <option>0</option>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>+10</option>
                                                                    </select>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <hr>
                                                                <div class="form-group col-md-6">
                                                                    <label>Área minima de mt2</label>
                                                                    <input type="number" class="form-control" placeholder="Ej. 100" min="30" max="999998">
                                                                </div>  
                                                                <div class="form-group col-md-6">
                                                                    <label>Área máxima de mt2</label>
                                                                    <input type="number" class="form-control" placeholder="Ej. 100" min="30" max="999998">
                                                                </div>                                      
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 top-mrg">
                                                            <div class="internal-container features">
                                                                <label>Características</label>
                                                                <section class="block">
                                                                    <section>
                                                                        <ul class="submit-features">
                                                                            <li><div class="checkbox"><label><input type="checkbox">Zona infantil</label></div></li>
                                                                            <li><div class="checkbox"><label><input type="checkbox">Balcones</label></div></li>
                                                                            <li><div class="checkbox"><label><input type="checkbox">BBQ</label></div></li>
                                                                            <li><div class="checkbox"><label><input type="checkbox">Piscina</label></div></li>
                                                                        </ul>
                                                                    </section>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                    
                    
                                                <div class="select-block col-md-3 col-xs-4 last">
                                                    <div class="ffs-bs item-price" style="margin:15px auto;">
                                                        <a href="#" id="doFilter" class="btn btn-default btn-small">Filtrar <i class="fa fa-filter"></i></a>
                                                    </div>
                                                </div>
                                            </header><!-- end header -->
                                            
                                            <div class="clearfix"></div>
                                            <!-- tab-links -->
                                            <div class="tab-content">
                                                <div id="tab2" class="tab" style="display:block">
                                                <img src="assets/img/014.jpg" class="banner">
                                                    <div class="col-xs-12 content_2">
                                                        <div class="col-md-10 col-md-offset-1">
                                                            <!-- Range slider -->
                                                            <div class="explore_grid">
                                                                <div class="row">
                                                                    
                                                                    <div class="col-xs-12">
                                                                        <h2>Inmuebles usados para la venta</h2>
                                                                    </div>
                                                                    <form method="post">
                                                                        <div class="col-md-2 col-sm-3">
                                                                            <div class="form-inline">
                                                                                <label class="top-indent">Rango precio</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-sm-7">
                                                                            <div class="form-group">
                                                                                
                                                                                
                                                                         <div class="price-range price-range-wrapper">
                                                                                <input class="price-input" type="text" name="price" value="0;500000">
                                                                            </div>
                                                                
                    
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="select-block no-border pull-right col-sm-2 col-xs-12">
                                                                            <select class="selection">
                                                                                <option>Ordenar por:</option>
                                                                                <option>Mayor precio</option>
                                                                                <option>Menor precio</option>
                                                                                <option>Fecha de publicación</option>
                                                                            </select>
                                                                        </div>	<!-- select-block -->
                                                                    </form>
                                                                </div><!-- row -->
                                                            </div>
                                                            <!-- End Range slider -->
                                                            <div class="wide-2 proyectos_interna">
                    
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                    
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                    
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                    
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="propiedades.php" class="image_house img-info" style="background-image:url(assets/img/010.jpg)">
                                                                                
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span>Área : 100 mt<sup>2</sup></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Ciudad</div><div class="right">Medellín</div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right">Poblado</div>
                                                                                </div>    
                                                                            </div>
                                                                            <!-- <div class="info_agente">
                                                                                Agente encargado<br>
                                                                                <span>Rodrigo Romero C</span>
                                                                            </div> -->
                                                                            <div class="compare boton-compare" data-compare-state="empty">
                                                                                <span class="plus-add">Comparar</span>
                                                                                <p class="fav-text"></p>
                                                                            </div>
                                                                            <a href="comparar.php" class="btn btn-primary link-compare">Comparar</a>
                                                                            <div class="house_price">Valor : $104.000.00</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                    
                                                            </div>
                                                            <!-- content_2 -->
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                                                            <nav class="site-navigation paging-navigation navbar">
                                                                <div class="nav-previous"><a href="#">Pagina anterior</a></div>
                                                                <ul class="pagination pagination-lg">
                                                                    <li><a href="#">1</a></li>
                                                                    <li><span class="active">2</span></li>
                                                                    <li><a href="#">3</a></li>
                                                                    <li><span class="nav-dots">...</span></li>
                                                                    <li><a href="#">5</a></li>
                                                                </ul>
                                                                <div class="nav-next"><a href="#">Pagina Siguiente</a></div>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- tab-content -->
                                        </div><!-- tabs -->
                                    </div>
							</div>
						</div>
                        
                        
                        <!-- FIN TAB A -->
                        
						<div id="tab_b" class="tab">
							<div class="container2 clearfix">
                                <div class="col-md-6">
                                     <h3>EME Propiedad Raiz</h3>
                                    <hr><br>
                                    <h4>Sede Poblado</h4>
                                    57-4) 444 84 99 Mall<br>
                                    Campestre Drive Inn / Local 215<br>
                                    Calle 16A Sur # 32B - 38<br>
                                    Medellin, Colombia</p>
                                    <br>
                                    
                                      <h4>Sede Laureles</h4>
                                        (57-4) 444 8499 opción 2<br>
                                        Circular 76 # 73 B - 27<br>
                                        Medellin, Colombia</p>
                                </div>
                                <div class="col-md-6">
                                        <form id="form-submit" class="form-submit clearfix" action="thank_you_page.html">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Identificación::</label>
                                                    <input id="input-name" type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Contraseña:</label>
                                                    <input id="input-email" type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="submit">
                                                <span class="ffs-bs"><button type="submit" class="btn btn-large btn-primary" style="color:#fff;">Ingresar</button></span>
                                            </div>
                                        </form>
                                        <a class="bt_link" href="#">Olvidé mi contraseña</a>
                                        <a class="bt_link" href="#">Crear contraseña</a>
                                </div>
                            </div>
						</div>
                       
                        <div id="tab_c" class="tab">
                            <div class="container2 clearfix">
                                <div class="row" style="padding-bottom:50px">
                                    <h2>Documentos y Formularios</h2>
                                    <p>&nbsp;</p>
                                    <hr>
                                    <div class="col-md-5">
                                    	<h4>Proceso y documentos</h4>
                                   	  <p>Nuestro equipo humano ofrecerá toda la experiencia y agilidad, así como seguridad para realizar su consignación de propiedades.</p>
                                      <p>Pronto estaremos en contacto con usted para brindarle con calidad humana todo el acompañamiento que se requiera para satisfacer su necesidad.</p>
                                    </div>
                                    <div class="col-md-7">
                                        <a class="doc_link clearfix" target="_blank" href="documento.pdf">
                                        		<div class="name_doc">
                                                	Nombre del archivo
                                                    <div class="date">20 de Agosto de 2015 </div>
                                        		</div>
                                                <div class="icons_link">
                                                	<i data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descripción del documento" class="fa fa-info-circle" aria-hidden="true"></i>
                                        			<i class="fa fa-download" aria-hidden="true"></i>
                                                </div>
                                        </a>
                                        <a class="doc_link clearfix" target="_blank" href="documento.pdf">
                                        		<div class="name_doc">
                                                	Nombre del archivo
                                                    <div class="date">20 de Agosto de 2015 </div>
                                        		</div>
                                                <div class="icons_link">
                                                	<i data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descripción del documento" class="fa fa-info-circle" aria-hidden="true"></i>
                                        			<i class="fa fa-download" aria-hidden="true"></i>
                                                </div>
                                        </a>
                                        <a class="doc_link clearfix" target="_blank" href="documento.pdf">
                                        		<div class="name_doc">
                                                	Nombre del archivo
                                                    <div class="date">20 de Agosto de 2015 </div>
                                        		</div>
                                                <div class="icons_link">
                                                	<i data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descripción del documento" class="fa fa-info-circle" aria-hidden="true"></i>
                                        			<i class="fa fa-download" aria-hidden="true"></i>
                                                </div>
                                        </a>
                                        <a class="doc_link clearfix" target="_blank" href="documento.pdf">
                                        		<div class="name_doc">
                                                	Nombre del archivo
                                                    <div class="date">20 de Agosto de 2015 </div>
                                        		</div>
                                                <div class="icons_link">
                                                	<i data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descripción del documento" class="fa fa-info-circle" aria-hidden="true"></i>
                                        			<i class="fa fa-download" aria-hidden="true"></i>
                                                </div>
                                        </a>
                                        <a class="doc_link clearfix" target="_blank" href="documento.pdf">
                                        		<div class="name_doc">
                                                	Nombre del archivo
                                                    <div class="date">20 de Agosto de 2015 </div>
                                        		</div>
                                                <div class="icons_link">
                                                	<i data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descripción del documento" class="fa fa-info-circle" aria-hidden="true"></i>
                                        			<i class="fa fa-download" aria-hidden="true"></i>
                                                </div>
                                        </a>
                                	</div>
                                </div>
                            </div>
                        </div>


 						<div id="tab_d" class="tab">
							<div class="container2 clearfix">
                                <div class="row" style="padding-bottom:50px">
                                    <h2>Consigna tu inmueble</h2>
                                    <p>&nbsp;</p>
                                    <hr>
                                    <div class="col-md-5">
                                      <h4>Proceso y documentos</h4>
                                   	  <p>Nuestro equipo humano ofrecerá toda la experiencia y agilidad, así como seguridad para realizar su consignación de propiedades.</p>
                                      <p>Pronto estaremos en contacto con usted para brindarle con calidad humana todo el acompañamiento que se requiera para satisfacer su necesidad.</p>
                                    </div>
                                    <div class="col-md-7">
                                        <form id="form-submit" class="form-submit clearfix" action="thank_you_page.html">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Nombre:</label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>E-mail:</label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Teléfono(s):</label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                            
                                            <h3 style="margin-left:10px">Información del inmueble:</h3>
                                            
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <select name="Tipo" class="selectize-input tipo_select">
                                                        <option value="Apartamento">Apartamento</option>
                                                        <option value="Casa">Casa</option>
                                                        <option value="Local">Local Comercial</option>
                                                        <option value="Bodega">Bodega</option>
                                                        <option value="Finca">Finca</option>
                                                        <option value="Lote">Lote</option>
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Barrio / Sector:</label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Dirección:</label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Comodidades:</label>
                                                    <textarea rows="8" class="textareas"></textarea>
                                                </div>
                                            </div>
                                             <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Valor oferta:</label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                            Por favor ingrese los datos personales y del inmueble
                                            <div class="submit">
                                                <span class="ffs-bs"><button type="submit" class="btn btn-large btn-primary" style="color:#fff;">Enviar</button></span>
                                            </div>
                                        </form>
                                	</div>
                                </div>
                            </div>
                        </div>                       
					</div>
				</div>
			</div>
			
		</div>
        
		<!-- Start Footer -->
		<div id="footer"></div>
		<!-- End Footer -->
	</div>
	
	<!-- Modal login, register, custom gallery -->
	<div id="login-modal-open"></div>
	<div id="register-modal-open"></div>
	<div class="custom-galery">
		<input class="no-icheck gal" type="checkbox" id="op">
		<div class="lower"></div>
		<div class="overlay overlay-hugeinc">
			<label for="op"></label>
			<nav>
				<!-- Owl carousel -->
				<div class="owl-carousel owl-theme carousel-full-width owl-demo-3">
					<div class="item" style="background-image: url(http://placehold.it/950X800);"></div>
					<div class="item" style="background-image: url(http://placehold.it/800X650);"></div>
				</div>
				<!-- End Owl carousel -->
			</nav>
		</div>
	</div>

	<!-- End Modal login, register, custom gallery -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=places"></script>
	<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="assets/js/infobox.js"></script>
	<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="assets/js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
	<script type="text/javascript" src="assets/js/selectize.min.js"></script>
	<script type="text/javascript" src="assets/js/tmpl.js"></script>
	<script type="text/javascript" src="assets/js/icheck.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.dependClass-0.1.js"></script>
	<script type="text/javascript" src="assets/js/draggable-0.1.js"></script>
	<script type="text/javascript" src="assets/js/markerwithlabel_packed.js"></script>
	<script type="text/javascript" src="assets/js/jquery.slider.js"></script>

	<script type="text/javascript" src="assets/js/custom-map.js"></script>
	<script type="text/javascript" src="assets/js/custom.js"></script>

	<script>
		// coordinates for current location
		var _latitude = 40.717857;
		var _longitude = -73.995042;
		createHomepageGoogleMap(_latitude,_longitude);
	</script>
    <script type="text/javascript">          
        $('.input-tags').selectize({
            plugins: ['remove_button'],
            delimiter: ',',
            persist: false,
            items: null,
            create: function(input) {
                return {
                    value: input,
                    text: input
                }
            },
            render: {
                item: function(data, escape) {
                    return '<div>' + escape(data.text) + '</div>';
                }
            }
        });
    </script>

<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->
</body>
</html>

