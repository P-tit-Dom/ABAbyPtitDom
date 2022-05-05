# ABAbyPtitDom 
# Installation nécessaire
## Logiciels nécessaires
Afin de réaliser le site, on va utiliser Drupal. Pour cela, on télécharge Bitnami 9.3.12, qui téléchargera ensuite de lui même les autres logiciels nécessaires : Drupal 9.3.12, MySQL et PHP 8.0.18.

La création d'un compte est demandée.

https://bitnami.com/stack/drupal/installer

Après avoir lancer Drupal, le site est créé en local ( = Le site est hébergé sur notre machine), accessible sur internet par localhost/.
Le site est près à être personnalisé à notre sauce.

## Modules nécessaires
Drupal comprend déjà un beau nombre de fonctionnalités répertoriées et classées en "modules". Cependant, il va nous en manquer afin de réaliser notre site. Il va donc falloir en télécharger certains (ou juste copier l'URL) sur le site officiel de Drupal , puis les installer sur Drupal.

- Admin Toolbar - https://ftp.drupal.org/files/projects/admin_toolbar-3.1.0.tar.gz
- Webform - https://ftp.drupal.org/files/projects/webform-6.2.0-beta2.tar.gz
- Entity Print - https://ftp.drupal.org/files/projects/entity_print-8.x-2.5.tar.gz

## Fonctionnement global
En se connectant avec l'identifiant créé lors de la création du Drupal, le compte est Administrateur = tout est modifiable depuis ce site, et une barre d'option est visible en haut de la page, invisible aux visiteurs.

Une page Drupal est découpée en zones appelées "régions". Chacune d'entre elles possède des "blocks", affichant différentes informations.

Les régions sont ici définies par des pointillés, et les blocks se trouvent dedans.
![](Images%20README/1.PNG)

Les blocks de toutes les zones sont remplacables, interchangeablent, adaptables et modifiable à peut près de n'importe quelle manière en sélectionnant dans la barre d'administrateur : "Manage" -> "Structure" -> "Block Layout"

## Installation des modules

Drupal possède de base un certains nombre de bloque de fonctionnalités (on parlera de "Modules"), dont certaines sont téléchargées, installées sur le site mais pas sélectionnées.

Voyons l'ajout de modules supplémentaires.

