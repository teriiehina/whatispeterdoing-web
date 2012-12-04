<?php 
  include 'lib/parseConfig.php';

    //This example is a sample video upload stored in parse

    $parse       = new parseObject('Activity');
    $parse->name = "working";
    $r           = $parse->save();
?>