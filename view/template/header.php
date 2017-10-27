<!doctype html>
<html class="no-js" lang="FR">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Titre</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font family -->
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

  <!-- Fontawersome -->
  <script src="https://use.fontawesome.com/4d141429f4.js"></script>


  <link rel="icon" href="img/logo.png">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
</head>

<body>

<header class="fixed-top">
  <h1>Car <br><span>Dealer</span></h1>
  <div class="one"></div>
  <div class="two"></div>
  <div class="three"></div>
  <div class="foor"></div>
  <div class="five"></div>
  <div class="six"></div>
  <div class="seven"></div>
  <div class="height"></div>
  <div class="nine"></div>


</header>
<!-- ADD VEHICULE BAR -->
<nav class="navbar bg-faded" id="addVehiculeBar">
  <h1 class="navbar-brand" href="#">Add vehicule</h1>
  <div class="">
    <ul class="navbar-nav">
      <form class="" action="index.php" method="post">
        <li class="pr-5 nav-item active">
          <input type="text" name="name" placeholder="Name" required>
        </li>
        <li class="pr-5 nav-item active">
          <input type="text" name="model" placeholder="Modele" required>
        </li>
        <li class="pr-5 nav-item active">
          <input type="text" name="detail" placeholder="Detail" required>
        </li>
        <li class="pr-5 nav-item d-flex flex-row ">
          <select name="type" class="nav-link custom-select" required>
            <option class="pr-4" selected>Type</option>
            <option value="truck">Truck</option>
            <option value="car">Car</option>
            <option value="moto">Moto</option>
          </select>
          <input type="submit" name="add" value="Add">
        </li>
      </form>
    </ul>
  </div>
</nav>
