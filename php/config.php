<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=fhcn0606_soCallMedia ;charset=utf8', 'fhcn0606' ,hash('sha256','fMeE-5GqV-k3k@'));
}catch (Exception $e){
  die('Erreur'.$e->getMessage());
}
