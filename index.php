<?php 
  include 'lib/parse.php';
//    $parse       = new parseObject('Activity');
//    $parse->name = "working";
//    $r           = $parse->save();

  $query   = new parseQuery('Activity');
  $query->orderByDescending('createdAt');
  $results = $query->find();
?>
peter is <?= $results->results[0]->verb ?> <?= $results->results[0]->extra ?>
