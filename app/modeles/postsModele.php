<?php
/*
./app/modeles/postsModele.php
*/

namespace App\Modeles\Posts;

function findAll(\PDO $connexion) {
  $sql = "SELECT title, resume, image, MONTH(created_at), DAY(created_at), YEAR(created_at), id
          FROM posts
          ORDER BY created_at DESC
          LIMIT 10;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC); // Tableau indexé de tableaux associatifs
}

function findOneById(\PDO $connexion, int $id){
  $sql="SELECT title, image, id, content
        FROM posts
        WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue (':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}

function findLastest(\PDO $connexion){
  $sql="SELECT title, image, created_at, id
        FROM posts
        ORDER BY created_at DESC
        LIMIT 3;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
