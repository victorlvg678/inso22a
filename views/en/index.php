<?php include_once("../../classes/sanitize.php");?>
<!DOCTYPE html5>
<html>
<head>
    <title>Login | Sistema de Gestión de Liguilla</title>
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
			    <h1 style="margin-top: 60px;">Create account</h1>
			<span>create a new account</span>
			<div id="page1" class="page">
				<div class="input-container">
					<i class="bx bx-user input-icon"></i>
					<input type="text" name="username" placeholder="Username" pattern="<?php echo USERNAME_PATTERN;?>"/>
				</div>
				<div class="input-container">
					<i class="bx bx-id-card input-icon"></i>
					<input type="text" name="firstname" placeholder="Firstname" pattern="<?php echo FIRSTNAME_PATTERN;?>"/>
				</div>
				<div class="input-container">
					<i class="bx bx-id-card input-icon"></i>
					<input type="text" name="lastname" placeholder="Lastname" pattern="<?php echo LASTNAME_PATTERN;?>" />
				</div>
				<div class="input-container">
					<i class="bx bx-mail-send input-icon"></i>
					<input type="email" name="email" placeholder="Email" />
				</div>
				<div class="input-container">
					<i class="bx bx-lock input-icon"></i>
					<input type="password" name="password" placeholder="Password" />
				</div>
				<div class="input-container">
					<i class="bx bx-party input-icon"></i>
					<input type="date" class="form-select" name="birthdate" />
				</div>
				
				<div class="input-container">
					<i class="bx bx-flag input-icon"></i>
					<select name="nationality">
						<option value="" disabled="disabled" selected="selected" hidden="hidden">Country</option>
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
					<input type="number" min="0" max="200" step="0.1" placeholder="Weight (kg)" />
				</div>
			</div>

			<div id="page2" class="page hidden">
				<div class="input-container">
					<i class="bx bx-question-mark input-icon"></i>
					<select name="qid1">
						<option value="" disabled="disabled" selected="selected" hidden="hidden">Security question 1</option>
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
					<input type="text" name="qa1" placeholder="Answer 1"/>	
				</div>
				
				<div class="input-container">
					<i class="bx bx-question-mark input-icon"></i>
					<select name="qid2">
						<option value="" disabled="disabled" selected="selected" hidden="hidden">Security question 2</option>
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
						<option value="" disabled="disabled" selected="selected" hidden="hidden">Security question 3</option>
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
					<input type="text" name="qa3" placeholder="Answer 3"/>	
				</div>

				<div class="input-container">
					<i class="bx bx-question-mark input-icon"></i>
					<select name="qid4">
						<option value="" disabled="disabled" selected="selected" hidden="hidden">Security question 4</option>
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
					<input type="text" name="qa4" placeholder="Answer 4"/>	
				</div>
			</div>
			<div>
				<button id="prevPage" type="button" class="page-button hidden"><i class="bx bx-caret-left input-icon"></i></button>
				<button>Register</button>
				<button id="nextPage" type="button" class="page-button"><i class="bx bx-caret-right input-icon"></i></button>
			</div>
		</form>
		
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<img id="logo" src="../../media/images/logo.png" />
			<h1 style="margin-top: 60px;">Log in</h1>
			<span>Login into your account</span>
			<div class="input-container">
				<i class="bx bx-user input-icon"></i> 
				<input type="text" placeholder="Username" name="username"/>
			</div>
			
			<div class="input-container">
				<i class="bx bx-lock input-icon"></i> 
				<input type="password" placeholder="Password" name="password"/>
			</div>
			<a href="reset.php">Forgot password?</a>
			<button>Log in</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome back, friend!</h1>
				<p>Log into your account to continue where you left last time</p>
				<button class="ghost" id="signIn">Log in</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hey, buddy!</h1>
				<p>Register now for using this system</p>
				<button class="ghost" id="signUp">Register</button>
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