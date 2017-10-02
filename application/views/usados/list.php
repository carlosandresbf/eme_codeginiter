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
                                        <form method="get"  id="frmSearch"  action="<?=base_url("usados")?>">
                                       
                                            <header class="col-md-12 col-xs-12 no-pad">
                                                <div class="col-sm-12 col-xs-12">
                                                    <input name="codigo" type="number" class="form-control" placeholder="Buscar por  código" min="30" max="999998" style="border-bottom:solid 1px #ccc">
                                                </div>
                                                
                                                <?php /*?><div class="col-sm-2 col-xs-2">
                                                    <select name="ciudad" class="selection input-tags " placeholder="Ciudad">
                                                        <option>Calí</option>
                                                        <option>Bogotá</option>
                                                        <option>Medellín</option>
                                                        <option>Santa Marta</option>
                                                    </select>
                                                </div><?php */?>
                                                <div class="select-block select-multiple col-sm-3 col-xs-3">
                                                    <div data-value="Tipo" class="item item-barrio"><?php /*?>Barrio<?php */?></div>
                                                    <!-- <select id="selection_multiple" class="selection" multiple> -->
                                                        <!-- <option>Barrio</option> -->
                                                        <!-- <option>Ciudad Jardin</option>
                                                        <option>El Ingenio</option>
                                                        <option>Granada</option>
                                                        <option>Versalles</option>
                                                    </select> -->
                                                    <select name="barrio" class="selection input-tags "  placeholder="Barrio">
                                               
                                                    <?php  foreach($filtro2 as $item){?>
													<option><?=$item->IROW;?></option>
													<?php }?>
                                                    </select>
                                                </div>
                                                <div class="select-block col-sm-3 col-xs-3 ">
                                                    <select name="tipo" class="selection input-tags "  placeholder="Tipo">
                                                    <?php  foreach($filtro3 as $item){?>
													<option><?=$item->IROW;?></option>
													<?php }?>
                                               
                                                    </select>
                                                </div>
                                                
                                                <!-- <div class="select-block col-sm-2 col-xs-2 ">
                                                    <input type="text" class="form-control pad_input" placeholder="Área en mt2">
                                                </div> -->
                                                <div class="select-block col-md-3 col-xs-4">
                                                    <a class="options-button" id="toggle-link">Otros filtros</a>
                                                </div>
                                                
                                                <!-- OTROS FILTROS -->
                                                <div class="options-overlay col-md-offset-4 col-sm-offset-5 col-sm-7" id="hidden_content" style=" <?="display: none;"?>">
                                                    <div class="row">
                                                        <div class="col-md-8 col-xs-8 top-mrg">
                                                            <div class="internal-container features">
                                                                <div class="form-group col-md-6">
                                                                    <label>balcones</label>
                                                                    <select name="balcones" class="form-control">
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
                                                                    <label>Alcobas</label>
                                                                    <select name="alcobas" class="form-control">
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
                                                                    <label>Ba&ntilde;os </label>
                                                                    <select name="banosalcobas" class="form-control">
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
                                                                    <label>Garajes </label>
                                                                    <select name="garajes" class="form-control">
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
                                                                <div class="form-group col-md-12">
                                                                    <label>Área  de mt<sup>2</sup></label>
                                                                     <div class="price-range price-range-wrapper">
                                                                                <input class="area-input" type="text" name="area" value="0;9000">
                                                                            </div>
                                                                </div>  
                                                                                                     
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 top-mrg">
                                                            <div class="internal-container features">
                                                                <label>Características</label>
                                                                <section class="block">
                                                                    <section>
                                                                        <ul class="submit-features">
                                                                            <li><div class="checkbox"><label><input type="checkbox" name="biblioteca" value="si" >Biblioteca</label></div></li>
                                                                            <li><div class="checkbox"><label><input type="checkbox" name="alcobaservicio" value="si">Alcoba Servicio</label></div></li>
                                                                            <li><div class="checkbox"><label><input type="checkbox" name="banosocial" value="si">Ba&ntilde;o Social</label></div></li>
                                                                            <li><div class="checkbox"><label><input type="checkbox" name="comedorauxiliar" value="si">Comedor Auxiliar</label></div></li>
                                                                            <li><div class="checkbox"><label><input type="checkbox" name="juegosinfantiles" value="si">Juegos Infantiles</label></div></li>
                                                                            <li><div class="checkbox"><label><input type="checkbox" name="piscinas" value="si">Piscinas</label></div></li>
                                                                        </ul>
                                                                    </section>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                    
                    
                                                <div class="select-block col-md-3 col-xs-4 last">
                                                    <div class="ffs-bs item-price" style="margin:15px auto;">
                                                        <a href="#" onclick="$('#frmSearch').submit()" id="doFilter" class="btn btn-default btn-small">Filtrar <i class="fa fa-filter"></i></a>
                                                    </div>
                                                </div>
                                                
                                            </header><!-- end header -->
                                             <input type="hidden" name="order_filter" id="order_filter" value="" />
                                            </form>
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
                                                                        <div class="col-md-8 col-sm-7" style="padding-right:30px;" >
                                                                            <div class="form-group">
                                                                                
                                                                                
                                                                         <div class="price-range price-range-wrapper">
                                                                                <input class="price-input-control" type="text" name="price" value="<?=$min_price?>;<?=$max_price?>">
                                                                            </div>
                                                                
                    
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="select-block no-border pull-right col-sm-2 col-xs-12" >
                                                                            <select id="select_order_filter" placeholder="Ordenar por:"   class="selection input-tags">
                                                                                 <option value="">Ordernar por:</option>
                                                                                <option value="VAL_OFE DESC">Mayor precio</option>
                                                                                <option  value="VAL_OFE ASC">Menor precio</option>
                                                                               
                                                                            </select>
                                                                        </div>	<!-- select-block -->
                                                                    </form>
                                                                </div><!-- row -->
                                                            </div>
                                                            <!-- End Range slider -->
                                                            <div class="wide-2 proyectos_interna">
                           <?php $cnt_itms = 0;
						 $nnt=0;
					 foreach($items as $item){						 
						 $nnt++;
					    $cnt_itms++;
						
						if($nnt==1){?><div class="row"><?php }?> 
                                                                
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 prop">
                                                                        <div class="item_house">
                                                                            <a href="<?php echo base_url()?>usados/show/<?php echo url_encode($item->NRO_ETA.'_'.$item->COD_INM.'_'.$item->DES_INM)?>" class="image_house img-info  priority_img" data-imagen="<?php echo base_url().'images/imagen_usados/'.$item->NRO_ETA.'/code/'.$item->COD_INM.'/type/home/size/big'?>" >
                                                                                <div class="brand"><?php /*?><img src="assets/img/011.jpg"><?php */?></div>
                                                                                <div class="btn_ver">Ver detalle</div>
                                                                            </a>
                                                                            <div class="title_house">
                                                                                <!-- Las Palmas<br> --><span><?=$item->NOM_ETA?> <br />
<span><?=$item->SEC_BAR?></span></span>
                                                                            </div>
                                                                            <div class="info_house">
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Área</div><div class="right" style="text-transform:  lowercase;"><?=$item->ARE_CON?> mt<sup>2</sup></div>
                                                                                </div>
                                                                              
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Barrio</div><div class="right min_des_barrio" ><?= $item->DES_INM?></div>
                                                                                </div>
                                                                                <!-- <div class="item_info_house clearfix">
                                                                                    <div class="left">Mt<sup>2</sup></div><div class="right">400</div>
                                                                                </div> -->
                                                                                <div class="item_info_house clearfix">
                                                                                    <div class="left">Tipo Inmueble</div><div class="right min_des_barrio"><?= $item->OTR_TIP?></div>
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
                                                                            <div class="house_price">Valor: $<?php echo number_format($item->VAL_OFE)?></div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                  
                                                                   
	<?php if($nnt==4){?></div><?php }?>  
                                                                
                                                                
                                                                <?php }?>
                                                                
                                                                
                                                                
                                                            </div>
                                                            <!-- content_2 -->
                                                        </div>
                                                    </div>
                                                    <?php /*?><div class="col-xs-12">
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
                                                    </div><?php */?>
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
                                                    <input id="input-name" type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Contraseña:</label>
                                                    <input id="input-email" type="text" class="form-control" required>
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
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>E-mail:</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Teléfono(s):</label>
                                                    <input type="text" class="form-control" required>
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
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Dirección:</label>
                                                    <input type="text" class="form-control" required>
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
                                                    <input type="text" class="form-control" required>
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


        

        
        
        
<!--<script>
		// coordinates for current location
		var _latitude = 40.717857;
		var _longitude = -73.995042;
		createHomepageGoogleMap(_latitude,_longitude);
	</script>-->
         <script type="text/javascript">  
		 $(document).ready(function(e) {
			 
			       
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
            
        });  
		
		
		
			  $(document).ready(function(){
				 var s  = 0;
		$('.priority_img').each(function(){
			$(this).css('background-image', 'url(' + $(this).attr('data-imagen') + ')');
			s++;
			if(s==9){
			setTimeout(function(){
			$('.to_process').each(function(){
			$(this).css('background-image', 'url(' + $(this).attr('data-imagen') + ')');	
		});			
				 }, 7000);	
				}	
		});
		

$("#select_order_filter").change(function(e) {
   
   $("#order_filter").val($(this).val());
   $("#frmSearch").submit();
});
		
		
		    if( $(".price-input-control").length > 0) {
        $(".price-input-control").each(function() {
            var vSLider = $(this).slider({
                from: <?=($min_price)?$min_price:0;?>,
                to: <?=($max_price)?$max_price:9900000;?>,
                smooth: true, 
                round: 0,       
                dimension: '<div class="left">$&nbsp;</div> &nbsp;',    
					
	                
/* onstatechange*/callback : function( value ){
				    window.history.replaceState('', '', updateURLParameter(window.location.href, 'price',  $(".price-input-control").val()));
location.reload();
						
					}
            }); 
        });
		
$(".price-input-control").slider("value", <?php 
if(isset($_GET['price']) & !empty($_GET['price'])){ 
$price = explode(';', $_GET['price']);
if($price[0]){
echo $price[0];
}else {
echo '0';
}
					} else{
if($min_price){
echo $min_price;
}else{
echo '0';	
	}

} ?>, <?php 
if(isset($_GET['price']) & !empty($_GET['price'])){ 
$price = explode(';', $_GET['price']);
if(@!empty($price[1])){
	if($price[1]< $min_price ){$price[1] = $max_price;}
echo $price[1];}else{
echo '1';
	}
					} else{
if($max_price){
echo $max_price;
}else{
echo '9990000'; }

} ?>)


    }
		

				  	});
			  </script>