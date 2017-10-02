<div id="page-content">
			<div class="wide_container_2">
				<img src="<?php echo base_url()?>assets/img/032.jpg" class="banner">
                
                <div class="container">
                	<h2 style="margin-bottom:30px;">Proyectos destacados</h2>
                    
<?php                    $cnt_itms = 0;
					 foreach($projects_new as $item){?>
                    
                	<div class="col-md-3">
                    	<a href="<?php echo base_url()?>proyectos/show/<?php echo url_encode($item->CODIGO.'_'.$item->NOMBRE)?>" class="proyecto_box">
                        	<div class="title_proyecto"><?php echo $item->NOMBRE?></div>
                        	<img width="248" height="180" src="<?php echo base_url().'images/imagen_proyecto/'.$item->CODIGO.'/type/p'///size/big'?>" />
                            <hr>
                            <div class="data_proyecto">
                            	Desde <?=$item->PRECIO?><br>
                                <?=$item->AREA?><br>
                                <?=$item->TELEFONO?>
                            </div>
                        </a>
                    </div>

                	<?php }?>

                </div>
			</div>
		</div>