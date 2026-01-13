<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro | Parnaioca Mateus</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            min-height: 100vh;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 40px;
            justify-content: center;
            align-items: center;
            background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        form {
            width: 100%;
            max-width: 450px;
            padding: 35px 30px;
            border-radius: 20px;
            background: rgba(0, 0, 0, 0.55);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        }

        h2 {
            margin-bottom: 30px;
            text-align: center;
            font-size: 1.8rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            background: linear-gradient(90deg, #ff7e5f, #feb47b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .input-group {
            position: relative;
            margin-bottom: 18px;
        }

        .input-group input {
            width: 100%;
            padding: 14px 14px 14px 42px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-size: 14px;
            outline: none;
        }

        input[type="date"] {
            color-scheme: dark;
        }

        .input-group i {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
            font-size: 18px;
            color: #feb47b;
        }

        .input-group label {
            position: absolute;
            top: 50%;
            left: 42px;
            transform: translateY(-50%);
            font-size: 14px;
            color: #ddd;
            pointer-events: none;
            transition: 0.3s;
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label {
            top: -8px;
            left: 14px;
            font-size: 12px;
            padding: 0 6px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 6px;
            color: #feb47b;
        }

        button {
            width: 100%;
            margin-top: 10px;
            padding: 14px;
            border-radius: 25px;
            border: none;
            background: linear-gradient(90deg, #ff7e5f, #feb47b);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
        }

        .dashboard {
            width: 100%;
            max-width: 800px;
            background: rgba(0,0,0,0.6);
            padding: 30px;
            border-radius: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            text-align: left;
        }

        th {
            color: #feb47b;
        }
    </style>
</head>

<body>

<form method="POST" action="">
    <h2>Cadastro Parnaioca</h2>

    <div class="input-group">
        <i class="material-icons">person</i>
        <input type="text" name="nome" placeholder=" " required>
        <label>Nome</label>
    </div>

    <div class="input-group">
        <i class="material-icons">calendar_today</i>
        <input type="date" name="data_nascimento" placeholder=" " required>
        <label>Data de Nascimento</label>
    </div>

    <div class="input-group">
        <i class="material-icons">badge</i>
        <input type="text" name="cpf" placeholder=" " required>
        <label>CPF</label>
    </div>

    <div class="input-group">
        <i class="material-icons">email</i>
        <input type="email" name="email" placeholder=" " required>
        <label>Email</label>
    </div>

    <div class="input-group">
        <i class="material-icons">phone</i>
        <input type="text" name="telefone" placeholder=" ">
        <label>Telefone</label>
    </div>

    <div class="input-group">
        <i class="material-icons">map</i>
        <input type="text" name="estado" placeholder=" ">
        <label>Estado</label>
    </div>

    <div class="input-group">
        <i class="material-icons">location_city</i>
        <input type="text" name="cidade" placeholder=" ">
        <label>Cidade</label>
    </div>

    <button type="submit">Cadastrar</button>
</form>

<!-- DASHBOARD -->
<div class="dashboard">
    <h2>Acesso aos Cadastros</h2>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Excluir</th>
            </tr>
        </thead>

        <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['nome']) ?></td>
                <td><?= htmlspecialchars($row['data_nascimento']) ?></td>
                <td><?= htmlspecialchars($row['cpf']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['telefone']) ?></td>
                <td><?= htmlspecialchars($row['cidade']) ?></td>
                <td><?= htmlspecialchars($row['estado']) ?></td>
                <td>
                    <a href="?excluir=<?= $row['id'] ?>" 
                       onclick="return confirm('Deseja excluir?')">
                       Excluir
                    </a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>