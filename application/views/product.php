 <?php 
			$this->load->view('partials/banner_page'); 
			
			
                          $marca = relation_data($product[0]->marcas_de_productos_relation, "marcas_de_productos");
								$diseno = relation_data($product[0]->id, "diseno");	
			?>

 <!-- Main Star -->
        <div class="container">
            <div class="row">
              <div class="col-md-12">

                <div style="padding-top: 20px;">
                    <div class="col-md-5">
                        <div class="img-det_cat"><img src="<?php if(empty($diseno->imagen_file)){echo base_url().'admin/uploads/files/logo_default.png';}else{ echo base_url() ?>admin/uploads/files/<? echo $diseno->imagen_file;}?>"></div> 
                    </div>  
                    <div class="col-md-7">
                        <div style="padding-top: 20px;">
                                 <p class="product-1"><?
						 echo  $marca->marca_text.' | '.$diseno->nombre_text?></p>
                           <?php
						 $array=array('marca' => $this->session->userdata('marca'),
						 'modelo' => $this->session->userdata('modelo'),
						 'version' => $this->session->userdata('version'),
						 'anio' => $this->session->userdata('anio'),
						 'ancho' => $this->session->userdata('ancho'),
						 'serie' => $this->session->userdata('serie'),
						 'rin' => $this->session->userdata('rin'));
							$srch = original_size_predict_data($array,$product[0]->id);
						  if(count($srch)>0){?>
                           <p class="product-2" style="font-weight:bold">Tama&ntilde;o: 
                           <?=$srch[0]->original_text?></p><?php }?>
                          <p class="product-2"><?=$product[0]->subtitulo_text?></p>
                                  <form>
	                            <div class="stars">
	                          <input type="radio" name="star" class="star-1"  id="star-1"  value="1"  />
	                              <label class="star-1" for="star-1">1</label>
	                              <input type="radio" name="star" class="star-2"  id="star-2" value="2"  />
	                              <label class="star-2" for="star-2">2</label>
	                              <input type="radio" name="star" class="star-3"  id="star-3"  value="3" />
	                              <label class="star-3" for="star-3">3</label>
	                              <input type="radio" name="star" class="star-4" id="star-4"  value="4" />
	                              <label class="star-4" for="star-4">4</label>
	                              <input type="radio" name="star" class="star-5"  id="star-5" value="5"  />
	                              <label class="star-5" for="star-5">5</label>
	                              <span id="star" style=" width:<?=(($product[0]->calificacion_promedio_number*100)/5);?>%"></span> 
	                            </div>
	                          </form>
                              
                               <script>
								$(document).ready(function(){
								 $(document).on('click', "form .stars label", function(event) {
								
									 $("input[name=star]").val($(this).text());
									 var percent = (($(this).text()*100)/5);
									 $("#star").css('width',percent+'%');
										event.preventDefault();
										
											$.ajax({
												type: "POST", dataType: "json", url: "<?=base_url()?>catalog/save_score", data: "id=<?=$product[0]->id?>&score=" + $("input[name=star]").val(),
												success: function(data){ 
																		
																	},
													error: function(data){
													   console.log('fail');
														}
													});
																	
																
											
									});
									});
									</script>
                        </div>
                        <span class="info-text-3"><figure class="ico-cat ico-cat-1"></figure>&nbsp;&nbsp;<?=$product[0]->caracteristica_destacada_1_text?></span>
                        <span class="info-text-3"><figure class="ico-cat ico-cat-2"></figure>&nbsp;&nbsp;<?=$product[0]->caracteristica_destacada_2_text?></span>
                        <span class="info-text-3"><figure class="ico-cat ico-cat-3"></figure>&nbsp;&nbsp;<?=$product[0]->caracteristica_destacada_3_text?></span>
                        <div style="padding-top: 20px; float: left;">
                          <p class="txt-product">
                            <?=$product[0]->descripcion_text?>.
                          </p>
                        </div>

                    </div>
                </div>

                <hr class="hr-detalle">

                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4">
                      <h3 class="subtit-gen">¿Dónde comprar?</h3>
                      <div class="row">
                        <div class="col-md-8">
                          <select id="distribution">
                              <option selected="selected">Ciudad</option>
                             <?php foreach($distribution as $item){?> 
                              <option value="<?=$item->id?>"><?=$item->nombre_text?></option>
                              <?php }?>
                            </select>
                            <script>
							$(document).ready(function(){
							
							 $(document).on('click', "#buscar", function(event) {
									event.preventDefault();
								 if($('#distribution').val()!=''){
									window.location.href = "<?php echo base_url()?>distribution?city="+$('#distribution').val();
								 }
								});
									
											});
                            </script>
                        </div>
                        <div class="col-md-4" style="padding-top: 7px;">
                          <a class="btn-detalle-producto" id="buscar" href="#">Buscar</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <h3 class="subtit-gen">Caracteristicas</h3>
                      <div class="cara-det_cat">
                        <figure><img src="<?php echo base_url()?>assets/img/ico-dry.png"></figure>
                        <h4>DRY HANDLING</h4>
                        <div class="cont-valor">
                          <div> <?=$product[0]->dry_handling_number?></div>
                        </div>
                      </div>
                      <div class="cara-det_cat">
                        <figure><img src="<?php echo base_url()?>assets/img/ico-wet.png"></figure>
                        <h4>WET HANDLING</h4>
                        <div class="cont-valor">
                          <div> <?=$product[0]->wet_handling_number?></div>
                        </div>
                      </div>
                      <div class="cara-det_cat">
                        <figure><img src="<?php echo base_url()?>assets/img/ico-ride.png"></figure>
                        <h4>RIDE COMFORT</h4>
                        <div class="cont-valor">
                          <div> <?=$product[0]->ride_comfort_number?></div>
                        </div>
                      </div>
                      <div class="cara-det_cat">
                        <figure><img src="<?php echo base_url()?>assets/img/ico-quiet.png"></figure>
                        <h4>QUIET RIDE</h4>
                        <div class="cont-valor">
                          <div> <?=$product[0]->quiet_ride_number?></div>
                        </div>
                      </div>
                      <div class="cara-det_cat">
                        <figure><img src="<?php echo base_url()?>assets/img/ico-tread.png"></figure>
                        <h4>TREAD LIFE</h4>
                        <div class="cont-valor">
                          <div> <?=$product[0]->tread_life_number?></div>
                        </div>
                      </div>
                      <div class="cara-det_cat">
                        <figure><img src="<?php echo base_url()?>assets/img/ico-off.png"></figure>
                        <h4>OFF-ROAD TRACTION</h4>
                        <div class="cont-valor">
                          <div> <?=$product[0]->off_road_traction_number?></div>
                        </div>
                      </div>
                      <div class="cara-det_cat">
                        <figure><img src="<?php echo base_url()?>assets/img/ico-winter.png"></figure>
                        <h4>WINTER HANDLING</h4>
                        <div class="cont-valor">
                          <div> <?=$product[0]->winter_handling_number?></div>
                        </div>
                      </div>
                      <div class="cara-det_cat">
                        <figure><img src="<?php echo base_url()?>assets/img/ico-fuel.png"></figure>
                        <h4>FUEL EFFICIENCY</h4>
                        <div class="cont-valor">
                          <div><?=$product[0]->fuel_efficiency_number?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-md-12" style="margin-bottom: 20px;">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-1 space">
                      <div class="div-pt"><p>3.5</p></div>
                    </div>
                    <div class="col-md-1 space">
                      <div class="div-pt"><p>3.5</p></div>
                    </div>
                    <div class="col-md-1 space">
                      <div class="div-pt"><p>3.5</p></div>
                    </div>
                    <div class="col-md-1 space">
                      <div class="div-pt"><p>3.5</p></div>
                    </div>
                    <div class="col-md-1 space">
                      <div class="div-pt"><p>3.5</p></div>
                    </div>
                    <div class="col-md-1 space">
                      <div class="div-pt"><p>3.5</p></div>
                    </div>
                    <div class="col-md-1 space space-1">
                      <div class="div-pt"><p>3.5</p></div>
                    </div>
                    <div class="col-md-1 space space-1">
                      <div class="div-pt"><p>3.5</p></div>
                    </div>
                  </div> -->
                </div>

                <hr class="hr-detalle">
<?php

if(isset($product_detail) && count($product_detail) > 0 ){
	?>
                <div class="col-md-12">
                  <div class="col-md-12">
                    <p class="subtit-gen">Tamaños y especificaciones</p>
                  </div>

                  <div class="col-md-12">

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

<?php

$dd=array();
foreach($product_detail as $item){
$dd[$item->rin_text][]= $item;
	}
$cont = 0 ;
foreach($dd as $k => $v){
$cont++;
?>                
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#info-<?=$cont?>" aria-expanded="false" aria-controls="collapseTwo"><h4 class="title-tab">
                        <?=$k?>"
                        </h4></a>
                      </div>
                      <div id="info-<?=$cont?>" class="panel-collapse collapse <?=($cont==1) ? 'in': ''?>" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body" style="padding:0px">
                          <div class="col-sm-12" style="padding:0px">
						
                        <table class="table">
  <thead >
    <tr>
       <th>#</th>
      <th>TAMA&Ntilde;O</th>
      <th>ÍNDICE DE CARGA</th>
      <th>ÍNDICE DE VELOCIDAD</th>
      <th>ORIGEN</th>
    </tr>
  </thead>

  <tbody>  
  <?php  $it = relation_data($diseno->origen_del_producto_relation, 'origen_del_producto');
  $ct2=0;
  foreach($v as $iit){ $ct2++;
  ?>
    <tr>
      <th scope="row"><?=$ct2?></th>
      <td><?=$iit->original_text?></td>   
      <td><?=$iit->ancho_text?></td>
      <td><?=$iit->serie_text?></td>
      <td><?=$it->nombre_text;?></td>
    </tr>
  <? }?>
  </tbody>
</table>

                        
                          </div>
                      
                        </div>
                      </div>
                    </div>
<?php }?>
                    </div>
                  </div>

                </div>
<?php }?>
              </div>  
            </div>
        </div>
    <!-- Main End -->