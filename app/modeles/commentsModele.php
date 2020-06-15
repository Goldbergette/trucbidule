<?php
/*
.app/modeles/commentsModele.php
*/

namespace App\Modeles\Comments;

function indexByPostId(\PDO $connexion, int $id){
  $sql="SELECT *
        FROM comments c
        WHERE c.post_id = :id;";

  $rs = $connexion->prepare($sql);
  $rs->bindValue (':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}


function insertOneByPostId(\PDO $connexion){
  $sql="INSERT into comments
        SET pseudo= :pseudo,
            content= :content,
            post_id= :id;";

  $rs = $connexion->prepare($sql);
  $rs->bindValue(':pseudo', $_POST['pseudo'], \PDO::PARAM_STR);
  $rs->bindValue(':content', $_POST['content'], \PDO::PARAM_STR);
  $rs->bindValue(':id', $_POST['postId'], \PDO::PARAM_INT);
  $rs->execute();
  $rs = $connexion->lastInsertId($sql);
  return $rs;
}
