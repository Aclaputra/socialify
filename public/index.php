<?php
    include_once "../config/postgres.class.php";
    include "../config/migrate.class.php";
?>

<?php 
    $postgres = new postgres();
    $db = $postgres->getDB();
?>