<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CREFO | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="stylesheets/normalize.css" />
    <link rel="stylesheet" href="stylesheets/app.css" />
    <link rel="icon" href="favicon.ico" type="img/x-icon" />
    <script src="bower_components/modernizr/modernizr.js"></script>
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

   <?php
    include("../public_html/topbarinfo.php");
    
?>
  <!-- End Top Bar -->
<!-- 

    
      <div class="row" id="doc-breadcrumbs">
        <div class="large-12 columns">
          <ul class="breadcrumbs">
            <li><a href="index.html">Home</a></li>
            <li><a href="videos.html">Videos</a></li>
            <li><a href="pictures.html">Pictures</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="aboutus.html">About us</a></li>
            <li><a href="#">Features</a></li>
            <li class="unavailable"><a href="#">Gene Splicing</a></li>
            <li class="current"><a href="#">Cloning</a></li>
          </ul>
        </div>
      </div>
-->

<div class="row">


  <div class="small-2 columns">
    <h4>Events</h4>
<ul class="side-nav"  id="doc-pagination">
  <li class="active"><a href="fall-2014.php">Fall 2014</a></li>
  <li><a href="#">Spring 2014</a></li>
  <li class="divider"></li>
  <li><a href="#">Fall 2013</a></li>
  <li><a href="#">Spring 2013</a></li>
</ul>

</div>
      <div class="small-10 columns">
  <ul data-orbit>
    <li>
      <img src="img/pictures/openmic_will.jpg" alt="slide 1" />
      <div class="orbit-caption">
        Caption One.
      </div>
    </li>
    <li class="active">
      <img src="img/pictures/supercon_cheese.jpg" alt="slide 1" />
      <div class="orbit-caption">
        Caption Two.
      </div>
    </li>
    <li>
      <img src="img/pictures/creativeworks.jpg" alt="slide 1" />
      <div class="orbit-caption">
        Caption Three.
      </div>
    </li>
  </ul>
  </div>

      </div>
<!--
</pre>
<ul class="clearing-thumbs" data-clearing="">
    <li><a href="path/to/your/img"><img alt="" src="path/to/your/img-th" /></a></li>
    <li><a href="path/to/your/img"><img alt="" src="path/to/your/img-th" /></a></li>
    <li><a href="path/to/your/img"><img alt="" src="path/to/your/img-th" /></a></li>
</ul>
<pre>






-->














    <footer class="page-row">
<div class="full-width footer-area">
  
        <div class="large-10 columns">
            &copy; 2013
        </div>
        
   
   
</div>
</footer>

<script>
$(document).foundation('orbit', {
  timer_speed: 10000,
  animation_speed: 500,
  bullets: true,
  stack_on_small: true
});
</script>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
  <script src="js/foundation/foundation.clearing.js"></script>
<!--
<script src="javascripts/vendor/jquery.js"></script>
  <script src="javascripts/vendor/jquery.cookie.js"></script>

  <script src="bower_components/foundation/js/foundation.min.js"></script>

 -->
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19093680-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

    <script>
      $(document).foundation();
    </script>
  </body>
</html>