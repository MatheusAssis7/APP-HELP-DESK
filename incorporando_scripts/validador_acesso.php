<?php
session_start();

if(!isset($_SESSIOn['autenticado']) || $_SESSION['autenticado' != 'sim']){
  header('location: index.php?login=erro2');
}
?>