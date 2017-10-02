<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modal agent message</title>
</head>
<body>
	<div id="modal-error" class="modal" tabindex="-1">
		<div class="modal-dialog">
			<form class="modal-content" id="contactAgentForm">			
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2>Enviar Mensaje</h2>
					<span>a <?= $agent ?></span>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="name" class="contact-agent" placeholder="Nombre" required>					
					</div>				
					<div class="form-group">
						<input type="text" name="email" class="contact-agent" placeholder="Email:" required>					
					</div>
					<div class="form-group">
						<label>Mensaje:</label>
						<textarea name="message" class="contact-agent"></textarea>
					</div>				
				</div>
				<div class="modal-footer">	
					<div class="form-group">							
						<button type="submit" class="btn btn-block">Enviar</button>	
					</div>				
				</div>	
			</form>
		</div>
	</div>
</body>
</html>
<script>
	$(document).ready(function() {
		$('#contactAgentForm').submit(function(event) {
			event.preventDefault();
			data = {};
			$('.contact-agent').each(function(index, el) {
				data[ $(this).attr('name') ] = $(this).val();
			});

			data['agent_email'] = $('#contact-agent').val();

			$.ajax({
			  url: $('#base_url').val()+'home/contact_agent',
			  type: 'POST',
			  data: data
			}).done(function(response) {
				alert('Gracias, el mensaje ha sido enviado, pronto el agente se pondrá en contacto con usted.');
				$('.contact-agent').val('')
			});

		});
	});
</script>