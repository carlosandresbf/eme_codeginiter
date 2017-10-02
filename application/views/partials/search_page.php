<!--- SEARCHTIME -->
<div class="page-section search">
	<div class="container">
		<div class="row">
			<div class="section-fullwidtht col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<!--Element Section Start-->
					<div class="main-search" >
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active">
								<a class="tab-type boton-search-b" href="#tab-1" aria-controls="home" role="tab" data-toggle="tab">BÚSQUEDA GENERAL</a>
							</li>
							<li role="presentation">
								<a class="tab-type boton-search-b" href="#tab-2" aria-controls="profile" role="tab" data-toggle="tab">BUSCAR POR MEDIDA</a>
							</li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="tab-1">
								<div class="bx_red clearfix">
									<form action="<?php echo base_url()?>catalog/search" method="get">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="search-input">
												<select class="chosen-select" name="marca">
													<option value="" selected="selected">¿Qué marca es tu vehículo?</option>
													
													<?php foreach($custom_filter['marcas'] as $content){?>
													<option value="<?php echo $content->id?>"> <?php echo $content->nombre_text?> </option>
													<?php }?>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
											<div class="select-dropdown">
												<select class="chosen-select" id="year" name="modelo">
													<option value="" selected="selected">Modelo</option>
													
													
												</select>
											</div>
										</div>
										
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
											<div class="select-dropdown">
												<select class="chosen-select"  name="version">
													<option selected="selected" value="">Versión</option>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
											<div class="select-dropdown">
												<select class="chosen-select"  name="anio">
													<option selected="selected"  value="">Año</option>
													
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
											<input type="submit" value="Buscar" class="searchbt" />
										</div>
									</form>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="tab-2">
								<div class="bx_red clearfix">
									<form action="<?php echo base_url()?>catalog/search" method="get">
										<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
											<div class="search-input">
												<select class="chosen-select"  name="ancho">
													<option value="" selected="selected"> ¿Qué ancho es tu llanta?</option>
													<?php foreach($custom_filter['ancho'] as $content){?>
													<option value="<?php echo $content->id?>"> <?php echo $content->nombre_text?> </option>
													<?php }?>
													
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<div class="select-dropdown">
												<select class="chosen-select"   name="serie">
													<option value="" selected="selected">Serie</option>
													
													
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<div class="select-dropdown">
												<select class="chosen-select" name="rin">
													<option selected="selected"  value="">Rin</option>
													
												</select>
											</div>
										</div>
										
										
										<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
											<input type="submit" value="Buscar" class="searchbt" />
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!--Element Section End-->
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
	
$(document).on('change', "select[name='marca']", function(event) {
	event.preventDefault();
		
				$("select[name='modelo']").each(function(){
				$(this).empty();
																});
				$("select[name='version']").each(function(){
				$(this).empty();
											});
				$("select[name='anio']").each(function(){
				$(this).empty();
									});
		
		
	if ($(this).val() != '') {
			$.ajax({
type: "POST", dataType: "json", url: "<?=base_url()?>catalog/load_modelos_by_marcas", data: "id=" + $(this).val(),
success: function(data){




$("select[name='modelo']").each(function(){
$(this).append(decodeURIComponent(data.modelos));
});

$("select[name='modelo']").trigger("chosen:updated");
},
error: function(data){
console.log('fail');
}
});

}

});

$(document).on('change', "select[name='modelo']", function(event) {
event.preventDefault();


$("select[name='version']").each(function(){
$(this).empty();
});
$("select[name='anio']").each(function(){
$(this).empty();
});


if ($(this).val() != '') {
$.ajax({
type: "POST", dataType: "json", url: "<?=base_url()?>catalog/load_version_by_modelo", data: "id=" + $(this).val(),
success: function(data){




$("select[name='version']").each(function(){
$(this).append(decodeURIComponent(data.versiones));
});

$("select[name='version']").trigger("chosen:updated");
},
error: function(data){
console.log('fail');
}
});

}

});

$(document).on('change', "select[name='version']", function(event) {
event.preventDefault();

$("select[name='anio']").each(function(){
$(this).empty();
});


if ($(this).val() != '') {
$.ajax({
type: "POST", dataType: "json", url: "<?=base_url()?>catalog/load_anio_by_version", data: "id=" + $(this).val(),
success: function(data){




$("select[name='anio']").each(function(){
$(this).append(decodeURIComponent(data.anios));
});

$("select[name='anio']").trigger("chosen:updated");
},
error: function(data){
console.log('fail');
}
});

}

});




$(document).on('change', "select[name='ancho']", function(event) {
event.preventDefault();

$("select[name='serie']").each(function(){
$(this).empty();
});
$("select[name='rin']").each(function(){
$(this).empty();
});


if ($(this).val() != '') {
$.ajax({
type: "POST", dataType: "json", url: "<?=base_url()?>catalog/load_series_by_anchos", data: "id=" + $(this).val(),
success: function(data){




$("select[name='serie']").each(function(){
$(this).append(decodeURIComponent(data.series));
});

$("select[name='serie']").trigger("chosen:updated");
},
error: function(data){
console.log('fail');
}
});

}

});
$(document).on('change', "select[name='serie']", function(event) {
event.preventDefault();

$("select[name='rin']").each(function(){
$(this).empty();
});


if ($(this).val() != '') {
$.ajax({
type: "POST", dataType: "json", url: "<?=base_url()?>catalog/load_rines_by_series", data: "id=" + $(this).val()+"&ancho="+$("select[name='ancho']").val(),
success: function(data){




$("select[name='rin']").each(function(){
$(this).append(decodeURIComponent(data.rines));
});

$("select[name='rin']").trigger("chosen:updated");
},
error: function(data){
console.log('fail');
}
});

}

});

});
</script>