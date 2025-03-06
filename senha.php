<?php
define("SENHA", "Duque2025");
define("USUARIO", "admin@sistema.com.br");

// Inicializa as variáveis de e-mail e senha
$email = "";
$senha = "";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica as credenciais
    if ($email == USUARIO && $senha == SENHA) {
        echo("Você está logado como $email");
    } else {
        echo("Credenciais inválidas.");
    }
} else {
    echo("Erro: O formulário não foi enviado corretamente.");
}
?>