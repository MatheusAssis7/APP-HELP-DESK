<?php
session_start();
$titulo = str_replace('#', '-', $_POST)['Titulo'];
$categoria = str_replace('#', '-', $_POST)['Categoria'];
$desgrição = str_replace('#', '-', $_POST)['Descrição'];

$texto = $_SESSION['id'] .'#'. $titulo .'#'. $categoria .'#'. $desgrição . PHP_EOL;
//abrindo chamado
$arquivo = fopen('../incorporando_scripts/arquivo.hd', 'a');
//escrevendo chamado
fwrite($arquivo, $texto);
//fechando chamado
fclose($arquivo);
//redirecionando chamado
header('Location: ../Aplicação/abrir_chamado.php');

?>
