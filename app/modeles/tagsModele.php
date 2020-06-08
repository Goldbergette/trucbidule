<?php
/*
.app/modeles/tagsModele.php
*/


namespace App\Modeles\Tags;

function indexByPostId(\PDO $connexion, int $id){
  $sql="SELECT tags.name
FROM posts_has_tags
JOIN tags ON posts_has_tags.tag_id=tags.id
WHERE posts_has_tags.post_id= :id;";

$rs = $connexion->prepare($sql);
$rs->bindValue (':id', $id, \PDO::PARAM_INT);
$rs->execute();
return $rs->fetchAll(\PDO::FETCH_ASSOC);
}


function findAll(\PDO $connexion) {
  $sql = "SELECT name
          FROM tags;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
