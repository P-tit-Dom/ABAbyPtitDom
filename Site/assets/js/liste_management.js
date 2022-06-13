function ajouterDomaine() {
	var listeDomaines = document.getElementById("listeDomaines");
	var domaine = document.getElementById("saisie_domaine").value.trim();
	if (domaine == '') {
		;
	} else {
		listeDomaines.innerHTML += '<div tabindex="0" button type="button" onclick="selectDomaine(this)" class="ligne">                                      <p class="mot">' + domaine + '</p>                                    <p button class="mot" type="button" onclick="suppress(this)"><img src="assets/images/Supprimer_pxl.png "></button></p>                                </div>';
	}
}

function ajouterCompetence() {
	var listeCompetences = document.getElementById("listeCompetences");
	var competence = document.getElementById("saisie_competence").value.trim();
	visible = ''
	if (competence == '') {
		;
	} else {
		for (i of listeCompetences.children) {
			if (i.classList.contains("hidden")) {
				;
			} else {
				visible = i
			}
		}
		console.log(visible)
		if (visible == '') {
			listeCompetences.innerHTML += '<div> </div>'
			visible = listeCompetences.lastElementChild
		}
		visible.innerHTML += '<div tabindex="0" button onclick="selectCompetence(this)" type="button" class="ligne">                                  <p class="mot">' + competence + '</p>                                <p button class="mot" type="button" onclick="suppress(this)"><img src="assets/images/Supprimer_pxl.png "></p>                            </div> ';
	}
}

function ajouterImage() {
	var listeImages = document.getElementById("div_im");
	var image = document.getElementById("saisie_image").value.trim();
	if (image == '') {
		;
	} else {
		listeImages.innerHTML += '<div class="ligne">  <p class="mot">' + image + '</p><p button class="mot" type="button" onclick="suppress(this)"><img src="assets/images/Supprimer_pxl.png "></button></p></div>';;
	}
}

function nextPage(fleche) {
	var liste = fleche.parentElement.previousElementSibling.children[0];
	var pageHeight = getComputedStyle(liste.parentElement).height;
	var count = liste.children.length;
	pageCount = parseInt(count / 15) + 1;
	var display = fleche.previousElementSibling.innerHTML;
	pageNumber = display.slice(-1);
	if (pageNumber == pageCount) {
		fleche.previousElementSibling.innerHTML = 'Page 1';
		var pageTop = getComputedStyle(liste).top;
		liste.style.top = parseInt(pageTop.slice(0, -2)) + (pageCount - 1) * (parseInt(pageHeight.slice(0, -2))) + "px";
	} else {
		fleche.previousElementSibling.innerHTML = 'Page ' + (parseInt(pageNumber) + 1);
		var pageTop = getComputedStyle(liste).top;
		liste.style.top = parseInt(pageTop.slice(0, -2)) - parseInt(pageHeight.slice(0, -2)) + "px";
	}
}

function previousPage(fleche) {
	var liste = fleche.parentElement.previousElementSibling.children[0];
	var pageHeight = getComputedStyle(liste.parentElement).height;
	var count = liste.children.length;
	pageCount = parseInt(count / 15) + 1;
	var display = fleche.nextElementSibling.innerHTML;
	pageNumber = display.slice(-1);
	if (pageNumber == '1') {
		fleche.nextElementSibling.innerHTML = 'Page ' + pageCount;
		var pageTop = getComputedStyle(liste).top;
		liste.style.top = parseInt(pageTop.slice(0, -2)) + (pageCount - 1) * (-parseInt(pageHeight.slice(0, -2))) + "px";
	} else {
		fleche.nextElementSibling.innerHTML = 'Page ' + (parseInt(pageNumber) - 1);
		var pageTop = getComputedStyle(liste).top;
		liste.style.top = parseInt(pageTop.slice(0, -2)) + parseInt(pageHeight.slice(0, -2)) + "px";
	}
}

function suppress(bouton) {
	var ligne = bouton.parentElement;
	var liste = bouton.parentElement.parentElement;
	liste.removeChild(ligne);
}

function selectCompetence(ligne) {
	comp = ligne.parentElement;
	dom = comp.parentElement;
	compIndex = Array.from(comp.children).indexOf(ligne);
	domIndex = Array.from(dom.children).indexOf(comp);
	listeObjectifs = document.getElementById("listeObjectifs").children[0];
	for (i of listeObjectifs.children[domIndex].children) {
		i.classList.add("hidden");
	}
	listeObjectifs.children[domIndex].children[compIndex].classList.remove("hidden")
}

function selectDomaine(dom) {
	listeDoms = dom.parentElement;
	domIndex = Array.from(listeDoms.children).indexOf(dom);
	listeCompetences = document.getElementById("listeCompetences").children[0];
	for (i of listeCompetences.children) {
		i.classList.add("hidden");
	}
	if (listeCompetences.children[domIndex] != undefined) {
		listeCompetences.children[domIndex].classList.remove("hidden");
	}
	listeObjectifs = document.getElementById("listeObjectifs").children[0];
	for (i of listeObjectifs.children) {
		i.classList.add("hidden");
	}
	listeObjectifs.children[domIndex].classList.remove("hidden")
	for (i of listeObjectifs.children[domIndex].children) {
		i.classList.add("hidden");
	}
	listeObjectifs.children[domIndex].children[0].classList.remove("hidden")
}