<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Hi guys</title>
	<link rel="shortcut icon" href="img/logo.png">
	<link rel="stylesheet" href="css/index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<nav>
			<a href="html/welcome.html"> login </a>
			<a href="#operaciones">Operacion</a>
			<a href="#acessos">Accesos</a>
		</nav>
		<section class="textos-header">
			<h1>Programacion Base de Datos</h1>
			<h2>Juan Pablo Herrera</h2>
			<div class="wave" style="height: 50px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-20.59,20.05 C68.56,147.36 391.36,-17.44 510.44,80.25 L500.00,150.00 L-13.26,157.22 Z" style="stroke: none; fill: #fff;"></path></svg></div>
		</section>
		
</header>

		
		<main>
			<section class="contenedor Operaciones-Basicas">
				<h2 class="subtitulo" id="operaciones">Operaciones Basicas</h2>
				<div class="contenedor-Operaciones-Basicas" >
					<img src="img/Operacion.png" alt="" class="imagen-operacion">
					<div class="Operacion-texto" alt="">
						
						<h3><span>1ra</span> suma </h3>
						<div  id="js">
		
	
    						<script>
    							var a =1;
    							var b= 2;
    							var c = a+b;
    							document.write("la suma es: "+c)
    						</script>
						<h3><span>2nd</span> Suma </h3>		
							<div id= "php">
								<?php
								$a = 5;
								$b = 3;
								$c = $a+$b;
								echo"la suma es: ".$c;
								?>	
						</div>
						</div>

					</div>
				</div>
			</section>
		</main>
	
<h4 class="links" id="acessos">Acessos</h4>
	<footer>
		<div class="contenedor-footer">
			<div class="content-foo">
				<h5>YouTube</h5>
				<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ " target="blank"> Youtube </a>
			</div>
			<div class="content-foo">
				<h5>JavaScript</h5>
				<a href="js/ejercicio.js"> JavaScript </a>
			</div>
			<div class="content-foo">
				<h5>PHP</h5>
				<a href="php/ejercicio.php"> PHP </a>
			</div>
			
		</div>
	
	</footer>

	


</body>
</html>