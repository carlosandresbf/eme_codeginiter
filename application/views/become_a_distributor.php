		<!-- Main Start -->
		<?php 
			$this->load->view('partials/banner_'.$item_target); ?>
<div class="container">
            <div class="row">
              <div class="col-md-12">
              <div class="wrapcenter">
              <p></p>
                <h2 class="marcas">Conviérte en Distribuidor</h2>
                <!--Colorcar texto-->
                        <p></p>
              </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="false" aria-controls="collapseOne" <?=@$ccc?>>
                      <?=$necesita->descripcion_corta_text?>&nbsp;<img width="20px" src="<?=base_url()?>assets/img/down-arrow.png">
                      </a>
                    </h4>
                  </div>
                  <div id="collapse-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                     <?=$necesita->contenido_textarea?>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="false" aria-controls="collapseOne" <?=@$ccc?>>
                      <?=$pasos->descripcion_corta_text?>&nbsp;<img width="20px" src="<?=base_url()?>assets/img/down-arrow.png">
                      </a>
                    </h4>
                  </div>
                  <div id="collapse-2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                   <?=$pasos->contenido_textarea?>
                    </div>
                  </div>
                </div>

              </div>

              </div>  
            </div>
        </div>