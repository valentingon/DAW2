<html>
	<head>
		<title>Sistema Viagens</title>
		<meta charset="UTF-8">
		<link rel='stylesheet' type="text/css" href="assets/css/login.css">
	</head>
	
	<body>
			<section class="all">
			
					<div class="primero">
						<img id="logo_imagen" src="assets/img/ifsul_logo.jpg">
				
						<p id="menu_text">Sistema de <span id="fspan">Viagens</span></p>
					</div>
			
					<div class="segundo">
						<form role="form" method="POST" action="login-ok.php">
							
								<label for="user"></label>
								<input type="email" class="etiquetas" placeholder="Usuario/E-mail"  name="email" />
						
							
								<label for="password" ></label>
								<input type="password" class="etiquetas" placeholder="Contraseña" name="password"/>
								
								<input list="tipos" name="tipos">
								  <datalist id="tipos">
									<option value="ROOT" name="Root">Root</option>
									<option value="SUP" name="Sup">Supervisor</option>
									<option value="PROF" name="Prof">Profe</option>
								  </datalist>
								
								<button type="submit" name="Login" value="Login" class="button button1">Iniciar sesión</button>
						</form>
					</div>	
					<div class="tercera">
							<button type="submit" name="submit">Iniciar sesión</button>
					</div>				
	
			</section>
	</body>
</html>