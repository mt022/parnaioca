<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h2>Área restrita</h2>

    <?php
    if (isset($_SESSION['msg'])) {
        echo htmlspecialchars($_SESSION['msg'], ENT_QUOTES, 'UTF-8');
        unset($_SESSION['msg']);
    }
    ?>

    <form method="POST" action="valida.php">
        <label for="usuario">Usuário</label><br>
        <input type="text" name="usuario" id="usuario" placeholder="Digite o seu usuário" required>
        <br><br>

        <label for="senha">Senha</label><br>
        <input type="password" name="senha" id="senha" placeholder="Digite a sua senha" required>
        <br><br>

        <input type="submit" value="Acessar">
    </form>

    <table>
        <tr>
            
        </tr>
    </talble>
</body>
</html>


