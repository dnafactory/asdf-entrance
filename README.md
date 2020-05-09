## Setup tramite docker (opzionale)

Dentro z-doc, è presente tutto il necessario per avviare un progetto tramite docker

## Installazione laravel

Nella root del progetto, c'è tutto il necessario per installare laravel eccetto il file .env
Bisogna generarlo, configurarlo ed avviare la migration base

vendor/bin/phpunit --filter testConnection tests/Unit/CheckDB.php
