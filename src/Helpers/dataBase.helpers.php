<?php

namespace Helpers;
use PDO;

function getDatabaseConnection() {
    $bdd = new PDO('mysql:host=127.0.0.1:3308;dbname=conception;charset=utf8','root','');
    return $bdd;
}


?>