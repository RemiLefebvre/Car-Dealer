<?php
require("model/manager.php");

require("services/createVehicule.php");
require("services/autoLoader.php");


/*
**Create Véhicule manager
*/
$manager = new VehiculeManager($db);

/*
**Update vehicule
*/
/*verification if there are all require's infos*/
if (isset($_POST['validModif']) && isset($_POST['detail']) && isset($_POST['type']) && isset($_POST['model']) && isset($_POST['name'])) {

  /*verification if all input are full*/
  if ( !empty($_POST['detail']) && !empty($_POST['type']) && !empty($_POST['model']) && !empty($_POST['name'])) {

    /*verification if format model and format type are correct*/
    if (preg_match("#^[0-9]{4}$#",$_POST['model']) && preg_match("#^car|truck|moto$#",$_POST['type'])) {

      /*protect XSS failling*/
      $modifVehiculeType=htmlspecialchars($_POST['type']);
      $modifVehiculeModel=htmlspecialchars($_POST['model']);
      $modifDetail=htmlspecialchars($_POST['detail']);
      $modifVehiculeName=htmlspecialchars($_POST['name']);
      $modifVehiculeId=htmlspecialchars($_POST['id']);

      // services createVehicule
      $modifVehicule=createVehicule(["id" => $modifVehiculeId,"name" => $modifVehiculeName,"model" => $modifVehiculeModel,"type" => $modifVehiculeType,"detail" => $modifDetail]);

      $manager->update($modifVehicule);
    }
    else {
      $message="Model or type false ,exemple-> model:1999 and type:car (in lower case)";
    }
  }
  else {
    $message="Input empty";
  }
}


/*
**Add vehicule
*/
if (isset($_POST['add'])) {
  /*verification if there are all require's infos*/
  if (isset($_POST['name']) && isset($_POST['model']) && isset($_POST['detail']) && isset($_POST['type'])) {

    /*verification if all input are full*/
    if (!empty($_POST['name']) && !empty($_POST['model']) && !empty($_POST['detail']) && !empty($_POST['type'])) {

      /*verification if format model and format type are correct*/
      if (preg_match("#^[0-9]{4}$#",$_POST['model'])) {

        if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0){
          // Test size of img
          if ($_FILES['image']['size'] <= 2000000){

            // test extension of img
            $infosfichier = pathinfo($_FILES['image']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees)){
              /*protect XSS failling*/
              $name=htmlspecialchars($_POST['name']);
              $detail=htmlspecialchars($_POST['detail']);
              $type=htmlspecialchars($_POST['type']);
              $model=intval(htmlspecialchars($_POST['model']));
              $sourceImg="img/".$infosfichier['basename'];

              $addVehicule= new $type(["name" => $name,"model" => $model,"detail" => $detail,"sourceImg" => $sourceImg]);
              $manager->add($addVehicule);

              $img = 'img/' . $_FILES['image']['name'];

              move_uploaded_file($_FILES['image']['tmp_name'], $img );

              $message=$img;
            }
            else {
              $message="img extension false";
            }
          }
          else {
            $message="img too heavy";
          }
        }
        else {
          $message="Error img";
        }
      }
      else {
        $message="Date false (Exemple:1999)";
      }
    }
    else {
      $message="Input empty";
    }
  }
  else {
    $message="Input dont find";
  }
}

/*
**Delete vehicule
*/
if (isset($_POST['supp']) && isset($_POST['id'])) {
  $suppVehicule=intval(htmlspecialchars($_POST['id']));
  $manager->delete($suppVehicule);
}



/*
**Get Véhicule list
**If filtring
*/
if (isset($_POST['filtre'])) {
  /*protect XSS failling*/
  $filtre=htmlspecialchars($_POST['filtre']);
}
/*if no filtre detected: default->name*/
else {
  $filtre='name';
}
/*get list */
$vehicules= $manager->getList($filtre);


/*
**Get Véhicule list
**If filtring
*/
$firstVehicules= $manager->getFirstVehicle();






require("view/listingView.php");

 ?>
