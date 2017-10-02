<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<div id="modal-login" class="modal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2>Iniciar sesión</h2>
					<span>Bienvenido a casa</span>
				</div>
				<form id="loginForm">
					<div class="modal-body">
						<center><fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
						</fb:login-button><center>
						<hr>
						<div class="form-group">
							<input type="text" name="email" placeholder="Email" class="input-send" required>
							<span class="fa fa-at"></span>
						</div>				
						<div class="form-group">
							<input type="password" name="password" placeholder="Contraseña" class="input-send"  required>
							<span class="fa fa-lock"></span>
						</div>
					</div>
					<div class="modal-footer">
						<div class="form-group clearfix">
                            <span>¿No tienes cuenta? <a data-dismiss="modal" data-toggle="modal" data-target="#modal-register">Regístrate</a></span>
							<span>¿Olvidaste la contaseña? <a  data-dismiss="modal" data-toggle="modal" data-target="#modal-olvide">Recordar</a></span>
							<button type="submit" class="btn btn-primary">Iniciar sesión</button>					
						</div>
					</div>		
				</form>
			</div>
		</div>
	</div>
    
    <div id="modal-olvide" class="modal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2>¿Olvidaste tu contraseña?</h2>
					<span>no te preocupes nosotros nos acordamos</span>
				</div>
				<form id="recoveryPasswordForm">
					<div class="modal-body">
						<div class="form-group">
							<input type="text" name="user-email" class="input-send" placeholder="Email" required>
							<span class="fa fa-at"></span>
						</div>
					</div>
					<div class="modal-footer">
						<div class="form-group clearfix">
							<button type="submit" class="btn btn-primary">Enviar</button>					
						</div>
					</div>		
				</form>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('#loginForm').submit(function(event) {
				event.preventDefault();
				data = {};
				$('#loginForm .input-send').each(function(index, el) {
					data[ $(this).attr('name') ] = $(this).val();
				});


				$.ajax({
				  url: $('#base_url').val()+'auth/verify',
				  type: 'POST',
				  data: data
				}).done(function(response) {
					if (response.success) {
						location.reload();
					}else{
						alert('Los datos de ingreso son incorrectos')
					}
				});

			});
		});
	</script>

	<script>
		$(document).ready(function() {
			$('#recoveryPasswordForm').submit(function(event) {
				event.preventDefault();
				data = {};
				$('#recoveryPasswordForm .input-send').each(function(index, el) {
					data[ $(this).attr('name') ] = $(this).val();
				});

				$.ajax({
				  url: $('#base_url').val()+'auth/recover_password',
				  type: 'POST',
				  data: data
				}).done(function(response) {
					alert(response.msg);
				});

			});
		});
	</script>
</body>
</html>