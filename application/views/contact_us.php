<div id="page-content">
			<img src="<?php echo base_url()?>assets/img/021.jpg" class="banner">
			<div class="container">
				<div class="row">
					<div class="contact-form">
                    
<?php echo ($response!='')?'<div class="alert '.$type.'" id="myMessage">'.$response.'</div>':'';?>
<script>$(document).ready(function(){
setTimeout(function(){ $("#myMessage").remove(); }, 20000);
	});
</script>
						<h2>Estamos aquí para asesorate.</h2>
						<h6>Lunes a Viernes horario regular</h6>
						<form id="form-submit" class="form-submit" method="post" action="<?php echo base_url('contact_us/go_contact');?>">
							<div class="col-md-6">
								<div class="input-group">
									<label>Tu nombre:</label>
									<input id="input-name" name="nombre" type="text" class="form-control"  required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<label>Correo electroníco:</label>
									<input id="input-email" name="email" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group">
									<label>Asunto:</label>
									<input id="input-subject" name="asunto" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group">
									<label>Mensaje:</label>
									<textarea id="text-area-contact" name="mensaje" rows="8" cols="45" class="form-control"></textarea>
								</div>
							</div>
							<div class="submit">
								<span class="ffs-bs"><button type="submit" id="tohide" onclick="$('#tohide').hide();" class="btn btn-large btn-primary" style="color:#fff;">Enviar mensaje</button></span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>