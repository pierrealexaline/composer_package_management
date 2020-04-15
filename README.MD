# Enoncé

Reprends ton architecture créée lors du premier exercice. 
L'arborescence des dossiers doit être la suivante :
```
public/
    index.php
src/
    Wcs/
        Hello.php
vendor/
``` 
* Le fichier index.php est l'entrée de l'application.
* Dans le dossier /vendor, se trouveront les librairies installées par Composer.
* Il existe sur Packagist, une librairie qui s'appelle ehime/hello-world. Tu dois l'installer et l'utiliser dans ton index.php.

Tu devras utiliser la méthode statique world() de la classe SayHello du package nouvellement installé pour afficher 'Hello World, Composer!'.

# Critères de validation :

* Ton code est sur un repo personnel sur Github.
* Ton arborescence correspond à celle demandée dans le challenge.
* Ton dossier vendor contient la librairie : ehime/hello-world.
* Ton fichier index.php affiche 'Hello World, Composer!'.