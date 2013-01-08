<?php 
  include 'lib/parse.php';

  $query   = new parseQuery('Activity');
  $query->orderByDescending('createdAt');
  $results = $query->find();
  $verb = $results->results[0]->verb;
  $time = $results->results[0]->createdAt;
?>
peter is <?= $verb ?> since <?= $time ?>
