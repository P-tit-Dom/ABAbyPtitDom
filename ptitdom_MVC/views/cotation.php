<nav>
    <button onclick="this.nextElementSibling.classList.toggle('hidden')">Collapse</button>
    <div class="hidden">
        <!-- ask for confirmation before living -->
        <a href="/edsa-ptitdom_MVC/Apprenant/0"><button type="button">Cancel session</button></a>
        <button type="submit" form="uho">End session</button>
    </div>
</nav>
<div>Fiche de cotation</div>
<form id="uho" action="/edsa-ptitdom_MVC/Apprenant/0" method="post"></form>
<div>
    Cible 1
</div>
<div>
    Cible 2
    <select form="uho" name="ok">
        <option value="voici">afzok</option>
    </select>
</div>