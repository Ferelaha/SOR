<?php
    include "Para_connexion.php";
    try{
        $conn = new PDO("mysql:host=$servername;dbname=soro", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connexion réussie';
    }
            
    catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>