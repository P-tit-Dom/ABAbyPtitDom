<?php
$root = "/edsa-ptitdom_MVC"
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>ABA by P'tit Dom</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Theme styles -->
	<link rel="stylesheet" type="text/css" href="<?= $root ?>/assets/css/content2.css">
	<script type="text/javascript" src="<?= $root ?>/scripts/functions.js"></script>
</head>

<body>
	<?php
	$path = explode('/', $_GET['p'])[0];
	if ($path != "Seance") {
	?>
		<header>
			<!-- display header unless in cotation ? -->
			<table class="header">
				<tr>
					<td>
						<a href="<?= $root ?>">
							<img src="<?= $root ?>/assets/img/Logo.png" alt="Logo" class="logo">
						</a>
					</td>
					<td>
						<a href="<?= $root ?>">
							<button class="h1">
								<h1>ABA by P'tit Dom</h1>
							</button>
						</a>
					</td>
					<td>
						<?php if (isset($_SESSION['username'])) { ?>
							<form action="" method="post">
								<a href="<?= $root ?>">
									<button name="disconnection"><img src="<?= $root ?>/assets/img/Exit.png" alt="Déconnexion"></button>
								</a>
							</form>
						<?php } ?>
					</td>
				</tr>
			</table>

			<?php if (isset($_SESSION['username'])) { ?>
				<div style="margin-left: 3%;">
					<a href="<?= $root ?>"><button class="button_psy" type="button">Psychologue</button></a> <!-- based on role (session) -->
					<?php foreach (explode('/', $_GET['p']) as $p) {
						if ($p != "") {
							echo ' <img src="../assets/img/suivant.png"> ' . $p;
						}
					} ?>
				</div>
			<?php } ?>
		</header>
	<?php } # end path!=Seance 
	?>

	<main role="main">
		<?php if (isset($_SESSION['username']) && ($path == "" || $path == "Apprenant")) { ?>
			<div class="fond_aprenant">
				<label for="learner">Sélection d'un apprenant :</label>
				<select id="learner" class="selection_apprenant">
					<!--  onchange="update_action(this)" -->
					<?php
					foreach ($aps as $a) {
						echo '<option value="' . $a['id'] . '"';
						if (isset($ap['id']) && $ap['id'] == $a['id']) { // ---------------- $ap being the current learner -------------------------------------------------------------------------------------------- //
							echo ' selected';
						}
						echo '>' . $a['nom'] . '</option>';
					}
					?>
				</select>
				<a href="<?= $root ?>" onclick="this.href='<?= $root ?>/Apprenant/'+this.previousElementSibling.value"><button class="img-button"><img src="<?= $root ?>/assets/img/loupe.png"></button></a>
			</div>
		<?php } ?>
		<?= $content ?>
	</main>
	<footer>
	</footer>
	<script type="text/javascript" src="<?= $root ?>/scripts/js.js"></script>
</body>

<style>
	.button_psy {
		background-color: #AB6EB1;
		border: 1px solid #834889;
		color: white;
		border-radius: 1em;
		width: 7%;
		height: 2em;
		font-weight: bold;
	}

	.button_psy:hover {
		background-color: #834889;
		transition: background .20s ease-in-out;
	}


	.fond_aprenant {
		padding: .5%;
		width: 20%;
		background-color: white;
		border: 1px solid black;
		border-radius: .5em;
		margin: auto;
	}

	.loupe {
		background-color: none;
	}

	#afficher_page {
		margin-left: 1%;
	}

	.selection_apprenant {
		background-color: white;
		border: 2px solid grey;
		margin-bottom: 1%;
	}

	.selection_apprenant:hover {
		background-color: rgb(240, 240, 240);
	}
</style>

</html>