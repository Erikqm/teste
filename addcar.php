<?php
session_start();
$prod = $_GET['proid'];

if(@$_SESSION[$prod])
  $_SESSION[$prod]++;
else
  $_SESSION[$prod] =1;


?>