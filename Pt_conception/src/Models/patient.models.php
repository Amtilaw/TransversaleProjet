<?php

namespace Models;
use function Helpers\getDatabaseConnection;

function setPatient(){

    if (isset($_POST['inspatient'])){
        echo 'bonjour';
        $id= $_POST['id'];
        $noms= $_POST['nomprenom'];
        $datenaiss= $_POST['dateNaiss'];
        $adresse= $_POST['adresse'];
        $ville= $_POST['ville'];
        $telephone= $_POST['telephone'];
    
        $bdd = getDatabaseConnection();
        $query = $bdd->prepare("insert into patient values('".$id."', '".$nomprenom."', '".$dateNais."', '".$adresse."','".$ville."', '".$telephone."');");
        $query->execute();
        $results = $query->fetchAll();
        return $results;
    }
}