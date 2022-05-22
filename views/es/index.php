<?php include_once("../../classes/sanitize.php");?>
<!DOCTYPE html5>
<html>
<head>
    <title>Inicio | Sistema de Gestión de Liguilla</title>
    <!-- Stylesheets -->
	<link rel="stylesheet" href="../../media/css/index.css" />
	<link rel="stylesheet" href="../../media/css/boxicons.min.css" />
	<link rel="stylesheet" href="../../media/flags/css/flag-icons.min.css" />
	<!-- Scripts -->
    <script type="text/javascript" src="../../media/js/index.js"></script>
</head>
    <body>
    <div class="container" id="container">
	    <div class="form-container sign-up-container">
		    <form action="#">
				<img id="logo" src="../../media/images/logo.png" />
			    <h1 style="margin-top: 60px;">Crear una cuenta</h1>
			<span>registrate para crear una nueva cuenta</span>
			<div id="page1" class="page">
				<div class="input-container">
					<i class="bx bx-user input-icon"></i>
					<input type="text" name="username" placeholder="Nombre de usuario" pattern="<?php echo USERNAME_PATTERN;?>"/>
				</div>
				<div class="input-container">
					<i class="bx bx-id-card input-icon"></i>
					<input type="text" name="firstname" placeholder="Nombre(s)" pattern="<?php echo FIRSTNAME_PATTERN;?>"/>
				</div>
				<div class="input-container">
					<i class="bx bx-id-card input-icon"></i>
					<input type="text" name="lastname" placeholder="Apellido(s)" pattern="<?php echo LASTNAME_PATTERN;?>" />
				</div>
				<div class="input-container">
					<i class="bx bx-mail-send input-icon"></i>
					<input type="email" name="email" placeholder="Correo electrónico" />
				</div>
				<div class="input-container">
					<i class="bx bx-lock input-icon"></i>
					<input type="password" name="password" placeholder="Contraseña" />
				</div>
				<div class="input-container">
					<i class="bx bx-party input-icon"></i>
					<input type="date" class="form-select" name="birthdate" />
				</div>
				
				<div class="input-container">
					<i class="bx bx-flag input-icon"></i>
					<select name="nationality">
						<option value="" disabled="disabled" selected="selected" hidden="hidden">País</option>
						<?php
							$countries = array();
							for($i = 0; $i < count($countries); $i++)
							{
								echo "<option>" . $countries[$i] . "</option>";
							}
						?>
					</select>
				</div>

				<div class="input-container">
					<i class="bx bx-dumbbell input-icon"></i>
					<input type="number" min="0" max="200" step="0.1" placeholder="Peso (kg)" />
				</div>
			</div>

			<div id="page2" class="page hidden">
				<div class="input-container">
					<i class="bx bx-question-mark input-icon"></i>
					<select name="qid1">
						<option value="" disabled="disabled" selected="selected" hidden="hidden">Pregunta de seguridad 1</option>
						<?php
							$secquestions = array();
							for($i = 0; $i < count($secquestions); $i++)
							{
								echo "<option>" . $secquestions[$i] . "</option>";
							}
						?>
					</select>
				</div>
				<div class="input-container">
					<i class="bx bx-message-detail input-icon" style="color: white;"></i>
					<input type="text" name="qa1" placeholder="Respuesta 1"/>	
				</div>
				
				<div class="input-container">
					<i class="bx bx-question-mark input-icon"></i>
					<select name="qid2">
						<option value="" disabled="disabled" selected="selected" hidden="hidden">Pregunta de seguridad 2</option>
						<?php
							$secquestions = array();
							for($i = 0; $i < count($secquestions); $i++)
							{
								echo "<option>" . $secquestions[$i] . "</option>";
							}
						?>
					</select>
				</div>
				<div class="input-container">
					<i class="bx bx-message-detail input-icon" style="color: white;"></i>
					<input type="text" name="qa2" placeholder="Respuesta 2"/>	
				</div>

				<div class="input-container">
					<i class="bx bx-question-mark input-icon"></i>
					<select name="qid3">
						<option value="" disabled="disabled" selected="selected" hidden="hidden">Pregunta de seguridad 3</option>
						<?php
							$secquestions = array();
							for($i = 0; $i < count($secquestions); $i++)
							{
								echo "<option>" . $secquestions[$i] . "</option>";
							}
						?>
					</select>
				</div>
				<div class="input-container">
					<i class="bx bx-message-detail input-icon" style="color: white;"></i>
					<input type="text" name="qa3" placeholder="Respuesta 3"/>	
				</div>

				<div class="input-container">
					<i class="bx bx-question-mark input-icon"></i>
					<select name="qid4">
						<option value="" disabled="disabled" selected="selected" hidden="hidden">Pregunta de seguridad 4</option>
						<?php
							$secquestions = array();
							for($i = 0; $i < count($secquestions); $i++)
							{
								echo "<option>" . $secquestions[$i] . "</option>";
							}
						?>
					</select>
				</div>
				<div class="input-container">
					<i class="bx bx-message-detail input-icon" style="color: white;"></i>
					<input type="text" name="qa4" placeholder="Respuesta 4"/>	
				</div>
			</div>
			<div>
				<button id="prevPage" type="button" class="page-button hidden"><i class="bx bx-caret-left input-icon"></i></button>
				<button>Registrar</button>
				<button id="nextPage" type="button" class="page-button"><i class="bx bx-caret-right input-icon"></i></button>
			</div>
		</form>
		
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<img id="logo" src="../../media/images/logo.png" />
			<h1 style="margin-top: 60px;">Iniciar sesión</h1>
			<span>inicia sesión con tu cuenta</span>
			<div class="input-container">
				<i class="bx bx-user input-icon"></i> 
				<input type="text" placeholder="Nombre de usuario" name="username"/>
			</div>
			
			<div class="input-container">
				<i class="bx bx-lock input-icon"></i> 
				<input type="password" placeholder="Contraseña" name="password"/>
			</div>
			<a href="reset.php">Olvidé mi contraseña</a>
			<button>Iniciar sesión</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>¡Bienvenido de vuelta!</h1>
				<p>Continúa donde dejaste la última vez al iniciar sesión</p>
				<button class="ghost" id="signIn">Iniciar sesión</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>¡Hola, amigo!</h1>
				<p>Registrate ingresando tus datos para usar este sistema</p>
				<button class="ghost" id="signUp">Registrarse</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
        Copyright Ventus, Inc. &copy <?php echo date("Y");?>
		<a href="../es/index.php">Español (ES-MX)</a>
		<a href="../en/index.php">English (EN-US)</a>
	</p>
</footer>
    </body>
</html>