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
	<div class='preguntas_wrapper'>
	<div class="situation">
	<div class="situationbox">
		<div class="slider"> ¿Cómo ha sido tu día en la escuela? </div>
		<div class="text2">
			<form class="fr1" action="">
				<div>
					<div class="fr__face" role="img" aria-label="Straight face">
						<div class="fr__face-right-eye" data-right></div>
						<div class="fr__face-left-eye" data-left></div>
						<div class="fr__face-mouth-lower" data-mouth-lower></div>
						<div class="fr__face-mouth-upper" data-mouth-upper></div>
					</div>
					<input name='pregunta1' class="fr__input 1" id="face-rating" type="range" value="5" min="0" max="10" step="1">
				</div>
			</form>
		</div>
	</div>
	</div>
	<div class="situation">
	<div class="situationbox">
		<div class="slider"> ¿Cómo te sientes cuando estás con tus amigos? </div>
		<div class="text2">
			<form class="fr2" action="">
				<div>
					<div class="fr__face" role="img" aria-label="Straight face">
						<div class="fr__face-right-eye" data-right></div>
						<div class="fr__face-left-eye" data-left></div>
						<div class="fr__face-mouth-lower" data-mouth-lower></div>
						<div class="fr__face-mouth-upper" data-mouth-upper></div>
					</div>
					<input name='pregunta2' class="fr__input 1" id="face-rating" type="range" value="5" min="0" max="10" step="1">
				</div>
			</form>
		</div>
	</div>
	</div>
	<div class="situation">
	<div class="situationbox">
		<div class="slider"> ¿Cómo te sientes cuando juegas con tus amigos? </div>
		<div class="text2">
			<form class="fr3" action="">
				<div>
					<div class="fr__face" role="img" aria-label="Straight face">
						<div class="fr__face-right-eye" data-right></div>
						<div class="fr__face-left-eye" data-left></div>
						<div class="fr__face-mouth-lower" data-mouth-lower></div>
						<div class="fr__face-mouth-upper" data-mouth-upper></div>
					</div>
					<input name='pregunta3' class="fr__input 1" id="face-rating" type="range" value="5" min="0" max="10" step="1">
				</div>
			</form>
							</div>
						</div>
					</div>
					<div class="situation">
	<div class="situationbox">
		<div class="slider"> Si un amigo tuyo se acerca a ti en este momento, ¿Cómo te sentirías? </div>
		<div class="text2">
			<form class="fr4" action="">
				<div>
					<div class="fr__face" role="img" aria-label="Straight face">
						<div class="fr__face-right-eye" data-right></div>
						<div class="fr__face-left-eye" data-left></div>
						<div class="fr__face-mouth-lower" data-mouth-lower></div>
						<div class="fr__face-mouth-upper" data-mouth-upper></div>
					</div>
					<input name='pregunta4' class="fr__input 1" id="face-rating" type="range" value="5" min="0" max="10" step="1">
				</div>
			</form>
							</div>
						</div>
					</div>
					<div class="situation">
	<div class="situationbox">
		<div class="slider"> ¿Cómo te sientes al estar en tu casa? </div>
		<div class="text2">
			<form class="fr5" action="">
				<div>
					<div class="fr__face" role="img" aria-label="Straight face">
						<div class="fr__face-right-eye" data-right></div>
						<div class="fr__face-left-eye" data-left></div>
						<div class="fr__face-mouth-lower" data-mouth-lower></div>
						<div class="fr__face-mouth-upper" data-mouth-upper></div>
					</div>
					<input name='pregunta5' class="fr__input 1" id="face-rating" type="range" value="5" min="0" max="10" step="1">
				</div>
			</form>
							</div>
						</div>
					</div>
					<div class="situation">
	<div class="situationbox">
		<div class="slider"> ¿Si tuvieras la oportunidad, te gustaría ir a jugar al parque en este momento? </div>
		<div class="text2">
			<form class="fr6" action="">
				<div>
					<div class="fr__face" role="img" aria-label="Straight face">
						<div class="fr__face-right-eye" data-right></div>
						<div class="fr__face-left-eye" data-left></div>
						<div class="fr__face-mouth-lower" data-mouth-lower></div>
						<div class="fr__face-mouth-upper" data-mouth-upper></div>
					</div>
					<input name='pregunta6' class="fr__input 1" id="face-rating" type="range" value="5" min="0" max="10" step="1">
				</div>
			</form>
							</div>
						</div>
					</div>
					<div class="situation">
	<div class="situationbox">
		<div class="slider"> ¿Cómo te sentirías si te dieran un abrazo en este momento? </div>
		<div class="text2">
			<form class="fr7" action="">
				<div>
					<div class="fr__face" role="img" aria-label="Straight face">
						<div class="fr__face-right-eye" data-right></div>
						<div class="fr__face-left-eye" data-left></div>
						<div class="fr__face-mouth-lower" data-mouth-lower></div>
						<div class="fr__face-mouth-upper" data-mouth-upper></div>
					</div>
					<input name='pregunta7' class="fr__input 1" id="face-rating" type="range" value="5" min="0" max="10" step="1">
				</div>
			</form>
							</div>
						</div>
					</div>
					<div class="situation">
	<div class="situationbox">
		<div class="slider"> ¿Cómo crees que te ves? ¿Cómo una carita feliz o como una carita triste? </div>
		<div class="text2">
			<form class="fr8" action="">
				<div>
					<div class="fr__face" role="img" aria-label="Straight face">
						<div class="fr__face-right-eye" data-right></div>
						<div class="fr__face-left-eye" data-left></div>
						<div class="fr__face-mouth-lower" data-mouth-lower></div>
						<div class="fr__face-mouth-upper" data-mouth-upper></div>
					</div>
					<input name='pregunta8' class="fr__input 1" id="face-rating" type="range" value="5" min="0" max="10" step="1">
				</div>
			</form>
							</div>
						</div>
					</div>
					<div class="situation">
	<div class="situationbox">
		<div class="slider">  Cuando te levantas de la cama en la mañana, ¿Cómo te sientes? </div>
		<div class="text2">
			<form class="fr9" action="">
				<div>
					<div class="fr__face" role="img" aria-label="Straight face">
						<div class="fr__face-right-eye" data-right></div>
						<div class="fr__face-left-eye" data-left></div>
						<div class="fr__face-mouth-lower" data-mouth-lower></div>
						<div class="fr__face-mouth-upper" data-mouth-upper></div>
					</div>
					<input name='pregunta9' class="fr__input 1" id="face-rating" type="range" value="5" min="0" max="10" step="1">
				</div>
			</form>
							</div>
						</div>
					</div>
					<div class="situation">
	<div class="situationbox">
		<div class="slider"> ¿Cómo te sientes al estar solo? </div>
		<div class="text2">
			<form class="fr10" action="">
				<div>
					<div class="fr__face" role="img" aria-label="Straight face">
						<div class="fr__face-right-eye" data-right></div>
						<div class="fr__face-left-eye" data-left></div>
						<div class="fr__face-mouth-lower" data-mouth-lower></div>
						<div class="fr__face-mouth-upper" data-mouth-upper></div>
					</div>
					<input name='pregunta10' class="fr__input 1" id="face-rating" type="range" value="5" min="0" max="10" step="1">
				</div>
			</form>
							</div>
						</div>
					</div>
			<button class='submitBtn'>Listo</button>
		</div>
	</div>
</div>
</div>



<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
	window.addEventListener("DOMContentLoaded",() => {
	const fr1 = new FaceRating("input[name='pregunta1']");
	const fr2 = new FaceRating("input[name='pregunta2']");
	const fr3 = new FaceRating("input[name='pregunta3']");
	const fr4 = new FaceRating("input[name='pregunta4']");
	const fr5 = new FaceRating("input[name='pregunta5']");
	const fr6 = new FaceRating("input[name='pregunta6']");
	const fr7 = new FaceRating("input[name='pregunta7']");
	const fr8 = new FaceRating("input[name='pregunta8']");
	const fr9 = new FaceRating("input[name='pregunta9']");
	const fr10 = new FaceRating("input[name='pregunta10']");
});

class FaceRating {
	constructor(qs) {
		this.input = document.querySelector(qs);
		this.input?.addEventListener("input",this.update.bind(this));
		this.face = this.input?.previousElementSibling;
		this.update();
	}
	update(e) {
		let value = this.input.defaultValue;

		// when manually set
		if (e) value = e.target?.value;
		// when initiated
		else this.input.value = value;

		const min = this.input.min || 0;
		const max = this.input.max || 100;
		const percentRaw = (value - min) / (max - min) * 100;
		const percent = +percentRaw.toFixed(2);

		this.input?.style.setProperty("--percent",`${percent}%`);

		// face and range fill colors
		const maxHue = 120;
		const hueExtend = 30;
		const hue = Math.round(maxHue * percent / 100);

		let hue2 = hue - hueExtend;
		if (hue2 < 0) hue2 += 360;

		const hues = [hue,hue2];
		hues.forEach((h,i) => {
			this.face?.style.setProperty(`--face-hue${i + 1}`,h);
		});

		this.input?.style.setProperty("--input-hue",hue);

		// emotions
		const duration = 1;
		const delay = -(duration * 0.99) * percent / 100;
		const parts = ["right","left","mouth-lower","mouth-upper"];

		parts.forEach(p => {
			const el = this.face?.querySelector(`[data-${p}]`);
			el?.style.setProperty(`--delay-${p}`,`${delay}s`);
		});

		// aria label
		const faces = [
			"Sad face",
			"Slightly sad face",
			"Straight face",
			"Slightly happy face",
			"Happy face"
		];
		let faceIndex = Math.floor(faces.length * percent / 100);
		if (faceIndex === faces.length) --faceIndex;

		this.face?.setAttribute("aria-label",faces[faceIndex]);
	}
}

const submitBtn = document.querySelector('.submitBtn')

submitBtn.addEventListener('click', (e)=>{
	e.preventDefault();

	const respuesta1 = document.querySelector("input[name='pregunta1']").value;
	const respuesta2 = document.querySelector("input[name='pregunta2']").value;
	const respuesta3 = document.querySelector("input[name='pregunta3']").value;
	const respuesta4 = document.querySelector("input[name='pregunta4']").value;
	const respuesta5 = document.querySelector("input[name='pregunta5']").value;
	const respuesta6 = document.querySelector("input[name='pregunta6']").value;
	const respuesta7 = document.querySelector("input[name='pregunta7']").value;
	const respuesta8 = document.querySelector("input[name='pregunta8']").value;
	const respuesta9 = document.querySelector("input[name='pregunta9']").value;
	const respuesta10 = document.querySelector("input[name='pregunta10']").value;

	console.log(respuesta1)
	console.log(respuesta2)
	console.log(respuesta3)
	console.log(respuesta4)
	console.log(respuesta5)
	console.log(respuesta6)
	console.log(respuesta7)
	console.log(respuesta8)
	console.log(respuesta9)
	console.log(respuesta10)


})


</script>
 
</body>
</html>