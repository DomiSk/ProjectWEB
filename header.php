<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">



  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="styles/style.css">


  <title>Projekto pavadinimas</title>
</head>

<body>


<?php if(isset($index))  { ?>

<div class=" demo" style="position: absolute; top: 0; left: 0; width: 100%; z-index: -1">
   <div class="content">
      <div id="large-header" class="large-header">
         <canvas style="position: absolute;" id="demo-canvas"></canvas>
         
      </div>
   </div>
</div>

<?php } ?>

<div style="position: relative;">

  <nav>
    <div class="nav-wrapper container">
      <a class="brand-logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNmutn62bm0vn0JuaKN9CB9Sk6VozCPbncjU3zLOVG9ePFuITKGQ&s" alt=""></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li>
          <form action="https://www.google.com/search">
            <input id="search-input" type="text" placeholder="Google search.." name="query">
            <button class="butt" type="submit"><i class="material-icons">search</i></button>
          </form>
        </li>
        <li><a href="index.php">Home</a></li>
        <li><a href="https://www.vilniuscoding.lt/">VCS</a></li>
      </ul>

    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="index.php">Home</a></li>
    <li><a href="https://www.vilniuscoding.lt/">VCS</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>

  <!-- Čia pasikartojanti visuose puslapiuose viršutinė dalis -->