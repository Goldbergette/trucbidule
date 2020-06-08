<?php


namespace App\Controleurs\Tags;
use \App\Modeles\Tags;


function indexAction(\PDO $connexion){
  include_once '../app/modeles/tagsModele.php';
  $tags = Tags\findAll($connexion);

  include '../app/vues/posts/tags.php';
}
