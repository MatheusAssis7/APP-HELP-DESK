<?php
/*unset($_SESSION['autenticado']); ira apagar so a session desejada */
session_destroy();
header("location: index.php")
?>