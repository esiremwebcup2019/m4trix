<?php
require_once __DIR__.'/class/Database.php';


if($_SERVER['REQUEST_METHOD'] == 'GET'){

	require __DIR__.'/../template/form_reservation.html';

}else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$myDB=new Db();
	$db=$myDB->getBase();

	$nom = $_POST['name'];
  $prenom = $_POST['surname'];
  $dateEvent = $_POST['date'];
  $demande = $_POST['specialDemande'];
  $invite = $_POST['invite'] ;
  $telephone = $_POST['phone'];
  $mail = $_POST['email'];
  $dateDebut =$_POST['dateFrom'];
  $dateFin =$_POST['dateFin'];

	$data=[$nom,$prenom,$demande,$invite,$telephone,$mail,$dateDebut,$dateFin];


	$db->prepare("INSERT INTO reservations VALUES (NULL,?,?,?,?,?,?,?,?)")->execute($data);
	$_SESSION['status']=1;
	header('Location: /');
}

?>
