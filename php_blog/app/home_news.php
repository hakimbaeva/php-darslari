<?php
include 'db.php' ;
$query = $connection 
      ->query(' SELECT`id`, `title`, `content`, `views`, `created_at`  FROM `posts` ') ;

      $news_items = $query->fetchAll();




?>