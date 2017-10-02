<div id="page-property-content">
			<div class="wide_container_3 carousel-full-width">
				<div class="tabs colored_tabs">
                	<ul class="tab-links tabs_usados col-lg-12 col-md-12">
						<li class="active col-xs-3"><a href="#tab1"><img src="<?php echo base_url();?>assets/img/camera-black.png" alt=""/>Ver fotos</a></li>
						<!-- <li class="col-xs-2"><a href="#tab22" class="map4"><img src="assets/img/map.png" alt=""/>Ver mapa</a></li> -->
						<li class="col-xs-3"><a href="#tab_c">Consulta estado de cuenta</a></li>
                        <li class="col-xs-3"><a href="#tab_d">Proceso y documentos</a></li>
						<li class="col-xs-3"><a href="#tab_e">Consigna tu inmueble</a></li>
					</ul>
                    <div class="clearfix"></div>
					<div class="tab-content">
						<div id="tab1" class="tab active">
							<!-- Owl carousel -->
							<div id="owl-demo-2" class="owl-carousel owl-theme">
								<div class="item">
									<div class="image" style="background: url(<?php echo base_url().'images/imagen_usados/'.$proyecto[0]->NRO_ETA.'/code/'.$proyecto[0]->COD_INM.'/type/00000002/size/big'?>) center"></div>
								</div>
								<div class="item">
									<div class="image" style="background: url(<?php echo base_url().'images/imagen_usados/'.$proyecto[0]->NRO_ETA.'/code/'.$proyecto[0]->COD_INM.'/type/00000003/size/big'?>) center"></div>
								</div>
								<div class="item">
									<div class="image" style="background: url(<?php echo base_url().'images/imagen_usados/'.$proyecto[0]->NRO_ETA.'/code/'.$proyecto[0]->COD_INM.'/type/00000004/size/big'?>) center"></div>
								</div>
							</div>
							<!-- End Owl carousel -->
                            
                            
                            <div class="wide-2">
				<div class="container" style="padding-top: 35px;">
					<div class="row">
						<aside class="pr-summary col-md-4 col-xs-12">

							<form action="agent_profile.html">
								<div class="col-lg-7 col-md-6 col-sm-3 col-xs-6 hl-bl">
									<h2>$<?=number_format($proyecto[0]->VAL_OFE)?></h2>
									<h5 class="team-color">Usados</h5>
								</div>
								
								<div class="row">
									<div class="col-md-12 col-sm-6 col-xs-12">
										<div class="row">
										<?php /*?>	<div class="col-lg-5 col-md-6 col-xs-6 cat-img">
												
												<p>Ciudad: Medellín</p>
											</div><?php */?>
											<div class="col-lg-7 col-md-6 col-xs-6 cat-img cat-img">
												<p>Zona: <?php echo $proyecto[0]->SEC_BAR?></p>
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-xs-12">
												<div class="row">
													<div class="col-lg-5 col-md-6 col-xs-6 cat-img">
														<p class="info_line">Mt2: <?php echo $proyecto[0]->ARE_CON?></p>
													</div>
													<div class="col-lg-7 col-md-6 col-xs-6 cat-img">
														<p class="info_line">Tipo: <?php echo $proyecto[0]->OTR_TIP?></p>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12">
														<div class="col-lg-5 col-md-6 col-xs-6 line"></div>
														<div class="col-lg-5 col-md-6 col-xs-6 line"></div>
													</div>
												</div>
											</div>
										</div>
										<hr class="full-width">
									</div>
								</div>
								<div class="picker-block col-md-12 col-sm-6 col-xs-12">
									
									<div class="row">
										<div class=" col-xs-12">
											<div class="circle">
												<img src="<?php echo base_url()?>assets/img/019.jpg" alt="">
											</div>
											<div class="team-info">
												<h3>Camila Romero</h3>
												<p class="team-color">Asesor encargado</p> 
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-6 col-xs-12">
										<span class="ffs-bs">
											<a href="#" type="submit" class="btn btn-large btn-primary">Contactar agente</a>
                                        </span>
										<div class="col-xs-12 fav-block">
											<!-- div class="bookmark col-xs-6" data-bookmark-state="empty">
												<span class="title-add">Add to bookmark</span>
												<p class="col-xs-9 fav-text">Add to Favorit</p>
											</div -->
											<div class="compare col-xs-6" data-compare-state="empty">
												<span class="plus-add">Comparar con 3 más</span>
												<p class="fav-text">Comparar</p>
											</div>
                                            <a href="comparar.php" class="btn btn-primary link-compare" style="margin-top: 0 !important;">Comparar</a>
										</div>
									</div>
								</div>
							</form>
						</aside>
						<div class="pr-info col-md-8 col-xs-12 box_info">
							<!-- <h2>Nombre del inmueble</h2> -->
                            <img   style="width: 400px !important;display: block; margin: auto;"   src="<?php echo base_url().'images/imagen_usados/'.$proyecto[0]->NRO_ETA.'/code/'.$proyecto[0]->COD_INM.'/type/00000005/size/big'?>" class="banner_usa_arr" />
                              <br><br>
							<h5><i class="fa fa-info-circle" aria-hidden="true"></i> C&Oacute;DIGO: <?=$proyecto[0]->NRO_ETA.'-'.$proyecto[0]->COD_INM?></h5>
							<p><?php echo $proyecto[0]->DES_OBS?></p>                                           
                      <?php /*?>      <div class="col-md-6">
                                <h3>APARTAMENTOS</h3>
                                
                                <ul class="list_proyecto">
                                    <li>3 Alcobas</li>
                                    <li>2 y 3 Baños</li>
                                	<li>Cocina Integrada</li>
                                    <li>Modernos Acabados</li>
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
						<!-- <div class="pr-info col-md-8 col-xs-12">
							<h3>Características del inmueble</h3>
							<section class="block">
								<ul class="submit-features">
									<li class="col-md-4 col-xs-4"><div >Aire acondicionado</div></li>
									<li class="col-md-4 col-xs-4"><div >Balcones</div></li>
									<li class="col-md-4 col-xs-4"><div >Piscina comunal</div></li>
									<li class="col-md-4 col-xs-4"><div >Parque infantil</div></li>
								</ul>
							</section>
						</div> -->
                                            
                        <div class="pr-info col-md-12 col-xs-12 box_info">
                            <h2>Fotos del inmueble</h2>
                            <div class="row cust-row">
                               
                                          <?php
												$main_counter =0;
												 foreach($galery_mod as $img){?>
                                                    <div class="col-md-2 col-xs-6 cust-pad">
                                                        <div class="pr-img priority_img"  data-imagen="<?php echo base_url('images/imagen_usados/'.$img->NRO_ETA.'/code/'.$img->COD_USA.'/type/'.$img->COD_DOC.'/size/big');?>">
<?php $main_counter++?>
<label for="op" class="btn btn-small btn-primary"  onclick="$('.owl-carousel').trigger('to.owl.carousel', <?php echo $main_counter - 1?>)
">Ampliar</label>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                    
                                                    
                               
                            </div>
                        </div>
                        
<?php if(!empty($proyecto[0]->URL_VID)){?>
                        <div class="pr-info col-md-12 col-xs-12 box_info">
                            <h2>Video del inmueble</h2>
 							<?php echo $proyecto[0]->URL_VID?>
                        </div>
<?php }?>

					</div>
				</div>
			</div>
                            
                            
						</div>
						<div id="tab22" class="tab">
							<!-- Map -->
							<div id="map4"></div>
							<!-- end Map -->
						</div>
                        
						<div id="tab_c" class="tab">
                        
                            <div class="wide-2 clearfix">
                                    <div class="container">
                                        <div class="row">
                            
                                <div class="col-md-4">
                                     <h3>EME Propiedad Raiz<br>
                                    (57-4) 444 84 99 Mall</h3>
                                    <br>
                                    Campestre Drive Inn / Local 215<br>
                                    Calle 16A Sur # 32B - 38<br>
                                    Medellin, Colombia</p>
                                </div>
                                <div class="col-md-8">
                                        <form id="form-submit" class="form-submit clearfix" target="_blank" method="get" action="https://www.paco.com.co/paco/owa/I_ConsultaExtractoUsuario.Consulta">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Identificación::</label>
                                                    <input id="input-name" type="text" class="form-control" name="V_Cedula" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Contraseña:</label>
                                                    <input name="V_Clave"  type="password" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="submit">
                                                <span class="ffs-bs"><button type="submit" class="btn btn-large btn-primary" style="color:#fff;">Ingresar</button></span>
                                            </div>
                                        </form>
                                        <a class="bt_link" target="_blank" href="https://www.paco.com.co/paco/owa/C_Cartera_Usuario_Internet.RecuperarClave?V_CodCon=001942&V_CodSoc=001942">Olvidé mi contraseña</a>
                                        <a class="bt_link"  href="https://www.paco.com.co/paco/owa/C_Cartera_Usuario_Internet.NuevaClave?V_CodCon=001942&V_CodSoc=001942
" target="_blank">Crear contraseña</a>
                                </div>
                                
                                </div>
                                </div>
                                </div>
                        </div>                        


						<div id="tab_d" class="tab">
                            <div class="wide-2 clearfix">
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
                                                                               <a class="doc_link clearfix" target="_blank" href="<?php echo base_url("usados/download_doc/".$doc->CODIGO);?>">
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
                        
						<div id="tab_e" class="tab">
                        
                            <div class="wide-2 clearfix">
                                    <div class="container">
                                        <div class="row">
                            
                                <div class="col-md-4">
                                     <h3>Consigna tu inmueble</h3>
                                    <br>
                                    <p>Nuestro equipo humano ofrecerá toda la experiencia y agilidad, así como seguridad para realizar su consignación de propiedades.</p>
                                    <p>Pronto estaremos en contacto con usted para brindarle con calidad humana todo el acompañamiento que se requiera para satisfacer su necesidad.</p>
                                </div>
                                <div class="col-md-8">
                                        <form id="form-submit" class="form-submit clearfix"  method="post" action="<?php echo base_url('contact_us/go_contact_property');?>">
                                        
                                        	<h3>Información personal</h3>
                                        
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Nombre:</label>
                                                    <input id="input-name" name="nombre" type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>E-mail:</label>
                                                    <input  type="text" name="correo" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Telefono(s):</label>
                                                    <input  type="text" name="telefono" class="form-control" required>
                                                </div>
                                            </div>
                                            
                                            <h3>Información del inmueble</h3>
                                        
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Tipo:</label>
                                                   	<select name="tipo" class="form-control" id="Tipo">
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
                                                    <input name="barrio"  type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Dirección:</label>
                                                    <input name="direccion"  type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Comodidades:</label>
                                                    <textarea name="comodidades" class="form-control" ></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>Valor oferta:</label>
                                                    <input name="valor"  type="text" class="form-control" required>
                                                </div>
                                            </div>
                                             <small>Por favor ingrese los datos personales y del inmueble</small>
                                            
                                            
                                            <div class="submit">
                                                <span class="ffs-bs"><button type="submit" id="tohide" onclick="$('#tohide').hide();" class="btn btn-large btn-primary" style="color:#fff;">Enviar</button></span>
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
			
		</div>
        
        
               
        <div class="custom-galery">
		<input type="checkbox" class="gal" id="op">
		<div class="lower"></div>
		<div class="overlay overlay-hugeinc">
			<label for="op"></label>
			<nav>
				<!-- Owl carousel -->
				<div class="owl-carousel owl-theme carousel-full-width owl-demo-3">
                   						 <?php foreach($galery_mod as $img){?>
                    <div class="item to_process2" data-imagen="<?php echo base_url('images/imagen_usados/'.$img->NRO_ETA.'/code/'.$img->COD_USA.'/type/'.$img->COD_DOC.'/size/big');?>"></div> <?php }?>
                                         
     
      
                                                    
				</div>
				<!-- End Owl carousel -->
			</nav>
		</div>
	</div>
        
   <script>
			  $(document).ready(function(){
				 var s  = 0;
		$('.priority_img').each(function(){
			$(this).css('background-image', 'url(' + $(this).attr('data-imagen') + ')');
			s++;
			if(s==1){
			setTimeout(function(){
			var s2=0 ;
			$('.to_process2').each(function(){
				$(this).css('background-image', 'url(' + $(this).attr('data-imagen') + ')');
				/*s2++;
				if(s2==1){
				setTimeout(function(){ 
			$('.to_process2').each(function(){
				$(this).css('background-image', 'url(' + $(this).attr('data-imagen') + ')');
						});		
				}, 7000);	
							}*/
		});			
				 }, 7000);	
				}	
		});
		
		

				  	});
			  </script>