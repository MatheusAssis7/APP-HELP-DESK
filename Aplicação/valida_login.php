<?php

session_start();

$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = array (1 => 'administrativo', 2 =>'usuario');
$usuarios_app = array(
    array('id' => 1, 'email' => 'adm1@teste.com.br', 'senha' => 'pk6577', 'perfil_id' => 1),
    array('id' => 2, 'email' => 'adm@2teste.com.br', 'senha' => 'A123456', 'perfil_id' => 1),
    array('id' => 3, 'email' => 'adm3@teste.com.br', 'senha' => 'pk6577', 'perfil_id' => 2),
    array('id' => 4, 'email' => 'adm4@teste.com.br', 'senha' => 'pk6577', 'perfil_id' => 2),
);

foreach ($usuarios_app as $user) {
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
        break; // Adiciona um break para sair do loop após encontrar o usuário
    }
}

if ($usuario_autenticado) {
    echo 'Usuário validado com sucesso';
    $_SESSION['autenticado'] = 'sim ';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('location: home.php');
} else {
    $_SESSION['autenticado'] = 'nâo';
    header('location: index.php?login=erro');
}
?>