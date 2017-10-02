<div id="page-content_home">
			<div class="home_2">
				<div id="owl-demo-header" class="owl-carousel owl-theme carousel-full-width">
					<div class="item">
						<span class="filter"></span>
						<div class="head-title-2" style="background:url(assets/img/001.jpg) center;background-size: cover;">
							<div class="container">
								<div class="title col-lg-6 col-lg-offset-0 col-md-6 col-sm-8 col-sm-offset-1 col-xs-9 col-xs-offset-1">
									<h1>La forma más <br> facil de encontrar <br> tu inmueble</h1>
									<span class="ffs-bs"><a href="property_page.html" class="btn btn-large btn-primary">Saber más</a></span>
								</div>
							</div>
						</div>
					</div>
                    
					
                    <div class="item">
						<span class="filter"></span>
						<div class="head-title-2" style="background:url(assets/img/001.jpg) center;background-size: cover;">
							<div class="container">
								<div class="title col-lg-6 col-lg-offset-0 col-md-6 col-sm-8 col-sm-offset-1 col-xs-9 col-xs-offset-1">
									<h1>La forma más <br> facíl de encontrar <br> tu inmueble</h1>
									<span class="ffs-bs"><a href="property_page.html" class="btn btn-large btn-primary">Saber más</a></span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="container">
				<div class="explore">
					<h2 class="light">¿Qué estas <span class="italic">buscando</span>?</h2>
					<h5><i class="fa fa-map-marker"></i><span class="team-color">Las mejores propiedades de</span> Medellín</h5>
				</div>
                
                                    <div class="h40"></div>

				<div class="row">
					<div class="col-md-4 col-sm-6">
                    	<div class="top_foto" style="background-color:#16c6e6"><img src="assets/img/006.png" /> Proyectos</div>
						<a href="<?php echo base_url()?>proyectos" class="exp-img no-top" style="background:url(assets/img/003.jpg) center;background-size: cover;">
							<span class="filter"></span>
							<div class="img-info">
								<span class="ffs-bs btn btn-small btn-primary">Ver todos</span>
							</div>
						</a>
					</div>
                    
					<div class="col-md-4 col-sm-6">
                    	<div class="top_foto" style="background-color:#97cb31"><img src="assets/img/007.png" /> Usados</div>
						<a href="<?php echo base_url()?>usados" class="exp-img no-top" style="background:url(assets/img/004.jpg) center;background-size: cover;">
							<span class="filter"></span>
							<div class="img-info">
								<span class="ffs-bs btn btn-small btn-primary">Ver todos</span>
							</div>
						</a>
					</div>


					<div class="col-md-4 col-sm-6">
                    	<div class="top_foto" style="background-color:#f7d32c"><img src="assets/img/008.png" /> Arrendamientos</div>
						<a href="<?php echo base_url()?>arrendamientos" class="exp-img no-top" style="background:url(assets/img/005.jpg) center;background-size: cover;">
							<span class="filter"></span>
							<div class="img-info">
								<span class="ffs-bs btn btn-small btn-primary">Ver todos</span>
							</div>
						</a>
					</div>



				</div>
			</div>
            
            
            <div class="site-content">
                  <div class="text_parrallax">
                      TE ASESORAMOS EN LA BÚSQUEDA DE TU INMUEBLE
                      <div><span>Puedes escribirnos a eme@emepropiedadraiz.com.co</span></div>
                  </div>
             
                  <div class="primary-section" style="background-image:url(assets/img/009.jpg)">
                      <div class="primary-image">
                          <img src="assets/img/009.jpg" style="visibility:hidden"/>
                      </div>
                  </div>
              </div>
              
              
              
              <!-- INMUEBLES -->
              <div class="back_wh">
              <div class="container slider_home">
              
              	<div class="top_bar" style="background-color:#00c7e7">Proyectos importantes</div>
              
				<section class="block testimonials">
					<div class="owl-carousel testimonials-carousel">
                    <?php $cnt_itms = 0;
					$nnt=0;
					 foreach($projects_new as $item){
						 $nnt++;
					    $cnt_itms++;
						 if($cnt_itms==1){?>
						<div class="item">
                            <div class="row">
                            <? }?>
                                <div class="col-md-4 col-sm-4 col-xs-6 prop">
                                    <div class="item_house">
                                        <a href="<?php echo base_url()?>proyectos/show/<?php echo url_encode($item->CODIGO.'_'.$item->NOMBRE)?>" class="image_house <?php echo ($nnt<=3)?'priority_img':'to_process';?> img-info " data-imagen="<?php echo base_url().'images/imagen_proyecto/'.$item->CODIGO.'/type/p/size/big'?>" style=''><?php //echo 'data:'.$item->MIME_TYPE.';base64,'.base64_encode( $item->BLOB_CONTENT->load() );?>
                                            <div class="brand"><img src="<?php echo base_url().'images/imagen_proyecto/'.$item->CODIGO.'/type/l'?>" style="width: 115px;"></div>
                                            <div class="btn_ver">Ver todos</div>
                                        </a>
                                        <div class="title_house">
                                            <?=$item->NOMBRE?><br><span><?=$item->LOCALIZACION?></span>
                                        </div>
                                        <div class="house_price">Desde : <?php echo ($item->PRECIO)?></div>
                                        <div class="info_house">
                                            <div class="item_info_house clearfix">
                                                <div class="left">Mt2</div><div class="right"><?=$item->AREA?></div>
                                            </div>
                                            <div class="item_info_house clearfix">
                                                <div class="left">Tel</div><div class="right"><?=$item->TELEFONO?></div>
                                            </div>   
                                        </div>
                                        <!-- <div class="info_agente">
                                            Agente encargado<br>
                                            <span>Rodrigo Romero C</span>
                                        </div> -->
                                    </div>
                                </div>
                              
					<?php if($cnt_itms==3){?>
                            </div>
						</div>
                       <?php 
					   $cnt_itms=0;
					   			}
					   }
					  if($cnt_itms!=0){ echo '</div>
						</div>';} 
					   ?>
                        
                        
                        
                        
					</div>
				</section>
			</div> 
            </div>
              
              
              
              
              <!-- ************* FIN PROYECTOS  ************** -->
              
               <div class="back_wh">
              <div class="container slider_home">
              
              	<div class="top_bar" style="background-color:#9bca29">Inmuebles usados</div>
              
				<section class="block testimonials">
					<div class="owl-carousel testimonials-carousel">
			 
             
              <?php $cnt_itms = 0;
						 $nnt=0;
					 foreach($useds as $item){						 
						 $nnt++;
					    $cnt_itms++;
						 if($cnt_itms==1){?>
						<div class="item">
                            <div class="row">
                            <? }?>
                        
                                <div class="col-md-4 col-sm-4 col-xs-6 prop">
												<div class="item_house">
                                                	<a href="<?php echo base_url()?>usados/show/<?php echo url_encode($item->NRO_ETA.'_'.$item->COD_INM.'_'.$item->DES_INM)?>" class="image_house img-info  <?php echo ($nnt<=3)?'priority_img':'to_process';?> " data-imagen="<?php echo base_url().'images/imagen_usados/'.$item->NRO_ETA.'/code/'.$item->COD_INM.'/type/home/size/big'?>" style="">
                                                    <?	/*<div class="brand"><img src="assets/img/011.jpg"></div>*/?>
                                                        <div class="btn_ver">Ver todos</div>
                                                    </a>
                                                	<div class="title_house">
                                                    	Sector<? /*=$item->NOM_ETA*/?><br><span><?=$item->SEC_BAR?></span>
                                                    </div>
                                                    <div class="house_price">Desde: $<?php echo number_format($item->VAL_OFE)?></div>
                                                    <div class="info_house">
                                                    	<div class="item_info_house clearfix">
                                                        	<div class="left">Mt2</div><div class="right"><?=$item->ARE_CON?></div>
                                                        </div>
                                                    	<div class="item_info_house clearfix">
                                                        	<div class="left">Tipo Inmueble</div><div class="right"><?=$item->OTR_TIP?> </div>
                                                     	</div>   
                                                    </div>
                                                    <!-- <div class="info_agente">
                                                    	Agente encargado<br>
                                                    	<span>Rodrigo Romero C</span>
                                                    </div> -->
                                                </div>
											</div>
                              
					<?php if($cnt_itms==3){?>
                            </div>
						</div>
                       <?php 
					   $cnt_itms=0;
					   			}
					   }
					  if($cnt_itms!=0){ echo '</div>
						</div>';} 
					   ?>
                        
            
            			
                        
                        
             
                        
					</div>
				</section>
			</div> 
            </div>
            
             <div class="back_wh">
              <div class="container slider_home">
              
              	<div class="top_bar" style="background-color:#fbd120">Inmuebles para arrendamiento</div>
              
				<section class="block testimonials">
					<div class="owl-carousel testimonials-carousel">
                    
                     <?php 
					 $ttl=0;
					 $cnt_itms = 0;
						 $nnt=0;
					 foreach($rents as $item){
						 $nnt++;
						 $ttl++;
					    $cnt_itms++;
						 if($cnt_itms==1){?>
						<div class="item">
                            <div class="row">
                            <? }?>
                                <div class="col-md-4 col-sm-4 col-xs-6 prop">
												<div class="item_house">
                                                	<a href="<?php echo base_url()?>arrendamientos/show/<?php echo url_encode($item->COD_INM.'_'.$item->DES_TIP)?>"  class="image_house img-info <?php echo ($nnt<=3)?'priority_img':'to_process';?> "  data-imagen="<?php echo base_url().'images/imagen_rentas/'.$item->COD_INM.'/type/home/size/big'?>" style="">
                                                        <div class="btn_ver">Ver todos</div>
                                                    </a>
                                                	<div class="title_house">
                                                    	<?=$item->DES_TIP?><br><span><?=$item->DES_BAR?></span>
                                                    </div>
                                                    <div class="house_price">Desde:  $<?php echo number_format($item->VAL_OFE)?></div>
                                                    <div class="info_house">
                                                    	<div class="item_info_house clearfix">
                                                        	<div class="left">Mt2</div><div class="right"><?=$item->ARE_CON?></div>
                                                        </div>
                                                    	<div class="item_info_house clearfix">
                                                        	<div class="left">Tipo Inmueble</div><div class="right"><?=$item->DES_TIP?></div>
                                                     	</div>   
                                                    </div>
                                                    <!-- <div class="info_agente">
                                                    	Agente encargado<br>
                                                    	<span>Rodrigo Romero C</span>
                                                    </div> -->
                                                </div>
											</div>
                              
					<?php if($cnt_itms==3){?>
                            </div>
						</div>
                       <?php 
					   $cnt_itms=0;
					   			}
					   }
					  if($cnt_itms!=0){ echo '</div>
						</div>';} 
					   ?>
                        
                    
						
                        
                        
                        
                        
                        
					</div>
				</section>
			</div> 
            </div>
            
              
			<!-- end wide-3 -->
			<div class="container">
				<section class="block testimonials">
					<div class="owl-carousel testimonials-carousel">
						<div class="item">
							<img src="assets/img/012.jpg" width="300px" class="foto">
							<div class="txt_testimonio">	
                                <p class="team-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas euismod quam ante, in semper erat dapibus at. Nam rhoncus imperdiet ultrices. Sed pharetra massa nec odio molestie.</p>
								<div class="who">Familia Castro</div>
                            </div>
						</div>
						<div class="item">
							<img src="assets/img/012.jpg" width="300px" class="foto">
							<div class="txt_testimonio">	
                                <p class="team-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas euismod quam ante, in semper erat dapibus at. Nam rhoncus imperdiet ultrices. Sed pharetra massa nec odio molestie.</p>
								<div class="who">Familia Castro</div>
                            </div>
						</div>
                        <div class="item">
							<img src="assets/img/012.jpg" width="300px" class="foto">
							<div class="txt_testimonio">	
                                <p class="team-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas euismod quam ante, in semper erat dapibus at. Nam rhoncus imperdiet ultrices. Sed pharetra massa nec odio molestie.</p>
								<div class="who">Familia Castro</div>
                            </div>
						</div>
					</div>
				</section>
			</div> 
			
			<!-- end wide-3 -->
		</div>
        
        <script>
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
		
		

				  	});
			  </script>