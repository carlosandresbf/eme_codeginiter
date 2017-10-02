  <style type="text/css">
	.tabs .tab-links a{
		display:block;
		color:#fff !important;
		height:66px;
		line-height:66px;
	}
	.tabs .tab-links li:hover a {
		color:#16C6E4 !important;
	}
	.tabs .tab-links .active a {
		color:#16C6E4 !important;
 	}
	</style>
    <script type="text/javascript">
        $(document).ready(function(){
			
/*			$( ".tab-links" ).on( "click", "#tc", function() {
				  if($("#tc").attr('data-is-loaded') == 'false'){
			$.ajax({
					url: "<? echo base_url('proyectos/async_load_module_avances/') ?>",				
					data: {'project': '<?php echo $projects_new[0]->CODIGO?>'},
					type: 'POST',
					success: function(data) {
						$("#tab_c").fadeOut(function() {
							$(this).html(data).slideDown();
														});
					$("#tc").attr('data-is-loaded','true');
											},
					dataType: "html"});
											}

												});*/

			
										
          
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    $('.logo-proyecto').addClass('logo-proyecto-fix');
                } else {
                    $('.logo-proyecto').removeClass('logo-proyecto-fix');
                }
            });

        });
    </script>

	<div id="page-property-content">
			<div class="wide_container_3">
				<div class="tabs colored_tabs">
                	<ul class="tab-links col-lg-12 col-md-12">
						<li class="col-md-2 col-xs-4"><a id="ta" data-is-loaded="true" href="#tab_a">Presentación</a></li>
						<li class="col-md-2 col-xs-4"><a id="tb"  data-is-loaded="false" href="#tab_b">Ubicación</a></li>
						<li class="col-md-2 col-xs-4"><a id="tc" data-is-loaded="false" href="#tab_c">Avances</a></li>
						<li class="col-md-2 col-xs-4"><a id="td" data-is-loaded="false" href="#tab_d">Contacto</a></li>
						<li class="col-md-2 col-xs-4"><a id="te" data-is-loaded="false" href="#tab_e">Estado de cuenta</a></li>
						<li class="col-md-2 col-xs-4"><a id="tf" data-is-loaded="false" href="#tab_f">Documentos</a></li>
					</ul>
                    <div class="clearfix" style="background-color:#16C6E9"></div>
					<div class="tab-content" style="height:auto">
						<div id="tab_a" class="tab active">
                        
                        
                       

                            <div class="logo-proyecto"><img src="<?php echo base_url().'images/imagen_proyecto/'.$projects_new[0]->CODIGO.'/type/l'?>"></div>
	                            
                            <div id="owl-demo-3" class="owl-carousel owl-theme">
                           <?php foreach($banners as $item){?> 
                     	<div class="item">
									<div class="image" style="background: url(<?php echo base_url().'images/imagen_banner_proyecto_code/'.$item->COD_OBR.'/code/'.$item->COD_DOC.'/size/big'?>)  center"></div>
								</div>
                                <?php  }?>
							</div>
                            
                            <div class="wide-2 clearfix">
                                <div class="container">
                                    <div class="row">
                                        <aside class="pr-summary col-md-4 col-xs-12">
                                            <form action="agent_profile.html">
                                                <div class="picker-block col-md-12 col-sm-6 col-xs-12">
                                                    <div class="row">
                                                        <div class=" col-xs-12">
                                                        
                                                            <h5 class="team-color">Desde:</h5>
                                                            <h2><?php echo ($projects_new[0]->PRECIO)?></h2>

                                                             <h2 class="h2">Sala de ventas</h2>
                                                            
                                                              
                                                            <div class="team-info">
                                                            
                                                                <?php /*?><p><i class="fa fa-map-marker" aria-hidden="true"></i> Ciudad: Medellín</p><?php */?>
                                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>  Zona: Poblado</p>
                                                            	<hr>
                                                            	
                                                                <p><i class="fa fa-location-arrow" aria-hidden="true"></i> Dirección: <?php echo $projects_new[0]->DIRECCION?></p>
                                                                <p><i class="fa fa-phone" aria-hidden="true"></i> Teléfono: <?php echo $projects_new[0]->TELEFONO?></p>
                                                                <p><i class="fa fa-phone" aria-hidden="true"></i> Celular:  <?php echo $projects_new[0]->TEL_CELULAR?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                                        
                                                        
                                                        <ul class="tab-links col-lg-12 col-md-12">
															<li class="col-md-12 col-xs-12"><a href="#tab_d" class="btn btn-large btn-primary" style="color:#fff; height:35px; line-height:5px; margin-bottom:5px">Contacto</a></li>
															<li class="col-md-12 col-xs-12"><a href="#tab_d" class="btn btn-large btn-primary" style="color:#fff; height:35px; line-height:5px">Ir al sitio web</a></li>
                                                        </ul>
                    
                    
                                                    </div>
                                                </div>
                                            </form>
                                        </aside>
                                        <div class="pr-info col-md-8 col-xs-12 box_info">
                                        
                                         <div class="contact-form" id="myMessage">                
<?php echo ($response!='')?'<div class="alert '.$type.'"  style="    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;">'.$response.'</div>':'';?>
<script>$(document).ready(function(){
setTimeout(function(){ $("#myMessage").remove(); }, 20000);
	});
</script>
                        </div>
                                        
                                        	<img style="width: 400px !important;display: block; margin: auto;" src="<?php echo base_url().'images/imagen_proyecto/'.$projects_new[0]->CODIGO.'/type/p/size/big'?>" class="banner_altos" />
                                            <h2><?php echo $projects_new[0]->NOMBRE?></h2>

                                            <p><?=$projects_new[0]->LINDEROS?></p>
                                       <?php /*?>     
                                            <div class="col-md-6">
                                                <h3>APARTAMENTOS</h3>
                                                
                                                <ul class="list_proyecto">
                                                    <li> 3 Alcobas</li>
                                                	<li> 2 y 3 Baños</li>
                                                    <li> Cocina Integrada</li>
                                                    <li> Modernos Acabados</li>
                                                </ul>
                                            </div>

                                            <div class="col-md-6">
                                                <h3>ZONAS SOCIALES DOTADAS</h3>
                                                <ul class="list_proyecto">
                                                    <li>Piscina Adultos y Niños</li>
                                                    <li>Gimnasio</li>
                                                    <li>Juegos Infantiles</li>
                                                    <li>CubiertosJuegos para Jóvenes</li>
                                                    <li>Juegos Descubiertos para Niños</li>
                                                    <li>Salón Social</li>
                                                    <li>Zona Húmeda</li>
                                                </ul>
                                            </div><?php */?>
                                        </div>
                                        

                                        
                                        
											<div class="pr-info col-md-12 col-xs-12 box_info">
                                                <h2>Imágenes virtuales</h2>
                                                <div class="row cust-row">
                                                
                                                <?php
												$main_counter =0;
												 foreach($galery_virtuales as $img){?>
                                                    <div class="col-md-2 col-xs-6 cust-pad">
                                                        <div class="pr-img priority_img"  data-imagen="<?php echo base_url('images_eme.php?type_img=imagen_proyecto_code&code_p='.$img->COD_OBR.'&code_i='.$img->COD_DOC.'&size_i=');?>">
<?php $main_counter++?>
<label for="op" class="btn btn-small btn-primary"  onclick="$('.owl-carousel').trigger('to.owl.carousel', <?php echo $main_counter - 1?>)
">Ampliar</label>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                </div>
											</div>
											
											<div class="pr-info col-md-12 col-xs-12 box_info">
                                                <h2>Fotos apartamento modelo</h2>
                                                <div class="row cust-row">
                                                    
                                                    <?php foreach($galery_mod as $img){?>
                                                    <div class="col-md-2 col-xs-6 cust-pad">
                                                        <div class="pr-img to_process"   data-imagen="<?php echo base_url('images_eme.php?type_img=imagen_proyecto_code&code_p='.$img->COD_OBR.'&code_i='.$img->COD_DOC.'&size_i=');?>">
<?php $main_counter++?>
<label for="op" class="btn btn-small btn-primary"  onclick="$('.owl-carousel').trigger('to.owl.carousel', <?php echo $main_counter - 1?>)
">Ampliar</label>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                    
                                                </div>
											</div>


<?php if(!empty($projects_new[0]->URL_VIDEO)){?>

											<div class="pr-info col-md-12 col-xs-12 box_info">
                                                <h2>Video del inmueble</h2>
<?=$projects_new[0]->URL_VIDEO?>
											</div>

<?php } ?>

											<div class="pr-info col-md-12 col-xs-12 box_info">
                                                <h2>Planos Arquitectonicos</h2>
                                                <div class="row cust-row">
                                                <?php foreach($galery_arqu as $img){?>
                                                    <div class="col-md-2 col-xs-6 cust-pad">
                                                        <div class="pr-img to_process"  data-imagen="<?php echo base_url('images_eme.php?type_img=imagen_proyecto_code&code_p='.$img->COD_OBR.'&code_i='.$img->COD_DOC.'&size_i=');?>">
<?php $main_counter++?>
<label for="op" class="btn btn-small btn-primary"  onclick="$('.owl-carousel').trigger('to.owl.carousel', <?php echo $main_counter -1?>)
">Ampliar</label>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                
                                                  
                                              </div>
									  	</div>
                                      	
                                        
                                       
                                      
                                  </div>
                                </div>
                            </div>
                            
                            <div class="wide-2 clearfix">
                                        <div class="container">
                                            <div class="row">
                                                <h2 style="margin-bottom:20px">Grupo Profesional</h2>
                                                <div class="col-md-12 box_info">
                                                    <table class="profesional" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                          
                                                            <tbody>
                                                            <tr>
                                                              <td><a href="#" target="_blank"><img style="width: 165px !important;" src="<?php echo base_url('images_eme.php?type_img=empresa_code&code_p='.$projects_new[0]->CODIGO_GERENCIA.'&size_i=');?>"></a></td>
                                                              <td><a href="#" target="_blank"><img style="width: 165px !important;"  width="140"  src="<?php echo base_url('images_eme.php?type_img=empresa_code&code_p='.$projects_new[0]->CODIGO_VENDEDOR.'&size_i=');?>"></a></td>
                                                              <td><a href="#" target="_blank"><img style="width: 165px !important;"  width="140"  src="<?php echo base_url('images_eme.php?type_img=empresa_code&code_p='.$projects_new[0]->CODIGO_EMPRESA.'&size_i=');?>"></a></td>
                                                              <td><a href="#" target="_blank"><img style="width: 165px !important;"  width="140"  src="<?php echo base_url('images_eme.php?type_img=empresa_code&code_p='.$projects_new[0]->CODIGO_INTERVENTOR.'&size_i=');?>"></a></td>
                                                              <td><a href="#" target="_blank"><img style="width: 165px !important;"  width="140"  src="<?php echo base_url('images_eme.php?type_img=empresa_code&code_p='.$projects_new[0]->CODIGO_ARQUITECTO.'&size_i=');?>"></a></td>
                                                            </tr>
                                                          </tbody>
                                                          <tfoot>
                                                            <tr class="head_table">
                                                              <td>Gerencia</td>
                                                              <td>Ventas</td>
                                                              <td>Construcción</td>
                                                              <td>Interventoria	</td>
                                                              <td>Arquitectura</td>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
							<!-- End Owl carousel -->
						</div>
                        
						<div id="tab_b" class="tab">
							<!-- Map -->
							<div id="map4">
                            <style>#map_canvas { width:100%; height: 100%; }</style>
							<div id="map_canvas"></div>

                            
                            
                            </div>
							<!-- end Map -->
						</div>
                       
                        <div id="tab_c" class="tab">
                        
                                 <div class="wide-2 clearfix">
                                <div class="container">
                                    <div class="row">
                                        <div class="pr-info col-md-12 col-xs-12 box_info">
                                            <h2>Avances del proyecto</h2>
                                            <div class="row cust-row">
                                               <?php foreach($galery_avances as $img){?>
                                                    <div class="col-xs-3 cust-pad">
                                                        <div class="pr-img"  style="background: url(<?php echo base_url().'images/imagen_proyecto_code/'.$img->COD_OBR.'/code/'.$img->COD_DOC?>) center;">
<?php $main_counter++?>
<label for="op" class="btn btn-small btn-primary"  onclick="$('.owl-carousel').trigger('to.owl.carousel', <?php echo $main_counter -1?>)
">Ampliar</label>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>`
                           
                           
                           
                        </div>


 						<div id="tab_d" class="tab">
                           <div class="container">
                        	<div class="row" style="padding-bottom:50px">
                                <div class="contact-form clearfix" style="padding-bottom:30px;">
                                    <h2>Estamos aquí para asesorate.</h2><br><br>
                                 	
                                      
                                     <div class="col-md-3 data_contact lr_a">
                                    <h5>Sede Poblado</h5>
                                    (57-4) 444 84 99 opción 1<br>
									Mall Campestre Drive Inn / Local 215<br>
                                    Calle 16 A Sur # 32b - 38<br>
                                    Medellin, Colombia</p>
                                    </div>
                                    
                                    <div class="col-md-4 data_contact">
                                     <h5>Sede Laureles</h5>
                                    (57-4) 444 8499 opción 2<br>
                                    Circular 76 # 73 B - 27<br>
                                    Medellin, Colombia</p>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <form id="form-submit" class="form-submit" method="post" action="<?php echo base_url('contact_us/go_contact');?>">
                                    <input type="hidden" name="redirect" value="/proyectos/show/<?php echo url_encode($projects_new[0]->CODIGO.'_'.$projects_new[0]->NOMBRE)?>" />
							<div class="col-md-6">
								<div class="input-group">
									<label>Tu nombre:</label>
									<input id="input-name" name="nombre" type="text" class="form-control"  required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<label>Correo electroníco:</label>
									<input id="input-email" name="email" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group">
									<label>Asunto:</label>
									<input id="input-subject" name="asunto" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group">
									<label>Mensaje:</label>
									<textarea id="text-area-contact" name="mensaje" rows="8" cols="45" class="form-control"></textarea>
								</div>
							</div>
							<div class="submit">
								<span class="ffs-bs"><button type="submit" id="tohide" onclick="$('#tohide').hide();" class="btn btn-large btn-primary" style="color:#fff;">Enviar mensaje</button></span>
							</div>
						</form>
                                    
                                    <div class="clearfix" style="height:30px"></div>
                                   
                                  
                                </div>
                            </div>
                            </div>
                        </div> 
                        
                        <div id="tab_e" class="tab">
                            <div class="wide-2 clearfix">
                                    <div class="container">
                                        <div class="row">
                            
                                        <div class="col-md-4">
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
                                        <div class="col-md-8">
                                                <form id="form-submit" class="form-submit clearfix" method="get" target="_blank" action="https://www.paco.com.co/paco/owa/I_ConsultaExtractoUsuario.Consulta">
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                            <label>Identificación::</label>
                                                            <input id="input-name" name="V_Cedula"  type="text" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                            <label>Contraseña:</label>
                                                            <input id="input-email" name="V_Clave" type="password" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="submit">
                                                        <span class="ffs-bs"><button type="submit" class="btn btn-large btn-primary" style="color:#fff;">Ingresar</button></span>
                                                    </div>
                                                </form>
                                                <a class="bt_link"  target="_blank" href="https://www.paco.com.co/paco/owa/C_Cartera_Usuario_Internet.RecuperarClave?V_CodCon=001942&V_CodSoc=001942">Olvidé mi contraseña</a>
                                                <a class="bt_link" href="https://www.paco.com.co/paco/owa/C_Cartera_Usuario_Internet.NuevaClave?V_CodCon=001942&V_CodSoc=001942
" target="_blank">Crear contraseña</a>
                                        </div>
                                </div>
                                
                                <div class="row" style="height:180px"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="tab_f" class="tab">
                            <div class="container">
                                
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
                                                     <?php foreach($documentos as $doc){?>
                                                                               <a class="doc_link clearfix" target="_blank" href="<?php echo base_url("proyectos/download_doc/".$doc->CODIGO);?>">
                                                <div style="    width: 86%;" class="name_doc">
                                                    <?php echo $doc->NOMBRE?>
                                                    <div class="date"><?php echo $doc->FECHA?> </div>
                                                </div>
                                                <div class="icons_link">
                                                    <i data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<?php echo $doc->DESCRIPCION?>" class="fa fa-info-circle" aria-hidden="true"></i>
                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                </div>
                                        </a>
                                  
                                        <?php  }?>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        
                                      
					</div>
					
				</div>
			</div>
			
		</div>
        
        
        
        <div class="custom-galery">
		<input type="checkbox" class="gal" id="op">
		<div class="lower"></div>
		<div class="overlay overlay-hugeinc">
			<label for="op"></label>
			<nav>
				<!-- Owl carousel -->
				<div class="owl-carousel owl-theme carousel-full-width owl-demo-3">
                   						 <?php foreach($galery_virtuales as $img){?>
                    <div class="item to_process2" data-imagen="<?php echo base_url('images_eme.php?type_img=imagen_proyecto_code&code_p='.$img->COD_OBR.'&code_i='.$img->COD_DOC.'&size_i=big');?>"></div> <?php }?>
                                          <?php foreach($galery_mod as $img){?>
 <div class="item to_process2" data-imagen="<?php echo base_url('images_eme.php?type_img=imagen_proyecto_code&code_p='.$img->COD_OBR.'&code_i='.$img->COD_DOC.'&size_i=big');?>"></div>    <?php }?>
                                                                                                            					  <?php foreach($galery_arqu as $img){?>                                              <div class="item to_process2" data-imagen="<?php echo base_url('images_eme.php?type_img=imagen_proyecto_code&code_p='.$img->COD_OBR.'&code_i='.$img->COD_DOC.'&size_i=big');?>"></div>    <?php }?>
     
	 									<?php foreach($galery_avances as $img){?>                                          <div class="item to_process2" data-imagen="<?php echo base_url('images_eme.php?type_img=imagen_proyecto_code&code_p='.$img->COD_OBR.'&code_i='.$img->COD_DOC.'&size_i=big');?>"></div>    <?php }?>
     
      
                                                    
				</div>
				<!-- End Owl carousel -->
			</nav>
		</div>
	</div>
   <script>
			  $(document).ready(function(){
				  if($('.priority_img').length == 0){
					  
					  
					  
			var s2=0 ;
			$('.to_process').each(function(){
				$(this).css('background-image', 'url(' + $(this).attr('data-imagen') + ')');
				s2++;
				if(s2==1){
				setTimeout(function(){ 
			$('.to_process2').each(function(){
				$(this).css('background-image', 'url(' + $(this).attr('data-imagen') + ')');
						});		
				}, 7000);	
							}
		});			
				 
				 
					  	
								}
								
				  
				 var s  = 0;
		$('.priority_img').each(function(){
			$(this).css('background-image', 'url(' + $(this).attr('data-imagen') + ')');
			s++;
			if(s==1 ){
			setTimeout(function(){
			var s2=0 ;
			$('.to_process').each(function(){
				$(this).css('background-image', 'url(' + $(this).attr('data-imagen') + ')');
				s2++;
				if(s2==1){
				setTimeout(function(){ 
			$('.to_process2').each(function(){
				$(this).css('background-image', 'url(' + $(this).attr('data-imagen') + ')');
						});		
				}, 7000);	
							}
		});			
				 }, 7000);	
				}	
		});
		
		

				  	});




$(document).ready(function(e) {
<?php $xplode_coordenadas = explode(',',$projects_new[0]->URL_GOOGLE)?>

var myCenter = new google.maps.LatLng( <?= $xplode_coordenadas[0] ?>, <?= $xplode_coordenadas[1] ?>);

// DEFINE YOUR MAP AND MARKER 
var map = null, marker = null; 
var latlng = {lat: <?= $xplode_coordenadas[0] ?>, lng:  <?= $xplode_coordenadas[1] ?>};

function initialize() { 
    var mapProp = { 
        center: myCenter, 
        zoom: 15, mapTypeId: google.maps.MapTypeId.ROADMAP 
    }; 

     map = new google.maps.Map(document.getElementById("map_canvas"), mapProp); 
    /* marker = new google.maps.Marker({ 
        position: myCenter, 
        draggable: false, 
        animation: google.maps.Animation.DROP, 
    }); 

    marker.setMap(map);*/ 
	
	var marker = new MarkerWithLabel({
			position: latlng,
			map: map,
			labelContent: '<div class="marker-loaded"><div class="map-marker" style= " background-color: #3a7de3"></div></div>',
			labelClass: "marker-style"
		});
		var contentString =   '<div id="mapinfo">'+
		'<h4 class="firstHeading"><?php echo $projects_new[0]->NOMBRE?></h4>'+
		'<h6><?php echo $projects_new[0]->DIRECCION?></h6>';
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		marker.addListener('click', function() {
			infowindow.open(map, marker);
		});
	 
	 	google.maps.event.addDomListener(window, 'resize', function() {
   			map.setCenter(myCenter);
			});
}	
	
    $('#tb').click(function(){
		initialize();
	  google.maps.event.trigger(tb, 'resize');

        // Force the center of the map
        map.setCenter(myCenter);
		});
});
			  </script>