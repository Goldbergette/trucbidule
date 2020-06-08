<?php

namespace App\Controleurs\Categories;
use \App\Modeles\Categories;

function indexAction(\PDO $connexion){
  include_once '../app/modeles/categoriesModele.php';
  $categories = Categories\findAll($connexion);

include '../app/vues/categories/index.php';
}
