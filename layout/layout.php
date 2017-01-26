<html>
<head>
  <title> MQUEDE</title>
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.pack.js"></script>
  <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.6"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
  <script type="text/javascript" src="js/jquery.fancybox-buttons.js?v=1.0.5"></script>
  <script type="text/javascript" src="js/jquery.fancybox-media.js?v=1.0.6"></script>
  <script type="text/javascript" src="js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
</head>
<body>
  <?php
    session_start();
    ?>
        <nav>
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="sass.html">Sass</a></li>
              <li><a href="badges.html">Components</a></li>
              <li><a href="collapsible.html">Javascript</a></li>
              <li><a href="mobile.html">Cerrar Sesion</a></li>
            </ul>
            <!-- Mobile -->
            <ul class="side-nav" id="mobile-demo">
              <li><a href="sass.html">Sass</a></li>
              <li><a href="badges.html">Components</a></li>
              <li><a href="collapsible.html">Javascript</a></li>
              <li><a href="mobile.html">Cerrar Sesiones</a></li>
            </ul>
          </div>
        </nav>    
    <?php
    require_once("routes.php");
  ?>
</body>

</html>