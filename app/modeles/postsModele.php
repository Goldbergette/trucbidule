<?php
/*
./app/modeles/postsModele.php
*/

namespace App\Modeles\Posts;

function findAll(\PDO $connexion) {
  $sql = "SELECT title, resume, image, MONTH(created_at), DAY(created_at), YEAR(created_at)
          FROM posts
          ORDER BY created_at DESC
          LIMIT 10;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC); // Tableau indexé de tableaux associatifs
}
