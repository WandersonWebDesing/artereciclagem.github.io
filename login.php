<?php
session_start();
require 'db.php'; // Inclua seu arquivo de conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: dashboard.php');
        exit;
    } else {
        $error_message = "Credenciais inválidas!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .login-container img {
            display: block;
            margin: 0 auto 1.5rem;
            max-width: 150px; /* Ajuste o tamanho máximo da logo conforme necessário */
        }
        .login-container h2 {
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            color: #00796b;
            text-align: center;
        }
        .login-container .form-label {
            color: #004d40;
        }
        .login-container .btn-primary {
            background-color: #00796b;
            border: none;
            transition: background-color 0.3s;
        }
        .login-container .btn-primary:hover {
            background-color: #004d40;
        }
        .login-container .btn-secondary {
            background-color: #f0f2f5;
            border: 1px solid #ced4da;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .login-container .btn-secondary:hover {
            background-color: #e0e0e0;
            border-color: #b0b0b0;
        }
        .alert {
            margin-top: 1rem;
        }
        .login-footer {
            margin-top: 1rem;
            text-align: center;
        }
        .login-footer a {
            color: #00796b;
            text-decoration: none;
        }
        .login-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Logo do Projeto -->
        <img src="imagens/logo.jpg" alt="Logo do Projeto">
        
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <?php if (isset($error_message)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo htmlspecialchars($error_message); ?>
                </div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="username" class="form-label">Nome de Usuário</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <div class="login-footer">
            <a href="index.php" class="btn btn-secondary">Voltar à Página Inicial</a>
            <br>
            <a href="register.php" class="btn btn-secondary">Cadastrar-se</a>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
