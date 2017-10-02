                         <div class="wide-2 clearfix">
                                <div class="container">
                                    <div class="row">
                                        <div class="pr-info col-md-12 col-xs-12 box_info">
                                            <h2>Avances del proyecto</h2>
                                            <div class="row cust-row">
                                               <?php foreach($galery_avances as $img){?>
                                                    <div class="col-xs-3 cust-pad">
                                                        <div class="pr-img2"  style="background: url(<?php echo base_url().'images/imagen_proyecto_code/'.$img->COD_OBR.'/code/'.$img->COD_DOC?>) center;">
<?php $main_counter++?>
<label for="op" class="btn btn-small btn-primary"  onclick="$('.owl-carousel').trigger('to.owl.carousel', <?php echo $main_counter?>)
">Ampliar</label>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>