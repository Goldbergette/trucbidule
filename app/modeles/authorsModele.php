<?php

namespace App\Modeles\Authors;

function findOneById(\PDO $connexion, int $id){
  $sql = "SELECT authors.image, authors.lastname, authors.firstname, authors.biography
          FROM authors
          JOIN posts ON authors.id=posts.author_id
          WHERE posts.id = :id;;
          ";

  $rs = $connexion->prepare($sql);
  $rs->bindValue (':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
