<?php

try {
    $bdd = new PDO('oci:dbname=localhost/XE', 'sys', 'Mourad123__'); // changer password avec password compte oracle
}
catch(Exception $e)
{
	die('Echec de connexion à la base de donnée : '.$e->getMessage());
}

?>