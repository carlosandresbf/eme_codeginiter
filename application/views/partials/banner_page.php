    <div class="main-section">
            <!--Main Banner-->
                <input hidden="hidden" name="cant_of_banners" id="cant_of_banners" value="<?=count($banner)?>" />
            <div class="page-section adjust">
                <div class="carousel slide_inter">
               <?php foreach($banner as $item){?>
                	<div class="item">
						<img src="<?= base_url() ?>admin/uploads/files/<?=$item->imagen_file?>" alt="">
                        <div class="txt_banner">
                            <h1><?=$item->texto_1_text?></h1>
                            <p><?=$item->texto_2_text?></p>
                        </div>
					</div>
	                <?php }?>
                </div>
               <?php
			$data['custom_filter']=$custom_filter;
			$this->load->view('partials/search_page',$data); ?>



            </div>
        </div>
  

