<form id="uho" action="/edsa-ptitdom_MVC/Membres" method="post"></form>

<h2>Ajouter Utilisateur :</h2>

<table style="width: 100%; text-align: left; margin-left: 5%;">
    <tr>
        <td><h3>Nom :</h3></td>
        <td><h3>Prénom :</h3></td>
        <td><h3>Rôle :</h3></td>
        <td style="width: 29%;"></td>
    </tr>
    <tr>
        <td><input class="users" type="text"></td>
        <td><input class="users" type="text"></td>
        <td><select class="users">
            <option>Psychologue</option>
            <option>Intervenant</option>
            <option>Professionnel partenaire</option>
            <option>Orthophoniste</option>
            <option>Psychomotricien</option>
            <option>Parent</option>
        </select></td>
        <td><button style="margin-top: 0%;" class="green-button" type="button">Ajouter utilisateur</button></td>
    </tr>
</table>

<div class="list_members">
    <div class="member">
        <table style="width: 100%; text-align: left;">
            <tr>
                <td style="width: 26%; border-right: 1px solid black;">Dupont</td>
                <td style="width: 27%; border-right: 1px solid black;">Sylvie</td>
                <td style="width: 45%; border-right: 1px solid black;">Psychologue</td>
                <td><h button style="cursor: pointer;" type="button"><img src="assets/img/Supprimer_pxl.png "></button></h></td>
            </tr>
        </table>
    </div>
    <div class="member">
        <table style="width: 100%; text-align: left;">
            <tr>
                <td style="width: 26%; border-right: 1px solid black;">Durant</td>
                <td style="width: 27%; border-right: 1px solid black;">Julie</td>
                <td style="width: 45%; border-right: 1px solid black;">Intervenant</td>
                <td><h button style="cursor: pointer;" type="button"><img src="assets/img/Supprimer_pxl.png "></button></h></td>
            </tr>
        </table>
    </div> 

</div>

<table style="width: 100%; text-align: left;">
    <tr>
        <td style="width: 40%;"><button style="margin: 2% 0 2% 10%;" class="green-button" type="button">Ajouter enfant</button></td>
        <td style="width: 5%"><button type="button" class="img-button"><img class="fleches" src="assets/img/fleche_g.png" alt="Profil" class="f_g"></button></td>
        <td style="width: 5%; text-align: center;">Page 1/1</td>
        <td style="width: 5%"><button type="button" class="img-button"><img class="fleches" src="assets/img/fleche_d.png" alt="Profil" class="f_d"></button></td>
        <td style="width: 45%"></td>
    </tr>
</table>

<style>
.fleches {
    width: 50%;
}

.member {
    background-color:rgb(234, 234, 234);
    border-bottom: 1px solid black;
}

.list_members{
    background-color: white;
    border: 1px solid black;
    margin: 0 5%;
    height: 20em;
}

.users {
    background-color: white;
    border: 1px solid black;
    height: 2em;
    width: 15em;
}

</style>