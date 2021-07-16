<?php 

  setcookie('login', '', time()-3600*24*7, "/"); 
  unset($_COOKIE['login']);
  echo true;
?>