<?php

session_start();

$usuario_autenticado = false;
$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@1teste.com.br', 'senha' => 'A123456'),
);

foreach ($usuarios_app as $user) {
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
        break; // Adiciona um break para sair do loop após encontrar o usuário
    }
}

if ($usuario_autenticado) {
    echo 'Usuário validado com sucesso';
    $_SESSION['autenticado'] = 'sim ';
    header('location: home.php');
} else {
    $_SESSION['autenticado'] = 'nâo';
    header('location: index.php?login=erro');
}
?>