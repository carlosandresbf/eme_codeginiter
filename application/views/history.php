 <?php 
			$this->load->view('partials/banner_page'); ?>

    <!-- Main Star -->
        <div class="container">
            <div class="row">
                <h3 class="tit-gen"><?= $pages->descripcion_corta_text?></h3>            
                <div class="col-sm-6">
                    <p class="sec-2-txt"><?= $pages->contenido_textarea?></div>            
                <div class="col-sm-6">
                    <figure class="img-histo"><img src="<?= base_url() ?>admin/uploads/files/<?= $pages->imagen_file?>"></figure>
                </div>
            </div>
        </div>

        <div class="container body-inter">
            <div class="row">
                <div class="col-sm-9">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a class="tab-type boton-search-b" href="#tab-a" aria-controls="home" role="tab" data-toggle="tab">VEHÍCULO</a></li>
                        <li role="presentation"><a class="tab-type boton-search-b" href="#tab-b" aria-controls="profile" role="tab" data-toggle="tab">LÍNEA</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tab-content-inter">
                        <div role="tabpanel" class="tab-pane active" id="tab-a">
                            <div class="row">
                            <?php
							$count=0;
							 foreach($galerias['Vehiculo'] as $item ){
								$count++; 
								 ?>
                                <div class="col-sm-<?=($count>3)? 6: 4;?>">
                                    <figure class="img-tab_histo"><h4 class="tit-img_tab_histo"><?=$item['titulo']?></h4><img src="<?= base_url() ?>admin/uploads/files/<?=$item['imagen']?>"></figure>
                                </div>
                                <? }  ?>
                              
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab-b">
                            <div class="row">
                                <?php
							$count=0;
							 foreach($galerias['Linea'] as $item ){
								$count++; 
								 ?>
                                <div class="col-sm-<?=($count>3)? 6: 4;?>">
                                    <figure class="img-tab_histo"><h4 class="tit-img_tab_histo"><?=$item['titulo']?></h4><img src="<?= base_url() ?>admin/uploads/files/<?=$item['imagen']?>"></figure>
                                </div>
                                <? }  ?>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-sm-3">
                    <h5 class="subtit-gen">Qué está Pasando</h5>
                    <div class="plugin-fb">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=<?=urlencode($config->facebook)?>&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="390" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
		<!-- Main End -->