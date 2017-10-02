 <?php 
			$this->load->view('partials/banner_page'); ?>

 <div class="container"> 
        <div>
            <div class="row">
              <div class="col-md-12">
                <h3 class="tit-gen">Buscar distribuidores</h3>
                <div class="inc">
                    <select class="select-dist">
                    	<option value="" selected="selected">Ciudad</option>
                        <?php foreach($red_ciudades as $item){?><option value="<?=$item->id?>"><?=$item->nombre_text?></option><?php }?>
                       
                    </select>
                    <a class="btn-dist" href="#">Buscar</a>
                    <br><br>
                    <a class="btn-dist" href="<?php echo base_url()?>become_a_distributor" style="margin-left: 23%;">Conviérte en Distribuidor</a>
                    <br><br>
                </div>
                
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php
$cont = 0 ;
foreach($red as $key => $item){
$cont++;
?>  
                
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <a class="<?=( ((!isset($_GET['city'])|| empty($_GET['city'])) && $cont==1) || ( isset($_GET['city']) && !empty($_GET['city']) && $_GET['city'] == $key)) ? '': 'collapsed'?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#info-<?=$cont?>" aria-expanded="<?=($cont==1) ? 'true': 'false'?>" aria-controls="collapseTwo">
                    	<h4 class="panel-title"><?=$item['ciudad']?></h4>
                    </a>
                  </div>
	                  <div id="info-<?=$cont?>" class="panel-collapse collapse <?=( ((!isset($_GET['city'])|| empty($_GET['city'])) && $cont==1) || ( isset($_GET['city']) && !empty($_GET['city']) && $_GET['city'] == $key)) ? 'in': ''?>" role="tabpanel" aria-labelledby="headingTwo">
	                    <div class="panel-body">

<?php foreach($item['distribuidores'] as $detail){?>
	                    	<div class="box-distri">
			                    <div class="row">
			                        <div class="col-md-4 pad-box">
			                            <div class="img-distri"><img src="<?= base_url() ?>admin/uploads/files/<?= $detail->imagen_file?>"></div>
			                        </div>
			                        <div class="col-md-8 pad-box">
			                            <p class="info-text-1"><?= $detail->nombre_text?></p>
			                            <p class="info-text-2"><?= $detail->direccion_text?></p>
			                            <span class="info-text-3"><i class="icon-phone ico-tam-dist"></i>&nbsp;&nbsp;<?= $detail->telefonos_text?></span>
			                            <span class="info-text-3"><i class="icon-iphone26 ico-tam-dist"></i>&nbsp;&nbsp;<?= $detail->celulares_text?></span>
			                            <span class="info-text-3"><i class="icon-earth ico-tam-dist"></i>&nbsp;&nbsp;<?= $detail->pagina_web_text?></span>
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
            </div>
        </div>