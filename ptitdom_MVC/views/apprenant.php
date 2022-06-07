<input id="m1" name="nav" type="radio" class="hidden">
<label for="m1">Fiche de Cotation</label>
<input id="m2" name="nav" type="radio" class="hidden">
<label for="m2">PEI</label>
<input id="a1" name="nav" type="radio" class="hidden">
<label for="a1">Suivi</label>

<!--
1. import
2. dictionary
objectif1["cible1"] = ["%", "80 20 60"]
competence1["objectif1"] = [objectif1, "observation_blabla", "NET"]
domaine1["competence1"] = competence1
store["domaine1"] = domaine1
console.log("log : " + store["domaine1"]["competence1"]["objectif1"]["cible1"][1])
-->

<?=
'<script>
function print_five_times() {
    for (i=0; i<5; i++) {
        console.log("there " + i);
    }
}
print_five_times();
</script>'
?>

<head>
        <meta charset="utf-8">
        <title>ABA by P'tit Dom</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Theme styles -->
        <link rel="stylesheet" type="text/css" href="assets/css/style-sheet.css">
        <script type="text/javascript" src="scripts/functions.js"></script>
</head>

<body>
    <div class="inblock">
        <table class="screen-part">
            <tr>
                <td class="screen-part-child">
                    <table class="screen-part"> 
                        <tr class="inter-date-com">
                            <td class="screen-part-child">
                            <label for="intervenant">Intervenant : </label>
                                <select id="intervenant" class="select_i_d_t">
                                    <option>Intervenant 1</option>
                                    <option>Intervenant 2</option>
                                    <option>Intervenant 3</option>
                                </select>
                            </td>
                            <td>
                                <label>Date : </label>
                                <input type="date">
                            </td>
                            <td>
                            <label for="moment">Moment :<label>
                                <select id="moment"  class="select_i_d_t">>
                                    <option>Matin</option>
                                    <option>Après-midi</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </td>
                <td class="screen-part-child boutons">
                    <button class="green-button">Classeur PECS</button>
                    <button class="green-button">Fiche de maintien</button>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="hint">Commentaire : </label>
                    <input type="text" id="hint" class="commentaire">
                </td>
                <td>
                    Retour de l'intervenant : __________________________________________________________
                </td>
            </tr>
        </table>
        <table>
        <tr>
            <td>Compétence</td>
            <td>
                <table>
                    <tr>
                        <td>Objectif</td>
                        <td>
                            <table>
                                <tr>
                                    <td>Cible</td>
                                    <td>Type</td>
                                    <td>Historique</td>
                                </tr>
                            </table>
                        </td>
                        <td>Observation</td>
                        <td>Remarque</td>
                    </tr> 
                </table>
            </td>
        </tr>
        <tr>
            <td>Compétence 1</td>
            <td>
                <table>
                    <tr>
                        <td>
                            <select>
                                <option>Objectif 1</option>
                            </select>
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <select>
                                            <option>Cible 1</option>
                                        </select>
                                    </td>
                                    <td>%</td>
                                    <td>80 20 60</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select>
                                            <option>Cible 2</option>
                                        </select>
                                    </td>
                                    <td>%</td>
                                    <td>80 20 60</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select>
                                            <option>Cible 3</option>
                                        </select>
                                    </td>
                                    <td>%</td>
                                    <td>80 20 60</td>
                                </tr>
                                <tr>
                                    <td>+</td>
                                </tr>
                            </table>
                        </td>
                        <td>adzok</td>
                        <td>
                            <select>
                                <option>ITT</option>
                                <option selected>NET</option>
                                <option>ITT ou NET</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select>
                                <option>Objectif 2</option>
                            </select>
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <select>
                                            <option>Cible 1</option>
                                        </select>
                                    </td>
                                    <td>%</td>
                                    <td>80 20 60</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select>
                                            <option>Cible 2</option>
                                        </select>
                                    </td>
                                    <td>%</td>
                                    <td>80 20 60</td>
                                </tr>
                                <tr>
                                    <td>+</td>
                                </tr>
                            </table>
                        </td>
                        <td>adzok</td>
                        <td>
                            <select>
                                <option>ITT</option>
                                <option selected>NET</option>
                                <option>ITT ou NET</option>
                            </select>
                        </td>
                    </tr>
                    <tr><td>+</td></tr>
                </table>
            </td>
        </tr>
        <tr><td>+</td></tr>
        </table>
    </div>

    <!-- Création de PEI -->
    
    <h1>Création du PEI</h1>

    <h2>Période 2021/2022</h2>

    <table class="screen-part">
        <tr>
            <td class="font-size">Domaine</td>
            <td class="font-size">Compétence</td>
            <td class="font-size">Objectif</td>
            <td class="font-size">Constat</td>
            <td class="font-size">Priorité</td>
            <td class="font-size">Stratégie</td>
        </tr>
        <tr>
            <td>
                <select class="select_i_d_t">
                    <option>Domaine 1</option>
                    <option>Domaine 2</option>
                    <option>Domaine 3</option>
                </select>
            </td>
            <td>
                <select class="select_i_d_t">
                    <option>Compétence 1</option>
                    <option>Compétence 2</option>
                    <option>Compétence 3</option>
                </select>
            </td>
            <td>
                <select class="select_i_d_t">
                    <option>Objectif 1</option>
                    <option>Objectif 2</option>
                    <option>Objectif 3</option>
                </select>
            </td>
            <td>
                <button class="green-button" type="button">Ajouter au PEI</button>
            </td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <div class="lign-pei">
        <table>
            <tr>
                <td class="element-pei">
                    Domaine 1
                </td>
                <td class="element-pei">
                    Compétence 2
                </td>
                <td class="element-pei">
                    Objectif 420
                </td>
                <td class="element-pei"></td>
                <td class="element-pei"></td>
                <td class="element-pei"></td>
                <td class="element-pei">
                    <button type="button"><img src="assets/img/Supprimer_pxl.png"></button>
                </td>
            </tr>
        </table>
    </div>

    <table class="screen-part">
        <tr>
            <td>
                <button class="blue-button">Historique PEI</button>
            </td>
            <td>
                <label>Cloturer PEI</label>
                <input type="checkbox">
            </td>
            <td>
                <button type="button" class="img-button"><img src="assets/img/fleche_g.png"></button>
            </td>
            <td>
                Page 1
            </td>
            <td>
                <button type="button" class="img-button"><img src="assets/img/fleche_d.png"></button>
            </td>
            <td>
                <button type="button" class="img-button"><img src="assets/img/Save.png"></button>
            </td>
            <td>
                <button type="button" class="img-button"><img src="assets/img/Print.png"></button>
            </td>
        </tr>
    </table>

    <!-- Evaluation journalière -->

    <h1>Evaluation journalière</h1>

    <table class="screen-part">
        <tr>
            <td>
                <button type="button"><img src="assets/img/home.png"></button>
            </td>
            <td>
                Date : 9/04/2022 - <br>
                Apprenant :
            </td>
            <td class="zone_com-cota">
                <button class="bouton-cotation green-button" type="button">Commentaire fiche de cotation</button>
                <div class="commentaire_cotation">
                    Franchement ça s'est bien passé de ouf
                </div>
            </td>
        </tr> 
    </table>

    <div class="comportement">
        <table>
            <tr>
                <td>
                    <button class="bouton_comportement_1" type="button">Comportements</button>
                </td>
            </tr>
            <tr>
                <td>
                    Comportement 1 :
                    <button class="bouton-plus-moins bouton-plus" type="button">+</button><br>
                    <div class="zero">
                        0
                    </div>
                    <button class="bouton-plus-moins bouton-moins" type="button">-</button>
                </td>
            </tr>
            <tr class="delimitation_comportement">
                <td>
                    Comportement 2 :<br>
                    <div class="zero">
                        0
                    </div>
                    <button class="bouton_comportement_2" type="button">Lancer timer</button>
                </td>
            </tr>
            <tr>
                <td>
                    Comportement 3 :<br>
                    <button class="bouton-plus-moins bouton-plus" type="button">+</button><br>
                    <div class="zero">
                        0
                    </div>
                    <button class="bouton-plus-moins bouton-moins" type="button">-</button>
                    <div class="zero">
                        0
                    </div>
                    <button class="bouton_comportement_2" type="button">Lancer timer</button>
                </td>
            </tr>
            <tr class="delimitation_comportement">
                <td>
                    <button class="bouton_comportement_3" type="button">Réintroduire comportement</button>
                </td>
            </tr>
            <tr class="delimitation_comportement">
                <td>
                    <button class="bouton_comportement_3" type="button">Ajouter comportement</button>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="bouton_comportement_1" type="button">Fiche de maintien</button>
                </td>
            </tr>
        </table>

    </div>
</body>