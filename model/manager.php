<?php
require("phpmyadmin.php");

/*
**Manager of Vehicules class
*/
class VehiculeManager{
  private $_db; // Instance de PDO

  /*
  **DDB
  */
  public function __construct($db){
    $this->setDb($db);
  }
  /*
  **Setter
  */
  public function setDb(PDO $db){
    $this->_db = $db;
  }

  /*
  **Add vehicules
  */
  public function add(Vehicule $vehicule){
    // echo $vehicule->name();
    $q = $this->_db->prepare('INSERT INTO vehicules(type, name, model, detail) VALUES(:type, :name, :model, :detail)');
    $q->execute(array(
      'type'=>$vehicule->type(),
      'name'=>$vehicule->name(),
      'model'=>$vehicule->model(),
      'detail'=>$vehicule->detail()
    ));

    $lastId=$this->_db->lastInsertId();

    $q = $this->_db->prepare('INSERT INTO imgVehicles(sourceImg,idVehicle) VALUES(:sourceImg, :idVehicle)');
    $q->execute(array(
      'sourceImg'=>$vehicule->sourceImg(),
      'idVehicle'=>$lastId
    ));

  }

  /*
  **Delete vehicul in DBB
  */
  public function delete($id){
    if (is_int($id)){
      $this->_db->query('DELETE FROM vehicules WHERE id = '.$id);
    }
  }


  /*
  **Get vehicule
  */
  public function get($info){
      if (is_int($info)){
        $q = $this->_db->query('SELECT id, name, detail, model ,type FROM vehicules WHERE id ='.$info);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
      }

      // service createVehicule
      $vehicule = createVehicule(["id" => $donnees['id'],"name" => $donnees['name'],"model" => $donnees['model'],"detail" => $donnees['detail'],"type" => $donnees['type']]);

      return $vehicule;
    }

  /*
  **Get listing
  */
  public function getList($info){
    $listVehicule = [];

    $q = $this->_db->query('SELECT id, name, detail, model ,type FROM vehicules  ORDER BY '.$info);

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){

      // service createVehicule
      $listVehicule[] = createVehicule(["id" => $donnees['id'],"name" => $donnees['name'],"model" => $donnees['model'],"detail" => $donnees['detail'],"type" => $donnees['type']]);

    }
    return $listVehicule;
  }

  /*
  **Get 5 firstVehicles
  */
  public function getFirstVehicle(){
    $firstVehicules = [];

    $q = $this->_db->query('SELECT * FROM vehicules LEFT JOIN imgVehicles ON vehicules.id=imgVehicles.idVehicle ORDER BY vehicules.id DESC LIMIT 0,5');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){

      // service createVehicule
      $firstVehicules[] = createVehicule(["id" => $donnees['id'],"name" => $donnees['name'],"model" => $donnees['model'],"detail" => $donnees['detail'],"type" => $donnees['type'],"sourceImg" => $donnees['sourceImg']]);
    }
    return $firstVehicules;
  }

  /*
  **Update vehicule
  */
  public function update(Vehicule $vehicule){
    $q = $this->_db->prepare('UPDATE vehicules SET model = :model,type = :type,name = :name,detail = :detail WHERE id = :id');

    $q->execute(array(
      'id'=>$vehicule->id(),
      'model'=>$vehicule->model(),
      'type'=>$vehicule->type(),
      'detail'=>$vehicule->detail(),
      'name'=>$vehicule->name()
    ));
  }

  /*
  **Count of vehiculs
  */
  public function count(){
    $q = $this->_db->query('SELECT COUNT(*) FROM vehicules')->fetchColumn();
    return $q;
  }


} ?>
