<?php

/*
./app/routeur.php

ROUTE PAR DEFAUT: liste des posts (les 10 derniers)
    PATTERN: /
    CTRL: postsControleur
    ACTION: index
      > Affichage des 10 derniers posts
        Title + resume + date (jour, mois, année séparément)
      > Le lien READ MORE vers le détails du post
*/

include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\indexAction($connexion);
