<!doctype html>
<html class="no-js" lang="FR">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Titre</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font family -->
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700" rel="stylesheet">


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
    <nav class="navHeader">
      <h1>Car <br><span>Dealer</span></h1>
      <div class="one"></div>
      <div class="two">
        <nav class="menu">
          <ul>
            <li><a tabindex="-1" href="index.php">Listing</a></li>
            <li><a tabindex="-1" class="addVehicule" href="#">Add Vehicle</a></li>
          </ul>
        </nav>
      </div>
      <div class="three"></div>
      <div class="foor"></div>
      <div class="five"></div>
      <div class="six"></div>
      <div class="seven"></div>
      <div class="height"></div>
      <div class="nine"></div>
    </nav>

    <!-- ADD VEHICULE BAR -->
    <div class="navbar formVehicleBar addVehicleBar">
      <div class="banner">
        <h2 class="" href="#">Add vehicle</h2>
        <div class="container">
          <div class="row ">
            <div class="col-md-12">
              <form action="index.php" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input name="name" type="text" class="form-control" placeholder="Name" required="required" />
                    </div>
                    <div class="form-group">
                      <input name="model" type="text" class="form-control" placeholder="Model" required="required" />
                    </div>
                    <select name="type" class="nav-link custom-select" required>
                        <option class="pr-4" selected>Type</option>
                        <option value="Truck">Truck</option>
                        <option value="Car">Car</option>
                        <option value="Moto">Moto</option>
                      </select>
                    <p class="mb-0 mt-5 w-100"><strong>Add picture</strong></p>
                    <input class="mb-3 " name="image" type="file" value="Parcourir..">
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea name="detail" class="form-control" rows="9" cols="25" required="required" placeholder="Detail"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input type="hidden" name="add" value="true">
                    <button type="submit" class="btnAdd btn pull-right">
                        Add
                    </button>
                    <button type="button" class="closeAddVehicule btn pull-right">
                      Cancel
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MIDIF VEHICULE BAR -->
    <div class="navbar formVehicleBar modifVehicleBar">
      <div class="banner">
        <h2 class="" href="#">Modif vehicle</h2>
        <div class="container">
          <div class="row ">
            <div class="col-md-12">
              <form action="index.php" method="post" enctype="multipart/form-data">
                <input class="modifId" type="hidden" name="id" value="0">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="modifName" name="Name" type="text" class="form-control" value"" required="required" />
                    </div>
                    <div class="form-group">
                      <input class="modifModel" name="model" type="text" class="form-control" placeholder="Model" required="required" />
                    </div>
                    <select name="type" class="nav-link custom-select" required>
                        <option class="modifType" value="oui" class="pr-4" selected>Type</option>
                        <option value="">---</option>
                        <option value="Truck">Truck</option>
                        <option value="Car">Car</option>
                        <option value="Moto">Moto</option>
                      </select>
                    <p class="mb-0 mt-5 w-100"><strong>Modif picture</strong></p>
                    <img class="modifImg" src="img/carDealerCar.jpg" width="200px" alt="">
                    <input class="mb-3 " name="image" type="file" value="Parcourir..">
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea name="detail" class="modifDetail form-control" rows="9" cols="25" required="required" placeholder="Detail"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btnAdd btn pull-right">
                        Add
                    </button>
                    <button type="button" class="closeModifVehicule btn pull-right">
                      Cancel
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>
