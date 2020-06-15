<?php

namespace App\Controleurs\Comments;
use \App\Modeles\Comments;

function storeAction(\PDO $connexion){
  include_once '../app/modeles/commentsModele.php';
  $rs=Comments\insertOneByPostId($connexion);

  GLOBAL $content;

  ob_start();
    include '../app/vues/commentaires/index.php';
  $content = ob_get_clean();


}
