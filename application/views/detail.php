<!DOCTYPE html>
<html lang="id">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title> Problem - Example Problem</title>

      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="Izzati Al Vandiar">

      <!-- Page Styles -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.blue_grey-red.min.css" />
      <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/style.css" />
   </head>
   <body>

      <!-- Section header.  -->

      <!-- maybe add js -->
      <div <?php // IDEA:  ?>

      <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

         <header class="own-header mdl-layout__header mdl-layout__header--waterfall">
            <div class="mdl-layout__header-row">
               <span class="own-title mdl-layout-title">
                  <!--<img class="own-logo-image" src="#"> PS: not yet added. suppose to be my logo -->
                  <h2>Harusnya logo</h2>
               </span>

               <!-- Add a spacer, to align navigation to the right -->
               <div class="own-header-spacer mdl-layout-spacer"></div>

               <!-- navigation -->
               <div class="own-navigation-container">
                  <nav class="own-navigation mdl-navigation">
                     <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Home</a>
                     <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Problem</a>
                     <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Contest</a>
                     <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Hall of Fame</a>
                     <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Help</a>
                  </nav>
               </div>

               <button class="own-more-button mdl-button mdl-js-button--icon mdl-js-ripple-effect" id="more-button">
                  <i class="material-icons">more_vert</i>
               </button>

               <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
                  <li class="mdl-menu__item">Profile</li>
                  <li class="mdl-menu__item">Logout</li>
               </ul>
            </div>

         </header>
      <!-- End section header -->

         <main class="mdl-layout__content">
            <div class="mdl-grid">
               <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
                  <div class="mdl-card__title content-max-width">
                     <h2 class="mdl-card__title-text">{Problem Name}</h2>
                  </div>
               </div>
            </div>
         </main>
      </div>
      <script src="<?php echo base_url()?>assets/js/material.min.js"></script>
   </body>
</html>
