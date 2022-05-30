<input id="m1" name="nav" type="radio" class="hidden">
<label for="m1">Cotation</label>
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





<div>
    <label for="learner">Apprenant : </label>
    <select id="learner">
        <option>Apprenant 1</option>
        <option>Apprenant 2</option>
        <option>Apprenant 3</option>
    </select>
    <br>
    <label for="intervenant">Intervenant : </label>
    <select id="intervenant">
        <option>Intervenant 1</option>
        <option>Intervenant 2</option>
        <option>Intervenant 3</option>
    </select>
    <br>
    <label for="hint">Commentaire</label>
    <input type="text" id="hint">
    <br>
    
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