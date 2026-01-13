<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Acomodações</title>

    <style>
        .tipo-btn {
            display: inline-block;
            padding: 12px 20px;
            margin: 5px;
            text-decoration: none;
            background-color: #ddd;
            color: #000;
            border-radius: 5px;
            cursor: pointer;
        }

        .tipo-btn:hover {
            background-color: #a5e01bff;
            color: #fff;
        }
    </style>
</head>
<body>

<h2>Cadastro de Acomodações</h2>

<label for="nome">Como gostaria de ser chamado:</label>
<input type="text" id="nome" name="nome" placeholder="Digite seu nome">

<br><br>

<label>Escolha o tipo de acomodação:</label>
<div>
    <a href="suite.php" class="tipo-btn">Suíte</a>
    <a href="quartos.php" class="tipo-btn">Apartamento</a>
</div>

</body>
</html>
