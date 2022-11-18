<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Problemario | Affectum</title>
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
</head>
<body class="background">
<style>
        body{
            font-family: 'Montserrat', sans-serif;
            color: white;
        }
</style>
<nav class="navbar navbar-default">
  <div class="container"> 
     
</nav>
<?php 
	session_start();
	if(isset($_SESSION['message'])){
		?>
		<div class="alert alert-info text-center" style="margin-top:20px;">
			<?php echo $_SESSION['message']; ?>
		</div>
		<?php

		unset($_SESSION['message']);
	}
?>

<div class="menu">
        <div class="bar">

            <div class="circleleft"></div>
            <div class="ayudabtn">
                <div class="circleh">
                    <div><button class="help"><div class="help-content">
                        <div><img src="../images/help-assist.jpg" class="help-assist">
                    </div>
                        <div class="text"><h2 class="text">AYUDA</h2>¡Responde las preguntas con lo que tu corazón diga!. Elige un número del 1 al 10 para elegir que tan feliz te sientes con las preguntas (1 es Totalmente triste, 5 es neutro y 10 es Totalmente feliz) Recuerda que no hay respuestas incorrectas :)</div>
                </div><img src="../images/help-icon.png"></button>
                </div>
                    
                </div>
            </div>

            <div class="logo"><h1 class="encuestah1">Encuesta</h1></div>

        </div>
    </div>

<div class="situation">
	<div class="situationbox">
		<div class="text2">
			<?php
			include_once('dbconect.php');
			$database = new Connection();
			$db = $database->open();
			for($i = 1; $i <= 10; $i++){

			?>
			<h1>PREGUNTA <?php echo $i; ?></h1>
			<?php
			//$sql = "SELECT `nompr` FROM `pregun` WHERE `codpr`= '$i'";
			$sql = "SELECT * FROM pregun WHERE codpr = '$i'";
			//$ejec = mysql_query($sql);
			//$preg = mysql_fetch_array($ejec);

			echo $sql;
			
			}
			?>
		<?php
			//incluimos el fichero de conexion
			include_once('dbconect.php');

			$database = new Connection();
			$db = $database->open();
			try{	
				$sql = "SELECT posibles.codpo, posibles.nompo, pregun.codpr, pregun.nompr, pregun.stop FROM posibles INNER JOIN pregun ON posibles.codpr=pregun.codpr where stop= '1'";
				foreach ($db->query($sql) as $row) {
					?>
					<a href="#edit_<?php echo $row['codpr']; ?>" title="Editar" data-backdrop="false" class="btn btn-primary btn-sm" data-toggle="modal"><?php echo $row['codpr']; ?></a>
					<?php include('encues_modal.php'); ?>
					<?php 
				}
			}
			catch(PDOException $e){
				echo "Hubo un problema en la conexión: " . $e->getMessage();
			}

			//Cerrar la Conexion
			$database->close();

		?>

		
		</div>
	</div>

	<div class="slider"></div>

</div>


<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
 
</body>
</html>