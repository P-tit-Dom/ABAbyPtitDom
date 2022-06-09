<link rel="stylesheet" type="text/css" href="assets/css/content2.css">
<script type="text/javascript" src="<?= $root ?>/scripts/functions.js"></script>

<div class="middle_sixty">
    <h2>Fiches d'évaluation du jour</h2>
    <table class="cotations_table">
        <tr class="rectangle">
            <td>
                <a href="">
                    <div>
                        Apprenant : enfant 1 <br>
                        Salle : Salle Violette <br>
                        Site : La Monjous
                    </div>
                </a>
            </td>
            <td>
                <a href="">
                    <div>
                        Apprenant : enfant 2 <br>
                        Salle : Salle Rose <br>
                        Site : La Monjous
                    </div>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="">
                    <div>Matin</div>
                </a>
            </td>
            <td>
                <a href="">
                    <div>Après-midi</div>
                </a>
            </td>
        </tr>
    </table>
    <!-- psy only -->
    <h2>--- Accès ---</h2>
    <div class="access">
        <a href="Objectifs"><button>Objectifs</button></a>
        <a href="PECS_Chains"><button>PECS / Chaînages</button></a>
        <a href="Membres"><button>Apprenants / Intervenants</button></a>
    </div>
</div>

<style>
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