<?php
include "connexion.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nom=$_POST['nom']
    $prenom=$_POST['prenom']
    $classe=$_POST['Cls']
    $age=$_POST['dn']
    $ecole=$_POST['ecole']
    $filiere=$_POST['fil']
    $password=$_POST['mp']

    $sql="INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `classe`, `age`, `ecole`, `filiere`, `mot de passe`) VALUES (NULL, 'SORO', 'FERELAHA', 'srit3B', '22', 'ESATIC', 'Système Réseau informatique', '123')";
}