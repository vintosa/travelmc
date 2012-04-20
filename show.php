<?php
  include_once("data.php");
  
  include("include/header.php");
  
  $tour = $tours[$_GET['tour']];
  var_dump($tour);
  
  include("include/footer.php");
?>