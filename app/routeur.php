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

if (isset($_GET['comments'])):
  include_once '../app/controleurs/commentsControleur.php';
  \App\Controleurs\Comments\storeAction($connexion);

elseif (isset($_GET['postID'])):
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\showAction($connexion, $_GET['postID']);

  elseif (isset($_GET['contact'])):
    include_once 'vues/template/partials/_contact.php';

else:
include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\indexAction($connexion);
endif;
