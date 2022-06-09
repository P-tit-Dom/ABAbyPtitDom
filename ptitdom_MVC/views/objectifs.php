<form id="uho" action="/edsa-ptitdom_MVC/Apprenant/0" method="post"></form>

<body>
        <disposition_colonne>
            <fleche_retour>
                <a href><img src="assets/img/fleche_g.png" alt=Profil class="retour"></a>
            </fleche_retour>
            <table>
                <tr>
                    <th class="entete delimitation">Domaines</th>
                    <th class="entete delimitation">Compétences</th>
                    <th class="entete">Objectifs</th>
                </tr>
                <tr>
                    <th class="delimitation"></th>
                    <th class="delimitation"><select name="Domaines"class="select">
                        <option value="1">Domaine 1</option>
                        <option value="2">Domaine 2</option>
                        <option value="3">Domaine 3</option>
                    </select></th>
                    <th><select name="Domaines"class="select">
                        <option value="1">Domaine 1</option>
                        <option value="2">Domaine 2</option>
                        <option value="3">Domaine 3</option>
                    </select></th>
                </tr>
                <tr>
                    <td class="delimitation"></td>
                    <td class="delimitation"></td>
                    <td><select name="Domaines" class="select">
                        <option value="1">Compétence 1</option>
                        <option value="2">Compétence 2</option>
                        <option value="3">Compétence 3</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="delimitation">                        
                        <input type="text" placeholder="Saisir domaine à ajouter">
                        <button class="green-button" type="button">Ajouter domaine</button>
                        <liste_acti_im>
                            <element> 
                                <h class="mot">Domaine 1</h>
                                <h button class="mot" type="button"><img src="assets/img/Supprimer_pxl.png "></button></h>
                            </element>                 
                            <element>  
                                <h class="mot">Domaine 2</h>
                                <h button class="mot" type="button"><img src="assets/img/Supprimer_pxl.png "></button></h>
                            </element>
                        </liste_acti_im>
                        <disposition_colonne>
                            <button type="button" class="img-button"><img src="assets/img/fleche_g.png" alt="Profil" class="f_g"></button>
                            <h class="pages">Page 1</h>
                            <button type="button" class="img-button"><img src="assets/img/fleche_d.png" alt="Profil" class="f_d"></button>   
                    </td>
                    <td class="delimitation">
                        <input type="text" placeholder="Saisir compétence à ajouter">
                        <button class="green-button" type="button">Ajouter compétence</button>
                    <liste_acti_im>
                        <element> 
                            <h class="mot">Compétence 1</h>
                            <h button class="mot" type="button"><img src="assets/img/Supprimer_pxl.png "></button></h>
                        </element>                 
                        <element>  
                            <h class="mot">Compétence 2</h>
                            <h button class="mot" type="button"><img src="assets/img/Supprimer_pxl.png "></button></h>
                        </element>
                        <element>  
                            <h class="mot">Compétence 3</h>
                            <h button class="mot" type="button"><img src="assets/img/Supprimer_pxl.png "></button></h>
                        </element>
                    </liste_acti_im>
                    <disposition_colonne>
                            <button type="button" class="img-button"><img src="assets/img/fleche_g.png" alt="Profil" class="f_g"></button>
                            <h class="pages">Page 1</h>
                            <button type="button" class="img-button"><img src="assets/img/fleche_d.png" alt="Profil" class="f_d"></button>   
                    </td>
                    <td>
                        <input type="text" placeholder="Saisir objectif à ajouter">
                        <button class="green-button" type="button">Ajouter objectif</button>
                        <liste_acti_im>
                            <element> 
                                <h class="mot">Objectif</h>
                                <h button class="mot" type="button"><img src="assets/img/Supprimer_pxl.png "></h>
                            </element>                 
                        </liste_acti_im>
                        <disposition_colonne>
                            <button type="button" class="img-button"><img src="assets/img/fleche_g.png" alt="Profil" class="f_g"></button>
                            <h class="pages">Page 1</h>
                            <button type="button" class="img-button"><img src="assets/img/fleche_d.png" alt="Profil" class="f_d"></button>   
                    </td>
                </tr>
            </table>
        </disposition_colonne>
    </body>

    <style>
.delimitation{
    text-align: center;
    border-right: 1px solid black;
}

.entete {
    font-size: 200%;
}

element {
    border: 1px solid black;
    background-color:rgb(234, 234, 234);
    display: flex;
    justify-content: space-between;
}

.select {
    margin-bottom: 2%;
}

.pages {
    margin-top: 2%;
    width: 50%;
}

fleche_retour {
    width: 20%;
}

.retour {
    width: 30%;
}

.mot {
margin: 0 2%;
}

liste_acti_im {
display: flex;
flex-direction: column;
background-color: white;
border: 1px solid black;
margin: 0 20% 0 20%;
height: 26em;
max-height: 55vh;
}

.f_d {
margin-right: 50%;
width: 30%  ;
}

.f_g  {
margin-left: 50%;
width: 30%;
}
</style>