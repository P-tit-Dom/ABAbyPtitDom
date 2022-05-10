# ABAbyPtitDom 
# Logiciels nécessaires
Afin de réaliser le site, on va utiliser Drupal. Pour cela, on télécharge Bitnami 9.3.12, qui téléchargera ensuite de lui même les autres logiciels nécessaires : Drupal 9.3.12, MySQL et PHP 8.0.18.

La création d'un compte est demandée.

https://bitnami.com/stack/drupal/installer

Après avoir lancer Drupal, le site est créé en local ( = Le site est hébergé sur notre machine), accessible sur internet par localhost/.
Le site est près à être personnalisé à notre sauce.

# Modules nécessaires
Drupal comprend déjà un beau nombre de fonctionnalités répertoriées et classées en "modules". Cependant, il va nous en manquer afin de réaliser notre site. Il va donc falloir en télécharger certains (ou juste copier l'URL) sur le site officiel de Drupal , puis les installer sur Drupal.

- Admin Toolbar - https://ftp.drupal.org/files/projects/admin_toolbar-3.1.0.tar.gz
- Webform - https://ftp.drupal.org/files/projects/webform-6.2.0-beta2.tar.gz
- Entity Print - https://ftp.drupal.org/files/projects/entity_print-8.x-2.5.tar.gz

# Fonctionnement global
En se connectant avec l'identifiant créé lors de la création du Drupal, le compte est Administrateur = tout est modifiable depuis ce site, et une barre d'option est visible en haut de la page, invisible aux visiteurs.

Une page Drupal est découpée en zones appelées "régions". Chacune d'entre elles possède des "blocks", affichant différentes informations.

Les régions sont ici définies par des pointillés, et les blocks se trouvent dedans.
![](Images%20README/1.PNG)

Les blocks de toutes les zones sont remplacables, interchangeablent, adaptables et modifiable à peut près de n'importe quelle manière en sélectionnant dans la barre d'administrateur : "Manage" -> "Structure" -> "Block Layout"

# Installation des modules

Drupal possède de base un certains nombre de bloques de fonctionnalités (on parlera de "Modules"), dont certains sont téléchargés, installés sur le site mais pas sélectionnée.

Voyons l'ajout de modules supplémentaires.

Dans "Manage" -> "Extend" on peut voir l'ensemble des modules prétéléchargés.

En cliquant sur "+ Add new module", on va pouvoir rentrer l'URL de téléchargement des modules à ajouter (URL en lien plus haut).

Après les avoir ajoutés, il faut les sélectionner. Dans "Extend", sélectionner :
- Quick edit
- Layout Discovery + Layout builder
- Admin Toolbar
- Entity Print
- Toutes les cas dans la catégorie "Webform" (pas les Webform Demo ou autres)

# Création d'un Webform

Pour créer un amont "un Webform" (globalement pour réaliser les questions demandées/informations à rentrer pour créer une fiche de cotation ou un PEI) aller dans : "Manage" -> "Structure" -> "Webforms" -> "+ Add webform" -> NOM-DU-WEBFORM-CRÉÉ -> "Save".

Après avoir sauvegarder le Webform créé, il faut créer un contenu de la forme du Webform créé ("Manage" -> "Content" -> "+Add content" -> "Webform" -> (rentrer le titre du questionnaire voulu), et bien sélectionner : "Webform" -> "NOM-DU-WEBFORM-CRÉÉ")

Le contenu du Webform a été créé (retrouvable dans "Content" -> "NOM-DU-WEBFORM-CRÉÉ"). Pour le modifier/ajouter des questions/du contenu au questionnaire, cliquer sur le pinceau correspondant au contenu -> "Build".

Voici un aperçu des types de questions qu'il est possible d'ajouter, jugé pour le moment les plus pertinentes.

(Éléments puis Aperçus) :

Exemple 1 :

![](Images%20README/2.PNG)
![](Images%20README/3.PNG)

Exemple 2 :

![](Images%20README/4.PNG)
![](Images%20README/5.PNG)

Exemple 3 (APRTICULIEREMENT LE DERNIER):

![](Images%20README/6.PNG)
![](Images%20README/7.PNG)

# Ajouter des menus/raccourcis

Dans la barre des menus, il n'y a pour le moment que menu qui n'emmène vers rien. On va donc ajouter des raccourcis à cette endroit afin d'accéder aux formulaires créés précédemment.

![](Images%20README/8.PNG)

Dans "Manage" -> "Structure" -> "Menus" -> "Main navigation : Edit Menu", on va pouvoir décocher "Home" (qui va plus nous embêter qu'autre chose), et surtout créer d'autres onglets raccourcis, qui pourront emmener vers un questionnaire créé au préalable.

Après avoir sélectionner "Add a link", dans "Link" on va copier/coller le lien d'un questionnaire précédemment créé (lien trouvable dans "Manage" -> "Content" -> "NOM-DU-QUESTIONNAIRE-CRÉÉ") et dans "Menu link title" le nom de l'onglet qui sera affiché.

# Enlever "Submitted by..."

Parce qu'on s'en fiche dans le cadre de ce site, c'est juste embettant d'avoir ça en permanence,
voir : 

localhost/drupal/fr/admin/structure/types/manage/webform 

(si c'est aux werbform qu'on veut enlever ça), -> Display Settings : décocher

# Version easyphp ---

La mise en place du système a été effectuée sous EasyPHP - Devserver 17.0 (Windows).
https://www.easyphp.org/

Lors du lancement de l'application, un "dashboard" peut être ouvert depuis l'icône située dans la zone d'accès rapide de la barre des tâches. (http://127.0.0.1:1111/)
Depuis la page ainsi ouverte dans le navigateur, est proposé une redirection vers le "warehouse", où se trouvent les différents modules assumés par EasyPHP ainsi que leurs versions.
https://warehouse.easyphp.org/index.php?s=eds

Versions :
    - Apache : 2.4.25 (x86)
    - PHP : 8.1.1 (x86)
    - Mysql : 5.7.17 (x86)
    - PhpMyAdmin : 5.1.3

/!\ La version PhpMyAdmin a été importée manuellement depuis le site officiel :
https://www.phpmyadmin.net/
Une fois le dossier dézippé dans le dossier contenant les version PhpMyAdmin d'EasyPHP (ex : C:\Program Files (x86)\EasyPHP-Devserver-17\eds-modules), y ont été ajoutés le dossier tmp (?) ainsi que les fichiers config.inc et eds-module ont été ajoutés depuis une version précédente (5.1.1). La variable $module-version de ce dernier fichier a été modifiée ($module_version = '5.1.3';) afin de correspondre lors de l'affichage sous l'interface EasyPHP.

Le Framework Drupal a été téléchargé depuis le site officiel (version developers, 9.3.12)
https://www.drupal.org/download
Le dossier dézippé a été placé dans un dossier vierge faisant office de Projet.

Depuis l'interface (dashboard) d'EasyPHP, les serveurs HTTP et de base de données doivent être lancés (start). Le dossier de projet définit précédemment doit également être ajouté dans les dossiers de travail (add directory).
Avant de lancer le site Drupal, il est nécessaire d'accéder à PhpMyAdmin (parmi les modules de l'interface) afin d'y créer une base de données qui doit rester vierge.
Lors des opérations de mise en place du site, assurées par Drupal lorsque celui-ci est lancé pour la première fois, devront être renseignés la base de données ainsi qu'un utilisateur administrateur (par défaut : root) et son mot-de-passe (par défaut : laisser vide).