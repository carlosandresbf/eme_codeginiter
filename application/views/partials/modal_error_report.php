<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modal error report</title>
</head>
<body>
	<div id="modal-error" class="modal" tabindex="-1">
		<div class="modal-dialog">
			<form class="modal-content" id="errorReportForm">			
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2>Reportar un error</h2>
					<span>Gracias, por contarnos que sucedio</span>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="nombre_text" placeholder="Nombre:" class="input-send" required>					
					</div>				
					<div class="form-group">
						<input type="text" name="email_text" placeholder="Email:" class="input-send" required>					
					</div>
					<div class="form-group">
						<label>Mensaje:</label>
						<textarea class="input-send" name="mensaje_textarea"></textarea>
					</div>				
				</div>
				<div class="modal-footer">	
					<div class="form-group">							
						<button type="submit" class="btn btn-block">Enviar reporte</button>	
					</div>				
				</div>	
			</form>
		</div>
	</div>
</body>
</html>

<script>
	$(document).ready(function() {
		$('#errorReportForm').submit(function(event) {
			event.preventDefault();
			data = {};
			$('#errorReportForm .input-send').each(function(index, el) {
				data[ $(this).attr('name') ] = $(this).val();
			});

			$.ajax({
			  url: $('#base_url').val()+'home/error_report',
			  type: 'POST',
			  data: data
			}).done(function(response) {
				alert('Gracias, el reporte ha sido enviado.');
				$('#errorReportForm .input-send').val('')
			});

		});
	});
</script>