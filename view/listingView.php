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
<?php require_once("template/footer.php"); ?>
