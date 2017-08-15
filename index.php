<?php 
function resultat() {
	global $_POST;
	$score = 0;
	foreach ($_POST as $key => $value) {
		$score = $score + (int)$value;
	}
	
	
	echo '<p>Tu as obtenu : <strong>'.$score.' </strong> points </p> ';
	
}
	
?>
<!DOCTYPE html>
<html lang="en">
<head> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	 


	<link rel="stylesheet" href="nomophobie.css">
	
	<meta charset="UTF-8">
	<title>Test Nomophobie</title>
</head>
<body>
<div class="showrunner">
	<h1>Le questionnaire de la nomophobie</h1>
	<h2>Becode style</h2>
	<p>
	Vous devez répondre aux questions suivantes selon une échelle de 1 (fortement en désaccord) à 7 (fortement en accord). Plus votre résultat est élevé, plus le niveau de votre nomophobie est élevé (20 étant le score le moins élevé et 140 étant le score le plus élevé).
	</p>
	
</div>

<form method="post" class="questionnaire">
	<div class="questions">
		<div class="question">
		<p>
		1. Je me sentirais mal à l’aise sans un accès constant à de l’information sur mon téléphone cellulaire.
		</p>
		</div>
		<div class="reponse">
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options0" value="1" >
                    </label>
                     
				</div>
				<div class="chiffre">1</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options0"  value="2">
                    </label>
				</div>
				<div class="chiffre">2</div>
			</div>
			<div class="gradient">
			<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options0" value="3" >
                    </label>
			</div>
				<div class="chiffre">3</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options0" value="4" >
                    </label>
				</div>
				<div class="chiffre">4</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options0" value="5" >
                    </label>
				</div>
				<div class="chiffre">5</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options0" value="6" >
                    </label>
				</div>
				<div class="chiffre">6</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options0" value="7" >
                    </label>
				</div>
				<div class="chiffre">7</div>
			</div>
		</div>
	</div>
	<div class="questions">
		<div class="question">
		<p>
		2. Je me sentirais agacé si je ne pouvais pas consulter de l’information sur mon téléphone quand bon me semble.

		</p>
		</div>
		<div class="reponse">
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options1" value="1" >
                    </label>
				</div>
				<div class="chiffre">1</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options1" value="2" >
                    </label>
				</div>
				<div class="chiffre">2</div>
			</div>
			<div class="gradient">
			<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options1" value="3" >
                    </label>
			</div>
				<div class="chiffre">3</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options1" value="4" >
                    </label>
				</div>
				<div class="chiffre">4</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options1" value="5" >
                    </label>
				</div>
				<div class="chiffre">5</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options1" value="6" >
                    </label>
				</div>
				<div class="chiffre">6</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options1" value="7" >
                    </label>
				</div>
				<div class="chiffre">7</div>
			</div>
		</div>
	</div>
	<div class="questions">
		<div class="question">
		<p>
		3. Je me sentirais nerveux si je ne pouvais pas m’informer (actualité, météo, etc.) sur mon téléphone.

		</p>
		</div>
		<div class="reponse">
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options2" value="1" >
                    </label>
				</div>
				<div class="chiffre">1</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options2" value="2" >
                    </label>
				</div>
				<div class="chiffre">2</div>
			</div>
			<div class="gradient">
			<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options2" value="3" >
                    </label>
			</div>
				<div class="chiffre">3</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options2" value="4" >
                    </label>
				</div>
				<div class="chiffre">4</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options2" value="5" >
                    </label>
				</div>
				<div class="chiffre">5</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options2" value="6" >
                    </label>
				</div>
				<div class="chiffre">6</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options2" value="7" >
                    </label>
				</div>
				<div class="chiffre">7</div>
			</div>
		</div>
	</div>
	<div class="questions">
		<div class="question">
		<p>
		4. Je me sentirais agacé si je ne pouvais pas utiliser mon téléphone ou ses fonctionnalités quand bon me semble.

		</p>
		</div>
		<div class="reponse">
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options3" value="1" >
                    </label>
				</div>
				<div class="chiffre">1</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options3" value="2" >
                    </label>
				</div>
				<div class="chiffre">2</div>
			</div>
			<div class="gradient">
			<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options3" value="3" >
                    </label>
			</div>
				<div class="chiffre">3</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options3" value="4" >
                    </label>
				</div>
				<div class="chiffre">4</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options3" value="5" >
                    </label>
				</div>
				<div class="chiffre">5</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options3" value="6" >
                    </label>
				</div>
				<div class="chiffre">6</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options3" value="7" >
                    </label>
				</div>
				<div class="chiffre">7</div>
			</div>
		</div>
	</div>
	<div class="questions">
		<div class="question">
		<p>
		5. Manquer de batterie pour mon cellulaire me ferait peur.

		</p>
		</div>
		<div class="reponse">
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options4" value="1" >
                    </label>
				</div>
				<div class="chiffre">1</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options4" value="2" >
                    </label>
				</div>
				<div class="chiffre">2</div>
			</div>
			<div class="gradient">
			<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options4" value="3" >
                    </label>
			</div>
				<div class="chiffre">3</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options4" value="4" >
                    </label>
				</div>
				<div class="chiffre">4</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options4" value="5" >
                    </label>
				</div>
				<div class="chiffre">5</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options4" value="6" >
                    </label>
				</div>
				<div class="chiffre">6</div>
			</div>
			<div class="gradient">
				<div>
					<label class="btn btn-default ">
                          <input type="radio" name="options4" value="7" >
                    </label>
				</div>
				<div class="chiffre">7</div>
			</div>
		</div>
	</div>
		 <?php resultat(); ?>
	 <button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg">Verifier mes reponses!</button>
	
</form>
	
</body>
</html>