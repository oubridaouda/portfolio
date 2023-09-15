#!/usr/bin/php
<?php

// Assurez-vous d'être dans le répertoire du projet Laravel
$laravelRoot = __DIR__ . 'php_command.php/';

// Exécutez la commande "php artisan key:generate" en utilisant shell_exec
$output = shell_exec("cd $laravelRoot && php artisan key:generate");

// Affichez la sortie de la commande
echo $output;

?>
