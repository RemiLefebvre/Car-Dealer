<?php require_once("template/header.php"); ?>

<main class="container-fluid ">
  <?php if (isset($message)): ?>
    <h5>Error: <?php var_dump($message)  ?></h5>
  <?php endif; ?>
  <section class="row threeFirst">
    <?php for ($i=0; $i <3 ; $i++) {
      ?>
      <article class="firstVehicles col-md-4 col-sm-12" style="background-image:url('<?php echo $firstVehicules[$i]->sourceImg()?>')">
        <h3><?php echo $firstVehicules[$i]->name()?></h3>
        <div class="optionsArticle">
          <form class="" action="index.php" method="post">
            <input type="hidden" name="id" value="<?php echo $firstVehicules[$i]->id()?>">
            <button type="submit" name="detailVehicule"><i class="fa fa-search" aria-hidden="true"></i></button>
            <button type="button" onclick="modifVehicle('<?php echo $firstVehicules[$i]->name()."','".$firstVehicules[$i]->model()."','". $firstVehicules[$i]->type()."','". $firstVehicules[$i]->detail()."','". $firstVehicules[$i]->sourceImg()."','". $firstVehicules[$i]->id()?>')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button onclick="if(!confirm('Delete this vehicle ?')) return false;" type="submit" name="supp"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
          </form>
        </div>
      </article>
      <?php
    } ?>
  </section>
  <section class="row secondFirst">
    <?php if (isset($vehicules[4])): ?>
    <?php for ($i=3; $i <5 ; $i++) {
      ?>
        <article class="firstVehicles col-md-6 col-sm-12" style="background-image:url('<?php echo $firstVehicules[$i]->sourceImg()?>')">
          <h3><?php echo $firstVehicules[$i]->name()?></h3>
          <div class="optionsArticle">
            <form class="" action="index.php" method="post">
              <input type="hidden" name="id" value="<?php echo $firstVehicules[$i]->id()?>">
              <button type="submit" name="detailVehicule"><i class="fa fa-search" aria-hidden="true"></i></button>
              <button type="button" onclick="modifVehicle('<?php echo $firstVehicules[$i]->name()."','".$firstVehicules[$i]->model()."','". $firstVehicules[$i]->type()."','". $firstVehicules[$i]->detail()."','". $firstVehicules[$i]->sourceImg()."','". $firstVehicules[$i]->id()?>')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
              <button onclick="if(!confirm('Delete this vehicle ?')) return false;" type="submit" name="supp"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
            </form>
          </div>
        </article>
    <?php
  } ?>
<?php endif; ?>
  </section>


</main>

<!-- SEPARATE -->
<div class="separate">
</div>

<!-- TABLE -->
<section id="tableSection">
  <?php if (isset($message)) {
    echo "Error: " .$message;
  } ?>
  <h2>List of vehicules</h2>
  <table class="table-hover table-responsive">
    <thead>
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Model</th>
        <th>Detail</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($vehicules as $vehicule) {?>
          <tr>
            <form  action="index.php" method="post">
              <td><?php echo $vehicule->name() ?></td>
              <td><?php echo $vehicule->type() ?></td>
              <td><?php echo $vehicule->model() ?></td>
              <td><?php echo $vehicule->detail() ?></td>
              <td class="d-flex">
                <input type="hidden" name="id" value="<?php  echo $vehicule->id()?>">
                <button class="btn" type="submit" name="detailVehicule"><i class="fa fa-search" aria-hidden="true"></i></button>
                <button class="btn" type="button" onclick="modifVehicle('<?php echo $vehicule->name()."','".$vehicule->model()."','". $vehicule->type()."','". $vehicule->detail()."','". $vehicule->sourceImg()."','". $vehicule->id()?>')">
                  modif
                </button>
                <button class="btn" onclick="if(!confirm('Delete this vehicle ?')) return false;" type="submit" name="supp">
                  Delete
                </button>
              </td>
            </form>
            <!-- <div class="imgVehiclesTable">
            </div> -->
          </tr>
          <?php
      } ?>
    </tbody>
  </table>

</section>

<!-- SEPARATE -->
<div class="separate">
</div>

<!-- FOOTER -->
<footer class="">
        <div class="container-fluid  footerUp">
          <div class="container">
            <div class="row py-3">
              <!-- footer column 1 start -->
              <div class="col-md-4">
                <!-- row start -->
                <div class="row py-2">
                  <div class="col-sm-3 hidden-md-down">
                    <a class="bg-circle bg-info" href="https://twitter.com/ ">
                      <i class="fa fa-2x fa-fw fa-twitter" aria-hidden="true "></i>
                    </a>
                  </div>
                  <div class="col-sm-9">
                    <h4>Tweets</h4>
                    Retweet
                  </div>
                </div>
                <!-- row end -->
              </div>
              <!-- footer column 1 end -->
              <!-- footer column 2 start -->
              <div class="col-md-4">
                <!-- row start -->
                <div class="row py-2">
                  <div class="col-sm-3 hidden-md-down">
                    <a class="bg-circle bg-info" href="#">
                      <i class="fa fa-2x fa-fw fa-address-card" aria-hidden="true "></i>
                    </a>
                  </div>
                  <div class="col-sm-9">
                    <h4>Contactez us</h4>
                    <p>Why not?</p>
                  </div>
                </div>
                <!-- row end -->
                <!-- row start -->
                <div class="row py-2">
                  <div class="col-sm-3 hidden-md-down">
                    <a class="bg-circle bg-info" href="http://orteil.dashnet.org/cookieclicker/">
                      <i class="fa fa-2x fa-fw fa-laptop" aria-hidden="true "></i>
                    </a>
                  </div>
                  <div class="col-sm-9">
                    <h4>Cookie </h4>
                    <p class=" ">Like <a href="http://orteil.dashnet.org/cookieclicker/">cookies </a></p>
                  </div>
                </div>
                <!-- row end -->
              </div>
              <!-- footer column 2 end -->
              <!-- footer column 3 start -->
              <div class="col-md-4">
                <!-- row starting  -->
                <div class="row py-2">
                  <div class="col-sm-3 hidden-md-down">
                    <a class="bg-circle bg-danger" href="# ">
                      <i class="fa fa-2x fa-fw fa-file-pdf-o" aria-hidden="true "></i>
                    </a>
                  </div>
                  <div class="col-sm-9">
                    <h4>DL the listing</h4>
                    <p> PDF</a></p>

                  </div>
                </div>
                <!-- row ended -->
                <!-- row starting  -->
                <div class="row py-2">
                  <div class="col-sm-3 hidden-md-down">
                    <a class="bg-circle bg-info" href="https://twitter.com/ ">
                      <i class="fa fa-2x fa-fw fa-info" aria-hidden="true "></i>
                    </a>
                  </div>
                  <div class="col-sm-9">
                    <h4>Infos</h4>
                    About us.
                  </div>
                </div>
                <!-- row ended -->
              </div>
              <!-- footer column 3 end -->
            </div>
          </div>
        </div>


        <div class="container-fluid bg-primary py-3">
          <div class="container">
            <div class="row py-3">
              <div class="col-md-9">
                <p class="text-white">Landing page.</p>
              </div>
              <div class="col-md-3">
                <div class="d-inline-block">
                  <div class="bg-circle-outline d-inline-block">
                    <a href="https://www.facebook.com/" class="text-white"><i class="fa fa-2x fa-fw fa-facebook"></i>
      		</a>
                  </div>

                  <div class="bg-circle-outline d-inline-block">
                    <a href="https://twitter.com/" class="text-white">
                      <i class="fa fa-2x fa-fw fa-twitter"></i></a>
                  </div>

                  <div class="bg-circle-outline d-inline-block">
                    <a href="https://www.linkedin.com/company/" class="text-white">
                      <i class="fa fa-2x fa-fw fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
<?php require_once("template/footer.php"); ?>
