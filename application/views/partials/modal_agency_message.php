<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modal agency message</title>
</head>
<body>
	<div id="modal-error" class="modal" tabindex="-1">
		<div class="modal-dialog">
			<form class="modal-content" action="thank_you_page.html">			
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2>Enviar mensaje</h2>
					<span>¿Cuentame como te puedo ayudar?</span>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="error-name" placeholder="Nombre complet:" required>					
					</div>				
					<div class="form-group">
						<input type="text" name="error-email" placeholder="Email:" required>					
					</div>
					<div class="form-group">
						<label>Mensaje:</label>
						<textarea></textarea>
					</div>				
				</div>
				<div class="modal-footer">	
					<div class="form-group">							
						<button id="error-submit" type="submit" class="btn btn-block">Enviar</button>	
					</div>				
				</div>	
			</form>
		</div>
	</div>
</body>
</html>