<?php
require "../vendor/autoload.php";

use Carbon\Carbon;

include_once "../config/postgres.class.php";
?>

  <?php
  $postgres = new postgres();
  $db = $postgres->getDB();

  $JakartaNow = Carbon::now('Asia/Jakarta');
  echo $JakartaNow;
  ?>
