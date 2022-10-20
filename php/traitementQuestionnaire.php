<?php
/*se connecter à la base donnée*/
require_once 'config.php';


/*vérifier si les variables $_POST existe grace à isset([nom_du_post])*/
if(isset($_POST['nomPrenom']) && isset($_POST['mail']) && isset($_POST['telephone']) && isset($_POST['votreProjet']))
{
  /*empecher les utilisateurs d'envoyer du codes nuisibles*/
  $nomPrenom = htmlspecialchars($_POST['nomPrenom']);
  $mail = htmlspecialchars($_POST['mail']);
  $telephone = htmlspecialchars($_POST['telephone']);
  $votreProjet = htmlspecialchars($_POST['votreProjet']);

  $insert = $bdd->prepare('INSERT INTO questionnaire(nomPrenom, mail, telephone, votreProjet) VALUES(:nomPrenom, :mail, :telephone, :votreProjet )');
  $insert->execute(array(
    'nomPrenom' => $nomPrenom,
    'mail' => $mail,
    'telephone' => $telephone,
    'votreProjet' => $votreProjet
  ));
}

