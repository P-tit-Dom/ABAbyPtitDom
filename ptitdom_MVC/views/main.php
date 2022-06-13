<link rel="stylesheet" type="text/css" href="assets/css/content2.css">
<script type="text/javascript" src="<?= $root ?>/scripts/functions.js"></script>

<interface>
    <h2 class="evaluation_du_jour">
        Fiches d'évaluation du jour
    </h2>
    <table class="screen-part">
        <tr>
            <td class="bordure_droite">   
                <qui_fait_quoi>
                    Apprenant : enfant 1 <br>
                    Salle : Salle Violette <br>
                    Site : La Monjou
                    <button id="bouton-bleu" class="blue-button" type="button">Matin</button>
                </qui_fait_quoi>
            </td>

            <td>
                <qui_fait_quoi>
                    Apprenant : enfant 2 <br>
                    Salle : Salle Rose <br>
                    Site : La Monjou
                    <button id="bouton-bleu" class="blue-button" type="button">Après-midi</button>
                </qui_fait_quoi>
            </td>
        </tr>
    </table>
    <div>
        <h2 id="parametres" class="evaluation_du_jour">
            Paramètres
        </h2>
        <div class="access">
            <div class="bouton_bleu_long"><a href="Objectifs">Définir Domaines / Objectifs / Compétences par défaut</a></div>   
            <div class="bouton_bleu_long"><a href="PECS_Chains">Banque d'images du PECS et nouveaux chainages</a></div>
            <div class="bouton_bleu_long"><a href="Membres">Gestion des utilisateurs du site</a></div>
        </div>
    </div>
</interface>

<style>
#parametres {
    margin-top: 4%;
}

body {
    background-color: #e6e5d5;
} 

.titre_page {
    height: 50px;
    margin: 1%;
    width: 650px;
    text-align: center;
    text-shadow: 5%;
    color:white;
    padding-bottom: 3.5%;
    background-color: rgb(228, 202, 117);
    border: 0.05em solid rgb(226, 156, 43);
    border-radius: .15em;
}

#bouton-bleu {
    width: 95%;
    position: absolute;
    bottom: 0;
    align-self: center;
}

#bouton-bleu:hover {
    cursor: pointer;
}

.bouton_vert {
    padding: .4em;
    height: 40px;
    width: 160px;
    font-weight: none;
    display: block;
    margin: 3% auto;
    color: rgb(250, 250, 250);
    background-color: rgb(23, 160, 25);
    border-radius: 10px;
    transition: background .2s ease-in-out;
}
    .bouton_vert:hover {
        background-color: rgb(17, 112, 18);
    }

    .bouton_vert:active {
        background-color: rgb(23, 160, 25);
        transition: background .0s ease-in-out;
    }

.bouton_bleu_long a {
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-weight: bold;
        width: 750px;
        font-weight: none;
        color: rgb(250, 250, 250);
        background-color: rgb(116, 154, 229);
        border: 2px solid #426dbe;
        border-radius: 15px;
        transition: background .2s ease-in-out;
}

    .bouton_bleu_long a:hover {
        background-color: #426dbe;
    }

    .bouton_bleu_long {
        margin-top: 1%; 
        justify-content: center;
        display:flex ;
    }

.evaluation_du_jour {
    color: white;
    background-color: rgb(203, 203, 203);
    border: 2px solid grey;
    border-radius: .1em;
    margin: 2% 2% 0 2%;
    text-align: center;
}

.centrer_tableau {
    display: flex;
    justify-content: center;
}

.centrer_image {
    text-align: center;
}

.image {
    width: 40%;
}

interface {
    display: flex;
    flex-direction: column;
    background-color: rgb(241, 241, 241);
    border: 1px solid black;
    margin: 0 20% 0 20%;
    height: 40em;
    max-height: 75vh;
    border-radius: 1em;
}

qui_fait_quoi {
    display: flex;
    flex-direction: column;
    align-items: left;
    background-color: rgb(241, 241, 241);
    border: 1px solid black;
    border-left: 3px solid black;
    margin: 4% 30% 0 15%;
    height: 10em;
    max-height: 20vh;
    border-radius: .1em;
    width: 70%;
    position: relative;
}

.bordure_droite {
    border-right: 1px solid black;
    width: 50%;
}

.cotations_table {
    text-align: center;
    background-color: red;
    width: 100%;
}

.cotations_table td {
    max-width: 0px;
}

.cotations_table div {
    background-color: aliceblue;
    margin: 0 15%;
}

.rectangle {
    border: solid black 2px;
    background-color: white;
}

.access button {
    width: 85%;
    padding: 15px 0;
    margin: 5px 0;
}
</style>    