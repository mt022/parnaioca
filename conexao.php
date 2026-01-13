<?php
// ================= CONEXÃO =================
$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "parnaiocamateus";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Define charset
$conn->set_charset("utf8");

// ================= INSERÇÃO =================
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Evita erros caso algum campo não exista
    $nome     = $_POST['nome'] ?? '';
    $data     = $_POST['data_nascimento'] ?? '';
    $cpf      = $_POST['cpf'] ?? '';
    $email    = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $cidade   = $_POST['cidade'] ?? '';
    $estado   = $_POST['estado'] ?? '';

    $sql = "INSERT INTO cadastros 
            (nome, data_nascimento, cpf, email, telefone, cidade, estado)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param(
            "sssssss",
            $nome,
            $data,
            $cpf,
            $email,
            $telefone,
            $cidade,
            $estado
        );

        if (!$stmt->execute()) {
            echo "Erro ao inserir: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erro no prepare: " . $conn->error;
    }
}

// ================= EXCLUIR =================
if (isset($_GET['excluir'])) {
    $id = (int) $_GET['excluir']; // garante número inteiro

    $sql = "DELETE FROM cadastros WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}

// ================= LISTAGEM =================
$result = $conn->query("SELECT * FROM cadastros ORDER BY id DESC");
?>
