<?php 
  include 'lib/parse.php';
  include 'lib/time.php';

  $query     = new parseQuery('Activity');
  $query->orderByDescending('createdAt');

  $results   = $query->find();
  
  $verb      = $results->results[0]->verb;
  $timestamp = strtotime($results->results[0]->createdAt);
  $time      = FormatTime($timestamp);  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>What's peter doing ?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Big brother is watching me.">
    <meta name="author" content="Peter MEUEL">

    <link rel="icon" href="img/projectile-fav.png">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
  
    <script type="text/javascript">
      WebFontConfig = {
        google: { families: [ 'Lato','Open Sans', 'Bangers'] }
      };
      (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
         '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
      })();
    </script>
  
    <style type="text/css">
      .wf-active .panel, input, textarea{ font-family: 'Lato', serif}
      body { background: url(img/background/irongrip.png) repeat}
    </style>

  </head>

  <body>
  
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
      
        <div class="panel">
                              
          <!-- Main wrapper -->
          <div class="main">
            <div class="wrap">
              
              <!-- Home -->
              <section class="home" id="homepage">
                <div class="avatar"><img src="img/avatar.jpg" alt="" /></div>
                <div class="name tcenter">Peter is <?= $verb ?></div>
                <div class="position tcenter">last update: <?= $time ?></div>
              </section>

            </div>
          </div> <!-- Main wrapper ends -->
          
          <!-- Paper layer -->
          <footer></footer>
          
          <!-- Credit -->
          <div class="copyright row-fluid">
            <div class="pull-left">&copy;
            2013 Peter MEUEL</div>
            <div class="pull-right social">
              <a href="https://twitter.com/teriiehina" class="twitter icon">Twitter</a>
              <a href="https://plus.google.com/111499262474430516286/posts" class="google icon">Google</a>
            </div>
          </div>

        </div> <!-- Panel ends -->
        
      </div>
    </div>
  </div>

   
  </body>
</html>
