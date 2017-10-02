<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<div id="modal-register" class="modal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header text-center" >
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2>Crea tu cuenta</h2>
					<span>en solo 1 minuto</span>
				</div>
				<form id="signupForm">
					<div class="modal-body">	
						<center>

                        <fb:login-button size="xlarge" scope="public_profile,email" onlogin="checkLoginState(); Log.info('onlogin callback')" style="width:100%; height:40px"></fb:login-button>
                        
                        </center>
						<hr>		
						<div class="form-group">
							<input type="text" name="name" class="input-send" placeholder="Nombre completo" required>
						</div>
						<div class="form-group">
							<input type="text" name="telephone" class="input-send" placeholder="Teléfono" required>
						</div>
						<div class="form-group">
							<input type="text" name="email" class="input-send" placeholder="Email" required>
						</div>
                        <div class="form-group">
							<input type="password" name="password" class="input-send" placeholder="Contraseña" required>
						</div>
					</div>
					<div class="modal-footer">
						<div class="form-group clearfix">					
							<span>Ya tienes cuenta <a data-dismiss="modal" data-toggle="modal" data-target="#modal-login" id="login">Inicia sesión</a></span>					
							<button type="submit" class="btn btn-primary">Enviar</button>		
						</div>
						<div>
							<span class="terms">Al dar click en Enviar esta aceptando nuestros <br> <a href="terms_and_conditions.php" target="blank">Términos y condiciones</a></span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('#signupForm').submit(function(event) {
				event.preventDefault();
				data = {};
				$('#signupForm .input-send').each(function(index, el) {
					data[ $(this).attr('name') ] = $(this).val();
				});

				$.ajax({
				  url: $('#base_url').val()+'auth/signup',
				  type: 'POST',
				  data: data
				}).done(function(response) {
					if (response.success) {
						window.location.href = $('#base_url').val()+'thanks';
					}else{
						alert(response.msg)
					}
				});

			});
		});
	</script>
</body>
</html>
