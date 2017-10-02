 <?php 
			$this->load->view('partials/banner_page'); ?>

<!-- Main Star -->
<div>

        	<h4 class="panel-catalogo">Resultados <span>:</span></h4>
<?php 
if(count($products)>0){
foreach($products as $item){ 

$marca = relation_data($item->marcas_de_productos_relation, "marcas_de_productos");
							if($item->tipo_de_vehiculo_relation == 4){
							$diseno = relation_data($item->id, "diseno_motos");
							}else{
							$diseno = relation_data($item->id, "diseno");	
								}
?>
        	<div class="container">
	        	<div class="box-distri">
	                <div class="row">
	                    <div class="col-md-4 pad-box">
	                        <div class="img-distri"><img src="<? if(empty($diseno->imagen_file)){echo base_url().'admin/uploads/files/logo_default.png';}else{ echo  base_url() ?>admin/uploads/files/<? echo $diseno->imagen_file;} ?>"></div>
	                    </div>
	                    <div class="col-md-8 pad-box">
	                         <p class="info-text-1"><?php
							  echo $marca->marca_text.' | '.$diseno->nombre_text?></p><?php 
				 $array=array('marca' => $this->session->userdata('marca'),
						 'modelo' => $this->session->userdata('modelo'),
						 'version' => $this->session->userdata('version'),
						 'anio' => $this->session->userdata('anio'),
						 'ancho' => $this->session->userdata('ancho'),
						 'serie' => $this->session->userdata('serie'),
						 'rin' => $this->session->userdata('rin'));
							$srch = original_size_predict_data($array,$item->id);
						  if(count($srch)>0){?>
	                         <p class="product-2" style="font-weight:bold">Tama&ntilde;o: <?=$srch[0]->original_text?></p><?php }?>
	                        <p class="info-text-2 info-text-2-cat"><?php echo $item->subtitulo_text?></p>
	                          <form>
	                            <div class="stars">
	                              <input type="radio" name="star<?php echo $item->id?>" class="star<?php echo $item->id?>-1" id="star<?php echo $item->id?>-1" value="1" />
	                              <label class="star<?php echo $item->id?>-1" for="star<?php echo $item->id?>-1" data-id="<?php echo $item->id?>">1</label>
	                              <input type="radio" name="star<?php echo $item->id?>" class="star<?php echo $item->id?>-2" id="star<?php echo $item->id?>-2"  value="2" />
	                              <label class="star<?php echo $item->id?>-2" for="star<?php echo $item->id?>-2" data-id="<?php echo $item->id?>">2</label>
	                              <input type="radio" name="star<?php echo $item->id?>" class="star<?php echo $item->id?>-3"id="star<?php echo $item->id?>-3" value="3"  />
	                              <label class="star<?php echo $item->id?>-3" for="star<?php echo $item->id?>-3" data-id="<?php echo $item->id?>" >3</label>
	                              <input type="radio" name="star<?php echo $item->id?>" class="star<?php echo $item->id?>-4" id="star<?php echo $item->id?>-4" value="4"  />
	                              <label class="star<?php echo $item->id?>-4" for="star<?php echo $item->id?>-4" data-id="<?php echo $item->id?>">4</label>
	                              <input type="radio" name="star<?php echo $item->id?>" class="star<?php echo $item->id?>-5" id="star<?php echo $item->id?>-5" value="5"  />
	                              <label class="star<?php echo $item->id?>-5" for="star<?php echo $item->id?>-5" data-id="<?php echo $item->id?>" >5</label>
	                              <span id="star<?php echo $item->id?>" style=" width:<?=(($item->calificacion_promedio_number*100)/5);?>%"></span> 
	                            </div>
	                          </form>
	                           <span class="info-text-3"><figure class="ico-cat ico-cat-1"></figure>&nbsp;&nbsp;<?=$item->caracteristica_destacada_1_text?></span>
                        <span class="info-text-3"><figure class="ico-cat ico-cat-2"></figure>&nbsp;&nbsp;<?=$item->caracteristica_destacada_2_text?></span>
                        <span class="info-text-3"><figure class="ico-cat ico-cat-3"></figure>&nbsp;&nbsp;<?=$item->caracteristica_destacada_3_text?></span>
	                        <br><br>
	                        <a href="<?php echo base_url()?>catalog/product/<?php echo url_encode( $diseno->nombre_text)?>" class="btn_red btn_red_gen">VER DETALLE</a>
	                    </div>
	               	</div>
	           	</div>
           	</div>
           	<div class="line_bot-cat"></div>
<style>
rm .stars label:hover ~ span {
  background-position: 0 -30px;
}
form .stars label.star<?php echo $item->id?>-5:hover ~ span {
  width: 100% !important;
}
form .stars label.star<?php echo $item->id?>-4:hover ~ span {
  width: 80% !important;
}
form .stars label.star<?php echo $item->id?>-3:hover ~ span {
  width: 60% !important;
}
form .stars label.star<?php echo $item->id?>-2:hover ~ span {
  width: 40% !important;
}
form .stars label.star<?php echo $item->id?>-1:hover ~ span {
  width: 20% !important;
}
			</style>
<?php }
}else{
?>
<div class="container">
	        	<div class="box-distri">
	                <div class="row">
	                    <div class="col-md-12 pad-box" style=" text-align: center; font-weight: bold;">
	                        No se han encontrado resultados que coincidan con tu busqueda.
	                    </div>
	                 	</div>
	           	</div>
           	</div>
<?php
		}
?>
   <script>
$(document).ready(function(){
 $(document).on('click', "form .stars label", function(event) {

	 $("input[name=star"+$(this).attr('data-id')+"]").val($(this).text());
	 var percent = (($(this).text()*100)/5);
	 $("#star"+$(this).attr('data-id')).css('width',percent+'%');
    	event.preventDefault();
   	if ($(this).attr('data-id') != '') {
			$.ajax({
				type: "POST", dataType: "json", url: "<?=base_url()?>catalog/save_score", data: "id="+ $(this).attr('data-id')+"&score=" + $("input[name=star"+$(this).attr('data-id')+"]").val(),
				success: function(data){ 
										
									},
					error: function(data){
					   console.log('fail');
						}
					});
									
								}
		  	
    });
	});
</script>  

<div class="col-xs-12 content_2 top-indent">

      								<div class="wrapcenter">

									<nav class="site-navigation paging-navigation navbar">
                                    <ul class="pagination pagination-lg">
										<?= $pagination  ?>
                                    </ul>
									</nav>
                                    </div>
								</div><br />
<br />
<br />


        </div>
<!-- Main End -->       
