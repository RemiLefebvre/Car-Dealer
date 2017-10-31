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
<div class="separate">

</div>
<section id="tableSection">
  <?php if (isset($message)) {
    echo "Error: " .$message;
  } ?>
  <h2>List of vehicules</h2>
  <table class="table table-hover table-responsive">
    <thead>
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Model</th>
        <th>Detail</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($vehicules as $vehicule) {
        // if the vehicule select to modif
        if (isset($_POST['modif']) && isset($_POST['id']) && $vehicule->id()==$_POST['id']) {
          ?>
          <tr>
            <form action="index.php" method="post">
              <input type="hidden" name="id" value="<?php  echo $vehicule->id()?>">
              <td><input class"" name="name" type="text" value="<?php echo $vehicule->name() ?>"></td>
              <td><input class"" name="type" type="text" value="<?php echo $vehicule->type() ?>"></td>
              <td><input class"" name="model" type="text" value="<?php echo $vehicule->model() ?>"></td>
              <td><input class"" name="detail" type="text" value="<?php echo $vehicule->detail() ?>"></td>

              <td class="d-flex flex-row">
                <input class"ml-3 btn btn-primary" type="submit" name="validModif" value="Valid modif">
                <input class"ml-3 btn btn-primary" type="submit" value="Cancel">
              </td>
            </form>
          </tr>
          <?php
        }
        else {
          ?>
          <tr>
            <form  action="index.php" method="post">
              <td><?php echo $vehicule->name() ?></td>
              <td><?php echo $vehicule->type() ?></td>
              <td><?php echo $vehicule->model() ?></td>
              <td><?php echo $vehicule->detail() ?></td>
              <td class="d-flex flex-row">
                <input type="hidden" name="id" value="<?php  echo $vehicule->id()?>">
                <input class"ml-3 btn btn-primary" type="submit" name="modif" value="Modif">
                <input class"ml-3 btn btn-success" type="submit" name="detailVehicule" value="Detail">
                <input class"ml-3 btn btn-danger" type="submit" name="supp" value="Delete">
              </td>
            </form>
          </tr>
          <?php
        }
      } ?>
    </tbody>
  </table>

</section>
<?php require_once("template/footer.php"); ?>
