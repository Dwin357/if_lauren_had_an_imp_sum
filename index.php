<?php
// this doesn't seem to work b/c the server is expecting 'localhost/app'/xyz and is instead getting "/var/www/app"/xyz
  define("ROOTPATH", dirname(__FILE__));
  define("LAYOUT", ROOTPATH.'/source/views/application_layout.php');
  $title = "some title";
  $content = "just a little bit";
  // include 'config.php';
  include LAYOUT;
?>