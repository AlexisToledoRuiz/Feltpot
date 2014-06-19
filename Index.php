<?php include 'templates/header.php' ?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Las macetas de fieltro Feltpot, por sus propiedades, aumentan la velocidad de crecimiento de tus plantas, la producción de cultivo y además, son termoaislantes">
	<title>Feltpot - Macetas de fieltro</title>
	<meta Name="Keywords" Content="maceta, macetas, fieltro, contenedor"> 
	<link rel="shortcut icon" href="img/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/estilo.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <script src="js/funciones.js" type="text/javascript"></script>
</head>
<body>
	<!--GOOGLE ANALYTICS-->
	<?php include 'js/analytics.js' ?>
	<header>
		<a href="index.php"><img src="img/logo.png" alt="Logo feltpot" ></a>
		<nav>
			<ul>
				<li><a href="index.php" style="color:#6eb121;"><?php echo utf8_encode($arrayLanguage[0]["nombre".$front->getLanguage()."_txt"])?></a></li>
				<li><a href="productos.php"><?php echo utf8_encode($arrayLanguage[1]["nombre".$front->getLanguage()."_txt"])?></a></li>
				<li><a href="informacion.php"><?php echo utf8_encode($arrayLanguage[2]["nombre".$front->getLanguage()."_txt"])?></a></li>
				<li><a href="tiendaonline.php"><?php echo utf8_encode($arrayLanguage[3]["nombre".$front->getLanguage()."_txt"])?></a></li><!--
                <?php if(isset($_SESSION["usuario"]) and ($_SESSION["usuario"])!= " ")
				{
					echo '<span style="color:#6eb121;">Bienvenido ' .ucfirst($_SESSION["usuario"]). '</span>';
					echo ' &nbsp;<a href="logout.php">Cerrar sesión</a>';
				}
					else{ ?>
				<li><a href="login.php"><?php echo utf8_encode($arrayLanguage[4]["nombre".$front->getLanguage()."_txt"])?></a></li>-->
				<li><a href="spannabis.php">SPANNABIS 2014</a></li>
				<?php   } ?>
            </ul>
		</nav>
		<div class="idioma">
			<ul>
				<a class="lengs" href="http://<?php echo $_SERVER["HTTP_HOST"].$_SERVER["SCRIPT_NAME"]; ?>?lang=ES"><li>Es</li></a>
				<a class="lengs" href="http://<?php echo $_SERVER["HTTP_HOST"].$_SERVER["SCRIPT_NAME"]; ?>?lang=EN"><li>En</li></a>
			</ul>
		</div>
	</header>
	<aside>
		<h1><?php echo utf8_encode($arrayLanguage[10]["nombre".$front->getLanguage()."_txt"])?></h1>
		<span class="descargar"><a href="catalogo.php"><?php echo utf8_encode($arrayLanguage[11]["nombre".$front->getLanguage()."_txt"])?></a></span>
	</aside>
	<section>
		<img src="img/feltpot-home.png" alt="">
	</section>
		<footer>
			<div class="copyright">
				<a href="">Feltpot 2014 &copy;</a>
				<a href="contacto.php" style="float:right; margin-right:70px;"><?php echo utf8_encode($arrayLanguage[18]["nombre".$front->getLanguage()."_txt"])?></a>
				<a href="aviso.php" style="float:right; margin-right:;"><?php echo utf8_encode($arrayLanguage[17]["nombre".$front->getLanguage()."_txt"])?></a>
			</div>
		</footer>

</body>
</html>
