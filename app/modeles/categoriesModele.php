<?php


namespace App\Modeles\Categories;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM categories;";

  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC); // Tableau indexé de tableaux associatifs
}
