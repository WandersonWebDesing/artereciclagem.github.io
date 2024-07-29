<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Aqui você pode adicionar a lógica para enviar o e-mail

    echo "Obrigado, $name. Sua mensagem foi enviada com sucesso!";
} else {
    echo "Método de solicitação inválido.";
}
?>
