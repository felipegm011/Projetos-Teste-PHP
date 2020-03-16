<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <!-- Dropdown Trigger -->
  <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Drop Me!</a>

<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider" tabindex="-1"></li>
  <li><a href="#!">three</a></li>
  <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
  <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
</ul>   
    

      <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });

  // Or with jQuery

  $('.dropdown-trigger').dropdown();
        </script>
    </body>
  </html>
    