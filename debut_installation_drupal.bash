#Allez dans le dossier racine du Drupal avant de lancer le script bash (avec privileges sudo)

#Creation de dossiers manquant pour l'installation de Drupal
mkdir sites/default/files
chmod a+w sites/default/files

#Creation de fichiers manquant pour l'installation de Drupal
cp sites/default/default.settings.php sites/default/settings.php
chmod a+w sites/default/settings.php
