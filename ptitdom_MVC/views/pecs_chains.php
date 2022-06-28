   <head>
   	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<meta charset="utf-8" />
   	<title>
   		Parametrage PECS
   	</title>
   </head>

   <body>
   	<disposition_colonne>
   		<div style="width:50%; border-right: 1px solid black;">
   			<h2 style="text-align: center;"> Banque d'images du PECS</h2>


   			<disposition_colonne>


   				<ajout_activite>
   					<h2>Ajouter activité</h2>
   					<form>
   						<input type="text" placeholder="Saisir activité à ajouter" class="espace">
   						<button class="green-button" type="button">Ajouter activité</button>
   					</form>
   					<liste_acti_im>
   						<element>
   							<h class="mot">Jouer</h>
   							<h button class="mot" type="button"><img src="assets/img/Supprimer_pxl.png "></button></h>
   						</element>
   						<element>
   							<h class="mot">Dormir</h>
   							<h button class="mot" type="button"><img src="assets/img/Supprimer_pxl.png "></button></h>
   						</element>
   					</liste_acti_im>
   					<disposition_colonne>
   						<h button type="button"><img src="assets/img/fleche_g.png" alt="Profil" class="f_g"></h>
   						<h class="pages">Page 1</h>
   						<h button type="button"><img src="assets/img/fleche_d.png" alt="Profil" class="f_d"></h>
   					</disposition_colonne>
   				</ajout_activite>

   				<ajout_image>
   					<h2>Ajouter Images</h2>
   					<form>
   						<input type="text" placeholder="Saisir image à ajouter" class="espace">
   						<button class="green-button" type="button">Ajouter image</button>
   					</form>
   					<liste_acti_im>
   						<element>
   							<h class="mot">La montgolfière chez l'ophtalmo</h>
   							<h button class="mot" type="button"><img src="assets/img/Supprimer_pxl.png "></button></h>
   						</element>
   						<element>
   							<h class="mot">La page d'accueil windows</h>
   							<h button class="mot" type="button"><img src="assets/img/Supprimer_pxl.png "></button></h>
   						</element>
   					</liste_acti_im>
   					<disposition_colonne>
   						<h button type="button"><img src="assets/img/fleche_g.png" alt="Profil" class="f_g"></h>
   						<h class="pages">Page 1</h>
   						<h button type="button"><img src="assets/img/fleche_d.png" alt="Profil" class="f_d"></h>
   				</ajout_image>
   				<div>

   				</div>
   			</disposition_colonne>
   		</div>
   		<div style="width:50%;">
   			<h2 style="padding-bottom: 1%;"> Modifier les modèles de cibles</h2>
   			<table style="width:100%;">
   				<tr>
   					<td>
   						<h2>Domaine :</h2>
   					</td>
   					<td>
   						<h2>Compétence :</h2>
   					</td>
   					<td>
   						<h2>Objectif :</h2>
   					</td>
   				</tr>
   				<tr>
   					<td>
   						<select class="trois_select">
   							<option>Domaine 1</option>
   							<option>Domaine 2</option>
   							<option>Domaine 3</option>
   						</select>
   					</td>
   					<td>
   						<select class="trois_select">
   							<option>Compétence 1</option>
   							<option>Compétence 2</option>
   							<option>Compétence 3</option>
   						</select>
   					</td>
   					<td>
   						<select class="trois_select">
   							<option>Objectif 1</option>
   							<option>Objectif 2</option>
   							<option>Objectif 3</option>
   						</select>
   					</td>
   				</tr>
   			</table>
   			<table style="width: 100%;">
   				<tr>
   					<td>
   						Nom du modèle :
   					</td>
   					<td>
   						<select style="width: 20em;" class="trois_select">
   							<option>Modèle 1</option>
   							<option>Modèle 2</option>
   							<option>Modèle 3</option>
   							<option>Modèle 4</option>
   						</select>
   					</td>
   					<td>
   						<button type="button" class="green-button">Nouveau modèle</button>
   					</td>
   				</tr>
   			</table>
   			<div class="modeles">
   				<div class="cibles">
   					<table style="width: 100%; border: 1px solid black;">
   						<tr>
   							<td style="text-align: left; width: 80%;"> Cible 1</td>
   							<td style="border-left: 2px solid black; border-right: 2px solid black;">
   								<select style="margin: 0; height: 2em; width: 7em" class="trois_select">
   									<option>+/G</option>
   									<option>Oui/Non</option>
   								</select>
   							</td>
   							<td>
   								<h button class="mot" type="button"><img src="assets/img/Supprimer_pxl.png "></button></h>
   							</td>
   						</tr>
   						<tr>
   							<td style="text-align: left; width: 80%;"> Cible 1</td>
   							<td style="border-left: 2px solid black; border-right: 2px solid black;">
   								<select style="margin: 0; height: 2em; width: 7em" class="trois_select">
   									<option>+/G</option>
   									<option>Oui/Non</option>
   								</select>
   							</td>
   							<td>
   								<h button class="mot" type="button"><img src="assets/img/Supprimer_pxl.png "></button></h>
   							</td>
   						</tr>
   					</table>
   				</div>
   			</div>
   			<button style="margin: 1% 0 0 5%;" class="green-button" type="button">Ajouter cible</button>
   			<disposition_colonne>
   				<h button type="button"><img src="assets/img/fleche_g.png" alt="Profil" class="f_g"></h>
   				<h style="margin-top: 1%; width: 15%;" class="pages">Page 1</h>
   				<h button type="button"><img src="assets/img/fleche_d.png" alt="Profil" class="f_d"></h>
   			</disposition_colonne>
   		</div>
   	</disposition_colonne>
   </body>

   <style>
   	.cibles {
   		width: 100%;
   		background-color: rgb(234, 234, 234);
   	}

   	.modeles {
   		background-color: white;
   		border: 1px solid black;
   		width: 90%;
   		height: 20em;
   		margin: 0 auto;
   	}

   	.trois_select {
   		background-color: white;
   		margin-top: 8%;
   		margin: 4% auto;
   		height: 3em;
   		width: 15em;
   	}

   	.mot {
   		margin: 0 2%;
   	}

   	element {
   		border: 1px solid black;
   		background-color: rgb(234, 234, 234);
   		display: flex;
   		justify-content: space-between;
   	}

   	.pages {
   		width: 40%;
   		margin-top: 2%;
   		font-weight: bold;
   	}

   	.f_d {
   		margin: 0 62% 0 0;
   		width: 50%;
   	}

   	.f_g {
   		margin: 0 0 0 62%;
   		width: 50%;
   	}

   	.f_g:hover {
   		cursor: pointer;
   	}

   	.f_d:hover {
   		cursor: pointer
   	}

   	liste_acti_im {
   		display: flex;
   		flex-direction: column;
   		background-color: white;
   		border: 1px solid black;
   		margin: 0 20% 0 20%;
   		height: 25em;
   		max-height: 60vh;
   	}

   	.espace {
   		margin-top: 8%;
   		width: 60%;
   	}

   	.retour {
   		width: 60%;
   	}

   	h2 {
   		font-weight: bold;
   	}


   	fleche_retour {
   		margin-top: 2%;
   		width: 10%;
   	}

   	ajout_activite {
   		width: 100%;
   		margin-top: 2%;
   		text-align: center;
   		border-right: 2px solid black;
   	}

   	ajout_image {
   		width: 100%;
   		margin-top: 2%;
   		text-align: center;
   	}
   </style>



   </html>