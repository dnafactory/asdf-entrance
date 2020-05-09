## Setup tramite docker (opzionale)

Dentro z-doc, è presente tutto il necessario per avviare un progetto tramite docker

## Installazione laravel

Nella root del progetto, c'è tutto il necessario per installare laravel eccetto il file .env
Bisogna generarlo, configurarlo ed avviare la migration base

vendor/bin/phpunit --filter testConnection tests/Unit/CheckDBTest.php

## Lista esercizi

\App\Exercise\One
vendor/bin/phpunit --filter testExercise tests/Unit/ExerciseOneTest.php

\App\Exercise\Two
vendor/bin/phpunit --filter testExercise tests/Unit/ExerciseTwoTest.php

\App\Exercise\Three
vendor/bin/phpunit --filter testExercise tests/Unit/ExerciseThreeTest.php

\App\Exercise\Four
vendor/bin/phpunit --filter testExercise tests/Unit/ExerciseFourTest.php

\App\Exercise\Five
vendor/bin/phpunit --filter testExercise tests/Unit/ExerciseFiveTest.php

\App\Exercise\Six
vendor/bin/phpunit --filter testExercise tests/Unit/ExerciseSixTest.php
