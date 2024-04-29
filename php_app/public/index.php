<?php

include_once "../config/postgres.class.php";

phpinfo();

echo "hello there post";
$postgres = new postgres();
$db = $postgres->getDB();
