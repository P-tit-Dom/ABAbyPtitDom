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

<a href="/edsa-ptitdom_MVC/Seance/0"><button>Start session</button></a>

<h1>Fiche de cotation</h1>
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
                            <label for="moment">Moment :</label>
                            <select id="moment"  class="select_i_d_t">
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
    </table><br>

    <select class="select_domaine">
    <option value="1">Domaine 1</option>
    <option value="2">Domaine 2</option>
    <option value="3">Domaine 3</option>
    <option value="4">Domaine 4</option>
</select>

<select class="select_domaine">
    <option value="1">Compétence 1</option>
    <option value="2">Compétence 2</option>
    <option value="3">Compétence 3</option>
    <option value="4">Compétence 4</option>
</select>

<select class="select_domaine">
    <option value="1">Objectif 1</option>
    <option value="2">Objectif 2</option>
    <option value="3">Objectif 3</option>
    <option value="4">Objectif 4</option>
</select>

<button  type="button" onclick="nouvelleCible()" style="font-weight:bold"> + </button>

<table border="1" style="margin:auto; background-color: rgb(234, 234, 234);">
    <tr>
        <td style="vertical-align: text-top; width:14%"> <p>Social/Community</p> </td>
        <td>  
            <table>
                <tr>
                    <td style="vertical-align: text-top; background-color: rgb(239, 239, 239);"> <p>Compétence 1 :</p> </td>
                    <td>
                      <table>
                          <tr>
                              <td colspan="2" style="vertical-align: text-top"> <p>Objectif 1</p> </td>
                              <td>
                                  <table style="background-color: rgb(244, 244, 244);"> 
                                        <tr>
                                            <td> Cible 1 </td>
                                            <td> historique</td>
                                            <td><button class="mot" type="button" onclick="suppressCible(this)"><img src="../assets/img/Supprimer_pxl.png"></button> </td>
                                        </tr> 
                                        <tr>  
                                            <td  colspan="3">
                                                <select style="width:80%" >
                                                    <option value="Cible1">Cible1</option>
                                                    <option value="Cible2">Cible2</option>
                                                    <option value="Cible3">Cible3</option>
                                                    <option value="Cible4">Cible4</option>
                                                </select> 
                                                <button  type="button" onclick="nouvelleCible(this)"> + </button>
                                            </td>
                                        </tr>
                                  </table>
                              </td>
                              <td><textarea rows="4" cols="50" placeholder="Observations"></textarea></td>
                              <td>
                                  <select style="float: right;">
                                      <option value="1">NET</option>
                                      <option value="2">ITT</option>
                                      <option value="3">NET et/ou ITT</option>
                                  </select>
                              </td>
                                <td>
                                <button type="button"><img src="../assets/img/Supprimer_pxl.png"></button> 
                                </td>
                          </tr>
                          <tr>
                            <td colspan="2" style="vertical-align: text-top"> <p>Objectif 2</p> </td>
                            <td>
                              <table style="background-color: rgb(244, 244, 244); align-items:flex-start">
                                  <tr>
                                    <td> Cible 1 </td>
                                    <td> historique</td>
                                    <td><button class="mot" type="button" onclick="suppressCible(this)"><img src="../assets/img/Supprimer_pxl.png"></button> </td>
                                  </tr> 
                                  <tr>
                                    <td> Cible 2 </td>
                                    <td> historique</td>
                                    <td><button class="mot" type="button" onclick="suppressCible(this)"><img src="../assets/img/Supprimer_pxl.png"></button> </td>
                                  </tr>  
                                  <tr>  
                                    <td  colspan="3">
                                      <select style="width:80%" >
                                          <option value="Cible1">Cible1</option>
                                          <option value="Cible2">Cible2</option>
                                          <option value="Cible3">Cible3</option>
                                          <option value="Cible4">Cible4</option>
                                      </select> 
                                      <button  type="button" onclick="nouvelleCible(this)"> + </button>
                                    </td>
                                  </tr>
                              </table>
                            </td>
                            <td><textarea rows="4" cols="50" placeholder="Observations"></textarea></td>
                            <td>
                                <select style="float: right;">
                                    <option value="1">NET</option>
                                    <option value="2">ITT</option>
                                    <option value="3">NET et/ou ITT</option>
                                </select>
                            </td>
                            <td>
                                <button type="button"><img src="../assets/img/Supprimer_pxl.png"></button> 
                            </td>
                        </tr>
                      </table>
                    </td>
                </tr>
                <tr>
                  <td style="vertical-align: text-top; background-color: rgb(239, 239, 239);"> <p>Compétence 2 :</p> </td>
                  <td>
                      <table>
                          <tr>
                              <td colspan="2" style="vertical-align: text-top"> <p>Objectif 1</p> </td>
                              <td>
                                  <table style="background-color: rgb(244, 244, 244);">
                                        <tr>
                                            <td> Cible 1 </td>
                                            <td> historique</td>
                                            <td><button class="mot" type="button" onclick="suppressCible(this)"><img src="../assets/img/Supprimer_pxl.png"></button> </td>
                                        </tr>
                                        <tr>
                                            <td> Cible 2</td>
                                            <td> historique</td>
                                            <td><button class="mot" type="button" onclick="suppressCible(this)"><img src="../assets/img/Supprimer_pxl.png"></button> </td>
                                        </tr>
                                        <tr>  
                                            <td  colspan="3">
                                                <select style="width:80%" >
                                                    <option value="Cible1">Cible1</option>
                                                    <option value="Cible2">Cible2</option>
                                                    <option value="Cible3">Cible3</option>
                                                    <option value="Cible4">Cible4</option>
                                                </select> 
                                                <button  type="button" onclick="nouvelleCible(this)"> + </button>
                                            </td>
                                        </tr>
                                  </table>
                              </td>
                              <td><textarea rows="4" cols="50" placeholder="Observations"></textarea></td>
                              <td>
                                  <select style="float: right;">
                                      <option value="1">NET</option>
                                      <option value="2">ITT</option>
                                      <option value="3">NET et/ou ITT</option>
                                  </select>
                              </td>
                            <td>
                                <button type="button"><img src="../assets/img/Supprimer_pxl.png"></button> 
                            </td>
                          </tr>
                      </table>
                  </td>
              </tr>
            </table> 
        </td>
    </tr>
    <tr>
      <td style="vertical-align: text-top"> <p>Domaine 2</p> </td>
      <td>  
          <table >
              <tr>
                  <td style="vertical-align: text-top; background-color: rgb(239, 239, 239);"> <p>Compétence 1 :</p> </td>
                  <td>
                      <table>
                          <tr>
                              <td colspan="2" style="vertical-align: text-top"> <p>Objectif 1</p> </td>
                              <td>
                                  <table style="background-color: rgb(244, 244, 244);">
                                        <tr>
                                            <td> Cible 1 </td>
                                            <td> historique</td>
                                            <td><button class="mot" type="button" onclick="suppressCible(this)"><img src="../assets/img/Supprimer_pxl.png"></button> </td>
                                        </tr> 
                                        <tr>  
                                            <td  colspan="3">
                                                <select style="width:80%" >
                                                    <option value="Cible1">Cible1</option>
                                                    <option value="Cible2">Cible2</option>
                                                    <option value="Cible3">Cible3</option>
                                                    <option value="Cible4">Cible4</option>
                                                </select> 
                                                <button  type="button" onclick="nouvelleCible(this)"> + </button>
                                            </td>
                                        </tr>
                                  </table>
                              </td>
                              <td><textarea rows="4" cols="50" placeholder="Observations"></textarea></td>
                              <td>
                                  <select style="float: right;">
                                      <option value="1">NET</option>
                                      <option value="2">ITT</option>
                                      <option value="3">NET et/ou ITT</option>
                                  </select>
                              </td>
                            <td>
                                <button type="button"><img src="../assets/img/Supprimer_pxl.png"></button> 
                            </td>
                          </tr>
                      </table>
                  </td>
              </tr>
          </table> 
      </td>
  </tr>
</table>
</div>

<style>
    .choose-intervenant {
    display: flex;
    justify-content: center;
    margin-left:15%;
}

#choose-intervenant {
    width: 100%;
    margin-left: 30%;
}       

.commentaire {
    width: 70%;
    height: 4em;
}

.select_i_d_t {
    background-color: white;
    width: 80%;
}

.select_i_d_t:hover {
    background-color: #f0f0f0;
}

.select_i_d_t:active {
    background-color: #dfdfdf;
}

.inter-date-com {
    width: 80%;
    display: flex;
    justify-content: space-between;
}

.boutons {
    display:inline-flex;
}

</style>

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
                Objectif 42
            </td>
            <td class="element-pei"></td>
            <td class="element-pei"></td>
            <td class="element-pei"></td>
            <td class="element-pei">
                <button type="button"><img src="../assets/img/Supprimer_pxl.png"></button>
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
            <button type="button" class="img-button"><img src="../assets/img/fleche_g.png"></button>
        </td>
        <td>
            Page 1
        </td>
        <td>
            <button type="button" class="img-button"><img src="../assets/img/fleche_d.png"></button>
        </td>
        <td>
            <button type="button" class="img-button"><img src="../assets/img/Save.png"></button>
        </td>
        <td>
            <button type="button" class="img-button"><img src="../assets/img/Print.png"></button>
        </td>
    </tr>
</table>
</div>

<style>
.select_domaine {
    margin-bottom:1%;
    background-color: white;
    border-radius: .2em;
}

.select_domaine:hover {
    background-color: rgb(243, 243, 243);
}

.font-size{
    font-size: 160%;
}

.lign-pei {
    border: 1px solid black;
    border-radius: .1em;
    background-color: rgb(243, 243, 243);
    margin: 0 5% 0 5%;
    height: 25em;
}

.element-pei {
    border: 1px solid black;
    background-color: white;
    width: 18%;
}

.img-button {
    background: none;
    border: none;
}

.img-button:hover {
    cursor:pointer ;
}

</style>